<?php
require './class/dbclass.php';
$select = mysqli_query($conn, "select category_name from category_tbl") or die(mysqli_error($conn));
$msg = "";
if (!isset($_POST['submit1'])) {
    
} else {
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $product_name = $_POST['pname'];
    $frame_type = $_POST['frame'];
    $price = $_POST['price'];
    $quantity = $_POST['qty'];
//    $result = mysqli_query($conn, "select category_id from category_tbl where category_name = '$category'");
//    $category_id = intval(mysqli_fetch_array($result));

    // $target_dir = "images/";
    // $target_file = $target_dir . basename($_FILES["image1"]["name"]);
//    $target_dir = "./images/";
//    $target_file = $target_dir . basename($_FILES["image1"]["name"]);
//    $uploadOk = 1;
//    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//
//// Check if image file is a actual image or fake image
//    if (isset($_POST["submit"])) {
//        $check = getimagesize($_FILES["image1"]["tmp_name"]);
//        if ($check !== false) {
//            echo "File is an image - " . $check["mime"] . ".";
//            $uploadOk = 1;
//        } else {
//            echo "File is not an image.";
//            $uploadOk = 0;
//        }
//    }
//
//// Check if file already exists
//    if (file_exists($target_file)) {
//        echo "Sorry, file already exists.";
//        $uploadOk = 0;
//    }
//
//// Check file size
//    if ($_FILES["image1"]["size"] > 500000) {
//        echo "Sorry, your file is too large.";
//        $uploadOk = 0;
//    }
//
//// Check if $uploadOk is set to 0 by an error
//    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//    } else {
//        if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
//            echo "The file " . htmlspecialchars(basename($_FILES["image1"]["name"])) . " has been uploaded.";
//        } else {
//            echo "Sorry, there was an error uploading your file.";
//        }
//    }

    $filename1 = addslashes($_FILES['image1']['name']);
    $tmpname1 = addslashes($_FILES['image1']['tmp_name']);
    date_default_timezone_set("Asia/calcutta");
    $currentdt = (string) (date("YmdHis"));
    $extension = pathinfo($filename1, PATHINFO_EXTENSION);
    $image1_path = "1".$currentdt . "." . $extension;
    if ($filename1) {
        move_uploaded_file($_FILES['image1']['tmp_name'], "../Main-website/img/product/$image1_path");
    }
    
    $filename2 = addslashes($_FILES['image2']['name']);
    $tmpname2 = addslashes($_FILES['image2']['tmp_name']);
    date_default_timezone_set("Asia/calcutta");
    $currentdt = (string) (date("YmdHis"));
    $extension = pathinfo($filename2, PATHINFO_EXTENSION);
    $image2_path = "2".$currentdt . "." . $extension;
    if ($filename2) {
        move_uploaded_file($_FILES['image2']['tmp_name'], "../Main-website/img/product/$image2_path");
    }
    
    $filename3 = addslashes($_FILES['image3']['name']);
    $tmpname3 = addslashes($_FILES['image3']['tmp_name']);
    date_default_timezone_set("Asia/calcutta");
    $currentdt = (string) (date("YmdHis"));
    $extension = pathinfo($filename3, PATHINFO_EXTENSION);
    $image3_path = "3".$currentdt . "." . $extension;
    if ($filename3) {
        move_uploaded_file($_FILES['image3']['tmp_name'], "../Main-website/img/product/$image3_path");
    }


//    $image1_add = pathinfo($target_file, PATHINFO_ALL);
//    $target_file = $target_dir . basename($_FILES["image2"]["name"]);
//    $image2_add = pathinfo($target_file, PATHINFO_ALL);
//    $target_file = $target_dir . basename($_FILES["image3"]["name"]);
//    $image3_add = pathinfo($target_file, PATHINFO_ALL);

    $query = mysqli_query($conn, "insert into product_tbl(category_name, product_brand, product_name, product_img1, product_img2, product_img3, frame_type, product_price, product_qty) values ('{$category}','{$brand}','{$product_name}','../Main-website/img/product/$image1_path','../Main-website/img/product/$image2_path','../Main-website/img/product/$image3_path','{$frame_type}',$price,$quantity)");

    if ($query) {
        $msg = '<div class="alert alert-success" role="alert">
                <strong>Product Added Successfully!!!</strong>
              </div>';
    }
    else
    {
        $msg='<div class="alert alert-danger" role="alert">
                <strong>Duplicate entry for Product is not Valid!!!</strong>
              </div>';
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="../favicon.ico"/><link rel="icon" type="image/png" href="../favicon.ico"/><title>Chashmaghar Seller Panel</title>
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
                                    <h4>Add Product Details :</h4>
                                </div>
                                <div class="form-body">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" name="form" id="form"> 
                                        <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label> 
                                            <div class="col-sm-9">
                                                <select name="category" id="selector1" class="form-control">
                                                    <option selected disabled>Select Product Category</option>
                                                    <?php
                                                    while ($productrow = mysqli_fetch_array($select)) {
                                                        echo"<option>{$productrow['category_name']}</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Brand</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="brand" class="form-control" id="brand" placeholder="Enter Product Brand Name" required> 
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter Product Name" required> 
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Image 1</label> 
                                            <div class="col-sm-9"> 
                                                <input type="file" id="exampleInputFile" class="form-control" accept="image/png,image/jpg,image/jpeg" name="image1">
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Image 2</label> 
                                            <div class="col-sm-9"> 
                                                <input type="file" id="exampleInputFile" class="form-control" name="image2"> 
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Image 3</label> 
                                            <div class="col-sm-9"> 
                                                <input type="file" id="exampleInputFile" class="form-control" name="image3"> 
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Frame Type</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="frame" id="frame" class="form-control" id="inputEmail3" placeholder="Enter Frame Type" required> 
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Price (in Rs.)</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="price" id="price" class="form-control" id="inputEmail3" placeholder="Enter Product Price (in Rs.)" required> 
                                            </div>
                                            <br><br>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" name="qty" id="gty" class="form-control" id="inputEmail3" placeholder="Enter Product Quantity" required> 
                                            </div>     
                                        </div>
                                        <div class="col-sm-offset-2"> 
                                            <button type="submit" name="submit1" class="btn btn-success">Add Product</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <button type="submit" class="btn btn-info" onclick="window.location = 'display-product.php';">View</button>
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
                        category: {
                            required: true
                        },

                        brand: {
                            required: true,
                            maxlength: 20
                        },

                        pname: {
                            required: true,
                            maxlength: 30
                        },

                        image1: {
                            required: true
                        },

                        price: {
                            required: true
                        },

                        qty: {
                            required: true
                        }
                    },

                    messages: {
                        category: {
                            required: "Please Select Product Catgeory."
                        },
                        brand: {
                            required: "Enter Product Brand.",
                            maxlength: "Product Barnd must be less than 20 characters."
                        },

                        pname: {
                            required: "Enter Product Name",
                            maxlength: "Product Name must be less than 30 characters"
                        },

                        image1: {
                            required: "Must Upload Image 1"
                        },

                        price: {
                            required: "Enter Product Price"
                        },

                        qty: {
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