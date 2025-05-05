<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <link rel="stylesheet" href="./styles.css">
    <title>Sign Up for Pakbook</title>
</head>

<body>

    <?php
    include './config.php';
    if (isset($_SESSION['username'])) {
        header("Location: $base_url/home.php");
    }
    ?>


    <div class="container-fluid min-vh-100 bg-light">

        <div class="container bg-light">
            <img class="d-block mx-auto" src="https://logohistory.net/wp-content/uploads/2022/10/Facebook-Logo-2019.png"
                width="200px" alt="">
            <form action="./register-user.php" method="POST"
                class="mx-auto shadow col-xl-5 col-lg-6 col-md-7 col-sm-9 bg-white p-4">
                <h3 class="text-center">Create a new account</h3>
                <p class="text-secondary text-center">It's quick and easy.
                </p>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="First name" name="f_name" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Surname" name="l_name" class="form-control">
                    </div>
                </div>

                <label style="font-size: 0.9rem;" for="" class="form-label text-secondary emphasis">Date of birth <i
                        class="bi bi-question-circle-fill"></i></label> </label>
                <div class="row">
                    <div class="col-4">
                        <select name="date" id="" class="form-select">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <select name="month" id="" class="form-select">
                            <?php
                            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                            foreach ($months as $item) {
                                echo "<option>$item</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <select name="year" id="" class="form-select">
                            <?php
                            for ($i = 2025; $i >= 1905; $i--) {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <label style="font-size: 0.9rem;" for="" class="form-label text-secondary emphasis">Gender <i
                        class="bi bi-question-circle-fill"></i></label>
                <div class="row">
                    <div class="col-6 ">
                        <div class="d-flex p-2 border rounded justify-content-between align-items-center">
                            <label for="">Female</label>
                            <input value="female" name="gender" type="radio">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex p-2 border rounded justify-content-between align-items-center">
                            <label for="">Male</label>
                            <input value="male" name="gender" type="radio">
                        </div>
                    </div>
                </div>
                <input type="text" name="m_mail" placeholder="Mobile number or email address"
                    class="form-control my-3 p-2">
                <input type="password" name="password" placeholder="New password" class="form-control my-3 p-2">
                <p class="text-secondary text-sm">People who use our service may have uploaded your contact information
                    to Facebook. Learn more.</p>
                <p class="text-secondary text-sm">By clicking Sign Up, you agree to our Terms, Privacy Policy and
                    Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                <button style="background-color: #36A420;white-space:no-wrap"
                    class="btn test p-3-5 fw-semibold w-50 mx-auto d-block text-white my-3">
                    Create new account
                </button>

                <a href="./index.php" class="text-primary text-decoration-none text-center d-block">
                    Already have an account ?
                </a>
            </form>
        </div>
    </div>
</body>

</html>