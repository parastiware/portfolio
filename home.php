<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="includes/home.css">
    <title>Home_page</title>
</head>
<body>

<div class="detail">
<?php
$db=mysqli_connect("localhost","root","","cv") or die("Error connecting the database");
$query="SELECT* FROM detail";
$result=mysqli_query($db,$query); 
$data=mysqli_fetch_assoc($result);
?>
<html>
<div class="menu">
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Social</li>
        <li>Review</li>
    </ul>
    
</div>

</html>
<p>I am <?php echo($data['Fname']); echo("&nbsp;");  echo($data['Mname']); echo("&nbsp;");  echo($data['Lname']);?> and welcome to my site.</p>
</div>
<div class="review-form">
<form action="server.php" method="POST">
Email:<br>
<input type="text" name="email" placeholder="Enter Your Email address" required><br>
Suggestions:<br>
<textarea  name="review" placeholder="Enter your thought about this site" required></textarea><br>
<input type="submit" name="user_review" value="submit">
<span id="success-msg"><?php echo($_SESSION['review']); echo($_SESSION['date']); $_SESSION['review']="";//clear review variable?></span>
</form>
<div><h1>Thanks for Passing by!!!</h1></div>
</div>


    
