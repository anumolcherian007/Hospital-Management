<!---------Updating status of booking--------->

<?php
session_start();
include('connection.php');
$apoint_date         = $_POST['apoint_date'];
$appoint_time        = $_POST['appoint_time'];
$appoint_doctor      = $_POST['name'];
if (isset($_POST['submit']))
{
    
      $var=$_SESSION['patient_id'];

    $sql="UPDATE patient_reg SET apoint_date='".$apoint_date."',appoint_time='".$appoint_time."',appoint_doctor='".$appoint_doctor."' where patient_id =".$var."";
    if ($conn->query($sql))
        {
            
            header('location:patient_home.php');
        }

    }

mysqli_close($conn);
?>