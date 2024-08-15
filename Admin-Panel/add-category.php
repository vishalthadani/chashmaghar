<?php
require './class/dbclass.php';
$msg="";
if(isset($_POST['submit1']))
{
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    
    $query = mysqli_query($conn,"insert into category_tbl(category_name) values ('{$category}')");
    
    if($query)
    {
        $msg='<div class="alert alert-success" role="alert">
                <strong>Category Added Successfully!!!</strong>
              </div>';
    }
    else
    {
        $msg='<div class="alert alert-danger" role="alert">
                <strong>Duplicate entry for Catgeory Name is not Valid!!!</strong>
              </div>';
    }
}

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
				<div class="forms">
					<h3 class="title1">Category Form </h3>
					<div class=" form-grids row form-grids-right">
                                           <?php
                                        echo $msg;
                                        ?>
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Add Category Details :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="post" enctype="multipart/form-data"> 
                                                                    <div class="form-group"> 
                                                                        <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label> 
                                                                        <div class="col-sm-9"> 
                                                                            <input type="text" name="category" class="form-control" id="inputEmail3" placeholder="Enter Category Name" required> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-sm-offset-2"> 
                                                                        <button type="submit" name="submit1" class="btn btn-success">Add Category</button>
                                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                                        <button type="submit" class="btn btn-info" onclick="window.location='display-category.php';">View</button>
                                                                    </div> 
                                                                </form> 
							</div>
						</div>
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
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>