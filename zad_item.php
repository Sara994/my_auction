<!-- <!DOCTYPE html> -->
<html>

<head>
    <title>zad items</title>
    <link rel="stylesheet" type="text/css" href="style_item.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
    <link href="css/boot.css" rel="stylesheet" />
    <link ref="stylesheet" href="style_item.css">
    <style>
        .fav_star{
            filter:grayscale(100%);
            max-height: 20px;
            cursor: pointer;
        }
        .fav_star:hover{
            filter: none;
        }
        .bid_btn{
            font-size:1.5rem;
            font-weight: 900;
            border-radius: 4px;
            padding:10px 20px;
            cursor: pointer;
        }
        .bid_btn:hover{
            background-color:#ccc;
        }

        .more_products{
            display: flex;
        }
        .more_products div{
            padding:10px;
            cursor: pointer;
            flex:1; 
            border-radius: 5px;
        }
        .more_products div:hover{
            box-shadow: 1px 1px 1px 1px #bbb;
        }
        .submit_bid{
            display:flex;
            justify-content:center;
        }
        .submit_bid *{
            margin: 5px 10px;
        }
    </style>
</head>

<body style="display: flex;height:100%;flex-direction:column">
    <header class="navbar" style="max-height:15vh">
        <div style="display:flex; margin:0 5px">
            <img src="img/logo.png" alt="HTML5 Icon" style="max-height: 10vh;align-self:center">
        </div>

        <h2 style="flex:1; align-self:center"> زاد+ </h2>

        <a style="align-self: center;padding:0 20px"> تسجيل دخول</a>
        <a style="align-self: center;padding:0 20px">مساعدة</a>
    </header>
    <div style="flex:1" class="container">

        <div class="menu">
            <ul class="menu_list">
                <li>
                    <a class="active" href="Home.php">جديد اليوم </a>
                </li>
                <li>
                    <a href="coffee.php">ستنتهي اليوم </a>
                </li>
                <li>
                    <a href="machines.php">اشتر الآن</a>
                </li>
            </ul>
        </div>
        <div style="display: flex">
            <div style="flex:5;border:1px solid #F01010;border-radius:10px;margin:5px;padding:10px">
                <div style="display:flex">
                    <div style="flex:1;padding:10px">
                        <div>
                            <img style="width:100%" src="img/xps13.png" />
                        </div>
                        <div class="more_products">
                            <div><img style="max-width:100%" src="img/xps13-1.png" /></div>
                            <div><img style="max-width:100%" src="img/xps13-2.png" /></div>
                            <div><img style="max-width:100%" src="img/xps13-3.png" /></div>
                        </div>
                    </div>
                    <div style="flex:3;display:flex;flex-direction:column;justify-content:space-between">
                        <div style="align-self:flex-end;margin:20px">
                            
                            <h3>البائع: <a href="#">ِAhmad201</a> </h3>
                            <div style="width:20%"><img style="max-width: 100%" src="img/rating.jpeg"></div>
                        </div>
                        <div>
                            <span style="font-weight:900;font-size:2rem">لابتوب لينوفا</span>
                            <span><img class="fav_star" src="img/star.png"></span>
                            <span>أضف إلى المفضلة</span>
                            
                        </div>
                        <hr align="right" style="width:50%">
                        <div style="font-size:1.5rem">
                            لاب توب مستعمل, استعمال قليل, نظيف وبحالة جيدة
                        </div>
                        <hr align="right" style="width:50%">
                        <div style="font-size:1.5rem">
                            الأقسام: الالكترونيات
                        </div>
                        <div style="font-size:1.25rem">
                            <div><strike>السعر الابتدائي: ٧٠٠ ريال</strike></div>
                            <div>السعر الحالي: ٨٥٠ ريال</div>
                        </div>
                        <div>
                            تاريخ المزاد
                            <div style="display:inline-block;padding:5px;border:1px solid red">
                                5days : 34 minutes : 55 seconds
                            </div>
                        </div>
                    </div>


                </div>
                <hr >
                <div class="submit_bid">
                    <span style="font-size: 2rem">زد الآن</span>
                    <input style="font-size:1.25rem" placeholder="القيمة" />
                    <button class="bid_btn">إرسال</button>
                </div>
            </div>
            <div style="flex:1">
                <img style="max-width:100%" src="img/lenovo.png">
                <img style="max-width:100%" src="img/lenovo.png">
                <img style="max-width:100%" src="img/lenovo.png">
            </div>
        </div>

    </div>
    <footer>
        <p>&copy; 2018 زاد. جميع الحقوق محفوظة.</p>
    </footer>
</body>

</html>