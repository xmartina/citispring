<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.citispring.online"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@citispring.online"; // Change Email Address
        $mail->Password = '@SECcitispring1'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@citispring.online','City Spring Bank'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@citispring.online", "City Spring Bank"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>