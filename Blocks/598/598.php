<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Untitled Document</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/598.less', 'css/598.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/598.css">
    </head>

    <body>
        <div class="type_598">
            <!--BEGIN BANNER-->
            <div class="sc-stretch-banner">
                <div class="container">
                    <div class="col-md-6">
                        <!--TITLE-->
                        <h2 class="title">Custom Page Builder Blocks</h2>
                        <p class="text_left">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    </div>

                    <div class="col-md-5 col-md-offset-1 txtright">
                        <p class="text_right">Sed posuere consectetur est at lobortis. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
                    </div>
                </div>
            </div>
            <!--END BANNER-->
        </div>
    </body>
</html>
