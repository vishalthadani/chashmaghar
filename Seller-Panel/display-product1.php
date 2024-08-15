<!-- <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                  Popover on top
                                                </button> -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">Demo modal </button>
                        <div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                                
                                                <div class="modal-body">
                                                        
                                                        <div class="row"> 
                                                                <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div> 
                                                        </div>
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
-->
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
                        <h3 class="title1">Product</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Product Details </h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product Id</th> 
                                        <th>Category Id</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Image 1</th>
                                        <th>Image 2</th> 
                                        <th>Image 3</th>
                                        <th>Frame Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Product Status</th>
                                        <th>Status Action</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody>

                                    <?php
                                    $select = mysqli_query($conn, "select * from product_tbl") or die(mysqli_error($conn));

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
                                    while ($productrow = mysqli_fetch_array($select)) {
                                        echo "<tr>";
                                        echo "<td>{$productrow['product_id']}</td>";
                                        echo "<td>{$productrow['category_id']}</td>";
                                        echo "<td>{$productrow['product_brand']}</td>";
                                        echo "<td>{$productrow['product_name']}</td>";
                                        echo "<td>
                                                        <a href='./images/rayban.png'><img style='width:25px;' src='{$productrow['product_img1']}'></a>
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
                                        /* ?>
                                          <td>
                                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">Demo modal </button>
                                          <div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                                          <div class="modal-dialog" role="document">
                                          <div class="modal-content">

                                          <img style='width:400px'; src='./images/rayban.png'>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Ok</button>
                                          </div>
                                          </div>
                                          </div>
                                          </td>
                                          <td></td>
                                          <td></td>
                                          <?php */
                                        echo "<td>{$productrow['frame_type']}</td>";
                                        echo "<td>{$productrow['product_price']}</td>";
                                        echo "<td>{$productrow['product_qty']}</td>";
                                        if ($productrow['product_status'] == 0) {
                                            echo "<td>Hidden</td>";
                                        } else {
                                            echo "<td>Unhidden</td>";
                                        }
                                        echo "<td> <a href='display-product.php?uhid={$productrow['product_id']}'><img style='width:25px;' src='images/unhide-icon.png'>Unhide</a> | <a href='display-product.php?hid={$productrow['product_id']}'><img style='width:25px;' src='images/hide-icon.png'>Hide</a></td>";

                                        echo "<td> <a href='display-product.php?did={$productrow['product_id']}'><img style='width:25px;' src='images/delete-icon.png'>Delete</a></td>";
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