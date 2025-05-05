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
    <link rel="stylesheet" href="./styles.css">
    <title>Facebook</title>

</head>

<body>

    <?php
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost:3000");
    }
    ?>


    <!-- post modal -->

    <?php include './post-modal.php' ?>



    <div class="container-fluid">
        <!-- home page NavBar  -->

        <?php include './nav.php' ?>


        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <!-- sidebar -->
                <?php include './sidebar.php' ?>
            </div>
            <div class="col-lg-6 col-sm-8 ">
                <!-- main content -->
                <?php include './main-content.php' ?>
            </div>
            <div class="col-lg-3 d-none d-sm-block col-sm-4 ">
                <!-- ads -->
                <?php include './ads.php' ?>
            </div>
        </div>




    </div>

    <?php
    include './boot_js.php';
    ?>


    <script>
    let post_trigger = document.querySelector('.post-trigger')
    let image_selector_btn = document.querySelector('.image-selector-btn')
    let caption = document.querySelector('.caption-text')
    let close_caption = document.querySelector('.close-caption')
    let image_selector = document.querySelector('.image-selector')
    post_trigger.addEventListener('click', () => {

    })



    image_selector_btn.addEventListener('click', () => {
        image_selector.classList.remove('d-none')
        caption.rows = 2
    })
    close_caption.addEventListener('click', () => {
        image_selector.classList.add('d-none')
        caption.rows = 7
    })
    </script>





    <script>
    // const searchIcone = document.querySelector(".search-icone")
    // const navLogo = document.querySelector(".nav-logo")
    // const searchbar = document.querySelector(".search-bar")
    // const logo_arrow = document.querySelector(".logo-arrow")

    // searchbar.addEventListener("click", (e) => {
    //     navLogo.style.display = "none";
    //     searchIcone.style.display = "none";
    //     logo_arrow.classList.remove("d-none")
    // })
    // document.addEventListener("click", () => {
    //     navLogo.style.display = "block";
    //     searchIcone.style.display = "block";
    //     logo_arrow.classList.add("d-none");
    // });
    </script>
</body>

</html>