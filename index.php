<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="upload.php" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="submit" value="Upload">
	</form>
	<?php	
	Diaplay();

	function Diaplay()
		{
			$dbc=mysqli_connect("localhost","root","","blob");
			$query="SELECT *FROM blobimage";
				 $result=mysqli_query($dbc,$query);
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<img height="200" width="200" src="data:image;base64,'.$row['image'].'">';
				}
		}
		?>
</body>
</html>