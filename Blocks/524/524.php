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
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="type-524">
                        <div class="moduletable">
                            <h4 class="moduletitle ">VM - Category</h4>
                            <!-- BEGIN MENU CATEGORY -->
                            <ul class="menu">
                                <li>
                                    <a href="#">Electronics</a>
                                </li>
                                <li>
                                    <a href="#">Fashion</a>
                                </li>
                                <li>
                                    <a href="#">Furniture</a>
                                </li>
                                <li>
                                    <a href="#">Jewlery</a>
                                </li>
                            </ul>
                            <!-- END MENU CATEGORY -->
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>