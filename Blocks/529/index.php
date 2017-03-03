<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-23-f-main">
            <div class="container">
                <!--Footer Chitiet-->
                <div class="footer-chitiet">
                    <div class="border-manhphuc">
                        <div class="row">
                            <!--LEFT-->
                            <div class="footer-widgets-area with-sidebar-right col-md-6">
                                <!--1-->
                                <div id="nav_menu-2" class="widget-1 widget-first widget span2 widget_nav_menu col-md-4">
                                    <h3>Utilities</h3>
                                    <ul id="menu-footer" class="menu">
                                        <li class="cols-2"><a href="#">Home</a></li>
                                        <li class="cols-2"><a href="#">Contact</a></li>
                                        <li class="cols-2"><a href="#">Blog</a></li>
                                        <li class="cols-2"><a href="#">FAQ</a></li>
                                        <li class="cols-2"><a href="#">Customers</a></li>
                                        <li class="cols-2"><a href="#">Cart</a></li>
                                        <li class="cols-2"><a href="#">Portfolio</a></li>
                                        <li class="cols-2"><a href="#">Shop</a></li>
                                        <li class="cols-2"><a href="#">Facebook</a></li>
                                        <li class="cols-2"><a href="#">Theme Forest</a></li>
                                        <li class="cols-2"><a href="#">Shipping</a></li>
                                        <li class="cols-2"><a href="#">Conditions</a></li>
                                        <li class="cols-2"><a href="#">Policy</a></li>
                                        <li class="cols-2"><a href="#">About us</a></li>
                                    </ul>
                                </div>
                                <!--2-->
                                <div id="woocommerce_products-2" class="widget-2 widget span2 woocommerce widget_products col-md-4">
                                    <h3>ON SALE</h3>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#" title="Single bed"><img id="sale-manhphuc" src="images/ft-img1.jpg" alt="products" class="img-responsive"><span class="product-title">Single bed</span></a>
                                            <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>400.00</span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>375.00</span></ins>
                                        </li>

                                        <li>
                                            <a href="#" title="Romantic bed"><img id="sale-manhphuc" src="images/ft-img2.jpg" alt="products-2" class="img-responsive"><span class="product-title">Romantic bed</span></a>
                                            <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>700.00</span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>620.00</span></ins>
                                        </li>
                                    </ul>
                                </div>
                                <!--3-->
                                <div id="woocommerce_products-3" class="widget-3 widget-last widget span2 woocommerce widget_products col-md-4">
                                    <h3>Featured products</h3>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#" title="Wood bed"><img id="sale-manhphuc" src="images/ft-img3.jpg" alt="manhphuc-img" class="img-responsive"><span class="product-title">Wood bed</span></a>
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>420.00</span>
                                        </li>

                                        <li>
                                            <a href="#" title="Single bed"><img id="sale-manhphuc" src="images/ft-img4.jpg" title="manhphuc-img4" class="img-responsive"><span class="product-title">Single bed</span></a>
                                            <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>400.00</span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>375.00</span></ins>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--END LEFT-->

                            <!--RIGHT-->
                            <div class="footer-widgets-sidebar with-sidebar-right col-md-6">
                                <div id="footer-recent-posts-2" class="widget-1 widget-first widget span6 recent-posts">
                                    <h3>Last news</h3>
                                    <div class="recent-post">
                                        <div class="hentry">
                                            <div class="text">
                                                <h3><a href="#">Section shortcodes & sticky posts!</a></h3>
                                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi. Maecenas rutrum vehicula condimentum. Donec volutpat […]</p>
                                            </div>
                                        </div>

                                        <div class="hentry">
                                            <div class="text">
                                                <h3><a href="#">Another theme by YIThemes!</a></h3>
                                                <p>Quisque pharetra, risus sit amet vestibulum consequat, elit arcu ultrices sem, eget fringilla felis magna a ante. Ut non quam […]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END RIGHT-->
                        </div>
                    </div>
                </div>
                <!--End Footer Chitiet-->
            </div>
        </div>
        <script src="js/menu.js" type="text/javascript"></script>
    </body>

</html>