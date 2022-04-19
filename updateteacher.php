
<?php

$con = mysqli_connect("localhost","root","","management");




$id = $_GET['id'];
$showquery="select * from teacher where id=$id";
$showdata=mysqli_query($con,$showquery);
$arrdata= mysqli_fetch_array($showdata);
?>

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
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="addteacherdata.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Teacher</span>
          </a>
        </li>
        <li>
          <a href="addstudentdata.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Student</span>
          </a>
        </li>
        <li>
          <a href="teachersdata.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Teachers Data</span>
          </a>
        </li>
        <li>
          <a href="studentsdata.php
          ">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students Data</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
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
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="addteacherdata.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Teacher</span>
          </a>
        </li>
        <li>
          <a href="addstudentdata.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Student</span>
          </a>
        </li>
        <li>
          <a href="teachersdata.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Teachers Data</span>
          </a>
        </li>
        <li>
          <a href="studentsdata.php
          ">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students Data</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>

    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
     
        <!--<img src="images/profile.jpg" alt="">-->
      
        
    
    </nav>

    
  
        </div>
       
        </div>
             
            </div>
          </div>
        
        </div>
      </div>

  </section>


 
 
 <div class="card-header bg-dark" style="margin-left: 200px;">
 <h1 class="text-white text-center" style="margin-left: 500px;">  Update Operation </h1>
 </div><br>


<div style="margin-left: 500px;">

 
<form action="updateteacher.php?id=<?php echo $arrdata['id'];?>" method="POST" enctype="multipart/form-data">
<h3>ADD TEACHER DATA</h3>

 
<table allign="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->

<input type="File" name="file">

<img  style=" width:70px;height:70px;"  src="images/<?php echo $arrdata['image']; ?>"  />
<tr>
<td>FIRST NAME</td>
<td><input style="margin-left: -30px;" value="<?php echo $arrdata['First_Name'];?> " type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input style="margin-left: -30px;"  value="<?php echo $arrdata['Last_Name'];?> " type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>Email</td>
<td><input style="margin-left: 30px;" value="<?php echo $arrdata['Email'];?> "  type="text" name="Email" maxlength="30"/>
(max 30 characters a-z and A-Z adn 1-10)
</td>
</tr>
<tr>
<td>password for login</td>
<td><input style="margin-left: -20px;" value="<?php echo $arrdata['Password'];?> "  type="password" name="Password" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>

<td>DATE OF BIRTH</td>

<td> <input style="margin-left: -200px;"  value="<?php echo $arrdata['Dob'];?> "  type="date" name="Dob" class="form-control" />
</td>
</tr>
<tr>
<td>id number</td>
<td><input style="margin-left: -115px;"  value="<?php echo $arrdata['id_no'];?> "  type="text" name="id_no" maxlength="30"/>
(max 20  1-10)
</td>
</tr>
<tr>
<td>Department</td>
<td><input style="margin-left: 45px;" value="<?php echo $arrdata['Department'];?> "  type="text" name="Department" maxlength="30"/>
(max 30 characters a-z and A-Z and 1-12)
</tr>
<tr>
<td>Type</td>
<td><input style="margin-left: -110px;" value="<?php echo $arrdata['Type'];?> "  type="text" name="Type" maxlength="30"/>
(T for teacher)
</td>
</tr>

<tr>

<td>Address</td>
<td><input value="<?php echo $arrdata['Address'];?> "  type="text" name="Address" maxlength="30"/>
(max 100 characters a-z and A-Z)
</td></tr>
<tr>
<td>Qualification</td>
<td><input style="margin-left: -5px;" value="<?php echo $arrdata['Qualification'];?> "  type="text" name="Qualification" maxlength="30"/>
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
if (isset($_POST["submit"])){

  $idss = $_GET['id'];
$pname = rand(1000,10000)."-".$_FILES["file"]["name"];


$tname = $_FILES["file"]["tmp_name"];


$uploads_dir = 'images';

move_uploaded_file($tname, $uploads_dir.'/'.$pname);

 $First_Name = $_POST['First_Name'];
 $Last_Name = $_POST['Last_Name'];
 $email = $_POST['Email'];
 $password = $_POST['Password'];
 $Birthday_day = date('d-m-y', strtotime($_POST['Dob']));
 // = $_POST['Dob'];
 $Roll_no= $_POST['id_no'];
$class = $_POST['Department'];
$Type= $_POST['Type'];
 $Address = $_POST['Address'];
 $qual = $_POST['Qualification'];

 if($tname != ""){
   

  
  $qu = "UPDATE `teacher` SET `image`='$pname',  `First_Name`= '$First_Name' ,`Last_Name`='$Last_Name',`Email`='$email',`Password`='$password' ,`Dob`= '$Birthday_day',`id_no`= '$Roll_no',`Department`= '$class',`Type`= '$Type',`Address` = '$Address',`Qualification` = '$qual'  WHERE id=$idss";
 
 
 $res=mysqli_query($con, $qu);
 echo $res;
 if($res){
 ?>

<
  <h1 style="font-size: 30px; color:chartreuse;margin-left:500px">"Data Updated"</h1>

 <?php
 
 

   } else {
     echo "Error updating record: " . mysqli_error($con);
   }
   
  }
else{
  
  
  $qu = "UPDATE `teacher` SET   `First_Name`= '$First_Name' ,`Last_Name`='$Last_Name',`Email`='$email',`Password`='$password' ,`Dob`= '$Birthday_day',`id_no`= '$Roll_no',`Department`= '$class',`Type`= '$Type',`Address` = '$Address',`Qualification` = '$qual'  WHERE id=$idss";
 
 
 $res=mysqli_query($con, $qu);
 echo $res;
 if($res){
 
  ?>

  <h1 style="font-size: 30px; color:chartreuse;margin-left:500px">"Data Updated"</h1>
     <?php
 
   } else {
     echo "Error updating record: " . mysqli_error($con);
   }
   
  }
}
?>