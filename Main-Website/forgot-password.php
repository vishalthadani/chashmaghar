<?php
require './menu-header-section/dbclass.php';
?>
<?php
if (!isset($_POST['verify'])) {
    
} else {
    $email = $_POST['email'];
    $phone = $_POST['pn'];
    $query = mysqli_query($conn, "select type from login_tbl where email_id = '{$email}'") or die(mysqli_error($conn));
    $rowtype = mysqli_fetch_array($query) or die(mysqli_error($conn));
    if ($rowtype['type'] == 2) {
        $query1 = mysqli_query($conn, "select seller_email,seller_phone from seller_tbl where seller_email = '{$email}' and seller_phone = '{$phone}'") or die(mysqli_error($conn));
        $result1 = mysqli_fetch_array($query1);
        if ($query1) {
            header("location:new-password.php?hid={$result1['seller_email']}");
        } else {
            echo "<script>alert('Invalid Email Id or Phone Number!');</script>";
        }
    } else if ($rowtype['type'] == 3) {
        $query2 = mysqli_query($conn, "select user_email,user_phone from user_tbl where user_email = '{$email}' and user_phone = '{$phone}'") or die(mysqli_error($conn));
        $result2 = mysqli_fetch_array($query2);
        if ($query2) {
            header("location:new-password.php?hid={$result2['user_email']}");
        } else {
            echo "<script>alert('Invalid Email Id or Phone Number!');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Male_Fashion Template">
        <meta name="keywords" content="Male_Fashion, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../favicon.ico"/><title>Chashmaghar</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
              rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--===============================================================================================-->
<!--        <link rel="icon" type="image/png" href="./form/images/icons/favicon.ico"/>-->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./form/css/util.css">
        <link rel="stylesheet" type="text/css" href="./form/css/main.css">
        <!--===============================================================================================-->

        <script src="./form/js/jquery-3.1.1.js"></script>    
        <script src="./form/js/jquery.validate.js"></script>
        <style>
            .error{
                color:red;
            }
        </style>
    </head>

    <body>
        <script src="./form/js/jquery-3.1.1.js"></script>    
        <script src="./form/js/jquery.validate.js"></script>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Begin -->
<?php
include './menu-header-section/menu-section.php';
?>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
<?php
include './menu-header-section/header-section.php';
?>
        <!-- Header Section End -->


        <div class="col-lg-12 col-md-12">
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form" method="POST" name="form" id="form">
                        <span class="contact100-form-title" style="text-align:left;">
                            &nbsp;&nbsp;Forgot Password
                        </span>

                        <table width="100%" >
                            <tr>
                                <td>
                                    <br><br>
                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Login ID</span>
                                        <input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email" id="email"><!--Email ID-->
                                        <span class="focus-input100"></span>
                                    </div>
                                    <br>
                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Phone Number</span>
                                        <input class="input100"  placeholder="Enter Your Registered Phone Number" type="text" name="pn" id="pn"><!--Mobile-->
                                        <span class="focus-input100"></span>
                                    </div><br><br>
                                    <a href="User-Register-main.php">Register as User</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="Seller-Register-main.php">Register as Seller</a>
                                </td>

                                <td width="230px">
                                    <div>
                                        <figure><img src="./form/images/signin-image.jpg" width="230px" height="280px" alt="sign up image"></figure>
                                    </div>
                                </td>

                            </tr>
                            <tr>

                                <td style="text-align:center;">
                                    <div class="container-contact100-form-btn">
                                        <div class="wrap-contact100-form-btn">
                                            <div class="contact100-form-bgbtn"></div>
                                            <button class="contact100-form-btn" name="verify">
                                                <span>
                                                    Verify
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <script>
                $("#form").validate({
                    rules: {
                        email: {
                            required: true,
                            maxlength: 30
                        },

                        mob: {
                            required: true,
                            minlength: 10,
                            maxlength: 10,

                        }
                    },
                    messages: {
                        email: {
                            required: "Please Enter the Email Address",
                            maxlength: "Email Address must be less than 30 characters."
                        },

                        mob: {
                            required: "Please Enter the Mobile Number",
                            minlength: "Mobile number must be of 10 digits",
                            maxlength: "Mobile number must be of 10 digits"
                        }
                    }
                });
            </script>
        </div>
        <!-- Footer Section Begin -->
<?php
include './menu-header-section/footer-section.php';
?>
        <!-- Footer Section End -->

        <!-- Search Begin -->
<?php
include './menu-header-section/search-section.php';
?>
        <!-- Search End -->
        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="./form/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="./form/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="./form/vendor/bootstrap/js/popper.js"></script>
        <script src="./form/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="./form/vendor/select2/select2.min.js"></script>
        <script>
            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
        <!--===============================================================================================-->
        <script src="./form/vendor/daterangepicker/moment.min.js"></script>
        <script src="./form/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="./form/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="./form/js/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag() {
                        dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'UA-23581568-13');
        </script>

    </body>
</html>
