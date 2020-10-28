<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="Css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="shortcut icon" type="image/png" href="https://jobs.uit.edu.vn/sites/default/files/logo/icon_logo_png.png" />
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
<body>
  <h1 style="text-align: center;">Information Candidates</h1>
 <form action="detail.php" method="post" class="form-group"enctype="multipart/form-data">

  <?php require_once('connect.php');


 if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $sql= "SELECT *FROM apply where id=".$id;
      $result=mysqli_query($connect,$sql);
      $row = $result->fetch_all(MYSQLI_ASSOC);}
    ?>
   <div class="form-group col-md-12">
              <img src="<?php echo $row[0]['image'] ?>" style="width:600px;
              height:400px;display: block; margin-left: auto; margin-right: auto;">
              <input hidden="" type="text" name="img" value="<?php echo $row[0]['image'] ?>">
             
   </div>
  <div class="form-group col-sm-6">
                 <p style="margin-left: 640px;">Name Job: </p>
                  <input style="margin-left: 640px; width: 200px;text-align: center;"id="name" name="name" type="text" class="form-control" value="<?php echo $row[0]['namecv'] ?>">
  </div>
  <div class="form-group col-sm-6">
                  <p style="margin-left: 630px;">Description:  </p>
              
                  <textarea type='text' id="desc" name="desc" rows="4"style="margin-left:  630px; width: 500px;text-align: center;"><?php echo $row[0]['descrip'] ?></textarea>
              
  </div>
  <div class="form-group col-sm-6">
                  <p  style="margin-left:  630px;">Request:  </p>
                   <textarea style="margin-left: 630px; width: 500px;text-align: center;" type='text' id="req" name="req" rows="4"style="width: 500px;"><?php echo $row[0]['requite'] ?></textarea>
             
             
  </div>
  <div class="form-group col-sm-6">
                  <p  style="margin-left:  630px;">Salary: </p>
                  <input  style="margin-left:  630px; width: 200px;text-align: center;" id="salary" name="salary" type="text" class="form-control"value="<?php echo $row[0]['salary'] ?>">
   </div>
  <div class="form-group col-sm-6">
      <p style="margin-left:  630px;">Amount: </p>
      <input   style="margin-left:  630px; width: 200px;text-align: center;" id="amount" name="amount" type="number" class="form-control"value="<?php echo $row[0]['amount'] ?>">
  </div>
  <div  style="margin-left: 1200px;" class="form-group col-sm-6">
  <button type="button" class="btn-btn-primary" onclick="Ok()"><a href="HomePage.php">Ok</a></button>
   <button type="button" class="btn-btn-primary" onclick="Ok()"><a href="register.php">Apply To</a></button>
  
</div>
          
 

</form>
<script>
  function Ok(){
    var a='if you find job, please contact with us';
    alert(a)
  }
</script>
</body>
</html>