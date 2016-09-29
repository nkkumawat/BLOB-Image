<?php
	$dbc=mysqli_connect("localhost","root","","blob");

	if(isset($_GET['id']))
	{
		$id=mysqli_real_escape_string($dbc,$_GET['id']);
		$query="SELECT * FROM blobimage WHERE id=".$id."";
	$result = mysqli_query($dbc,$query);
		echo $query;
		$ans=mysqli_fetch_assoc($result);
		{
			$imageData = $ans["image"];
			$imageType=$ans['type'];
			echo $ans['type'];
			header("content-type:$imageType");
		echo $imageData;
		}
	
	}
	else
	{
		echo "error";
	}
?>