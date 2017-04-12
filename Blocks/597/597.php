<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Untitled Document</title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/597.less', 'css/597.css');
        ?>
        <link href="css/597.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="type-597">
            <section class="sc-parallax" style="font-size: 16px; background-position: 50% 72.25px;" data-stellar-background-ratio="0.5"><div class="row">
                    <div class="containerCentered">
                        <h3></h3></div> 
                    <div class="sc-mask"></div>
                    <div class="container">
                        <div id="aq-block-27-6" class="aq-block aq-block-pg_testimonial_block col-md-12 col-xs-12 clearfix">				
                            <div class="flexslider testimonials">
                                <ul class="slides">
                                    <li class="testimonial  row-fluid flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                        <div class="testimonial-body">
                                            <p>There is no design without discipline. There is no discipline without intelligence.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            —&nbsp;<a href="#"><span class="author">Massimo Vignelli</span></a>								<span class="company"></span>
                                        </div>
                                    </li>
                                </ul><ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#" tabindex="-1"></a></li><li><a class="flex-next flex-disabled" href="#" tabindex="-1"></a></li></ul></div>
                        </div>
                    </div> 
                </div>
            </section>     
        </div>
    </body>
</html>
