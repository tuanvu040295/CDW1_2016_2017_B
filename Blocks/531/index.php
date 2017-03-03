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
                    <!--Related Products-->
                    <div class="row">
                        <div class="slider-row">
                            <h4>Related Products</h4>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="carousel carousel-showsixmoveone slide" id="carousel123">
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <div class="col-md-2 col-margin">
                                                <a href="#"><img src="images/0097560_PE238217_S5-copia-158x158.jpg"></a>
                                                <div class="  ie-content-metro">
                                                    <a href="#" rel="nofollow" class="details">Details</a>
                                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="261" data-product_sku="" class="button add_to_cart_button ">Add to cart</a>
                                                    <div class="ie-text ">
                                                        <h3>Fantasy sofa</h3>
                                                        <span class="price">
                                                            <del>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>1,200.00</span>
                                                            </del>
                                                            <ins>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>850.00</span>
                                                            </ins>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-md-2 col-margin">
                                                <a href="#"><img src="images/0152046_PE310361_S5-copia-158x158.jpg"></a>
                                                <div class="  ie-content-metro">
                                                    <a href="#" rel="nofollow" class="details">Details</a>
                                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="261" data-product_sku="" class="button add_to_cart_button ">Add to cart</a>
                                                    <div class="ie-text ">
                                                        <h3>Fantasy sofa</h3>
                                                        <span class="price">
                                                            <del>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>1,200.00</span>
                                                            </del>
                                                            <ins>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>850.00</span>
                                                            </ins>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-md-2 col-margin">
                                                <a href="#"><img src="images/0155466_PE313609_S5-copia-158x158.jpg">
                                                    <span class="onsale">Sale!</span>
                                                </a>
                                                <div class="  ie-content-metro">
                                                    <a href="#" rel="nofollow" class="details">Details</a>
                                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="261" data-product_sku="" class="button add_to_cart_button ">Add to cart</a>
                                                    <div class="ie-text ">
                                                        <h3>Fantasy sofa</h3>
                                                        <span class="price">
                                                            <del>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>1,200.00</span>
                                                            </del>
                                                            <ins>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>850.00</span>
                                                            </ins>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-md-2 col-margin">
                                                <a href="#"><img src="images/0173455_PE327656_S5-copia-158x158.jpg"></a>
                                                <div class="  ie-content-metro">
                                                    <a href="#" rel="nofollow" class="details">Details</a>
                                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="261" data-product_sku="" class="button add_to_cart_button ">Add to cart</a>
                                                    <div class="ie-text ">
                                                        <h3>Fantasy sofa</h3>
                                                        <span class="price">
                                                            <del>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>1,200.00</span>
                                                            </del>
                                                            <ins>
                                                                <span class=" amount">
                                                                    <span class=" ">£</span>850.00</span>
                                                            </ins>
                                                        </span>
                                                    </div>
                                                </div>
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