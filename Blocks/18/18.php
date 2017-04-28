<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/18.less', 'css/18.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/18.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <!-------------Header-------------->
        <div class="type-18-header">
            <!----------Begin Header TopBar---------->
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-left">
                        <ul class="list-inline">
                            <li class="icon-user"><a href="#"><img src="images/icon-1.png" alt=""/> <span>Login</span></a></li>             
                            <li class="icon-form"><a href="#"><img src="images/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> <span>support@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="list-inline">
                            <li class="hidden-xs"><a href="#">About</a></li>
                            <li class="hidden-xs"><a href="#">Blog</a></li>                             
                            <li class="hidden-xs"><a href="#">My Account</a></li>
                            <li class="hidden-xs"><a href="#">Contact</a></li>
                            <li class="hidden-xs"><a href="#">FAQ</a></li>
                            <li class="hidden-xs"><a href="#">My Wishlist</a></li>
                            <li class="dropdown currency">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">€ EURO<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">€ EURO</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                </ul>
                            </li>
                            <li class="dropdown flags">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flag.gif" alt=""> Eng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#"><img src="images/flag.gif" alt=""> Eng</a></li>
                                    <li><a href="#"><img src="images/flag.gif" alt=""> Eng</a></li>
                                    <li><a href="#"><img src="images/flag.gif" alt=""> Eng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!---Top Bar Right--->
                </div>
            </div>
            <!---------End Header TopBar--------->
            <!------------Header Wrapper----------->
            <div class="sticky-wrapper">
                <header class="header fixed">
                    <div class="header-wrapper">
                        <div class="container">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="#"><img src="images/logo-bella-shop.png" alt="Bella Shop"></a>
                            </div>
                            <!-- /Logo -->

                            <!-- Header search -->
                            <div class="header-search">
                                <input class="form-control" type="text" placeholder="What are you looking?">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                            <!-- /Header search -->

                            <!-- Header shopping cart -->   
                            <div class="header-cart">
                                <div class="cart-wrapper ngang">
                                    <a href="#" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>                
                                </div>
                            </div>
                            <!-- Header shopping cart -->
                        </div>
                    </div>
                    <!-------Begin Mega Menu------>
                    <div class="navbar navbar-default" id="menu" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header hidden-sm">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand hidden col-xs-8 visible-xs" href="#"> <img src="images/logo-bella-shop.png"width="100%" height="130%" alt=""/></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav" id="menu-main-menu">
                                <li class="dropdown"><a href="#" class="dropdown-toggle selected" data-toggle="dropdown">Men</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Men 1</a></li>
                                        <li><a href="#">Men 2</a></li>
                                        <li><a href="#">Men 3</a></li>
                                        <li><a href="#">Men 4</a></li>
                                        <li><a href="#">Men 5</a></li>
                                        <li><a href="#">Men 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" style="background: #000"><a href="#" class="dropdown-toggle selected" data-toggle="dropdown" style="color: #fff">Women</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Women 1</a></li>
                                        <li><a href="#">Women 2</a></li>
                                        <li><a href="#">Women 3</a></li>
                                        <li><a href="">Women 4</a></li>
                                        <li><a href="">Women 5</a></li>
                                        <li><a href="">Women 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle selected" data-toggle="dropdown">Kids</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Kids 1</a></li>
                                        <li><a href="#">Kids 2</a></li>
                                        <li><a href="#">Kids 3</a></li>
                                        <li><a href="">Kids 4</a></li>         
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">New</a>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shoes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Shoes 1</a></li>
                                        <li><a href="">Shoes 2</a></li>
                                        <li><a href="">Shoes 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Accessories</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Accessories 1</a></li>
                                        <li><a href="">Accessories 2</a></li>
                                        <li><a href="">Accessories 3</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!----End Mega Menu---->
                </header>
            </div>
            <!----------End Header Wrapper---------->
        </div>
        <!------------Slider---------------->
        <div class="type-18-slider">
            <div class="slick-slider">
                <div class="item slide2 alt">
                    <img class="slide-img" src="images/slide-1.jpg" alt="">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <h2 class="caption-title">NEW ARRIVALS</h2>
                                        <h3 class="caption-subtitle"><span>SUMMER COLLECTION</span></h3>
                                        <h4 class="caption-subtext"><span>LOREM IPSUM DOLOR SIT AMET PERSPECTUM</span></h4>
                                        <p class="caption-text">
                                            <a class="btn btn-theme" href="#">SHOP NOW</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide2 alt">
                    <img class="slide-img" src="images/slide-2.jpg" alt="">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <h2 class="caption-title">NEW ARRIVALS</h2>
                                        <h3 class="caption-subtitle"><span>SUMMER COLLECTION</span></h3>
                                        <h4 class="caption-subtext"><span>LOREM IPSUM DOLOR SIT AMET PERSPECTUM</span></h4>
                                        <p class="caption-text">
                                            <a class="btn btn-theme" href="#">SHOP NOW</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item slide2 alt">
                    <img class="slide-img" src="images/slide-3.jpg" alt="">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <h2 class="caption-title">NEW ARRIVALS</h2>
                                        <h3 class="caption-subtitle"><span>SUMMER COLLECTION</span></h3>
                                        <h4 class="caption-subtext"><span>LOREM IPSUM DOLOR SIT AMET PERSPECTUM</span></h4>
                                        <p class="caption-text">
                                            <a class="btn btn-theme" href="#">SHOP NOW</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" data-role="none" class="slick-prev" style="display: block;">Previous</button>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.8/slick.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.slick-slider').slick();
            });
        </script>
        <!------------Content---------------->
        <div class="type-18-pagecontent">
            <section class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="thumbnail no-border no-padding thumbnail-banner size-1x3 hover">
                                <div class="media">
                                    <a class="media-link" href="#">
                                        <div class="img-bg" style="background-image: url('images/banner-1.jpg')"></div>
                                        <div class="caption">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                                    <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                                    <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail no-border no-padding thumbnail-banner size-1x1">
                                <div class="media">
                                    <a class="media-link" href="#">
                                        <div class="img-bg" style="background-image: url('images/banner-6.jpg')"></div>
                                        <div class="caption text-center">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                                    <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                                    <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail no-border no-padding thumbnail-banner size-1x1">
                                <div class="media">
                                    <a class="media-link" href="#">
                                        <div class="img-bg" style="background-image: url('images/banner-7.jpg')"></div>
                                        <div class="caption text-center">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                                    <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                                    <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--------Footer---------->
        <div class="type-18-footer" >
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">About Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">News Letter</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-categories">
                                    <h4 class="widget-title">Information</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-tag-cloud">
                                    <h4 class="widget-title">Item Tags</h4>
                                    <ul>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Top Sellers</a></li>
                                        <li><a href="#">E commerce</a></li>
                                        <li><a href="#">Hot Deals</a></li>
                                        <li><a href="#">Supplier</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Theme</a></li>
                                        <li><a href="#">Website</a></li>
                                        <li><a href="#">Isamercan</a></li>
                                        <li><a href="#">Themeforest</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="copyright">Copyright 2014 BELLA SHOP   |   All Rights Reserved   |   Designed By Jthemes</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="payments">
                                    <ul>
                                        <li><img src="images/visa.jpg" alt=""></li>
                                        <li><img src="images/mastercard.jpg" alt=""></li>
                                        <li><img src="images/paypal.jpg" alt=""></li>
                                        <li><img src="images/american-express.jpg" alt=""></li>
                                        <li><img src="images/visa-electron.jpg" alt=""></li>
                                        <li><img src="images/maestro.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>