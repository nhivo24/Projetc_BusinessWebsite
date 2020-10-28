
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Css/index.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
	
  <h2></h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i></button>

  <!-- Modal -->
 

  <div class="modal fade" id="myModal" role="dialog">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="modal-dialog">
    
      <div class="modal-content">
				<div style="margin-top: 20px;margin-left: 200px;" id="img01">
					 <img id="myImg" src="../Image/nhi.jpg"  class="img-circle" alt="Snow" style="width:100px;height:100px;">
			
        </div>
        <div class="modal-body">
        <form action="" method="post" class="fom">
						<input style="margin-left: 80px;width:300px;height:50px;" placeholder="Username or Email" name="username" type="text" >
						<input style="margin-left: 80px;width:300px;height:50px;" placeholder="Password" name="password" type="password" required="">
						<input style="margin-left: 170px;"  type="submit" value="login" name="submit">
		</form>
      
    </div>
  </div>
  
</div>
<?php
require_once("login.php");
?>
</body>
</html>
