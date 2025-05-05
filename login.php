<?php
session_start();
include './config.php';
$currentPage = $_SERVER['HTTP_REFERER'];
$m_mail = $_POST['m_mail'];
$password  = $_POST['password'];


$checkUser = "SELECT * FROM users WHERE m_mail = '$m_mail' AND password = '$password'";

$result = mysqli_query($connection, $checkUser);

// converts into an accociative array
$row = mysqli_fetch_assoc($result);

// check whether it returns a row or not

$count = mysqli_num_rows($result);





if ($count > 0) {
    $_SESSION['username'] = $row['f_name'];
    header("Location: $base_url/home.php");
} else {
    $_SESSION['invalid_credentials'] = 'Invalid Credentials';
    header("Location: $currentPage");
}
