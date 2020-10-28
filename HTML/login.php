<?php
ob_start();
$host="localhost";
$user="root";
$password="";
$database="admins";
$connect=mysqli_connect($host,$user,$password,$database);

if(!$connect){
die("connect fail:".mysql_connect_erro());
}
 if(isset($_POST['submit'])){
//   // include("HomePage.php");

$username=$_POST["username"];
$password=$_POST["password"];

if($username=='vothinhi'&&$password=='vothinhi'){
  header('Location:admin2.php');
}
  else{
    $message = "Password or Username wrong";
   echo "<script type='text/javascript'>alert('$message');
   </script>";
  }
}
ob_end_flush();
?>