// Update status of Doctor registraion to approve


<?php
include('connection.php');
$var = $_GET['id'];
$sql="UPDATE doctor_reg SET status = 'approved' where doctor_id = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:admin_doctors.php');
        }

mysqli_close($conn);
?>