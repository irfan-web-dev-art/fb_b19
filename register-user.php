<?php
session_start();
include './config.php';
$f_name = $_POST['f_name'];
$l_name =  $_POST['l_name'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$m_mail = $_POST['m_mail'];
$password = $_POST['password'];
$dob = $date . '/' . $month . '/' . $year;

// query

$createUser = "INSERT INTO users (f_name,l_name,gender,m_mail,dob,password) VALUES ('$f_name','$l_name','$gender','$m_mail','$dob','$password')" or die();

// give temperory storage / sessions

$_SESSION['username'] = $f_name;



// execute

mysqli_query($connection, $createUser);

header("Location: $base_url/home.php");