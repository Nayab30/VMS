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

        .time-select {
    width: 700px;
    background-color: var(--bg-base-color);
    color: var(--text-color);
    padding: 8px 12px;
    border: 1px solid var(--text-color);
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    text-align: left;
}

.time-select:focus {
    outline: none;
    border-color: #3498db; 
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}
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
            
    <div class="container admin-profile  p-2" >
            <h1>Book Appointment</h1>
        <div>
            <div style="width:700px;" >
                <form  method="POST">
            <div class="mb-3 mt-3">
            <div class="mb-3 mt-3">
            <!-- <label for="" class="form-label">Id:</label> -->
            <input type="hidden" readonly class="form-control" id="id" name="pid" value="<?php echo $row['parent_id']  ?>"  >
            </div>
    
            <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" readonly class="form-control" id="name"  name="name" value="<?php echo $row['p_name']  ?>" >
            </div>
        <br>
        <div class="mb-3 mt-3">
        <label for="" class="form-label">Select Hospital:</label><br>
        <select name="hid" class="btn time-select " style="text-align:left;" >
        <option hidden>Hospital Name:</option>
        <?php

        $qry="SELECT * FROM hospital_tbl WHERE h_status='Activate'";

        $res=mysqli_query($conn,$qry);
        foreach($res as $row){
        echo"<option value='$row[hospital_id]'>$row[h_name]'</option>";
        }


        ?>


        </select>
        <div class="mb-3 mt-3">
            <label for="date" class="form-label">Date:</label><br>
            <input type="date" class="form-control" id="email"  name="date" value="" required>
        </div>
        <br>
        <div class="mb-3">
        <label for="" class="form-label">Time:</label><br>

        <select name="time" class="time-select">
        <option hidden>Select Any time slot:</option>
        <option>9am-11am</option>
        <option>11am-1pm</option>
        <option>3pm-5pm</option>
        <option>5pm-7pm</option>
        <option>7pm-9pm</option>
        </select>
        </div>
        <div class="mb-3 mt-3">
        <label for="" class="form-label">Select Vaccine:</label><br>
        <select name="vid" class="btn time-select " style="text-align:left;" >
        <option hidden>Vaccines available:</option>
        <?php

        $qry="SELECT * FROM vaccines_tbl WHERE v_status='Available'";

        $res=mysqli_query($conn,$qry);
        foreach($res as $row){
        echo"<option value='$row[v_id]'>$row[v_name]</option>";
        }


       ?>


        </select>
        
        <br>
        <button type="submit" class="btn updatebtn " name="btnbook">Book Appointment</button>
        </form>

        <?php
        if(isset($_POST['btnbook'])){

            $pid = $_POST['pid'];
            $hid = $_POST['hid'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $vid = $_POST['vid'];

            $qry="INSERT INTO appointment_tbl (parent_id, hospital_id, date, time,v_id) VALUES ('$pid','$hid','$date','$time','$vid')";

            $res =mysqli_query($conn,$qry);

        if(!$res){
        die("Error".mysqli_error($conn));
        }else{
           
            echo"<script>
            alert('Appointment booked succussfully');
            window.location.href='parentappoint.php';
    
            </script>";
        }
        }

    ?>
   

          </div>
          <div style="width:1000px;">
            <h2 class="mt-4 mb-4">Appointment List</h2>
                  <div class="table-responsive child-list">
    <table class="table table-bordered table-striped mt-0" id="childList">
        <thead>
            <tr>
                <th class="text-center">Appointment Id</th>
                <th class="text-center" scope="row">Parent Name</th>
                <th class="text-center">Hospital Name</th>
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
                <th class="text-center">Vaccine Name</th>
                <!-- <th class="text-center">Status</th>                                                                                                -->
               
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
    appointment_tbl.*,
    CASE 
        WHEN appointment_tbl.app_status = 'accepted' THEN 'Accepted'
        WHEN appointment_tbl.app_status = 'rejected' THEN 'Rejected'
        ELSE 'Pending'
    END AS status_label
FROM appointment_tbl 
INNER JOIN parent_tbl ON appointment_tbl.parent_id = parent_tbl.parent_id 
INNER JOIN hospital_tbl ON appointment_tbl.hospital_id = hospital_tbl.hospital_id 
INNER JOIN vaccines_tbl ON appointment_tbl.v_id = vaccines_tbl.v_id 
WHERE appointment_tbl.parent_id = " . intval($_SESSION['parent_session']);

            $res = mysqli_query($conn, $qry);
            
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_array($res)) {
                    $id      = $row['appoint_id'];
                    $c_name  = $row['pname'];
                    $h_name  = $row['hname'];
                    $date    = $row['date'];
                    $time    = $row['time'];
                    $v_name  = $row['vname'];
                    $status  = $row['status_label'];
                    
                    echo "<tr>
                        <td class='align-middle text-center'>{$id}</td>
                        <td scope='row' class='align-middle text-center'>{$c_name}</td>
                        <td class='text-center'>{$h_name}</td>
                        <td class='text-center'>{$date}</td>
                        <td class='text-center'>{$time}</td>
                        <td class='text-center'>{$v_name}</td>";
                        // <td class='text-center'>";
                    
                    // // Show status badge
                    // if ($status == "Accepted") {
                    //     echo "<span class='badge bg-success'>Accepted</span>";
                    // } elseif ($status == "Rejected") {
                    //     echo "<span class='badge bg-danger'>Rejected</span>";
                    // } else {
                    //     echo "<span class='badge bg-warning text-dark'>Pending</span>";
                    // }
                    
                    // echo "</td>
                    //     <td class='text-center'>";
                    
                    // Show action buttons only if pending
                    // if ($status == "Pending") {
                    //     echo "<a class='btn btn-success mt-2' style='color:white;' href='appoint-accept.php?id={$id}'>Approve</a>
                    //           <a class='btn btn-danger mt-2' style='color:white;' href='appoint-reject.php?id={$id}'>Reject</a>";
                    // } else {
                    //     echo "-"; // No action needed
                    // }
                    
                    // echo "</td>
                    // </tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center'>Data not found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
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
