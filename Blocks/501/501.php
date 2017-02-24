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
        $less->compileFile('less/501.less', 'css/501.css');
        ?>
        <link href="css/501.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-501">
            <div class="container">
                <div class="row">
                    <article class="col-sm-4 col-md-4">
                        <figure>
                            <img src="images/img1.jpg" class="img-responsive" />
                            <h3>MULTIPURPOSE TEMPLATE</h3>
                        </figure>
                        <div class="content">

                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                            </p>
                            <div>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- box 1 -->
                    <article class="col-sm-4 col-md-4">     
                        <figure>
                            <img src="images/img2.jpg" class="img-responsive" />
                            <h3>WELL DOCUMENTED</h3>
                        </figure>
                        <div class="content">

                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                            </p>
                            <div>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!----box 2 --->
                    <article class="col-sm-4 col-md-4">
                        <figure>
                            <img src="images/img3.jpg" class="img-responsive" />
                            <h3>GREAT SUPPORT</h3>
                        </figure>
                        <div class="content">

                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                            </p>
                            <div>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!---- box 3 --->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>