<?php
require '/var/www/tj/PHPMailer/src/Exception.php';
require '/var/www/tj/PHPMailer/src/PHPMailer.php';
require '/var/www/tj/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// rest of your script...

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'jgcblue9558@gmail.com';                 
    $mail->Password = 'lrwiykfllfxbolxo';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                   

    //Recipients
    
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('jose.gj.chavez@gmail.com'); // Your email where you want to receive the mails.
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body in <b>bold</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
