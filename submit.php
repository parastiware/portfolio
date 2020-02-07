<?php
include "connect.php";
include"login.php";
$inuser=$_POST['username'];
$inpass=$_POST['password'];
$sel="SELECT*from admintab order by user_id asc";
$res=mysqli_query($connection,$sel);
while($row=mysqli_fetch_assoc($res)){
    $username=$row['username'];
    $password=$row['password'];
        if($inpass==$password && $username==$inuser)
    {
    echo"welcome";
    
    }
    else {
    echo"login failed";
    }
}
?>