<!DOCTYPE html>
<html>

<head>
             <title>ZAD_login</title>
  <link rel="stylesheet" type="text/css" href="style_item.css">
  <link ref="stylesheet" href="style_item.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif">
   
 
    <style type="text/css">

        .container {
            width: 300px;
            height: 100px;
            text-align: center;
            background-color: rgba(161, 155, 155,0.7);
            padding: 50px;
            border-radius: 4px;
            margin: 0 auto;
            margin-top: 100px;
        }

        input[type="text"],
        input[type="password"] {
            width: 200px;
            height: 20px;
            font-size: 15px;
            float: right;
            margin-right: 5px;
            border-color: white;
            border-style: dashed;
            padding-top: 7px;
        }

        button {
            width: 50px;
            height: 30px;
            font-size: 20px;
            margin-top: 20px;
            background: #b30000;
            font-family: 'Bree Serif', serif;
            color: white;
        }

        .signup {
            font-size: 20px;
            text-align: center;
            padding-top: 20px;
            font-family: 'Bree Serif', serif;
            color: ##666666;
        }

        li a {
            color: black;
            text-align: center;
            padding: 14px 16px;
            display: block;
            font-family: Amiri;
            padding-right: 30;
            font-size: 19;
            text-decoration: unset;
        }

        .fa-4x {
            font-size: 4em;
            margin: 0px;
            margin-left: 17px;
            color: #8a7676;
        }

        .username,
        .password {
            margin-bottom: 20px;
            border-bottom: 4px solid #847777;
            background: white;
            margin-left: 8px;
            width: 300px;
        }
        .padding: {
            color: #fff;
        }
    </style>
</head>

<body >
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
                    <h>جدة</h>
                    <br>
                    <h>الرياض</h>
                    <br>
                    <h>الدمام</h>
                    <br>
                </div>
            </div>

            <div style="flex:1" class="dropdown">
                <button class="dropbtn" style="margin:0px;border-left:solid; border-right-color:#b30000; border-width: thin; border-color:black">الأقسام </button>
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

        <div style="Flex:3"></div>
    </nav>
    
    <div class="mainContent"> 
    <ul class="list_product"></ul>
    <center>
 <div class="container">
        <form >
            <div class="username">
                <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                <input type="text" name="username" placeholder="اسم المستخدم">
                <br>
            </div>

            <div class="password">
                <i class="fa fa-lock fa-4x" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="الرقم السري">
                <br> 
                </div>      
          
           <button type="reset" onclick="location.href='zad_home.php'" >دخول </button> 
           <br>
            </div>



            <p herf="#"> نسيت الرقم السري؟</p> 
      </form>   
   <br>
            <div class="signup">
                ليس لديك حساب؟
                <a href="zad_sign.php">تسجيل مستخدم </a>
            </div> 
     </center>

  <footer>
    <p>&copy; 2018 زاد. جميع الحقوق محفوظة.</p>
  </footer>
</body>
</html>