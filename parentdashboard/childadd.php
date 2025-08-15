<?php
include('connection.php');
session_start();
if(!isset($_SESSION['parent_session'])){
    header("Location:../home.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
   
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
<!-- Remix ICON CDN -->
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
   
    
    <title>Parent Panel</title>
    <style>
.gender-select {
    width: 200px;
    background-color: var(--bg-base-color);
    color: var(--text-color);
    padding: 8px 12px;
    border: 1px solid var(--text-color);
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    text-align: left;
}

.gender-select:focus {
    outline: none;
    border-color: #3498db; 
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}



    </style>
    
</head>
 <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><img src="./assets/image/logo.png" alt="" class="logo" width="100"><span class="small">Your Panel</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row  justify-content-between ">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8  pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>

                        </span>
                       
                           <!-- <i class="ri-moon-fill" id="toggleDark"></i> -->


                        <!--Toggle sidebar-->
                    </div>

                    <div class="col-sm-4 col-8 dark-icon" style="margin-top: 15px;">
                           <i class="ri-sun-line" id="toggleDark"></i>
                    </div>
                
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                      <div class="avatar text-center">
                       
                        <?php
                        include('connection.php');
                        $qry ="SELECT * FROM parent_tbl WHERE parent_id = {$_SESSION['parent_session']} ";

                       $res = mysqli_query($conn,$qry);

                     $row = mysqli_fetch_array($res);

                      echo"
                       <a href='parentprofile.php'>  
                        <img src='".$row['p_image']."' alt='' class='rounded-circle' />

                        </a>
                        <p><strong>".$row['p_name']."</strong></p>
                       <span class='text-primary small'><strong>".$row['p_email']."</strong></span>";

                        ?>
                       
                       
                    </div>
                  
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                      <?php
                      include('navigation.php')

                      ?>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
          <div class="container">
            <div><h1 class="text-center m-4 " style="color:var(--text-color2);">Child details </h1></div>
<form action="childinsert.php"  method ="POST" class="mx-5 ">
    <div class="mb-3 mt-3">

            <!-- <label for="" class="form-label">Id:</label> -->
            <input type="hidden" readonly class="form-control" id="id" name="pid" value="<?php echo $row['parent_id']  ?>"  >
            </div>
  <div class="mb-3 mt-3">
    <label for="" class="form-label">Child Name:</label>
    <input type="text" class="form-control bg-light"  name="name">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Father's Name:</label>
    <input type="text" class="form-control"  name="fname">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Child Age:</label>
    <input type="text" class="form-control"  name="age">
  </div>
 
   <div class="mb-3">
    <label for="" class="form-label">Gender:</label><br>
    <select name="gender" class="btn gender-select ">
      <option>Baby girl</option>
      <option>Baby boy</option>
    </select>
  </div>
  <br>
  
  <button name="submit" type="submit" class="btn "style="background-color:var(--bg-base-color);color:var(--text-color);">Submit</button>
  
  <!-- <input type="submit" name="btn" class="btn btn-primary" value="Submit" > -->
</form>

          </div>

        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>


  <!-- -------------- Theme-------------------- -->

     <script>
    var icon = document.getElementById("toggleDark");

    // Load saved theme on page load
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-theme");
        icon.classList.remove("ri-sun-line");
        icon.classList.add("ri-moon-fill");
    } else {
        document.body.classList.remove("dark-theme");
        icon.classList.remove("ri-moon-fill");
        icon.classList.add("ri-sun-line");
    }

    icon.onclick = function () {
        document.body.classList.toggle("dark-theme");

        if (document.body.classList.contains("dark-theme")) {
            icon.classList.remove("ri-sun-line");
            icon.classList.add("ri-moon-fill");
            localStorage.setItem("theme", "dark");
        } else {
            icon.classList.remove("ri-moon-fill");
            icon.classList.add("ri-sun-line");
            localStorage.setItem("theme", "light");
        }
    };
</script>


    
  </body>
</html>
