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
        $less->compileFile('less/513.less', 'css/513');
        ?>
        <link href="css/513.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-513">
            <div class="container type-513-content">
                <div class="row">

                    <div class="col-md-8">
                        <h4 class="moduletitle m_title">LIMITED OFFERS</h4>
                        <div id="Carousel" class="carousel slide">

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/1344484_60502956_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Chairs Pack</a></h3>
                                            <div class="price">
                                                <span>€68,00</span>					
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/1344484_60502956_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Chairs Pack</a></h3>
                                            <div class="price">
                                                <span>€68,00</span>					
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/1344484_60502956_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Chairs Pack</a></h3>
                                            <div class="price">
                                                <span>€68,00</span>					
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/1344484_60502956_120x120.jpg" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Chairs Pack</a></h3>
                                            <div class="price">
                                                <span>€68,00</span>					
                                            </div>
                                        </div>

                                    </div><!--.row-->
                                </div><!--Slide 1-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <span>€66,00</span>					
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <span>€66,00</span>					
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <span>€66,00</span>					
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <span>€66,00</span>					
                                            </div>
                                        </div>

                                    </div><!--.row-->
                                </div><!--Slide 2-->

                            </div>
                        </div><!--.carousel-inner-->
                        <div id="controls">
                            <a class="prev" data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                            <a class="next" data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                        </div>
                        <!--.Carousel--> 
                    </div>

                    <div class="col-md-4">
                        <div class="video">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Dkx4LYeFnVY?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                </div>
            </div><!--.container-->
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>