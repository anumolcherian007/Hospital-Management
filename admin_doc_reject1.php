// Update Doctor Registration status to Reject

<?php
include('connection.php');
$var = $_GET['id'];
$sql="UPDATE doctor_reg SET status = 'rejected' where doctor_id = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:admin_doctors.php');
        }

mysqli_close($conn);
?>