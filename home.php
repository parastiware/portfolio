<?php
session_start();
if(! isset($_SESSION['review']))
{
$_SESSION['review']=""; 
$_SESSION['date']="";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="includes/css/home.css">
    <link rel='icon' href='includes/images/favicon/fav.png' type='image/x-icon'/>
    <title>Home_page</title>
</head>
<body>

<div class="menu">
    <ul>
       <a href="#HOME"> <li>HOME</li></a>
        <a href="#About"><li>ABOUT </li></a>
        <a href="#Social"><li>SOCIAL</li></a>
        <a href="#review-form"><li>REVIEW</li></a>
    </ul>
    
</div>
<div class="Intro">
                <?php
                $db=mysqli_connect("localhost","root","","cv") or die("Error connecting the database");
                $query="SELECT* FROM detail";
                $result=mysqli_query($db,$query); 
                $data=mysqli_fetch_assoc($result);
                ?>
                <p>I am <?php echo($data['Fname']); echo("&nbsp;");  echo($data['Mname']); echo("&nbsp;");  echo($data['Lname']);?> and welcome to my site.</p>
</div>

<div class="About" id="About">
    About content here:
   <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eveniet accusamus numquam repudiandae 
       cumque pariatur fugiat hic,
        officia voluptatum impedit natus qui quos, excepturi blanditiis veritatis iusto autem. Tempore, neque?
    
    
    
    
    
    </p>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eveniet accusamus numquam repudiandae 
         cumque pariatur fugiat hic, officia voluptatum impedit natus qui quos, excepturi blanditiis veritatis iusto autem.
          Tempore, neque?
          <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </p>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eveniet accusamus numquam repudiandae 
       cumque pariatur fugiat hic,
        officia voluptatum impedit natus qui quos, excepturi blanditiis veritatis iusto autem. Tempore, neque?
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eveniet accusamus numquam repudiandae 
       cumque pariatur fugiat hic,
        officia voluptatum impedit natus qui quos, excepturi blanditiis veritatis iusto autem. Tempore, neque?
    </p>
</div>
<div class="Social"  id="Social">
    <p>Social link here:</p>
    <ul>
        <li> <a href="https://www.facebook.com/parastiware/" target="_blank"><img id="logo" src="includes/images/logos/fb.png"></a></li>
        <li> <a href="https://www.linkedin.com/in/parastiware/" target="_blank"><img id="logo" src="includes/images/logos/link.png"></a></li>
        <li> <a href="https://www.instagram.com/paras_tiware/" target="_blank"><img id="logo" src="includes/images/logos/ins.png"></a></li>
        <li> <a href="https://www.twitter.com/parastiware/" target="_blank"><img id="logo" src="includes/images/logos/tweet.png"></a></li>
    </ul>
</div>

<div class="review-form" id="review-form">
    <p>Review:</p>
            <form action="server.php" method="POST">
            Email:<br>
            <input type="text" name="email" placeholder="Enter Your Email address" required><br>
            Suggestions:<br>
            <textarea  name="review" placeholder="Enter your thought about this site" required></textarea><br>
            <br>
            <input type="submit" name="user_review" value="submit">
                <span id="success-msg"><?php echo($_SESSION['review']); echo($_SESSION['date']); $_SESSION['review']=""; $_SESSION['date']="";//clear review variable?></span>
            </form>

<div>
        <h1>Thanks for Passing by!!!</h1>
</div>
</div>


    
