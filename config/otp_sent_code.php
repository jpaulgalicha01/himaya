<?php
require_once 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "jpaulgalicha01@gmail.com";  // SMTP account username example
$mail->Password   = "cqlkszpqfoljwrtk";        // SMTP account password example


$mail->clearAddresses();
$mail->setFrom('jpaulgalicha01@gmail.com','Himaya: Agricultural Product Carrier and Trading System');
$mail->addAddress($fetch['acc_email']);

//The subject of the message.
$mail->Subject = 'Himaya: Agricultural Product Carrier and Trading System';
$message = '
    Your OTP CODE '.$fetch['acc_otp'].'
';
$mail->Body = $message;
$mail->isHTML(true);

if($mail->send()){
    $status = 1;
    return true;
}else{
    $status = 0;
    return true;
}

