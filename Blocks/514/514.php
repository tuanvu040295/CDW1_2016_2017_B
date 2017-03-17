<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/514.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/514.less', 'css/514.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <section class="type-514">
            <div class="container">
                <!--LIST OF PRODUCTS-->
                <section class="row">
                    <!-----------------------Begin Slide Show-------------------------------------->
                    <section class="col-md-2">           
                        <h5 class="title"><strong>OUR PARTNERS // TEHNOLOGIES USED</strong></h5>
                        <div class="control">
                            <button class="prev" data-slide="prev" href="#media" class="left carousel-control"><i class="fa fa-chevron-left"></i></button>
                            <button class="next" data-slide="next" href="#media" class="right carousel-control"><i class="fa fa-chevron-right"></i></button>
                        </div>
                    </section>
                    <!--SIDEBAR RIGHT-->
                    <section class='col-md-10 sidebar-products'>
                        <div class="carousel slide media-carousel" id="media">
                            <div class="carousel-inner">
                                <div class="item  active">
                                    <div>
                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/css3.png"></a>
                                        </figure>   

                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/css3.png"></a>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/css3.png"></a>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/css3.png"></a>
                                        </figure>  
                                    </div>
                                </div> <!--Slide 1-->

                                <div class="item">
                                    <div>
                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/html.png"></a>
                                        </figure>   

                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/html.png"></a>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/html.png"></a>
                                        </figure>

                                        <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/html.png"></a>
                                        </figure>    
                                    </div>
                                </div><!--Slide2-->
                            </div>
                        </div>                          
                    </section>
                    <!--/END SIDEBAR RIGHT-->
                    <div class="clear"></div>
                    <!-----------------------------Begin Key Word---------------------------->
                    <div data-id="118">
                        <article>
                            <div class="keywordbox eluidc6ed6ebf  kwd--light element-scheme--light" style="">just some keywords here, services or what any text you want</div>                       
                        </article><!-- end bghelper -->
                    </div>
                    <!----------------------------End Key Word------------------------------>
                </section>
                <!--/END LIST OF PRODUCTS-->
            </div>
        </section>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>