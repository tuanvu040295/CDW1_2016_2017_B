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
                <div class="row">
                    <div id="primary" class="sidebar-right">
                        <div class="container">
                            <div class="row">
                                <!--PRODUCTS RIGHT-->
                                <div id="sidebar-shop2" class="sidebar group span2">
                                    <div id="yit_toggle_menu-4" class="widget-1 widget-first widget yit_toggle_menu">
                                        <div class="menu-toggle-container">
                                            <ul id="menu-toggle accordion1" class="menu open_all nav nav-stacked">
                                                <li class="dropdown opened panel active">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#firstLink">Shop by category</a>
                                                    <ul id="firstLink" class="collapse"class="sub-menu">
                                                        <li><a>Chairs</a></li>
                                                        <li><a>Beds</a></li>
                                                        <li><a>Sofas</a></li>
                                                        <li><a>Lamps</a></li>
                                                        <li><a>Beds</a></li>
                                                        <li><a>Chaise lounges</a></li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown opened panel active">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#secondLink">Shop by brand</a>
                                                    <ul id="secondLink" class="sub-menu collapse">
                                                        <li><a>Brand 1</a></li>
                                                        <li><a>Brand 2</a></li>
                                                        <li><a>Brand 3</a></li>
                                                        <li><a>Brand 4</a></li>
                                                        <li><a>Brand 5</a></li>
                                                        <li><a>Brand 6</a></li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown opened panel active">
                                                    <a data-toggle="collapse" data-parent="#accordion1" href="#thirdLink">Shop by price</a>
                                                    <ul id="thirdLink" class="sub-menu collapse">
                                                        <li><a>Free – 100 $</a></li>
                                                        <li><a>100 – 200 $</a></li>
                                                        <li><a>200 – 400 $</a></li>
                                                        <li><a>400 – 600 $</a></li>
                                                        <li><a>600 – 800 $</a></li>
                                                        <li><a>800 – 1000 $</a></li>
                                                        <li><a>1000 ad up</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="text-image-10" class="widget-2 widget-last widget text-image">
                                        <div class="text-image" style="text-align:left">
                                            <img class="lazy-loaded" src="images/banner.jpg">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/menu.js" type="text/javascript"></script>
    </body>

</html>