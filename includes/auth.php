<?php
require_once('zad_DB.php');

function isLoggedIn(){

}

function login($username,$password){
    $db = connectToDb();
    $query = "select * from user where Username like '$username' and Password like '$password'";
    $result = mysqli_query($db,$query);
    
}