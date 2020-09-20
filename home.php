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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
<div class="container">
        <div class="Intro">
                        <?php
                        $db=mysqli_connect("localhost","root","","cv") or die("Error connecting the database");
                        $query="SELECT* FROM detail";
                        $result=mysqli_query($db,$query); 
                        $data=mysqli_fetch_assoc($result);
                        ?>
                        <p>I am <?php echo($data['Fname']); echo("&nbsp;");  echo($data['Mname']); echo("&nbsp;");  echo($data['Lname']);?> and welcome to my site.</p>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    <img src="includes/images/carousel/img1.jpg" alt="img1">
                    </div>

                    <div class="item">
                    <img src="includes/images/carousel/img2.jpg" alt="img2">
                    </div>

                    <div class="item">
                    <img src="includes/images/carousel/img3.jpg" alt="img3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>

        <div class="About">
            <p id="title"> About content here:</p>
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
</div>
<div class="Social"  id="Social">
    <p>Social link here:</p>
    <ul>
        <li> <a href="https://www.facebook.com/parastiware/" target="_blank"><img id="logo" src="includes/images/logos/fb.png"></a></li>
        <li> <a href="https://www.linkedin.com/in/parastiware/" target="_blank"><img id="logo" src="includes/images/logos/link.png"></a></li>
        <li> <a href="https://www.instagram.com/paras_tiware/" target="_blank"><img id="logo" src="includes/images/logos/ins.png"></a></li>
        <li> <a href="https://www.twitter.com/parastiware/" target="_blank"><img id="logo" src="includes/images/logos/tweet.png"></a></li>
        <li> <a href="https://github.com/parastiware" target="_blank"><img id="logo" src="includes/images/logos/github.png"></a></li>
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
            <button type="submit" name="user_review" class="btn btn-primary" >Submit</button>
                <span id="success-msg"><?php echo($_SESSION['review']); echo($_SESSION['date']); $_SESSION['review']=""; $_SESSION['date']="";//clear review variable?></span>
            </form>

<div>
        <h1>Thanks for Passing by!!!</h1>
</div>
</div>


    
