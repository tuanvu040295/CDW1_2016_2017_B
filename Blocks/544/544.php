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
        $less->compileFile('less/544.less', 'css/544.css');
        ?>
    </head>

    <body>
        <div class="type-544">
             <div class="container">
                <div class="row">
                    <!--BEGIN IMAGE BANER -->
                    <div class="col-md-12 hidden-xs">
                        <a href=""><img src="images/women-dresses-6.jpg" alt="BANNER" width="100%"/></a>
                    </div>
                    <!--END IMAGE BANER -->
                </div>
            </div>
        </div>
    </body>

</html>