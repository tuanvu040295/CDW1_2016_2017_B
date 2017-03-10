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
        $less->compileFile('less/511.less', 'css/511.css');
        ?>
        <link href="css/511.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-511">
            <div class="container">
                <section >
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#" class=" -link hoverBorder" target="_blank" itemprop="url"><img src="images/bnr1.jpg" alt="" title="banner-set1-1.jpg" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-5">
                            <a href="#" class=" -link hoverBorder" target="_blank" itemprop="url"><img src="images/bnr2.jpg" alt="" title="banner-set1-2.jpg" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#" class=" -link hoverBorder" target="_blank" itemprop="url"><img src="images/bnr3.jpg" alt="" title="banner-set2-32.jpg" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#" class=" -link hoverBorder" target="_blank" itemprop="url"><img src="images/bnr4.jpg" alt="" title="banner-set2-41.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
