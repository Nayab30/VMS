<?php
include('connection.php');
session_start();
if(!isset($_SESSION['hospital_session'])){
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
   
    
    <title>Hospital Panel</title>
    
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
                    <h3 class="logo"><a href="#" class="text-secondary logo"><img src="./assets/image/logo.png" alt="" class="logo" width="100"><span class="small">Hospital Panel</span></a></h3>
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
                        $qry ="SELECT * FROM hospital_tbl WHERE hospital_id = {$_SESSION['hospital_session']} ";

                       $res = mysqli_query($conn,$qry);

                     $row = mysqli_fetch_array($res);

                      echo"
                       <a href='hospitalprofile.php'>  
                        <img src='".$row['h_image']."' alt='' class='rounded-circle' />

                        </a>
                        <p><strong>".$row['h_name']."</strong></p>
                       <span class='text-primary small'><strong>".$row['h_email']."</strong></span>";

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
             <div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0" style="height:140vh;">
                <h2 class="mb-3" ><strong>Dashboard</strong></h2>

                <div class="container">
                    <div class="d-row">
                        <div class="d-col">
                    <?php  
                        $qry ="SELECT * FROM appointment_tbl";

                        $res = mysqli_query($conn,$qry);
                        $appointment_count =mysqli_num_rows($res);
                        
                        ?>
                             <div class="number"><?php echo $appointment_count  ?></div>
                            <div class="cardname">Appointments</div>
                        </div>
                        
                        <div class="d-col">
                    <?php  
                        $qry ="SELECT * FROM vaccines_tbl";

                        $res = mysqli_query($conn,$qry);
                        $vaccine_count =mysqli_num_rows($res);
                        
                        ?>
                             <div class="number"><?php echo $vaccine_count  ?></div>
                            <div class="cardname">Vaccines</div>
                        </div>
                      

                    </div>


                </div>
                <div class="container">
                       <h2 class="mt-4 mb-4" ><strong>My Profile</strong></h2>
                    <form  method="POST">
        <div class="mb-3 mt-3">
    
    <!-- <input type="text" class="form-control bg-light"  name="id" value=" hidden > 
  </div> -->
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Hospital Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['h_name']  ?>"  required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['h_email']  ?>" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd"  value="<?php echo $row['h_password']  ?>" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Phone no:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="phn"  value="<?php echo $row['h_phone']  ?>" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Address:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="address"  value="<?php echo $row['h_address']  ?>" required>
        </div>
        <button type="submit" class="btn updatebtn " name="updatebtn">Update Profile</button>
    </form>

    <?php
        if(isset($_POST['updatebtn'])){

            $name =$_POST['name'];
            $email = $_POST['email'];
            $password =$_POST['pswd'];
            $phn =$_POST['phn'];
            $address =$_POST['address'];


            $qry="UPDATE hospital_tbl SET h_name = '$name',h_email='$email',h_password = '$password', h_phone = '$phn', h_address = '$address' WHERE hospital_id = {$_SESSION['hospital_session']}";

            $res = mysqli_query($conn,$qry);
            if($res){
                echo"<script>
                        alert('Profile Updated Succussful');
                        window.location.href='dashboard.php';
                </script>";
            }
        }

    ?>

            </div>
            <div class="container">
                <div class=image style="width:300px;">
                    <img src="<?php echo $row['h_image'];  ?>"  alt="img" width="200">

                </div>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image" ><br><br>
                    <button type="submit" name="btnupload" class="btn updatebtn " >Upload image</button>

                </form>
                <?php

                if(isset($_POST['btnupload'])){
                    $imageName = $_FILES['image']['name'];
                    $tempName = $_FILES['image']['tmp_name'];
                    $path = "assets/image/$imageName";
                    move_uploaded_file($tempName,$path);

                    $qry = "UPDATE hospital_tbl SET h_image='$path' WHERE hospital_id = $_SESSION[hospital_session]";

                    $res =mysqli_query($conn,$qry);

                    if($res){
                        echo
                        "<script>
                        alert('Image Changed Succussfully');
                        window.location.href='dashboard.php';
                        
                        </script>";
                    }
                }

                ?>


            </div>


                </div>



</div>



            <!--  Content right -->
           
                <!--Footer-->

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
