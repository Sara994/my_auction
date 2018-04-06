<?php
require_once('zad_DB.php');

function getItemByID($itemId){
    $db = connectToDb();
    $query = "SELECT * FROM item WHERE ID_item = $itemId";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
        $items[] = $row;
    }
    return $items[0];
}

function getAuctionByID($auctionId){
    $db = connectToDb();
    $query = "SELECT * FROM item i join auction a on i.id_auction = a.id_auction join item_category ic on ic.id = category_id WHERE a.id_auction = $auctionId";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
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
        $items[] = $row;
    }
    return $items;
}