<?php
	include "PHP_Files/dbconfig.php";
	
	$con = mysqli_connect($servername, $username, $password) or die("Unable to connect");
	mysqli_select_db($con, $dbname);
?>
