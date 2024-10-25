<?php
	$id=$_GET['rno'];
	include("Conne.php");
	$qu="delete from member where mname ='$id'";
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