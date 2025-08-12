<?php
// error_reporting(0);
session_start();

include ('connection.php');


if(isset($_POST['hsubmit'])){
    $name =$_POST['name'];
    $phn =$_POST['phn'];
    $email =$_POST['email'];
    $address = $_POST['address'];
    $password =$_POST['pw'];
   



$qry = "INSERT INTO hospital_tbl (h_name, h_phone, h_email,h_address, h_password) VALUES ('$name','$phn','$email','$address','$password')";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    // header('location:hospital.php');
    echo"<script>
    // alert('Hospital registered succussfully');
    window.location.href='../home.php';
    
    </script>";
}



}





mysqli_close($conn);


?>