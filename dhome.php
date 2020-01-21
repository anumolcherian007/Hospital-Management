<!------ Doctor Home page------>

<?php include('homeheader.php');?>

<table class="container-fluid table">
      <thead>
         <tr>
             
             <th>Doctor Id</th>
             <th>Name</th>
			  <th>Email</th>
             <th>Mobile</th>
             <th>Card NO</th>
			  <th>Qualification</th>
			   <th>Experience</th>
			    <th>Specialization</th>
				 <th>PMC certificate</th>
				  <th>PMC certificate NO</th>
				  <th>Address</th>
				  <th>Country</th>
				  <th>State</th>
				  <th>City</th>
				  <th>Pincode</th>
				  <th>Timing From</th>
				  <th>Timing to</th>
				  <th>Username</th>
             <th>Status</th>
         </tr>
    </thead>
    <tbody>
  <?php 
		
		include_once 'connection.php';
		
		$sql = "select * FROM doctor_reg";
		
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result))
		{
  ?>
      <tr>
        <td><?php echo $row['doctor_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['card_id_no']; ?></td>
        <td><?php echo $row['qualification']; ?></td>
        <td><?php echo $row['experience']; ?></td>
        <td><?php echo $row['specialization']; ?></td>
        <td><?php echo $row['pmc_certificate']; ?></td>
		<td><?php echo $row['pmc_certificate_no']; ?></td>
		   <td><?php echo $row['address']; ?></td>
		   <td><?php echo $row['country']; ?></td>
		   <td><?php echo $row['state']; ?></td>
		   <td><?php echo $row['city']; ?></td>
		   <td><?php echo $row['pincode']; ?></td>
		   <td><?php echo $row['timing_from']; ?></td>
		    <td><?php echo $row['timing_to']; ?></td>
		<td><?php echo $row['username']; ?></td>
        <td><?php echo $row['status']; ?></td>
        </tr>
		
		
        <?php 
		}
		 ?>
    </tbody>
  </table>





<?php include('homefooter.php');?> 