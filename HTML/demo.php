<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
<title>Học thiết kế web - Cách thiết kế trang đăng ký bằng Bootstrap | hocwebgiare.com</title>
<meta name="description" content="Học thiết kế web giả rẻ tại hocwbgiare.com" />
<meta name="keywords" content="hoc thiet ke web, lap trinh php, học online, thiet ke web chuan seo, lap trinh web, hoc php, thiet ke website chuan seo, học thiết kế website, thiết kế website chuẩn seo" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
body
{
   padding-top:40px;
}
.body-bg{
    background: linear-gradient(to right,#7cacdc,#e0e5eb);
}
form{
    font-family: 'Roboto', sans-serif;
}
.form-horizontal .header{
    background: #b5953f;
    padding: 10px 25px;
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    border-radius: 3px 3px 0 0;
}
.form-horizontal .form-content{
    padding: 25px;
    background: #f9fafd;
}
.form-horizontal .form-control{
    padding: 10px 50px 10px 15px;
    height: 50px;
    font-size: 18px;
    color: #000;
    border: 2px solid #acacac;
    margin-bottom: 15px;
}
.form-horizontal .form-control:hover{
    border-color: #c9af67;
}
.form-horizontal .form-control:focus{
    border-color: #b5953f;
    box-shadow: none;
}
.form-horizontal .control-label{
    width: 42px;
    height: 40px;
    font-size: 17px;
    color: #acacac;
    border-left: 1px solid #acacac;
    position: absolute;
    top: 5px;
    right: 20px;
    text-align: center;
}
.form-horizontal .captcha{
    padding-right: 0;
}
.form-horizontal .captcha label{
    background: #e0e0e0;
    display: block;
    height: 50px;
    font-size: 16px;
    color: #acacac;
    line-height: 45px;
    text-align: center;
    border-radius: 3px 0 0 3px;
}
.form-horizontal .captcha-text{
    padding-left: 0;
}
.form-horizontal .captcha-text input{
    border-radius: 0 3px 3px 0;
}
.form-horizontal .footer{
    background: #e8eaf6;
    border-top: 1px solid #b5953f;
    padding: 10px 25px;
}
.form-horizontal .footer .btn{
    background: #b5953f;
    font-size: 18px;
    color: #fff;
    float: right;
    margin: 10px 0;
    clear: both;
    padding: 10px 25px;
    transition: all 0.5s ease 0s;
}
.form-horizontal .name{
    padding: 10px 15px;
}
@media only screen and (max-width:767px){
    .form-horizontal .control-label i{
        line-height: 40px;
    }
    .form-horizontal .captcha label{
        font-size: 13px;
    }
}
</style>
</head>
<body>
      <div class="container"> 
  <div class="row"> 
   <div class="col-md-offset-2 col-md-8"> 
 
  <form action="recruitment.php" method="post" class="form-horizontal" enctype="multipart/form-data">
   <?php require_once('connect.php');
		 if(isset($_POST['submit'])){
		    $lastname=$_POST["lastname"];
		    $name=$_POST["name"];
		    $email=$_POST["email"];
		    $phone=$_POST["phone"];
		    $gender=$_POST["gender"];
		    $positions=$_POST["positions"];
		    $message=$_POST["message"];

  	 $sql="INSERT INTO information(lastname,name,email,phone,gender,positions,message)
   echoVALUES ('$lastname',$name','$email','$phone','$gender',$positions','$message')";
  
  $result=mysqli_query($connect,$sql);
  
  }

 if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $sql= "SELECT *FROM information where id=".$id;
      $result=mysqli_query($connect,$sql);
      $row = $result->fetch_all(MYSQLI_ASSOC);
    ?>

     <div class="header">Đăng ký</div> 
     <div class="form-content"> 
      <div class="form-group"> 
       <div class="col-sm-6">
        <input class="form-control name" name="lastname" id="lastname" placeholder="Họ" type="text" value="<?php echo $row[0]['lastname'] ?>">> 
       </div> 
       <div class="col-sm-6"> <input class="form-control name" id="name" name="name" placeholder="Tên" type="text" value="<?php echo $row[0]['name'] ?>">> 
       </div> 
      </div> 
      <div class="form-group"> 
       <div class="col-sm-6"> 
        <input class="form-control" id="phone" name="phone"placeholder="Phone" type="text" value="<?php echo $row[0]['phone'] ?>">> 
        <label class="control-label" for="phone"><i class="fa fa-user"></i></label> 
       </div> 
       <div class="col-sm-6"> <input class="form-control" id="email" name="email" placeholder="Địa chỉ Email" type="email" value="<?php echo $row[0]['email'] ?>">> <label class="control-label" for="email"><i class="fa fa-envelope-o"></i></label> 
       </div> 
      </div> 
      <div class="form-group"> 
       <div class="col-sm-6"> <input class="form-control" id="positions" name="positions"placeholder="Positions" type="text" value="<?php echo $row[0]['positions'] ?>"> <label class="control-label" for="positions"><i class="fa fa-lock"></i></label> 
       </div> 
       <div class="col-sm-6"> <input class="form-control" id="message" name="message" placeholder="Positions" type="text" value="<?php echo $row[0]['message'] ?>"><label class="control-label" for="message"><i class="fa fa-unlock"></i></label> 
       </div> 
      </div> 
      <div class="form-group"> 
       <div class="col-sm-12"> <select class="form-control"> 
<option value="none"name="gender" selected=""value="<?php echo $row[0]['gender'] ?>">Chọn giới tính...</option> 
<option value="male" >Nam</option> 
<option value="female">Nữ</option>
<option value="other">Khác</option> 
</select> 
       </div> 
      </div> 
      <div class="form-group">
                            <div class="col-sm-2 col-xs-3 captcha">
                                <label class="captcha">5 + 5 = </label>
                            </div>
 
                            <div class="col-sm-10 col-xs-9 captcha-text">
                                <input class="form-control name" placeholder="Nhập kết quả" type="text">
                            </div>
                        </div>
     </div> 
        <button class="w3-button w3-black w3-right w3-section" type="submits" name="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>      
        
</form>

<table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
   <th>STT</th>
    <th >Last Name</th>
    <th > Name</th>
    <th >Your Email</th>
    <th >Your Phone</th>
     <th >Positions</th>
     <th >Gender</th>
    <th >Message</th>
    <th>Accept</th>
    <th >Delete</th>
    
  </tr>
</thead>

<?php
$sql= "SELECT *FROM information";

$result=mysqli_query($connect,$sql);

  while($row = mysqli_fetch_assoc($result)){

   echo '<tr class="odd gradeX" glign="center">';
   echo '<td>'.$row['id'].'</td>';
   echo '<td>'.$row['lastname'].'</td>';
   echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    echo '<td>'.$row['positions'].'</td>';
    echo '<td>'.$row['message'].'</td>';

    
    echo '<td><button class="btn btn-warning"  ><a style="color:white;" href="add.php?id='.$row["id"].'">Accept</a></button></td>';
    echo  '<td ><button class="btn btn-primary" ><a style="color:white;"  href="delete.php?id= '.$row["id"].'">Delete</a></button></td>';


    echo '</td></tr>';
  

    }
  }else
    {
  ?>
       
<div class="container"> 
  <div class="row"> 
   <div class="col-md-offset-2 col-md-8"> 
    <form class="form-horizontal"> 
     <div class="header">Đăng ký</div> 
     <div class="form-content"> 
      <div class="form-group"> 
       <div class="col-sm-6"> <input class="form-control name" name="lastname" id="lastname" placeholder="Họ" type="text"  value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : "" ?>">
       </div> 
       <div class="col-sm-6"> <input class="form-control name" id="name" name="name" placeholder="Tên" type="text" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "" ?>">
       </div> 
      </div> 
      <div class="form-group"> 
       <div class="col-sm-6"> 
        <input class="form-control" id="phone" name="phone"placeholder="Phone" type="text"   value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : "" ?>">
        <label class="control-label" for="phone"><i class="fa fa-user"></i></label> 
       </div> 
       <div class="col-sm-6"> <input class="form-control" id="email" name="email" placeholder="Địa chỉ Email" type="email"  value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>"> <label class="control-label" for="email"><i class="fa fa-envelope-o"></i></label> 
       </div> 
      </div> 
      <div class="form-group"> 
       <div class="col-sm-6"> <input class="form-control" id="positions" name="positions"placeholder="Positions" type="text" value="<?php echo isset($_POST["positions"]) ? $_POST["positions"] : "" ?>"> <label class="control-label" for="positions"><i class="fa fa-lock"></i></label> 
       </div> 
       <div class="col-sm-6"> <input class="form-control" id="message" name="message" placeholder="Positions" type="text"   value="<?php echo isset($_POST["message"]) ? $_POST["message"] : "" ?>"> <label class="control-label" for="message"><i class="fa fa-unlock"></i></label> 
       </div> 
      </div> 
      <div class="form-group"> 
       <div class="col-sm-12"> <select class="form-control"> 
            <option value="none" selected="">Chọn giới tính...</option> 
            <option value="male" name="gender" value="<?php echo isset($_POST["gender"]) ? $_POST["gender"] : "" ?>">Nam</option> 
            <option value="female"name="gender" value="<?php echo isset($_POST["gender"]) ? $_POST["gender"] : "" ?>">Nữ</option>
            <option value="other"name="gender" value="<?php echo isset($_POST["gender"]) ? $_POST["gender"] : "" ?>">Khác</option> 
            </select> 

       </div> 
      </div> 
      <div class="form-group">
                            <div class="col-sm-2 col-xs-3 captcha">
                                <label class="captcha">5 + 5 = </label>
                            </div>
 
                            <div class="col-sm-10 col-xs-9 captcha-text">
                                <input class="form-control name" placeholder="Nhập kết quả" type="text">
                            </div>
                        </div>
     </div> 
        <button class="w3-button w3-black w3-right w3-section" type="submits" name="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
  </div>

</form>
<?php
  }
  ?>



<!-- 
      <div class="form-group"> 
       <div class="col-sm-2 col-xs-3 captcha"><label class="captcha">5 + 5 = </label> 
       </div> 
       <div class="col-sm-10 col-xs-9 captcha-text"> <input class="form-control name" placeholder="Nhập kết quả" type="text"> 
       </div> 
      </div> 
     </div> 
     <div class="footer clearfix"> 
      <button type="submit" class="btn btn-default">Đăng ký ngay</button> 
     </div> 
    </form> 
   </div> 
  </div> 
 </div> -->
