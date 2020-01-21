<!----------Login page for all users----------->

<?php include('header.php');?>
<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
			<form action="login2.php" method="POST">
			<h2>Login</h2>
			  
			  <div class="form-group">
				<label for="exampleInputgender">Username</label>
				<input type="gender" class="form-control" id="exampleInputgender" name="username"placeholder="username">
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Password</label>
				<input type="gender" class="form-control" id="exampleInputgender" name="password" placeholder="password">
			  </div>
			  
			  
			  
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			  <p>Don't have an account? <a href="#">Register</a></p>
			</form>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>
</body>
</html>