<?php
require_once('zad_DB.php');

function getCategory($catId){
    
    $db = connectToDb();
    $query = "SELECT p.title as parent,s.title as title FROM item_category s left join item_category p on p.id = s.parent_category where s.id = $catId";
    $result = mysqli_query($db,$query);
    $items = [];
    $category = mysqli_fetch_array($result);

    $categories = [];
    if($category['parent'])
        $categories[] = $category['parent'];
    $categories[] = $category['title'];


    return $categories;
}

function getItemByID($itemId){
    $db = connectToDb();
    $query = "SELECT * FROM item WHERE ID_item = $itemId";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
        $catId = $row['category_id'];
        $categories = getCategory($catId);
        
        $row['categories'] = $categories;
        $items[] = $row;
    }
    return $items[0];
}


function getAuctionByID($auctionId){
    $db = connectToDb();
    $query = "SELECT * FROM item i join auction a on i.id_auction = a.id_auction WHERE a.id_auction = $auctionId";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
        $catId = $row['category_id'];
        $categories = getCategory($catId);
        
        $row['categories'] = $categories;
        $items[] = $row;
    }
    return $items[0];
}

function getAllAuctions(){
    $db = connectToDb();
    $query = "SELECT * FROM item i right join auction a on i.id_auction = a.id_auction";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
        $catId = $row['category_id'];
        $categories = getCategory($catId);
        
        $row['categories'] = $categories;
        $items[] = $row;
    }
    return $items;
}

function getAllItems(){
    $db = connectToDb();
    $query = "SELECT * FROM item i where id_auction is null";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
        $catId = $row['category_id'];
        $categories = getCategory($catId);
        
        $row['categories'] = $categories;
        $items[] = $row;
    }
    return $items;
}