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
                    <div class="tables">
                        <h3 class="title1">Order Details</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Order Details:</h4>
                            <table class="table table-hover"> 
                                <thead> 
                                    <tr>
                                        <th>Order Id</th> 
                                        <th>User Id</th>
                                        <th>User Name</th> 
                                        <th>Order Date - Time</th>
                                        <th>Order Status</th>
                                        <th>Order Total</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <?php
                                    $que1 = ("SELECT * FROM `order_mst` WHERE 1");
                                    $select = mysqli_query($conn, $que1) or die(mysqli_error($conn));
                                    
                                    if(isset($_GET['oid']))
                                    {
                                        $oid = $_GET['oid'];
                                        
                                        $orderstatus = mysqli_query($conn,"update order_mst set order_status='1' where order_id='{$oid}';") or die(mysqli_error($conn));
                                        $payment = mysqli_query($conn, "update payment_tbl set payment_status='1' where order_id='{$oid}'") or die(mysqli_error($conn));
                                        if(!($orderstatus) and ($payment))
                                        {
                                            header("location:order.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Order Delivered!!!');window.location='order.php';</script>";
                                        }
                                    }
                                    
                                    while ($ordrow = mysqli_fetch_array($select)) {
                                        echo "<tr>";
                                        echo "<td>{$ordrow['order_id']}</td>";
                                        echo "<td>{$ordrow['user_id']}</td>";
                                        $user_id = $ordrow['user_id'];
                                        $select1 = mysqli_query($conn, "select * from user_tbl where user_id = $user_id") or die(mysqli_error($conn));
                                        $userrow = mysqli_fetch_array($select1);
                                        echo "<td>{$userrow['user_name']}</td>";
                                        echo "<td>{$ordrow['order_datetime']}</td>";
                                        if ($ordrow['order_status'] == 0) {
                                            echo "<td><a  class='label label-warning' style='font-size:100% !important;font-weight: 300 !important;' href='order.php?oid={$ordrow['order_id']}'><i class='fa fa-pencil'></i> Pending...</a></td>";
                                        } else {
                                            //echo "<td>Delivered</td>";
                                            echo "<td><a  class='label label-success' style='font-size:100% !important;font-weight: 300 !important;'><i class='fa fa-truck'></i> Delivered</a></td>";
                                        }
                                        echo "<td>{$ordrow['order_total']}</td>";
                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody> 
                            </table>
                                    <?php
                                    $count = mysqli_num_rows($select);
                                    echo $count . " records found";
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