<!Doctype html>

<head>
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/boot.css" />
    <link rel="stylesheet" type="text/css" href="style_item.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> ZAD</title>

<!-- my menu -->
<link rel="stylesheet"  href="font-awesome.css">
    <style type="text/css">
    body{
    padding: 0;
    margin: 0; }

    .my_menu ul{
        list-style: none;
        margin: 0;
        padding: 0;
    } 
    .my_menu ul li{
        padding: 15px;
        position: relative;
        width: 200px;
        vertical-align: middle;
        background-color: #B6B1B1;
        cursor: pointer;
        border-top: 1px solid #6B6B6B;
        -webkit- transition: all 0.3s;
        -o- transition: all 0.3s;
        transition: all 0.3s;
    }
    .my_menu ul li:hover{
        background-color: #6F6F6F;
    }
.my_menu > ul > li{
    border-right: 5px solid #000101;
}
    .my_menu ul ul{ 
        transition: all 0.3s;
        opacity: 0;
        position: absolute;
        border-right:  5px solid #000101;
        visibility: hidden;
       right: 90%;
        top:-2%;
    


    }
    .my_menu ul li:hover > ul{
        opacity: 1;
        visibility: visible;
    }
    .my_menu ul li a{
        color: #fff;
        text-decoration: none;
    }
    span {
        margin-right: 15PX;
    }
    .my_menu >: ul > li: nth-of-type(2)::afrer{
        content: "+";
        position: absolute;
        margin-right: 35% ;
        color: #fff;
        font-size: 20px;
    }

</style>
</head>

<body>
    <header class="navbar" style="max-height:15vh">
        <div style="display:flex; margin:0 5px">
            <img src="img/logo.png" alt="HTML5 Icon" style="max-height: 10vh;align-self:center">
        </div>

        <h2 style="flex:1; align-self:center"> زاد+ </h2>

        <a style="align-self: center;padding:0 20px"> تسجيل دخول</a>
        <a style="align-self: center;padding:0 20px">مساعدة</a>
    </header>

    <nav class="menu_list" style="margin-bottom:10px;display:flex">
        <div style="flex:2;justify-content:center;display:flex;">
            <input type="text" placeholder="ابحث عن" style="width:90%;line-height:2;align-self:center">
        </div>


        <div class="dropdown-container">
            <div class="dropdown">
                <button class="dropbtn" style="margin:0px;border-left:solid; border-right:solid; border-width: thin; border-color:black">المدن</button>
                <div class="dropdown-content">
                    <h>1</h>
                    <br>
                    <h>2</h>
                    <br>
                    <h>3</h>
                    <br>
                </div>
            </div>

            <div style="flex:1" class="dropdown">
                <button class="dropbtn" style="margin:0px;border-left:solid; border-right-color:#b30000; border-width: thin; border-color:black">الاقسام </button>
                <div class="dropdown-content">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>

        </div>
        <div style="align-self:center;margin-right:15px;">
            <button>ابحث</button>
        </div>
        <div style="Flex:8"></div>

    </nav>
    <nav>
        <div id="wrap">
            <div id="nheader">
                <div>
                    <div class="header">
                        <div class="menu">
                            <ul class="menu_list">
                          
                              <li>
                                   <a class="active" href="Zad_follow.html"> <span class ="fa fa-home"></span> الرئيسية </a> </li>
                                     <li>
                                    <a href="Zad_follow.html">متابعاتي </a></li>
                                    <li>
                                    <a class="active" href="Zad_new.html">جديد اليوم </a></li>

                                  <li>
                                    <a href="Zad_End.html">ستنتهي اليوم </a></li>
                            
                                  <li>
                                    <a href="Zad_chance.html"> الفرصة الاخيرة</a></li>
                                 <li>
                                    <a href="Zad_BuyNow.html">اشتر الآن</a></li>
                                 <li>
                                    <a href="Most_Bid.html">الاكثر مزايدة</a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>   
<!-- my_menu -->
 <form >
     <div class="my_menu">
         <ul>

                <li><a href="#"><span class ="fa fa-user"></span> معلوماتي الشخصية</a></li>  

                <ul>
                  <li><a href="#"><style class="fa fa-plus"></style>اضافة منتج </a></li>  
                  <li><a href="#"><style class="fa fa-edit"></style> تعديل منتج </a></li> 
                  <li><a href="#"><style class="fa fa-remove"></style> حذف منتج </a></li> 
                </ul>


                 <li><a href="#"><span class="fas fa-gavel"></span>مزايداتي</a></li>  
                 <li><a href="#"> <span class ="fa cart-plus"></span> مشترياتي</a></li>
                 <li><a href="#"><span class ="fa fa-users"></span> تقيماتي</a></li>   
          </ul>  
     </div>
  </form>

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

     <footer>
            <p>&copy; 
            2018 زاد. جميع الحقوق محفوظة.</p>
          </footer>
</body>
</html>