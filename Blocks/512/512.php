<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/512.less', 'css/512.css');
    ?>

    <link href="css/512.css" rel="stylesheet" type="text/css"/>

</head>

<body>
    <div class="type-512">
        <div class="container">
            <div class="col-md-8 col-xs-12 col-lg-9 col-sm-9">
                <div class="col-md-7 col-xs-12 col-lg-7 col-sm-7">
                    <div class="images">
                        <!-- YITH Magnifier Template -->
                        <div style="width: 100%; height: 100%; top: 0px; left: 0px; cursor: auto;">
                            <img src="images/awv087x08-4-470x660.jpg" title="awv087x08" id="main_img">
                        </div>
                        <div class="thumbnails">
                            <div class="row">
                                <img src="images/awv087x08-4-79x79.jpg" class="thumbnailss" title="awv087x08 (4)">
                                <img src="images/awv2-79x79.jpg" class="thumbnailss" title="awv(2)"> 
                                <img src="images/awv3-79x79.jpg" class="thumbnailss" title="awv(3)"> 
                                <img src="images/awv-79x79.jpg" class="thumbnailss" title="awv"> 
                                <img src="images/awv_2-79x79.jpg" class="thumbnailss" title="awv_2"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 col-lg-5 col-sm-5">
                    <div class="summary">
                        <h1 itemprop="name" >Belt</h1>
                        <div itemprop="offers" itemscope="" itemtype="#">
                            <p class="price"><span class=" amount">99.00&nbsp;<span >$</span></span>
                            </p>
                            <meta itemprop="price" content="99">
                            <meta itemprop="priceCurrency" content="USD">
                            <link itemprop="availability" href="#"> </div>
                        <div itemprop="description" class="description">
                            <p>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</p>
                        </div>
                        <form id='myform' method='POST' action='#'>
                            <label>Quantity</label>
                            <input type='button' value='-' class='qtyminus' field='quantity' />
                            <input type='text' name='quantity' value='0' class='qty' />
                            <input type='button' value='+' class='qtyplus' field='quantity' />
                            <button type="submit" class="button">Add to cart</button>
                            <div class="clearfix"></div>
                            <div class="product-actions buttons_2 group">
                                <div class="acaction first wishlist">
                                    <div >
                                        <div class=" show" style="display:block"> <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple" ><i></i>
                                                Wishlist</a> </div>
                                        <div class=" hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="#" rel="nofollow"><i></i>
                                                View Wishlist	 </a> </div>
                                        <div class=" hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="#" rel="nofollow"><i></i>
                                                View Wishlist	 </a> </div>
                                        <div style="clear:both"></div>
                                        <div ></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="acaction compare">
                                    <div class=" product"> <a href="" class="compare" data-product_id="139" rel="nofollow"><i></i>Compare</a> </div>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div class="product_meta"> <span >Categories:
                                <a href="#" rel="tag">Accessories</a>,
                                <a href="#" rel="tag">Belt</a>,
                                <a href="#" rel="tag">Guciarello</a>.</span>
                        </div>
                    </div>
                </div>
                <div class="socials-box">
                    <div class="row">
                        <a href="#" class="social facebook first col-md-3 col-lg-3 col-sm-6 col-xs-12" target="_blank"> <i></i>share on
                            <br> <span >Facebook</span> </a>
                        <a href="#" class="social pinterest col-md-3 col-lg-3 col-sm-6 col-xs-12" target="_blank"> <i></i>pin this item
                            <br> <span >on Pinterest</span> </a>
                        <a href="#" class="social twitter col-md-3 col-lg-3 col-sm-6 col-xs-12" target="_blank"> <i></i>share it on
                            <br> <span >Twitter</span> </a>
                        <a href="#" class="social email col-md-3 col-lg-3 col-sm-6 col-xs-12" target="_blank"> <i></i>Send to a
                            <br> <span >friend</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/minus.js" type="text/javascript"></script>
    <script>
        $(document).ready(function (e) {
            $('.thumbnailss').click(function (e) {
                $('#main_img').attr('src', $(this).attr('src'));
            });
        });
    </script>
</body>
