// Admin viewing all Registered Doctors for Approval or Rejection and link to view profile in detail.

<?php include('homeheader.php');?>

<table class="container-fluid table">
      <thead>
         <tr>
             
             <th>Doctor Id</th>
             <th>Name</th>
             <th>Specialization</th>
             <th>Mobile</th>
             <th>E-mail</th>
             <th>Status</th>
             <th></th>
         </tr>
    </thead>
    <tbody>
    <?php 
					  include_once 'connection.php';
					 
					  $sql = "select * from doctor_reg";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {

						  ?>
      <tr>
        <td><?php echo $row['doctor_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['specialization']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><a href="admin_doc_approve.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Approve/Reject</a></td></td>
        <td><a href="admin_view_doctor.php?id1=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td></td>   
        </tr>
        <?php 
					  }
					  ?>
    </tbody>
  </table>




<?php include('homefooter.php');?> 