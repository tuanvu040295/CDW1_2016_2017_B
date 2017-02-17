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
        $less->compileFile('less/type-a-5.less', 'css/type-a-5.css');
        ?>
        <link href="css/type-a-5.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-a-5">
            <div class="container">
                <div class="row">

                    <div data-id="104">
                        <div >

                            <div class="modulecontent">
                                <div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3>KALLYAS TEMPLATE IS AN ALL IN ONE PRODUCT WITH LOTS OF GOODIES AND FEATURES, BASED ON OWN FRAMEWORK</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                        </div>
                                        <div class="col-md-2">	<a href="#" target="_self" class="circlehover with-symbol" data-size="normal" data-position="top-left" data-align="right">
                                                <span class="text">FIND OUT MORE</span>
                                                <span class="symbol"><img src="images/ok.png" alt=""></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end modulecontent-->
                        </div><!-- end -->
                    </div><!-- end module -->

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>