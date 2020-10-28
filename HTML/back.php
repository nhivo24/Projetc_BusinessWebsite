<!-- <meta charset="utf-8">
<?php
// error_reporting(0);
require_once('connect.php');

// error_reporting(2);

// $target_file = "../".basename($FILES["txtpic"]["name"]);
// $uploadOK=1;
if(isset($_POST['submit'])){
    // $pricePr='';
    // $decsPr='';
    // $image =basename($FILES["txtpic"]["name"]);
    // if($image == null || $image=''){
    //     $image=$_POST['txtpic'];
    //     $uploadOK=On;
    // }
    // else{
    //     $check=getimagesize($FILES["txtpic"]["tmp_name"]);
    //     if($check!==false){
    //         $image=basename($FILES["txtpic"]["name"]);
    //         $uploadOK=1;
    //     }else{
    //         $image='';

    //     }
    
    //     $uploadOK=On;

    // }

    $uploadOK=On;
    $namePr=$_POST["txtname"];
    $decsPr= $_POST["txtdesc"];
    $pricePr=$_POST["txtprice"];
    $imagePr=$_POST["txtpic"];
}
    
    $sql="insert into appl(namecv,descrip,salary,image)
    value('$namePr','$decsPr',now(),'$pricePr','$imagePr');";
    
    $result=$connect->query($sql);
   header("Location: login.php?addps=success");

?>














// if(file_exit($target_file)){
//     $uploadOK=0;
// }
// if($uploadOK==0){

// }else{
//     if(move_upload_file($FILES["txtpic"]["tmp_name"], $target_file)){
//         echo "the file".basename($FILES["txtpic"]["name"]). "has been upload.";
//     }else{

//     }
// }





// if($result){
//     header("location:login.php?addps=success");
   
//     exit();
// }
// // else($result){
//     header("location:login.php?addpf=fail");
//     exit();
// }

?> -->