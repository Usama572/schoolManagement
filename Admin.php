

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet"  href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     


    
     
   </head>
<body>

	<style>
		.nav-link {
			color: green;
		}

		.nav-item>a:hover {
			color: green;
		}

		/*code to change background color*/
		.nav-links>.active>a {
			background-color: #C0C0C0;
			color: green;
		}
	</style>

  

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>




      <ul class="nav-links">
        <li class="nav-item">>
          <a  class=" active"  href="dashboard.php" >
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li><br>
        <li class="nav-item">
        <a class="#"  href="addteacherdata.php" >
          <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Teacher</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="#"  href="addstudentdata.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Student</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class="#"  href="teachersdata.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Teachers Data</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="studentsdata.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students Data</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
      	<li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li class="nav-item">
        	<a class=""  href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
        	<a class="disabled"  href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>

        

      </ul>
    

      <script>
        $(document).ready(function () {
  
            $('ul.nav-links> li')
                    .click(function (e) {
                $('ul.nav-links > li')
                    .removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
  </div>
  <div style="margin-left: 300px;"> 
  <nav>
  
  <div style="margin-left: -60px;font-size:20px;size:20px;color:white" class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        
      </div>
      <div class="search-box">
        
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
<!--      
        <?php
 session_start();
 echo "Welcome ". $_SESSION['Name'];
 //echo "your id =".$_SESSION['id'];
?> 
      </div> -->
    </nav>
 
   
    </div>
    
     
            </div>
          </div>
        
        </div>
      </div>

  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>


  
 




 

 
</body>
</html>

