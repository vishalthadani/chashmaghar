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
        <style>
            input[type=date] {
                color: #999;
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
                            &nbsp;&nbsp;User Sign Up
                        </span>

                        <table width="100%" >
                            <tr>
                                <td>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Name</span><span id="ast">*</span>
                                        <input class="input100" placeholder="Enter Your Name"  type="text" name="usern" id="usern"><!--user name-->
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Email</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email" id="email"><!--user email-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Date Of Birth</span><span id="ast">*</span>
                                        <input type='text' name="dob" placeholder="Enter the Date of Birth" onfocus="(this.type = 'date')" onblur="(this.type = 'text')" id="dob" class="input100" style="color:#111111;" data-date-language="pt" placeholder='Select Date' required>
<!--                                        <input class="input100"  placeholder="Enter your date of birth" type="date" name="dob" id="dob">DATE OF BIRTH
                                        <span class="focus-input100"></span>-->
                                    </div>


                                    <div class="wrap-input100 input100-select">
                                        <!--Gender-->
                                        <span class="label-input100">Select Gender</span><span id="ast">*</span>
                                        <div>
                                            <select class="selection-2" name="gender" id="gender">
                                                <option value="" disabled selected>Select Your Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100"> Phone Number</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter your Phone Number" type="text" name="pn" id="pn" onkeyup="validatenumber(this);"><!-- Phone Num-->
                                        <span class="focus-input100"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Address Line 1</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter Your Address 1" type="text" name="add1" id="add1"><!--User address 1-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Address Line 2</span><span id="ast">*</span>
                                        <input class="input100" placeholder="Enter Your Address 2" type="text" name="add2" id="add2"><!--User address 2-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Pincode</span><span id="ast">*</span>
                                        <input class="input100" placeholder="Enter Your Pincode" type="text" name="pinc" id="pinc" onkeyup="validatenumber(this);"><!--Pincode-->
                                        <span class="focus-input100"></span>
                                    </div>


                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Password</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Enter Your Password" type="password" name="pswd" id="pswd"><!--user password-->
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input">
                                        <span class="label-input100">Confirm Password</span><span id="ast">*</span>
                                        <input class="input100"  placeholder="Re-Enter your password" type="password" name="rpswd" id="rpswd"><!--user password-->
                                        <span class="focus-input100"></span>
                                    </div>

                                </td>

                                <td width="270px">
                                    <div>
                                        <figure><img src="./form/images/signup-image.jpg" width="260px" height="270px" alt="sign up image"></figure><br/><br/><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="Login-Page-main.php">Already a member?</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>

                                <td colspan="2" style="text-align:center;">
                                    <div class="container-contact100-form-btn">
                                        <div class="wrap-contact100-form-btn">
                                            <div class="contact100-form-bgbtn"></div>
                                            <button class="contact100-form-btn" name="register">
                                                <span>
                                                    Sign Up
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

                        pinc: {
                            required: true,
                            minlength: 6,
                            maxlength: 6
                        },

                        gender: {
                            required: true
                        },

                        add1: {
                            required: true,
                            maxlength: 150
                        },

                        add2: {
                            required: true,
                            maxlength: 150
                        },

                        pswd: {
                            required: true,
                            minlength: 8,
                            maxlength: 15
                        },

                        rpswd: {
                            minlength: 8,
                            equalTo: "#pswd",
                            required: true
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
                            minlength: "Phone number must be 10 digits long.",
                        },

                        pinc: {
                            required: "Please Enter Pincode.",
                            minlength: "Pincode must be 6 digits long."
                        },

                        gender: {
                            required: "Please Select Gender."
                        },

                        add1: {
                            required: "Please Enter Address Line 1.",
                            maxlength: "Address Line 1 must be less than 150 characters."
                        },

                        add2: {
                            required: "Please Enter Address Line 2.",
                            maxlength: "Address Line 2 must be less than 150 characters."
                        },

                        pswd: {
                            required: "Please Enter Password.",
                            minlength: "Password must be at least 8 characters long."
                        },

                        rpswd: {
                            required: "Please Confirm Pasword. ",
                            minlength: "Confirm Password must be at least 8 characters long.",
                            equalTo: "Please Enter the same password as above."
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
        <script>
            $(".selection2").hide();
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

        <?php
        if (!(isset($_POST['register']))) {
            
        } else {
            $email = $_POST['email'];
            $name = $_POST['usern'];
            $date = $_POST['dob'];
            $gender = $_POST['gender'];
            $phone = $_POST['pn'];
            $ad1 = $_POST['add1'];
            $ad2 = $_POST['add2'];
            $pin = $_POST['pinc'];
            $password = $_POST['pswd'];

            $conn = mysqli_connect("localhost", "root", "", "chashmaghar");

            $rs1 = mysqli_query($conn, "insert into user_tbl(user_email, user_name, user_dob, user_gender, user_phone, user_address1, user_address2, user_pincode, user_status) values ('{$email}','{$name}','{$date}','{$gender}','{$phone}','{$ad1}','{$ad2}','{$pin}','1')");

            $rs2 = mysqli_query($conn, "insert into login_tbl(email_id, password, type, login_status) values ('{$email}','{$password}','3','')");

            if (!$rs1) {
                echo "<script>alert('Registration Unsuccessful!!!');</script>";
            } else {
                echo "<script>alert('Registration Successful');</script>";
                echo "window.location:Login-Page-main.php";
            }
        }
        ?>
    </body>
</html>

