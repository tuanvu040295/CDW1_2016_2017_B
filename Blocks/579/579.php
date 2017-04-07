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
        $less->compileFile('less/579.less', 'css/579.css');
        ?>
        <link href="css/579.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-579">
            <section class="container divided-section">
                <div class="divider-circle divider-circle--light"></div>
                <div class="divider-vertical hidden-xs"></div>
                <!-- Begin row -->
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="section-title section-title--smaller">Latest <span class="text-highlight">post</span>
                        </h2>
                        <article class="post post--latest">
                            <a href="#">
                                <div class="post__image">
                                    <img src="images/post-photo-20.jpg" alt="">
                                </div>
                                <div class="post__description">
                                    <h2 class="post__title">Proin gravida dapibus metus, et pretium lorem accumsan suscipit.</h2>
                                    <p class="post__date">February 26, 2014</p>
                                    <div class="clearfix hidden-lg"></div>
                                    <p class="post__text">Maecenas in purus sit amet nisl condimentum venenatis. Morbi fringilla imperdiet nisi, a rhoncus eros iaculis sed. Nulla eget libero eros, vitae fringilla nisi. In hac habitasse platea dictumst.  Suspendisse viverra velit eu ante tristique adipiscing mollis sapien lobortis. Quisque gravida scelerisque vehicula.  In hac habitasse platea dictumst.
                                        <span class="post__more">
                                            <i class="icon-circle icon-circle--small fa fa-arrow-right"></i>
                                        </span>
                                    </p>
                                </div>
                                <div class="divider-simple visible-xs"></div>
                            </a>
                        </article>

                    </div>
                    <div class="col-sm-6 choose-us">
                        <h2 class="section-title section-title--smaller">Why choose<span class="text-highlight">Appic</span></h2>
                        <div class="panel-group accordion accordion--secondary" id="accordion2">
                            <!-- Accordion item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" class="collapsed">
                                            <span class="marker"></span>
                                            Sed ac lacus eu arcu lacinia dictum.
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseFive" style="height: 0px;">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet quam augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nisi nisi, pulvinar a mattis quis, tincidunt sed risus. Quisque ipsum felis, fringilla et tristique eget, mattis quis massa.
                                    </div>
                                </div>
                            </div>
                            <!-- End accordion item -->
                            <!-- Accordion item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
                                            <span class="marker"></span>
                                            Fusce lacinia purus in urna tristique auctor. 
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseSix" style="height: 0px;">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet quam augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nisi nisi, pulvinar a mattis quis, tincidunt sed risus. Quisque ipsum felis, fringilla et tristique eget, mattis quis massa.
                                    </div>
                                </div>
                            </div>
                            <!-- End accordion item -->
                            <!-- Accordion item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">
                                            <span class="marker"></span>
                                            Fusce vitae turpis elit.
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseSeven">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet quam augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nisi nisi, pulvinar a mattis quis, tincidunt sed risus. Quisque ipsum felis, fringilla et tristique eget, mattis quis massa.
                                    </div>
                                </div>
                            </div>
                            <!-- End accordion item -->
                            <!-- Accordion item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">
                                            <span class="marker"></span>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseEight">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet quam augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nisi nisi, pulvinar a mattis quis, tincidunt sed risus. Quisque ipsum felis, fringilla et tristique eget, mattis quis massa.
                                    </div>
                                </div>
                            </div>
                            <!-- End accordion item -->
                        </div>
                    </div>

                </div>
                <!-- End row -->
                <div class="divider-circle divider-circle--light divider-circle-margin"></div>
            </section>
        </div>
    </body>

</html>