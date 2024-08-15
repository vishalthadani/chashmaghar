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
        <div class="main-content" onload="window.location = 'display-product.php';">
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
                        <h3 class="title1">Product Details</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Product Details: </h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product Id</th> 
                                        <th>Category Name</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Image 3</th>
                                        <th>Frame Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status Action</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody>

                                    <?php
                                    $select = mysqli_query($conn, "select * from product_tbl where seller_id=2") or die(mysqli_error($conn));

                                    if (isset($_GET['did'])) {
                                        $did = $_GET['did'];

                                        $delete = mysqli_query($conn, "delete from product_tbl where product_id = '{$did}'") or die(mysqli_error($conn));

                                        if (!$delete) {
                                            header("location:display-product.php");
                                        } else {
                                            echo "<script>alert('Record Deleted!!!');window.location='display-product.php';</script>";
                                        }
                                    }
                                    if (isset($_GET['hid'])) {
                                        $hid = $_GET['hid'];

                                        $hide = mysqli_query($conn, "update product_tbl set product_status='0' where product_id='{$hid}';") or die(mysqli_error($conn));

                                        if (!$hide) {
                                            header("location:display-product.php");
                                        } else {
                                            echo "<script>alert('Product Hidden Successfully!!!');window.location='display-product.php';</script>";
                                        }
                                    }
                                    if (isset($_GET['uhid'])) {
                                        $uhid = $_GET['uhid'];

                                        $unhide = mysqli_query($conn, "update product_tbl set product_status='1' where product_id='{$uhid}';") or die(mysqli_error($conn));

                                        if (!$unhide) {
                                            header("location:display-product.php");
                                        } else {
                                            echo "<script>alert('Product Unhidden Successfully!!!');window.location='display-product.php';</script>";
                                        }
                                    }
                                    $i = 1;
                                    while ($productrow = mysqli_fetch_array($select)) {
                                        echo "<tr>";
                                        echo "<td>{$productrow['product_id']}</td>";
                                        //$category_name = $productrow['category_name'];
//                                        $select1 = mysqli_query($conn, "select * from category_tbl where category_id = $category_id") or die(mysqli_error($conn));
//                                        $categoryrow = mysqli_fetch_array($select1);
                                        echo "<td>{$productrow['category_name']}</td>";
                                        echo "<td>{$productrow['product_brand']}</td>";
                                        echo "<td>{$productrow['product_name']}</td>";
                                        echo "<td>
                                            <div class='bs-example-tooltips'>
                                                    <button type'button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='top' data-content='<img style=width:400px; src={$productrow['product_img1']}>'>
                                                        <img style='width:25px;' src='{$productrow['product_img1']}'>
                                                    </button>
                                            </div>        
                                                </td>";
                                        echo "<td>
                                            <div class='bs-example-tooltips'>
                                                    <button type'button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='top' data-content='<img style=width:400px; src={$productrow['product_img2']}>'>
                                                        <img style='width:25px;' src='{$productrow['product_img2']}'>
                                                    </button>
                                            </div>        
                                                </td>";
                                        echo "<td>
                                            <div class='bs-example-tooltips'>
                                                    <button type'button' class='btn btn-default' data-container='body' data-toggle='popover' data-placement='top' data-content='<img style=width:400px; src={$productrow['product_img3']}>'>
                                                        <img style='width:25px;' src='{$productrow['product_img3']}'>
                                                    </button>
                                            </div>        
                                                </td>";
                                        $i++;

                                        echo "<td>{$productrow['frame_type']}</td>";
                                        echo "<td>{$productrow['product_price']}</td>";
                                        echo "<td>{$productrow['product_qty']}</td>";
                                        
                                        if ($productrow['product_status'] == 0) {
                                            echo "<td> <a  class='label label-success' style='font-size:100% !important;font-weight: 300 !important;' href='display-product.php?uhid={$productrow['product_id']}'><i class='fa fa-eye nav_icon'></i>Unhide</a> </td>";
                                        } else {
                                            echo "<td> <a  class='label label-warning' style='font-size:100% !important;font-weight: 300 !important;' href='display-product.php?hid={$productrow['product_id']}'><i class='fa fa-eye-slash nav_icon'></i>Hide</a> </td>";
                                        }

                                        echo "<td> <a  class='label label-danger' style='font-size:100% !important;font-weight: 300 !important;' href='display-product.php?did={$productrow['product_id']}'><i class='fa fa-trash-o nav_icon'></i>Delete</a></td>";
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