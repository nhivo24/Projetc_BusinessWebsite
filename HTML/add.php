<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="../Css/bootstrap.min.css" rel="stylesheet">
  <link href="../Css/font-awesome.min.css" rel="stylesheet">
  <link href="ss/datepicker3.css" rel="stylesheet">
  <link href="../Css/admin1.css" rel="stylesheet">
   <link rel="shortcut icon" type="image/png" href="https://jobs.uit.edu.vn/sites/default/files/logo/icon_logo_png.png" />
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span></span>Admin</a>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
          </a>
            <ul class="dropdown-menu dropdown-messages">
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                  </a>
                  <div class="message-body"><small class="pull-right">3 mins ago</small>
                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                  <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                  </a>
                  <div class="message-body"><small class="pull-right">1 hour ago</small>
                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                  <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="all-button"><a href="#">
                  <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                </a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-bell"></em><span class="label label-info">5</span>
          </a>
            <ul class="dropdown-menu dropdown-alerts">
              <li><a href="#">
                <div><em class="fa fa-envelope"></em> 1 New Message
                  <span class="pull-right text-muted small">3 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-heart"></em> 12 New Likes
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-user"></em> 5 New Followers
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
        <img src="../Image/nhi.jpg" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">Admin</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li class="active"><a href="../HTML/HomePage.php"><em class="fa fa-dashboard">&nbsp;</em>PAGES</a></li>
      <li><a href="../HTML/messe.php"><em class="fa fa-calendar">&nbsp;</em>Information</a></li>
      <li><a href="../HTML/add.php"><em class="fa fa-toggle-off">&nbsp;</em>CRUD RECRUITMENT</a></li>
      <li><a href="../HTML/HomePage.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Dashboard</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
    </div><!--/.row-->
    
    <div class="panel panel-container">
      <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-teal panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
              <div class="large">120</div>
              <div class="text-muted">New Orders</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-blue panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
              <div class="large">52</div>
              <div class="text-muted">Comments</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-orange panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
              <div class="large">24</div>
              <div class="text-muted">New Users</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-red panel-widget ">
            <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
              <div class="large">25.2k</div>
              <div class="text-muted">Page Views</div>
            </div>
          </div>
        </div>
      </div><!--/.row-->
    </div>
    
           
      <form action="edit.php" method="post" class="form-group"enctype="multipart/form-data">
  <?php require_once('connect.php');
  if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $desc= $_POST["desc"];
    $req=$_POST["req"];
    $amount=$_POST["amount"];
    $salary=$_POST["salary"];
    $image=$_FILES["image"]["name"];

  
  $sql="INSERT INTO apply(namecv,descrip,requite,amount,salary,image)
   VALUES ('$name','$desc','$amount',$req','$salary',"."'../"."Image/".$image."'".");";
  
  $result=mysqli_query($connect,$sql);
  
  }

 if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $sql= "SELECT *FROM apply where id=".$id;
      $result=mysqli_query($connect,$sql);
      $row = $result->fetch_all(MYSQLI_ASSOC);
    ?>
  <div class="form-group col-sm-6">
                 <p>Name Job </p>
                  <input id="name" name="name" type="text" class="form-control" value="<?php echo $row[0]['namecv'] ?>">
  </div>
  <div class="form-group col-sm-6">
                  <p>Description  </p>
                <input id="desc" name="desc" type="text" class="form-control"value="<?php echo $row[0]['descrip'] ?>">
              
  </div>
  <div class="form-group col-sm-6">
                  <p>Request  </p>
                  <input id="req" name="req" type="text" class="form-control"value="<?php echo $row[0]['requite'] ?>">
             
  </div>
  <div class="form-group col-sm-6">
                  <p>Salary</p>
                  <input id="salary" name="salary" type="text" class="form-control"value="<?php echo $row[0]['salary'] ?>">
   </div>
  <div class="form-group col-sm-6">
      <p>Amount</p>
      <input id="amount" name="amount" type="number" class="form-control"value="<?php echo $row[0]['amount'] ?>">
  </div>
  <div class="form-group col-md-12">
              <label for="image" class="col-md-4">Image:</label>
              <img src="<?php echo $row[0]['image'] ?>" style="height:60px;width:100px;">
              <input hidden="" type="text" name="img" value="<?php echo $row[0]['image'] ?>">
              <input type="file" class=" col-md-4" id="image" name="image" >
   </div>
                
  <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="submit" >Add</button>
            <button type="submit" class="btn btn-primary" name="update" value="<?php echo $row[0]['id'] ?>" >Update</button>
  </div>
        
</form>

<table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
    <th>STT</th>
    <th >Name Job</th>
    <th >Description</th>
    <th >Request</th>
     <th >Amount</th>
    <th >Salary</th>
    <th >Image</th>
    <th>Date</th>
    <th>Edit</th>
    <th >Delete</th>
    
  </tr>
</thead>

<?php
$sql= "SELECT *FROM apply";

$result=mysqli_query($connect,$sql);

  while($row = mysqli_fetch_assoc($result)){

    if($row['image']== null || $row['image']== ''){

      $thumbImage='';

    }
    else{
      $thumbImage="../" .$row['image'];
    }
      
    echo '<tr class="odd gradeX" glign="center">';
    echo '<td>'.$row['id'].'</td>';

    echo '<td>'.$row['namecv'].'</td>';
    echo '<td>'.$row['requite'].'</td>';
    echo '<td>'.$row['descrip'].'</td>';
     echo '<td>'.$row['amount'].'</td>';
    echo '<td>'.$row['salary'].'</td>';

    
    echo '<td> <img style="height:60px;width:100px;"src="'.$row['image'].'"></td>';
echo '<td>'.date("m/d/yy").'</td>';  
    
    echo '<td><button class="btn btn-warning"  ><a style="color:white;" href="add.php?id='.$row["id"].'">Edit</a></button></td>';
    
    // echo  '<td ><button class="btn btn-primary " style="color:white; ><a href="delete.php?getId= '.$row["id"].'">Delete</a></button></td>';
    echo  '<td ><button class="btn btn-primary" ><a style="color:white;"  href="delete.php?id= '.$row["id"].'">Delete</a></button></td>';


    echo '</td></tr>';
  

    }
  }else
    {
  ?>

      <div class="form-group col-sm-6">
                  <p>Name Job </p>
                  <input id="name" name="name" type="text" class="form-control" value="<?php echo isset($_POST["name"]) 
                  ? $_POST["name"] : "" ?>">
      </div>
    <div class="form-group col-sm-6">
               <p>Description  </p>
              <input id="desc" name="desc" type="text" class="form-control"value="<?php echo isset($_POST["desc"]) ? $_POST["desc"] : "" ?>">
            
        </div>
    <div class="form-group col-sm-6">
                <p>Request  </p>
                <input id="req" name="req" type="text" class="form-control"value="<?php echo isset($_POST["req"]) ? $_POST["req"] : "" ?>">
           
        </div>
    <div class="form-group col-sm-6">
                <p>Salary</p>
                <input id="salary" name="salary" type="text" class="form-control"value="<?php echo isset($_POST["salary"]) ? $_POST["salary"] : "" ?>">
        </div>
         <div class="form-group col-sm-6">
      <p>Amount</p>
      <input id="amount" name="amount" type="number" class="form-control"value="<?php echo isset($_POST["amount"]) ? $_POST["amount"] : "" ?>">
  </div>
    <div class="form-group col-md-12">
            <label for="image" class="col-md-4">Image:</label>
            <input type="file" class=" col-md-4" id="image" name="image" >
        </div>
          <div class="col-md-12">
          <button type="submit" class="btn btn-primary" name="submit" >Add</button>
        </div>
</form>
  
<table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
class="table table-hover table-bordered">
    <tr class="table-primary table-header" style="text-align: center;">
    <th>STT</th>
    <th >Name Job</th>
    <th >Description</th>
    <th >Request</th>
     <th >Amount</th>
    <th >Salary</th>
    <th >Image</th>
    <th>Date</th>
    <th>Edit</th>
    <th >Delete</th>    
  </tr>
</thead>


<?php
 require_once('connect.php');

  if(isset($_POST['submit'])){
  $name=$_POST["name"];
  $desc= $_POST["desc"];
  $req=$_POST["req"];
  $amount=$_POST["amount"];
  $salary=$_POST["salary"];
  $image=$_FILES["image"]["name"];
  
  $sql="INSERT INTO apply(namecv,descrip,requite,amount,salary,image)
   VALUES ('$name','$desc','$req','$amount',$salary',"."'../"."Image/".$image."'".");";
  
  $result=mysqli_query($connect,$sql);
   header("Location:HomePage.php");
  }

$sql= "SELECT *FROM apply";
$result=mysqli_query($connect,$sql);
}
  while($row = mysqli_fetch_assoc($result)){
    if($row['image']== null || $row['image']== ''){
      $thumbImage='';

    }
    else{
      $thumbImage="../" .$row['image'];
    }
      
    echo '<tr class="odd gradeX" glign="center">';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['namecv'].'</td>';
    echo '<td>'.$row['requite'].'</td>';
    echo '<td>'.$row['descrip'].'</td>';
    echo '<td>'.$row['amount'].'</td>';
    echo '<td>'.$row['salary'].'</td>';
    
    echo '<td> <img style="height:60px;width:100px;"src="'.$row['image'].'"></td>';
echo '<td>'.date("m/d/yy").'</td>'; 
    
    echo '<td><button class="btn btn-warning" ><a style="color:white;" href="add.php?id='.$row["id"].'">Edit</a></button></td>';
   echo  '<td ><button class="btn btn-primary"><a style="color:white;" href="delete.php?id= '.$row["id"].'">Delete</a></button></td>';
   echo '</td></tr>';
  }

?>
      
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
    
</body>
</html>

  