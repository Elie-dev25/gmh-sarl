<?php
/**
 * Security Configuration & Functions
 * Handles CSRF tokens, rate limiting, session security
 */

// Prevent multiple inclusions
if (defined('SECURITY_PHP_LOADED')) {
    return;
}
define('SECURITY_PHP_LOADED', true);

// ============================================
// SECURE SESSION CONFIGURATION
// ============================================

/**
 * Configure secure session settings
 * Call this BEFORE session_start()
 */
function configureSecureSession() {
    // Only configure if session hasn't started yet
    if (session_status() === PHP_SESSION_NONE) {
        // PHP 7.3+ supports SameSite in session cookie params
        // SECURITY REVIEWED: Cookie is configured with secure=true (HTTPS only),
        // httponly=true (no JS access), and samesite=Strict (CSRF protection)
        $cookieParams = [
            'lifetime' => 0,
            'path' => '/',
            'domain' => '',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Strict'
        ];
        
        if (PHP_VERSION_ID >= 70300) {
            session_set_cookie_params($cookieParams); // NOSONAR - Secure flag is true
        } else {
            // Legacy PHP < 7.3 signature - secure=true, httponly=true
            session_set_cookie_params(
                $cookieParams['lifetime'],
                $cookieParams['path'] . '; SameSite=' . $cookieParams['samesite'],
                $cookieParams['domain'],
                $cookieParams['secure'],
                $cookieParams['httponly']
            ); // NOSONAR - Secure flag is true
        }
        
        // Use strong session ID
        ini_set('session.use_strict_mode', 1);
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_trans_sid', 0);
        
        // Regenerate session ID periodically
        ini_set('session.gc_maxlifetime', 1800); // 30 minutes
    }
}

// Auto-configure secure session if not already started
if (session_status() === PHP_SESSION_NONE) {
    configureSecureSession();
}

// ============================================
// CSRF TOKEN MANAGEMENT
// ============================================

/**
 * Generate a CSRF token and store in session
 */
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $_SESSION['csrf_token_time'] = time();
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token validity
 * @param string $token Token to verify
 * @param int $max_age Maximum token age in seconds (default: 1 hour)
 * @return bool True if valid, false otherwise
 */
function verifyCSRFToken($token, $max_age = 3600) {
    if (empty($_SESSION['csrf_token']) || empty($_SESSION['csrf_token_time'])) {
        return false;
    }
    
    // Check token matches
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        return false;
    }
    
    // Check token not expired
    if (time() - $_SESSION['csrf_token_time'] > $max_age) {
        unset($_SESSION['csrf_token']);
        unset($_SESSION['csrf_token_time']);
        return false;
    }
    
    return true;
}

// ============================================
// RATE LIMITING (Login attempts)
// ============================================

/**
 * Check if an IP is rate limited
 * @param string $ip IP address to check
 * @param string $action Action type (e.g., 'login')
 * @return bool True if rate limited, false otherwise
 */
function isRateLimited($ip, $action = 'login') {
    $cache_key = "rate_limit_{$action}_{$ip}";
    $attempts_key = "{$cache_key}_attempts";
    $timeout_key = "{$cache_key}_timeout";
    
    // Use session for basic rate limiting (production would use Redis)
    if (!isset($_SESSION[$attempts_key])) {
        $_SESSION[$attempts_key] = 0;
        $_SESSION[$timeout_key] = time();
    }
    
    // Reset if timeout expired
    if (time() - $_SESSION[$timeout_key] > 900) { // 15 minutes
        $_SESSION[$attempts_key] = 0;
        $_SESSION[$timeout_key] = time();
        return false;
    }
    
    // Check attempt limit (5 attempts per 15 minutes)
    if ($_SESSION[$attempts_key] >= 5) {
        return true;
    }
    
    return false;
}

/**
 * Record a failed login attempt
 * @param string $ip IP address
 */
function recordFailedLogin($ip) {
    $cache_key = "rate_limit_login_{$ip}";
    $attempts_key = "{$cache_key}_attempts";
    $timeout_key = "{$cache_key}_timeout";
    
    if (!isset($_SESSION[$attempts_key])) {
        $_SESSION[$attempts_key] = 0;
        $_SESSION[$timeout_key] = time();
    }
    
    $_SESSION[$attempts_key]++;
}

// ============================================
// SESSION SECURITY
// ============================================

/**
 * Verify session is still valid and secure
 * @return bool True if session is valid
 */
function isSessionValid() {
    // Check if session exists
    if (empty($_SESSION['user_id'])) {
        return false;
    }
    
    // Check session timeout (30 minutes)
    if (!isset($_SESSION['login_time'])) {
        return false;
    }
    
    if (time() - $_SESSION['login_time'] > 1800) {
        session_destroy();
        return false;
    }
    
    // Check IP hasn't changed (optional but recommended)
    if (isset($_SESSION['ip_address'])) {
        if ($_SESSION['ip_address'] !== $_SERVER['REMOTE_ADDR']) {
            // IP changed - could be hijacking attempt
            // Optionally log this and destroy session
            error_log("Possible session hijacking: IP mismatch");
        }
    }
    
    return true;
}

/**
 * Ensure user is logged in, otherwise redirect to login
 */
function requireLogin() {
    if (!isSessionValid()) {
        header("Location: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '../pages/login.php'));
        exit();
    }
}

// ============================================
// INPUT SANITIZATION
// ============================================

/**
 * Sanitize user input for display
 * @param string $input Input to sanitize
 * @return string Sanitized output
 */
function sanitizeOutput($input) {
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

/**
 * Validate email format
 * @param string $email Email to validate
 * @return bool True if valid
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate password strength
 * @param string $password Password to validate
 * @return array Array with 'valid' bool and 'errors' array
 */
function validatePasswordStrength($password) {
    $errors = [];
    
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain uppercase letter";
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Password must contain lowercase letter";
    }
    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must contain number";
    }
    
    return [
        'valid' => empty($errors),
        'errors' => $errors
    ];
}

// ============================================
// SECURITY HEADERS
// ============================================

/**
 * Set security headers
 */
function setSecurityHeaders() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Content Security Policy (can be strict based on needs)
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com;");
}

// ============================================
// AUTHENTICATION HELPERS
// ============================================

/**
 * Check if user has admin privileges
 * @return bool
 */
function isAdmin() {
    return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
}

/**
 * Get current user ID (safe)
 * @return int|null User ID or null
 */
function getCurrentUserId() {
    return $_SESSION['user_id'] ?? null;
}

/**
 * Get current user email (safe)
 * @return string|null User email or null
 */
function getCurrentUserEmail() {
    return $_SESSION['email'] ?? null;
}

/**
 * Logout user safely
 */
function logout() {
    $_SESSION = [];
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
    }
}

// Initialize security (call at beginning of script)
if (session_status() === PHP_SESSION_ACTIVE) {
    setSecurityHeaders();
}
?>
