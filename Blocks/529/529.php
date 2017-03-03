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
        $less->compileFile('less/529.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-529">
            <div class="container type-529 footer">
                <!--Footer Chitiet-->
                <footer class="footer-chitiet">
                    <section class="row">
                        <!--LEFT-->
                        <div class="col-md-6">
                            <!--1-->
                            <div class="widget_nav_menu col-md-4">
                                <strong>Utilities</strong>
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
                            <div class="col-md-4">
                                <strong>ON SALE</strong>
                                <ul class="product_list_widget">
                                    <li>
                                        <figure><a href="#" title="Single bed"><img id="sale-manhphuc" src="images/ft-img1.jpg" alt="products" class="img-responsive"><strong class="product-title">Single bed</strong></a></figure>
                                        <del><span><span>£</span>400.00</span></del>
                                        <ins><span><span>£</span>375.00</span></ins>
                                    </li>
                                    <li>
                                        <figure><a href="#" title="Romantic bed"><img id="sale-manhphuc" src="images/ft-img2.jpg" alt="products-2" class="img-responsive"><strong class="product-title">Romantic bed</strong></a></figure>
                                        <del><span><span>£</span>700.00</span></del>
                                        <ins><span><span>£</span>620.00</span></ins>
                                    </li>
                                </ul>
                            </div>
                            <!--3-->
                            <div class="col-md-4">
                                <strong>Featured products</strong>
                                <ul class="product_list_widget">
                                    <li>
                                        <figure><a href="#" title="Wood bed"><img id="sale-manhphuc" src="images/ft-img3.jpg" alt="manhphuc-img" class="img-responsive"><strong class="product-title">Wood bed</strong></a></figure>
                                        <span><span>£</span>420.00</span>
                                    </li>
                                    <li>
                                        <figure><a href="#" title="Single bed"><img id="sale-manhphuc" src="images/ft-img4.jpg" title="manhphuc-img4" class="img-responsive"><strong class="product-title">Single bed</strong></a></figure>
                                        <del><span><span>£</span>400.00</span></del>
                                        <ins><span><span>£</span>375.00</span></ins>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--END LEFT-->
                        <!--RIGHT-->
                        <div class="col-md-6">
                            <strong>Last news</strong>
                            <div class="recent-post">
                                <article class="text">
                                    <a href="#">Section shortcodes & sticky posts!</a>
                                    <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi. Maecenas rutrum vehicula condimentum. Donec volutpat […]</p>
                                </article>
                            </div>
                            <div class="recent-post">
                                <article class="text">
                                    <a href="#">Another theme by YIThemes!</a>
                                    <p>Quisque pharetra, risus sit amet vestibulum consequat, elit arcu ultrices sem, eget fringilla felis magna a ante. Ut non quam […]</p>
                                </article>
                            </div>
                        </div>
                        </div>
                        <!--END RIGHT-->
                    </section>
                </footer>
                <!--End Footer Chitiet-->
            </div>
        </div>
    </body>
</html>