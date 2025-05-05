<?php 
    session_start();
    include './config.php';
    $caption = $_POST['caption'];
    
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $user_id = $_SESSION['user_id'];
    move_uploaded_file($tmp_name,'./post_images/' . $filename );

    $insert = "INSERT INTO posts (caption,image,user_id) VALUES ('$caption','$filename',$user_id)" or die();

    $result = mysqli_query($connection,$insert);

    if($result){
        $_SESSION['posted_success'] = 'Posted Successfully!';
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }







?>