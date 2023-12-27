<?php
include('dbstuff.php');

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System|Admin Login  </title>
<script src="bootstrap/js/respond.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" src="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
    <script src="js/ism-2.2.min.js"></script>
   <div class="container"> <link rel="stylesheet" href="my-slider.css"/>

</head>
 
<body>
<script src="jqueryjquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<div class="f-head" style="display:inline-block;"><img src="img/header.fw.png" style="height:100%; width:100%;"></div>
<div class="navbar navbar-default">
  <div class="container">
        <div class="navbar-header">            
            <ul class="nav nav-pills navbar-right">
                <li><a href = "index.php">HOME</a></li>
                <li><a  href="adminlog.php">ADMIN</a></li>
                <li><a class="scroll" href="printcert.php">REPRINT-CERTIFICATE</a></li>
                <li><a class="scroll" href="reg2.php">CREATE ACCOUNT</a></li>
                <li><a  class="scroll" href = "#about">ABOUT US | CONTACT US</a></li>
            </ul>
        </div>
    </div>
</div>

   <div class="panel panel-danger">
        	<div class="panel-heading">
            	<h2 class="panel-title">ADMIN LOGIN </h2>
            </div>
            <div class="panel-body">
    <form name="form2" class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label for="userids" class="col-xs-2 col-xs-offset-2 control-label"> USERNMAE</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="userids" name="username" placeholder="Enter Usernmae" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penid" class="col-xs-2 col-xs-offset-2 control-label">PASSWORD</label>
                        <div class="col-xs-3">
                            <input type="password" name="password" class="form-control" id="penid" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col-xs-2 col-xs-offset-2" style="border:none;"><input type="submit" name="log" class="btn btn-primary btn-block" value="LOG IN"></div> 
        <?php
  if (isset($_POST['log'])){
      //extract($_POST);
          $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];  
  
   
    $sql= "SELECT * FROM admin WHERE username = '".$_SESSION['username']."'  &&  password = '".$_SESSION['password']."' ";
    $ff= mysql_num_rows(mysql_query($sql));
    
        if ($ff >= 1){
      header("location:dash.php");    
         
    }
    else{
       echo '<script>  alert("Invalid Login")  </script>';
    }
    
  }
  ?>
                  <div class="col-xs-2 col-xs-offset-1"><input type="reset" name="reset2" class="btn btn-danger btn-block" value="RESET"></div>
               </form>
            </div>
        </div>

</div>

<footer class="jumbotron" id="about" style="margin:0; background-color:#333; color:#CCC;">
<div class="container">
<div class="row">
<div class="col-xs-6">
    <label class="text-primary lead">ABOUT US</label>
    <div class="small" style="color:#CCC; font-size:12px; font-family:Arial, Helvetica, sans-serif;">
    <p>
    	GET ASSURED | We are license to get your land certified,
    </p>
    <p>
    	through appropraite details about you and your land.
    </p>
    <p>
     Your property...........We secure.
     </p>
    </div>
    </div>
    <div class="col-xs-6">
    <label class="text-info lead">CONTACT US</label>
    <div style="color:#CCC; font-size:12px; font-family:Arial, Helvetica, sans-serif;">
    <p>
    	Address: Suited at No 45, amukoko apapa, Lagos, Nigeria.
    </p>
    <p>
    	Email: land@info.com, landcert@gmail.com
    </p>
    <p>
    	Tel: +2348186537139, +234907272622
    </p>
    <p>
     <a href="facebook.com"><img src="img/fb.png"></a>  
      <a href="twitter.com"><img src="img/tw.png"></a> 
       <a href="googleplus.com"><img src="img/gp.png"></a> 
        <a href="microsoft.com"><img src="img/ml.gif"></a>
     </p> 
     </div>
    </div>
</div>
</div>
</footer></body>




</html>
