<?php require('header.php') ?>
<?php
    require('includes/item.php');
    $auctionId = $_GET['id'];
    $auction = getAuctionById($auctionId);
?>

        <div style="display: flex">
            <div style="flex:5;border:1px solid #F01010;border-radius:10px;margin:5px;padding:10px">
                <div style="display:flex">
                    <div style="flex:1;padding:10px">
                        <div>
                            <img style="width:100%" src="img/dell.png" />
                        </div>
                        <div class="more_products">
                            <div><img style="max-width:100%" src="img/xps13-1.png" /></div>
                            <div><img style="max-width:100%" src="img/xps13-2.png" /></div>
                            <div><img style="max-width:100%" src="img/dell.png" /></div>
                        </div>
                    </div>
                    <div style="flex:3;display:flex;flex-direction:column;justify-content:space-between">
                        <div style="align-self:flex-end;margin:20px">
                            
                            <h3>البائع: <a href="#">ِAhmad201</a> </h3>
                            <div style="width:20%"><img style="max-width: 100%" src="img/rating.jpeg"></div>
                        </div>
                         
                        <div>
                            <span style="font-weight:900;font-size:2rem"><?php print $auction['Item_name']   ?></span>


                             <div style="font-size:1.5rem">
                                <?php print $auction['Description'] ?>
                            </div>
                            <span><img class="fav_star" src="img/like.png"></span>
                            <span>أضف إلى المفضلة</span>
                            
                        </div>
                          <div> 
                          <h>رقم السلعة:</h><span style="font-size:1.5rem"><?php print $auction ['id_auction'] ?></span>
                          </div>
                          <h>الأقسام:</h><span style="font-size:1.5rem">
                              <?php foreach( $auction['categories'] as $cat ) 
                                print "<span class='category'>$cat</span>";
                               ?>
                        </span>

                          <h>حالة السلعة:</h><span style="font-size:1.5rem"><?php print $auction ['Status'] ?></span>
             
                          <h>السعر :</h><span style="font-size:1.5rem"><?php print $auction ['Price'] ?></span>

                          <h>الوقت المتبقي:</h><span style="font-size:1.5rem"><?php print $auction ['End_time'] ?></span>

                        <form>
                                <button  class="bid_btn">زايد </button>
                                <h4>المزايدة التلقائية: </p4>
                                <h> مقدار المزايدة</h>
                                <input  type="text1" name="bid" placeholder="">
                                <h>الحد الاقصى</h>
                                <input  type="text1" name="bid" placeholder="">
                                
                                <button class="bid_btn">تنفيذ </button>
                        </form>
                    </div>
                </div>

               <hr> 
                <div class="submit_buy">
                     <h>اشتر الآن</h>
                    <button class="bid_btn">٦٠٠ س.ر</button>
                </div>
              
                   <p> طريقه الدفع : عند الاستلام</p>
                   <p> طريقه التوصيل : خدمة ارسلني</p>

            </div>
            <div style="flex:1">
                <img style="max-width:100%" src="img/aid2.png">
                <img style="max-width:100%" src="img/aid1.png">
            </div>
        </div>

    </div>
    <footer>
        <p>&copy; 2018 زاد. جميع الحقوق محفوظة.</p>
    </footer>
</body>

</html>