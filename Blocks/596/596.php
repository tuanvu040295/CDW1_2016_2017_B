<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Untitled Document</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="font/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/596.less', 'css/596.css');
        ?>

        <link href="css/596.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <section class="type-596">

            <div class="banner">
                <div class="banner-row">
                    <h3>A Few App Highlights</h3>
                    <p>Back and Better then Ever</p>
                </div>
            </div>  

            <div class="hightlight">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-12">
                            <div class="box">
                                <div class="col-md-10 col-sm-12">
                                    <h4>Drag & Drop Simplicity</h4>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>                            
                                </div>
                                <div class="col-md-2 col-sm-12 highlight-icon">
                                    <i class="fa fa-coffee icon-icon" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="box">
                                <div class="col-md-10 col-sm-12">
                                    <h3>Bootstrap 3</h3>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>                            
                                </div>
                                <div class="col-md-2 col-sm-12 highlight-icon">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                </div>
                            </div>   
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="box">
                                <a href="#">
                                    <img src="image/ipad-front3.png">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="box">
                                <div class="col-md-2 col-sm-12 highlight-icon">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                </div>                    
                                <div class="col-md-10 col-sm-12">
                                    <h4>Parallax Backgrounds</h4>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>                            
                                </div>     
                            </div>



                            <div class="box">
                                <div class="col-md-2 col-sm-12 highlight-icon">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <h3>Tour Block</h3>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>                            
                                </div>
                            </div>
                        </div> 

                    </div>
                </div>
            </div>

        </section>

    </body>
</html>
