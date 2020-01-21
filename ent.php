<!----------For viewing Doctors having specialization ENT--------->

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
include_once('connection.php');
$var = $_GET['id'];
$sql = "select * from doctor_reg where specialization='".$var."'";
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
</tr>
        <?php 
					  }
                      ?>
                      </tbody>
  </table>

<?php include('homefooter.php');?> 