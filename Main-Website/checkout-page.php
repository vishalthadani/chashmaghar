<?php
require './menu-header-section/dbclass.php';
?>
<?php
$select = mysqli_query($conn, "select * from user_tbl where user_id='1'") or die(mysqli_error($conn));
$selectrow = mysqli_fetch_array($select);

if((isset($_POST['submit1']))) 
{


    $name = $_POST['usern'];
    $phone = $_POST['pn'];
    $ad1 = $_POST['add1'];
    $ad2 = $_POST['add2'];
    $pin = $_POST['pinc'];

    $conn = mysqli_connect("localhost", "root", "", "chashmaghar");

    $q4 = mysqli_query($conn, "UPDATE user_tbl SET user_name='{$name}', user_phone='{$phone}',user_address1='{$ad1}',user_address2='{$ad2}',user_pincode='{$pin}' WHERE user_id='{1}' ") or die(mysqli_error($conn));

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

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h4>Check Out</h4>
                            <div class="breadcrumb__links">
                                <a href="./index.html">Home</a>
                                <a href="./shop.html">Shop</a>
                                <span>Check Out</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Checkout Section Begin -->
        <section class="checkout spad">
            <div class="container">
                <div class="checkout__form">

                    <div class="row">
                        <div class="col-lg-8 col-md-10">

                            <h4 class="coupon__code"><b>BILLING DETAILS</b></h4>
                            <div class="col-lg-13 col-md-15">
                                <div class="checkout__order">
                                    <h5 class="order__title">Delivery Address </h5>
                                    <ul class="checkout__total__products">
                                        <li style="font-size:17px;"><b>Manan Rathore </b></li>
                                        <li>Flat - 106, Block - 3, Jogeshwari Apartments </li>
                                        <li>Naroda, Ahmedabad - 360009</li>
                                        <li>9645781263 </li>
                                    </ul>
                                    <button type="submit" class="site-btn" style="width:200px" id="edit">Edit Address</button>
                                    <br><br>
                                    <form action="POST" id="form">
                                        <div id="edit">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Name<span>*</span></p>
                                                        <input type="text" placeholder="Enter Your Name" name="usern" id="usern"  value="<?php echo $selectrow['user_name']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Phone<span>*</span></p>
                                                        <input type="text"placeholder="Enter Your Phone Number" name="pn" id="pn" value="<?php echo $selectrow['user_phone']?>" onkeyup="validatenumber(this);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkout__input">
                                                <p>Address Line 1<span>*</span></p>
                                                <input type="text" placeholder="Enter Address Line 1"  name="add1" id="add1" value="<?php echo $selectrow['user_address1']?>">
                                            </div>
                                            <div class="checkout__input">
                                                <p>Address Line 2<span>*</span></p>
                                                <input type="text" placeholder="Enter Address Line 2" name="add2" id="add2" value="<?php echo $selectrow['user_address2']?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="checkout__input">
                                                        <p>Pincode<span>*</span></p>
                                                        <input type="text" placeholder="Enter Pincode" name="pinc" id="pinc"  value="<?php echo $selectrow['user_pincode']?>" onkeyup="validatenumber(this);">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit1" class="site-btn" style="width:200px">Save</button>&nbsp;&nbsp;&nbsp;
                                            <button type="reset" class="site-btn" id="close" style="width:200px">Cancel</button>
                                        </div>

                                    </form>
                                    <script>
                                        $(document).ready(function () {
                                            $("#form").hide();
                                            $('#edit').click(function () {
                                                $('#form').show();
                                            });
                                            $('#close').click(function () {
                                                $('#form').hide();
                                            });
                                        });


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

                                                add1: {
                                                    required: true,
                                                    maxlength: 150
                                                },

                                                add2: {
                                                    required: true,
                                                    maxlength: 150
                                                },

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
                                                },

                                            }
                                        });

                                        function validatenumber(no)
                                        {
                                            no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-12 col-md-12">
                                <div class="checkout__order">
                                    <h5 class="order__title">Your order</h5>
                                    <div class="checkout__order__products"><b>Product <span>Total</b></span></div>
                                    <ul class="checkout__total__products">
                                        <li>01. Ray-Ban Pilot Glasses <span>₹ 540.0</span></li>
                                        <li>02. GUCCI Metal Glasses <span>₹ 470.0</span></li>
                                        <li>03. Ray-Ban Sunglasses <span>₹ 560.0</span></li>
                                    </ul>
                                    <ul class="checkout__total__all">
                                        <li>Subtotal <span>₹1570.00</span></li>
                                        <li>Total <span>₹1570.00</span></li>
                                    </ul>

                                    <button type="submit" class="site-btn">PLACE ORDER</button>
                                </div>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
        </section>

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
                                            dataLayer.push(arguments);
                                        }
                                        gtag('js', new Date());

                                        gtag('config', 'UA-23581568-13');
        </script>

    </body>
</html>
