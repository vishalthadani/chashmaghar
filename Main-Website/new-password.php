<?php
    require './menu-header-section/dbclass.php';
?>
<?php
    if(isset($_GET['hid']))
    {
        $email = $_GET['hid'];
        if(!isset($_POST['login']))
        {}
        else
        {
            $pswd = $_POST['pswd'];
            $query = mysqli_query($conn,"update login_tbl set password = '{$pswd}' where email_id = '{$email}'");
            if($query)
            {
                echo "<script>alert('New Password set Succussfully!');</script>";
            }
            else
            {
                echo "<script>alert('New Password set Unsuccussfully!');</script>";
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
			<form class="contact100-form validate-form" method="POST" name="form" id="form">
				<span class="contact100-form-title" style="text-align:left;">
					&nbsp;&nbsp;Reset New Password
				</span>

				<table width="100%" >
					<tr>
					<td>
                   <br><br>
                	
               		<div class="wrap-input100 validate-input">
						<span class="label-input100">Set New Password</span>
						<input class="input100"  placeholder="Enter New Password" type="password" name="pswd" id="pswd"><!--New Password-->
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Confirm New Password</span>
						<input class="input100"  placeholder="Re-enter New Password" type="password" name="cpswd" id="cpswd"><!--Confirm Password-->
						<span class="focus-input100"></span>
					</div>
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
							<button class="contact100-form-btn" name="login">
								<span>
									Set Password
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
                                
                            pswd: {
					required:true,
					maxlength:15
				},
                            cpswd: {
					required:true,
                                        equalTo: "#pswd",
					maxlength:15
				}
                        },
                        messages: {
                            email: {
					required: "Please Enter the Email Address",
					maxlength: "Email Address must be less than 30 characters."
				},
                                
                            pswd: {
					required: "Please Enter New Password",
					maxlength: "Password must be less than 15 characters."
				},
                            cpswd: {
					required: "Please Re-enter New Password",
					maxlength: "Password must be less than 15 characters.",
                                        equalTo: "Please Enter the same password as above."
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>