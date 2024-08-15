<?php
require './menu-header-section/dbclass.php';
?>
<?php
$select = mysqli_query($conn, "select * from user_tbl where user_id=1") or die(mysqli_error($conn));
$selectrow = mysqli_fetch_array($select);

if ((isset($_POST['up']))) {


    $name = $_POST['usern'];
    //$email    = $_POST['email'];

    $date = $_POST['dob'];
    //$gender   = $_POST['gender'];
    //$phone    = $_POST['pn'];
    $ad1 = $_POST['add1'];
    $ad2 = $_POST['add2'];
    $pin = $_POST['pinc'];
    //$password = $_POST['pswd'];

    $conn = mysqli_connect("localhost", "root", "", "chashmaghar");

    //$query1=mysqli_query($conn,"UPDATE `user_tbl` SET ``user_name`='$name',`user_dob`='$date',`user_gender`='$gender',`user_address1`='$ad1',`user_address2`='$ad2',`user_pincode`='$pin'' WHERE user_id='39'");
    // $q2=mysqli_query($conn,"UPDATE `user_tbl` 
    // SET ` `user_name`='$name',`user_dob`='$date',`user_gender`='$name',`user_address1`='$ad1',`user_address2`='$ad2',`user_pincode`='$pin' `
    // WHERE user_id='11' ");
    // $q3=mysqli_query($conn,"UPDATE `user_tbl` 
    // SET `
    // `user_name`='$name'
    // `user_dob`='$date',
    // `user_gender`='$name',
    // `user_address1`='$ad1',
    // `user_address2`='$ad2',
    // `user_pincode`='$pin' `
    // WHERE user_id='11'
    // `
    //  ");


    $q4 = mysqli_query($conn, "UPDATE `user_tbl` SET `user_id`='11',`user_email`='11@gmail.com',`user_name`='$name',`user_dob`='$date',`user_gender`='0',`user_phone`='9988776655',`user_address1`='$ad1',`user_address2`='$ad2',`user_pincode`='$pin',`user_status`='1' WHERE user_id='11' ");

    if ($q4) {
        echo "<script>alert('Update Successful!!!');</script>";
    } else {
        echo "<script>warning('Update Unuccessful');</script>";
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
include './menu-header-section/menu-section-log.php';
?>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
<?php
include './menu-header-section/header-section-log.php';
?>
        <!-- Header Section End -->

        <div class="col-lg-12 col-md-12">
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form" method="POST" name="form" id="form">
                        <span class="contact100-form-title" style="text-align:left;">
                            &nbsp;&nbsp;Manage Profile
                        </span>

                        <table width="100%" >
                            <tr>
                                <td>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Name</span><span id="ast">*</span>
                                        <input class="input100" placeholder="Enter Your Name"  type="text" name="usern" id="usern" value="<?php echo $selectrow['user_name'] ?>"><!--user name-->
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Email</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email"   id="email" value="<?php echo $selectrow['user_email'] ?>" readonly><!--user email--><!---->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Date Of Birth</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter your date of birth" type="date" name="dob" id="dob"  value="<?php echo $selectrow['user_dob'] ?>"><!--DATE OF BIRTH-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 input100-select">
                                        <!--Gender-->
                                        <span class="label-input100">Select Gender</span><span id="ast">*</span>
                                        <div>
                                            <select class="selection-2" name="gender">
<!--                                                            <option value="" disable> You had previously selected <?php echo $selectrow['user_gender'] ?> "</option>-->
                                                <option value="" disabled selected>Select Your Gender</option> 
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <span class="focus-input100"></span>
                                    </div>


                                </td>
                                <td>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100"> Phone Number</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter your Phone Number" type="text" name="pn" id="pn"   value="<?php echo $selectrow['user_phone'] ?>"   readonly><!-- Phone Num-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Address Line 1</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter Your Address 1" type="text" name="add1" id="add1"   value="<?php echo $selectrow['user_address1'] ?>"><!--User address 1-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Address Line 2</span><span id="ast">*</span>
                                        <input class="input100" placeholder="Enter Your Address 2" type="text" name="add2" id="add2"   value="<?php echo $selectrow['user_address2'] ?>"><!--User address 2-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Pincode</span><span id="ast">*</span>
                                        <input class="input100" placeholder="Enter Your Pincode" type="text" name="pinc" id="pinc" value="<?php echo $selectrow['user_pincode'] ?>" onkeyup="validatenumber(this);"><!--Pincode-->
                                        <span class="focus-input100"></span>
                                    </div>


                                </td>

                                <td width="270px">
                                    <div>
                                        <figure><img src="./form/images/signup-image.jpg" width="230px" height="240px" alt="sign up image"></figure><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="Login-Page-main.php">Reset Your Password</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>

                                <td colspan="2" style="text-align:center;">
                                    <div class="container-contact100-form-btn">
                                        <div class="wrap-contact100-form-btn">
                                            <div class="contact100-form-bgbtn"></div>
                                            <button class="contact100-form-btn" name="up">
                                                <span>
                                                    Update
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
                        usern: {
                            required: true,
                            maxlength: 30
                        },

                        email: {
                            required: true,
                            maxlength: 30
                        },

                        pn: {
                            required: true,
                            minlength: 10,
                            maxlength: 10
                        },

                        gender: {
                            required: true
                        },

                        pinc: {
                            required: true,
                            minlength: 6,
                            maxlength: 6
                        },

                        add1: {
                            required: true,
                            maxlength: 150
                        },

                        add2: {
                            required: true,
                            maxlength: 150
                        }

                    },

                    messages: {
                        usern: {
                            required: "Please Enter Your Name."
                        },

                        email: {
                            required: "Please Enter Your Email Address."
                        },

                        pn: {
                            required: "Please Enter your Phone Number",
                            minlength: "Phone number must be at least 10 characters long.",
                        },

                        gender: {
                            required: "Please Select Gender."
                        },

                        pinc: {
                            required: "Please Enter Pincode.",
                            minlength: "Pincode must be at least 6 character long."
                        },

                        add1: {
                            required: "Please Enter Address Line 1.",
                            maxlength: "Address Line 1 must be less than 150 characters."
                        },

                        add2: {
                            required: "Please Enter Address Line 2.",
                            maxlength: "Address Line 2 must be less than 150 characters."
                        }

                    }
                });

                function validatenumber(no)
                {
                    no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                }
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
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-23581568-13');
        </script>


    </body>
</html>
