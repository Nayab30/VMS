<?php
// error_reporting(0);
session_start();

include ('Admindashboard/connection.php');


if(isset($_POST['contact-submit'])){
    $name =$_POST['name'];
    $phn =$_POST['phn'];
    $email =$_POST['email'];
    $msg =$_POST['message'];

  



$qry = "INSERT INTO contact_tbl (name, phone, email,message) VALUES ('$name','$phn','$email','$msg')";




$res = mysqli_query($conn,$qry);

    if(!$res){
    die("Error".mysqli_error($conn));
}else{
    // header('location:hospital.php');

    echo"<script>
    alert('Thank you for your response!');
    window.location.href='home.php';
    
    </script>";
}

}





mysqli_close($conn);


?>