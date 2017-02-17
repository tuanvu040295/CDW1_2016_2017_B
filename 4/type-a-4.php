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
        $less->compileFile('less/type-a-4.less', 'css/type-a-4.css');
        ?>
        <link href="css/type-a-4.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-a-4">
            <div class="container">
                <div class='row'>
                    <div class="col-md-3">
                        <h3>RECENT WORKS</h3>		
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>		
                    </div>

                    <div class='col-md-9'>
                        <div class="carousel slide media-carousel" id="media">
                            <div class="carousel-inner">
                                <div class="item  active">
                                    <div>
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work1.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>          
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work2.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work3.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work1.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>          
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work2.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work3.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work1.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>          
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work2.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="thumbnail" href="#"><img alt="" src="images/work3.jpg"></a>
                                            <div class="details">
                                                <span class="bg"></span>
                                                <h4>Business cards project</h4>
                                                <span>Graphic Design</span>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                            <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#media" class="right carousel-control">›</a>
                        </div>                          
                    </div>

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>