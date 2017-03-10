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
        $less->compileFile('less/521.less', 'css/521.css');
        ?>
        <link href="css/521.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-521">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="moduletable ">
                            <h4 class="moduletitle ">VM - Featured products</h4>
                            <div class="modulecontent">
                                <div class="product-list-item">
                                    <span class="hover"></span>
                                    <figure class="image">
                                        <a href="#" title="Galaxy Tab II">
                                            <img src="images/img229527_17052012164027_0_120x120.jpg" border="0">
                                        </a>
                                    </figure>	
                                    <div class="prod-details">
                                        <h3><a href="#">Galaxy Tab II</a></h3>
                                        <p class="desc">For stunning and inventive handheld entertainment look no further than the Samsung Galaxy Tab 2...</p>                                            
                                        <div class="price">
                                            <span>€400,00</span>			
                                        </div>
                                    </div>
                                </div><!-- end product-list-item -->
                            </div><!-- end modulecontent-->
                        </div>			
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>