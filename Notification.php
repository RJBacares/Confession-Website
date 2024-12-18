<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$to = "notification43069@gmail.com";
$subject = "Selected Date";

if (isset($_GET['date'])) {
    $date = $_GET['date'];
    if (strtotime($date)) {
        $formattedDate = date("m-d-Y", strtotime($date));
        $message = "SEE YOU AT " . $formattedDate;
    } else {
        $message = "Invalid date format provided.";
    }
} else {
    $message = "No date selected.";
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'serverside42069@gmail.com';
    $mail->Password = 'yrwy wtlt gpsv emcx'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;

    
    $mail->setFrom('serverside42069@gmail.com', 'Notification');
    $mail->addAddress($to);

    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    echo "Mail sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
