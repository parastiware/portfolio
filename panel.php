<?php
session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['msg']="You must log in to continue!!";
    header('location:login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard</title>
</head>
<body>
    <div>
        <?php
        if(isset($_SESSION['success'])):?>
        <?php
         echo($_SESSION['success']);
        unset($_SESSION['success']);
        
        ?>
        <?php endif ?>
        <?php if(isset($_SESSION['username'])):?>   
        <h1>Welcome to your admin portal <?php echo($_SESSION['username']); ?>
        </h1>
        <button><a href="panel.php?logout='1'">LOG OUT</a></button>
        <?php endif ?>
    </div>
    
    
</body>
</html>