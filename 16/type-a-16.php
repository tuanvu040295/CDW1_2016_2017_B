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
        $less->compileFile('less/type-a-16.less', 'css/type-a-16.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-a-16">
            <div class="gray-area">

                <div id="user12" class="container">
                    <div class="row ">

                        <div class="moduletable" id="mod215" data-id="215">
                            <div class="bghelper">


                                <div class="modulecontent">
                                    <div class="row shop-features <br />
                                         <b>Notice</b>:  Undefined variable: style in <b>/nfs/c08/h01/mnt/171556/domains/hogash-demos.com/html/kallyas_joomla/modules/mod_hg_shop_features/tmpl/default.php</b> on line <b>12</b><br />
                                         ">

                                        <div class="span3">
                                            <h3 class="title">SO WHAT'S <br>THE FUZZ</h3>
                                        </div>

                                        <div class="span3">
                                            <div class="shop-feature">
                                                <a href="#" target="_self">
                                                    <img src="images/shop-icon1.png" alt="">
                                                    <h4>31 DAYS</h4>
                                                    <h5>RETURN POLICY</h5>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="span3">
                                            <div class="shop-feature">
                                                <img src="images/shop-icon2.png" alt="">
                                                <h4>FREE AND FAST</h4>
                                                <h5>DELIVERY</h5>
                                            </div>
                                        </div>

                                        <div class="span3">
                                            <div class="shop-feature">
                                                <img src="images/shop-icon3.png" alt="">
                                                <h4>BEST PRICE</h4>
                                                <h5>GUARANTEED</h5>
                                            </div>
                                        </div>	
                                    </div>
                                </div><!-- end modulecontent-->
                            </div><!-- end bghelper -->
                        </div><!-- end module -->


                    </div>
                </div><!-- end #user12 -->
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>