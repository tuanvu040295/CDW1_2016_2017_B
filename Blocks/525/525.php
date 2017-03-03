<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/525.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/525.less', 'css/525.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>

    </head>

    <body>
        <section class="type-525">
            <div class="container">
                <div class="row">
                    <div class="type-525">
                        <div class="row">
                            <div id="logo" class="col-md-7">
                                <a id="logo-img" href="#" title="Cheope">
                                    <figure>
                                        <img src="images/logo.png" title="Cheope" alt="Cheope">
                                    </figure>
                                </a>
                                <p id="tagline">Just another Live Previews Sites site</p>
                            </div>
                            <div id="header-sidebar" class="col-md-5">
                                <div class="row">
                                    <!-- 3 -->
                                    <div class="login_register">
                                        <ul >
                                            <li>
                                                <nav>
                                                    <a href="#">My Account</a>
                                                </nav>
                                            </li>
                                            <li>
                                                <nav>
                                                    <a href="#">Login / Register</a>
                                                </nav>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- 1 -->
                                    <div class="widget">
                                        <form action="#" method="get" class="search_mini">
                                            <input type="text" name="s" id="search_mini" value="" placeholder="search for...">
                                            <input type="hidden" name="post_type" value="product">
                                            <input type="submit" id="submit" name="submit" value="">
                                        </form>
                                    </div>
                                    <!-- 2 -->
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="border">
                                            <div class="border">
                                                <h2>Cart</h2>
                                                <a href="#" class="cart_control cart_control_empty">Empty Cart</a>
                                                <div class="cart_wrapper">
                                                    <div>
                                                        <ul class="cart_list product_list_widget">
                                                            <li class="empty">No products in the cart.</li>
                                                        </ul>
                                                        <!-- end product list -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="nav">
                                    <nav class="navbar navbar-inverse">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav" class="open">
                                                <!--HOME-->
                                                <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown" data-toggle="dropdown">Home <span class="sf-sub-indicator"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i > Home I</i></a></li>
                                                        <li><a href="#"><i > Home II</i></a></li>
                                                        <li><a href="#"><i > Home III</i></a></li>
                                                        <li><a href="#"><i > Home IV</i></a></li>
                                                        <li><a href="#"><i > Home V</i></a></li>
                                                        <li><a href="#"><i > Home VI</i></a></li>
                                                        <li><a href="#"><i > Home VII( Corporate)</i></a></li>
                                                        <li><a href="#"><i > Home VIII</i></a></li>
                                                        <li><a href="#"><i > Home IX</i></a></li>
                                                        <li><a href="#"><i > Home X</i></a></li>
                                                        <li><a href="#"><i > Home XI</i></a></li>
                                                        <li><a href="#"><i > Landing page</i></a></li>
                                                    </ul>
                                                </li>
                                                <!--SLIDERS-->
                                                <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown">Sliders<span class="sf-sub-indicator"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i > Revolution slider</i></a></li>
                                                        <li><a href="#"><i > Elastic</i></a></li>
                                                        <li><a href="#"><i > Rotating</i></a></li>
                                                        <li><a href="#"><i > Flash</i></a></li>
                                                        <li><a href="#"><i > Flexslider</i></a></li>
                                                        <li><a href="#"><i > Flexslider elegant</i></a></li>
                                                        <li><a href="#"><i > Images grid</i></a></li>
                                                        <li><a href="#"><i > Thumbnails</i></a></li>
                                                    </ul>
                                                </li>
                                                <!--SHOP-->
                                                <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown">Shop</a>
                                                </li>
                                                <!--SHOP BY-->
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop by<span class="sf-sub-indicator"></span></a>
                                                    <ul id="mega-menu" class="dropdown-menu -menu">
                                                        <li class="col-sm-3">
                                                            <h6 >Brand</h6>
                                                            <ul>
                                                                <li><a href="#"><i > Brand 1</i></a></li>
                                                                <li><a href="#"><i > Brand 2</i></a></li>
                                                                <li><a href="#"><i > Brand 3</i></a></li>
                                                                <li><a href="#"><i > Brand 4</i></a></li>
                                                                <li><a href="#"><i > Brand 5</i></a></li>
                                                                <li><a href="#"><i > Brand 6</i></a></li>
                                                                <li><a href="#"><i > Brand 7</i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-sm-3">
                                                            <h6 >Category</h6>
                                                            <ul>
                                                                <li><a href="#"><i > Beds</i></a></li>
                                                                <li><a href="#"><i > Chaise lounges</i></a></li>
                                                                <li><a href="#"><i > Chairs</i></a></li>
                                                                <li><a href="#"><i > Lamps</i></a></li>
                                                                <li><a href="#"><i > Sofas</i></a></li>
                                                                <li><a href="#"><i > Bathroom</i></a></li>
                                                                <li><a href="#"><i > Accessories</i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-sm-3">
                                                            <h6 >Price</h6>
                                                            <ul>
                                                                <li><a href="#"><i > Free – 100 $</i></a></li>
                                                                <li><a href="#"><i > 100 – 200 $</i></a></li>
                                                                <li><a href="#"><i > 200 – 400 $</i></a></li>
                                                                <li><a href="#"><i > 400 – 600 $</i></a></li>
                                                                <li><a href="#"><i > 600 – 800 $</i></a></li>
                                                                <li><a href="#"><i > 800 – 1000 $</i></a></li>
                                                                <li><a href="#"><i > 1000 $ and up</i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="ko-boder"class="col-sm-3">
                                                            <h6 id="cuoi1" style="text-align: center">Must have</h6>
                                                            <div >
                                                                <a href="#"><img src="images/sedia1.jpg" ></a>
                                                            </div>
                                                            <h6 id="cuoi"style="text-align: center">POANG Chair</h6>
                                                            <div id="cuoi"><p>12,5 $</p></div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!--PGAE-->
                                                <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown">Page<span class="sf-sub-indicator"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i > FAQ</i></a></li>
                                                        <li><a href="#"><i > Testimonials</i></a></li>
                                                        <li><a href="#"><i > Contact</i></a></li>
                                                        <li><a href="#"><i > Page 404</i></a></li>
                                                        <li><a href="#"><i > Portfolios</i></a></li>
                                                        <li><a href="#"><i > Blogs</i></a></li>
                                                    </ul>
                                                </li>
                                                <!--SHORTCODES-->
                                                <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown">ShortCode<span class="sf-sub-indicator"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i > Revolution Slider</i></a></li>
                                                        <li><a href="#"><i > Alert box & Buttons</i></a></li>
                                                        <li><a href="#"><i > Icon section</i></a></li>
                                                        <li><a href="#"><i > Media & Widgets</i></a></li>
                                                        <li><a href="#"><i > Mix & Various</i></a></li>
                                                        <li><a href="#"><i > Table & Box prices</i></a></li>
                                                        <li><a href="#"><i > Typography</i></a></li>
                                                        <li><a href="#"><i > Shop</i></a></li>
                                                    </ul>
                                                </li>
                                                <!--PURCHASE CHEOPE-->
                                                <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown">Purchase Cheope ><span ></span></a>
                                                </li>
                                            </ul>
                                            <!----->
                                            <div id="nav-sidebar" class="phone-text">
                                                <div class=" widget-first widget text-image">
                                                    <div class="text-image" style="text-align:left">
                                                        <img src="images/phone.png" alt="">
                                                        <span>+ 00 39 0989327</span>
                                                    </div>
                                                </div>
                                                <div class=" widget">
                                                    <div class="textwidget">
                                                        <div class="fade-socials-small facebook-small">
                                                            <a href="#" class="fade-socials-small facebook-small" title="Facebook" style="display: none;"></a>
                                                        </div>
                                                        <div class="fade-socials-small rss-small">
                                                            <a href="#" class="fade-socials-small rss-small" title="Rss" style="display: none;"></a>
                                                        </div>
                                                        <div class="fade-socials-small twitter-small">
                                                            <a href="#" class="fade-socials-small twitter-small" title="Twitter" style="display: none;"></a>
                                                        </div>
                                                        <div class="fade-socials-small google-small">
                                                            <a href="#" class="fade-socials-small google-small" title="Google" style="display: none;"></a>
                                                        </div>
                                                        <div class="fade-socials-small linkedin-small">
                                                            <a href="#" class="fade-socials-small linkedin-small" title="Linkedin" style="display: none;"></a>
                                                        </div>
                                                        <div class="fade-socials-small pinterest-small">
                                                            <a href="#" class="fade-socials-small pinterest-small" title="Pinterest" style="display: none;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.nav-collapse -->
                                    </nav>
                                    <select class="select-menu">
                                        <option value="#">Navigate to...
                                        </option>
                                        <option value="#" selected="selected">&nbsp;Home »</option>
                                        <option value="#">-&nbsp;Home II</option>
                                        <option value="#">-&nbsp;Home III</option>
                                        <option value="#">-&nbsp;Home IV</option>
                                        <option value="#">-&nbsp;Home V</option>
                                        <option value="#">-&nbsp;Home VI</option>
                                        <option value="#">-&nbsp;Home VII ( Corporate)</option>
                                        <option value="#">-&nbsp;Home VIII</option>
                                        <option value="#">-&nbsp;Home IX</option>
                                        <option value="#">-&nbsp;Home X</option>
                                        <option value="#">-&nbsp;Home XI</option>
                                        <option value="#">-&nbsp;Landing page</option>
                                        <option value="#">&nbsp;Sliders »</option>
                                        <option value="#">-&nbsp;Revolution slider</option>
                                        <option value="#">-&nbsp;Elastic</option>
                                        <option value="#">-&nbsp;Rotating</option>
                                        <option value="#">-&nbsp;Flash</option>
                                        <option value="#">-&nbsp;Flexslider</option>
                                        <option value="#">-&nbsp;Flexslider elegant</option>
                                        <option value="#">-&nbsp;Images grid</option>
                                        <option value="#">-&nbsp;Thumbnails</option>
                                        <option value="#">&nbsp;Shop</option>
                                        <option value="#">&nbsp;Shop by »</option>
                                        <option value="#">-&nbsp;Brand »</option>
                                        <option value="#">--&nbsp;Brand 1</option>
                                        <option value="#">--&nbsp;Brand 2</option>
                                        <option value="#">--&nbsp;Brand 3</option>
                                        <option value="#">--&nbsp;Brand 4</option>
                                        <option value="#">--&nbsp;Brand 5</option>
                                        <option value="#">--&nbsp;Brand 6</option>
                                        <option value="#">--&nbsp;Brand 7</option>
                                        <option value="#">-&nbsp;Category »</option>
                                        <option value="#">--&nbsp;Beds</option>
                                        <option value="#">--&nbsp;Chaise lounges</option>
                                        <option value="#">--&nbsp;Chairs</option>
                                        <option value="#">--&nbsp;Lamps</option>
                                        <option value="#">--&nbsp;Sofas</option>
                                        <option value="#">--&nbsp;Bathroom</option>
                                        <option value="#">--&nbsp;Accessories</option>
                                        <option value="#">-&nbsp;Price »</option>
                                        <option value="#">--&nbsp;Free – 100 $</option>
                                        <option value="#">--&nbsp;100 – 200 $</option>
                                        <option value="#">--&nbsp;200 – 400 $</option>
                                        <option value="#">--&nbsp;400 – 600 $</option>
                                        <option value="#">--&nbsp;600 – 800 $</option>
                                        <option value="#">--&nbsp;800 – 1000 $</option>
                                        <option value="#">--&nbsp;1000 $ and up </option>
                                        <option value="#">-&nbsp;Must have</option>
                                        <option value="#">-&nbsp;</option>
                                        <option value="#">&nbsp;Pages »</option>
                                        <option value="#">-&nbsp;FAQ</option>
                                        <option value="#">-&nbsp;Testimonials</option>
                                        <option value="#">-&nbsp;Contact</option>
                                        <option value="#">-&nbsp;Page 404</option>
                                        <option value="#">-&nbsp;Portfolios »</option>
                                        <option value="#">--&nbsp;Pinterest Style</option>
                                        <option value="#">--&nbsp;Slide Detail</option>
                                        <option value="#">--&nbsp;Filterable</option>
                                        <option value="#">--&nbsp;2 Columns</option>
                                        <option value="#">--&nbsp;3 Columns</option>
                                        <option value="#">--&nbsp;4 Columns</option>
                                        <option value="#">--&nbsp;Big Image</option>
                                        <option value="#">--&nbsp;Slider</option>
                                        <option value="#">--&nbsp;Full Description</option>
                                        <option value="#">-&nbsp;Blog »</option>
                                        <option value="#">--&nbsp;Elegant</option>
                                        <option value="#">--&nbsp;Small image</option>
                                        <option value="#">--&nbsp;Big image</option>
                                        <option value="#">--&nbsp;Pinterest style</option>
                                        <option value="#">&nbsp;Shortcodes »</option>
                                        <option value="#">-&nbsp;Revolution Slider</option>
                                        <option value="#">-&nbsp;Alert box &amp; Buttons</option>
                                        <option value="#">-&nbsp;Icon section</option>
                                        <option value="#">-&nbsp;Media &amp; Widgets</option>
                                        <option value="#">-&nbsp;Mix &amp; Various</option>
                                        <option value="#">-&nbsp;Table &amp; Box prices</option>
                                        <option value="#">-&nbsp;Typography</option>
                                        <option value="#">-&nbsp;Shop</option>
                                        <option value="">&nbsp;Purchase Cheope &gt;</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/menu.js" type="text/javascript"></script>
    </body>
</html>