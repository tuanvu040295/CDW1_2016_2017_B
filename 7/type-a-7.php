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
        $less->compileFile('less/type-a-7.less', 'css/type-a-7.css');
        ?>
        <link href="css/type-a-7.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-a-7">   
            <div class="container">
                <div class="row">

                    <div data-id="111">
                        <div>

                            <div class="modulecontent">
                                <div class="row latest_posts acc-style ">
                                    <div class="col-md-12">
                                        <h3 class="m_title">LATEST POSTS</h3>

                                        <a href="#" class="viewall">VIEW ALL -</a>

                                    </div>
                                    <div class="clear"></div>
                                    <div class = "row" style="padding-top: 50px;border-top: 4px solid #E7E7E7;">

                                        <div class = "col-sm-6 col-md-3">
                                            <a href = "#" class = "thumbnail">
                                                <img src = "images/img1.jpg" alt = "Generic placeholder thumbnail">
                                            </a>
                                            <div class = "caption">
                                                <h3>Neque porro quisquam est, qui dolorem</h3>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring...</p>

                                                <p>
                                                    <a href = "#" class = "btn btn-primary" role = "button">
                                                        READ MORE +
                                                    </a> 

                                                </p>

                                            </div>
                                        </div>

                                        <div class = "col-sm-6 col-md-3">
                                            <a href = "#" class = "thumbnail">
                                                <img src = "images/img2.jpg" alt = "Generic placeholder thumbnail">
                                            </a>
                                            <div class = "caption">
                                                <h3>Neque porro quisquam est, qui dolorem</h3>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring...</p>

                                                <p>
                                                    <a href = "#" class = "btn btn-primary" >
                                                        READ MORE +
                                                    </a> 

                                                </p>

                                            </div>
                                        </div>

                                        <div class = "col-sm-6 col-md-3">
                                            <a href = "#" class = "thumbnail">
                                                <img src = "images/img3.jpg" alt = "Generic placeholder thumbnail">
                                            </a>
                                            <div class = "caption">
                                                <h3>Neque porro quisquam est, qui dolorem</h3>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring...</p>

                                                <p>
                                                    <a href = "#" class = "btn btn-primary" >
                                                        READ MORE +
                                                    </a> 

                                                </p>

                                            </div>
                                        </div>

                                        <div class = "col-sm-6 col-md-3">
                                            <a href = "#" class = "thumbnail">
                                                <img src = "images/img1.jpg" alt = "Generic placeholder thumbnail">
                                            </a>
                                            <div class = "caption">
                                                <h3>Neque porro quisquam est, qui dolorem</h3>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring...</p>

                                                <p>
                                                    <a href = "#" class = "btn btn-primary">
                                                        READ MORE +
                                                    </a> 
                                                </p>

                                            </div>
                                        </div>

                                    </div>

                                </div>			
                            </div><!-- end modulecontent-->
                        </div><!-- end bghelper -->
                    </div><!-- end module -->

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>