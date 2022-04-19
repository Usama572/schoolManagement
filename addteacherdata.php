<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">



     <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src=
"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
  



     
   </head>
<body >
<?php

include "Admin.php";
?>

 
 
 <div class="card-header bg-dark" style="margin-left: 200px;">
 <h1 class="text-white text-center" style="margin-left: 500px;">  Enter Teacher Data </h1>
 </div><br>


<div style="margin-left: 500px;">


<form method="POST" enctype="multipart/form-data">
<h3>ADD TEACHER DATA</h3>

 
<table  allign="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->

<input type="File" name="file">
<tr>
<td>FIRST NAME</td>
<td><input style="margin-left: -30px;" type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>LAST NAME</td>
<td ><input style="margin-left: -30px;"  type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>Email</td>
<td><input style="margin-left: 30px;" type="text" name="Email" maxlength="30"/>
(max 30 characters a-z and A-Z adn 1-10)
</td>
</tr>
<tr>
<td>password for login</td>
<td><input style="margin-left: -20px;" type="password" name="Password" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>

<td>DATE OF BIRTH</td>

<td> <input style="margin-left: -200px;" type="date" name="Dob" class="form-control" />
</td>
</tr>
<tr>
<td>id number</td>
<td><input style="margin-left: -115px;" type="text" name="id_no" maxlength="30"/>
(max 20  1-10)
</td>
</tr>
<tr>
<td>Department</td>
<td><input style="margin-left: 45px;" type="text" name="Department" maxlength="30"/>
(max 30 characters a-z and A-Z and 1-12)
</tr>
<tr>
<td>Type</td>
<td><input style="margin-left: -110px;" type="text" name="Type" maxlength="30"/>
(T for teacher)
</td>
</tr>

<tr>

<td >Address</td>
<td ><input type="text" name="Address" maxlength="30"/>
(max 100 characters a-z and A-Z)
</td></tr>
<tr>
<td>Qualification</td>
<td><input  style="margin-left: -5px;" type="text" name="Qualification" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>
<input type="submit" name="submit" value="submit"></td>
</tr>
 
</form>
</div>















</body>
</html>













<?php

$con = mysqli_connect("localhost","root","","management");



if (isset($_POST["submit"]))
 {
     #retrieve file title
    // $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
   
    $Birthday_day = date('d-m-y', strtotime($_POST['Dob']));
  
    $class = $_POST['id_no'];
    $dep = $_POST['Department'];
    $Type = $_POST['Type'];
    $add = $_POST['Address'];
    $qual = $_POST['Qualification'];

    $insert_sql = "INSERT INTO `teacher`(image,First_Name, Last_Name,Email, Password, Dob, id_no, Department, Type, Address, Qualification) VALUES('$pname','$First_Name','$Last_Name','$email','$password','$Birthday_day','$class','$dep','$Type','$add','$qual')";
    $res = mysqli_query($con,$insert_sql);

    if($res){ ?>
      <h1 style="color: chartreuse;font-size:30px;margin-top:20px;margin-left:500px">
        Data Inserted
      </h1>
            <?php
    }
    else {
        echo "not inserted";
    }
}