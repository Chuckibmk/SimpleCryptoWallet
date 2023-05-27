<?php

if(isset($_POST['load'])){
    $_SESSION['loaded_user'] = $_POST['id'];
    exit(header("Location: index.php"));
}elseif(isset($_POST['removeAdmin'])) {
    $user->deladmin($_POST['id']);
    exit(header("Location: index.php"));
}elseif(isset($_POST['deleteUser'])){
    $user->deleteUser($_POST['id']);
    exit(header("location: index.php"));
}

$users = $user->allUsers();
$admins = $user->allAdmins();

if(isset($_POST['adminame'])){
    $adinmae = $_POST["adminame"];
    $pwd = $_POST["pwd"];
    $user->createadmin($adinmae,$pwd);

    header("Location: index.php");
}
if(isset($_POST['removeAdmin'])){
    $id = $_POST["id"];
    $user->deladmin($id);

    header("Location: index.php");
}

// $pDeposits = $user->pendingDeposit();
// $aDeposits = $user->approvedDeposit();
// $pWithdrawals = $user->pendingWithdrawal();
// $aWithdrawals = $user->approvedWithdrawal();

