<?php

require_once("connect.php");
 if(isset($_POST['submit'])){
  $name=$_POST["name"];
  $desc= $_POST["desc"];
  $req=$_POST["req"];
  $salary=$_POST["salary"];
  $image=$_FILES["image"]["name"];
  
  $sql="INSERT INTO apply(namecv,descrip,requite,salary,image)
   VALUES ('$name','$desc','$req','$salary',"."'../"."Image/".$image."'".");";
  
  $result=mysqli_query($connect,$sql);
   if($result)
        {
            
             header("location:add.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
}
  echo "hello";
    if(isset($_POST['update']))
    {
        $id = $_POST['update'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $req = $_POST['req'];
        $amount=$_POST['amount'];
        $salary = $_POST['salary'];
       
       if($_POST['img']!=""){
          $im=$_POST['img'];
       }else{
         $im=$_FILES['image']['name'];
            echo $im;
            $image="../Image/$im";
       }
           

    $sql ="UPDATE apply SET  namecv='$name',descrip ='$desc',image='$image', requite='$req',amount='$amount',salary='$salary'WHERE id=".$id;
        $result = $connect->query($sql);
 
        if($result)
        {
            
             header("location:add.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }

    else
    {
        echo "nhi";
    }
 
 
?>