<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "restaurant";

$con = mysqli_connect($host , $user , $password , $dbname);
//check connection
if(!$con){
    die("Connection failed :" .mysqli_connect_error());
}



?>