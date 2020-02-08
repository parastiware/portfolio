<?php
$username="";
$email="";
$errors = array();//error array
//database connected
$db=mysqli_connect("localhost","root","","cv") or die("could not connect to database");
//user registration logics
$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password_1=mysqli_real_escape_string($db,$_POST['pass1']);
$password_2=mysqli_real_escape_string($db,$_POST['pass2']);

//form validation
if(empty($username)) {array_push($errors,"username is required!!");}
if(empty($email)) {array_push($errors,"Email is required!!");}
if(empty($password_1)) {array_push($errors,"Password is required!!");}
if($password_1!=$password_2){array_push($errors,"Passwords do not match!!");}

//check db for existing user for same user name
$user_check_query="SELECT * FROM admintab username='$username' or email='$email' LIMIT 1";
$results=mysqli_query($db,$user_check_query);//querying in database
$user = mysqli_fetch_assoc($results);
if($user){
    if($user['username']==$username){array_push($errors,"Username already exists");}
     if($user['email']==$email){array_push($errors,"This email id is slready registered");}
}

//register if no errors
if(count($errors)==0){
    $password=md5($password_1);//this will encrypt password
    $query="INSERT INTO admintab(username,email,password) VALUES ('$username','$email','$password')";
    mysqli_query($db,$query);
    $_SESSION['username']=$username;
    $_SESSION['success']="Your are now logged in";

    header('location: panel.php');

}

//log in logic


?>
