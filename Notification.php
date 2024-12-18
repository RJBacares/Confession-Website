<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

date_default_timezone_set('Etc/UTC');

require '../vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = SMTP::DEBUG_SERVER; 

$mail->Host = 'smtp.gmail.com';

$mail->Port = 465;

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 

$mail->SMTPAuth = true;

$mail->Username = 'serverside42069@gmail.com';

$mail->Password = 'yrwy wtlt gpsv emcx';

$mail->setFrom('serverside42069@gmail.com', 'Site Notification');

$mail->addAddress('notification43069@gmail.com', 'Site Notification');

$mail->Subject = 'Selected Date';

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

$mail->Body = $message;

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>
