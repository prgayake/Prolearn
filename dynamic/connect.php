<?php
$host = 'prolearn.mysql.database.azure.com';
$username = 'prolearn@prolearn';
$password = 'Abcd@123';
$db_name = 'prolearn';

//Establishes the connection
$conn = mysqli_init();
	mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {

die('Failed to connect to MySQL: '.mysqli_connect_error());
}


?>