<!DOCTYPE html>

<html no-touch>

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
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        

    </head>

    <body>
        <div class="type_14_ds">
            <section class="sc-parallax" style="background-image: url(&quot;https://scribe.pixelgrapes.com/wp-content/uploads/2014/04/office-space.jpg&quot;); background-position: 50% -95px;" data-stellar-background-ratio="0.5">
                <div class="row"><div class="containerCentered">
                        <h3></h3></div> <div class="sc-mask"></div>
                    <div class="container">
                        <section class="sc-header-sub">

                            <div class="containerCentered">
                                <div class="row">
                                    <h1 id="changingtext">Some <span style="opacity: 0; display: inline-block; width: 307.774px; overflow: hidden;">Highlights</span></h1>
                                </div>
                            </div></section>
                    </div> 
                </div>
            </section>
        </div>
    </body>
</html>