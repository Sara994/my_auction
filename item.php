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
        <div class="autocomplete" style="flex:2;justify-content:center;display:flex;">
            <input id="search" autocomplete="off" type="text" placeholder="ابحث" style="width:90%;line-height:2;align-self:center">
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
                <button class="dropbtn" style="margin:0px;border-left:solid; border-right-color:#b30000; border-width: thin; border-color:black">الأقسام</button>
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
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="boot" style="background-color:rgba(0,0,0,0.2)">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="img/lab.jpg" alt="First slide">
                                        
                    <div style="margin:0 10px">
                            <div>جنب الصورة</div>
                            <button class="btn btn-default" >Buy</button>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/bag.jpg" alt="Second slide">
                                        
                    <div style="margin:0 10px">
                            <div>جنب الصورة</div>
                            <button class="btn btn-default" >Buy</button>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="img/k.png" alt="Third slide">
                    
                    <div style="margin:0 10px">
                        <div>جنب الصورة</div>
                        <button class="btn btn-default" >Buy</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    </section>
    <section class="furniture">

        <h3 style="padding-right:2%">أثاث</h3>
        <div style="display:flex;justify-content:space-around">
            <div class="furniture_item">
                <img src="img/lab.jpg" height="100" style=" margin:10px 10px 0px 20px">
            </div>
            <div class="furniture_item">
                <img src="img/k.png" height="100" style="margin:10px 10px 0px 20px">
            </div>
            <div class="furniture_item">
                <img src="img/bag.jpg" height="100" style="margin:10px 10px 0px 20px">
            </div>
        </div>
    </section>
    <script>$('.carousel').carousel()</script>
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