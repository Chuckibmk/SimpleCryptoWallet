<?php 
    require_once '../data/udata.php';

if (isset ($_POST['pass2'])) {
    $pass = md5($_POST['pass2']);
        
    $topic = "Password Change Successful";
    $message = "Account Password has been changed successfully";
    $done = $user->createNotifications($uID, $topic,$message);
    
    $user->Updatepassword($uID,$pass,$_POST['pass2']);
    $return['stat'] = 1;
    echo json_encode($return);
}

if (isset ($_POST['rname'])) {
        
    $topic = "Network Request Successful";
    $message = "Network requested successfully";
    $done = $user->createNotifications($uID, $topic,$message);
    
    $user->RequestNetwork($uID,$_POST['rname'],$_POST['csym']);
    $return['stat'] = 1;
    echo json_encode($return);
}