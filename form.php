<!DOCTYPE html>
<html>
<head>
 <title>How To Insert Data Into Database Using PHP</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
});
</script>
 <style type="text/css">
  #success_message{ display: none;}
 </style>
</head>
<body>
 <div class="container" style="margin-top:20px;">
     <form class="well form-horizontal" action="insert.php" method="post"  id="contact_form">
   <fieldset>
    <!-- Form Name -->
    <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
    <!-- Text input-->
    <div class="form-group">
       <label class="col-md-4 control-label">First Name</label>  
       <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="fname" placeholder="First Name" class="form-control"  type="text">
         </div>
       </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" >Last Name</label> 
        <div class="col-md-4 inputGroupContainer">
         <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="lname" placeholder="Last Name" class="form-control"  type="text">
         </div>
       </div>
    </div>
<div class="form-group"> 
       <label class="col-md-4 control-label">Status</label>
         <div class="col-md-4 selectContainer">
         <div class="input-group">
             <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
         <input type="radio"  name="status" value="Active">Active
          <input type="radio"  name="status" value="Deactive">Deactive
          </div>
        </div> 
    </div>
    <div class="form-group"> 
       <label class="col-md-4 control-label">Gender</label>
         <div class="col-md-4 selectContainer">
         <div class="input-group">
             <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
         <input type="radio"  value="Female" name="gender">Female
          <input type="radio" value="Male" name="gender">Male
          </div>
        </div> 
    </div>
    <div class="form-group"> 
       <label class="col-md-4 control-label">Designation</label>
        <div class="col-md-4 selectContainer">
         <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="designation" class="form-control selectpicker">
            <option value="Engineer">Engineer</option>
            <option value="Sr.Engineer">Sr.Engineer</option>
            <option value="Team Leader">Team Leader</option>
            <option value="Project Manager">Project Manager</option>
            <option value="Manager">Manager</option>
            <option value="Assistant Manager">Assistant Manager</option>
        </select> 
        </div>
    </div>
    </div>
    
    <div class="form-group"> 
       <label class="col-md-4 control-label">Department</label>
        <div class="col-md-4 selectContainer">
         <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="department" class="form-control selectpicker">
                <option value="">Select your Department/Office</option>
                <option value= "Development">Development</option>
                <option value="HR">HR</option>
                <option value="Account">Account</option>

              </select> 
        </div>
        </div>
    </div>



   
   
    
    <!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="save">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
   </fieldset>
  </form>
 </div>
 <!-- /.container -->
</body>
</html>