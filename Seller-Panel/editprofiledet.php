<?php
require './class/dbclass.php';
?>

<?php
$select = mysqli_query($conn, "select * from seller_tbl where seller_id='21'") or die(mysqli_error($conn));
$selectrow = mysqli_fetch_array($select);
$msg = "";

if (!isset($_POST['submit1'])) {
    
} else {
    $semail = $_POST['email'];
    $sname = $_POST['usern'];
    $sphone = $_POST['pn'];
    $sad1 = $_POST['add1'];
    $sad2 = $_POST['add2'];
    $spinc = $_POST['pinc'];

    $query1 = mysqli_query($conn, "update seller_tbl set seller_name='{$sname}',seller_phone='{$sphone}',seller_address1='{$sad1}',seller_address2='{$sad2}',seller_pincode='{$spinc}' where seller_id='{$sid}'");

    if ($query1) {
        echo "<script>alert('Record Updated!!!');window.location='editprofile.php';</script>";
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
            <strong>Duplicate entry  not Valid!!!</strong>
            </div>';
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="../favicon.ico"/><title>Chashmaghar Seller Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- font CSS -->
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <!--webfonts-->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--//webfonts--> 
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!-- chart -->
        <script src="js/Chart.js"></script>
        <!-- //chart -->
        <!--Calender-->
        <link rel="stylesheet" href="css/clndr.css" type="text/css" />
        <script src="js/underscore-min.js" type="text/javascript"></script>
        <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
        <script src="js/clndr.js" type="text/javascript"></script>
        <script src="js/site.js" type="text/javascript"></script>
        <!--End Calender-->
        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->
        <script src="js/jquery.validate.js"></script>
        <style>
            .error{
                color:red;
            }
        </style>
    </head> 
    <body class="cbp-spmenu-push">    
        <script src="js/jquery.validate.js"></script>
        <div class="main-content">
            <!--left-fixed -navigation-->
            <?php
            include './themepart/sidebar.php';
            ?>
            <!--left-fixed -navigation-->
            <!-- header-starts -->
            <?php
            include './themepart/header.php';
            ?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms">
                        <h3 class="title1">Edit Profile Form </h3>
                        <div class=" form-grids row form-grids-right">
                            
                            <div class="widget-shadow " data-example-id="basic-forms"> 
                                <div class="form-title">
                                    <h4>Edit Your Details :</h4>
                                </div>
                                <div class="form-body">
                                    <form class="form-horizontal" name="form" id="form" method="post" enctype="multipart/form-data"> 

<!--                                        <input type="hidden" name="id" value="<?php echo $selectrow['seller_id'] ?>">
                                        <div class="form-group"> -->

                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER NAME</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="usern" class="form-control" id="usern" value="<?php echo $selectrow['seller_name'] ?>" placeholder="Enter  Name" > 
                                            </div> <br/><br/><br/>


                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER EMAIL</label> 
                                            <div class="col-sm-9"> 
                                                <input type="email" name="email" class="form-control" id="email" value="<?php echo $selectrow['seller_email'] ?>" placeholder="Enter Seller Email"  readonly> 
                                            </div> <br/><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER PHONE NUMBER</label> 
                                            <div class="col-sm-9"> 
                                                <input type="number" name="pn" class="form-control" id="pn" value="<?php echo $selectrow['seller_phone'] ?>" placeholder="Enter Phone Number" onkeyup="validatenumber(this);"  > 
                                            </div> <br/><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">SHOP NAME</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="shop" class="form-control" id="shop" value="<?php echo $selectrow['shop_name'] ?>" placeholder="Enter shop Name" > 
                                            </div> <br/><br/><br/>


                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER ADDRESS 1</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="add1" class="form-control" id="add1" value="<?php echo $selectrow['seller_address1'] ?>" placeholder="Enter seller_address 1" > 
                                            </div> <br/><br/><br/>


                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER ADDRESS 2</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="add2" class="form-control" id="add2" value="<?php echo $selectrow['seller_address2'] ?>" placeholder="Enter seller_address 2" > 
                                            </div> <br/><br/><br/>


                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER PINCODE</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="pinc" class="form-control" id="pinc" value="<?php echo $selectrow['seller_pincode'] ?>" placeholder="Enter Pincode"  onkeyup="validatenumber(this);" > 
                                            </div> <br/><br/><br/>


                                            <label for="inputEmail3" class="col-sm-2 control-label">SELLER GSTIN</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="gstin" class="form-control" id="gstin" value="<?php echo $selectrow['seller_gstin'] ?>" placeholder="Enter GSTIN NUMBER" readonly > 
                                            </div> <br/><br/><br/>


                                            <label for="inputEmail3" class="col-sm-2 control-label">Authentication STATUS</label> 
                                            <div class="col-sm-9"> 
                                                <input type="number" name="astatus" class="form-control" id="inputEmail3" value="<?php echo $selectrow['auth_status'] ?>" placeholder="Authentication Status" readonly> 
                                            </div> <br/><br/><br/>

                                        </div>
                                        <div class="col-sm-offset-2"> 
                                            <button type="submit" name="submit1" class="btn btn-success">Update </button>
                                            <button type="reset" name="Reset" class="btn btn-danger">Reset</button>
                                        </div> 
                                    </form> 
                                </div>
                            </div>
                        </div>

                    </div>
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
                            required: true,
                            maxlength: 20
                        },

                        gstin: {
                            required: true,
                            minlength: 15,
                            maxlength: 15
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
                            maxlength: 150,

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
                            minlength: "Phone number must be at least 10 characters long.",
                        },

                        shop: {
                            required: "Please Enter your Shop Name."
                        },

                        gstin: {
                            required: "Please Enter GSTIN Number.",
                            minlength: "GSTIN must be at least 16 characters long."
                        },

                        pinc: {
                            required: "Please Enter Pincode.",
                            minlength: "Pincode must be at least 6 character long."
                        },

                        add1: {
                            required: "Please Enter Address Line 1",

                            maxlength: "Address Line 1 cannot be more than 150 Characters"
                        },

                        add2: {
                            required: "Please Enter Address Line 2",

                            maxlength: "Address Line 2 cannot be more than 150 Characters"

                        }
                    }
                });

                function validatenumber(no)
                {
                    no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                }
                
            </script>
            <!--footer-->
            <?php
            include './themepart/footer.php';
            ?>
            <!--//footer-->
        </div>
        <!-- Classie -->
        <script src="js/classie.js"></script>
        <script>
                var menuLeft = document.getElementById('cbp-spmenu-s1'),
                        showLeftPush = document.getElementById('showLeftPush'),
                        body = document.body;

                showLeftPush.onclick = function () {
                    classie.toggle(this, 'active');
                    classie.toggle(body, 'cbp-spmenu-push-toright');
                    classie.toggle(menuLeft, 'cbp-spmenu-open');
                    disableOther('showLeftPush');
                };

                function disableOther(button) {
                    if (button !== 'showLeftPush') {
                        classie.toggle(showLeftPush, 'disabled');
                    }
                }
        </script>
        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>
<!--        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/jquery.validate.js"></script>
        <style>
            .error{
                color:red;
            }
        </style>
    </head> 
    <body class="cbp-spmenu-push">
        <script src="js/jquery-3.1.1.js"></script>    
        <script src="js/jquery.validate.js"></script>-->
