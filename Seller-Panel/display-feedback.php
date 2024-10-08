<?php
require './class/dbclass.php';
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
        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->
    </head> 
    <body class="cbp-spmenu-push">
        <div class="main-content" onload="window.location='display-feedback.php';">
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
                        <h3 class="title1">Feedback Details</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Feedback Details: </h4>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Feedback Id</th> 
                                            <th>User Id</th>
                                            <th>User Name</th>
                                            <th>Product Id</th>
                                            <th>Order Id</th>
                                            <th>Rating</th>
                                            <th>Feedback</th>
                                            <th>Date-Time</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    
                                    $select = mysqli_query($conn,"select * from feedback_tbl") or die(mysqli_error($conn));
                                    
                                    
                                    if(isset($_GET['hid']))
                                    {
                                        $hid = $_GET['hid'];
                                        
                                        $hide = mysqli_query($conn,"update feedback_tbl set feedback_status='0' where feedback_id='{$hid}';") or die(mysqli_error($conn));
                                        
                                        if(!$hide)
                                        {
                                            header("location:display-feedback.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Feedback Hidden Successfully!!!');window.location='display-feedback.php';</script>";
                                        }
                                    }
                                    if(isset($_GET['uhid']))
                                    {
                                        $uhid = $_GET['uhid'];
                                        
                                        $unhide = mysqli_query($conn,"update feedback_tbl set feedback_status='1' where feedback_id='{$uhid}';") or die(mysqli_error($conn));
                                        
                                        // if(!$unhide)
                                        // {
                                        //     header("location:display-feedback.php");
                                        // }
                                        // else
                                        // {
                                        //     echo "<script>alert('Feedback Unhidden Successfully!!!');window.location='display-feedback.php';</script>";
                                        // }
                                    }
                                    while($feedrow = mysqli_fetch_array($select))
                                    {
                                        echo "<tr>";
                                        echo "<td>{$feedrow['feedback_id']}</td>";
                                        echo "<td>{$feedrow['user_id']}</td>";
                                        $user_id=$feedrow['user_id'];
$select1 = mysqli_query($conn,"select * from user_tbl where user_id = $user_id") or die(mysqli_error($conn));
$userrow=mysqli_fetch_array($select1);
echo "<td>{$userrow['user_name']}</td>";
                                        echo "<td>{$feedrow['product_id']}</td>";
                                        echo "<td>{$feedrow['order_id']}</td>";
                                        echo "<td>{$feedrow['feedback_rating']}</td>";
                                        echo "<td>{$feedrow['feedback_desc']}</td>";
                                        echo "<td>{$feedrow['feedback_datetime']}</td>";
                                        
                                        // if($feedrow['feedback_status']==0)
                                        // {
                                        //     echo "<td>Hidden</td>";
                                        // }
                                        // else
                                        // {
                                        //     echo "<td>Unhidden</td>";
                                        // }
                                        // echo "<td> <a href='display-feedback.php?hid={$feedrow['feedback_id']}'><img style='width:25px;' src='images/hide-icon.png'>Hide</a> | <a href='display-feedback.php?uhid={$feedrow['feedback_id']}'><img style='width:25px;' src='images/unhide-icon.png'>Unhide</a></td>";
                                        
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