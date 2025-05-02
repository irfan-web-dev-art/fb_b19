<style>

     .post-modal-bg {
        transform: translateY(-100%) ;
        transition: all 1s ;
    }



     .post-modal {
        transform: translateX(250%) ;
        transition: all 1.5s ;

    }

</style>
<!--   modal background -->

<div style="background-color: rgba(187, 184, 184, 0.8);"
    class="min-vh-100 w-100 position-fixed  d-flex z-3 justify-content-center align-items-center post-modal-bg">
    <!--  post modal card -->
    <div class="card shadow-lg col-xl-4 col-lg-5 col-md-7 col-sm-9 col-11 rounded-3 position-relative post-modal ">

        <div style="height:40px;width:40px;right:10px;top:10px;cursor:pointer"
            class="d-flex close-post-modal position-absolute rounded-circle bg-gray border justify-content-center align-items-center">
            <i class="bi bi-x-lg"></i>
        </div>

        <h4 class="text-center m-0 p-3">
            Create post
        </h4>
        <hr class="m-1">

        <div class="d-flex align-items-center gap-2 p-3">
            <img src="https://scontent.fisb17-1.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=dst-png_s120x120&_nc_cat=1&ccb=1-7&_nc_sid=136b72&_nc_ohc=5L0V52iBq3wQ7kNvwFxMGrs&_nc_oc=Adn2KAkdGrOw1X6hZsftI_G74h5I9PKj1wHeoMPtJ1MBClITRntOs0zXrqjaxKeDlFeR5m3kIFZqPbggLMfev7KF&_nc_zt=24&_nc_ht=scontent.fisb17-1.fna&oh=00_AfH72_R8U-VLFvbpl3ksBfhP9RieTYbfGT28GgCFc8jOtw&oe=6835B5FA"
                width="40px" height="40px" class="rounded-circle border border-secondary-subtle" alt="">
            <div class="flex fw-semibold flex-column text-capitalize">
                <?php echo $_SESSION['username'] ?>
                <div class="d-flex bg-gray px-1 py-1 rounded-2 gap-1 align-items-center">
                    <i class="bi bi-people-fill text-sm"></i>
                    <h6 class="m-0 text-sm">Friends</h6>
                    <i class="bi bi-caret-down-fill text-sm"></i>
                </div>
            </div>
        </div>

        <form action="" method="POST">
            <textarea rows="7" style="outline-width:0;resize:none" class="w-100 caption-text border-0 px-3" type="text"
                name="caption" placeholder="What's on your mind? <?php echo $_SESSION['username'] ?>"></textarea>

            <!-- image section -->
            <div class="p-3 image-selector position-relative d-none">
                <div style="height:40px;width:40px;right:20px;top:20px;cursor:pointer"
                    class="d-flex close-btn position-absolute rounded-circle bg-white border justify-content-center align-items-center">
                    <i class="bi bi-x-lg"></i>
                </div>
                <input name="image" id="image" type="file" style="display: none;">

                <label for="image" class="w-100">
                    <div class="w-100 image-drop border-2 mx-auto border d-flex justify-content-center align-items-center p-3" style="height: 300px;">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div style="height:50px;width:50px"
                                class="d-flex rounded-circle bg-gray justify-content-center align-items-center">
                                <i class="fa-solid fa-images"></i>
                            </div>
                            <h5 class="m-0">Add Photos/Videos</h5>
                            <p class="text-sm text-secondary text-center">
                                or Drag and drop
                            </p>
                        </div>
                    </div> <!--  closed .image-drop -->
                </label>
            </div>
            <div
                class="d-flex image-selector-btn p-3 border mx-3 my-4 rounded-2 border-2 align-items-center justify-content-between">
                <h6 class="m-0">Add to your post</h6>
                <div class="d-flex gap-2">
                    <div class="d-flex gap-3">
                        <img width="30px" src="https://static.xx.fbcdn.net/rsrc.php/v4/yD/r/4lAYcqypgif.png" alt="">
                    </div>
                    <div class="d-flex gap-3">
                        <img width="30px" src="https://static.xx.fbcdn.net/rsrc.php/v4/yY/r/azsBeBAwEox.png" alt="">
                    </div>
                    <div class="d-flex gap-3">
                        <img width="30px" src="https://static.xx.fbcdn.net/rsrc.php/v4/yO/r/2qUC865ACHv.png" alt="">
                    </div>
                    <div class="d-flex gap-3">
                        <img width="30px" src="https://static.xx.fbcdn.net/rsrc.php/v4/yV/r/YTCcpdXdOiw.png" alt="">
                    </div>
                    <div class="d-flex gap-3">
                        <img width="30px" src="https://static.xx.fbcdn.net/rsrc.php/v4/yA/r/oUhoAE3Kcyv.png" alt="">
                    </div>
                </div>
            </div>

        </form>

    </div>

</div>