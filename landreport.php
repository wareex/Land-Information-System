
<?php

include('dbstuff.php');

   session_start();

/*
if (!isset ($_SESSION['username']))   {
  echo '<script>  alert("Access Denied")</script>';
  exit;
  }
  else  {
  
    $username = $_SESSION['username'];
    
    }
*/
  


          ?>


<!--   END OF PHP-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System|PRINT OWNERS REPORT   </title>
<script src="bootstrap/js/respond.js"></script>
    <link rel="stylesheet" src="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" src="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
</head>

<body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<div class="prtr" >
  <table  align="center" width="1037" height="132" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <th scope="col" align="center" id="myth"  ><img src="img/nig2.png"></th>
      </tr>
      <tr>
        <th scope="row" class="chb" ><font color="green">FEDERAL REPUBLIC OF NIGERIA <p>MINISTRY OF LAND INFORMATION SYSTEM </p> <p>OYO STATE GOVRNMENT</p></font></th>
      </tr>
      <tr>
        <th scope="row" id="cer"><font color="red">LAND OWNERSHIP LIST </font></th>
      </tr>
  </table>
   <table width="1288" height="130" border="0" align="center" cellpadding="4">
        <tr>
          <td width="34" bgcolor="#F0F0F0" class="style2">S/N</td>
       <td width="34" bgcolor="#F0F0F0" class="style2">OWNERS ID</td>
          <td width="85" bgcolor="#F0F0F0" class="style2">SURNAME</td>
          <td width="114" bgcolor="#F0F0F0" class="style2">OTHERNAME </td>
          <td width="101" bgcolor="#F0F0F0" class="style2">OCCUPATION</td>
          <td width="102" bgcolor="#F0F0F0" class="style2">ADDRESS </td>
          <td width="58" bgcolor="#F0F0F0" class="style2">PHONE </td>
          <td width="66" bgcolor="#F0F0F0" class="style2">EMAIL</td>
          
        </tr>
    <?php
       
                  //include('dbconnect');
        $c=0;
      
        $sql = "SELECT * FROM owner ORDER BY ID asc";
        $query = mysql_query($sql) 
                or die(mysql_error());
                
              while (($rows=mysql_fetch_array($query)))
              {
              $c++;
              extract ($rows);
              //echo  ucwords(strtoupper($result['birthyear']));
              ?>   
        <tr>
          <td bgcolor="#FFFFCC" class="style2 style7"><?php echo $id ?>&nbsp;</td>
       <td bgcolor="#FFFFCC" class="style2 style7"><?php echo $owner_id ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $surname ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $othername ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $occupation ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $address ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $phone ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $email ?></td>

         
      <?php }?>
        </tr>
       
  </table> <tr height="789">&nbsp;</tr></div>
   
<div class="prt">
  <table width="1027" align="center" height="40" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="606">&nbsp;</td>
      <td width="238">
       <a  href="javascript:window.print()">PRINT CERTIFICATE</a>         </td>
        <td width="155"><a href="dash1.php">CLOSE</a></td>
    </tr>
  </table>
</div>

</body>
</html>
