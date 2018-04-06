<!doctype html>

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
    <title> ZAD </title>
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
                <button class="dropbtn" style="margin:0px;border-left:solid; border-right-color:#b30000; border-width: thin; border-color:black">طريقة </button>
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
                                    <a class="active" href="Zad_follow.php">متابعاتي </a>
                                </li>
                                    <li>
                                    <a class="active" href="Zad_new.php">جديد اليوم </a>
                                </li>

                                <li>
                                    <a href="Zad_End.php">ستنتهي اليوم </a>
                                </li>
                            
                                  <li>
                                    <a href="Zad_chance.php"> الفرصة الاخيرة</a>
                                </li>
                                 <li>
                                    <a href="Zad_BuyNow.php">اشتر الآن</a>
                                </li>
                                 <li>
                                    <a href="Most_Bid.php">الاكثر مزايدة</a>
                                </li>
                              

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>   <!-- -->
<article>
    <center>
        <aside>
        <h1>جديد اليوم</h1>
     </aside>
    
</center>


     <footer>
            <p>&copy; 
            2018 زاد. جميع الحقوق محفوظة.</p>
          </footer>
</body>

</html>