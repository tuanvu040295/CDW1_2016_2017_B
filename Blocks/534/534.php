<html>

    <head
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/534.less', './css/534.css');
        ?>
        <link href="css/534.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-34">
            <div id="header" class="group header_with_search margin-bottom">
                <div class="container">
                    <!-- START LOGO -->
                    <div id="logo">
                        <a id="logo-img" href="index.php" title="Sistina"> <img src="images/logo.png" alt="" /> </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- START HEADER RIGHT CONTENT -->
                    <div id="header-right-content">
                        <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown activemenu"> 
                                        <a href="index.php" class="dropdown-toggle" role="button" aria-expanded="true">HOME<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="index.php">Home I</a></li>
                                            <li><a href="#">Home II</a></li>
                                            <li><a href="#">Home III</a> </li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="list.php" class="dropdown-toggle" role="button" aria-expanded="false">
                                            SHOP</a> </li>
                                    <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEGAMENU<span class="caret"></span></a>
                                        <ul class="dropdown-menu mega-dropdown-menu">
                                            <li class="col-sm-4">
                                                <ul>
                                                    <li class="dropdown-header">Features</li>
                                                    <li><a href="#">Auto Carousel</a> </li>
                                                    <li><a href="#">Carousel Control</a> </li>
                                                    <li><a href="#">Left & Right Navigation</a> </li>
                                                    <li><a href="#">Four Columns Grid</a> </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-4">
                                                <ul>
                                                    <li class="dropdown-header">Plus</li>
                                                    <li><a href="#">Navbar Inverse</a> </li>
                                                    <li><a href="#">Pull Right Elements</a> </li>
                                                    <li><a href="#">Coloured Headers</a> </li>
                                                    <li><a href="#">Primary Buttons & Default</a> </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-4">
                                                <ul>
                                                    <li class="dropdown-header">Much more</li>
                                                    <li><a href="#">Easy to Customize</a> </li>
                                                    <li><a href="#">Calls to action</a> </li>
                                                    <li><a href="#">Custom Fonts</a> </li>
                                                    <li><a href="#">Slide down on Hover</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES<span class="caret"></span></a>
                                        <ul class="dropdown-menu mega-dropdown-menu">
                                            <li class="col-sm-4">
                                                <ul>
                                                    <li class="dropdown-header">Features</li>
                                                    <li><a href="#">Auto Carousel</a> </li>
                                                    <li><a href="#">Carousel Control</a> </li>
                                                    <li><a href="#">Left & Right Navigation</a> </li>
                                                    <li><a href="#">Four Columns Grid</a> </li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Fonts</li>
                                                    <li><a href="#">Glyphicon</a> </li>
                                                    <li><a href="#">Google Fonts</a> </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-4">
                                                <ul>
                                                    <li class="dropdown-header">Plus</li>
                                                    <li><a href="#">Navbar Inverse</a> </li>
                                                    <li><a href="#">Pull Right Elements</a> </li>
                                                    <li><a href="#">Coloured Headers</a> </li>
                                                    <li><a href="#">Primary Buttons & Default</a> </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-4">
                                                <ul>
                                                    <li class="dropdown-header">Much more</li>
                                                    <li><a href="#">Easy to Customize</a> </li>
                                                    <li><a href="#">Calls to action</a> </li>
                                                    <li><a href="#">Custom Fonts</a> </li>
                                                    <li><a href="#">Slide down on Hover</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" >Login/Register <span class="caret"></span></a>
                                        <ul class="dropdown-menu register">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"  placeholder="Username"> </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password"> </div>
                                                <div class="form-group">
                                                    <a class="lost_password" href="#">Lost password?</a>
                                                    <input type="submit" class="button" value="Login" name="login">
                                                </div>
                                                <a class="create_account" href="#">Create account</a>
                                                <ul>
                                                    <li>My Account</li>
                                                    <li>Wishlist</li>
                                                    <li>Compare</li>
                                                </ul>
                                            </form>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cart <span class="cart-items-number">0</span></a>
                                        <ul class="dropdown-menu" role="menu"> Không có sản phẩm được chọn. </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- END HEADER RIGHT CONTENT -->
                    <!-- START SEARCH BOX -->
                    <div id="headersearchform-container" class="group">
                        <form role="search" method="get" id="headersearchform" action="#">
                            <div class="group formborder">
                                <input type="text" value="" name="s" id="headers" placeholder="Search products here..." autocomplete="off" vk_1c515="subscribed">
                                <input type="submit" class="button" id="headersearchsubmit" value="Search">
                            </div>
                            <input type="hidden" name="post_type" value="product"> </form>
                    </div>
                </div>
                <!-- END SEARCH BOX -->
                <div class="header-below">
                    <div class="slider fixed-image inner group">
                         <img src="images/fixed-image.jpg" alt="Sistina Header">
                    </div>
                    <!-- SLOGAN -->
                    <div class="slogan">
                        <h2 class="nopadding">
                            <img src="images/cart1.png">I'm Sistina theme. <strong>Nice to meet you.</strong></h2> </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
    </body>
</html>