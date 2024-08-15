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
        <div class="main-content" onload="window.location='display-complaint.php';">
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
                        <h3 class="title1">Complaint Details</h3>
                        <div class="panel-body widget-shadow">
                            <h4>Complaint Details: </h4>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Complaint Id</th> 
                                            <th>User Id</th>
                                            <th>User Name</th> 
                                            <th>Order Id</th>
                                            <th>Complaint Date-Time</th>
                                            <th>Complaint Status</th> 
                                            <th>Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    
                                    $select = mysqli_query($conn,"select * from complaint_tbl") or die(mysqli_error($conn));
                                    
                                    
                                    if(isset($_GET['iid']))
                                    {
                                        $iid = $_GET['iid'];
                                        
                                        $ignore = mysqli_query($conn,"update complaint_tbl set complaint_status='0' where complaint_id='{$iid}';") or die(mysqli_error($conn));
                                        
                                        if(!$ignore)
                                        {
                                            header("location:display-complaint.php");
                                        }
                                        else
                                        {
                                            echo "<script>alert('Complaint Ignored Successfully!!!');window.location='display-complaint.php';</script>";
                                        }
                                    }
                                    while($comprow = mysqli_fetch_array($select))
                                    {
                                        echo "<tr>";
                                        echo "<td>{$comprow['complaint_id']}</td>";
                                        echo "<td>{$comprow['user_id']}</td>";
                                        $user_id=$comprow['user_id'];
$select1 = mysqli_query($conn,"select * from user_tbl where user_id = $user_id") or die(mysqli_error($conn));
$userrow=mysqli_fetch_array($select1);
echo "<td>{$userrow['user_name']}</td>";
                                        echo "<td>{$comprow['order_id']}</td>";
                                        echo "<td>{$comprow['complaint_datetime']}</td>";
                                        
                                        if($comprow['complaint_status']==0)
                                        {
                                            echo "<td>Pending</td>";
                                        }
                                        else
                                        {
                                            echo "<td>Resolved</td>";
                                        }
                                        echo "<td> <a  class='label label-success' style='font-size:100% !important;font-weight: 300 !important;' href='resolve-complaint.php?rid={$comprow['complaint_id']}'><i class='fa fa-pencil'></i> Resolve</a> &nbsp; <a class='label label-danger' style='font-size:100% !important;font-weight: 300 !important;' href='display-complaint.php?iid={$comprow['complaint_id']}'><i class='fa fa-ban'></i> Ignore</a></td>";
                                        
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