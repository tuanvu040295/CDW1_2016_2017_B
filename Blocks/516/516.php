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
        $less->compileFile('less/516.less', 'css/type-a-17.css');
        ?>
        <link href="css/type-a-17.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-516">
            <!-------------------------------------------Begin Header--------------------------------------------->
            <header id="header" class="style2 cta_button">
                <div class="container">
                    <div class="logo-container hasInfoCard">
                        <h1 id="logo">
                            <a href="#">
                                <img src="images/logo.png" alt="Kallyas Template for Joomla" title="Click to return to Kallayas Template's homepage">
                            </a>
                        </h1>
                    </div><!--Logo-->

                    <ul class="topnav navRight">
                        <!-- BEGIN support clickable button -->
                        <li><a href="#" id="open_sliding_panel">
                                <span class="icon-remove-circle icon-white"></span> SUPPORT						</a>
                        </li>
                        <!-- END support clickable button -->

                        <!-- BEGIN hidden login/register/remind popups -->
                        <li><a href="#login_panel" data-rel="prettyPhoto[login_panel]">LOGIN</a></li>
                        <!-- END hidden login/register/remind popups -->
                    </ul><!--Top right-->

                    <ul class="topnav navLeft">
                        <li class="drop">
                            <a href="#">MY CART</a>
                            <div class="pPanel">
                                <div class="inner">

                                    <div class="vmCartModule" id="vmCartModule216">
                                        <p class="cart_details">
                                            <span class="total_products">Cart empty</span>
                                            <span class="total"></span>
                                            <a class="checkout" href="/kallyas_joomla/shop/shopping-cart"><span class=" icon-shopping-cart"></span> Show Cart</a>		</p>
                                    </div><!-- end vmcartmodule -->

                                </div>
                            </div>
                        </li>

                        <li class="languages drop">
                            <a href="#"><span class="icon-globe icon-white"></span> LANGUAGES</a>
                            <div class="custom ">
                                <div class="mod-languages ">
                                    <div class="pPanel">
                                        <ul class="lang-inline inner">
                                            <li dir="ltr"><a href="#"> <img src="/kallyas_joomla/media/mod_languages/images/fr.gif" alt="French (FR)" title="French (FR)"> French (FR) </a></li>
                                            <li class="active" dir="ltr"><a href="#"> <img src="/kallyas_joomla/media/mod_languages/images/en.gif" alt="English (UK)" title="English (UK)"> English (UK) </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul><!--Top Left-->

                    <div id="search" class="">
                        <a href="#" class="searchBtn">
                            <span class="icon-search icon-white"></span>
                        </a>   
                    </div><!--Search-->

                    <a href="#" target="_self" id="ctabutton">
                        <strong>FREE</strong>QUOTE					
                        <svg version="1.1" class="trisvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" preserveAspectRatio="none" width="14px" height="5px" viewBox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path></svg>
                    </a><!--Free QUOTE-->

                    <menu class="main_menu">
                        <nav class="btn-group show-on-hover">
                            <a href="#">HOME</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Homepage 2</a></li>
                                <li><a href="#">Homepage 3</a></li>
                                <li><a href="#">Homepage 4</a></li>
                                <li><a href="#">Homepage 5</a></li>
                                <li><a href="#">Homepage 6</a></li>
                                <li><a href="#">Homepage ALL</a></li>
                            </ul>
                        </nav><!--Home-->

                        <nav class="btn-group show-on-hover">
                            <a href="#">SLIDERS</a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#">IOSSlider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Main Slider</a></li>
                                        <li><a href="#">Fixed position(scroll)</a></li>
                                        <li><a href="#">Fixed Width Style</a></li>
                                        <li><a href="#">Faded effect</a></li>
                                        <li><a href="#">With thumb</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Createive Slider</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Fixed Slider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Syle 1(Flex Slider)</a></li>
                                        <li><a href="#">Style 2(Nivo Slider)</a></li>
                                        <li><a href="#">Style 3(Wom Slider)</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">3D Cute Slider</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Circular Content</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="#">Alternative Style</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Static Content</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="#">Style 2/Boxed</a></li>
                                        <li><a href="#">Style 3/Video</a></li>
                                        <li><a href="#">Style 4/Maps</a></li>
                                        <li><a href="#">Style 5/Text pop</a></li>
                                        <li><a href="#">Style 6/Product Loupe</a></li>
                                        <li><a href="#">Style 7/Event Countdown</a></li>
                                        <li><a href="#">Style 8/Video Background</a></li>
                                        <li><a href="#">Style 9/Text & Login</a></li>
                                        <li><a href="#">Style 10/Simple Text</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Porfolio Slider Devices</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Porfolio Slider Frames</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Slding Vertically</a></li>
                                        <li><a href="#">Sliding Horionztally</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Laptop Slider</a></li>
                                <li><a href="#">iCarousel</a></li>
                                <li><a href="#">CSS3 Panels</a></li>
                            </ul>
                        </nav><!--Silders-->

                        <nav class="btn-group show-on-hover">
                            <a href="#">ABOUT US</a>
                        </nav><!--About Us-->

                        <nav class="btn-group show-on-hover">
                            <a href="#">FEATURES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Log</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Porfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Category Layout</a></li>
                                        <li><a href="#">Sortable Layout</a></li>
                                        <li><a href="#">Carousels Layout</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Photo Gallery</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">PrettyPhoto(LightBox)</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Grid Positons/Structure</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#">Hollyday Slider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Christmas</a></li>
                                        <li><a href="#">Easter</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page Preloader</a></li>
                                <li><a href="#">Animated Header</a></li>
                            </ul>
                        </nav><!--Features--> 

                        <nav class="btn-group show-on-hover">
                            <a href="#">SHOP</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Shop Frontpage</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </nav><!--Shop-->

                        <nav class="btn-group show-on-hover">
                            <a href="#">PAGES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Process</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </nav><!--Pages-->

                        <nav class="btn-group show-on-hover">
                            <a href="#">STYLES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Typoghaphy</a></li>
                                <li><a href="#">Table Design</a></li>
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Button Desgin</a></li>
                            </ul>
                        </nav><!--Style-->
                    </menu><!--Main Menu-->
                </div>
            </header>
            <!---------------------------------End Header---------------------------------------->
            <div class="clearfix"></div>
            <!-------------------------------Begin Image---------------------------------------->
            <div id="page_header" class="dark-blue gradient   ">
                <div class="bgback"></div>
                <div class="container">
                    <section class="row">
                        <div class="col-md-6">
				
                        </div>
                        <div class="col-md-6 ">
                            <div class="header-titles">
                                <h2>PRODUCT LAYOUT</h2>	
                                <h4>Default layout for the product page.</h4>		
                            </div>
                        </div>
                    </section><!-- end row -->
                </div>
                <div class="shadowUP"></div>
            </div>
            <!-------------------------------End Image----------------------------------------->
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>