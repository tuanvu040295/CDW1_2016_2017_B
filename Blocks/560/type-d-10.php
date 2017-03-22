<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-10.less', 'css/style.css');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="mod_k">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="row ">
                            <div class="col-md-12 header">
                                <header class="sectionTitle clearfix">
                                    <h3><strong>PROJECT TEASER</strong></h3>
                                </header>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">

                                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                    <ol class="carousel-indicators" style="margin-left: 30px;">
                                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel" data-slide-to="1"></li>
                                        <li data-target="#carousel" data-slide-to="2"></li>
                                        <li data-target="#carousel" data-slide-to="3"></li>
                                    </ol>
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item"><img class="img-responsive" src="images/slide2@2x4.jpg">
                                            
                                        </div>
                                        <div class="item"><img class="img-responsive" src="images/slide3@2x4.jpg">
                                            
                                        </div>
                                        <div class="item"><img class="img-responsive" src="images/slide3@2x3.jpg">
                                            
                                        </div>
                                        <div class="item"><img class="img-responsive" src="images/slide3@2x4.jpg">
                                            
                                        </div>
                                    </div>
                                    <!-- Carousel nav -->
                                   
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
