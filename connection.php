<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knyo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
	die("Please check your connection: " . mysqli_connect_error());
}

?>