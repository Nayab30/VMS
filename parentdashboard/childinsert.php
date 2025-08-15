<?php
// error_reporting(0);

include ('connection.php');


if(isset($_POST['submit'])){
    $pid=$_POST['pid'];
    $name =$_POST['name'];
    $fathername =$_POST['fname'];
    $age =$_POST['age'];
    $gender=$_POST['gender'];
  



  $qry="INSERT INTO child_tbl (parent_id, c_name, c_fathername, c_age, c_gender) VALUES ('$pid','$name','$fathername','$age','$gender')";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    // header('location:hospital.php');
    echo"<script>
    alert('Child add succussfully');
    window.location.href='pchilddetails.php';
    
    </script>";
}

}





mysqli_close($conn);


?>