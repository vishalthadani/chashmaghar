<?php
    if(isset($_POST['login']))
    {
	$email    = $_POST['email'];
	$pswd     = $_POST['pswd'];
                
	$conn = mysqli_connect("localhost","root","","chashmaghar");
        
	$query1 = mysqli_query($conn,"select * from login_tbl") or die(mysqli_error($conn));
        $flag = 0;
        while($login = mysqli_fetch_array($query1))
        {
            if(!($login['email_id'] == $email && $login['password'] == $pswd))
            {
                $flag=0;
            }
            else
            {
                session_start();
                if($login['type'] == 1)
                {
                    $flag=1;
                    break;
                }
                else if($login['type'] == 2)
                {
                    $flag=2;
                    break;
                }
                else
                {
                    $flag=3;
                    break;
                }
            }
        }
        
        if($flag==1)
        {
            $_SESSION['admin_session'] = $email;
            //echo "<script>alert('Admin Login Successful!');</script>";
             header('LOCATION:../Admin-Panel/dashboard.php');       
        }
        else if($flag==2)
        {
            echo "<script>alert('Seller Login Successful!');</script>";
            $_SESSION['seller_session'] = $email;
            header("location:../Seller-Panel/dashboard.php");
        }
        else if($flag==3)
        {
            echo "<script>alert('User Login Successful!');</script>";
            header("location:../Main-Website/index-log.php");
        }
        else
        {
            echo "<script>alert('Login Unsuccessful!');</script>";
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
					&nbsp;&nbsp;Sign In
				</span>

				<table width="100%" >
					<tr>
					<td>
                   <br><br>
                	<div class="wrap-input100 validate-input">
						<span class="label-input100">Login ID</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email" id="email"><!--Email ID-->
						<span class="focus-input100"></span>
					</div>
                	<br>
               		<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span><span id="ast">*</span>
						<input class="input100"  placeholder="Enter Your Password" type="password" name="pswd" id="pswd"><!--Password-->
						<span class="focus-input100"></span>
					</div>
                    <a href="forgot-password.php">Forgot Password?</a><br/><br>
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
							<button class="contact100-form-btn" name="login">
								<span>
									Sign In
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
				}
                        },
                        messages: {
                            email: {
					required: "Please Enter the Email Address",
					maxlength: "Email Address must be less than 30 characters."
				},
                                
                            pswd: {
					required: "Please Enter the Password",
					maxlength: "Password must be less than 15 characters."
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
