<?php
if(session_status() === PHP_SESSION_NONE)
{
    session_start();//start session if session not start
}

if(!isset($_SESSION['logged'])){
    // die("unauthorized. access denied");
    header('location: user login page or site index');
}
$uID = $_SESSION['logged'];
