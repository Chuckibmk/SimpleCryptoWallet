<?php

include __DIR__ . "/../class/dashboard.php";
include __DIR__ . "/../class/config.php";

if(session_status() === PHP_SESSION_NONE)
{
    session_start();//start session if session not start
}

if(!isset($_SESSION['logged'])){
    header('location: admin login page');
}

$oID = $_SESSION['logged'];
$originalData = $user->allUserData($oID);

if(isset($_SESSION['loaded_user'])){
    $uID = $_SESSION['loaded_user'];

    $userData = $user->allUserData($uID);
    $userData['getAllnetwork'] = $user->getAllnetwork($uID);
    $userData['balance'] = $user->getbalance($uID);
    $userData['send'] = $user->getSend($uID);
    
    if(isset($_POST['verifyemail'])){
        $user->esVerify($_POST['email']);
        header("Location: index.php");
    }
    
    if(isset($_POST['delnetwork'])){
        $user->delnetwork($_POST['id']);
        header("Location: index.php");
    }
    
    if(isset($_POST['wid'])){
        $user->updateWallet($_POST['wid'],$_POST['address'],$_POST['explorer'],$_POST['logo'],$_POST['network'],$_POST['nam']);
        header("Location: index.php");
    }
    
    if(isset($_POST['crame'])){
        $user->createwallt($uID,$_POST['image'],$_POST['crame'],$_POST['network'],$_POST['address'],$_POST['explorer']);
        header("Location: index.php");
    }
    
    if(isset($_POST['deletebalance'])){
        $user->deletebalance($_POST['id']);
        header("Location: index.php");
    }
    
    if(isset($_POST['Balnetwork'])){
        $user->createBal($uID,$_POST['Balcoin'],$_POST['Logocoin'],$_POST['Balnetwork'],$_POST['value'],$_POST['amount']);
        header("Location: index.php");
    }
    
    if(isset($_POST['bid'])){
        $user->updateBal($_POST['bid'],$_POST['val'],$_POST['amt']);
        header("Location: index.php");
    }
    
    if(isset($_POST['deleteSend'])){
        $user->deleteSend($_POST['id']);
        
        $topic = "Send Transaction Failed";
        $message = "Send Transaction was Declined. This may be due to various reasons, ie: Low gas fee, High Network traffic. Please Contact our support team for further enquiries";
        $done = $user->createNotifications($uID, $topic, $message);
        
       
        header("Location: index.php");
    }
    
    if(isset($_POST['approveSend'])){
        $amt = number_format((float)$user->coinBal($uID,$_POST['net'],$_POST['coin'])['total'], 2, '.', '');
        $val = number_format((float)$user->dollBal($uID,$_POST['net'],$_POST['coin'])['total'], 2, '.', '');
        
        $amount = $amt - $_POST['amount'];
        $value = $val - $_POST['value'];
        
        $user->approveSend($_POST['id']);
        $user->updateSend($uID,$value,$amount,$_POST['net'],$_POST['coin']);
        
        $amot = $_POST['amount'];
        $refe = $_POST['trans'];
        $topic = "Send Transaction Successful";
        $message = "Send Transaction Of : $amot, With Trans ID: $refe, was successful and funds sent to Wallet. Was Approved on: ".date("Y-m-d H:i:s");
        $done = $user->createNotifications($uID, $topic, $message);
        
        header("Location: index.php");
    }
    
    if(isset($_POST['locid'])){
        $user->lockAcc($_POST['locid']);
        header("Location: index.php");
    }
    
    if(isset($_POST['unlockid'])){
        $user->unlckAcc($_POST['unlockid']);
        header("Location: index.php");
    }
    
    if(isset($_POST['wipeBal'])){
        $user->wipeBal($uID);
        header("Location: index.php");
    }
    if(isset($_POST['wipeSend'])){
        $user->deleteSend($uID);
        header("Location: index.php");
    }
    
    if(isset($_POST['d2fa'])){
        $user->tsOff($_POST['id']);
        $user->tscNull($_POST['id']);
        $user->tvUnverified($_POST['id']);
        header("Location: index.php");
    }
    
    // ////////////////////////////////
    
    if(isset($_POST['unloadUser'])){
       unset($_SESSION['loaded_user']);
        header("Location: index.php");
    }
   
///////////////////

    
    
}
