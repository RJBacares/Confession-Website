<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

date_default_timezone_set('Etc/UTC');

require '../vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;

$mail->Host = 'smtp.example.com';

$mail->Port = 465;

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => true,
        'verify_depth' => 3,
        'allow_self_signed' => true,
        'peer_name' => 'smtp.example.com',
        'cafile' => '/etc/ssl/ca_cert.pem',
    ],
);


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

<<<<<<< HEAD
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
=======
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'serverside42069@gmail.com';
    $mail->Password = 'yrwy wtlt gpsv emcx';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('serverside42069@gmail.com', 'Notification');
    $mail->addAddress($to);

    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->send();
    echo "Mail sent successfully!";
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
>>>>>>> ef5fedeea21551f2ffed8dd6b8c9e7ba5000f88e
}
?>