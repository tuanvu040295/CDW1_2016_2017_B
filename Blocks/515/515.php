<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/type-a-16.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/515.less', 'css/type-a-16.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-515">
            <div class="gray-area">
                <div class="container">
                    <section class="row">
                        <div class="bghelper">
                            <div class="row shop-features <br />
                                 <b>Notice</b>:  Undefined variable: style in <b>/nfs/c08/h01/mnt/171556/domains/hogash-demos.com/html/kallyas_joomla/modules/mod_hg_shop_features/tmpl/default.php</b> on line <b>12</b><br />
                                 ">
                                <div class="span3">
                                    <h3 class="title">SO WHAT'S <br>THE FUZZ</h3>
                                </div>

                                <figure class="span3">
                                    <div class="shop-feature">                                             
                                        <img src="images/shop-icon1.png" alt="">
                                        <h4>31 DAYS</h4>
                                        <h5>RETURN POLICY</h5>
                                    </div>
                                </figure>

                                <figure class="span3">
                                    <div class="shop-feature">
                                        <img src="images/shop-icon2.png" alt="">
                                        <h4>FREE AND FAST</h4>
                                        <h5>DELIVERY</h5>
                                    </div>
                                </figure>

                                <figure class="span3">
                                    <div class="shop-feature">
                                        <img src="images/shop-icon3.png" alt="">
                                        <h4>BEST PRICE</h4>
                                        <h5>GUARANTEED</h5>
                                    </div>
                                </figure>	
                            </div>
                        </div><!-- end bghelper -->
                    </section>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>