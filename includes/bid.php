<?php
require_once('item.php');
$userId = 1;

function getAllBidsForAuction($auctionId){
    $db = connectToDb();
    $auction = getAuctionById($auctionId);

    $query = "SELECT * FROM bid where id_auction = $auctionId";
    $result = mysqli_query($query);
    $items = [];
    while($row = mysqli_fetch_array($result)){
        $items[] = $row;
    }

    return $items;
}

function getHeighestBid($auctionId){
    $db = connectToDb();
    $auction = getAuctionById($auctionId);

    $query = "SELECT max(price) as price ,max_price,id from bid where id_auction = $auctionId";
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
}

function addBid($auctionId,$maxPrice){
    $db = connectToDb();
    $auction = getAuctionById($auctionId);
    $heighestBid = getHeighestBid($auction['id_auction']);
    // price, max_price, id
    $currentBid;
    $min_increment = $auction['min_increment'];

    // startPrice = 800
    // min_inc = 50
    // $heighestBid['max_price'] = 1150
    // price = 900
    // maxPrice = 1150
    global $userId;


    
    if(is_null($heighestBid['price'])){
        $currentBid = $auction['Price'];
        $query = "INSERT INTO bid (ID_user,id_auction,price,max_price) VALUES ($userId,$auctionId,$currentBid,$maxPrice)";
        mysqli_query($db,$query);
    }elseif($maxPrice > $heighestBid['price'] ){
        $old = $heighestBid; // price,max_price,id
        $new;
        $winner;

        
        $currentBid = $heighestBid['price'] + $min_increment;
        $query = "INSERT INTO bid (ID_user,id_auction,price,max_price) VALUES ($userId,$auctionId,$currentBid,$maxPrice)";
        mysqli_query($db,$query);
        $new = getHeighestBid($auction['id_auction']);
        $winner = 1;

        echo $new['max_price'] > $currentBid ;
        echo $old['max_price'] > $currentBid;

        while($new['max_price'] > $currentBid  && $old['max_price'] > $currentBid){
            $temp = $winner == 1 ? $new :$old;
            $currentBid = $temp['price'] + $min_increment;
            $query = "INSERT INTO bid (ID_user,id_auction,price,max_price) VALUES ($userId,$auctionId,$currentBid,$temp[max_price])";
            mysqli_query($db,$query);
            $temp['price'] = $currentBid;
            if($winner == 1){
                $new = $temp;
            }else{
                $old = $temp;
            }
            
            $winner = $winner == 1 ? 2:1;
        }
    }


    
}



?>