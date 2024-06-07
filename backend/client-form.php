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
    $full_name = $_POST['full-name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $degree = $_POST['degree'] ?? '';
    $institution = $_POST['institution'] ?? '';
    $certifications = $_POST['certifications'] ?? '';
    $job_position = $_POST['job-position'] ?? '';
    $responsibilities = $_POST['responsibilities'] ?? '';
    $duration = $_POST['duration'] ?? '';
    $technical_skills = $_POST['technical-skills'] ?? '';
    $soft_skills = $_POST['soft-skills'] ?? '';
    $languages = $_POST['languages'] ?? '';
    $career_objectives = $_POST['career-objectives'] ?? '';
    $reference_name = $_POST['reference-name'] ?? '';
    $reference_email = $_POST['reference-email'] ?? '';
    $reference_phone = $_POST['reference-phone'] ?? '';
    $additional_info = $_POST['additional-info'] ?? '';

    // Handle CV file upload
    if (!empty($_FILES['cv-file']['name'])) {
        // Loop through each uploaded file
        for ($i = 0; $i < count($_FILES['cv-file']['name']); $i++) {
            // Get the file details
            $file_name = $_FILES['cv-file']['name'][$i];
            $file_tmp = $_FILES['cv-file']['tmp_name'][$i];
            $file_type = $_FILES['cv-file']['type'][$i];
            
            // Read the file contents
            $file_content = file_get_contents($file_tmp);
            
            // Add the CV as an embedded attachment
            $cid = $mail->addStringEmbeddedImage($file_content, $file_name, $file_name, 'base64', $file_type);
            
            // Embed the CV into the email body
            $mail->Body .= '<img src="cid:' . $cid . '">';
        }
    }

    // Prepare email body
    $mail->isHTML(true);
    $mail->Subject = 'Client Form Submission';

    $bodyContent = '<h1>Client Form Submission Details</h1>';
    $bodyContent .= "<p><strong>Full Name:</strong> $full_name</p>";
    $bodyContent .= "<p><strong>Email:</strong> $email</p>";
    $bodyContent .= "<p><strong>Phone:</strong> $phone</p>";
    // Add more fields as needed

    // Add all form data to email body
    $bodyContent .= "<p><strong>Address:</strong> $address</p>";
    $bodyContent .= "<p><strong>Degree:</strong> $degree</p>";
    $bodyContent .= "<p><strong>Institution:</strong> $institution</p>";
    $bodyContent .= "<p><strong>Certifications:</strong> $certifications</p>";
    $bodyContent .= "<p><strong>Job Position:</strong> $job_position</p>";
    $bodyContent .= "<p><strong>Responsibilities:</strong> $responsibilities</p>";
    $bodyContent .= "<p><strong>Duration:</strong> $duration</p>";
    $bodyContent .= "<p><strong>Technical Skills:</strong> $technical_skills</p>";
    $bodyContent .= "<p><strong>Soft Skills:</strong> $soft_skills</p>";
    $bodyContent .= "<p><strong>Languages:</strong> $languages</p>";
    $bodyContent .= "<p><strong>Client Objectives:</strong> $career_objectives</p>";
    $bodyContent .= "<p><strong>Reference Name:</strong> $reference_name</p>";
    $bodyContent .= "<p><strong>Reference Email:</strong> $reference_email</p>";
    $bodyContent .= "<p><strong>Reference Phone:</strong> $reference_phone</p>";
    $bodyContent .= "<p><strong>Additional Information:</strong> $additional_info</p>";
    $bodyContent .= "<p><strong>CV:</strong> <a href='cid:$cid'>$file_name</a></p>";


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
