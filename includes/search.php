<?php
require_once("zad_DB.php");

function search(){
    $db = connectToDb();
    $query = "Select Title from item";
    $result = mysqli_query($db,$query);
    $items = [];
    while ($row = mysqli_fetch_array($result)) {
        $items[] = $row;
    }
    return $items;
}