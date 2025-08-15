<?php
// error_reporting(0);
include('connection.php');
session_start();
if(!isset($_SESSION['parent_session'])){
    echo"<script>window.location.href='../home.php'</script>";
}

$qry ="SELECT * FROM parent_tbl WHERE parent_id =$_SESSION[parent_session] ";

$res = mysqli_query($conn,$qry);

$row = mysqli_fetch_assoc($res);

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
   
    
    <title>parent Panel</title>
    <style>
        :root{
    --bg-base-color:#eaf5f4;
    --text-color2:#eaf5f4;
    --bg-second:#032944;
    --text-color:#032944;


}
        .updatebtn{
            margin-top:20px;
            background-color:var(--bg-base-color);
            color:var(--text-color);
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
                        <a href="parentprofile.php">  
                        <img src="<?php echo $row['p_image'];?>" alt="" class="rounded-circle" />

                        </a>
                        <p><strong><?php echo $row['p_name']  ?></strong></p>
                        <span class="text-primary small"><strong><?php echo $row['p_email']  ?></strong></span>
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
    <div class="container admin-profile p-2">
            <h1>My Profile</h1>
            <div>
    <form  method="POST">
        <div class="mb-3 mt-3">
    
    <!-- <input type="text" class="form-control bg-light"  name="id" value=" hidden > 
  </div> -->
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['p_name']  ?>"  required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['p_email']  ?>" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd"  value="<?php echo $row['P_password']  ?>" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Phone no:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="phn"  value="<?php echo $row['p_phone']  ?>" required>
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


            $qry="UPDATE parent_tbl SET p_name = '$name',p_email='$email',P_password = '$password', p_phone = '$phn' WHERE parent_id = {$_SESSION['parent_session']}";

            $res = mysqli_query($conn,$qry);
            if($res){
                echo"<script>
                        alert('Profile Updated Succussful');
                        window.location.href='parentprofile.php';
                </script>";
            }
        }

    ?>

            </div>
            <div class="container">
                <div class=image style="width:300px;">
                    <img src="<?php echo $row['p_image'];  ?>"  alt="img" width="200">

                </div>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image" ><br>
                    <button type="submit" name="btnupload" class="btn updatebtn " >Upload image</button>

                </form>
                <?php

                if(isset($_POST['btnupload'])){
                    $imageName = $_FILES['image']['name'];
                    $tempName = $_FILES['image']['tmp_name'];
                    $path = "assets/image/$imageName";
                    move_uploaded_file($tempName,$path);

                    $qry = "UPDATE parent_tbl SET p_image='$path' WHERE parent_id = $_SESSION[parent_session]";

                    $res =mysqli_query($conn,$qry);

                    if($res){
                        echo
                        "<script>
                        alert('Image Changed Succussfully');
                        window.location.href='parentprofile.php';
                        
                        </script>";
                    }
                }

                ?>


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
