<?php
require './class/dbclass.php';

$compid = $_GET['rid'];
if(!isset($_GET['rid']) || empty($_GET['rid']))
{
    header("location:display-complaint.php");
}

$select = mysqli_query($conn,"select * from complaint_tbl where complaint_id='{$compid}'") or die(mysqli_error($conn));
$selectrow = mysqli_fetch_array($select);


$msg="";
if(isset($_POST['submit1']))
{
    $id = $_POST['id'];
    $resolve = mysqli_real_escape_string($conn,$_POST['resolve']);
    
    $query = mysqli_query($conn,"update complaint_tbl set complaint_resolve='{$resolve}' where complaint_id='{$id}';") or die(mysqli_error($conn));
    $status = mysqli_query($conn,"update complaint_tbl set complaint_status='1' where complaint_id='{$id}';") or die(mysqli_error($conn));
    if(!$query && !$status)
    {
        header("location:display-complaint.php");
    }
    else
    {
        echo "<script>alert('Complaint Resolved Successfully!!!');window.location='display-complaint.php';</script>";
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
					<h3 class="title1">Complaint Form </h3>
					<div class=" form-grids row form-grids-right">
                                           <?php
                                        echo $msg;
                                        ?>
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Complaint Details :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="post" enctype="multipart/form-data"> 
                                                                    <div class="form-group">
                                                                        <label for="inputEmail3" class="col-sm-2 control-label">Complaint Id</label> 
                                                                        <div class="col-sm-9"> 
                                                                            <input type="text" name="id" value="<?php echo $selectrow['complaint_id']?>" readonly="readonly">
                                                                        </div> 
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <label for="inputEmail3" class="col-sm-2 control-label">User Id</label> 
                                                                        <div class="col-sm-9"> 
                                                                            <input type="text" name="userid" value="<?php echo $selectrow['user_id']?>" readonly="readonly"> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <label for="inputEmail3" class="col-sm-2 control-label">Order Id</label> 
                                                                        <div class="col-sm-9"> 
                                                                            <input type="text" name="orderid" value="<?php echo $selectrow['order_id']?>" readonly="readonly"> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <label for="inputEmail3" class="col-sm-2 control-label">Complaint Date-Time</label> 
                                                                        <div class="col-sm-9"> 
                                                                            <input type="text" name="datetime" value="<?php echo $selectrow['complaint_datetime']?>" readonly="readonly"> 
                                                                        </div> 
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <label for="txtarea1" class="col-sm-2 control-label">Complaint Description</label>
									<div class="col-sm-8">
                                                                            <textarea name="desc" id="txtarea1" cols="50" rows="10" class="form-control1" readonly="readonly"><?php echo $selectrow['complaint_desc']?></textarea>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <label for="txtarea1" class="col-sm-2 control-label">Response</label>
									<div class="col-sm-8">
                                                                            <textarea name="resolve" rows="2" class="form-control1 control2" placeholder="Enter Response Message :" required><?php echo $selectrow['complaint_resolve']?></textarea>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-sm-offset-2"> 
                                                                        <button type="submit" name="submit1" class="btn btn-success">Submit</button>
                                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                                        <button type="submit" class="btn btn-info" onclick="window.location='display-complaint.php';">View</button>
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