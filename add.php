<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/calendar.css">
    <script type="text/javascript" src="js/vendor/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/vendor/underscore-min.js"></script>
        <script type="text/javascript" src="js/calendar.js"></script>
        <script type="text/javascript">
            var calendar = $("#calendar").calendar(
                {
                    tmpl_path: "/tmpls/",
                    events_source: function () { return []; }
                });            
        </script>
        <script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>  
</head>
<body>
		

		<form method="post" action="insert.php">
		<h2 align="center"> Registration Form </h2>
		<br/>
		<div class="container">			  
			<div class="row">
				<div class="form-group">
					<label for="fname">First Name :</label>
					<input type="text" class="form-control" name="fname" id="fname">
				</div><br/>
				<div class="form-group">
					<label>Last Name :</label>
					<input type="text" class="form-control" name="lname">
				</div> 
				<div class="form-group">
					<label>Status:</label>
					<input type="radio"  name="status">Active
					<input type="radio"  name="status">Deactive
				</div> 
				<div class="form-group">
					<label>Gender:</label>
					<input type="radio"  name="gender">Female
					<input type="radio"  name="gender">Male
				</div> 
				<div class="form-group">
					<label for="designation">Designation  :</label>
					<select class="form-control" name="designation" id="designation">
						<option value="Engineer">Engineer</option>
						<option value="Sr.Engineer">Sr.Engineer</option>
						<option value="Team Leader">Team Leader</option>
						<option value="Project Manager">Project Manager</option>
						<option value="Manager">Manager</option>
						<option value="Assistant Manager">Assistant Manager</option>
					</select>
				</div>
				<div class="form-group">
					<label>Department:</label>
					<select class="form-control" name="Department">
						<option value= "Development">Development</option>
						<option value="HR">HR</option>
						<option value="Account">Account</option>
					</select>
				</div> 
				<!-- <div class="form-group">
					<label>Date of Birth:</label>
					<div class="input-append date form_datetime">
				    <input size="16" type="text" value="" readonly>
				    <span class="add-on"><i class="icon-th"></i></span>
					</div>
				</div>  -->
				<!-- <div class="form-group">
					<label> Joining Date:</label>
					<input class="form-control" name="Department">
						
				
				</div>  -->
				<input type="submit" name="submit" class="btn btn-success" value="Save">
				<!-- <button type="submit" class="btn btn-success" name="submit" >Submit</button> -->
					</div>
		</form>

</body>
</html>