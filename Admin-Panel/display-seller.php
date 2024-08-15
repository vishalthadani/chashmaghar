<?php
require './class/dbclass.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="../favicon.ico"/><title>Chashmaghar Admin Panel</title>
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
        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->
    </head> 
    <body class="cbp-spmenu-push">
        <div class="main-content" onload="window.location='display-seller.php';">
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
                    <div class="tables">
                        <h3 class="title1">Seller Details</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Seller Details: </h4>
                                <table class="table table-hover table-responsive-xl">
                                    <thead>
                                        <tr>
                                            <th>Seller Id</th> 
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th> 
                                            <th>Pincode</th>
                                            <th>GSTIN</th>
<!--                                            <th>Seller Status</th>-->
                                            <th>Status Action</th>
                                            <!--<th>Authentication Status</th>-->
                                            <th>Authentication Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    
                                    $select = mysqli_query($conn,"select * from seller_tbl") or die(mysqli_error($conn));
                                    
                                    if(isset($_GET['hid']))
                                    {
                                        $hid = $_GET['hid'];
                                        
                                        $hide = mysqli_query($conn,"update seller_tbl set seller_status='0' where seller_id='{$hid}';") or die(mysqli_error($conn));
                                        
                                        if(!$hide)
                                        {
                                            header("location:display-seller.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Seller Account Deactivated Successfully!!!');window.location='display-seller.php';</script>";
                                        }
                                    }
                                    if(isset($_GET['uhid']))
                                    {
                                        $uhid = $_GET['uhid'];
                                        
                                        $unhide = mysqli_query($conn,"update seller_tbl set seller_status='1' where seller_id='{$uhid}';") or die(mysqli_error($conn));
                                        
                                        if(!$unhide)
                                        {
                                            header("location:display-seller.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Seller Account Activated Successfully!!!');window.location='display-seller.php';</script>";
                                        }
                                    }
                                    if(isset($_GET['uaid']))
                                    {
                                        $uaid = $_GET['uaid'];
                                        
                                        $uauth = mysqli_query($conn,"update seller_tbl set auth_status='0' where seller_id='{$uaid}';") or die(mysqli_error($conn));
                                        
                                        if(!$uauth)
                                        {
                                            header("location:display-seller.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Seller Account Unauthenticated Successfully!!!');window.location='display-seller.php';</script>";
                                        }
                                    }
                                    if(isset($_GET['aid']))
                                    {
                                        $aid = $_GET['aid'];
                                        
                                        $auth = mysqli_query($conn,"update seller_tbl set auth_status='1' where seller_id='{$aid}';") or die(mysqli_error($conn));
                                        
                                        if(!$auth)
                                        {
                                            header("location:display-seller.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Seller Account Authenticated Successfully!!!');window.location='display-seller.php';</script>";
                                        }
                                    }
                                    while($sellerrow = mysqli_fetch_array($select))
                                    {
                                        echo "<tr>";
                                        echo "<td>{$sellerrow['seller_id']}</td>";
                                        echo "<td>{$sellerrow['seller_email']}</td>";
                                        echo "<td>{$sellerrow['seller_name']}</td>";
                                        echo "<td>{$sellerrow['seller_phone']}</td>";
                                        echo "<td>{$sellerrow['seller_address1']},{$sellerrow['seller_address2']}</td>";
                                        echo "<td>{$sellerrow['seller_pincode']}</td>";
                                        echo "<td>{$sellerrow['seller_gstin']}</td>";
                                       if($sellerrow['seller_status']==0)
                                       {
                                        echo "<td> <a  class='label label-success' style='font-size:100% !important;font-weight: 300 !important;' href='display-seller.php?uhid={$sellerrow['seller_id']}'><i class='fa fa-eye'></i> Activate</a> </td>";
                                       }
                                       else
                                       {
                                        echo "<td><a class='label label-danger' style='font-size:100% !important;font-weight: 300 !important;' href='display-seller.php?hid={$sellerrow['seller_id']}'><i class='fa fa-eye-slash'></i> Deactivate</a></td>";
                                       }
                                        // echo "<td> <a href='display-seller.php?uhid={$sellerrow['seller_id']}'>Activate</a> | <a href='display-seller.php?hid={$sellerrow['seller_id']}'>Deactivate</a></td>";
                                       if($sellerrow['auth_status']==0)
                                       {
                                        echo "<td> <a class='label label-success' style='font-size:100% !important;font-weight: 300 !important;' href='display-seller.php?aid={$sellerrow['seller_id']}'><i class='fa fa-eye'></i> Authenticate</a></td>";
                                       }
                                       else
                                       {
                                        echo "<td><a class='label label-danger' style='font-size:100% !important;font-weight: 300 !important;' href='display-seller.php?uaid={$sellerrow['seller_id']}'><i class='fa fa-eye-slash'></i> Unauthenticate</a></td>";
                                       }
                                        // echo "<td> <a href='display-seller.php?aid={$sellerrow['seller_id']}'>Authenticate</a> | <a href='display-seller.php?uaid={$sellerrow['seller_id']}'>Unauthenticate</a></td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                     
                                    </tbody> 
                                    
                                </table>
                            <?php
                                $count = mysqli_num_rows($select);
                                echo $count." records found";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
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