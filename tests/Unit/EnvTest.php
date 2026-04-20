<?php
/**
 * Environment Configuration Loader Tests
 */

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../config/env.php';

class EnvTest extends TestCase
{
    private $testEnvFile;

    protected function setUp(): void
    {
        $this->testEnvFile = sys_get_temp_dir() . '/test.env';
        file_put_contents($this->testEnvFile, 
            "# This is a comment\n" .
            "DB_HOST=localhost\n" .
            "DB_USER=\"testuser\"\n" .
            "DB_PASS='testpass'\n" .
            "APP_NAME=GMH\n" .
            "\n"
        );
        
        // Reset Env class state via reflection
        $reflection = new ReflectionClass('Env');
        $loaded = $reflection->getProperty('loaded');
        $loaded->setAccessible(true);
        $loaded->setValue(null, false);
        
        $variables = $reflection->getProperty('variables');
        $variables->setAccessible(true);
        $variables->setValue(null, []);
    }

    protected function tearDown(): void
    {
        if (file_exists($this->testEnvFile)) {
            unlink($this->testEnvFile);
        }
    }

    public function testLoadFromFile()
    {
        Env::load($this->testEnvFile);
        
        $this->assertEquals('localhost', Env::get('DB_HOST'));
        $this->assertEquals('testuser', Env::get('DB_USER'));
        $this->assertEquals('testpass', Env::get('DB_PASS'));
        $this->assertEquals('GMH', Env::get('APP_NAME'));
    }

    public function testLoadNonExistentFile()
    {
        Env::load('/nonexistent/path/.env');
        
        // Should not throw, just return
        $this->assertNull(Env::get('NON_EXISTENT_KEY'));
    }

    public function testGetWithDefault()
    {
        Env::load($this->testEnvFile);
        
        $this->assertEquals('default_value', Env::get('MISSING_KEY', 'default_value'));
    }

    public function testHasKey()
    {
        Env::load($this->testEnvFile);
        
        $this->assertTrue(Env::has('DB_HOST'));
        $this->assertFalse(Env::has('NONEXISTENT_KEY_12345'));
    }

    public function testCommentsAreIgnored()
    {
        Env::load($this->testEnvFile);
        
        $this->assertNull(Env::get('This is a comment'));
    }

    public function testQuotesAreStripped()
    {
        Env::load($this->testEnvFile);
        
        $value = Env::get('DB_USER');
        $this->assertStringNotContainsString('"', $value);
        
        $value = Env::get('DB_PASS');
        $this->assertStringNotContainsString("'", $value);
    }

    public function testRequireExisting()
    {
        Env::load($this->testEnvFile);
        
        $value = Env::require('DB_HOST');
        $this->assertEquals('localhost', $value);
    }

    public function testRequireMissingThrows()
    {
        Env::load($this->testEnvFile);
        
        $this->expectException(Exception::class);
        Env::require('NONEXISTENT_KEY_REQUIRED');
    }

    public function testLoadOnlyOnce()
    {
        Env::load($this->testEnvFile);
        $firstValue = Env::get('DB_HOST');
        
        // Modify file
        file_put_contents($this->testEnvFile, "DB_HOST=changed\n");
        
        // Load again - should not reload
        Env::load($this->testEnvFile);
        $secondValue = Env::get('DB_HOST');
        
        $this->assertEquals($firstValue, $secondValue);
    }
}
