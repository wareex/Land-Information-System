
<?php

include('dbstuff.php');

session_start();


  if (isset ($_POST["login"]));  {
  
  $owner_id = $_POST["owner_id"];
$percel_id = $_POST["percel_id"];
      if (empty ($owner_id) || empty($percel_id))  {
      
      echo '<script> alert("Enter some Parameters")</script>';
      exit;
      }
      $sql= mysql_query(" SELECT * FROM owner WHERE owner_id= '$owner_id' and percel_id= '$percel_id' ");
    $ff= mysql_num_rows($sql);
    
    if ($ff <=0){
    
    echo '<script> alert("Invlid login parametrers")</script>';
    exit;
    }
    
  }
  


       


$query ="SELECT * FROM owner WHERE owner_id = '$owner_id' ";
  $gg= mysql_query($query);
  
  while($row= mysql_fetch_array($gg)){
  
                $owner_id = $row['owner_id'];
                $surname = $row['surname'];
                $othername = $row['othername'];
                $gender = $row['gender'];
                $birth_place = $row['birth_place'];
                $occupation = $row['occupation'];
                $state = $row['state'];
                $lga = $row['lga'];
                $address = $row['address'];
                $phone = $row['phone'];
                $email = $row['email'];
               $percel_id = $row['percel_id'];
               $val = $row['val'];
               $land = $row['land'];
               $area = $row['area'];
               $plot_no = $row['plot_no'];
               $location = $row['location'];




          ?>


<!--   END OF PHP-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System |PRINT CERTIFICATE  </title>
<script src="bootstrap/js/respond.js"></script>
    <link rel="stylesheet" src="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" src="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
</head>

<body background="img/bak.png" >
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<div class="cert" >
  <table  align="center" width="1039" height="271" border="0" cellpadding="2" cellspacing="2" background="img/bak.png" >
      <tr >
        <th scope="col" align="center" id="myth"  ><img src="img/nig2.png"></th>
      </tr>
      <tr>
        <th scope="row" class="chb" ><font color="green">FEDERAL REPUBLIC OF NIGERIA <p>MINISTRY OF LAND INFORMATION SYSTEM </p> <p>OYO STATE GOVRNMENT</p></font></th>
      </tr>
      <tr>
        <th scope="row" id="cer"><font color="red"> CERTIFICATE OF LAND REGISTRATION <?php echo $owner_id ?></font> </th>
      </tr>
  </table>
    <table width="1152" height="375" border="0"  align="center" cellpadding="2" cellspacing="2" background="img/bak.png" >
      <tr>
         <td width="181"><strong>OWNER ID:</strong></td>
        <td width="287"><?php  echo $owner_id; ?></td>
        <td width="223"><strong>PERCEL ID:</strong></td>
        <td width="324"><?php  echo $percel_id; ?></td>
      </tr>
      <tr>
        <td><strong>SURNAME:</strong></td>
        <td><?php  echo $surname; ?></td>
        <td><strong>LAND LOCATION:</strong></td>
        <td><?php  echo $location; ?></td>
      </tr>
      <tr>
        <td><strong>OTHER-NAME:</strong></td>
        <td><?php  echo $othername; ?></td>
        <td><strong>LAND PLOT_NO:</strong></td>
        <td><?php  echo $plot_no; ?></td>
      </tr>
      <tr>
         <td><strong>GENDER:</strong></td>
        <td><?php  echo $gender; ?></td>
        <td><strong>LAND USAGE:</strong></td>
        <td><?php  echo $land; ?></td>
      </tr>
      <tr>
        <td><strong>HOME ADDRESS:</strong></td>
        <td><?php  echo $address; ?></td>
        <td><strong>LAND VALUE:</strong></td>
        <td><?php  echo $val; ?></td>
      </tr>
      <tr>
         <td><strong>EMAIL ADDRESS:</strong></td>
        <td><?php  echo $email; ?></td>
        <td><strong>OWNERS PHONE-NUMBER:</strong></td>
        <td><?php  echo $phone; ?></td>
      </tr>
      <tr>
         <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
         <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
  </table>
    <table width="1040" border="0" align="center" cellspacing="2" cellpadding="2">
      <tr>
        <td width="497" align="center" ><strong>__________________________________
        </strong>
        <p align="center"><strong>OWNER'S SIGNATURE</strong></p></td>
        <td width="523" align="center"><strong>__________________________________
        </strong>
        <p align="center"><strong>DIRECTOR'S SIGNATURE</strong></p></td>
      </tr>
    </table>
</div>
<div class="prt">
  <table width="1027" align="center" height="40" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="606">&nbsp;</td>
      <td width="238">
       <a  href="javascript:window.print()">PRINT CERTIFICATE</a>         </td>
        <td width="155"><a href="index.php">CLOSE</a></td>
    </tr>
  </table>
</div>

</body>
</html>
<?php
   
    }    
  
  ?>