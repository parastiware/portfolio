<?php
session_start();

if(isset($_SESSION['username'])){
    $_SESSION['msg']="You must log in to continue!!";
    header['location:login.php'];
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header['location: login.php'];
}
?>