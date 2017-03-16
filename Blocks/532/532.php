<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/532.less', 'css/532.css');
        ?>
        <link href="css/532.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-532">
            <div class="container">
                <div class="row">
                    <section>
                        <!--BEGIN DETAIL PRODUCTS-->
                        <div class="col-md-10 content group">
                            <div class="row">
                                <div class="group">
                                    <h1>Single bed</h1>
                                    <p itemprop="breadcrumb">
                                        <a class="home" href="#">Home</a> &nbsp;/&nbsp;<a href="#">Category</a>&nbsp;/&nbsp;<a href="#">Beds</a>&nbsp;/&nbsp;Single bed
                                    </p>
                                </div>
                            </div>
                            <!--BEGIN IMAGES DETAIL PRODUCTS-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="row col-md-12 large-pic">
                                            <figure><img src="images/sp1.jpg" class="img-responsive"></figure>
                                        </div>
                                    </div>
                                    <div class="row row3">
                                        <div class="col-md-4 col-xs-4 small-pic">
                                            <figure><a href="#"><img src="images/sp1.jpg" class="img-responsive"></a></figure>
                                        </div>
                                        <div class="col-md-4 col-xs-4 small-pic blind">
                                            <figure><a href="#"><img src="images/sp2.jpg" class="img-responsive"></a></figure>
                                        </div>
                                        <div class="col-md-4 col-xs-4 small-pic blind">
                                            <figure><a href="#"><img src="images/sp3.jpg" class="img-responsive"></a></figure>
                                        </div>
                                    </div>
                                </div>
                                <!--END IMAGES DETAIL PRODUCTS-->
                                <!--BEGIN DESCRIPTION PRODUCTS-->
                                <div class="col-md-6">
                                    <div class="summary">
                                        <h2 class="fn hide" itemprop="name">Single bed</h2>
                                        <div itemprop="description" class="group">
                                            <article>
                                                <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum.</p>
                                                <p>Donec nisi est, tempus eget. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget.</p>
                                            </article>
                                        </div>
                                        <form class="cart" method="post" enctype="multipart/form-data">
                                            <div class="Quantity">
                                                <label>Quantity</label>
                                                <input type='button' value='-' class='qtyminus' field='quantity' />
                                                <input type='text' name='quantity' value='0' class='qty' />
                                                <input type='button' value='+' class='qtyplus' field='quantity' />
                                            </div>
                                            <div class="woocommerce-price-and-add group">
                                                <div class="woocommerce-price">
                                                    <div itemprop="offers" itemscope="" itemtype="#">
                                                        <p class="price">
                                                            <span>Price:</span>
                                                            <del>
                                                                <span class="amount"><span>£</span>400.00</span>
                                                            </del>
                                                            <ins>
                                                                <span class="amount"><span>£</span>375.00</span>
                                                            </ins>
                                                        </p>
                                                        <meta itemprop="priceCurrency" content="GBP">
                                                        <link itemprop="availability" href="#">
                                                    </div>
                                                </div>
                                                <div class="woocommerce-add-to-cart">
                                                    <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                                    <input type="hidden" name="add-to-cart" value="389">
                                                </div>
                                            </div>
                                        </form>
                                        <div>
                                            <div class="show">
                                                <a href="#" rel="nofollow" data-product-id data-product-type="simple"> Add to Wishlist</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <a href="#" class="compare button" data-product_id rel="nofollow">Compare</a>
                                        <div class="product_meta">
                                            <span>Categories: <a href="#" rel="tag">Beds</a>, <a href="#" rel="tag">Brand 1</a>.</span>
                                        </div>
                                    </div>
                                </div>
                                <!--END DESCRIPTION PRODUCTS-->
                            </div>
                        </div>
                        <!--END DETAIL PRODUCTS-->
                    </section>
                </div>
            </div>
        </div>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>
        <script src="js/minus.js" type="text/javascript"></script>
    </body>

</html>
