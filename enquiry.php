
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // PHPMailer include karein

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['telphone'];
    $service = $_POST['people'];

    // Service ko readable text banane ke liye
    $services = [
        "0" => "Not Selected",
        "1" => "Residential Interior",
        "2" => "Commercial Interior",
        "3" => "Custom Furniture & Decor",
        "4" => "Turnkey Interior",
        "5" => "3D Interior Designing & Consultation"
    ];
    $service_name = isset($services[$service]) ? $services[$service] : "Unknown Service";

    // SMTP Configuration
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP Server
        $mail->SMTPAuth = true;
        $mail->Username = 'rajpatel8726@gmail.com'; // Aapka Gmail
        $mail->Password = 'rlvn dzuy qfqt ufeg'; // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom('rajpatel8726@gmail.com', 'Interior Enquiry');
        $mail->addAddress('rajpatel8726@gmail.com'); // Vendor ka Email
        
        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Interior Design Enquiry';
        $mail->Body = "
            <h2>New Enquiry Received</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Mobile:</strong> $mobile</p>
            <p><strong>Service:</strong> $service_name</p>
        ";

        $mail->send();
        // Successfully Sent => Redirect to Thank You Page
        header("Location: thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
