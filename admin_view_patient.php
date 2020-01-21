<!---------Admin viewing all patients with detailed information------------>

<?php include('homeheader.php');?>

<table class="container-fluid table">
      <thead>
         <tr>
             
             <th>Patient Id</th>
             <th>First Name</th>
			 <th>Last Name</th>
			 <th>Gender</th>
			 <th>Age</th>
			 <th>E-mail</th>
			  <th>Mobile</th>
			  <th>Address</th>
			   <th>Id card no</th>
             <th>medical history</th>
			  <th>Medical Document</th>
			   <th>Username</th>
            
             
             
            
         </tr>
    </thead>
    <tbody>
    <?php 
					  include_once 'connection.php';
					 
					  $sql = "select * from patient_reg";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {

						  ?>
      <tr>
        <td><?php echo $row['patient_id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
		<td><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['age']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['id_card_no']; ?></td>
		<td><?php echo $row['medicalhistory']; ?></td>
		<td><?php echo $row['medicaldocument']; ?></td>
		<td><?php echo $row['username']; ?></td>

        
        <?php 
					  }
					  ?>
    </tbody>
  </table>




<?php include('homefooter.php');?> 