<?php
include 'server.php';
if(!isset($_SESSION['username'])){
   echo("Error in loading try again");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_page</title>
</head>
<body>
<div><h1>Thanks for Passing by!!!</h1></div>
<div class="detail">
<?php
$query="SELECT* FROM detail";
$result=mysqli_query($db,$query); 
$data=mysqli_fetch_assoc($result);
?>
<p>I am <?php echo($data['Fname']+"&nbsp;");  echo($data['Mname']+"&nbsp;");  echo($data['Lname']+"&nbsp;");?> and welcome to my site.</p>
</div>
<div class="review-form">
<form action="server.php" method="POST">
Email:<br>
<input type="text" name="email" placeholder="Enter Your Email address" required><br>
Suggestions:<br>
<input type="textarea" name="review" placeholder="Enter your thought about this site" required><br>
<input type="submit" name="user_review" value="submit">
<span id="success-msg"><?php echo($_SESSION['review'])?></span>
</form>

</div>


    
