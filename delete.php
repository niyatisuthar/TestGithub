<?php
include "conn.php";
$id=$_GET['id'];
$res=mysqli_query($conn,"DELETE FROM tbl_reg WHERE id=".$id);
if($res)
{
	echo "Delete Record Successfully";
}
else
{
	echo "Fails";
}
?>