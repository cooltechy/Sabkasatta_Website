<?php 

	$servername = 'localhost';
	$username = 'sabkakni_satta';
	$password = 'Aman@123';
	$db = 'sabkakni_satta';

	$con = mysqli_connect($servername,$username,$password,$db);

	if(!$con){
	echo "please check init.php file";
	}
 ?>
