<?php
	// Create database connection
	require ("zad_DB.php");
  $db = connectToDb();

	
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
		$Description = mysqli_real_escape_string($db, $_POST['Description']);
		$title = mysqli_real_escape_string($db, $_POST['title']);

  	// image file directory
		$target = "/Applications/XAMPP/xamppfiles/htdocs/maram_z/images/".basename($image);
		
		$images = [];
		$images[0] = "/maram_z/images/".basename($image);
		$images_json = json_encode($images);


  	$sql = "INSERT INTO `item` (`ID_item`, `Description`, `Item_name`, `Title`, `Price`, `Status`, `Shipping_method`, `id_auction`, `photos`)
		 VALUES ('', '$Description','$title','$title',10,'sold','no shipping','201801','$images_json')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM item");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
			echo "<div id='img_div'>";
			
			$image_list = json_decode($row['photos'],true);
			foreach($image_list AS $img){
				echo "<img src='http://localhost".$img."' >";
			}
			echo "<p>".$row['Description']."</p>";
			echo "<p>".$row['Item_name']."</p>";

      echo "</div>";
    }
  ?>
  <form method="POST" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
		</div>
		<div><input type="text" name="title" />
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="Description" 
      	placeholder="اكتب الوصف"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>