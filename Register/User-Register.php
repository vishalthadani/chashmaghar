<!DOCTYPE html>
<html lang="en">
<head>
	<title> USER REGISTRATION</title>
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
						<span class="label-input100">Name</span>
						<input class="input100" placeholder="Enter Your Name"  type="text" name="usern" id="usern"><!--user name-->
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Email</span>
						<input class="input100"  placeholder="Enter Your Email Address"  type="email" name="email" id="email"><!--user email-->
						<span class="focus-input100"></span>
					</div>


                	<div class="wrap-input100 validate-input">
						<span class="label-input100">Date Of Birth</span>
						<input class="input100"  placeholder="Enter your date of birth" type="date" name="dob" id="dob"><!--DATE OF BIRTH-->
						<span class="focus-input100"></span>
					</div>


                	<div class="wrap-input100 input100-select">
						<!--Gender-->
						<span class="label-input100">Select Gender</span>
						<div>
							<select class="selection-2" name="gender">
                            	<option value="" disabled selected>Select Your Gender</option>
								<option value="M">Male</option>
                                <option value="F">Female</option>
								<option value="O">Others</option>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>
					
               		<div class="wrap-input100 validate-input">
						<span class="label-input100"> Phone Number</span>
						<input class="input100"  placeholder="Enter your Phone Number" type="text" name="pn" id="pn" onkeyup="validatenumber(this);"><!-- Phone Num-->
						<span class="focus-input100"></span>
					</div>
					</td>
					<td>
               		<div class="wrap-input100 validate-input">
						<span class="label-input100">Address Line 1</span>
						<input class="input100"  placeholder="Enter Your Address 1" type="text" name="add1" id="add1"><!--User address 1-->
						<span class="focus-input100"></span>
					</div>


                	<div class="wrap-input100 validate-input">
						<span class="label-input100">Address Line 2</span>
						<input class="input100" placeholder="Enter Your Address 2" type="text" name="add2" id="add2"><!--User address 2-->
						<span class="focus-input100"></span>
					</div>


                	<div class="wrap-input100 validate-input">
						<span class="label-input100">Pincode</span>
						<input class="input100" placeholder="Enter Your Pincode" type="text" name="pinc" id="pinc" onkeyup="validatenumber(this);"><!--Pincode-->
						<span class="focus-input100"></span>
					</div>


               		<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100"  placeholder="Enter Your Password" type="password" name="pswd" id="pswd"><!--user password-->
						<span class="focus-input100"></span>
					</div>
                
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Confirm Password</span>
						<input class="input100"  placeholder="Re-Enter your password" type="password" name="rpswd" id="rpswd"><!--user password-->
						<span class="focus-input100"></span>
					</div>
					
					</td>

					<td width="230px">
					<div>
						<figure><img src="./form/images/signup-image.jpg" width="230px" height="280px" alt="sign up image"></figure><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="Login-Page.php">Already a member?</a>
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
					minlength: "Phone number must be at least 10 characters long.",
				},

				pinc: {
					required: "Please Enter Pincode.",
					minlength: "Pincode must be at least 6 character long."
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
		if(!(isset($_POST['register'])))
			{
                        }
                        else
                        {
				$email    = $_POST['email'];
				$name     = $_POST['usern'];
				$date     = $_POST['dob'];
				$gender   = $_POST['gender'];
				$phone    = $_POST['pn'];
				$ad1	  = $_POST['add1'];
				$ad2	  = $_POST['add2'];
				$pin	  = $_POST['pinc'];
				$password = $_POST['pswd'];

                
				$conn = mysqli_connect("localhost","root","","chashmaghar");

				$rs1 = mysqli_query($conn,"insert into user_tbl(user_email, user_name, user_dob, user_gender, user_phone, user_address1, user_address2, user_pincode, user_status) values ('{$email}','{$name}','{$date}','{$gender}','{$phone}','{$ad1}','{$ad2}','{$pin}','1')");

				$rs2 = mysqli_query($conn,"insert into login_tbl(email_id, password, type, login_status) values ('{$email}','{$password}','3','')");

				if(!$rs1)
                                {
                                    echo "<script>warning('Registration Unsuccessful!!!');</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Registration Successful');</script>";
                                }

			}
?>
</body>
</html>
