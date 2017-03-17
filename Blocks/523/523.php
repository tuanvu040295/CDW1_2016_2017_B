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
        $less->compileFile('less/523.less', 'css/523.css');
        ?>
        <link href="css/523.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="container">
            <div class="row">
                <!--SIDEBAR RIGHT-->
                <div class="col-md-3">
                    <div class="type-523">
                        <h2 class="sidebartitle ">VM - Manufacturer</h2>
                        <!--LIST OF MANUFACTURER-->
                        <div class="vmmanufacturermod">
                            <ul class="vmmanufacturer">
                                <li>
                                    <a href="#" data-rel="tooltip" data-placement="top" data-animation="true" data-original-title="Apple">
                                        <p><img src="images/apple-logo_120x120.jpg" alt="apple-logo"></p>			
                                        <span class="theHoverBorder"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-rel="tooltip" data-placement="top" data-animation="true" data-original-title="Samsung">
                                        <p><img src="images/samsung-logo-4bdaa5dc5b-seeklogo.com_120x120.gif" alt="samsung-logo-4bdaa5dc5b-seeklogo.com"></p>	
                                        <span class="theHoverBorder"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-rel="tooltip" data-placement="top" data-animation="true" data-original-title="Test manufacturer">
                                        <p><img src="images/english-book_120x120.png" alt="english-book"></p>			
                                        <span class="theHoverBorder"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--END LIST OF MANUFACTURER-->
                    </div>   
                    <!--/END SIDEBAR RIGHT-->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>