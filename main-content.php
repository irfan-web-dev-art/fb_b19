<!-- main Content -->

<div class="col-12" style="padding-top: 10% !important;">
    <!-- add post modal card -->
    <div class="card col-12 col-lg-9 mx-auto p-4 shadow-lg rounded-3 my-3">
        <div class="d-flex align-items-center gap-2">
            <img src="https://scontent.fisb17-1.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=dst-png_s120x120&_nc_cat=1&ccb=1-7&_nc_sid=136b72&_nc_ohc=5L0V52iBq3wQ7kNvwFxMGrs&_nc_oc=Adn2KAkdGrOw1X6hZsftI_G74h5I9PKj1wHeoMPtJ1MBClITRntOs0zXrqjaxKeDlFeR5m3kIFZqPbggLMfev7KF&_nc_zt=24&_nc_ht=scontent.fisb17-1.fna&oh=00_AfH72_R8U-VLFvbpl3ksBfhP9RieTYbfGT28GgCFc8jOtw&oe=6835B5FA"
                width="40px" height="40px" class="rounded-circle border border-secondary-subtle" alt="">

            <!-- open post popup -->

            <div class="rounded-pill d-flex align-items-center w-100 p-2 post-trigger">
                <p class="m-0 ms-2 text-secondary">What's on your mind? <span class="text-capitalize">
                        <?php echo $_SESSION['username']; ?></span> </p>
            </div>

        </div>
        <hr>

        <div class=" row  ">
            <div class="col-6 col-sm-4 ">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v4/yr/r/c0dWho49-X3.png?_nc_eui2=AeEOeIohYM39UAr5opzPt9prueRic5Ym8Wm55GJzlibxadNtK43oR9doPzAX_JLnCPr5b8H1cFjvo0iX2sb4tpNN" alt="">
                <span class="text-secondary fw-semibold ms-1"> Live Video</span>
            </div>
            <div class=" col-6 col-sm-4 post-trigger-2 " style="cursor: pointer;">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v4/y7/r/Ivw7nhRtXyo.png?_nc_eui2=AeEdyMnl_8GUd9KNmbO77xnukBVQC4m7dx6QFVALibt3Hj04P9KxGuqR1NRPEdKT2ipenQK6aJ7QpXHK_tp1XHJL" alt="">
                <span class="text-secondary fw-semibold ms-1">Photo/Video</span>
            </div>
            <div class="col-sm-4 d-none d-sm-block text-nowrap">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v4/yd/r/Y4mYLVOhTwq.png?_nc_eui2=AeHR5L_2gMfAJbBsGV3wL4yxfPQ6N5_OUfV89Do3n85R9fkyd6OMzoheqVdxiP9WkTcsInmHgBMW7imXgMk-qq63" alt="">
                <span class="text-secondary fw-semibold ms-1 ">Feeling/activity</span>
            </div>
        </div>

    </div>

    <!-- add Story card -->

    <div class="card col-12 col-lg-9 mx-auto p-3 shadow-lg rounded-3 my-3 add-story " style="cursor: pointer;">

        <div class="d-flex align-items-center gap-2  rounded-2 add-story-icone">

            <i class="bi bi-plus text-primary fs-2  rounded-circle " style="padding: 0px 6px;"></i>

            <div>
                <h6 class="fw-semibold m-0 p-0">Create Story</h6>
                <p class="fw-normal m-0 p-0 text-secondary " style="font-size: 14px;">Share a photo or write something</p>
            </div>
        </div>
    </div>


    <!-- Posts -->

    <div class="card col-12 col-lg-9 mx-auto p-3 shadow-lg rounded-3 my-3 posts">

        <!-- post-nav-bar -->
        <div>
            <!-- user info -->
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <img src="https://scontent.fisb17-1.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=dst-png_s120x120&_nc_cat=1&ccb=1-7&_nc_sid=136b72&_nc_ohc=5L0V52iBq3wQ7kNvwFxMGrs&_nc_oc=Adn2KAkdGrOw1X6hZsftI_G74h5I9PKj1wHeoMPtJ1MBClITRntOs0zXrqjaxKeDlFeR5m3kIFZqPbggLMfev7KF&_nc_zt=24&_nc_ht=scontent.fisb17-1.fna&oh=00_AfH72_R8U-VLFvbpl3ksBfhP9RieTYbfGT28GgCFc8jOtw&oe=6835B5FA"
                            width="40px" height="40px" class="rounded-circle border border-secondary-subtle" alt="">
                    </div>
                    <div>
                        <h6 class="m-0 text-capitalize fw-bold ">
                            <?php echo $_SESSION["username"] ?>
                        </h6>
                        <span class="text-secondary text-capitalize fw-bold"> 22h</span>
                    </div>

                </div>


                <!-- delete post -->
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-three-dots fs-4 text-secondary  " style="cursor: pointer;"></i>
                    <i class="bi bi-x-lg fs-4 text-secondary  " style="cursor: pointer;"></i>


                </div>

            </div>

            <!-- caption -->

            <p>Muhammmad Amir is greatest bowler in the words...</p>

        </div>
        <!-- post image -->
        <div class="" style="min-width: fit-content;">
            <img src="https://www.aljazeera.com/wp-content/uploads/2024/03/AP17169521496681-1711343317.jpg?resize=1920%2C1333" alt="post" width="100%">
        </div>

        <!-- post LIkes and Comments -->
        <div class="py-3">

            <!-- likes values -->

            <div class="d-flex align-items-center justify-content-between">

                <!-- likes couts -->
                <div>

                    <span>😀</span>
                    <span>🥰</span>
                    <span>💓</span>
                    <span class="text-secondary">100M</span>
                </div>


                <!-- comments and shere -->

                <div class="d-flex align-items-center  gap-3">
                    <h6 class="text-secondary ">187M Comments</h6>
                    <h6 class="text-secondary ">187k Sheres</h6>


                </div>
            </div>

            <hr>
            <!-- likes , comments and share btns -->

            <div class="row">

                <!-- likes -->
                <div class="col-3 d-flex justify-content-center gap-2 align-items-center">
                    <i class="bi bi-hand-thumbs-up fs-5"></i>
                    <span class="text-secondary">Like</span>
                </div>
                <!-- comments -->
                <div class="col-3 d-flex justify-content-center gap-2 align-items-center">
                    <i class="bi bi-chat-dots fs-5"></i>
                    <span class="text-secondary">comments</span>
                </div>
                <!-- whats app -->
                <div class="col-3 d-flex justify-content-center gap-2 align-items-center">
                    <i class="bi bi-whatsapp fs-5"></i>
                    <span class="text-secondary">whats app</span>
                </div>
                <!-- share -->
                <div class="col-3 d-flex justify-content-center gap-2 align-items-center">
                    <i class="bi bi-share-fill fs-5"></i>
                    <span class="text-secondary">share</span>
                </div>

            </div>
        </div>
    </div>



</div>