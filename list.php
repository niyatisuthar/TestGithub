<?php 
include "conn.php";
$sql="select * from tbl_reg";
$res=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html>
<head>
 <title>How To Insert Data Into Database Using PHP</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">
  #success_message{ display: none;}
 </style>
</head>
<body>
 <div class="container" style="margin-top:20px;">
   <form class="well form-horizontal" action="insert.php" method="post"  id="contact_form">
   <fieldset>	
   <a href="form.php" class="btn btn-success" name="add" value="Add">Add</a>
   <!-- <button type="submit" class="btn btn-success" name="add" value="Add">ADD</button> -->
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Status</th>
				<th>Gender</th>
				<th>Designation</th>
				<th>Department</th>
				<th>Date Of Birth</th>
				<th>Joining Date</th>
				<th colspan="2">Action
				</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=mysqli_fetch_array($res)){
			?>
		<tr id=<?php echo $row['id']; ?> >
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Department']; ?></td>
			<td><?php echo $row['dob']; ?></td>
			<td><?php echo $row['joining_date']; ?></td>
		<!-- 	<td> <button class="btn btn-danger btn-sm remove" id="<?php  $row['id']; ?>">Delete</button></td> -->
			 <td><a  class="btn btn-danger btn-sm remove" name="Delete" ><?php   $row['id']; ?>Delete</a></td>
			<td><a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-success" name="Edit" value="Edit" id="<?php  $row['id']; ?>" ><?php   $row['id']; ?>Edit</a></td>
		</tr>
		</tbody> <?php } ?>
		</tbody>
		</tbody>
	</table>
</form>

</body>
</html>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record No :'+ id +' ?'))
        {
            $.ajax({
               url: '/delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });

</script>