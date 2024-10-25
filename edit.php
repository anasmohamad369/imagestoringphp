<?php
	$id=$_GET['rno'];
	include("Connect.php");
	$qu="select * snaps where imageid='$id'";
	$res=mysqli_query($con,$qu);
	$row=mysqli_fetch_array($res);
	
     <table class='table table-center text-center'>
			<form name="f1" action="edit.php" method="post" enctype="multipart/form-data">
				<tr align='center'>
					<th>image ID</th>
					<td><input class='form-control' type="text" name="imageid" value='<?php echo $row['imageid'] ?>' readonly></td>
				</tr>
				
				<tr align='center'>
					<th>Date of upload</th>
					<td><input class='form-control' type="date" name="dateofupload" value='<?php echo $row['dateofupload'] ?>'></td>
				</tr>
	
				<tr align='center'>
					<th>Address</th>
					<td><textarea class='form-control' name='description' cols='20' rows='5'><?php echo $row['description'] ?></textarea></td>
				</tr>				
							
			
			<tr align='center'>
				<td colspan='2'> 
					<input class='form-control bg-info text-warning' name='edit' type="submit" value="Edit Data"/>  
				</td>
			</tr>
			
			</form>
		</table>
				
		 
  ?>