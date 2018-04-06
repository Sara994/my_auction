<!-- <!DOCTYPE html> -->
<html>

<head>
  <meta charset="utf8">
  <title>zad items</title>
  <link rel="stylesheet" type="text/css" href="style_item.css">
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
  <link ref="stylesheet" href="style_item.css">
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

    <nav class="menu_list" style="overflow:visible;margin-bottom:10px;display:flex">
        <div class="autocomplete" style="flex:2;justify-content:center;display:flex;">
            <input id= "search" autocomplete="off" type="text" placeholder="ابحث عن" style="width:90%;line-height:2;align-self:center">
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
                                    <a class="active" href="Zad_follow.html">متابعاتي </a>
                                </li>
                                    <li>
                                    <a class="active" href="Zad_new.html">جديد اليوم </a>
                                </li>

                                <li>
                                    <a href="Zad_End.html">ستنتهي اليوم </a>
                                </li>
                            
                                  <li>
                                    <a href="Zad_chance.html"> الفرصة الاخيرة</a>
                                </li>
                                 <li>
                                    <a href="Zad_BuyNow.html">اشتر الآن</a>
                                </li>
                                 <li>
                                    <a href="Most_Bid.html">الاكثر مزايدة</a>
                                </li>
                               </ul>
                               

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>   <!-- -->

    <div class="products">
      <ul class="list_product">
        <li>
          <a class="active" href="Zad_details.html">
            <img src="img/k.png" alt="img"> 
            <p>طاولة طعام </p>
            <p class="price"> 300 SR</p>
            <hr>
            <a href="zad_login.html" class="cart"> إضافة للسلة
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </a>
            <a href="zad_login.html" class="heart">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          </a>
        </li>


        <li>
          <a class="active" href="Zad_details.html">
         <img  src="img/bag.jpg" alt="img"> 
            <p>حقيبة رجاليه</p>
            <p class="price"> 200 SR</p>
            <hr>
            <a href="zad_login" class="cart"> إضافة للسلة
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </a>
            <a href="zad_login.hyml" class="heart">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          </a>
        </li>


        <li>
          <a class="active" href="Zad_details.html">
          <img src="img/lab.jpg" alt="img"> 
            <p>لابتوب</p>
            <p class="price"> 900 SR</p>
            <hr>
            <a href="zad_login.html" class="cart"> إضافة للسلة
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </a>
            <a href="zad_login.html" class="heart">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <footer>
    <p>&copy; 2018 زاد. جميع الحقوق محفوظة.</p>
  </footer>

  <script>
      function autocomplete(inp, arr) {
          
      
      
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            console.log("Input detected");
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
              /*check if the item starts with the same letters as the text field value:*/
              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
              }
            }
      
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
              /*If the arrow DOWN key is pressed,
              increase the currentFocus variable:*/
              currentFocus++;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 38) { //up
              /*If the arrow UP key is pressed,
              decrease the currentFocus variable:*/
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 13) {
              /*If the ENTER key is pressed, prevent the form from being submitted,*/
              e.preventDefault();
              if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
              }
            }
        });
        function addActive(x) {
          /*a function to classify an item as "active":*/
          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);
          /*add class "autocomplete-active":*/
          x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
          /*a function to remove the "active" class from all autocomplete items:*/
          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }
        function closeAllLists(elmnt) {
          /*close all autocomplete lists in the document,
          except the one passed as an argument:*/
          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
            });
      }
      
      
      <?php
      
      require("search.php");
      echo ("var items = " . json_encode(getAllitems()));
      
      ?>
      
      items = items.map(i=>i.Title);
      // ---------------------------- DB
      
      autocomplete(document.getElementById("search"), items);
      </script>
</body>
</html>