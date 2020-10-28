<?php

require_once('connect.php');
$id=$_GET['id'];
echo $id;
$query = "DELETE FROM information WHERE id=".$id; 
$result=$connect->query($query);
echo $result;
$result = mysqli_query($connect,$query) or die ( mysqli_error());
header("Location: messe.php"); 


?>