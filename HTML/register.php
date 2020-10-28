

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="shortcut icon" type="image/png" href="https://jobs.uit.edu.vn/sites/default/files/logo/icon_logo_png.png" />
<style type="text/css">

body
{
   padding-top:40px;
}
.body-bg{
    /*//background: linear-gradient(to right,#7cacdc,#e0e5eb);*/
    background-image: url(../Image/kms.jpg);
}
form{
    font-family: 'Roboto', sans-serif;
}
.form-horizontal .header{
background-image: linear-gradient(to right, crimson, lightsalmon, gold, 
  seagreen,#7cacdc , pink, violet);    padding: 10px 25px;
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
    border-color: #27aae2;
}
.form-horizontal .form-control:focus{
    border-color:#27aae2;
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
    border-top: 1px solid #8bc543;
    padding: 10px 25px;
}
.form-horizontal .footer .btn{
    background: #8bc543;
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
<body class="body-bg">
    <?php require_once('connect.php');



 if(isset($_POST['submit'])){
   
    $lastname=$_POST["lastname"];
     $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $positions=$_POST["positions"];
    $message=$_POST["message"];

   $sql="INSERT INTO information(lastname,name,email,gender,phone,positions,message)
   VALUES ('$lastname','$name','$email','$gender','$phone','$positions','$message')";
  
  $result=mysqli_query($connect,$sql);
  header('Location: HomePage.php');
   
  
  }

 ?>
<div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <form action="" class="form-horizontal" method="post">
                    <div class="header">Application for employment</div>
                    <div class="form-content">
                    <div class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control name" id="exampleInputName2" name="lastname"  placeholder="Last Name" type="text"  value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : "" ?>">
                            </div>
 
                            <div class="col-sm-6">
                                <input class="form-control name" id="exampleInputName2" name="name" placeholder="First Name" type="text"  value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <select class="form-control" name="gender">
                                    <option  value="dsnd"  selected="">Gender...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>

                            </div>
                               
                            <div class="col-sm-6">
                                <input class="form-control" id="exampleInputName2" name="email" placeholder="Your Email" type="email"  value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-envelope-o"></i></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" id="exampleInputName2" name="phone" placeholder="Your Phone"   value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : "" ?>">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-lock"></i></label>
                            </div>
 
                            <div class="col-sm-6">
                                <input class="form-control" id="exampleInputName2" name="positions" placeholder="Position"  value="<?php echo isset($_POST["positions"]) ? $_POST["positions"] : "" ?>">
                                <label class="control-label" for="exampleInputName2"><i class="fa fa-unlock"></i></label>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-3 captcha" >
                                <label class="captcha">Messege</label>
                            </div>
 
                            <div class="col-sm-10 col-xs-9 captcha-text">
                                <input class="form-control name"  name="message" placeholder="Nhập tin nhắn" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="footer clearfix">
                        <button type="submit" class="btn btn-default" name="submit"> 
                            Submit
                          </button>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- <script type="text/javascript">
    function Ok(){
        alert("Thank you for your information! Waiting for us!!!!");
         //window.location.href='../VoThiNhi_Project/HTML/HomePage.php='+window.location.href;
    }


</script> -->
</body>
</html>



