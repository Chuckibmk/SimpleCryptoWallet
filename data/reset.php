<?php
require_once('../class/user.php');
include __DIR__ . "/mail/resetp.php";

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
    
    
    $url = DOMAIN."/reset/?token=".md5($email);

    if($user->userExists($email)){
        $user->passChangeRequest(md5($email));
        $name = $user->verifyCode(md5($email));

         $header = "Password Reset Request";
         sendMail($email,$name,$header,$url);
         
         $return['valid'] = true;
    }else{
        $return['valid'] = false;
    }
    //var_dump($result);
    echo json_encode($return);
}

if(isset($_POST['password'])){
    $User['password'] = md5($_POST['password']);
    $User['token'] = trim($_POST['token']);
    $User['name'] = $user->verifyToken($User['token']);
    
    
    if($User['name']){
        $user->changePassword($User['password'],$User['token']);
        $return['valid'] = true;

    }else{
        $return['valid'] = false;
        $return['msg'] = "Invalid token!!!";
    }
    //var_dump($result);
    echo json_encode($return);
}

$user->Disconnect();