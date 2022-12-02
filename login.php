<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <section class="bg-account-pages vh-100 d-flex align-items-center bg-center position-relative" style="background-image: url(images/auth-bg.png);">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="bg-white shadow">
                        <div class="p-4">
                            <div class="text-center mt-3">
                                <a href="index.html">
                                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="30" />
                                </a>
                                <p class="text-muted mt-2">Sign in to continue to Qexal.</p>
                            </div>
                            <div class="p-3">
                                <form action="" method="post" class="av-invalid">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input name="username" required="" placeholder="Enter username" id="username" type="text" class="form-control" value="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password</label>
                                        <input name="password" required="" placeholder="Enter password" id="userpassword" type="password" class="form-control" value="" />
                                    </div>
                                    <div class="d-grid mt-3">
                                        <!-- <a href="dashboard.html" type="submit" class="btn btn-primary btn-none">Log
                                            in</a> -->
                                        <button type="submit" name="submit" class="btn btn-primary btn-none">Log In</button>
                                    </div>

                                </form>
                                <!-- end form -->

                                <?php
                                include 'db.php';
                                if (isset($_POST['submit'])) {
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    $sql = mysqli_query($db, "SELECT * FROM users where username = '$username' and password = '$password'");
                                    $data = mysqli_fetch_array($sql);
                                    if (mysqli_num_rows($sql) > 0) {
                                        $_SESSION['admin'] = $username;
                                        echo '<script>alert("Berhasil Login")</script>';
                                        echo '<script>window.location = "dashboard.php"</script>';
                                    } else {
                                        echo '<script>alert("Username atau password salah")</script>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <p>Don't have an account ? <a href="sign-up.html" class="font-weight-semibold text-primary">
                                Signup </a> </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- App Js -->
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>