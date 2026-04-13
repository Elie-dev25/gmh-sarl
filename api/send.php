<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['cname']);
    $email = htmlspecialchars($_POST['cemail']);
    $phone = htmlspecialchars($_POST['cphone']);
    $subject = htmlspecialchars($_POST['csubject']);
    $message = htmlspecialchars($_POST['cmessage']);

    // Email details
    $to = "simsiewe@gmh-sarl.com";
    $subject_mail = "Nouveau message de contact: " . $subject;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Email body
    $body = "<html><body>";
    $body .= "<h2>Nouveau message de contact</h2>";
    $body .= "<p><strong>Nom:</strong> {$name}</p>";
    $body .= "<p><strong>Email:</strong> {$email}</p>";
    $body .= "<p><strong>Telephone:</strong> {$phone}</p>";
    $body .= "<p><strong>Objet:</strong> {$subject}</p>";
    $body .= "<p><strong>Message:</strong><br>{$message}</p>";
    $body .= "</body></html>";

    // Send email
    if (mail($to, $subject_mail, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi de votre message. Veuillez réessayer.";
    }
}
?>
