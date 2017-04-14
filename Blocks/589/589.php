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
        $less->compileFile('less/589.less', 'css/589.css');
        ?>
        <link href="css/589.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="type-589">
            <!--menu-->
            <!--endmenu-->
            <!--body-->
            <div class="ds">
                <div class="mod-buy">
                    <div class="buy-now">
                        <h2 >Creating with BeTheme is super fast and easy
                            <br>
                            Start your website today!
                        </h2>
                        <div class="btn-buynow">
                            <a href="#">BUY NOW FOR $59</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--endbody-->
        </section>
    </body>
</html>