<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <title>Facebook - log in or sign up</title>
</head>

<body>


    <?php include './add-popup.php' ?>


    <div class="container-fluid bg-body-tertiary min-vh-100">
        <div style="height: 70vh;"
            class="container d-flex justify-content-center align-items-center col-xl-9 col-lg-11 mx-auto">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5">
                    <img src="https://logohistory.net/wp-content/uploads/2022/10/Facebook-Logo-2019.png" width="200px"
                        alt="">
                    <h2 class="display-6 fw-normal">Recent logins</h2>
                    <p class="text-secondary">
                        Click your picture or add an account.
                    </p>



                    <div class="row ">
                        <div class="col-sm-4">
                            <div class="card position-relative user-card w-100 shadow">
                                <div class="bg-secondary cross z-3 position-absolute d-flex align-items-center justify-content-center rounded-circle text-white"
                                    style="height: 15px;width:15px;left:5px;top:5px;cursor:pointer;">
                                    <i style="margin-top:-0.3rem" class="bi w-100 h-100 bi-x text-white"></i>
                                </div>

                                <div class="card-image">
                                    <img src="https://scontent.fisb17-1.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?_nc_cat=1&ccb=1-7&_nc_sid=22ec41&_nc_ohc=eqFesZAEqzUQ7kNvwFSJfYm&_nc_oc=Adnig_F_IoExkrSgBYM9AlVXtKrIrt9bAZ_G0g_g6dRkRzMZp2MDzhQRsF3fIf1E7NvLAtKXFaKCWwq78AB6gx35&_nc_zt=24&_nc_ht=scontent.fisb17-1.fna&oh=00_AfHI0JZ8NZId4Paa4nhLOt3IqTXQwMO6rq-mES5rXCwM1Q&oe=6829D87A"
                                        width="100%" alt="">
                                </div>
                                <div class="card-body p-0">
                                    <p class="text-center mt-1 p-0">
                                        Username
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card add-account shadow overflow-hidden"
                                style="height: 100%;background:#F5F6F7;">
                                <div style="height: 90%;" class="d-flex justify-content-center align-items-center ">
                                    <div class="bg-primary d-flex justify-content-center align-items-center rounded-circle"
                                        style="height: 40px;width:40px;">
                                        <i class="bi bi-plus fw-bolder text-white fs-3"></i>
                                    </div>
                                </div>
                                <div class="card-body bg-white p-0">

                                    <p class="text-center  text-primary">
                                        Add Account
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-5 col-lg-6 align-self-end">

                    <!-- login form -->

                    <form action="" style="" class="bg-white mx-auto shadow p-3 rounded-3   position-relative w-80">






                        <div class="px-3">
                            <input type="text" placeholder="Email address or phone number"
                                class="form-control my-2 p-3-5">
                            <div class="position-relative">

                                <input type="password" placeholder="Password" class="form-control pass my-2 p-3-5">
                                <i class="bi bi-eye-slash  eye position-absolute top-50"
                                    style="transform: translateY(-50%);right:10px;cursor:pointer;"></i>
                            </div>




                            <button class="btn fw-semibold p-3-5 btn-primary w-100 my-3">
                                Log In
                            </button>

                            <a href="#" class="text-primary text-center d-block mb-3">Forgotten password?</a>


                            <hr class="my-3">
                            <a href="/r.php" style="background-color: #36A420;white-space:no-wrap"
                                class="btn p-3-5 fw-semibold w-60 mx-auto d-block text-white my-3">
                                Create new account
                            </a>

                        </div>




                    </form>



                </div>
            </div>
        </div>
    </div>


    <?php include './boot_js.php' ?>


    <script src="./app.js"></script>



</body>

</html>