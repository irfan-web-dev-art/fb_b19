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
            <div class="col-lg-3 h-100 d-none d-lg-block">
                <!-- sidebar -->
                <?php include './sidebar.php' ?>
            </div>
            <div class="col-lg-6 col-12 mx-auto col-md-8 ">
                <!-- main content -->
                <?php include './main-content.php' ?>
            </div>
            <div class="col-lg-3 d-none d-md-block col-md-4 ">
                <!-- ads -->
                <?php include './ads.php' ?>
            </div>
        </div>




    </div>

    <?php
    // ADD POST MODAL
    include './boot_js.php';
    
    // ADD STORY
    include './add-story.php';
    ?>


    <script>
        let searchIcone = document.querySelector(".search-icone");
        let navLogo = document.querySelector(".nav-logo");
        let searchbar = document.querySelector(".search-bar");
        let logo_arrow = document.querySelector(".logo-arrow");
        let post_trigger = document.querySelector('.post-trigger');
        let post_trigger_2 = document.querySelector('.post-trigger-2');
        let image_selector_btn = document.querySelector('.image-selector-btn');
        let caption = document.querySelector('.caption-text');
        let close_caption = document.querySelector('.close-caption');
        let image_selector = document.querySelector('.image-selector');
        let close_post_modal = document.querySelector('.close-post-modal');
        let post_modal_bg = document.querySelector('.post-modal-bg');
        let post_modal = document.querySelector('.post-modal');
        let nav_menu_btn = document.querySelector('.nav-menu-btn');
        let nav_menu_dropdown = document.querySelector('.nav-menu-dropdown');

        // post trigger 

        post_trigger.addEventListener('click', () => {

            post_modal_bg.style.transform = "translateX(0%)";
            setTimeout(() => {
                post_modal.style.transform = "translateY(0%)";
            }, 650);

        });


        close_post_modal.addEventListener("click", () => {

            post_modal.style.transform = "translateX(300%)";
            setTimeout(() => {
                post_modal_bg.style.transform = "translateY(-100%)";
            }, 650);

        })

        post_trigger_2.addEventListener('click', () => {

            post_modal_bg.style.transform = "translateX(0%)";
            setTimeout(() => {
                post_modal.style.transform = "translateY(0%)";
            }, 650);

        });


        image_selector_btn.addEventListener('click', () => {
            image_selector.classList.remove('d-none')
            caption.rows = 2
        })
        close_caption.addEventListener('click', () => {
            image_selector.classList.add('d-none')
            caption.rows = 7
        })

        //nav bar links

        searchbar.addEventListener("click", (e) => {
            e.stopPropagation();
            navLogo.style.display = "none";
            searchIcone.style.display = "none";
            logo_arrow.classList.remove("d-none");
        });

        document.addEventListener("click", (e) => {

            if (!e.target.closest('.search-bar')) {
                navLogo.style.display = "block";
                searchIcone.style.display = "block";
                logo_arrow.classList.add("d-none");
            }
        });


        nav_menu_btn.addEventListener("click", (e) => {
            e.stopPropagation();
            nav_menu_dropdown.style.transform = "translateX(5%)";
        })
        document.addEventListener("click", (e) => {

            if (!e.target.closest('.nav-menu-dropdown')) {
                nav_menu_dropdown.style.transform = "translateX(200%)";

            }
        })
    </script>
</body>

</html>