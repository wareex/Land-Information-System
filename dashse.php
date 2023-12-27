
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

<table align="center" width="50" >

<center>

<u>Results:</u>&nbsp;

<?php



if(isset($_REQUEST['submit'])) {

  $search = $_GET['search'];
  $terms = explode(" ", $search);
  $query = "SELECT * FROM owner WHERE ";
  

  // Formatting Expolsion
  $i=0;
  foreach($terms as $each){   
    $i++;
    if($i==1){
      $query .= "concat_ws('',owner_id,email,percel_id) LIKE '%$each%' ";
    }else{
      $query .= "OR concat_ws('',owner_id,email,percel_id) LIKE '%$each%' ";
    }
  }
  
  
  
  $query = mysql_query($query);
  $num = mysql_num_rows($query);
  
  if($num > 0 && $search!=""){
  
    echo "$num result(s) found for <b>$search</b>!";
  
    while($row = mysql_fetch_assoc($query)){
    
      $id = $row['id'];
      $owner_id = $row['owner_id'];
      $percel_id = $row['percel_id'];
      $surname = $row['surname'];
      $othername = $row['othername'];
      $occupation = $row['occupation'];
      $email = $row['email'];
      $address = $row['address'];
      $plot_no = $row['plot_no'];
      $val = $row['val'];
      $land = $row['land'];
      $location = $row['location'];
       $area = $row['area'];


    
  echo "<br /><h4>OWNER-ID: $owner_id<br/>PERCEL-ID: $percel_id<br /></h4> NAME: $surname $othername<br /> EMAIL-ADDRESS: $email<br />HOME-ADDRESS: $address<br /> LAND-LOCATION: $location  AT: $area <br /> LAND-PLOT_NO: $plot_no<br />";
    
    }
  
  } else {
  
    echo "No results found!";
  
  }

  mysql_close();

} else {

  echo "Please type any word...";

}


?>
<tr height ="90"></tr>
</table>
</center>
    </div>
</body>
</html>