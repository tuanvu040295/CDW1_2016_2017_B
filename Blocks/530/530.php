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
        $less->compileFile('less/530.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-530">
            <div class="container type-530 content">
                <section class="row">
                    <div id="primary" class="sidebar-right">
                        <!--PRODUCTS RIGHT-->
                        <article class="sidebar group">
                            <summary class="widget yit_toggle_menu">  
                                <ul class="menu nav nav-stacked">
                                    <li class="dropdown opened panel active">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#firstLink">Shop by category</a>
                                        <ul id="firstLink" class="collapse">
                                            <li><strong>Chairs</strong></li>
                                            <li><strong>Beds</strong></li>
                                            <li><strong>Sofas</strong></li>
                                            <li><strong>Lamps</strong></li>
                                            <li><strong>Beds</strong></li>
                                            <li><strong>Chaise lounges</strong></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown opened panel active">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#secondLink">Shop by brand</a>
                                        <ul id="secondLink" class="collapse">
                                            <li><strong>Brand 1</strong></li>
                                            <li><strong>Brand 2</strong></li>
                                            <li><strong>Brand 3</strong></li>
                                            <li><strong>Brand 4</strong></li>
                                            <li><strong>Brand 5</strong></li>
                                            <li><strong>Brand 6</strong></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown opened panel active">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#thirdLink">Shop by price</a>
                                        <ul id="thirdLink" class="collapse">
                                            <li><strong>Free – 100 $</strong></li>
                                            <li><strong>100 – 200 $</strong></li>
                                            <li><strong>200 – 400 $</strong></li>
                                            <li><strong>400 – 600 $</strong></li>
                                            <li><strong>600 – 800 $</strong></li>
                                            <li><strong>800 – 1000 $</strong></li>
                                            <li><strong>1000 ad up</strong></li>
                                        </ul>
                                    </li>
                                </ul>
                            </summary>
                            <div class="widget">
                                <img class="lazy-loaded" src="images/banner.jpg">
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>