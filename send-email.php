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

// Initialize response array
$response = array();

// Validate and sanitize input data
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response = ['status' => 'error', 'message' => 'Only POST requests allowed'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// Check required fields
$required_fields = ['username', 'email'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field]) || trim($_POST[$field]) === '') {
        $response = ['status' => 'error', 'message' => "Field '$field' is required"];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

// Sanitize input data
$username = trim(htmlspecialchars($_POST['username']));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$mobileno = isset($_POST['mobileno']) ? trim(htmlspecialchars($_POST['mobileno'])) : '';
$company = isset($_POST['company']) ? trim(htmlspecialchars($_POST['company'])) : '';
$message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = ['status' => 'error', 'message' => 'Invalid email format'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

write_log("Processing email request for: $username ($email)");

$mail = new PHPMailer(true);

try {
    // Debug output from PHPMailer
    $mail->SMTPDebug = 0; // Set to 2 for debugging, 0 for production
    $mail->Debugoutput = function ($str, $level) {
        write_log("SMTP Debug [$level]: $str");
    };

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'itadmin@waveneer.com';
    $mail->Password = 'rJkwwpP$XT&2@Admin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Set timeout
    $mail->Timeout = 30;

    write_log("Attempting SMTP connection...");

    // Sender & Recipient
    $mail->setFrom('itadmin@waveneer.com', 'Waveneer IT Admin');
    $mail->addAddress('Waveneer.online@gmail.com', 'Waveneer Team');
    
    // Reply to sender's email
    $mail->addReplyTo($email, $username);

    $datetime = date('Y-m-d H:i:s');
    $mail->Subject = "New Inquiry from $username - $datetime";

    $mail->isHTML(true);
    $mail->Body = "
        <p>Hello Team,</p>
        <p>A new inquiry has been submitted.</p>
        <p><strong>Name:</strong> $username</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $mobileno</p>
        <p><strong>Company:</strong> $company</p>
        <p><strong>Message:</strong> $message</p>
        <p>Submitted on: $datetime</p>
    ";

    $mail->send();
    $response = ['status' => 'success', 'message' => 'Message sent'];
    write_log("Email sent successfully.");
} catch (Exception $e) {
    // Capture both PHPMailer ErrorInfo and Exception
    $errorDetail = "Mailer Error: " . $mail->ErrorInfo . " | Exception: " . $e->getMessage();
    $response = ['status' => 'error', 'message' => 'Failed to send email. Please try again later.'];
    write_log("Email failed for $username ($email). Details: " . $errorDetail);
    write_log("Stack trace: " . $e->getTraceAsString());
}

// JSON Response
header('Content-Type: application/json');
echo json_encode($response);
