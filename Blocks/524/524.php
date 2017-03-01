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
        $less->compileFile('less/524.less', 'css/524.css');
        ?>
        <link href="css/524.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-524">
            <div class="container">
                <div class="row">
                    <aside>
                        <div class="col-md-3">

                            <div class="moduletable">
                                <h4 class="moduletitle ">VM - Category</h4>
                                <!-- BEGIN MENU CATEGORY -->
                                <ul class="menu">
                                    <li>
                                        <div>
                                            <a href="#">Electronics</a>	</div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#">Fashion</a>	</div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#">Furniture</a>	</div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#">Jewlery</a>	</div>
                                    </li>
                                </ul>
                                <!-- END MENU CATEGORY -->
                            </div>                       
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>