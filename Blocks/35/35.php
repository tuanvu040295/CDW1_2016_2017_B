<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>35</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/35.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/35.less', 'css/35.css');
        ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-35">  
            <div class="type-35-header">
                <div class="container">

                    <div class="navbar navbar-default" id="menu" role="navigation">
                        <nav class="navbar navbar-light stick">
                            <div class="container">
                                <a class="navbar-brand" href="#">
                                    <div class="logo-holder">
                                        <img src="images/logo-header.png" alt="Landscaping Logo">
                                    </div>

                                    <div class="title_text">
                                        Landscaping

                                        <span>Services Company</span>
                                    </div>

                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </nav>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header hidden-sm">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav" id="menu-main-menu">
                                <li class="dropdown"><a href="#" class="dropdown-toggle selected" data-toggle="dropdown">01. home</a>
                                    <span class="subtitle">welcome</span>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Home: Landscaping</a></li>
                                        <li><a href="#">Home: Construction</a></li>
                                        <li><a href="#">Home: Snow Removal</a></li>
                                        <li><a href="#">Home: Landscaping (Alternate Header)</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">02. pages</a>
                                    <span class="subtitle">explore</span>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle1" data-toggle="dropdown">03. services</a>
                                            <ul class="dropdown-menu">

                                                <li><a href="">4 columns</a></li>
                                                <li><a href="">3 columns</a></li>
                                                <li><a href="">3 columns w/ sidebar</a> </li>
                                                <li><a href="">2 columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle1" data-toggle="dropdown">04. projects</a>
                                            <ul class="dropdown-menu">

                                                <li><a href="">4 columns</a></li>
                                                <li><a href="">3 columns</a></li>
                                                <li><a href="">3 columns w/ sidebar</a> </li>
                                                <li><a href="">2 columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle1" data-toggle="dropdown">05. contact</a>

                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">03. services</a>
                                    <span class="subtitle">what we do</span>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Modern Blog</a></li>
                                        <li><a href="">Classic Blog</a></li>



                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">04. projects</a> 
                                    <span class="subtitle">our gallery</span>
                                    <ul class="dropdown-menu">
                                        <li><a href="">About Us </a></li>
                                        <li><a href="">Our Services 1</a></li>

                                        <li><a href="">Our Skills 1</a></li>

                                        <li><a href="">Our Team</a></li>

                                        <li><a href="">Pricing Tables</a></li>
                                        <li><a href="">Testimonials </a></li>


                                        <li><a href="">Passworded Page </a></li>
                                        <li><a href="">Archives</a></li>
                                        <li><a href="">Sitemap </a></li>
                                        <li><a href="">404 Page</a></li>



                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">05. contact</a>
                                    <span class="subtitle">get in touch</span>
                                    <ul class="dropdown-menu">
                                        <li><a href="">All Shortcodes</a></li>
                                        <li><a href="">Shop</a></li>
                                        <li><a href="">Funding – Project 1</a></li>
                                        <li><a href="">Funding – Project 2</a></li>
                                        <li><a href="">Features List</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>

                </div>
                <header class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="breadcrumbs">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li class="current"><a href="#">Shop Single Product</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <ul class="social-icons pull-sm-right">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="type-35-content">
                <div class="container md-margin-top-90 sm-margin-top-40 xs-margin-top-40">
                    <div class="row">
                        <div class="col-lg-7 col-lg-push-5">
                            <h1>Shop Our Products</h1>
                        </div>
                    </div>

                    <div class="row margin-top-60 margin-bottom-40">
                        <div class="col-lg-8">

                            <div class="single-product">

                                <div class="product-slider-container">
                                    <div class="product-slider flexslider">

                                        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li class="flex-active-slide" style="width: 762px; margin-right: 0px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                                <li style="width: 762px; margin-right: 0px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                                <li style="width: 762px; margin-right: 0px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                                <li style="width: 762px; margin-right: 0px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                                    <div class="product-carousel flexslider">

                                        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li class="flex-active-slide" style="width: 210px; margin-right: 10px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                                <li style="width: 210px; margin-right: 10px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                                <li style="width: 210px; margin-right: 10px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                                <li style="width: 210px; margin-right: 10px; float: left; display: block;">
                                                    <img src="images/glove-1.png" alt="Glove" draggable="false">
                                                </li>
                                            </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                                </div>

                                <h2 class="main-title">Earthwise Wood Chipper &amp; Leaf Shredder</h2>

                                <span class="product-rating">
                                    <i class="icon-favourites-star"></i>
                                    <i class="icon-favourites-star"></i>
                                    <i class="icon-favourites-star"></i>
                                    <i class="icon-favourites-star"></i>
                                    <i class="icon-favourites-star star-grayed"></i>
                                </span>

                                <span class="number-reviews">(2 customer reviews)</span>

                                <div class="product-price">
                                    $45.99
                                </div>

                                <hr>

                                <p>
                                    Lorem ipsum dolor site amet, consectetur adipiscing elit. Praesent ultrices, mauris id elementum posuere, orci ante
                                    porttitor libero, nec vertibulum ipsum turpis vitae felis. Morbi interdum est non velit pellentesque, id convallis
                                    arcu varius. Sed porttitor et nibh at condimentum.
                                </p>

                                <p>
                                    Proin id venenatis felis, vel auctor neque. Vestibulum laoreet lacus et nisi semper, eu egestas nibh convallis.
                                    Proin oulvinar mattis turpis, et pulvinar neque temport eu.
                                </p>

                                <div class="product-spinner">
                                    <div class="spinner-control" data-action="subtract"><i class="fa fa-minus"></i></div>
                                    <input type="text" value="1">
                                    <div class="spinner-control" data-action="add"><i class="fa fa-plus"></i></div>
                                </div>

                                <button class="product-add-cart">Add to Cart <span class="arrow-go shopping-cart"></span></button>

                                <hr>

                                Categories: <a href="#">Landscaping</a>, <a href="#">Hand Tools</a>, <a href="#">Gardener</a>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#product-description" role="tab">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#product-reviews" role="tab">Reviews (3)</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-description" role="tabpanel">
                                        <h4>Product Description</h4>

                                        <p>
                                            Etiam non tempor felis, vitae tempus felis. Aenean vitae aliquet erat, non blandit elit. Nunc eleifend,
                                            erat vitae imperdiet vehicula, dui ex auctor lorem, in auctor sapien ipsum id sem.
                                        </p>

                                        <p>
                                            Duis mattis, magna non ultricies auctor, eros nibh bibendum arcu, a laoreet mauris nibh non nibh.
                                            Phasellus quis varius urna. Duis vel nulla enim. Nullam eleifend nec lectus nec laoreet.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="product-reviews" role="tabpanel">

                                        <div class="comments-list-container">
                                            <h3>3 Reviews</h3>

                                            <ul class="comment-list">
                                                <li>
                                                    <div class="reply-button"><i class="fa fa-reply-all"></i></div>

                                                    <div class="comment-picture">
                                                        <img src="images/comment-1.png" alt="Comment Author">
                                                    </div>

                                                    <div class="comment-details">

                                                        <div class="comment-name">Mary A. George</div>
                                                        <div class="comment-date">19 February, 2016 at 4:55 pm</div>
                                                        <hr>

                                                        <div class="comment">
                                                            Nunc fringilla, eros vel posuere vehicula, ligula mauris sollicitudin elit, ac hendrerit risus toror sollicitudin enim.
                                                            Suspendisse semper nulla leo.
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="reply-button"><i class="fa fa-reply-all"></i></div>

                                                    <div class="comment-picture">
                                                        <img src="images/comment-1.png" alt="Comment Author">
                                                    </div>

                                                    <div class="comment-details">

                                                        <div class="comment-name">Brandon R. Downs</div>
                                                        <div class="comment-date">18 February, 2016 at 5:09 am</div>
                                                        <hr>

                                                        <div class="comment">
                                                            Fusce mattis molestie tincidunt. Etiam quis lacus ornarea, ullamcroper quam ac lacinia libero. Donec site amet lectus augue.
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>

                                                    <ul class="comment-list">
                                                        <li>
                                                            <div class="reply-button"><i class="fa fa-reply-all"></i></div>

                                                            <div class="comment-picture">
                                                                <img src="images/comment-1.png" alt="Comment Author">
                                                            </div>

                                                            <div class="comment-details">

                                                                <div class="comment-name">Lucy J. Jordan</div>
                                                                <div class="comment-date">20 February, 2016 at 3:32 pm</div>
                                                                <hr>

                                                                <div class="comment">
                                                                    Barbara is Integer nec elementum ipsum, quis imperdiet tortor. Vivamus risu felis, vestibulum eu pharaetra non,
                                                                    fringilla at neque.
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="underline">Related Products</h2>

                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                                        <div class="product-item-container">
                                            <div class="product-image">
                                                <img src="images/preview-10.png" alt="Related Product">
                                            </div>

                                            <div class="product-info">
                                                <div class="product-title">Landscaper's Wagon</div>

                                                <div class="text-sm-center text-xs-center">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star star-grayed"></i>
                                                    </div>

                                                    <div class="product-price">$39.99</div>
                                                </div>

                                                <button class="product-add-cart">Add to Cart <span class="arrow-go shopping-cart"></span></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <div class="product-item-container">
                                            <div class="product-image">
                                                <img src="images/preview-11.png" alt="Related Product">
                                            </div>

                                            <div class="product-info">
                                                <div class="product-title">String Trimmer, 24V</div>

                                                <div class="text-sm-center text-xs-center">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star star-grayed"></i>
                                                    </div>

                                                    <div class="product-price">$189.99</div>
                                                </div>

                                                <button class="product-add-cart">Add to Cart <span class="arrow-go shopping-cart"></span></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInRight" style="visibility: hidden; animation-name: none;">
                                        <div class="product-item-container">
                                            <div class="product-image">
                                                <img src="images/preview-12.png" alt="Related Product">
                                            </div>

                                            <div class="product-info">
                                                <div class="product-title">Watering Wand</div>

                                                <div class="text-sm-center text-xs-center">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star star-grayed"></i>
                                                    </div>

                                                    <div class="product-price">$76.00</div>
                                                </div>

                                                <button class="product-add-cart">Add to Cart <span class="arrow-go shopping-cart"></span></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 sidebar">
                            <div class="sidebar-widget wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <h3>Find what you need!</h3>

                                <form class="search-form">
                                    <input type="search" placeholder="Search the website...">

                                    <button type="submit"><i class="icon-search"></i></button>
                                </form>
                            </div>

                            <div class="sidebar-widget wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <h3>Categories</h3>

                                <ul class="categories">
                                    <li><a href="#">Lawn &amp; Garden</a></li>
                                    <li><a href="#">Snow &amp; Ice Removal</a></li>
                                    <li><a href="#">Irrigation &amp; Drainage</a></li>
                                    <li><a href="#">Spring &amp; Fall Cleanup</a></li>
                                    <li><a href="#">Hardscaping</a></li>
                                </ul>
                            </div>

                            <div class="sidebar-widget wow fadeInRight" style="visibility: hidden; animation-name: none;">
                                <h3>Recent Products</h3>

                                <ul class="recent-posts">
                                    <li>
                                        <div class="img-holder">
                                            <a href="#">
                                                <img src="images/recent-product-1.png" alt="Recent Product">
                                                <div class="back"><i class="icon-arrow-pointing-to-right"></i></div>
                                            </a>
                                        </div>

                                        <div class="post-details">
                                            <div class="title"><a href="#">Boneyard Creek Restoration: Scott Park Avenue, CA</a></div>
                                            <div class="date">17 February, 2016</div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <a href="#">
                                                <img src="images/recent-product-2.png" alt="Recent Product">
                                                <div class="back"><i class="icon-arrow-pointing-to-right"></i></div>
                                            </a>
                                        </div>

                                        <div class="post-details">
                                            <div class="title"><a href="#">City of Charlotesville: Meadow Creek Restoration Project</a></div>
                                            <div class="date">16 February, 2016</div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <a href="#">
                                                <img src="images/recent-product-3.png" alt="Recent Product">
                                                <div class="back"><i class="icon-arrow-pointing-to-right"></i></div>
                                            </a>
                                        </div>

                                        <div class="post-details">
                                            <div class="title"><a href="#">The Nature Conservancy: Virginia Aquatic Resources</a></div>
                                            <div class="date">15 February, 2016</div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar-widget wow fadeInRight" style="visibility: hidden; animation-name: none;">
                                <h3>Latest Arrivals</h3>

                                <div class="custom-filter-checklist mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                            <div>
                                                <input id="growbags_checkbox" type="checkbox" name="checkbox"><label for="growbags_checkbox">Grow Bags</label>
                                            </div>
                                            <div>
                                                <input id="vegetable_garden_checkbox" type="checkbox" name="checkbox"><label for="vegetable_garden_checkbox">New: Vegetable Gardening</label>
                                            </div>
                                            <div>
                                                <input id="plant_disease_checkbox" type="checkbox" name="checkbox"><label for="plant_disease_checkbox">Plant Disease Controls</label>
                                            </div>
                                            <div>
                                                <input id="plant_markers_checkbox" type="checkbox" name="checkbox"><label for="plant_markers_checkbox">Row &amp; Plant Markers</label>
                                            </div>
                                            <div>
                                                <input id="season_extending_checkbox" type="checkbox" name="checkbox"><label for="season_extending_checkbox">Season-Extending</label>
                                            </div>
                                            <div>
                                                <input id="space_intensive_checkbox" type="checkbox" name="checkbox"><label for="space_intensive_checkbox">Space Intensive</label>
                                            </div>
                                            <div>
                                                <input id="veggie_checkbox" type="checkbox" name="checkbox"><label for="veggie_checkbox">Veggie Gardening Accessories</label>
                                            </div>
                                            <div>
                                                <input id="growbags_checkbox_2" type="checkbox" name="checkbox"><label for="growbags_checkbox_2">Grow Bags</label>
                                            </div>
                                            <div>
                                                <input id="vegetable_garden_checkbox_2" type="checkbox" name="checkbox"><label for="vegetable_garden_checkbox_2">New: Vegetable Gardening</label>
                                            </div>
                                            <div>
                                                <input id="plant_disease_checkbox_2" type="checkbox" name="checkbox"><label for="plant_disease_checkbox_2">Plant Disease Controls</label>
                                            </div>
                                            <div>
                                                <input id="plant_markers_checkbox_2" type="checkbox" name="checkbox"><label for="plant_markers_checkbox_2">Row &amp; Plant Markers</label>
                                            </div>
                                            <div>
                                                <input id="season_extending_checkbox_2" type="checkbox" name="checkbox"><label for="season_extending_checkbox_2">Season-Extending</label>
                                            </div>
                                            <div>
                                                <input id="space_intensive_checkbox_2" type="checkbox" name="checkbox"><label for="space_intensive_checkbox_2">Space Intensive</label>
                                            </div>
                                            <div>
                                                <input id="veggie_checkbox_2" type="checkbox" name="checkbox"><label for="veggie_checkbox_2">Veggie Gardening Accessories</label>
                                            </div>
                                        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 95px; max-height: 226px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                            </div>

                            <div class="sidebar-widget wow fadeInRight" style="visibility: hidden; animation-name: none;">
                                <h3>Filter by Price</h3>

                                <div class="price-filter-slider-container" data-currency="$">
                                    <div class="price-filter-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 18.32%; width: 43.4%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 18.32%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 61.72%;"></span></div>

                                    <input type="text" class="price-filter-min">
                                    <input type="text" class="price-filter-max">

                                    <a href="#" class="filter-now pull-lg-right animated-underline">Filter Now</a>
                                </div>
                            </div>

                            <div class="sidebar-widget wow fadeInRight" style="visibility: hidden; animation-name: none;">
                                <h3>Popular Tags</h3>

                                <ul class="popular-tags">
                                    <li><a href="#">Landscaping</a></li>
                                    <li><a href="#">Seed</a></li>
                                    <li><a href="#">Garden Design</a></li>
                                    <li><a href="#">Garden</a></li>
                                    <li><a href="#">Tools</a></li>
                                    <li><a href="#">Flowers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type-35-footer">
                <footer class="container-fluid padding-top-60 margin-top-40">
                    <div class="row">
                        <div class="container">
                            <div class="row equal-height">
                                <div class="col-lg-4 footer-widget-area">
                                    <h4>Quick Contact</h4>

                                    <form class="contact-form ajax-form">
                                        <input type="text" placeholder="Name" class="form-element" required="">
                                        <input type="email" placeholder="E-mail" class="form-element" required="">
                                        <textarea placeholder="Message" class="form-element" required=""></textarea>

                                        <input type="submit" value="Send" class="padding-horizontal-40">
                                        <div class="status-indicator"></div>
                                    </form>
                                </div>

                                <div class="col-lg-4 footer-widget-area">
                                    <h4>Useful Links</h4>

                                    <ul class="arrow-list">
                                        <li><a href="#">Home Landscape Construction</a></li>
                                        <li><a href="#">Home Snow Removal</a></li>
                                        <li><a href="#">About Us / Who We Are</a></li>
                                        <li><a href="#">Our Portfolio / Project</a></li>
                                        <li><a href="#">Pricing Tables &amp; Delivery Charges</a></li>
                                        <li><a href="#">Customer Reviews &amp; Testimonials</a></li>
                                        <li><a href="#">Locations We Service</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 footer-widget-area">
                                    <h4>Recent Testimonial</h4>

                                    <blockquote class="margin-bottom-30">
                                        David has visited our home twice since for minor the sprinkler adjustments and
                                        check that we are satisfied with the job. We would recommend Landscaping specialist
                                        to anyone seeking a professional landscape contractor
                                    </blockquote>

                                    <div class="margin-bottom-40">- Carmen &amp; James, California</div>

                                    <a href="#" class="pull-lg-right"><i class="icon-arrow-pointing-to-right font-size-13"></i> More Testimonials</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row copyright-row">
                        <div class="container">
                            Copyright © 2016. Made with <i class="fa fa-heart"></i> by Theme Suite
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
