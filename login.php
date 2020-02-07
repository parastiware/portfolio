<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="includes/login.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>

<?php include "connect.php"?>

<div class="centered-form">
<div class="form-title">
<h1>Admin login</h1>
<hr>
</div>

<form action="submit.php" method="POST">
<input type="text" name="username" placeholder="Username"><br>
<input type="password" name="password" placeholder="Password">
<button class="login btn" type="submit">login</button>
</form>
</div>
</body>
</html>


