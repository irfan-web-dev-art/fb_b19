<?php
session_start();
?>

<!-- add story PopUP -->


<div style="background-color: rgb(255, 255, 255); top: 0;"
    class="min-vh-100 w-100 position-fixed T  z-3  add-story-bg d-none">

    <!-- NavBar -->
    <nav class="px-2 justify-content-between row  position-fixed top-0 z-3 w-100 " style="min-height: 60px !important;">
        <!-- search bar -->
        <div class="col-6 d-flex align-items-center gap-2">


            <i class="bi bi-x fs-4 text-white rounded-circle close-add-story "
                style="padding: 3px 8px;background-color: #909090 ;cursor: pointer;"></i>
            <div class="logo">
                <img src="./imges/logo.png" alt="" width=" 40px" class="nav-logo">
            </div>


        </div>
        <!-- home Icones -->



        <!-- ___Menu Icones___ -->
        <div class="col-6 ">
            <ul class="list-unstyled d-flex align-items-center justify-content-end gap-2 h-100">


                <!-- menu  -->
                <div class="rounded-circle bg-gray nav-menu-btn position-relative " style="padding:0px 6px;  ">
                    <i class="bi bi-list fs-3" style="cursor: pointer;"></i>

                    <!-- menu dropdown -->
                    <div
                        class="nav-menu-dropdown p-2 border-1 shadow border-black bg-white position-absolute rounded overflow-y-auto overflow-x-hidden">
                        <h3 class="fw-bold">Menu</h3>
                        <div class="row gap-0 ">
                            <div class="col-md-8 col-12 ">
                                <div class="px-2 shadow ">

                                    <!-- search bar -->
                                    <div class=" d-flex align-items-center gap-2 p-1 bg-gray rounded-pill w-100 ">
                                        <i class="bi bi-search text-secondary search-icone"></i>
                                        <input type="search" name="search"
                                            class="border-0 search-bar bg-gray rounded-pill  w-100"
                                            placeholder="Search Facebook"
                                            style="cursor: pointer; border:0 !important; outline: none;">

                                    </div>


                                    <!-- social Links -->

                                    <div>
                                        <h4 class="fw-bold my-3 ">Social</h4>

                                        <ul class="list-unstyled ">
                                            <!-- events -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                                <div class="icone">
                                                    <i class="bi bi-calendar2-event-fill fs-3 text-primary"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Events</h5>
                                                    <p class="m-0" style="font-size: 13px;">Organise or find events and
                                                        other things to do online and nearby.</p>
                                                </div>
                                            </div>

                                            <!-- Friends -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="fa-solid fa-user-group fs-4"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Friends</h5>
                                                    <p class="m-0" style="font-size: 13px;">Search for friends or people
                                                        you may know.</p>
                                                </div>
                                            </div>

                                            <!-- Groups -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="fa-solid fa-users-line fs-4 text-primary"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Groups</h5>
                                                    <p class="m-0" style="font-size: 13px;">Connect with people who
                                                        share your interests.</p>
                                                </div>
                                            </div>
                                            <!-- News Feed-->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-newspaper fs-4 text-primary ms-1"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">News Feed</h5>
                                                    <p class="m-0" style="font-size: 13px;">See relevant posts from
                                                        people and Pages that you follow.</p>
                                                </div>
                                            </div>


                                            <!-- Feed-->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="fa-solid fa-radio fs-4 text-primary ms-1"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Feeds</h5>
                                                    <p class="m-0" style="font-size: 13px;">See the most recent posts
                                                        from your friends, groups, Pages and more.</p>
                                                </div>
                                            </div>

                                            <!-- page-->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-flag-fill fs-4 text-primary ms-1"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Pages</h5>
                                                    <p class="m-0" style="font-size: 13px;">Discover and connect with
                                                        businesses on Facebook.</p>
                                                </div>
                                            </div>




                                        </ul>
                                    </div>

                                    <hr>


                                    <!-- Entertainment -->

                                    <div>
                                        <h4 class="fw-bold my-3 ">Entertainment</h4>

                                        <ul class="list-unstyled ">
                                            <!-- Gaming Video -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                                <div class="icone">
                                                    <i class="bi bi-nintendo-switch fs-3 text-primary"></i>

                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Gaming Video
                                                    </h5>
                                                    <p class="m-0" style="font-size: 13px;">Watch and connect with your
                                                        favourite games and streamers.</p>
                                                </div>
                                            </div>

                                            <!-- Friends -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-controller fs-3 text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Play games</h5>
                                                    <p class="m-0" style="font-size: 13px;">Play your favourite games.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Groups -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-tv fs-4 text-primary"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Video</h5>
                                                    <p class="m-0" style="font-size: 13px;">A video destination
                                                        personalised to your interests and connections.</p>
                                                </div>
                                            </div>


                                        </ul>
                                    </div>



                                    <!-- social Links -->

                                    <div>
                                        <h4 class="fw-bold my-3 ">Social</h4>

                                        <ul class="list-unstyled ">
                                            <!-- events -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                                <div class="icone">
                                                    <i class="bi bi-calendar2-event-fill fs-3 text-primary"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Events</h5>
                                                    <p class="m-0" style="font-size: 13px;">Organise or find events and
                                                        other things to do online and nearby.</p>
                                                </div>
                                            </div>

                                            <!-- Friends -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="fa-solid fa-user-group fs-4"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Friends</h5>
                                                    <p class="m-0" style="font-size: 13px;">Search for friends or people
                                                        you may know.</p>
                                                </div>
                                            </div>

                                            <!-- Groups -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="fa-solid fa-users-line fs-4 text-primary"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Groups</h5>
                                                    <p class="m-0" style="font-size: 13px;">Connect with people who
                                                        share your interests.</p>
                                                </div>
                                            </div>
                                            <!-- News Feed-->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-newspaper fs-4 text-primary ms-1"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">News Feed</h5>
                                                    <p class="m-0" style="font-size: 13px;">See relevant posts from
                                                        people and Pages that you follow.</p>
                                                </div>
                                            </div>


                                            <!-- Feed-->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="fa-solid fa-radio fs-4 text-primary ms-1"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Feeds</h5>
                                                    <p class="m-0" style="font-size: 13px;">See the most recent posts
                                                        from your friends, groups, Pages and more.</p>
                                                </div>
                                            </div>

                                            <!-- page-->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-flag-fill fs-4 text-primary ms-1"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Pages</h5>
                                                    <p class="m-0" style="font-size: 13px;">Discover and connect with
                                                        businesses on Facebook.</p>
                                                </div>
                                            </div>




                                        </ul>
                                    </div>

                                    <hr>


                                    <!-- Entertainment -->

                                    <div>
                                        <h4 class="fw-bold my-3 ">Social</h4>

                                        <ul class="list-unstyled ">
                                            <!-- Gaming Video -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                                <div class="icone">
                                                    <i class="bi bi-nintendo-switch fs-3 text-primary"></i>

                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Gaming Video
                                                    </h5>
                                                    <p class="m-0" style="font-size: 13px;">Watch and connect with your
                                                        favourite games and streamers.</p>
                                                </div>
                                            </div>

                                            <!-- Friends -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-controller fs-3 text-primary"></i>
                                                </div>
                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Play games</h5>
                                                    <p class="m-0" style="font-size: 13px;">Play your favourite games.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Groups -->
                                            <div
                                                class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items">
                                                <div class="icone">
                                                    <i class="bi bi-tv fs-4 text-primary"></i>
                                                </div>

                                                <div>
                                                    <h5 class="m-0 fw-semibold" style="font-size: 15px;">Video</h5>
                                                    <p class="m-0" style="font-size: 13px;">A video destination
                                                        personalised to your interests and connections.</p>
                                                </div>
                                            </div>


                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="d-none d-md-block col-md-4 ps-0">
                                <div class="card px-2 shadow mt-3 pb-1">
                                    <h5 class="fw-semibold my-3 ">Create</h5>

                                    <ul class="list-unstyled ">
                                        <!-- post -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-envelope fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Post</h5>
                                        </div>

                                        <!-- Story -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-book-open-reader fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Story</h5>
                                        </div>

                                        <!-- Reel -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-film fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Reel</h5>
                                        </div>

                                        <!-- Life Event -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-calendar-week fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Life Event</h5>
                                        </div>

                                        <hr>

                                        <!-- Page -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-flag-checkered fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Page</h5>
                                        </div>


                                        <!-- Ad -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-bullhorn fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Ad</h5>
                                        </div>

                                        <!-- Group -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-people-group fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Group</h5>
                                        </div>
                                        <!-- Marketplace Listing -->
                                        <div
                                            class="d-flex align-items-center gap-3 py-2 px-1 rounded-2 menu-list-items ">
                                            <div class="icone bg-gray rounded-circle " style="padding: 6px 8px;">
                                                <i class="fa-solid fa-bag-shopping fs-4 text-black"></i>
                                            </div>
                                            <h5 class="m-0 fw-semibold" style="font-size: 15px;">Marketplace Listing
                                            </h5>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Messenger -->
                <div class="rounded-circle bg-gray" style="padding:0px 6px;  ">
                    <a href="" class="text-black"><i class="bi bi-messenger fs-3"></i></a>
                </div>

                <!-- Notification -->

                <div class="rounded-circle bg-gray" style="padding:0px 8px;  ">
                    <a href="" class="text-black"><i class="bi bi-bell-fill fs-3"></i></a>
                </div>


                <!-- user profile -->

                <div class="rounded-circle">
                    <a href="" class="text-black"><img src="./imges/logo.png" alt="" width=" 40px"
                            class="nav-logo"></i></a>
                </div>


            </ul>
        </div>

    </nav>

    <div class="row w-100 " style="min-height: 90vh; margin-top: 3%;">
        <div class="d-none d-lg-block col-lg-2 shadow  ">
            <div class="card border-0 py-3 px-2">

                <div class=" d-flex flex-row align-items-center justify-content-between">

                    <h4 class="fw-bolder m-0">Your Story</h4>

                    <div class="add-story-setting bg-gary rounded-circle" style="padding: 3px 6px;">
                        <i class="bi bi-gear-fill fs-4 text-black"></i>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 mt-3">
                    <img src="https://scontent.fisb17-1.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=dst-png_s120x120&_nc_cat=1&ccb=1-7&_nc_sid=136b72&_nc_ohc=5L0V52iBq3wQ7kNvwFxMGrs&_nc_oc=Adn2KAkdGrOw1X6hZsftI_G74h5I9PKj1wHeoMPtJ1MBClITRntOs0zXrqjaxKeDlFeR5m3kIFZqPbggLMfev7KF&_nc_zt=24&_nc_ht=scontent.fisb17-1.fna&oh=00_AfH72_R8U-VLFvbpl3ksBfhP9RieTYbfGT28GgCFc8jOtw&oe=6835B5FA"
                        width="55px" height="55px" class="rounded-circle border border-secondary-subtle" alt="">
                    <h5 class="text-black text-capitalize m-0 fw-semibold ">
                        <?php

                        echo $_SESSION['username'];

                        ?>
                    </h5>

                </div>
            </div>


        </div>
        <div class="col-12 col-lg-10 ">


            <div class=" d-flex align-items-center justify-content-center gap-3 h-100">
                <div class=" rounded-2 d-flex align-items-center justify-content-center"
                    style="width: 200px; height:300px">
                    <label for="image" class="w-100">
                        <input name="image" id="image" type="file" style="display: none;">

                        <div class="w-100 image-drop border-2 mx-auto border d-flex justify-content-center align-items-center p-3"
                            style="height: 300px;">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                                <div style="height:50px;width:50px"
                                    class="d-flex rounded-circle bg-gray justify-content-center align-items-center">
                                    <i class="fa-solid fa-images"></i>
                                </div>
                                <h5 class="m-0 fs-6">Create a photo story</h5>

                            </div>
                        </div>



                    </label>
                </div>

                <h4>654</h4>
            </div>

        </div>

    </div>


</div>