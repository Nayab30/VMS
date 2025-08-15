<?php
include('connection.php');

$qry ="UPDATE appointment_tbl SET app_status = 'Vaccinated' WHERE appoint_id = $_GET[id]";

mysqli_query($conn,$qry);
echo"<script>
alert('Vaccinated succussfully');
window.location.href='vaccinereport.php'
</script>";

?>