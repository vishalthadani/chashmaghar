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
        <div class="main-content" onload="window.location='display-category.php';">
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
                        <h3 class="title1">Category Detials</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Category Details: </h4>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Category Id</th> 
                                            <th>Category Name</th> 
                                            <th>Status Action</th>
                                            <th>Category Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <p style="text-align:right;"><button class="btn btn-primary" onclick="window.location='add-category.php';">Add Category</button></p>
                                    <?php
                                    
                                    $select = mysqli_query($conn,"select * from category_tbl") or die(mysqli_error($conn));
                                    
                                    if(isset($_GET['did']))
                                    {
                                        $did = $_GET['did'];
                                        
                                        $delete = mysqli_query($conn,"delete from category_tbl where category_id = '{$did}'") or die(mysqli_error($conn));
                                        
                                        if(!$delete)
                                        {
                                            header("location:display-category.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Record Deleted!!!');window.location='display-category.php';</script>";
                                        }
                                    }
                                    if(isset($_GET['hid']))
                                    {
                                        $hid = $_GET['hid'];
                                        
                                        $hide = mysqli_query($conn,"update category_tbl set category_status='0' where category_id='{$hid}';") or die(mysqli_error($conn));
                                        
                                        if(!$hide)
                                        {
                                            header("location:display-category.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Category Hidden!!!');window.location='display-category.php';</script>";
                                        }
                                    }
                                    if(isset($_GET['uhid']))
                                    {
                                        $uhid = $_GET['uhid'];
                                        
                                        $unhide = mysqli_query($conn,"update category_tbl set category_status='1' where category_id='{$uhid}';") or die(mysqli_error($conn));
                                        
                                        if(!$unhide)
                                        {
                                            header("location:display-category.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Category Unhidden!!!');window.location='display-category.php';</script>";
                                        }
                                    }
                                    while($categoryrow = mysqli_fetch_array($select))
                                    {
                                        echo "<tr>";
                                        echo "<td>{$categoryrow['category_id']}</td>";
                                        echo "<td>{$categoryrow['category_name']}</td>";
                                        if($categoryrow['category_status']==0)
                                        {
                                            echo "<td> <a  class='label label-success' style='font-size:100% !important;font-weight: 300 !important;' href='display-category.php?uhid={$categoryrow['category_id']}'><i class='fa fa-eye'></i> Unhide</a> </td>";
                                        }
                                        else
                                        {
                                            echo "<td><a class='label label-warning' style='font-size:100% !important;font-weight: 300 !important;' href='display-category.php?hid={$categoryrow['category_id']}'><i class='fa fa-eye-slash'></i> Hide</a></td>";
                                        }
                                        echo "<td> <a class='label label-info' style='font-size:100% !important;font-weight: 300 !important;' href='edit-category.php?eid={$categoryrow['category_id']}'><i class='fa fa-pencil'></i> Edit</a> &nbsp; <a class='label label-danger' style='font-size:100% !important;font-weight: 300 !important;' href='display-category.php?did={$categoryrow['category_id']}'><i class='fa fa-trash-o'></i> Delete</a></td>";
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