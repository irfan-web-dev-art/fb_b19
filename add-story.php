
<!-- add story PopUP -->


<div style="background-color: rgb(255, 255, 255); top: 0;"
    class="min-vh-100 w-100 position-fixed  z-2  add-story-bg ">

    <!-- NavBar -->


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

                <hr>
            </div>


        </div>



        <div class="col-12 col-lg-10 ">
            <div class=" d-flex align-items-center justify-content-center gap-3 h-100">
                <!-- upload story -->
                <div class=" rounded-3 d-flex align-items-center justify-content-center" style="width: 250px; min-height:350px; background: linear-gradient(135deg, #6B4EFF, #80E1FF); cursor: pointer; ">
                    <label for="image" class="w-100">
                        <input name="image" id="image" type="file" style="display: none;">

                        <div class="w-100  border-0 mx-auto d-flex justify-content-center align-items-center p-3 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                                <div style="height:50px;width:50px"
                                    class="d-flex rounded-circle bg-gray justify-content-center align-items-center">
                                    <i class="fa-solid fa-images"></i>
                                </div>
                                <h5 class="m-0 fs-6 text-white">Create a photo story</h5>

                            </div>
                        </div>



                    </label>
                </div>

                <!-- create text story -->
                <div class=" rounded-3 d-flex align-items-center justify-content-center" style="width: 250px; min-height:350px; background: linear-gradient(135deg, #A248FF, #FF6176);cursor: pointer; ">
                    <label for="image" class="w-100">
                        <input name="image" id="image" type="file" style="display: none;">

                        <div class="w-100  border-0 mx-auto d-flex justify-content-center align-items-center p-3 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                                <div style="height:50px;width:50px"
                                    class="d-flex rounded-circle bg-gray justify-content-center align-items-center">
                                    <i class="fa-solid fa-images"></i>
                                </div>
                                <h5 class="m-0 fs-6 text-white">Create a text story</h5>

                            </div>
                        </div>



                    </label>
                </div>
            </div>

        </div>

    </div>


</div>