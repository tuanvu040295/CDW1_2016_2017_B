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
        $less->compileFile('less/502.less', 'css/502.css');
        ?>
        <link href="css/502.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <section class="type-502">
            <!------------main-1------------>
            <div class="container">
                <div class="row">           
                    <div data-id="101">
                        <div>
                            <div class="modulecontent">
                                <div class="row services_box ">

                                    <div class="col-sm-4 col-md-4">
                                        <!-- BEGIN BOX 1 -->
                                        <div class="box">
                                            <div class="icon">
                                                <figure>
                                                    <img src="images/ico-01.png" alt="WEB DESIGN SERVICES">
                                                </figure>
                                            </div>
                                            <h4 class="title">WEB DESIGN SERVICES</h4>
                                            <ul class="list-style1">
                                                <li>Content management systens</li>
                                                <li>Virtual shops and ecommerce</li>
                                                <li>Presentation websites</li>
                                                <li>Online catalogues</li>
                                                <li>Portal systems</li>
                                                <li>&amp; any other dynamic website</li>
                                            </ul>
                                        </div>
                                        <!-- END BOX1 -->
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <!-- BEGIN BOX 2 -->
                                        <div class="box">
                                            <div class="icon">
                                                <figure>
                                                    <img src="images/ico-02.png" alt="GRAPHIC DESIGN SERVICES">
                                                </figure>
                                            </div>
                                            <h4 class="title">GRAPHIC DESIGN SERVICES</h4>
                                            <ul class="list-style1">
                                                <li>Logo design</li>
                                                <li>Flyers &amp; Brochures</li>
                                                <li>Business Cards</li>
                                                <li>Stationery Design</li>
                                                <li>Powerpoint presentation</li>
                                                <li>Print Ads / Magazine</li>
                                                <li>Banners</li>
                                            </ul>
                                        </div>
                                        <!-- END BOX 2 -->
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <!-- BEGIN BOX 3 -->
                                        <div class="box">
                                            <div class="icon">
                                                <figure>
                                                    <img src="images/ico-03.png" alt="INTERNET MARKETING">
                                                </figure>
                                            </div>
                                            <h4 class="title">INTERNET MARKETING</h4>
                                            <ul class="list-style1">
                                                <li>Search engine optimisation</li>
                                                <li>Search engine marketing</li>
                                                <li>Internet advertising</li>
                                                <li>Web analysis</li>
                                                <li>Blog marketing</li>
                                            </ul>
                                        </div>
                                        <!-- END BOX 3 -->
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>