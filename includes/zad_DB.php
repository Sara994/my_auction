<?php
function connectToDb(){
	$conn = mysqli_connect('localhost','root','','zad_Database');
	mysqli_set_charset($conn,"utf8");
	return $conn;
}