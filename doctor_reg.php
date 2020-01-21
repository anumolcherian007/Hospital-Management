<!----------New Doctor registering----------->

<?php include('header.php');?>
<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
			<form action="add.php" method="POST">
			<h2>Doctor Resgistration</h2>
			 
			 
			 <div class="form-group">
				<label for="exampleInputdoctor_id">Doctor id</label>
				<input type="text" class="form-control" id="exampleInputdoctor_id" aria-describedby="emailHelp" placeholder="Enter doctor_id" name="doctor_id">
				</div>
			  <div class="form-group">
				<label for="exampleInputname"> Name</label>
				<input type="text" class="form-control" id="examplInputname" placeholder="name" name="name">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmai1">Email</label>
				<input type="text" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
				
			  </div>
			   <div class="form-group">
				<label for="exampleInputpassword">Mobile</label>
				<input type="text" class="form-control" id="exampleInputpassword" aria-describedby="emailHelp" placeholder="mobile" name="mobile">
				</div>
			  
			  <div class="form-group">
				<label for="exampleInputcard_id_no">National Identity number</label>
				<input type="text" class="form-control" id="exampleInputcard_id_no" placeholder="Password" name="card_id_no">
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputqualification">Qualification</label>
				<input type="text" class="form-control" id="exampleInputqualification" aria-describedby="emailHelp" placeholder="Qualification" name="qualification">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputexperiencence">Experience</label>
				<input type="text" class="form-control" id="exampleInputexperience" aria-describedby="emailHelp" placeholder="Experience" name="experience" >
				</div>
				
				 <div class="form-group">
				<label for="exampleInputspecialization">Specialization</label>
				<input type="text" class="form-control" id="exampleInputspecialization" aria-describedby="emailHelp" placeholder="specialization" name="specialization">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputpmc_certificate">certificate</label>
				<input type="text" class="form-control" id="exampleInputpmc_certificate" aria-describedby="emailHelp" placeholder="pmc_certificate" name="pmc_certificate">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputpmc_certificate_no">Certificate number</label>
				<input type="text" class="form-control" id="exampleInputpmc_certificate_no" aria-describedby="emailHelp" placeholder="certificate number" name="pmc_certificate_no">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputaddress_line">Address</label>
				<input type="text" class="form-control" id="exampleInputaddress_line" aria-describedby="emailHelp" placeholder="Enter address" name="address">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputcountry">select country</label>
				<select input type="text" class="form-control" id="exampleInputcountry" aria-describedby="emailHelp" placeholder="country" name="country">
				<option value="country"></option>	
						<option value="India">India</option>
						<option value="srilanka">Srilanka</option>						
				</select>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputstate">State</label>
				<select input type="text" class="form-control" id="exampleInputstate" aria-describedby="emailHelp" placeholder="state" name="state">
				<option value="state"></option>	
				<option value="kerala">kerala</option>
				<option value="TamilNadu">TamilNadu</option>
				<option value="karnataka">karnataka</option>
				<option value="delhi">delhi</option>
				</select>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputcity">City</label>
				<select input type="text" class="form-control" id="exampleInputcity" aria-describedby="emailHelp" placeholder="city" name="city">
				<option value="city"></option>	
				<option value="Trivandrum">Trivandrum</option>
				<option value="Kollam">Kollam</option>
				<option value="kochi">kochi</option>
				<option value="kozhikodu">kozhikodu</option>
				</select>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputpincode">Pincode</label>
				<input type="text" class="form-control" id="exampleInputpincode" aria-describedby="emailHelp" placeholder="pincode" name="pincode">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputtiming_from">Timing from</label>
				<input type="text" class="form-control" id="exampleInputtiming_from" aria-describedby="emailHelp" placeholder="timing_from" name="timing_from">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputtiming_to">Timing to</label>
				<input type="text" class="form-control" id="exampleInputtiming_to" aria-describedby="emailHelp" placeholder="Timing to" name="timing_to">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputusername">Username</label>
				<input type="text" class="form-control" id="exampleInputusername" aria-describedby="emailHelp" placeholder="username" name="username">
				</div>
			  
			   <div class="form-group">
				<label for="exampleInputpassword">Password</label>
				<input type="text" class="form-control" id="exampleInputpassword" aria-describedby="emailHelp" placeholder="password" name="password">
				</div>
			  
			   <div class="form-group">
				<label for="exampleInputstatus">status</label>
				<input type="text" class="form-control" id="exampleInputstatus" aria-describedby="emailHelp" placeholder="status" name="status" value='pending''readonly'>
				</div>
			  <div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>