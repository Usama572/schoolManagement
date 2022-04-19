

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="login">
  <h1>Login Here</h1>
  <form method="post" action="">
    <p><input type="text" name="Name" value="" placeholder="Username "></p>
    
    <p><input type="password" name="Password" value="" placeholder="Password"></p>
  
      
    </p>
    <p class="submit"><input type="submit" name="login" value="Login"></p>
  </form>
</div>

<div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div>
</body>
</html

<?php
use LDAP\Result;
$servername="localhost";
$username="root";
$password="";
$dbname="management";
$conn = new mysqli($servername, $username, $password,$dbname);
session_start();
if (isset($_POST['login'])){
   // $name=$_POST['id'];
$name=$_POST['Name'];
    $Password=$_POST['Password'];
    //$userType=$_POST['Type'];
    $query="select * from admin where Name='".$name."' and Password ='".$Password."'";
$result=mysqli_query($conn,$query);
if($result){
    while($row=mysqli_fetch_array($result)){
        echo'<script type="text/javascript">alert("login successfull as'.$row['Type'].'")</script>';
        $_SESSION['Name']=$row['Name'];
    if($row["Type"]=="T"){
        header("location: Teacher.php");
        ?>
         
    
    <?php
    }

    else if($row["Type"]=="s"){
        header("location: student.php");
        ?>
    <?php
    }
    else if($row["Type"]=="A"){
        header("location: Admin.php");
       
   
}

}
}
}
?>
