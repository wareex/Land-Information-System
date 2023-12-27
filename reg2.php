
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
<!-- //for bootstrap working -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System   </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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

<div class="container" id="acct" >
<div class="btn-primary btn-lg btn-block text-center text-info" id="topss"> REGISTER ACCOUNT </div>
    <style>
		#topss {
			margin-bottom:15px;
		}
		input {
			margin-bottom:10px;
			margin-top: 0px;
		}
	</style>
    <form name="formowner" class="form-horizontal" method="post" action="reg.php">
        <div class="form-group">
        	<label for="ownerss" class="col-xs-2 col-xs-offset-2 control-label">OWNER'S ID</label>
            <div class="col-xs-6">
        	<input type="text" class="form-control" name="owner_id" readonlyvalue="<?php 
   
      function getRandomString($length = 3) {

           $validCharacters = "0123456789";

            $validCharNumber = strlen($validCharacters);

             $result = "";

          for ($i = 0; $i < $length; $i++) {

              $index = mt_rand(0, $validCharNumber - 1);

               $result .= $validCharacters[$index];

          }

            return $result;

        }

     echo "LHD"."00".getRandomString(); ?>" ></div></div>
  
       <div class="form-group">
          <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">SURNAME</label>
          <div class="col-xs-6"><input type="text" class="form-control" name="surname"></div>
        </div>
        <div class="form-group">
          <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">OTHERNAME</label>
          <div class="col-xs-6"><input type="text" class="form-control" name="othername"></div>
        </div>
          <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">GENDER</label>
          <div class="form-group"><div class="col-xs-3" style="margin-bottom:10px;"><select class="form-control" name="gender">
            <text>---SELECT GENDER------</text>
            <option class="item">FEMALE</option>
            <option>MALE</option>
          	</select>
            
          </div>
          <span class="clearfix"></span>
          <div class="form-group">
            <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">BIRTH-PLACE</label>
             <div class="col-xs-6"><input type="text" class="form-control" name="birth_place"></div>
           </div>
          <div class="form-group">           
           <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">OCCUPATION</label>
          <div class="col-xs-6"><input type="text" class="form-control" name="occupation"></div>
        </div>
          <div class="form-group">          
           <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">STATE OF ORIGIN</label>
         <div class="col-xs-6"><input type="text" class="form-control" name="state"></div>
        </div>
        <div class="form-group"> 
         <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">Local Government Area </label>
          <div class="col-xs-6"><input type="text" class="form-control" name="lga"></div>
        </div>
       <div class="form-group">
          <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">ADDRESS</label>
          <div class="col-xs-6"><input type="text" class="form-control" name="address"></div>
        </div>
       <div class="form-group">
           <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">PHONE-NO</label>
          <div class="col-xs-6"><input type="text" class="form-control" name="phone"></div>
        </div>
        <div class="form-group">
           <label for="surname1" class="col-xs-2 col-xs-offset-2 control-label">EMAIL ADDRESS </label>
          <div class="col-xs-6"><input type="text" class="form-control" name="email"></div>
        </div>
        <div class="form-group">
          <div class="col-xs-3 col-xs-offset-3"><input type="submit" name="reg1" class="btn btn-primary btn-block" value="REGISTER"></div>       

          <div class="col-xs-3 col-xs-offset-1"><input type="reset" name="reset2" class="btn btn-danger btn-block" value="RESET"></div>
       </div>
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
</footer>
</body>
</html>