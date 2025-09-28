<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// =================== LOGGING FUNCTION ===================
$logFile = __DIR__ . '/email_debug.log';
function write_log($msg) {
    global $logFile;
    $date = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$date] $msg\n", FILE_APPEND);
}

$mail = new PHPMailer(true);
$response = array();

try {
    // Debug output from PHPMailer
    $mail->SMTPDebug = 2; // 2 = client & server messages
    $mail->Debugoutput = function ($str, $level) {
        write_log("SMTP Debug [$level]: $str");
    };

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'itadmin@waveneer.com';
    $mail->Password = 'rJkwwpP$XT&2@Admin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // safer than 'tls' string
    $mail->Port = 587;

    write_log("Attempting SMTP connection...");

    // Sender & Recipient
    $mail->setFrom('itadmin@waveneer.com', 'Waveneer IT Admin');
    $mail->addAddress('Waveneer.online@gmail.com', $_POST['username']);

    $datetime = date('Y-m-d H:i:s');
    $mail->Subject = "New Inquiry submitted on {$datetime}";

    $mail->isHTML(true);
    $mail->Body = "
        <p>Hello Team,</p>
        <p>A new inquiry has been submitted.</p>
        <p><strong>Name:</strong> {$_POST['username']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Phone:</strong> {$_POST['mobileno']}</p>
        <p><strong>Company:</strong> {$_POST['company']}</p>
        <p><strong>Message:</strong> {$_POST['message']}</p>
        <p>Submitted on: {$datetime}</p>
    ";

    $mail->send();
    $response = ['status' => 'success', 'message' => 'Message sent'];
    write_log("Email sent successfully.");
} catch (Exception $e) {
    // Capture both PHPMailer ErrorInfo and Exception
    $errorDetail = "Mailer Error: " . $mail->ErrorInfo . " | Exception: " . $e->getMessage();
    $response = ['status' => 'error', 'message' => $errorDetail];
    write_log(" Email failed. Details: " . $errorDetail);
}

// JSON Response
header('Content-Type: application/json');
echo json_encode($response);
