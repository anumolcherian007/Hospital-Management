<?php include('header.php');?>

<div>

			<tr><?php
					include_once 'connection.php';
					$sql="select * from doctor_reg";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
				?>
						<tr>
							Doctor name<td> <?php echo $row['name']?> </td>
							<td> <?php echo $row['mobile'] ?> </td>
							<td> <?php echo $row['specialization'] ?> </td>
							<td><?php echo$row['address'] ?></td>
							<td><?php echo $row['country']?></td>
							<td> <?php echo $row['state'] ?> </td>
							<td> <?php echo $row['city'] ?> </td>
							<td> <?php echo $row['pincode'] ?> </td>
							<td> <?php echo $row['timing_from']?> </td>
							<td> <?php echo $row['timing_to']?> </td>
							
						</tr>
                <?php
					}
				?>
                    
</div>
<?php include('footer.php');?>