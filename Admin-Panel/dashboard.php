<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
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
                    <div class="row-one">
                        <div class="col-md-4 widget">
                            <div class="stats-left ">
                                <h5>Total</h5>
                                <h4>Customers</h4>
                            </div>
                            <div class="stats-right">
                                <label>
                                    <?php
                                    $select1 = mysqli_query($conn, "select * from user_tbl") or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($select1);
                                    echo $count;
                                    ?>
                                </label>
                            </div>
                            <div class="clearfix"> </div>	
                        </div>
                        <div class="col-md-4 widget states-mdl">
                            <div class="stats-left">
                                <h5>Total</h5>
                                <h4>Sellers</h4>
                            </div>
                            <div class="stats-right">
                                <label>
                                    <?php
                                    $select2 = mysqli_query($conn, "select * from seller_tbl") or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($select2);
                                    echo $count;
                                    ?>
                                </label>
                            </div>
                            <div class="clearfix"> </div>	
                        </div>
                        <div class="col-md-4 widget states-last">
                            <div class="stats-left">
                                <h5>Total</h5>
                                <h4>Products</h4>
                            </div>
                            <div class="stats-right">
                                <label>
                                    <?php
                                    $select3 = mysqli_query($conn, "select * from product_tbl") or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($select3);
                                    echo $count;
                                    ?>
                                </label>
                            </div>
                            <div class="clearfix"> </div>	
                        </div>
                        <div class="clearfix"> </div>	
                    </div>
                    <div class="charts">
                        <div class="col-md-4 charts-grids widget">
                            <h4 class="title">Customer Stats</h4>
                            <canvas id="pie1" height="300" width="400"> </canvas><br><br>
                            <p><i class="fa fa-square nav_icon" style="color:#031e45"></i>Active Customers</p>
                            <p><i class="fa fa-square nav_icon" style="color:#436b95"></i>Inactive Customers</p>
                        </div>
                        <div class="col-md-4 charts-grids widget states-mdl">
                            <h4 class="title">Seller Stats</h4>
                            <canvas id="pie2" height="300" width="400"> </canvas><br><br>
                            <p><i class="fa fa-square nav_icon" style="color:#bd841b"></i>Active Sellers</p>
                            <p><i class="fa fa-square nav_icon" style="color:#F2B33F"></i>Inactive Sellers</p>
                        </div>
                        <div class="col-md-4 charts-grids widget">
                            <h4 class="title">Product Stats</h4>
                            <canvas id="pie3" height="300" width="400"> </canvas><br><br>
                            <p><i class="fa fa-square nav_icon" style="color:#008b8b"></i>Unhidden Products</p>
                            <p><i class="fa fa-square nav_icon" style="color:#0abab5"></i>Hidden Products</p>
                        </div>
                        <div class="clearfix"> </div>
                        <script>
            var pieData1 = [
                {
                    value:
<?php
$select4 = mysqli_query($conn, "select * from user_tbl where user_status='1'") or die(mysqli_error($conn));
$count = mysqli_num_rows($select4);
echo $count;
?>,
                    color: "#031e45",
                    label: "Active"
                },
                {
                    value:
<?php
$select5 = mysqli_query($conn, "select * from user_tbl where user_status='0'") or die(mysqli_error($conn));
$count = mysqli_num_rows($select5);
echo $count;
?>,
                    color: "#436b95",
                    label: "Inactive"
                },
            ];
            var pieData2 = [
                {
                    value:
<?php
$select6 = mysqli_query($conn, "select * from seller_tbl where seller_status='1'") or die(mysqli_error($conn));
$count = mysqli_num_rows($select6);
echo $count;
?>,
                    color: "#bd841b",
                    label: "Active"
                },
                {
                    value:
<?php
$select7 = mysqli_query($conn, "select * from seller_tbl where seller_status='0'") or die(mysqli_error($conn));
$count = mysqli_num_rows($select7);
echo $count;
?>,

                    color: "#F2B33F",
                    label: "Inactive"
                },
            ]
            var pieData3 = [
                {
                    value:
<?php
$select8 = mysqli_query($conn, "select * from product_tbl where product_status='1'") or die(mysqli_error($conn));
$count = mysqli_num_rows($select8);
echo $count;
?>,
                    color: "#008b8b",
                    label: "Unhidden"
                },
                {
                    value:
<?php
$select9 = mysqli_query($conn, "select * from product_tbl where product_status='0'") or die(mysqli_error($conn));
$count = mysqli_num_rows($select9);
echo $count;
?>,
                    color: "#0abab5",
                    label: "Hidden"
                },
                        // {
                        // 	value : 60,
                        // 	color : "rgba(88, 88, 88,1)",
                        // 	label: "Product 3"
                        // },
                        // {
                        // 	value : 40,
                        // 	color : "#1565a8",
                        // 	label: "Product 4"
                        // }

            ];

            new Chart(document.getElementById("pie1").getContext("2d")).Pie(pieData1);
            new Chart(document.getElementById("pie2").getContext("2d")).Pie(pieData2);
            new Chart(document.getElementById("pie3").getContext("2d")).Pie(pieData3);

                        </script>

                    </div>
<!--                                        <div class="row">
                                            <div class="col-md-4 stats-info widget">
                                                <div class="stats-title">
                                                    <h4 class="title">Browser Stats</h4>
                                                </div>
                                                <div class="stats-body">
                                                    <ul class="list-unstyled">
                                                        <li>GoogleChrome <span class="pull-right">85%</span>  
                                                            <div class="progress progress-striped active progress-right">
                                                                <div class="bar green" style="width:85%;"></div> 
                                                            </div>
                                                        </li>
                                                        <li>Firefox <span class="pull-right">35%</span>  
                                                            <div class="progress progress-striped active progress-right">
                                                                <div class="bar yellow" style="width:35%;"></div>
                                                            </div>
                                                        </li>
                                                        <li>Internet Explorer <span class="pull-right">78%</span>  
                                                            <div class="progress progress-striped active progress-right">
                                                                <div class="bar red" style="width:78%;"></div>
                                                            </div>
                                                        </li>
                                                        <li>Safari <span class="pull-right">50%</span>  
                                                            <div class="progress progress-striped active progress-right">
                                                                <div class="bar blue" style="width:50%;"></div>
                                                            </div>
                                                        </li>
                                                        <li>Opera <span class="pull-right">80%</span>  
                                                            <div class="progress progress-striped active progress-right">
                                                                <div class="bar light-blue" style="width:80%;"></div>
                                                            </div>
                                                        </li>
                                                        <li class="last">Others <span class="pull-right">60%</span>  
                                                            <div class="progress progress-striped active progress-right">
                                                                <div class="bar orange" style="width:60%;"></div>
                                                            </div>
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8 stats-info stats-last widget-shadow">
                                                <table class="table stats-table ">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO</th>
                                                            <th>PRODUCT</th>
                                                            <th>STATUS</th>
                                                            <th>PROGRESS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Lorem ipsum</td>
                                                            <td><span class="label label-success">In progress</span></td>
                                                            <td><h5>85% <i class="fa fa-level-up"></i></h5></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Aliquam</td>
                                                            <td><span class="label label-warning">New</span></td>
                                                            <td><h5>35% <i class="fa fa-level-up"></i></h5></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Lorem ipsum</td>
                                                            <td><span class="label label-danger">Overdue</span></td>
                                                            <td><h5  class="down">40% <i class="fa fa-level-down"></i></h5></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Aliquam</td>
                                                            <td><span class="label label-info">Out of stock</span></td>
                                                            <td><h5>100% <i class="fa fa-level-up"></i></h5></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Lorem ipsum</td>
                                                            <td><span class="label label-success">In progress</span></td>
                                                            <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Aliquam</td>
                                                            <td><span class="label label-warning">New</span></td>
                                                            <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>-->
                    <!--                    <div class="row">
                                            <div class="col-md-8 map widget-shadow">
                                                <h4 class="title">Visitors Map </h4>
                                                <div class="map_container"><div id="vmap" style="width: 100%; height: 354px;"></div></div>
                                                map js
                                                <link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
                                                <script src="js/jquery.vmap.js"></script>
                                                <script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
                                                <script src="js/jquery.vmap.world.js" type="text/javascript"></script>
                                                <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#vmap').vectorMap({
                                        map: 'world_en',
                                        backgroundColor: '#fff',
                                        color: '#696565',
                                        hoverOpacity: 0.8,
                                        selectedColor: '#696565',
                                        enableZoom: true,
                                        showTooltip: true,
                                        values: sample_data,
                                        scaleColors: ['#585858', '#696565'],
                                        normalizeFunction: 'polynomial'
                                    });
                                });
                                                </script>
                                                 //map js 
                                                 </div> 
                                                <div class="col-md-4 social-media widget-shadow">
                                                    <div class="wid-social twitter">
                                                        <div class="social-icon">
                                                            <i class="fa fa-twitter text-light icon-xlg "></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">3.1 K</h3>
                                                            <h4 class="counttype text-light">Tweets</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social google-plus">
                                                        <div class="social-icon">
                                                            <i class="fa fa-google-plus text-light icon-xlg "></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">523</h3>
                                                            <h4 class="counttype text-light">Circles</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social facebook">
                                                        <div class="social-icon">
                                                            <i class="fa fa-facebook text-light icon-xlg "></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">1.06K</h3>
                                                            <h4 class="counttype text-light">Likes</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social dribbble">
                                                        <div class="social-icon">
                                                            <i class="fa fa-dribbble text-light icon-xlg "></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">1.6 K</h3>
                                                            <h4 class="counttype text-light">Subscribers</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social vimeo">
                                                        <div class="social-icon">
                                                            <i class="fa fa-vimeo-square text-light icon-xlg"> </i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">2.1 m</h3>
                                                            <h4 class="counttype text-light">Contacts</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social xing">
                                                        <div class="social-icon">
                                                            <i class="fa fa-xing text-light icon-xlg "></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">2525</h3>
                                                            <h4 class="counttype text-light">Connections</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social flickr">
                                                        <div class="social-icon">
                                                            <i class="fa fa-android text-light icon-xlg"></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">1221</h3>
                                                            <h4 class="counttype text-light">Media</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social yahoo">
                                                        <div class="social-icon">
                                                            <i class="fa fa-yahoo text-light icon-xlg"> Y!</i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">2525</h3>
                                                            <h4 class="counttype text-light">Connections</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social rss">
                                                        <div class="social-icon">
                                                            <i class="fa fa-rss text-light icon-xlg"></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">1523</h3>
                                                            <h4 class="counttype text-light">Subscribers</h4>
                                                        </div>
                                                    </div>
                                                    <div class="wid-social youtube">
                                                        <div class="social-icon">
                                                            <i class="fa fa-youtube text-light icon-xlg"></i>
                                                        </div>
                                                        <div class="social-info">
                                                            <h3 class="number_counter bold count text-light start_timer counted">1523</h3>
                                                            <h4 class="counttype text-light">Subscribers</h4>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>-->
<!--                    <div class="row calender widget-shadow">
                        <h4 class="title">Calender</h4>
                        <div class="cal1">

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>-->
                <br><br><br><br>
            </div>
            <!--footer-->
            <?php include './themepart/footer.php'; ?>
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