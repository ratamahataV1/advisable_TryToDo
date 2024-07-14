<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($to, $subject, $message) {
    require 'vendor/autoload.php';
    $mail = new PHPMailer(TRUE);

    try {
        $mail->setFrom('your_email@example.com', 'Your Name');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';
        $mail->SMTPAuth = TRUE;
        $mail->Username = 'your_email@example.com';
        $mail->Password = 'your_password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->send();
        return TRUE;
    } catch (Exception $e) {
        return FALSE;
    }
}
?>