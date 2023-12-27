<?php

// Connection with Database
$server="localhost";
$user= "root";
$pass="";
mysql_connect($server,$user,$pass) or
	die ("Error Occured".mysql_error());
		mysql_select_db('lis') or
			die ("Database not responding".mysql_error());
			
		
		

	//closing connection



?>
