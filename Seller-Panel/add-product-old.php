
<?php
require './class/dbclass.php';

// $editid = $_GET['eid'];
// if(!isset($_GET['eid']) || empty($_GET['eid']))
// {
//     header("location:editproduct.php");
// }

$select = mysqli_query($conn, "select * from product_tbl") or die(mysqli_error($conn));
$selectrow = mysqli_fetch_array($select);

$msg = "";
if (isset($_POST['submit1'])) {
    // $id = $_POST['id'];
    // $category = mysqli_real_escape_string($conn,$_POST['category']);
    // $query = mysqli_query($conn,"update category_tbl set category_name='{$category}' where category_id='{$id}';");
    // if($query)
    // {
    //     echo "<script>alert('Record Updated!!!');window.location='display-category.php';</script>";
    // }
    // else
    // {
    //     $msg='<div class="alert alert-danger" role="alert">
    //         <strong>Duplicate entry for Catgeory Name is not Valid!!!</strong>
    //           </div>';
    // }

    $proid = $_POST['pid'];
    $cid = $_POST['cid'];
    $pb = mysqli_real_escape_string($conn, $_POST['pbrand']);
    $pn = mysqli_real_escape_string($conn, $_POST['pname']);
    $tmpname = $_FILES['pimg1']['tmp_name'];
    $filename = $_FILES['pimg1']['name'];

    $tempname = $_FILES['pimg2']['tmp_name'];
    $filenamee = $_FILES['pimg2']['name'];

    $tmprname = $_FILES['pimg3']['tmp_name'];
    $filoename = $_FILES['pimg3']['name'];
    $frame = mysqli_real_escape_string($conn, $_POST['frame']);
    $price = $_POST['prs'];
    $qty = $_POST['pqty'];
    $stat = $_POST['pstat'];
    $sid = $_POST['sid'];

    if ($filename) {
        move_uploaded_file($tmpname, "images/" . $filename);
    }
    if ($filenamee) {
        move_uploaded_file($tmpname, "images/" . $filenamee);
    }

    if ($filoename) {
        move_uploaded_file($tmpname, "images/" . $filoename);
    }


    $que = mysqli_query($conn, "INSERT INTO `product_tbl`(`product_id`, `category_id`, `product_brand`, `product_name`, `product_img1`, `product_img2`, `product_img3`, `frame_type`, `product_price`, `product_qty`, `product_status`, `seller_id`) VALUES ('$proid','$cid','$pb','$pn','$filename','$filenamee','$filoename','$frame','$price','$qty','$stat','$sid')");

    if ($que) {
        echo "<script>alert('Record Updated!!!');window.location='add-product.php';</script>";
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
                                          <strong>Entry  not Valid!!!</strong>
                                         </div>';
    }
}
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
        <script src="js/jquery.validate.js"></script>
        <style>
            .error{
                color:red;
            }
        </style>
    </head> 
    <body class="cbp-spmenu-push">
        <script src="js/jquery.validate.js"></script>
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
                        <h3 class="title1">Product Form </h3>
                        <div class=" form-grids row form-grids-right">
                            <?php
                            echo $msg;
                            ?>
                            <div class="widget-shadow " data-example-id="basic-forms"> 
                                <div class="form-title">
                                    <h4>Add Product Details Here:</h4>
                                </div>
                                <div class="form-body">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form"> 

                                        <input type="hidden" name="id" value="<?php echo $selectrow['product_id'] ?>">
                                        <div class="form-group"> 


                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Category</label> 
                                            <div class="col-sm-9"> 
                                                <input type="number" name="cid" class="form-control" id="cid" value="<?php // echo $selectrow['category_id']  ?>" placeholder="Enter Category  ID"> 
<!--                                                <select class="selection-2" name="gender" id="gender">
                                                    <option value="" disabled selected>Select Your Gender</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="O">Others</option>
                                            </select>-->
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Brand</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="pbrand" class="form-control" id="pbrand" value="<?php // echo $selectrow['product_brand']  ?>" placeholder="Enter Product Brand"> 
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="pname" class="form-control" id="pname" value="<?php // echo $selectrow['product_name']  ?>" placeholder="Enter Product name"> 
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">Image 1</label> 
                                            <div class="col-sm-9"> 
                                                <input type="file" id="pimg1" class="form-control" name="pimg1"> 
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">Image 2</label> 
                                            <div class="col-sm-9"> 
                                                <input type="file" id="exampleInputFile" class="form-control" name="pimg2"> 
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label">Image 3</label> 
                                            <div class="col-sm-9"> 
                                                <input type="file" id="exampleInputFile" class="form-control" name="pimg3"> 
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label" onkeyup="validatenumber(this);">Product Price</label> 
                                            <div class="col-sm-9"> 
                                                <input type="number" name="prs" class="form-control" id="prs" value="<?php // echo $selectrow['product_price']  ?>" placeholder="Enter Product Price"> 
                                            </div><br/><br/>

                                            <label for="inputEmail3" class="col-sm-2 control-label" onkeyup="validatenumber(this);">Product Quantity</label> 
                                            <div class="col-sm-9"> 
                                                <input type="number" name="pqty" class="form-control" id="pqty" value="<?php // echo $selectrow['product_qty']  ?>" placeholder="Enter Product Quantity"> 
                                            </div> <br/><br/>

                                        </div>
                                        <div class="col-sm-offset-2"> 
                                            <button type="submit" name="submit1" class="btn btn-success">Add Product </button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <button type="submit" class="btn btn-info" onclick="window.location = 'editproduct.php';">View</button>
                                        </div> 
                                    </form> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <script>

                $("#form").validate({
                    rules: {
                        pbrand: {
                            required: true,
                            maxlength: 20
                        },

                        pname: {
                            required: true,
                            maxlength: 30
                        },

                        pimg1: {
                            required: true
                        },

                        prs: {
                            required: true
                        },

                        pqty: {
                            required: true
                        }
                    },

                    messages: {
                        pbrand: {
                            required: "Enter Product Brand.",
                            maxlength: "Product Barnd must be less than 20 characters."
                        },

                        pname: {
                            required: "Enter Product Name",
                            maxlength: "Product Name must be less than 30 characters"
                        },

                        pimg1: {
                            required: "Must Upload Image 1"
                        },

                        prs: {
                            required: "Enter Product Price"
                        },

                        pqty: {
                            required: "Enter Product Quantity."
                        }
                    }
                });

                function validatenumber(no)
                {
                    no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                }

            </script>
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