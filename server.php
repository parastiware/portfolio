<?php
session_start();
$username="";
$email="";
$errors = array();//error array
//database connected
$db=mysqli_connect("localhost","root","","cv") or die("could not connect to database");
//user registration logics 
if(isset($_POST['register'])){
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
                $user_check_query="SELECT* FROM admintab  WHERE username='$username' or email='$email' LIMIT 1";
                $results=mysqli_query($db,$user_check_query);//querying in database
                $user = mysqli_fetch_assoc($results);
                if($user){
                    if($user['username']=== $username){array_push($errors,"Username already exists");}
                    if($user['email']=== $email){array_push($errors,"This email id is already registered");}
                }


        //register if no errors
        if(count($errors)==0){
            $password=md5($password_1);//this will encrypt password
            $query="INSERT INTO admintab(username,email,password1) VALUES ('$username','$email','$password')";
            mysqli_query($db,$query);
            $_SESSION['username']=$username;
            $_SESSION['success']="Your are now logged in";
            header('location: panel.php');

        }
        //if error redirect
        else{
            header('location: registration.php');
        }
}

//log in logic
 if(isset($_POST['login_user'])){        
        $username= mysqli_real_escape_string($db,$_POST['username']);
        $password= mysqli_real_escape_string($db,$_POST['password']);
                if(empty($username)){
                    array_push($errors,"Username cannot be empty");
                }
                if(empty($password)){
                    array_push($errors,"password cannot be empty");
                }
                if(count($errors)==0){
                    $password=md5($password);
                    $query="SELECT * FROM admintab  WHERE ( username='$username' AND password1='$password') or ( email='$username' AND password1='$password' ) " ;
                    $results=mysqli_query($db,$query);
                    $value=mysqli_fetch_assoc($results);
                            if(!empty($value)){
                                    $_SESSION['username']=$username;
                                    $_SESSION['success']="Login Successfull";
                                    header('location: panel.php');
                            }
                            else{
                                array_push($errors,"Username or password do not match");
                                header('location: login.php');
                            }
                         

                    }
                  else {
                   header('location: login.php');   
                  }
                   
                      
         }
        
             
if(isset($_POST['user_review']))
{   
    $email=mysqli_real_escape_string($db,$_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
         {
            $_SESSION['review-error'] = "Invalid email format";
              header('location: index.php#review-form');

         }
    else{
        $review=mysqli_real_escape_string($db,$_POST['review']);
        $query="INSERT INTO review (email,review) VALUES ('$email','$review')";
        $result= mysqli_query($db,$query);
        if($result){
        $_SESSION['review-sucess']="Review sent successfully";
        }
        else{
        $_SESSION['review-error']="Error occured during processing";
         }
        header('location: index.php#review-form');
        }

}
                     
                    
?>

