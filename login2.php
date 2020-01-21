<!--------Login authentication-------->


<?php 
	include_once("connection.php");
	if(isset($_POST['submit']))
	{
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select username FROM doctor_reg WHERE username='".$username."' and password='".$password."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				
				$_SESSION['user']=$row['doctor_id'];
				
				require_once "doctor_home.php";
			}
		}
		else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="select username FROM patient_reg WHERE username='".$username."' and password='".$password."'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result)) 
				{ 
					session_start();
					$_SESSION['patient_id']=$row['patient_id'];
					$_SESSION['user']=$row['username'];
					header('location:phome.php');
				}
			}
			else
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$sql="select username FROM admin WHERE username='".$username."' and password='".$password."'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) 
				{
					while($row = mysqli_fetch_assoc($result)) 
					{ 
						
						$_SESSION['user']=$row['username'];
						header('location:adminhome.php'); 
					}
				}
				else
					{
						echo "username or password incorrect";
					}
				}
			}
		}
mysqli_close($conn);
?>