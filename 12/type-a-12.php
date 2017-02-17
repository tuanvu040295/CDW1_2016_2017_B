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
        $less->compileFile('less/type-a-12.less', 'css/type-a-12.css');
        ?>
        <link href="css/type-a-12.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-a-12">
            <div id="user1" class="container">
                <div class="row">

                    <div class="moduletable col-lg-12 ">

                        <h4 class="moduletitle m_title">SOME OF OUR LATEST OFFERS</h4>
                        <div class="modulecontent">

                            <div class="row offer-banners"> 
                                <div class="col-lg-4">
                                    <p><a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/bnr1.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a></p>
                                </div>
                                <div class="col-lg-5">
                                    <p><a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/bnr2.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a></p>
                                </div>
                                <div class="col-lg-3">
                                    <p><a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/bnr3.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a> 
                                        <a class="hoverborder" href="#"><span class="hoverBorderWrapper"><img src="images/bnr4.jpg" border="0" alt=""><span class="theHoverBorder"></span></span></a>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end modulecontent-->
                    </div><!-- end module -->


                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>