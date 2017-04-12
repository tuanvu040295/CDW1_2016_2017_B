<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/592.less', 'css/592.css');
        ?>
        <link href="css/592.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-592">
            <div class="container">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="containerCentered">
                            <h2>Great Versitility Included for Free</h2>
                            <p class="lead">Click on the Phone Screen</p>	
                        </div> 
                        <div class="carousel-inner">
                            <div class="item active">
                                <div id="sc-wrapper" class="sc-wrapper">
                                    <h2 class="sc-title">Superior Range</h2>
                                    <div class="sc-iphone sc-device">
                                        <a href="#"><img class="img-responsive" src="image/iPhone.png"></a>
                                        <span class="sc-text sc-sub">
                                            <p><span class="firstcharacter">D</span>uis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. </p>
                                        </span>
                                        <nav>
                                            <a href="#carousel-example-generic" data-slide="prev"><span class="fa fa-chevron-circle-left" aria-hidden="true"></span></a>
                                            <a href="#carousel-example-generic" data-slide="next"><span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div id="sc-wrapper" class="sc-wrapper">
                                    <h2 class="sc-title">Ultimate Flexibility</h2>					
                                    <div class="sc-iphone sc-device">
                                        <a href="#"><img src="image/iPhone.png"></a>
                                        <span class="sc-text sc-sub">
                                            <p><span class="firstcharacter">A</span><strong>cool way</strong> to show off your <strong>App</strong>.The app showcase is part of the page builder so you can add it anywhere.  Load as many screenshots as you need.</p>
                                            <p>Let your app stand apart with some animation.  A nice way for visitors to interact with your site.</p>
                                            <p>Just one of the <strong>extra goodies</strong> included with Scribe.</p>
                                        </span>
                                        <nav>
                                            <a href="#carousel-example-generic" data-slide="prev"><span class="fa fa-chevron-circle-left" aria-hidden="true"></span></a>
                                            <a href="#carousel-example-generic" data-slide="next"><span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                        </div>
                    </div>
                </div>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
            </div>
    </body>
</html>