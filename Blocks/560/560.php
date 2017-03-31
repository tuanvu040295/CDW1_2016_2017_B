<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/560.less', 'css/560.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/560.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-560">
            <div class="container">
                <!-- BEGIN SLIDES -->
                <div class="slides">
                    <!-- TITLE SLIDES -->
                    <div class="col-md-12">
                        <div class="row title">
                            <h2>WowWay</h2>
                        </div>
                    </div>
                    <div id="jssor_1" class="slide-images">
                        <div data-u="slides" class="slide">
                            <div class="row">
                                <img class="img-responsive" data-u="image" src="images/slide2@2x3.jpg"/>
                            </div>
                            <div>
                                <img class="img-responsive" data-u="image" src="images/slide2@2x4.jpg" />
                            </div>
                            <div>
                                <img class="img-responsive" data-u="image" src="images/slide3@2x3.jpg" />
                            </div>
                            <div>
                                <img class="img-responsive" data-u="image" src="images/slide3@2x4.jpg" />
                            </div>
                        </div>
                        <!-- BULLET NAVIGATOR -->
                        <div data-u="navigator" class="jssorb01">
                            <div data-u="prototype"></div>
                        </div>
                    </div>
                    <!-- END SLIDES -->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jssor.slider-23.0.0.mini.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>
