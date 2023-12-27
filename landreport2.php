
<?php

include('dbstuff.php');

   session_start();


if (!isset ($_SESSION['username']))   {
  echo '<script>  alert("Access Denied")</script>';
  exit;
  }
  else  {
  
    $username = $_SESSION['username'];
    
    }

  


          ?>


<!--   END OF PHP-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Land Information System|PRINT LAND REPORT   </title>
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
        <th scope="row" id="cer"><font color="red">LAND REGISTRATION LIST </font></th>
      </tr>
  </table>
   <table width="1288" height="130" border="0" align="center" cellpadding="4">
        <tr>
          <td width="34" bgcolor="#F0F0F0" class="style2">S/N</td>
       <td width="34" bgcolor="#F0F0F0" class="style2">PERCEL ID</td>
          <td width="85" bgcolor="#F0F0F0" class="style2">LAND-USEAGE</td>
          <td width="114" bgcolor="#F0F0F0" class="style2">LAND-VALUE </td>
          <td width="101" bgcolor="#F0F0F0" class="style2">LAND-LOCATION</td>
          <td width="102" bgcolor="#F0F0F0" class="style2">LAND-AREA </td>
          <td width="58" bgcolor="#F0F0F0" class="style2">LAND-PLOT_NO </td>
         
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
       <td bgcolor="#FFFFCC" class="style2 style7"><?php echo $percel_id ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $land ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $val ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $location ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $area ?>&nbsp;</td>
          <td bgcolor="#FFFFCC" class="style8"><?php echo $plot_no ?>&nbsp;</td>
          

         
      <?php }?>
        </tr>
       
  </table> <tr height="789">&nbsp;</tr></div>
   
<div class="prt">
  <table width="1027" align="center" height="40" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="606">&nbsp;</td>
      <td width="238">
       <a  href="javascript:window.print()">PRINT CERTIFICATE</a>         </td>
        <td width="155"><a href="dash1b.php">CLOSE</a></td>
    </tr>
  </table>
</div>

</body>
</html>
