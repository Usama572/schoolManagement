<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href= "https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
 

    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="    https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">










<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>


<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>






   </head>
<body>
 <?php
 include "Admin.php";
 ?>
  <div style="overflow-x:auto;margin-left:250px;margin-right:20px;">

<h1>Teachers Data</h1>
<!-- <div>
        Toggle column: <a class="toggle-vis" data-column="0">image</a> - <a class="toggle-vis" data-column="1">First_Name</a> - <a class="toggle-vis" data-column="2">Last_Name</a> - <a class="toggle-vis" data-column="3">Email</a> - <a class="toggle-vis" data-column="4">Password</a> - <a class="toggle-vis" data-column="5">Dob</a> - <a class="toggle-vis" data-column="6">id_no</a> - <a class="toggle-vis" data-column="7">Department</a> - <a class="toggle-vis" data-column="8">Type</a> - <a class="toggle-vis" data-column="9">Address</a> - <a class="toggle-vis" data-column="10">Qualification</a>
    </div> -->
<table id="jobTable" class="table table-striped table-bordered nowrap" style="width:fit-content">
<thead tyle="margin-left: 250px;width:500px">

<tr>

    <th>image</th>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Dob</th>
    <th>id_no</th>
    <th>Department</th>
    <th>Type</th>
    <th>Address</th>
    <th>Qualification</th>
    <th>Delete</th>
    <th>Update</th>
</tr>
</thead>

</div>
<?php



$con = mysqli_connect("localhost","root","","management");


$selectquery="select * from teacher";
$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);
$res=mysqli_fetch_array($query);
while($res=mysqli_fetch_array($query)){
    ?>
    
    <tr>
    <td ><?php echo "<img  src=images/$res[image]"; ?> style=" width:70px;height:70px;" /></td>

    <td><?php echo $res['First_Name'];?> </td>
    <td><?php echo $res['Last_Name'];?> </td>
    <td><?php echo $res['Email'];?> </td>
    <td><?php echo $res['Password'];?> </td>
    <td><?php echo $res['Dob'];?> </td>
    <td><?php echo $res['id_no'];?> </td>
    <td><?php echo $res['Department'];?> </td>
    <td><?php echo $res['Type'];?> </td>
    <td><?php echo $res['Address'];?> </td>
    <td><?php echo $res['Qualification'];?> </td>

<td> <button style="background-color: black;" class="btn-danger btn"> <a href="deleteteacher.php?id=<?php echo $res['id']; ?>" > Delete </a>  </button> </td>
<td> <button style="background-color: black;"class="btn-primary btn"> <a href="updateteacher.php?id=<?php echo $res['id']; ?>" > Update </a> </button> </td>

    </tr>


<?php
}
    
    ?>

</tbody>

</table>
</div>

</div>

</body>
</html>
<script>  
$(document).ready(function() {
    $('#jobTable').DataTable( {
      responsive: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
           
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ]
        
    } ); new $.fn.dataTable.FixedHeader( table );
} );
</script>    
<?php
?>  
</section>

