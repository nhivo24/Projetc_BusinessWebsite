<?php
ob_start();
$host="localhost";
$user="root";
$password="";
$database="admins";
$connect=mysqli_connect($host,$user,$password,$database);

if(!$connect){
die("connect fail:".mysql_connect_error());
}
?>