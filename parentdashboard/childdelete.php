<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "DELETE FROM child_tbl WHERE child_id = '$id'";
    $res = mysqli_query($conn, $qry);

    if (!$res) {
        die("Error: " . mysqli_error($conn));
    } else {
        echo "<script>
                alert('child details deleted successfully');
                window.location.href='pchilddetails.php';
              </script>";
    }
}

mysqli_close($conn);
?>
