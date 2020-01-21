// Admin approve Registered doctors

<?php include('homeheader.php');?>

<div class="container">
	<div class="row py-4 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">
        <?php
           require_once 'connection.php';
		   $var=$_GET['id'];
		   $sql="select * from doctor_reg where doctor_id='".$var."'";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?> 	
			<form >
			<h2>Doctor Profile</h2>
			 
			 
			 <div class="form-group">
				<label for="exampleInputdoctor_id">Doctor id</label>
				<input type="text" class="form-control" id="exampleInputdoctor_id"   name="doctor_id"value="<?php echo $row['doctor_id'];?>">
				</div>
			  <div class="form-group">
				<label for="exampleInputname"> Name</label>
				<input type="text" class="form-control" id="examplInputname"  name="name"value="<?php echo $row['name'];?>">
			  </div>

			  
			   <div class="form-group">
				<label for="exampleInputqualification">Qualification</label>
				<input type="text" class="form-control" id="exampleInputqualification"   name="qualification" value="<?php echo $row['qualification'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputexperiance">Experiance</label>
				<input type="text" class="form-control" id="exampleInputexperiance"   name="experience" value="<?php echo $row['experience'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputspecialization">Specialization</label>
				<input type="text" class="form-control" id="exampleInputspecialization"   name="specialization" value="<?php echo $row['specialization'];?>">
				</div>
			
                
                <div class="form-group">
				<label for="exampleInputpassword">Status</label>
				<input type="text" class="form-control" id="exampleInputpassword"   name="status" readonly value="<?php echo $row['status'];?>">
                </div>
                <td><a href="admin_doc_approve1.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Approve</a></td></td>
                <td><a href="admin_doc_reject1.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">reject</a></td></td>
                </form>
            <?php
				}
			?>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>
