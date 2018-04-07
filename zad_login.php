<?php require('header.php') ?>
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