<?php 

	if(isset($_POST['submit'])!="")
	{
		$Imageid = $_POST['imageid'];
	
		$Date = $_POST['dateofupload'];
		$Descr = $_POST['description'];

		include("connect.php");
		$sourse=$_FILES['photo']['tmp_name'];
		$dest="img1/".$Imageid.".jpg";
		move_uploaded_file($sourse,$dest)
		or die('Photo Upload error');
	
		$que="insert into snaps(imageid,dateofupload,description,image)
		values('$Imageid','$Date','$Descr','$dest')";
		$res=mysqli_query($con,$que);

		if($res)
		{
			echo  "<script> alert('Data inserted successfully');window.location='index.php';</script>";
		}
		else
		{
			echo "<script>alert('Not inserted successfully');window.location='upfront.php';</script>";
		}
		
	}


?>