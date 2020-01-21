<!-----------New Patient Registration---------->
<?php include('header.php');?>
	
<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
			<form action="add.php" method="POST">
			<h2>Patient Resgistration</h2>
			  <div class="form-group">
				<label for="exampleInputpatient_id">Patient id</label>
				<input type="text" class="form-control" id="exampleInputpatient_id" name="patient_id" placeholder="Enter patient_id">
				
			  </div>
			  <div class="form-group">
				<label for="exampleInputfirstname">First Name</label>
				<input type="text" class="form-control" id="examplefirstname" name="firstname" placeholder="firstname">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Last Name</label>
				<input type="text" class="form-control" id="exampleInputlastname" name="lastname" placeholder="Enter lastname">
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Gender</label>
				<input type="text" class="form-control" id="exampleInputgender"name="gender" placeholder="gender">
			  </div>
			  <div class="form-group">
				<label for="exampleInputage">Age</label>
				<input type="text" class="form-control" id="exampleInputage" name="age" placeholder="age">
			  </div>
			  <div class="form-group">
				<label for="exampleInputemail">Email</label>
				<input type="text" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" name="email"placeholder="email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputmobile">Mobile</label>
				<input type="text" class="form-control" id="exampleInputmobile" name="mobile"placeholder="mobile">
			  </div>
			  <div class="form-group">
				<label for="exampleInputaddress">Address</label>
				<input type="text" class="form-control" id="exampleInputaddress" name="address"placeholder="address">
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputg">National id number</label>
				<input type="text" class="form-control" id="exampleInputgender" name="id_card_no" placeholder="national id number">
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Medical history</label>
				<input type="text" class="form-control" id="exampleInputgender" name="medicalhistory"placeholder="medical history">
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Medical document</label>
				<input type="text" class="form-control" id="exampleInputgender" name="medicaldocument" placeholder="medical document">
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Username</label>
				<input type="text" class="form-control" id="exampleInputgender" name="username"placeholder="username">
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Password</label>
				<input type="text" class="form-control" id="exampleInputgender" name="password" placeholder="password">
			  </div>
			  
			  
			  
			  <button type="submit" class="btn btn-primary" name="subp">Submit</button>
			</form>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>
</body>
</html>