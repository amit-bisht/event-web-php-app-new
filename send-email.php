<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// Initialize PHPMailer
$mail = new PHPMailer(true);

$response = array(); // Create a response array
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'itadmin@waveneer.com';
    $mail->Password = 'rJkwwpP$XT&2@Admin';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender and recipient
    $mail->setFrom('itadmin@waveneer.com', 'Waveneer IT Admin');
    $mail->addAddress("Waveneer.online@gmail.com", $_POST['username']);

    // Get current date & time
    $datetime = date('Y-m-d H:i:s');

    // Email subject
    $mail->Subject = "New Inquiry submitted on {$datetime}";

    // Email body (HTML)
    $mail->isHTML(true);
    $mail->Body = "
        <p>Hello Team,</p>

        <p>A new inquiry has been submitted through the website contact form. Please find the details below for review and follow-up.</p>

        <h3>Lead Information:</h3>
        <p><strong>Name:</strong> {$_POST['username']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Phone:</strong> {$_POST['mobileno']}</p>
        
        <h3>Inquiry Details:</h3>
        <p><strong>Company/Brand Name:</strong> {$_POST['company']}</p>
        <p><strong>What is it about?:</strong> {$_POST['message']}</p>
       

        <p>This inquiry was submitted on <strong>{$datetime}</strong>.</p>

        <br>
        <p>Thank you.<br>IT Admin<br>Waveneer</p>
    ";

    $mail->send();

    // Success response
    $response['status'] = 'success';
    $response['message'] = 'Message has been sent';
} catch (Exception $e) {
    // Error response
    $response['status'] = 'error';
    $response['message'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}

// JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
