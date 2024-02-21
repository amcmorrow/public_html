<?php
ob_start(); // Start buffering output
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'andrew.michael.mcmorrow@gmail.com';
    $mail->Password = 'ubcz jswy wypw idvb'; // Use an app-specific password if 2FA is enabled
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Or PHPMailer::ENCRYPTION_SMTPS for SSL
    $mail->Port = 587; // Or 465 for SSL

    if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $email = $_POST['email']; // Consider sanitizing this input
        $subject = $_POST['subject']; // Consider sanitizing this input
        $message = $_POST['message']; // Consider sanitizing this input

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message); // For non-HTML mail clients, strip HTML tags

        // Recipients
        $mail->setFrom('info@amcmorrow.com', 'Mailer');
        $mail->addAddress('amcmorrow84@gmail.com', 'Andy McMorrow'); // Add a recipient
        $mail->addAddress($email); // Optionally add the sender as a recipient

        $mail->send();
        
        // Redirect to 'thank-you.php' upon successful sending
        header('Location: thank-you.php?success=true');
        exit; // Ensure script stops executing after redirect
    }
} catch (Exception $e) {
    header('Location: thank-you.php?success=false');
}
ob_end_flush();