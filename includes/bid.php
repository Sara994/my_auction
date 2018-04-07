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
    //$auction = getAuctionById($auctionId);

    $query = "SELECT price ,max_price,id,ID_user from bid where id_auction = $auctionId order by price desc limit 1";
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
}

function addBid($auctionId,$maxPrice){
    $db = connectToDb();
    $auction = getAuctionById($auctionId);
    $heighestBid = getHeighestBid($auction['id_auction']);

    $min_increment = $auction['min_increment'];

    global $userId;
    
    if(is_null($heighestBid['price'])){
        $currentBid = $auction['Price'];
        $query = "INSERT INTO bid (ID_user,id_auction,price,max_price) VALUES ($userId,$auctionId,$currentBid,$maxPrice)";
        mysqli_query($db,$query);
    }elseif($maxPrice > $heighestBid['price'] ){
        $old = $heighestBid; 
        
        $currentBid = $old['price'] + $min_increment;
        $new = [];
        $new['max_price'] = $maxPrice;
        $new['price'] = $currentBid;
        $new['ID_user'] = $userId;
        $current = $new;
        $other = $old;

        
        
        while($new['max_price'] > $currentBid  && $old['max_price'] > $currentBid){
            $temp = $current;
            $current = $other;
            $other = $temp;
            
            // insert other, update currentBid, 
            $currentBid = $other['price'];
            $query = "INSERT INTO bid (ID_user,id_auction,price,max_price) VALUES ($other[ID_user],$auctionId,$currentBid,$other[max_price])";
            
            mysqli_query($db,$query);
            
            $current['price'] = $other['price'] + $min_increment;
        }
    }
    return true;
}



?>