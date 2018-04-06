

<?php



$firstname = "";
$lastname = "";
$email = "";
$user_name = "";
$password = "";
$city = "";
$postcode = 0;

if(isset($_POST["register"])){

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$user_name = $_POST["user_name"];
$password = $_POST["password"];
$city = $_POST["city"];
$sellerpage = isset($_POST["sellerpage"]) ? 1 : 0;


	$dbname="zad_database";

	$conn = @mysql_connect("localhost","root","");

	if (!$conn) {
		die('Could not connect to server: ' . mysql_error());
	}

	$database = @mysql_select_db ($dbname, $conn);
	if(!$database){

	die('Error Database Connected');
	}


	$sqlSt = "Insert into users (Firstname,Lastname,Username,Password,City,Email,sellerpage) values 
	('$firstname','$lastname','$user_name','$password','$city','$email',$sellerpage)" ;
	mysql_query('SET CHARACTER SET utf8');
	$result = mysql_query($sqlSt ,$conn);
	

	if($result == true){
	   echo '<script>alert("تمت ");</script>';
	}else
	{
		  echo "<script>'ُError'</script>";
	}
	
	
}



?>
<!DOCTYPE html>
<html lang=Ar>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style_item.css" >
    <title> صفحة التسجيل </title>
    <style>
.error {color: #FF0000;}
</style>
</head>

<body>

  
    <header style="display:flex">
        <img src="img/logo.png" alt="HTML5 Icon" height="75" style="margin:10px">
        <h1 style="margin:10px">زاد</h1>

    </header>


    <!DOCTYPE html>
    <html lang=Ar>

    <body style="text-align:right;">


        <nav class="menu_list" style="margin-bottom:20px;display:flex">


            <div style="flex:8" class="dropdown-container">


                <div style="line-height: 3;color:#FFF;margin:auto">
                    تسجيل جديد
                </div>

            </div>
            <div>

            </div>
        </nav>
        <br>
        <br>
        <form action="" class="register_form" method="post" onsubmit="try { var myValidator = validate_signup_register_personal_form; } catch(e) { return true; } return myValidator(this);">

            <div>
                <lable for="">
                    الاسم الأول: *
                </lable>
                <input type="text" id="firstname" name="firstname" value="" style="text-align:right;">

            </div>

            <div>
                الاسم الأخير: *
                <br>
                <input type="text" id="lastname" name="lastname" value="" style="text-align:right;">
            </div>

            <div>
                اسم المستخدم:* 
                <br>
                <input type="text" id="user_name" name="user_name" value="" style="text-align:right;">
            </div>


            <div>
                البريد الإلكتروني:* 
                <br>
                <input type="text" name="email" value="" style="text-align:right;">
            </div>

            <div>
                المدينة:* 
                <br>
                <input type="text" id="city" name="city" value="" style="text-align:right;">
            </div>

            

            <div>
                الرقم السري:*
                <br>
                <input type="password" id="password" name="password" value="" style="text-align:left;">
            </div>

            <div>
                تأكيد الرقم السري:* 
                <br>
                <input type="password" id="Rpassword" name="Rpassword" value="" style="text-align:left;">
            </div>


            <div style="margin-top:20px">
                <fieldset>
                    <legend> هل تريد صفحة تعريف عن نفسك </legend>

                    <input type="checkbox" name="sellerpage"  style="width:auto">
                    <label for="aboutmepage">نعم أريد</label>
                </fieldset>
            </div>


            <input type="submit" name = "register" value="تسجيل" style="margin:10px auto">
        </form>

    <script type="text/javascript">
             
                function validate_signup_register_personal_form(frm) {
                  var value = '';
                  var errFlag = new Array();
                  var _qfGroups = {};
                  _qfMsg = '';

                  value = frm.elements['firstname'].value;
                  if (value == '' && !errFlag['firstname']) {
                        errFlag['firstname'] = true;
                        _qfMsg = _qfMsg + '\n - The field firstname is mandatory';
                  }

                    value = frm.elements['lastname'].value;
                  if (value == '' && !errFlag['lastname']) {
                        errFlag['lastname'] = true;
                        _qfMsg = _qfMsg + '\n - The field lastname is mandatory';
                  }
                  
                   value = frm.elements['city'].value;
                  if (value == '' && !errFlag['city']) {
                        errFlag['city'] = true;
                        _qfMsg = _qfMsg + '\n - The field city is mandatory';
                  }

                     value = frm.elements['password'].value;
                  if (value == '' && !errFlag['password']) {
                        errFlag['password'] = true;
                        _qfMsg = _qfMsg + '\n - The field password is mandatory';
                  }

                       value = frm.elements['password'].value;
                  if (value == '' && !errFlag['password']) {
                        errFlag['password'] = true;
                        _qfMsg = _qfMsg + '\n - The field password is mandatory';
                  }

                          value = frm.elements['Rpassword'].value;
                  if (value == '' && !errFlag['Rpassword']) {
                        errFlag['Rpassword'] = true;
                        _qfMsg = _qfMsg + '\n - The field password is NOT MATCH';
                  }


                  if (_qfMsg != '') {
                        _qfMsg = 'The following errors occured:' + _qfMsg;
                        _qfMsg = _qfMsg + '\nPlease correct the above errors';
                        alert(_qfMsg);
                        return false; 
                  }
                  return true;
                }
           
                </script>

    <footer>
        <p>&copy; 2018 زاد. جميع الحقوق محفوظة.</p>
    </footer>

</body>

</html>