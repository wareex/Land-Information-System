
<?php 
include('dbstuff.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- for bootstrap working -->
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!-- //for bootstrap working -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System   </title>
<script src="bootstrap/js/respond.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" src="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
    <script src="js/ism-2.2.min.js"></script>
   <div class="container"> <link rel="stylesheet" href="my-slider.css"/>

</head>
 
<body class="body">
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
                <li><a  class="scroll" href = "index.php#about">ABOUT US | CONTACT US</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="jumbotron">
  <div  align="center" class="row">
  
    <div class="ism-slider" data-transition_type="fade" data-play_type="loop" data-interval="3000" id="my-slider">
      <ol>
        <li> <img src="img/002.jpg" /> </li>
        <li> <img src="img/003.jpg" /> </li>
        <li> <img src="img/004.png" /> </li>
        <li> <img src="img/005.png" /> </li>
        <li> <img src="img/006.png" /> </li>
        <li> <img src="img/007.png" /> </li>
      </ol>
    </div>
   </div>
</div>




<div class="container" id="acct" style="color:#eee">
	<div class="row">
		
      </div>
      <div class="row">
      	<div class="col-xs-8 col-xs-offset-2">
         
        <div class="panel panel-default">
        <div class="panel-heading">
        	<h2 class=" text-center panel-title">WHAT YOU SHOULD KNOW ABOUT LAND INFORMATION SYSTEM </h2>
        </div>
        	
        <div class="panel-body">
        	<p class="text-success">A land Information System (LIS) is a geographic information system for cadastral and land-use mapping, typically used by local governments.</p>
            </div>
        </div>
        </div>
      </div>

<p>A LIS consists of an accurate, current and reliable land record cadastre and its associated attribute and spatial data that represent the legal boundaries of land tenure and provides a vital base layer capable of integration into other geographic systems or as a standalone solution that allows data stewards to retrieve, create, update, store, view, analyze and publish land information.</p>
<hr>

<div class="jumbotron" style="color:#000;">
	<h2 class="text-center">IMPORTANCE OF LAND INFORMATION SYSTEM </h2>
    <p>
    Land parcel is the basic unit for access and control of land, land use decisions.
	Current, reliable land information necessary for many public programs: land planning, infrastructure development and maintenance, environmental protection and resource management, emergency services, social service programs and so forth.
LIS provides a base for land markets, development, and other economic activity.
LIS helps in updating of the maps.

</p>
</div>


</div>
</div>
 
<footer class="jumbotron" id="about" style="margin:0; background-color:#666; color:#CCC;">
<div class="container">
<div class="row">
<div class="col-xs-6">
    <h3>ABOUT US</h3>
    <div class="small" style="color:#CCC; font-size:.2em; font-family:Georgia, 'Times New Roman', Times, serif;">
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
    <h3>CONTACT US</h3>
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
</footer>
</body>
</html>