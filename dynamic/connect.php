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


// //Run the Select query
// printf("\n Reading data from table: \n");
// $res = mysqli_query($conn, 'SELECT * FROM userdetails');
// while ($row = mysqli_fetch_assoc($res)) {
//     echo $row["name"];

// }

?>