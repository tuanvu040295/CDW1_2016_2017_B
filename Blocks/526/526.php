<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/526.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/526.less', 'css/526.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>

    </head>

    <body>
        <section class="type-526">
            <div class="container">
                <!-- Footer-->
                <div class="row">
                    <div class="type-f-footer">
                        <div class="fotter">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <div class="left">
                                            <img src="images/logosmall.jpg" alt="" class="img-footer com png ">
                                            <div class="credit_card amex"></div>
                                            <div class="credit_card bank"></div>
                                            <div class="credit_card cash"></div>
                                            <div class="credit_card googleckout"></div>
                                            <div class="credit_card mastercard"></div>
                                            <div class="credit_card paypal"></div>
                                            <div class="credit_card visa"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="right">
                                            <nav>
                                                <p>
                                                    <a href="#">Shop</a> | <a href="#">Terms and conditions</a> | <a href="#">Taxes</a> | <a href="#">Contact us</a>
                                                    <br> designed by <a href="#"><strong>Your Inspiration Themes</strong></a>
                                                </p>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Footer-->
            </div>
        </section>
        <script src="js/menu.js" type="text/javascript"></script>
    </body>
</html>