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
        $less->compileFile('less/type-a-2.less', 'css/type-a-2.css');
        ?>
        <link href="css/type-a-2.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-a-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div>
                            <div>
                                <img src="images/img1.jpg" class="img-responsive" />
                                <h3>MULTIPURPOSE TEMPLATE</h3>
                            </div>
                            <div class="content">

                                <div>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- box 1 -->
                    <div class="col-sm-4 col-md-4">
                        <div>
                            <div >
                                <img src="images/img2.jpg" class="img-responsive" />
                                <h3>WELL DOCUMENTED</h3>
                            </div>
                            <div class="content">

                                <div>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----box 2 --->
                    <div class="col-sm-4 col-md-4">
                        <div>
                            <div>
                                <img src="images/img3.jpg" class="img-responsive" />
                                <h3>GREAT SUPPORT</h3>
                            </div>
                            <div class="content">

                                <div>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---- box 3 --->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>