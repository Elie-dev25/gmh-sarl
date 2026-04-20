<?php
// Skip execution during PHPUnit coverage analysis
if (defined('PHPUNIT_RUNNING')) { return; }

session_start();
include_once __DIR__ . '/../config/security.php';
include_once __DIR__ . '/../config/env.php';

// Load environment variables
Env::load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify CSRF token
    if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
        http_response_code(403);
        echo "Invalid security token. Please refresh the page and try again.";
        exit();
    }
    
    // Rate limiting for contact form
    if (isRateLimited($_SERVER['REMOTE_ADDR'], 'contact')) {
        http_response_code(429);
        echo "Too many requests. Please try again later.";
        exit();
    }
    
    // Retrieve and validate form data
    $name = trim($_POST['cname'] ?? '');
    $email = filter_var(trim($_POST['cemail'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['cphone'] ?? '');
    $subject = trim($_POST['csubject'] ?? '');
    $message = trim($_POST['cmessage'] ?? '');
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        http_response_code(400);
        echo "All required fields must be filled.";
        exit();
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format.";
        exit();
    }
    
    // Sanitize all inputs for display (prevent XSS)
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    
    // Validate message length (prevent spam)
    if (strlen($message) > 5000) {
        http_response_code(400);
        echo "Message is too long. Maximum 5000 characters.";
        exit();
    }

    // Email details - use environment variable for recipient
    $to = Env::get('CONTACT_EMAIL', 'simsiewe@gmh-sarl.com');
    $subject_mail = "Nouveau message de contact: " . $subject;
    
    // Secure headers - prevent email header injection
    $safe_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$safe_email) {
        http_response_code(400);
        echo "Invalid email address.";
        exit();
    }
    
    $headers = "From: noreply@gmh-sarl.com\r\n";
    $headers .= "Reply-To: " . $safe_email . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Email body
    $body = "<html><body>";
    $body .= "<h2>Nouveau message de contact</h2>";
    $body .= "<p><strong>Nom:</strong> {$name}</p>";
    $body .= "<p><strong>Email:</strong> {$email}</p>";
    $body .= "<p><strong>Telephone:</strong> {$phone}</p>";
    $body .= "<p><strong>Objet:</strong> {$subject}</p>";
    $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
    $body .= "<hr><p><small>IP: " . htmlspecialchars($_SERVER['REMOTE_ADDR']) . " | Date: " . date('Y-m-d H:i:s') . "</small></p>";
    $body .= "</body></html>";

    // Send email
    if (mail($to, $subject_mail, $body, $headers)) {
        error_log("Contact form submitted from: " . $email);
        echo "Votre message a été envoyé avec succès.";
    } else {
        error_log("Contact form email failed from: " . $email);
        echo "Erreur lors de l'envoi de votre message. Veuillez réessayer.";
    }
}
?>
