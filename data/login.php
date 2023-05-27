<?php
require_once "../class/user.php";
// include __DIR__ . "/mail/loginNot.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();//start session if session not start
}
if (isset($_POST['admin'], $_POST['pass'])) {
    $un = $_POST['admin'];
    $pwd = $_POST['pass'];

    $pwd = md5($pwd);//hash
    $return = [];

    $result = $user->loginAdmin($un, $pwd);
    
     if(!empty($result)){
        $_SESSION['logged'] = $result['id'];
        $return['stat'] = "good";
        $return['add'] = "../admin/";
    }else{
        $return['stat'] = "false";
        $return['msg'] = "Invalid Email or Password!";
    }
    echo json_encode($return);

}
if (isset($_POST['un'], $_POST['pwd'])) {
    $un = $_POST['un'];
    $pwd = md5($_POST['pwd']);//hash
    // $ip = $_POST['ip'];
    // $city = $_POST['city'];
    // $region = $_POST['region'];
    // $country = $_POST['country'];

    $return = [];

    $result = $user->loginUser($un, $pwd);
    
     if(!empty($result)){
        if ($result['access'] == '1'){
            $return['stat'] = "blocked";
            $return['msg'] = "Your Account has been restricted due to compliance with an ongoing investigation. Thank You";
            
        }elseif ($result['ev'] == '0') {
            
            $return['stat'] = "inactive";
            $return['msg'] = "An E-mail has been sent to you, check your inbox, in order to activate your account!!!";
            
        } elseif ($result['ev'] == '1') {
                $return['stat'] = "good";
                $_SESSION['logged'] = $result['id'];
                $_SESSION['COIN'] = 'ETH';
                
                
                // $topic = "NEW LOGIN ALERT";
                // $message = "Login Attempted from IP Address: $ip. Location: $city, $region, $country";
                // $done = $user->createNotifications($result['id'], $topic, $message);
                    
                // $header = "Login Attempted from IP Address";
                // $email = $result['email'];
                // $time = getdate();
                // sendMail($email,$ip,$header,$city,$region,$country,$time);
        }
    }else{
        $return['stat'] = "false";
        $return['msg'] = "Invalid Email or Password!";
    }
    echo json_encode($return);

}

if (isset($_POST['token'])) {
    $token = $_POST['token'];

    $data = $user->verifyCode($token);
    if($data){
        $user->evVerified($token);

        $return['valid'] = true;
        $return['name'] = $data['fname'];
        $return['email'] =$data['email'];
    }else{
        $return['valid'] = false;
        $return['msg'] = "Invalid token!!!";
    }
    echo json_encode($return);
}

$user->Disconnect();