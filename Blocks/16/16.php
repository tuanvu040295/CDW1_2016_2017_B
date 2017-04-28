<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/16.less', 'css/16.css');
        ?>
        <link href="css/16.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <section class="type-16">
            <!------------------Begin Header---------------------->
            <div class="type-16-header">
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
                                    <div class="cart-wrapper">
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
            <!---------------------End Header----------------------->
            <!---------------------Begin Content-------------------->
            <div class="type-16-content">
                <!--------Begin All Brand...---------->
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="message-box">
                                <div class="message-box-inner">
                                    <div class="col-md-10">
                                        <h2>ALL BRAND ARE ON SALE!!!FREE SHIPPING WORLDWIDE ON ALL ORDERS OVER$45</h2>
                                    </div>                                
                                    <span>SHOP NOW</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--------End All Brand...---------->
                <!--------Begin Fashion Winter------>
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <div class="img-bg" style="background-image: url('images/80fd0e7073809d430acac79173ac6c71.jpg')"></div>
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
                            <div class="col-md-6">
                                <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <div class="img-bg" style="background-image: url('images/230fe38a317f121ae220c8781064ca2c.jpg')"></div>
                                            <div class="caption text-right">
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
                <!--------End Fashion Winter------>
            </div>
            <!-------------------End Content------------------------->
        </section>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>