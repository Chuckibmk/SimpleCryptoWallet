<?php
error_reporting(E_ALL);
include __DIR__ . "/../class/dashboard.php";
include __DIR__ . "/../class/config.php";//config
include __DIR__ . "/auth.php";

date_default_timezone_set('Africa/Lagos');

$userData = $user->allUserData($uID);

if(isset($_POST['loadnet'])){
    $_SESSION['COIN'] = $_POST['coin'];
    exit(header("Location: index.php"));
}

if(isset($_SESSION['COIN'])){
    $coin = $_SESSION['COIN'];
    $network = $user->getnetwork($uID,$coin);
    $AllNetwork = $user->getAllnetwork($uID);
    $userData['notify'] = $user->notify($uID);
    
    $userData['main'] = number_format((float)$user->coinBal($uID,$coin,$coin)['total'], 2, '.', '');
    $userData['doll'] = number_format((float)$user->dollBal($uID,$coin,$coin)['total'], 2, '.', '');
    $userData['getcoins'] = $user->getcoins($uID,$coin);
    $userData['confirmSend'] = $user->confirmSend($uID,$coin);
    $userData['pendSend'] = $user->pendSend($uID,$coin);
    
    if($coin == "ETH"){
        $explorer = "etherscan.io";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "BNB"){
        $explorer = "bscscan.com";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "MATIC"){
        $explorer = "polygonscan.com";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "LTC"){
        $explorer = "litecoinblockexplorer.net";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "BCH"){
        $explorer = "bchblockexplorer.com";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "BTC"){
        $explorer = "bitcoinblockexplorers.com";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "DOGE"){
        $explorer = "dogeblocks.com";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "TRX"){
        $explorer = "tronscan.org/#/";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."transaction/";
    }elseif($coin == "XTZ"){
        $explorer = "tzkt.io";
        $exURL = $network['explorer'].$network['address']."/operations/";
        $hash = $explore;
    }elseif($coin == "ADA"){
        $explorer = "explorer.cardano.org";
        $exURL = $network['explorer']."en/address?address=".$network['address'];
        $hash = $network['explorer']."en/transaction?id=";
    }elseif($coin == "SOL"){
        $explorer = "explorer.solana.com";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "AVAX"){
        $explorer = "snowtrace.io";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "EGLD"){
        $explorer = "elrondscan.com";
        $exURL = $network['explorer']."account/".$network['address'];
        $hash = $network['explorer']."transaction/";
    }elseif($coin == "ALGO"){
        $explorer = "algoexplorer.io";
        $exURL = $network['explorer']."address/".$network['address'];
        $hash = $network['explorer']."tx/";
    }elseif($coin == "DOT"){
        $explorer = "explorer.polkascan.io/polkadot/";
        $exURL = $network['explorer']."account/".$network['address'];
        $hash = $network['explorer']."transaction/";
    }elseif($coin == "XRP"){
        $explorer = "xrpscan.com/";
        $exURL = $network['explorer']."account/".$network['address'];
        $hash = $network['explorer']."tx/";
    }
}

////////////////////////////////////standard///////////////////////////////////////////////////

