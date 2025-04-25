<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include './boot_css.php';
    ?>
    <title>Document</title>
</head>

<body>

    <?php
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost:3000");
    }
    ?>


    <h1>Welcome <?php echo $_SESSION['username'] ?> </h1>
    <a href="./logout.php" class="btn btn-danger">Logout</a>
</body>

</html>