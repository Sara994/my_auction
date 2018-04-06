<?php
require('Zad_DB.php');
  // Create database connection
  $db = connectToDb();

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
   // Get image name
   $image = $_FILES['image']['name'];
   $image_parts = explode('.',$image);

   $image = "";
   $i = 0;
   for($i = 0;$i<sizeof($image_parts)-1;$i++){
    $image .= $image_parts[$i];
   }
   $image .= time() . "." . $image_parts[sizeof($image_parts)-1];

   // Get text
   $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

   // image file directory
   $target = "images/".basename($image);

   $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
   // execute query
   mysqli_query($db, $sql);

   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
   }else{
      $msg = "Failed to upload image";
   }
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css"></style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
         echo "<img src='images/".$row['image']."' >";
         echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="index.php" enctype="multipart/form-data">
   <input type="hidden" name="size" value="1000000">
   <div>
     <input type="file" name="image">
   </div>
   <div>
      <textarea 
         id="text" 
         cols="40" 
         rows="4" 
         name="image_text" 
         placeholder="Say something about this image..."></textarea>
   </div>
   <div>
      <button type="submit" name="upload">POST</button>
   </div>
  </form>
</div>
</body>
</html>