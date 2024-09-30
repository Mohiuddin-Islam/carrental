<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>