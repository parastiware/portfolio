<?php
$username="";
$email="";
$error = array();//error array
//database connected
$db=mysqli_connect("localhost","root","","cv") or die("could not connect to database");
//user registration logics
$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password_1=mysqli_real_escape_string($db,$_POST['pass1']);
$password_2=mysqli_real_escape_string($db,$_POST['pass2']);






?>
