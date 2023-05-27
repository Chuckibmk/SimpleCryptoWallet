<?php
include __DIR__ . "/udata.php";
// include __DIR__ . "/mail/deposit.php";


if(isset($_POST['amt'],$_POST['coin'])){
    $amt = $_POST['amt'];
    $net = $_POST['network'];
    $coin = $_POST['coin'];
    $address = $_POST['address'];
    
    $done = $user->createSend($uID,$net,$coin,$amt,$address);

    $topic = "Pending Transaction";
    $message = "Pending $coin Transaction of : $amt, was recieved on: ".date("Y-m-d H:i:s");
    $done = $user->createNotifications($uID, $topic, $message);
        
    // $header = "Pending Transaction";
    // $name = $userData["username"];
    // $email = $userData["email"];
    // $time = getdate();

    // sendMail($email,$name,$header,$_POST['coin'],$_POST['amt'],$time,$address);
    
    $return['stat'] = 1;
    echo json_encode($return);

}else{
    $return['stat'] = 3;
}


$user->Disconnect();

