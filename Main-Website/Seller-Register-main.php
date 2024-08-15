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
<!--	<link rel="icon" type="image/png" href="./form/images/icons/favicon.ico"/>-->
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
    <script src="./form/js/jquery.validate.js"> </script>
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
                    <form class="contact100-form validate-form" method="POST" name="form" id="form" enctype="multipart/form-data">
				<span class="contact100-form-title" style="text-align:left;">
					&nbsp;&nbsp;Seller Sign Up
				</span>

				<table width="100%" cellpadding="20px" cellspacing="20px">
					<tr>
					<td>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Name</span><span id="ast">*</span>
						<input class="input100" placeholder="Enter Your Name"  type="text" name="usern" id="usern"><!--Seller name-->
						<span class="focus-input100"></span>
					</div>

                	<div class="wrap-input100 validate-input">
						<span class="label-input100">Email</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email" id="email1"><!--Seller email-->
						<span class="focus-input100"></span>
					</div>
                	
               		<div class="wrap-input100 validate-input">
						<span class="label-input100"> Phone Number</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Your Phone Number" type="text" name="pn" id="pn" onkeyup="validatenumber(this);"><!-- Phone Num-->
						<span class="focus-input100"></span>
					</div>


                    <div class="wrap-input100 validate-input" >
						<span class="label-input100">Shop Name</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Shop Name" type="text" name="shop" id="shop"><!--Shop Name-->
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">GSTIN Id</span><span id="ast">*</span>
						<input class="input100" placeholder="Enter GSTIN of Shop" type="text" name="gstin" id="gstin" onkeyup="gst(this);"><!--GSTIN 2-->
						<span class="focus-input100"></span>
					</div>
                    <p id="msg1" style="color:green; "></p><p id="msg2" style="color:red; "></p>

					</td>
					<td>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Shop Address Line 1</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Your Address 1" type="text" name="add1" id="add1"><!--Seller address 1-->
						<span class="focus-input100"></span>
					</div>
                	<div class="wrap-input100 validate-input">
						<span class="label-input100">Shop Address Line 2</span><span id="ast">*</span>
						<input class="input100" placeholder="Enter Your Address 2" type="text" name="add2" id="add2"><!--Seller address 2-->
						<span class="focus-input100"></span>
					</div>

                    
                	<div class="wrap-input100 validate-input input">
						<span class="label-input100">Pincode</span><span id="ast">*</span>
						<input class="input100" placeholder="Enter Pincode" type="text" name="pinc" id="pinc" onkeyup="validatenumber(this);"><!--Pincode-->
						<span class="focus-input100"></span>
					</div>


               		<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Your Password" type="password" name="pswd" id="pswd" onkeyup="password(this);"><!--Seller password-->
						<span class="focus-input100"></span>
					</div>
                    <p id="msg3" style="color:green; "></p><p id="msg4" style="color:red; "></p>
                
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Confirm Password</span><span id="ast">*</span>
						<input class="input100"  placeholder="Re-Enter your password" type="password" name="rpswd" id="rpswd"><!--Seller password-->
						<span class="focus-input100"></span>
					</div>
					
					</td>

					<td width="255px">
					<div>
						<figure><img src="./form/images/sign-up.jpeg" width="255px" height="218px" alt="sign up image"></figure><br/><br/><br><br/><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

				shop: {
					required:true,
					maxlength:20
				},

				gstin: {
					required:true,
					minlength:15,
					maxlength:15 
				},
                                
                                add1: {
                                        required:true,
                                        maxlength:150
                                },
                                
                                add2: {
                                        required:true,
                                        maxlength:150
                                },
                                
				pinc: {
					required:true,
					minlength:6,
					maxlength:6 
				},

				pswd: {
					required:true,
					minlength:8,
					maxlength:15
				},

				rpswd: {
					minlength:8,
					equalTo: "#pswd",
					required:true
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

				shop: {
					required: "Please Enter your Shop Name."
				},

				gstin: {
					required: "Please Enter GSTIN Number.",
					minlength: "GSTIN must be 15 characters long."
				},

				pinc: {
					required: "Please Enter Pincode.",
					minlength: "Pincode must be 6 digits long."
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
        
        function gst(no1)
        {
            var gstinformat = new RegExp(/^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9]){1}?$/);    
            if (gstinformat.test(no1))
            {
				document.getElementById("msg1").innerHTML = "Valid GSTIN ID";
			}
			else
            {
				document.getElementById("msg2").innerHTML = "Invalid GSTIN ID!!!";
			}
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<?php
		if(isset($_POST['register']))
			{
				$email    = $_POST['email'];
				$name     = $_POST['usern'];
				$phone    = $_POST['pn'];
				$ad1	  = $_POST['add1'];
				$ad2	  = $_POST['add2'];
				$pin	  = $_POST['pinc'];
				$pswd     = $_POST['pswd'];
                $gstin    = $_POST['gstin'];
                $shop     = $_POST['shop'];

				$conn = mysqli_connect("localhost","root","","chashmaghar");

				$query1 = mysqli_query($conn,"insert into seller_tbl(seller_email, seller_name, seller_phone, seller_address1,seller_address2,seller_pincode,seller_gstin,seller_status,auth_status,shop_name) values ('{$email}','{$name}','{$phone}','{$ad1}','{$ad2}','{$pin}','{$gstin}','1','0','{$shop}')");

				$query2 = mysqli_query($conn,"insert into login_tbl(email_id,password,type,login_status) values ('{$email}','{$pswd}','2','')");

				if($query1)
                {
                    echo "<script>alert('Registration Successful');window.location='../Chashmaghar-Website/MAIN-WEBSITE/main.html';</script>";
                }
                else
                {
                    echo "<script>warning('Registration Unsuccessful!!!');</script>";
                    
                }
			}
		
	    ?>
</body>
</html>