<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="includes/css/login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>login page</title>
</head>

<body>
    <div class="centered-form">
        <div class="form-title">
            <h1>Admin login</h1>
            <p>Enter your admin username and password</p>
            <!-- //for error messages -->
            <?php include("server.php");
            include("errors.php");
            ?>

            <hr>
        </div>
        <!-- login form  -->
        <form action="server.php" method="POST">
            <input type="text" name="username" placeholder="Username or Email"><br>
            <span id="namerr"></span>
            <input type="password" name="password" placeholder="Password">
            <span id="passerr"></span>
            <button class="login btn" name="login_user" type="submit">login</button>
            <p>or <a href="registration.php">Register</a></p>
        </form>
    </div>
</body>

</html>