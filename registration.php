<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="includes/css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>user registration</title>
</head>

<body>
    <div class="centered-form">
        <div class="form-title">
            <h1>Registration Form</h1>
            <p>Enter your following fields to register</p>
            <?php include("server.php");
            include("errors.php");
            ?>
            <hr>
        </div>

        <form action="server.php" method="POST">
        <div class ="fields">
            <div class="personel">
            <input type="text" name="Fname" placeholder="First Name" required><br>
            <input type="text" name="Mname" placeholder="Middle Name" ><br>
            <input type="text" name="Lname" placeholder="Last Name" required><br>
            <input type="date" name="DOB" placeholder="DOB" required><br>
            </div>
            <div class ="security">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="pass1" placeholder="Password" required>
            <input type="password" name="pass2" placeholder="Confirm Password" required>
            </div>
        </div>
            <button class="login btn" name="register" value="submit">Register</button>
            <span>Already a user <a href="login.php"><strong>Log In</strong></a></span>
        </form>

    </div>
</body>

</html>