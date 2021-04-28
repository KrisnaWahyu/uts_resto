<?php

$servername = "localhost";
$username = "bc910733047971";
$password = "46552ef2";
$dbname = "	heroku_ec1009a765ac2cf";

$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {	
    die("Connection failed: " . mysqli_connect_error());
}

?>