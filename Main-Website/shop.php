<?php
require '../Admin-Panel/class/dbclass.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../favicon.ico"/><title>Chashmaghar</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <?php
    include './menu-header-section/menu-section-log.php';
    ?>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php
    include './menu-header-section/header-section-log.php';
    ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <!-- <ul class="nice-scroll"> -->
                                                <ul>
                                                    <?php
                                                    $select = mysqli_query($conn,"select * from category_tbl where category_status=1") or die(mysqli_error($conn));
                                                    while($categoryrow = mysqli_fetch_array($select)){
                                                        $cat_name = $categoryrow['category_name'];
                                                        $select_count = mysqli_query($conn,"select * from product_tbl where product_status=1 and category_name='{$cat_name}'");
                                                        $count_cat = $rowcount=mysqli_num_rows($select_count);
                                                        echo"<li><a href='./shop.php'>{$cat_name} ({$count_cat})</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Ray-Ban</a></li>
                                                    <li><a href="#">Titan</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                    <li><a href="#">More+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Shops</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Krishna Optics</a></li>
                                                    <li><a href="#">Eye Baba</a></li>
                                                    <li><a href="#">Optic Ram</a></li>
                                                    <li><a href="#">More+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">₹50.00 - ₹200.00</a></li>
                                                    <li><a href="#">₹200.00 - ₹500.00</a></li>
                                                    <li><a href="#">₹500.00 - ₹1000.00</a></li>
                                                    <li><a href="#">₹1000.00 - ₹2000.00</a></li>
                                                    <li><a href="#">₹2000.00 - ₹5000.00</a></li>
                                                    <li><a href="#">₹5000.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">High To Low</option>
                                        <option value="">Popularity</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <?php
                $select = mysqli_query($conn,"select * from product_tbl") or die(mysqli_error($conn));
                $i=0;
                while($productrow = mysqli_fetch_array($select)){
                        $productimage = $productrow['product_img1'];
                echo"<div class='col-lg-4 col-md-6 col-sm-6'>
                    <div class='product__item'>
                    <a href='./shop-details.php'><div class='product__item__pic set-bg' data-setbg='{$productimage}'>    
                        </div></a>
                        <div class='product__item__text'>
                            <h6>{$productrow['product_name']}</h6>
                            <a href='./shopping-cart.php' class='add-cart'>+ Add To Cart</a>
                            <div class='rating'>
                                <i class='fa fa-star-o'></i>
                                <i class='fa fa-star-o'></i>
                                <i class='fa fa-star-o'></i>
                                <i class='fa fa-star-o'></i>
                                <i class='fa fa-star-o'></i>
                            </div>
                            <h5>₹{$productrow['product_price']}</h5>
                        </div>
                    </div>
                </div>";
                }
                ?>
            </div>
                    <!-- <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="./shop-details.php"><div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                </div></a>
                                <div class="product__item__text">
                                    <h6>Heritage Camo Spectacles</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>₹567.00</h5>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <?php
    include './menu-header-section/footer-section.php';
    ?>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>