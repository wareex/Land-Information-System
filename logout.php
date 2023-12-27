<?php
session_start();

session_destroy();

echo'<script> alert ("Account Log out!")</script>';
 header ("Refresh:3; url=adminlog.php");


?>