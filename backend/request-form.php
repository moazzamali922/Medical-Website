<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['requestname'] ?? '';
    $email = $_POST['requestemail'] ?? '';
    $phone = $_POST['requestphone'] ?? '';
    $service = $_POST['requestservice'] ?? '';
    $date = $_POST['requestdate'] ?? '';       
    $time = $_POST['requesttime'] ?? '';

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
        $mail->addAddress('moaziii922@gmail.com', 'Moazzam Ali');

        // Prepare email body
        $mail->isHTML(true);
        $mail->Subject = 'Request Form Submission';

        $bodyContent = '<h1>Request Form Submission Details</h1>';
        $bodyContent .= "<p><strong>Full Name:</strong> $name</p>";
        $bodyContent .= "<p><strong>Email:</strong> $email</p>";
        $bodyContent .= "<p><strong>Phone:</strong> $phone</p>";
        $bodyContent .= "<p><strong>Service Requested:</strong> $service</p>";
        $bodyContent .= "<p><strong>Preferred Date:</strong> $date</p>";
        $bodyContent .= "<p><strong>Preferred Time:</strong> $time</p>";

        $mail->Body = $bodyContent;

        // Send email
        $mail->send();

        // Redirect to thank you page
        header('Location: ../index.php');
        exit;
    } catch (Exception $e) {
        // Handle exceptions
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
