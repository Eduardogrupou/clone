<?php

$email = $_GET['email'];
$usuario = $_GET['usuario'];
$codigo = $_GET['codigo'];



use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


if($email){
    echo $email;



$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'contato@morenacaipira.com';
$mail->Password = 'Moren@2022';
$mail->setFrom('contato@morenacaipira.com', 'Caipira morena');
$mail->addReplyTo($email, 'Caipira morena');
$mail->addAddress($email, 'rutherles');
$mail->Subject ='Codigo de redefinicao de senha';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = 'Ola'. $usuario .'Digite esse código no APP caipira morena ' . $codigo;
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
    
}




}    
    




?>