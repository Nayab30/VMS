<?php
// error_reporting(0);
session_start();

include ('connection.php');


if(isset($_POST['rsubmit'])){
    $name =$_POST['name'];
    $phn =$_POST['phn'];
    $email =$_POST['email'];
    $password =$_POST['pswd'];
   



$qry = "INSERT INTO parent_tbl (p_name, p_phone, p_email, P_password) VALUES ('$name','$phn','$email','$password')";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    // header('location:hospital.php');
    echo"<script>
    alert('Registered succussfully');
    window.location.href='../home.php';
    
    </script>";
}



}





mysqli_close($conn);


?>