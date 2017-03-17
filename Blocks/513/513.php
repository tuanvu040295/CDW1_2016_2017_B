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
        $less->compileFile('less/513.less', 'css/513.css');
        ?>
        <link href="css/513.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-513">
            <div class="container">
                <section class="row">

                    <div class="col-md-8">
                        <h4 class="m_title"><b>LIMITED OFFERS</b></h4>
                        <div class="carousel slide">

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row"> 

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                    </div><!--.row-->
                                </div><!--Slide 1-->

                                <div class="item">
                                    <div class="row">
                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a href="#" class="thumbnail"><img src="images/img4_120x120.png" alt="Image" style="max-width:100%;"></a>
                                            <h3><a href="#">Black Suit</a></h3>
                                            <div class="price">
                                                <strong>€66,00</strong>				
                                            </div>
                                        </figure>

                                    </div><!--.row-->
                                </div><!--Slide 2-->

                            </div>
                        </div><!--.carousel-inner-->
                        <div id="controls">
                            <button class="prev" data-slide="prev" href="#Carousel" class="left carousel-control"><</button>
                            <button class="next" data-slide="next" href="#Carousel" class="right carousel-control">></button>
                        </div>
                        <!--.Carousel--> 
                    </div>

                    <div class="col-md-4">
                        <div class="video">
                            <div style="position:relative;height:0;padding-bottom:50%">
                                <iframe src="https://www.youtube.com/embed/Dkx4LYeFnVY?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="720" height="360" frameborder="0" allowfullscreen></iframe></div>
                        </div>
                    </div>
                 
                </section>
            </div><!--.container-->
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>