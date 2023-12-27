
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





                      
  
$query ="SELECT * FROM admin WHERE username= '$username' ";
  $gg= mysql_query($query);
  
  while($row= mysql_fetch_array($gg)){
  
  
  $username=$row['username'];
  $post = $row['post'];
  
  
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> DASHBORAD|Admin </title>
<script src="bootstrap/js/respond.js"></script>
    <link rel="stylesheet" src="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" src="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
</head>

<body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<div class="d-header">     <div class="hdrt">         <font size="40"> WELCOME&nbsp;&nbsp;<font color="lightblue" ><?php echo  $username;  ?> </font></font>  </div>  </div>
<div class="sp-header"></div>


<div class="right-w">

  <nav class="row"></nav>
  <nav class="column"></nav>
  <table width="294" height="789" border="0" cellpadding="0" cellspacing="6">

  <tr><th class="ntlog" height="10" bgcolor=""    ><p> You've logged in as &nbsp;<font color="blue"><?php echo $post;?> </font></p> </th></tr>
     <tr>
        <td height="45" scope="row"><form method="GET" action="dashse.php" >
             <p><font color ="yellow"><strong>*****Search Using Percel-Id, User-Id and Email-Address*****</strong></font> </p>
  <input type="text" name="search" class="serch">
  <p><input type="submit" name="submit" value="Search Record" class="serch"></p>

</form></td>
      </tr>
      
       <tr>
        <th scope="col"><a href="dash.php">CREATE NEW ADMIN </a></th>
      </tr>
      
      <tr>
        <th scope="col"><a href="dash1.php">VIEW REGISTERED LAND OWNERS </a></th>
      </tr>
     
      <tr>
        <th scope="row"><a href="dash1b.php"> VIEW REGISTERED LAND</a></th>
      </tr>
      
      
      <tr>
        <th scope="row"><a href= "logout.php">LOGOUT</a></th>
      </tr>

  </table>
</div>
<div class="s-board"> </div>



<div class="board">

 
<table align="center"><tr width="500">
<th width="795" class="hb" align="center"><strong ><font color="blue"> REGISTERED USERS</font></strong></th>
</tr></table>

<table width="980" height="196" border="0"  cellpadding="0" cellspacing="1"  class="bds" align="center">

  <tr class="hd">
    <td><span class="style3">ID</span></td>
     <td><span class="style3">OWNER-ID </span></td>
    <td ><span class="style3">SURNAME</span></td>
    <td><span class="style3">OTHERNAME</span></td>
    <td><span class="style3">OCCUPATION </span></td>
    <td><span class="style3">ADDRESS</span></td>
    <td><span class="style3">PHONE </span></td>
    <td><span class="style3">EMAIL</span></td>
   
  </tr>
  <?php
  $per_page = 5;
  $pages_query = mysql_query("SELECT COUNT('id') FROM owner");
  $pages = ceil(mysql_result($pages_query, 0) / $per_page);
  
  $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
  $start = ($page - 1) * $per_page;
  
  $query = mysql_query("SELECT * FROM owner LIMIT $start, $per_page");
  

  while($row= mysql_fetch_assoc($query)){
  
  $id=$row['id'];
  $owner_id = $row['owner_id'];
  $surname = $row['surname'];
  $othername =$row['othername'];
  $occupation =$row['occupation'];
  $address= $row['address'];
  $phone =$row ['phone'];
  $email= $row['email'];
  
  ?>
  <tr>
    <td width="23"><?php echo $id; ?> </td>
    <td width="78"><?php echo $owner_id?></td>
    <td width="93"><?php echo $surname ?></td>
    <td width="108"><?php  echo $othername ?>&nbsp;</td>
    <td width="107"><?php echo $occupation ?></td>
    <td width="107"><?php echo $address ?></td>
    <td width="97"><?php echo $phone ?></td>
    <td width="106"><?php echo $email ?></td>
  <?php
  }
  
  ?>
  </tr>
</table>

<?php

$prev = $page - 1;
  $next = $page + 1;
  
  
  
  echo"<center>";
  if(!($page<=1)){
    echo "<a href='dash1.php?page=$prev'>Prev</a> ";
  }

  if($pages>=1 && $page<=$pages){
  
    for($x=1;$x<=$pages;$x++){
      echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
    
    }
  
  }
  
  if(!($page>=$pages)){
    echo "<a href='dash1.php?page=$next'>Next</a>";
  }
  echo"</center>";
  

?>

<table width="988" height="46" >
  <tr>
    <td width="320" scope="col">&nbsp;</td>
    <td width="452" scope="col">&nbsp;</td>
    <td width="188" scope="col"><form name="for1" method="post" action="">
     <a href="landreport.php"> PRINT REPORT</a>

    <!--  <?php        
       //if (isset($_POST['rpt'])){
        //echo '<a href= "landreport.php"></a>';
      //  header("location:landreport.php");
      //}



      ?>-->

    </form>
    </td>
  </tr>
</table>

<p>&nbsp;</p>
  </form>

</div>




</body>
</html>