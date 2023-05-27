<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include __DIR__ . "/../../src/Exception.php";
include __DIR__ . "/../../src/PHPMailer.php";
include __DIR__ . "/../../src/SMTP.php";
include __DIR__ . "/../../class/config.php";


function sendMail($email, $ip, $subject,$city,$region,$country,$time){
    $mail = new PHPMailer();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = HOST;                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = USERNAME;                     //SMTP username
    // $mail->Password   = PASSWORD;                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    // $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    // this is setting is specific for Godaddy Servers
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false; 
    $mail->Port = 25; 
    
    $mail->IsHTML(true);
    $mail->setFrom(FROM, NAME);
    $mail->addReplyTo(REPLYTO, NAME);
    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->Body = renderEmail($email, $ip, NAME, $city,$region,$country,$time);
    //$mail->addAttachment('reg_guide.pdf');
    ob_end_clean();
    $mail->send();
    /*try {
        $mail->send();
    } catch (Exception $e) {
        echo $e->errorMessage();
    }*/

}

function renderEmail($email, $ip, $cname,$city,$region,$country,$time) {
    ob_start();
    include "login.phtml";
    return ob_get_contents();
}