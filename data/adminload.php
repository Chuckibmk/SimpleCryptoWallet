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
        
        // include __DIR__ . "/mail/withrej.php";
        
        // $header = "Send Transaction Failed";
        // $name = $userData["fname"] ." ". $userData['lname'];
        // $email = $userData["email"];

        // sendMail($email,$name,$header,$ref);
    
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
        
        // include __DIR__ . "/mail/withappr.php";
        
        // $header = "WITHDRAWAL REQUEST APPROVED";
        // $name = $userData["fname"] ." ". $userData['lname'];
        // $email = $userData["email"];

        // sendMail($email,$name,$header,$refe,$_POST['amount'],$_POST['address']);
     
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
    // $userData['totalDeposit'] = number_format((float)$user->totalDeposit($uID)['total'], 2, '.', '');
    // $userData['lastDeposit'] = number_format((float)$user->lastDeposit($uID)['amount'], 2, '.', '');
    // $userData['totalBal'] = number_format((float)$user->totalBal($uID)['total'], 2, '.', '');
    // $userData['allDeposit'] = $user->allDeposit($uID);
    // $userData['totalWithdrawal'] = number_format((float)$user->totalWithdrawal($uID)['total'], 2, '.', '');
    // $userData['lastWithdrawal'] = number_format((float)$user->lastWithdrawal($uID)['amount'], 2, '.', '');
    
    // $userData['depositsConfirmed'] = $user->getDepositConfirmed($uID);
    
    // $userData['withdrawalsConfirmed'] = $user->getWithdrawalsConfirmed($uID);
    
///////////////////

    //update profile

    // if(isset($_POST['jid'])){
    //     $time = strtotime($_POST['jtime']);
    //     $user->updateUserDeposit($_POST['jid'],$_POST['jamount'],$_POST['jearned'],$_POST['jdol'],$time,$_POST['jtearned']);
    //     header("Location: index.php");
    // }
    
    // if(isset($_POST['jidW'])){
    //     $time = strtotime($_POST['jdateW']);
    //     $user->updateUserWith($_POST['jidW'],$_POST['jvalueW'],$_POST['jamountW'],$_POST['jwalletW'],$_POST['jtypeW'],$time);
    //     header("Location: index.php");
    // }
    
    
    
    // if(isset($_POST['crewit'])){
    //     $alphabets = ['X','Y','Z','M'];
    //     $numbers = ['3','4','8','7'];
    //     $reference = "SCL".time().$numbers[array_rand($numbers)].$alphabets[array_rand($alphabets)];     
    //     $user->createNWithdrawal($uID,$reference,$_POST['crewt'],$_POST['crewit'],$_POST['Wfund_method'],$_POST['witwall']);
    //     header("Location: index.php");
    // }
    
    
    
    

//     if(isset($_POST['approveDeposit'])){
//         if(empty($_POST['amount'])){
//             $amt = $_POST['amt'];
//         }else{
//             $amt = $_POST['amount'];
//         }
//         if(empty($_POST['dolval'])){
//             $dol = $_POST['dol'];
//         }else{
//             $dol = $_POST['dolval'];
//         }
// include __DIR__ . '/../data/mail/depoappr.php';
//         $user->approveDeposit($_POST['id'],$amt,$dol);
        
//         $amt = $_POST['amount'];
//         $reference = $_POST['ref'];
//         $topic = "DEPOSIT REQUEST APPROVED";
//         $message = "Deposit Request Of : $amt, With Ref No: $reference, has been Approved and funds reflected in account. Was Approved on: ".date("Y-m-d H:i:s");
//         $done = $user->createNotifications($uID, $topic, $message);
        
//         $ref_bonus = (5 / 100) * $amt;
//         $refe = $user->referralBonus($_POST['id'], $ref_bonus);
    
//         $header = "DEPOSIT REQUEST APPROVED";
//         $name = $userData["fname"] ." ". $userData['lname'];
//         $email = $userData["email"];

//         sendMail($email,$name,$header,$reference,$amt,$userData['plan']);
        
//         if($userData['totalBal'] > 4999){
//             if($userData['plan'] == "Starter Plan"){
//                 header("Location: index.php");
//             }else{
//                 $plan = "Basic Plan";
//                 $user->updatePlan($uID,$plan);
            
//                 $topic = "ACCOUNT PLAN UPGRADE";
//                 $message = "Account Plan has been upgraded to $plan, we pray you continue to enjoy the best rates";
//                 $done = $user->createNotifications($uID, $topic, $message);
//             }
//         }elseif($userData['totalBal'] > 19999){
//             if($userData['plan'] == "Standard Plan"){
//                 header("Location: index.php");
//             }else{
//                 $plan = "Primary Plan";
//                 $user->updatePlan($uID,$plan);
                
//                 $topic = "ACCOUNT PLAN UPGRADE";
//                 $message = "Account Plan has been upgraded to $plan, we pray you continue to enjoy the best rates";
//                 $done = $user->createNotifications($uID, $topic, $message);
//             }
//         }
//         header("Location: index.php");
//     }
//     if(isset($_POST['deleteDeposit'])){
//         $user->deleteDeposit($_POST['id']);
//         header("Location: index.php");
//     }
    
}