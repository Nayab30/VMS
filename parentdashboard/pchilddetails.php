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
           <div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0" style="height:100vh;">
                <h2 class="mb-3" ><strong>Child Details</strong></h2>
                
                 <button class="btn  btn-lg m-4" style="background-color:var(--bg-base-color);"><a href="childadd.php" style="text-decoration:none;color:var(--text-color);">Add new Child</a></button>
            
                <div class="mt-4 mb-4 p-3  border shadow-sm lh-sm">
                    <!--child  Listing-->
                        
                        <div class="table-responsive child-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="childList">
                                <thead>
                                    <tr>
                                    
                                        <th class="text-center">Id</th>
                                                <th class="text-center" scope="row">Child Name</th>
                                                <th class="text-center">Father's Name</th>
                                               
                                                <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        include('connection.php');
                       $qry = "
                            SELECT 
                            parent_tbl.p_name AS pname, 
                            child_tbl.*
                            FROM child_tbl 
                            INNER JOIN parent_tbl ON child_tbl.parent_id = parent_tbl.parent_id WHERE child_tbl.parent_id = " . intval($_SESSION['parent_session']);

                        $res = mysqli_query($conn,$qry);

                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){
                            $id =$row['child_id'];
                            $name=$row['c_name'];
                            $parent_name=$row['pname'];
                            $fathername =$row['c_fathername'];
                            $age =$row['c_age'];
                            $gender = $row['c_gender'];
                          
                                            echo"<tr>
                                                <td class='align-middle text-center'>".$id."</td>
                                                <td scope='row' class='align-middle text-center'>".$name."</td>
                                                <td class='text-center' >".$fathername."</td>
                                             
                                            <td class='text-center'>
                                            <button class='btn btn-info mt-2 ml-2' style='color:white;'data-toggle='modal' data-target='#idview'><i class='fa-solid fa-eye'></i></button>

                                             <button class='btn btn-success mt-2 ml-2 '><a style='color:white;' href='childupdate.php?id=$row[child_id]' ><i class='fa-solid fa-pen-to-square'></i></a></button>

                                              <button class='btn btn-danger mt-2 ml-2 '><a style='color:white;' href='childdelete.php?id=$row[child_id]' ><i class='fa-solid fa-trash'></i></a></button>
                                         
                                        </td>
                                    </tr>";
                    }
                    }else{

                        echo"<td colspan='8' class='text-center'>Data not found</td>";
                    }

                                    ?>
                            </table>
                        </div>
                    </div>
                    <!--/child Listing-->
                   

                    <!--child Update Modal-->
        <div class="modal fade" id="idview" tabindex="-1" role="dialog"    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color:var(--text-color); background-color:var(--login-bg);">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                            <div class="modal-content" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                <div class="modal-header" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Child Details </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                    
                        <?php
                        include('connection.php');
                        $qry = "
                            SELECT 
                            parent_tbl.p_name AS pname, 
                            child_tbl.*
                            FROM child_tbl 
                            INNER JOIN parent_tbl ON child_tbl.parent_id = parent_tbl.parent_id WHERE child_tbl.parent_id = " . intval($_SESSION['parent_session']);

                        $res = mysqli_query($conn,$qry);

                        $row=mysqli_fetch_assoc($res);
                        
                        
                    ?>
                                            
            <div class="container">
                <ul class="list-group" style="color:var(--text-color); background-color:var(--bg-base-color);">
                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Id : <?php echo $row['child_id']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Name : <?php echo $row['c_name']  ?></li>

                      <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">User Name : <?php echo $row['pname']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Father's Name : <?php echo $row['c_fathername']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Age : <?php echo $row['c_age']  ?></li>

                    <li class="list-group-item" style="color:var(--text-color); background-color:var(--bg-base-color);">Child Gender: <?php echo $row['c_gender']  ?></li>
                    
                </ul>
            </div>
                                            
                                        

                                 
                                </div>
                                <div class="modal-footer" style="color:var(--text-color); background-color:var(--bg-base-color);">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:var(--text-color); background-color:var(--bg-base-color);">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--child Update Modal-->
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
