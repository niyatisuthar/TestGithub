<?php
$conn=mysqli_connect("localhost","root","","db");

if(isset($_POST['save']))
{
// variables for input data
/* echo "hello";
*/	 $fname = $_POST['fname'];
	 $lname=$_POST['lname'];
	 $status=$_POST['status'];
	 $gender=$_POST['gender'];
	 $Designation=$_POST['designation'];
	 $Department=$_POST['department'];
 	/*$dob=$_post['dob'];
 	$jd=$_post['joining_date'];*/

 	 $sql="INSERT INTO `tbl_reg`(`fname`, `lname`, `status`, `gender`, `Designation`, `Department`) VALUES ('$fname','$lname','$status','$gender','$Designation','$Department')";
	 $result=mysqli_query($conn,$sql);
	 if($result)
	 {
	  echo "Successfully Inserted Record Into Database";
	 }
	 else
	 {
	  echo "Unsuccessfully Inserted Record ";
	 }
	}




	//$sql="INSERT INTO `tbl_reg`(`fname`, `lname`, `status`, `gender`, `Designation`, `Department`) VALUES ('$fname','$lname','$status','$gender','$}

?>