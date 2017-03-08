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
        $less->compileFile('less/512.less', 'css/512.css');
        ?>
        <link href="css/512.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        

    </head>

    <body>
        <div class="type-512">
            <div class="container">
                <div class="row">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">FEATURED PRODUCTS</a></li>
                            <li>
                                <a href="#tab2" data-toggle="tab">BEST SELLING PRODUCTS</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- BEGIN FEATURED PRODUCTS -->
                            <div class="tab-pane active" id="tab1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN CAROUSEL SLIDE -->
                                            <div id="Carousel" class="carousel slide">      
                                                <div class="carousel-inner">
                                                    <!-- BEGIN FEATURED PRODUCTS ITEMS -->
                                                    <div class="item active">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                        </div><!--.row-->
                                                    </div>
                                                    <!-- END FEATURED PRODUCTS ITEMS -->
                                                </div>
                                                <!-- BEGIN BUTTON CONTROLS -->
                                                <div id="controls">
                                                    <a class="prev" data-slide="prev" href="#Carousel" class="carousel-control">‹</a>
                                                    <a class="next" data-slide="next" href="#Carousel" class="carousel-control">›</a>
                                                </div>
                                                <!-- END BUTTON CONTROLS -->
                                            </div>
                                            <!-- BEGIN CAROUSEL SLIDE  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END FEATURED PRODUCTS -->
                            <!-- BEGIN BEST SELLING PRODUCTS -->
                            <div class="tab-pane" id="tab1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN CAROUSEL SLIDE -->
                                            <div id="Carousel" class="carousel slide">
                                                <div class="carousel-inner">
                                                    <!-- BEGIN BEST SELLING PRODUCTS ITEMS -->
                                                    <div class="item active">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...

                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                        </div><!--.row-->
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>

                                                                <p> See the world in a different way with the new Apple iPad with Retina display...

                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="thumbnail"><img src="images/img255284_31102012163113_0_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                                                <h3><a href="#">Ipad 4</a></h3>
                                                                <p> See the world in a different way with the new Apple iPad with Retina display...
                                                                </p>
                                                                <div class="price">
                                                                    <span>€68,00</span>					
                                                                </div>
                                                            </div>
                                                        </div><!--.row-->
                                                    </div>
                                                    <!-- END FEATURED PRODUCTS ITEMS -->
                                                </div>
                                                <!-- BEGIN BUTTON CONTROLS -->
                                                <div id="controls">
                                                    <a class="prev" data-slide="prev" href="#Carousel" class="carousel-control">‹</a>
                                                    <a class="next" data-slide="next" href="#Carousel" class="carousel-control">›</a>
                                                </div>
                                                <!-- END BUTTON CONTROLS -->
                                            </div>
                                            <!-- BEGIN CAROUSEL SLIDE  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END BEST SELLING PRODUCTS -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
    </body>
</html>