<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <form action="recruitment.php" method="post" class="form-group"enctype="multipart/form-data">
  <?php require_once('connect.php');
 if(isset($_POST['submit'])){
  $name=$_POST["name"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $positions=$_POST["positions"];
    $message=$_POST["message"];

   $sql="INSERT INTO information(name,email,phone,positions,message)
   VALUES ('$name','$email','$phone','$positions','$message')";
  
  $result=mysqli_query($connect,$sql);
  
  }

 if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $sql= "SELECT *FROM information where id=".$id;
      $result=mysqli_query($connect,$sql);
      $row = $result->fetch_all(MYSQLI_ASSOC);
    ?>
  <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name"  name="name" value="<?php echo $row[0]['name'] ?>">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="email"value="<?php echo $row[0]['email'] ?>">
          </div>
          
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="phone"value="<?php echo $row[0]['phone'] ?>">
          </div>
        <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="positions"value="<?php echo $row[0]['positions'] ?>">
          </div>
      </div>
        <input class="w3-input w3-border" type="text" placeholder="Message"  name="message">

        <button class="w3-button w3-black w3-right w3-section" type="submits" name="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>      
        
</form>

<table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
   <th>STT</th>
    <th >Full Name</th>
    <th >Your Email</th>
    <th >Your Phone</th>
     <th >Positions</th>
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
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    echo '<td>'.$row['positions'].'</td>';
    echo '<td>'.$row['message'].'</td>';

    
    echo '<td><button class="btn btn-warning"  ><a style="color:white;" href="add.php?id='.$row["id"].'">Accept</a></button></td>';
    echo  '<td ><button class="btn btn-primary" ><a style="color:white;"  href="delete.php?id= '.$row["id"].'">Delete</a></button></td>';


    echo '</td></tr>';
  

    }
  }else
    {
  ?>
       <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name"  name="name" 
            value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "" ?>">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="email"
            value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>">
          </div>

          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Your email"  name="phone"
            value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : "" ?>">
          </div>
        <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Your Positions"  name="positions"
            value="<?php echo isset($_POST["positions"]) ? $_POST["positions"] : "" ?>">
          </div>
      </div>
        <input class="w3-input w3-border" type="text" placeholder="Your message"  name="message" 
        value="<?php echo isset($_POST["message"]) ? $_POST["message"] : "" ?>">

        <button class="w3-button w3-black w3-right w3-section" type="submit " name="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>

</form>
<?php
  }
  ?>
