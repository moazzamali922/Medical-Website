<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.logoflex.co.uk'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@logoflex.co.uk'; 
    $mail->Password   = 'Default@123'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('noreply@logoflex.co.uk', 'Mailer');
    $mail->addAddress('moaziii922@gmail.com', 'Moazzam Ali.'); 

    // Collect form data
    $full_name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate required fields
    if (empty($full_name) || empty($email) || empty($message)) {
        throw new Exception('Please fill in all required fields.');
    }

    // Prepare email body
    $mail->isHTML(true);
    $mail->Subject = 'Contact Details Submission';

    $bodyContent = '<h1>Contact Details Submission</h1>';
    $bodyContent .= "<p><strong>Full Name:</strong> $full_name</p>";
    $bodyContent .= "<p><strong>Email:</strong> $email</p>";
    $bodyContent .= "<p><strong>Phone:</strong> $phone</p>";
    $bodyContent .= "<p><strong>Message:</strong> $message</p>";

    $mail->Body = $bodyContent;

    // Send email
    $mail->send();

    // Redirect to thank you page
    header('Location: ../index.php');
} catch (Exception $e) {
    // Handle exceptions
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
