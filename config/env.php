<?php
/**
 * Environment Configuration Loader
 * Loads environment variables from .env file
 */

class Env
{
    private static $loaded = false;
    private static $variables = [];

    /**
     * Load environment variables from .env file
     */
    public static function load($path = null)
    {
        if (self::$loaded) {
            return;
        }

        if ($path === null) {
            $path = dirname(__DIR__) . '/.env';
        }

        if (!file_exists($path)) {
            // In production, rely on system environment variables
            self::$loaded = true;
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        foreach ($lines as $line) {
            // Skip comments
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            // Parse key=value
            if (strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value);
                
                // Remove quotes if present
                $value = trim($value, '"\'');
                
                self::$variables[$key] = $value;
                
                // Also set as environment variable
                if (!getenv($key)) {
                    putenv("$key=$value");
                }
            }
        }

        self::$loaded = true;
    }

    /**
     * Get an environment variable
     * 
     * @param string $key The variable name
     * @param mixed $default Default value if not found
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        self::load();

        // First check system environment
        $value = getenv($key);
        if ($value !== false) {
            return $value;
        }

        // Then check loaded variables
        if (isset(self::$variables[$key])) {
            return self::$variables[$key];
        }

        return $default;
    }

    /**
     * Check if an environment variable exists
     * 
     * @param string $key The variable name
     * @return bool
     */
    public static function has($key)
    {
        self::load();
        return getenv($key) !== false || isset(self::$variables[$key]);
    }

    /**
     * Get a required environment variable (throws exception if not found)
     * 
     * @param string $key The variable name
     * @return string
     * @throws Exception
     */
    public static function require($key)
    {
        $value = self::get($key);
        
        if ($value === null) {
            throw new Exception("Required environment variable '$key' is not set. Please check your .env file.");
        }
        
        return $value;
    }
}
?>
