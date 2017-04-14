<!DOCTYPE html>

<html>

    <head>
        <title>Đồ án web 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/581.less', 'css/581.css');
        ?>
        <link href="css/581.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <section class="type-581">
            <div class="universe hidden-xs">
                <div class="pattern-light-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-5">
                                <h2 class="section-title section-title--light">Welcome to APPIC
                                    <span class="text-highlight">universe</span>
                                </h2>      
                            </div>
                            <div class="col-sm-8 col-md-7 circle-buttons-holder">
                                <!-- Circle button -->
                                <div class="circle-button-wrapper circle-button--smaller-wraper ">
                                    <div class="circle-button circle-button--smaller">
                                        <h4 class="circle-button__title">Discover</h4>
                                        <a class="circle-button-second" href="#">
                                            <h4 class="circle-button__title">Discover</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Circle button -->	

                                <!-- Circle button -->
                                <div class="circle-button-wrapper circle-button--smaller-wraper">
                                    <div class="circle-button circle-button--smaller">
                                        <h4 class="circle-button__title">Share</h4>
                                        <a class="circle-button-second" href="#">
                                            <h4 class="circle-button__title">Share</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Circle button -->	

                                <!-- Circle button -->
                                <div class="circle-button-wrapper circle-button--smaller-wraper">
                                    <div class="circle-button circle-button--smaller">
                                        <h4 class="circle-button__title">Enjoy</h4>
                                        <a class="circle-button-second" href="#">
                                            <h4 class="circle-button__title">Enjoy</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Circle button -->	
                            </div>
                            
                        </div>
                    </div>
                    <div class="decorative-lines"></div>
                </div>
            </div>
        </section>
    </body>

</html>