<!------Doctor Registration and Patient Registration-------> 	



<?php 
	include_once("connection.php");
	

	if(isset($_POST['submit']))
	{
		$doctor_id=$_POST['doctor_id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$card_id_no=$_POST['card_id_no'];
		$qualification=$_POST['qualification'];
		$experience=$_POST['experience'];
		$specialization=$_POST['specialization'];
		$pmc_certificate=$_POST['pmc_certificate'];
		$pmc_certificate_no=$_POST['pmc_certificate_no'];
		$address=$_POST['address'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$timing_from=$_POST['timing_from'];
		$timing_to=$_POST['timing_to'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$status=$_POST['status'];
		$sql="INSERT INTO doctor_reg(doctor_id,name,email,mobile,card_id_no,qualification,experience,specialization,pmc_certificate,pmc_certificate_no,address,country,state,city,pincode,timing_from,timing_to,username,password,status)
		
		VALUES('".$doctor_id."','".$name."','".$email."','".$mobile."','".$card_id_no."','".$qualification."','".$experience."','".$specialization."','".$pmc_certificate."','".$pmc_certificate_no."','".$address."','".$country."','".$state."','".$city."','".$pincode."','".$timing_from."','".$timing_to."','".$username."','".$password."','".$status."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "index.php";
			
		}
	}
	else if(isset($_POST['subp']))
		{
			$patient_id=$_POST['patient_id'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$gender=$_POST['gender'];
			$age=$_POST['age'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$address=$_POST['address'];
			$id_card_no=$_POST['id_card_no'];
			$medicalhistory=$_POST['medicalhistory'];
			$medicaldocument=$_POST['medicaldocument'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="INSERT INTO patient_reg(patient_id,firstname,lastname,gender,age,email,mobile,address,id_card_no,medicalhistory,medicaldocument,username,password)
			
			VALUES('".$patient_id."','".$firstname."','".$lastname."','".$gender."','".$age."','".$email."','".$mobile."','".$address."','".$id_card_no."','".$medicalhistory."','".$medicaldocument."','".$username."','".$password."')";
			if(mysqli_query($conn,$sql))
			
			{	
					require_once "index.php";
			}
			
		}
mysqli_close($conn);
?>