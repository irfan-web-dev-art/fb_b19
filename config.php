<?php
$hostname = 'localhost';
$username = "root";
$password = "";
$db = "facebook";
$base_url = 'http://localhost:3000';
// connection

$connection = mysqli_connect($hostname, $username, $password, $db) or die();