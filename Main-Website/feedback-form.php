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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <h4>Feedback</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./order-page.php">Orders</a>
                            <span>Feedback</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form" >
                <form action="#" name="form" id="form">
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <h4 class="coupon__code"><b> Feedback Form </b></h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p style="font-size: 20px;">Feedback Rating</p>
                                        <p class="stars">
                                            <span class="span1">
                                              <a class="star-1" href="#">1</a>
                                              <a class="star-2" href="#">2</a>
                                              <a class="star-3" href="#">3</a>
                                              <a class="star-4" href="#">4</a>
                                              <a class="star-5" href="#">5</a>
                                            </span>
                                        </p>
                                    </div><br/><br/>
                                    <div class="checkout__input">
                                        
                                        <p style="font-size: 20px;">Feedback Description<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span id="msg" style="text-align:right; font-size:15px; color:red;"></span></p>
                                        <textarea rows="10" cols="90" name="feedback" id="feedback"></textarea>
                                        <br/><br/>
                                        <button class="site-btn" onclick="validate(this.form);">Submit</button> &nbsp;&nbsp;&nbsp; <button class="site-btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
        <?php
            include './menu-header-section/footer-section.php';
        ?>
    <!-- Footer Section End -->
    
    <!-- Search Begin -->
        <?php
            include './menu-header-section/search-section.php';
        ?>
    <!-- Search End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
    <script>
        $('.stars a').on('click', function(){
        $('.stars span, .stars a').removeClass('active');

        $(this).addClass('active');
        $('.stars span').addClass('active');
      });
        
        function validate()
        {
            var compl = document.getElementById("feedback").value;
            if(compl.length<1)
            {
                document.getElementById("msg").innerHTML = "Feedback Description cannot be empty!";
            }
        }
    </script>
</body>
</html>