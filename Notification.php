<?php
    $to = "notification43069@gmail.com";
    $subject = "Selected Date";

    if (isset($_GET['date'])) {
        $date = $_GET['date'];
        $formattedDate = date("m-d-Y", strtotime($date));
        $message = "SEE YOU AT " . $formattedDate;
    } else {
        $message = "No date selected.";
    }

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: serverside42069@gmail.com\r\n";
    $headers .= "Reply-To: serverside42069@gmail.com\r\n";

    $send = mail($to, $subject, $message, $headers);

    echo ($send ? "Sent" : "Error");
?>
