<?php

include("connection.php");
session_start();

error_reporting(0);
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
    <link rel="stylesheet" href="assets/css/hospitallogin.css">
    <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
<!-- Remix ICON CDN -->
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
   
    
    <title>Hospital Login</title>
    
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

    <div class="container-fluid" >

   <div class="container mt-4"  style=" margin-top:80px;">>
            <div><h1 class="text-center  " style="color:var(--text-color); margin-top:70px;"> Hospital Registration Form </h1></div>
<form action="hospitalinsert.php"  method ="POST" class="mx-5 ">
  <div class="mb-3 mt-3">
    <label for="" class="form-label">Hospital Name:</label>
    <input type="text" class="form-control bg-light"  name="name">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone_no:</label>
    <input type="text" class="form-control"  name="phn">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Email:</label>
    <input type="email" class="form-control"  name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="" class="form-label">Address:</label>
    <input type="text" class="form-control bg-light"  name="address">
  </div>
    <div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input type="text" class="form-control"  name="pw">
  </div>
   
   
  
  <button name="hsubmit" type="submit" class="btn "style="background-color:var(--bg-base-color);color:var(--text-color);">Signup</button>
  
  <!-- <input type="submit" name="btn" class="btn btn-primary" value="Submit" > -->
</form>

          </div>

        </div>
    



  </div>

       

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

    icon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        
        // Toggle icon classes (assuming you're using Remix Icons)
        if (document.body.classList.contains("dark-theme")) {
            icon.classList.remove("ri-sun-line");
            icon.classList.add("ri-moon-fill");
        } else {
            icon.classList.remove("ri-moon-fille");
            icon.classList.add("ri-sun-line");
        }
    }
</script>

    
  </body>
</html>
