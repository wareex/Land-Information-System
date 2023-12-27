
<?php 
session_start();
include('dbstuff.php');


    if (isset($_POST['reg1'])){ 
 
                $owner_id = $_POST['owner_id'];
                $surname = $_POST['surname'];
                $othername = $_POST['othername'];
                $gender = $_POST['gender'];
                $birth_place = $_POST['birth_place'];
                $occupation = $_POST['occupation'];
                $state = $_POST['state'];
                $lga = $_POST['lga'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];


            if ($owner_id && $email && $surname && $othername && $gender && $birth_place && $occupation && $state && $address && $lga && $phone) {

                 if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {

                        $remail = mysql_query("SELECT email FROM owner WHERE email='$email'");
                        $checkemail = mysql_num_rows($remail);

           if ($checkemail != 0) {
                      echo '<script> alert("This email is already registered! Please input another email..." )</script>';
                                    exit;
                                    
                                  }
                else {
  mysql_query("INSERT INTO owner (owner_id,surname,othername,gender,birth_place,occupation,state,lga,address,phone,email) VALUES('$owner_id','$surname','$othername','$gender','$birth_place','$occupation','$state' ,'$lga' ,'$address' ,'$phone' ,'$email')");
           echo '<script> alert("Registration Successful")</script>';
           
            
                     }
    
     
        
    



}
    else{
  echo '<script> alert("Please type a valid email!" )</script>';
      exit;
  }

}
  
 else {

  echo '<script> alert("You have to complete the form!" )</script>';
    exit;
}




      }else{

        echo '<script> alert("Page Not Authorised") </script>';
        exit;
      }

  
$query ="SELECT * FROM owner WHERE owner_id = '$owner_id' ";
  $gg= mysql_query($query);
  
  while($row= mysql_fetch_array($gg)){
  
  $surname = $row['surname'];
  $othername = $row['othername'];
  $email = $row['email'];
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System|Get-Registered  </title>
<script src="bootstrap/js/respond.js"></script>
    <link rel="stylesheet" src="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" src="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
</head>

<body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<div class="page-header" > <img name="head" src="img/head.gif" width="1328" height="105" border="0" id="head" usemap="#m_head" alt="" />
  <map name="m_head" id="m_head">
    <area shape="rect" coords="147,17,794,52" href="#" alt="" />
    <area shape="rect" coords="740,65,851,92" href="adminlog.php" alt="" />
    <area shape="rect" coords="563,64,729,95" href="index.php#cert" alt="" />
    <area shape="rect" coords="371,65,555,96" href="index.php#acct" alt="" />
    <area shape="rect" coords="225,67,356,94" href="index.php" alt="" />
  </map>
</div>
<div class="pheader"></div>


<div class="second">
  
<table align="center" border="0px">
    <td class="hb" align="center"> REGISTER LAND </td>
    
    

  </table>
    <form name="form2" method="post" action="certf.php">
      <table width="733" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <th width="343" scope="col"> PERCEL ID</th>
          <td width="376"><input type="text" name="percel_id" readonly="true" value="<?php 
   
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

     echo "perc"."00".getRandomString(); ?>" ></td>
        </tr>
        <tr>
          <th scope="row">OWNER ID</th>
          <td><input type="text" name="owner_id"  readonly="true" value="<?php echo $owner_id ; ?>"></td>
        </tr>
        <tr>
          <th scope="row">NAME</th>
          <td><input type="text" name="name" readonly="true" value="<?php echo $surname ." " .$othername ;  ?>" ></td>
        </tr>
<tr>
          
          <th scope="row">EMAIL ADDRESS </th>
          <td><input type="text" name="email" readonly="true" value="<?php echo $email ; ?>" ></td>
        </tr>
        <tr>
        
        <tr>
          <th scope="row">LAND USES</th>
          <td><select name="land">
            <option>Residential</option>
            <option>Commercial</option>
            <option>Market</option>
          </select></td>
        </tr>
        <tr>
          <th scope="row"> LAND VALUE</th>
          <td><input type="text" name="val"></td>
        </tr>
        <tr>
          <th scope="row">LAND AREA</th>
          <td><input type="text" name="area"></td>
        </tr>
        <tr>
          <th scope="row">LAND LOCATION</th>
          <td><input type="text" name="location"></td>
        </tr>
        <tr>
          <th scope="row">LAND PLOT_NO </th>
          <td><input type="text" name="plot_no" readonly="true" value="<?php 
   
      function getRandomString2($length = 3) {

           $validCharacters = "0123456789";

            $validCharNumber = strlen($validCharacters);

             $result = "";

          for ($i = 0; $i < $length; $i++) {

              $index = mt_rand(0, $validCharNumber - 1);

               $result .= $validCharacters[$index];

          }

            return $result;

        }

     echo "OY"."/"."PLT"."/"."00".getRandomString2(); ?>" ></td>
        </tr>
        
          <td scope="row"><input type="submit" name="lndreg" class="btn" value="REGISTER"></td>


          <?php 

            $id= $_SESSION['owner_id'];

            ?>

          <td><input type="reset" name="reset2" class="btn" value="RESET"></td>
        </tr>
       
      </table>
      
      <p></p>
    </form>
   

</div>


<div class="f-foot" id="about">



<table width="1670" height="50" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="825" height="10" scope="col"  bgcolor=""> <center><font>ABOUT US </font> </center> </td>
    <td width="9">&nbsp;</td>
    
    <td width="816" height="10" scope="col"><center>CONTACT US</center></td>

  </tr>
  <tr height = "80">
     <td height="100" scope="col" rowspan="4" align="" style><center><font color="red" size="4px" > &nbsp;  &nbsp;  &nbsp; GET ASSURED | We are license to get your land certified,<p> through appropraite details about you and your land.</p><p>
     Your property...........We secure.</p> </font></center></td>
    <td width="9">&nbsp;</td>
    
    <td scope="col" rowspan="4"><center><center><font color="red" size="4px" > &nbsp;  &nbsp;  &nbsp; Address: Suited at No 45, amukoko apapa, Lagos, Nigeria.  <p>Email: land@info.com, landcert@gmail.com </p><p>  Tel: +2348186537139, +234907272622</p><p>
     <a href="facebook.com"><img src="img/fb.png"></a>  
      <a href="twitter.com"><img src="img/tw.png"></a> 
       <a href="googleplus.com"><img src="img/gp.png"></a> 
        <a href="microsoft.com"><img src="img/ml.gif"></a> 


     </p> </font></center></td>

  </tr>
</table>

</div>

</body>

</html>

<?php
        
  }

  ?>