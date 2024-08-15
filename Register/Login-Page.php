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
            echo "<script>alert('Admin Login Successful!');</script>";
             header('LOCATION:../Admin-Panel/dashboard.php');       
        }
        else if($flag==2)
        {
            echo "<script>alert('Seller Login Successful!');</script>";
            header("location:../Seller-Panel/dashboard.php");
        }
        else if($flag==3)
        {
            echo "<script>alert('User Login Successful!');</script>";
            header("location:../Main-Website/index.html");
        }
        else
        {
            echo "<script>alert('Login Unsuccessful!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> LOGIN PAGE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./form/images/icons/favicon.ico"/>
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

    
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title" style="text-align:left;">
					&nbsp;&nbsp;Sign In
				</span>

				<table width="100%" >
					<tr>
					<td>
                   <br><br>
                	<div class="wrap-input100 validate-input" data-validate = "Valid email is  : ex@abc.xyz">
						<span class="label-input100">Login ID</span>
						<input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email" maxlength="30" required><!--Email ID-->
						<span class="focus-input100"></span>
					</div>
                	<br>
               		<div class="wrap-input100 validate-input" data-validate="Password is  ">
						<span class="label-input100">Password</span>
						<input class="input100"  placeholder="Enter Your Password" type="password" name="pswd" maxlength="15" required><!--Password-->
						<span class="focus-input100"></span>
					</div>
                    <a href="#">Forgot Password?</a><br/><br>
                    <a href="User-Register.php">Register as User</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Seller-Register.php">Register as Seller</a>
					</td>

					<td width="100px">
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
