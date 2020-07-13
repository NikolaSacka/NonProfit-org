<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "db_nporg";

$connection = new PDO("mysql:host=$host; dbname=$database", $user, $pass);

$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


?>