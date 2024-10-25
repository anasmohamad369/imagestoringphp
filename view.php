<html>
    <head>
        <title></title>
    </head>
    <style>
         body{
        background-image: url("bgimg.jpeg") ;
        background-size: cover;
        backdrop-filter: blur(20px) brightness(72%);
        background-position: center;
        }
	
    </style>
    <body>
    <div class="row">
        
        <div class= 'col-sm-12'>
        <?PHP
             INCLUDE('hmenu.php');
		        ?>
        </div>
    </div>
	<div class='row bg-warning'>
		<div class='col-sm-2'>
			<marquee>hello</marquee>
	    </div>

	 <div class='col-sm-10'>
			<?php
				include("Connect.php");
				echo "<h2 align='center'>Student List</h2>";
				echo "<table class='table-center'>";
				echo "<tr> <th>rno</th><th>imageid</th> <th>dateofupload</th><th>description</th><th>image</th>   <th>edit</th> <th>delete</th></tr>";

				$query ="select * from snaps";
					$res=mysqli_query($con,$query);
					$x=1;
			
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td>".$x."</td>";
						echo "<td>".$row['imageid']."</td>";
						echo "<td>".$row['dateofupload']."</td>";
					   echo "<td>".$row['description']."</td>";
						echo "<td><img src='".$row['image']."' width='400' height='200'></td>";
						echo "<td><a href='edit1.php'>Edit</a></td>";
						echo "<td><a href='delete.php?rno=".$row['imageid']."'>Delete</a></td>";
						$x=$x+1;
					}
					echo "</table>";
				?>
	    </div>
	</div>
?>

    <div class="row">
        
        <div class= 'col-sm-12 '>
        
        <?PHP
             INCLUDE('footer.php');
		        ?>
        </div>
    </div>
    </body>
</html>
