<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];

    require 'vendor/autoload.php';
    require("./includes/login.php");
    $user = "";

    if (isset($_SESSION["username"])) {
        $user = $_SESSION['username'];

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'niranjan123octopus@gmail.com';
            $mail->Password   = 'rjhl zogj uhgy ovvz';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;


            $mail->setFrom('niranjan123octopus@gmail.com', 'Niranjan');
            $mail->addAddress($email);


            $mail->isHTML(true);
            $mail->Subject = 'Welcome';
            $mail->Body    = 'Welcome Aboard ' . $user . '!';

            // Send the email
            $mail->send();


            header("location:http://localhost/Assignment/message.php=sucess");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
