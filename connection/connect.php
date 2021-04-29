<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$db = mysqli_connect($server, $username, $password, $db);

if (!$db) {	
    die("Connection faileds: " . mysqli_connect_error());
}

?>