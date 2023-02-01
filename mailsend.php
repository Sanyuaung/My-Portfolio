<?php require 'PHPMailer/PHPMailerAutoload.php';?>
<?php
session_start();
?>
<?php

function Redirect_to($New_Location)
{header("Location:" . $New_Location);
    exit;
}

// call the contact() function if contact_btn is clicked
if (isset($_POST['contact_btn'])) {
    contact();
}

function contact()
{
    if (isset($_POST["contact_btn"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["subject"];
        $message = $_POST["message"];

        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();
        $mail->setFrom($_POST['email']);

        $mail->setFrom($_POST['email']);
        $mail->addAddress('sanyuaung.ygn.mm@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";

        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

        $message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";

        $message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
            $_SESSION['success']= 'Your message has been sent. Thank you!';
            Redirect_to("index.php#contact");
        } else {
            Redirect_to("index.php");
        }

    } //Ending of Submit Button If-Condition

}

?>