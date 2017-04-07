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
        $less->compileFile('less/590.less', 'css/590.css');
        ?>
        <link href="css/590.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="type-590">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p> © 2016 BeTheme. All Rights Reserved.<a class="link" href="#">Muffin group</a></p>
                                <a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>
    </div>
</body>
</html>
