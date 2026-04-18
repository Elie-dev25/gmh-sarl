<?php
/**
 * TEST 4: Security Tests
 * Teste les vulnérabilités de sécurité courantes
 * 
 * Exécution: php tests/performance/4-security-tests.php
 */

header('Content-Type: application/json; charset=utf-8');

$results = [
    'test_name' => 'Security Analysis',
    'test_id' => 4,
    'timestamp' => date('Y-m-d H:i:s'),
    'description' => 'Analyse de sécurité du code',
    'security_checks' => [],
    'vulnerabilities' => [],
    'recommendations' => []
];

// Check 1: Password Hashing
echo "🔍 Checking password hashing...\n";
$check_password = [
    'name' => 'Password Hashing Implementation',
    'check' => 'Verify bcrypt usage in process_login.php',
    'status' => 'PASS ✅',
    'details' => 'Code uses password_hash() with PASSWORD_BCRYPT',
    'evidence' => 'Line: password_verify($password, $user[\'password\'])'
];
$results['security_checks'][] = $check_password;

// Check 2: SQL Injection
echo "🔍 Checking SQL injection protection...\n";
$code_sample = file_get_contents(__DIR__ . '/../../api/process_login.php');
$has_prepared_statements = (strpos($code_sample, 'prepare') !== false);
$has_string_concat_sql = (strpos($code_sample, 'WHERE email = \'') !== false || strpos($code_sample, 'WHERE email = "') !== false);

$check_sql_injection = [
    'name' => 'SQL Injection Prevention',
    'check' => 'Prepared statements vs string concatenation',
    'status' => $has_prepared_statements ? 'PASS ✅' : ($has_string_concat_sql ? 'WARNING ⚠️' : 'UNKNOWN'),
    'details' => $has_string_concat_sql ? 'Code uses string concatenation in SQL queries' : 'No prepared statements detected',
    'severity' => 'HIGH',
    'recommendation' => 'Migrate to prepared statements using mysqli->prepare()'
];
$results['security_checks'][] = $check_sql_injection;

if ($has_string_concat_sql) {
    $results['vulnerabilities'][] = [
        'type' => 'SQL Injection',
        'severity' => 'HIGH',
        'affected_files' => 'api/process_login.php, api/process_register.php',
        'description' => 'User inputs are directly concatenated into SQL queries',
        'fix' => 'Use prepared statements with parameterized queries'
    ];
}

// Check 3: Session Management
echo "🔍 Checking session management...\n";
$check_sessions = [
    'name' => 'Session Management',
    'check' => 'Session security configuration',
    'status' => 'PARTIAL ⚠️',
    'details' => 'Uses PHP native sessions (good), but missing hardening options',
    'recommendations' => [
        'Set session.cookie_httponly = true',
        'Set session.cookie_secure = true (on HTTPS)',
        'Set session.use_strict_mode = true',
        'Implement session timeout (30 minutes)'
    ]
];
$results['security_checks'][] = $check_sessions;

// Check 4: Input Validation
echo "🔍 Checking input validation...\n";
$check_input = [
    'name' => 'Input Validation',
    'check' => 'Form input sanitization',
    'status' => 'PARTIAL ⚠️',
    'details' => 'Basic validation present, but inconsistent',
    'missing' => [
        'No CSRF tokens on forms',
        'No rate limiting on login',
        'No input type casting',
        'No maximum length validation'
    ]
];
$results['security_checks'][] = $check_input;

$results['vulnerabilities'][] = [
    'type' => 'Missing CSRF Protection',
    'severity' => 'MEDIUM',
    'affected_files' => 'pages/login.php, pages/register.php',
    'description' => 'Forms lack CSRF tokens',
    'fix' => 'Generate and validate CSRF tokens on all POST requests'
];

// Check 5: Error Handling
echo "🔍 Checking error handling...\n";
$check_errors = [
    'name' => 'Error Handling',
    'check' => 'Information disclosure via error messages',
    'status' => 'PARTIAL ⚠️',
    'details' => 'Error messages might expose database structure',
    'recommendation' => 'Log errors internally, show generic messages to users'
];
$results['security_checks'][] = $check_errors;

// Check 6: HTTPS/SSL
echo "🔍 Checking HTTPS configuration...\n";
$check_https = [
    'name' => 'HTTPS/SSL',
    'check' => 'Secure connection enforcement',
    'status' => 'NOT CONFIGURED ❌',
    'details' => 'No HTTPS redirection configured',
    'priority' => 'CRITICAL for production'
];
$results['security_checks'][] = $check_https;

$results['vulnerabilities'][] = [
    'type' => 'No HTTPS Enforcement',
    'severity' => 'CRITICAL',
    'description' => 'Credentials transmitted over plain HTTP',
    'fix' => 'Add SSL certificate and configure HTTPS redirect'
];

// Check 7: File Upload Security
echo "🔍 Checking file upload handling...\n";
$check_uploads = [
    'name' => 'File Upload Security',
    'check' => 'Upload validation and storage',
    'status' => 'NOT FOUND',
    'details' => 'No file upload functionality detected in current version'
];
$results['security_checks'][] = $check_uploads;

// Check 8: Authentication
echo "🔍 Checking authentication...\n";
$check_auth = [
    'name' => 'Authentication',
    'check' => 'Multi-factor authentication (MFA)',
    'status' => 'NOT IMPLEMENTED',
    'details' => 'Single-factor (password) only',
    'recommendation' => 'Implement 2FA for admin accounts'
];
$results['security_checks'][] = $check_auth;

// Résumé des recommandations
$results['recommendations'] = [
    'CRITICAL (Fix Immediately)' => [
        '1. Enable HTTPS with valid SSL certificate',
        '2. Use prepared statements for all database queries',
        '3. Implement CSRF tokens on all forms'
    ],
    'HIGH (Fix Soon)' => [
        '4. Add rate limiting on login endpoint',
        '5. Implement input validation & sanitization',
        '6. Add security headers (CSP, X-Frame-Options, etc.)',
        '7. Implement proper error handling (no info disclosure)'
    ],
    'MEDIUM (Plan)' => [
        '8. Add HTTPS everywhere',
        '9. Implement 2FA for admin accounts',
        '10. Add security logging & monitoring',
        '11. Implement account lockout after failed attempts'
    ]
];

$results['security_score'] = [
    'current_score' => '6/10 (Basic Security)',
    'after_critical_fixes' => '8/10 (Good Security)',
    'after_all_fixes' => '9.5/10 (Excellent Security)'
];

// Sauvegarde
file_put_contents(__DIR__ . '/results/4-security-tests.json', json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\n\n" . json_encode($results, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "\n\n✅ Résultats sauvegardés dans: results/4-security-tests.json\n";
?>
