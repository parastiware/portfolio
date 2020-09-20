

<?php
session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['msg']="You must log in to continue!!";
    echo($_SESSION['msg']);
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
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script type="text/javascript">
    function dataEntry() {
    $username=$document.getElementById("")
    
        }
    </script>


    <title> Dashboard</title>
    
</head>
<body>
    <div>
        
        <?php if(isset($_SESSION['username'])):?>   
        <h1>Welcome to your admin portal <?php echo($_SESSION['username']); ?>
       <?php  $db=mysqli_connect("localhost","root","","cv") or die("could not connect to database"); 
       $query="SELECT * FROM admintab";
       $result=mysqli_query($db,$query);
       ?>
       <h2>List of registered users</h2>
         <table>
         <thead>
         <tr>
         <th>Username</th>
        <th>Email</th>
        <th>Action</th>
         </tr>
         </thead>
         
        <?php
        while($data=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td><?php echo($data['username']); ?></td>
        <td><?php echo($data['email']); ?></td>
        <td>
            <a href="panel.php?Edit=true&id=<?php echo $data['user_id']?>"><button name="makeadmin" >Makeadmin</button></a>
            <a href="panel.php?Delete=true&id=<?php echo $data['user_id']?>"><button name="Delete">delete</button></a>
            
        </td>
        </tr>
        <?php
        }
        
        if(isset($_GET['Delete'])){
            $id=$_GET['id'];
            $query="INSERT INTO detail(Fname,Mname,Lname) VALUES ('$email','$review')";
            $result=mysqli_query($db,$query);
            if($result)
            {
                echo"User removed sucessfully";
            }
            else{
                echo"error couldn't remove user";
            }
                $page = $_SERVER['PHP_SELF'];
                $sec = "0";
                header("Refresh: $sec; url=$page");
        }
       //to make default admin of site
        if(isset($_GET['makeadmin'])){
            $id=$_GET['id'];
            $query="INSERT INTO detail(Fname,Mname,Lname,DOB,email) VALUES ('$Fname','$Mname','$Lname','$DOB',$email')";
            $query1="DELETE * from detail";
            $result=mysqli_query($db,$query1);
            if($result)
            {
                $result1=mysqli_query($db,$query);
                if($result1){
                    echo"Made Admin Successfully";
                 }
                 else{
                     echo"Error in adding user data";
                 }
                
            }
            else{
                echo"error couldn't process the request";
            }
                $page = $_SERVER['PHP_SELF'];
                $sec = "0";
                header("Refresh: $sec; url=$page");
        }
        ?>
        
        </table>
        <button><a href="panel.php?logout='1'">LOG OUT</a></button>
        <button><a href="registration.php">Registration</a></button>
        <button><a href="home.php">View site</a></button>
        <?php endif ?>
        
    </div>
    
    
</body>
</html>