
<?php
include('dbstuff.php');
                  
                
   session_start();


if (!isset ($_SESSION['username']))   {
  echo '<script>  alert("Access Denied")</script>';
  exit;
  }
  else  {
  
    $username = $_SESSION['username'];
    
    

                
  
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




<table align="center" border="0px">
 <tr height="50">&nbsp;</tr>
    <td class="hb" align="center"> CREATE NEW ADMIN</td>
    
    

</table align= "">
    <form name="fo" method="post" action="">
    <table width="851" height="290" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr height="50">&nbsp;</tr>
      <tr>
        <th width="343" scope="col"> USERNAME</th>
        <td width="376"><input type="text" name="username2"  ></td>
      </tr>
      <tr>
        <th scope="row"> PASSWORD</th>
        <td><input type="password" name="password"  >
            <label ></label>
          <font color="red">
            <p>***Password Must be more than 4 charachters***</p>
          </font></td>
      </tr>
      <tr>
        <th scope="row">RE-TYPE PASSWORD</th>
        <td><input type="password" name="repassword" ></td>
      </tr>
      <tr>
        <th scope="row">POST-HELD</th>
        <td><select name="post">
            <text>---SELECT POST------</text>
            <option>Admin</option>
            <option>Staff</option>
        </select></td>
      </tr>
  <td scope="row"><input type="submit" name="add" class="btn" value="REGISTER "></td>
  

<?php

  if (isset($_POST["add"])){


$username2=$_POST["username2"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$post=$_POST["post"];



  if (empty($username2)|| empty($password)||empty($repassword) ){
    echo"<strong>You have not enter the required field</strong>";
    exit;
  }
  if (strlen($password) > 4){

  if ($password !== $repassword) {

  echo '<script> alert("Password does not match")</script>';
  exit;
}

  

 //test existence of a username
    $getit = "SELECT username FROM admin WHERE username='$username2'";
    
    $jj = mysql_num_rows(mysql_query($getit));
    if ($jj>=1){
      echo '<script>  alert("Username already exist, try another username")  </script>'; 
    }

   else { 
  
            
  $sql= "INSERT into admin (username,password,repassword,post) VALUES ('$username2','$password','$repassword','$post')";
  
  $result = mysql_query($sql);
  if (!$result){
  echo '<script> alert ("Not yet submitted") </script>';
  
  }
  else{
  echo '<script> alert("Account Created Successfully") </script>';
  //echo '<a href = "reg_slip.php"></a>';
  //header("location:re_slip.php");
  }
}
}
}
}
?>


      <td><input type="reset" name="reset2" class="btn" value="RESET"></td>
  </tr>
  <tr height ="90"></tr>
    </table>
    </div>
</body>
</html>