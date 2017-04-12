<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/593.less', 'css/593.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/593.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type_593">
            <!-- BEGIN CONTENT -->
            <section class="sc-parallax" data-stellar-background-ratio="0.5">
                <div class="row">
                    <div class="containerCentered"></div>
                    <div class="sc-mask"></div>
                    <div class="container">
                        <section class="sc-header-sub">
                            <div class="containerCentered">
                                <!-- TITLE -->
                                <div class="row">
                                    <h1 class="title" id="changingtext">Some <span>Highlights</span></h1>
                                </div>
                            </div>
                        </section>
                    </div> 
                </div>
            </section>
            <!-- END CONTENT -->
        </div>
    </body>
</html>