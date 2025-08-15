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
    <style>
         @media(max-width:500px){
    
  .ri-sun-line{
    display:none;
  }
    
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
           <div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0" style="height:100vh;">
                <h2 class="mb-3" ><strong>List of Vaccine report</strong></h2>
                
                
            
                <div class="mt-4 mb-4 p-3  border shadow-sm lh-sm">
                    <!--child  Listing-->
                        
                       <div class="table-responsive child-list">
    <table class="table table-bordered table-striped mt-0" id="childList">
        <thead>
            <tr>
                <th class="text-center">Appointment Id</th>
                <th class="text-center" scope="row">Child Name</th>
                <th class="text-center">Hospital Name</th>
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
                <th class="text-center">Vaccine Name</th>
                <th class="text-center">Status</th>   
                <th class="text-center">Action</th>                                                                                            
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection.php');
            $qry = "
                SELECT 
                    parent_tbl.p_name AS pname, 
                    hospital_tbl.h_name AS hname, 
                    vaccines_tbl.v_name AS vname, 
                    appointment_tbl.* 
                FROM appointment_tbl 
                INNER JOIN parent_tbl 
                    ON appointment_tbl.parent_id = parent_tbl.parent_id 
                INNER JOIN hospital_tbl 
                    ON appointment_tbl.hospital_id = hospital_tbl.hospital_id 
                INNER JOIN vaccines_tbl 
                    ON appointment_tbl.v_id = vaccines_tbl.v_id 
                WHERE appointment_tbl.hospital_id = {$_SESSION['hospital_session']}
            ";

            $res = mysqli_query($conn, $qry);

            if(mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_array($res)){
                    $id = $row['appoint_id'];
                    $c_name = $row['pname'];
                    $h_name = $row['hname'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $v_name = $row['vname'];
                    $status = $row['app_status'];

                    // Determine action button/text
                    if($status === "Accepted"){
                        $statusDisplay = "<a href='vaccinated.php?id={$id}' class='btn btn-success btn-sm'>Vaccinated</a>";
                    } elseif($status === "Pending"){
                        $statusDisplay = "<span class='btn btn-warning text-dark btn-sm'>Process</span>";
                    } elseif($status === "Vaccinated"){
                        $statusDisplay = "<span class=' '>Process Done</span>";
                    } else {
                        $statusDisplay = "---";
                    }

                    echo "<tr>
                        <td class='align-middle text-center'>{$id}</td>
                        <td scope='row' class='align-middle text-center'>{$c_name}</td>
                        <td class='text-center'>{$h_name}</td>
                        <td class='text-center'>{$date}</td>
                        <td class='text-center'>{$time}</td>
                        <td class='text-center'>{$v_name}</td>
                        <td class='text-center'>{$status}</td>
                        <td class='text-center'>{$statusDisplay}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center'>Data not found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

                    <!--/child Listing-->
                   

                    
                </div>

                <!--Footer-->
                
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
