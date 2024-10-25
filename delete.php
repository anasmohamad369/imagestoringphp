<?php
	$id=$_GET['rno'];
	include("Connect.php");
	$qu="delete from snaps where imageid ='$id'";
	$res=mysqli_query($con,$qu);
	if($res)
	{
		echo "<script>alert('Student Deleted Successfully');window.location='view.php';</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong');window.location='view.php';</script>";
	}
?>