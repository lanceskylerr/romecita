<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];

    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Greetings <strong> '.$name.'! </strong></p>
        <p>Thank you for your feedback, this is truly noted, Thanks '.$name.'!</p>
        <br><br>
        Have a great day ahead!,<br>
        RomeCita Staff<br>
        <strong></b> RomeCita Garden Resort ♥</strong>

    </body>
    </html>';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPAuth = "true";
    $mail->Username = "inquiry@romecitagardenresort.online";
    $mail->Password = "Lance@15";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("inquiry@romecitagardenresort.online","RomeCita Garden Resort");

    $mail->addAddress($email); // change to my email
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    header('location:index.php');
}
?>