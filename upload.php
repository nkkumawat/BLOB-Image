<?php 

	if(isset($_POST['submit']))
	{
		if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
		{
			echo "not uopladed";
		}
		else
		{
			$image =addslashes($_FILES['image']['tmp_name']);
			$name =addslashes($_FILES['image']['name']);
			$type =addslashes($_FILES['image']['type']);
			$image=file_get_contents($image);
			$image=base64_encode($image);
			saveimage($name,$image,$type);
			// echo $image;
		}

	}
		function saveimage($name,$image,$type)
		{
			$dbc=mysqli_connect("localhost","root","","blob");
			$query="INSERT INTO blobimage(name,image,type) values('".$name."','".$image."','".$type."')";
				 $result=mysqli_query($dbc,$query);
				 if($result){
			echo "Uploaded";
			header("Location:index.php");
		}
	
}
	// echo $imageData;
	// 	if(substr($imageType, 0,5)=="image")
	// 	{
	// 		$query="INSERT INTO blobimage(name,image,type) values('".$imageName."','".$imageData."','".$imageType."')";
	// 			 mysqli_query($dbc,$query);
	// 		echo "Uploaded";
	// 		header("Location:index.php");

	// 	}
	// 	else
	// 	{
	// 		echo "Only images are allowed!";
	// 	}

	// }
?>