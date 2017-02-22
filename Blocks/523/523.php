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
        <div class="type-523">
            <div id="user1" class="container">
                <div class="row">
                    <!--SIDEBAR RIGHT-->
                    <div class="col-md-3">
                        <div class="moduletable " id="mod205" data-id="205">
                            <div class="bghelper">
                                <h4 class="moduletitle ">VM - Manufacturer</h4>
                                <!--LIST OF MANUFACTURER-->
                                <div class="modulecontent">
                                    <div class="vmmanufacturermod vmgroup">
                                        <ul class="vmmanufacturer clearfix ">
                                            <li>
                                                <a href="#" data-rel="tooltip" data-placement="top" data-animation="true" data-original-title="Apple">
                                                    <img src="images/apple-logo_120x120.jpg" alt="apple-logo">			
                                                    <span class="theHoverBorder"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-rel="tooltip" data-placement="top" data-animation="true" data-original-title="Samsung">
                                                    <img src="images/samsung-logo-4bdaa5dc5b-seeklogo.com_120x120.gif" alt="samsung-logo-4bdaa5dc5b-seeklogo.com">		
                                                    <span class="theHoverBorder"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-rel="tooltip" data-placement="top" data-animation="true" data-original-title="Test manufacturer">
                                                    <img src="images/english-book_120x120.png" alt="english-book">			
                                                    <span class="theHoverBorder"></span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!--END LIST OF MANUFACTURER-->
                            </div>
                        </div>
                    </div>
                    <!--/END SIDEBAR RIGHT-->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>