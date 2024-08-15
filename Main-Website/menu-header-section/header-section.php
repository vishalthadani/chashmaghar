<?php
require '../Admin-Panel/class/dbclass.php';
?>
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Give Your Eyes the Care they Deserve. See Clear, See Better.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="Login-Page-main.php">Sign in</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Sign up <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li><a href="User-Register-main.php">As User</a></li>
                                    <li><a href="Seller-Register-main.php">As Seller</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" height="56px" width="260px" alt="Chashmaghar Logo"></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <!-- <li class="active"><a href="./index.php">Home</a></li> -->
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./shop.php">Category</a>
                                <ul class="dropdown">
                                    <?php
                                    $select = mysqli_query($conn,"select * from category_tbl where category_status=1") or die(mysqli_error($conn));
                                    while($categoryrow = mysqli_fetch_array($select)){
                                        $cat_name = $categoryrow['category_name'];
                                        echo"<li><a href='./shop.php'>{$cat_name}</a></li>";
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="./shop.php">Products</a></li>
                            <li><a href="./index.php#shop">Shops</a></li>
                            <li><a href="./idex.php#about">About Us</a></li>
                            <li><a href="#footer">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        
                        <a href="./Login-Page-main.php"><img src="img/icon/cart.jpg" height="18px" width="18px" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="price">CART</div></a>
                        
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>