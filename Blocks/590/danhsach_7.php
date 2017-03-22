<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style1.less', 'css/stylee.css');
        ?>
        <link href="css/stylee.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="type_43">
            <!--menu-->
            
            <!--endmenu-->

            <!--body-->

            <div class="ds">
                

                
                
                

                


                
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p style="margin: 0;float: left;margin-top: 18px;color: #cdcdce;"> © 2016 BeTheme. All Rights Reserved. <a href="#">Muffin group</a></p>

                                <a href="#"><i class="fa fa-angle-up" aria-hidden="true" style="font-size: 50px;float: right;"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>


        </div>
        <!--endbody-->



    </div>
</body>
</html>
