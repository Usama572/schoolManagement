<?php

    
    

$con = mysqli_connect("localhost","root","","management");

$id = $_GET['id'];

$q = " DELETE  FROM `student` WHERE id = $id ";

mysqli_query($con, $q);

header('location:studentsdata.php');

?>