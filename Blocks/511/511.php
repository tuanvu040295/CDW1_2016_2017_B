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
    <script src="js/scripts.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-511">
        <div class="container type-511-content">
            <div class="row">
                <!--BEGIN PREFERENTIAL BANNER-->
                <section class="col-sm-12">
                    <h4 class="title">SOME OF OUR LATEST OFFERS</h4>
                    <!-- BEGIN IMAGES-->
                    <div class="row">
                        <figure class="col-sm-4">
                            <a class="hoverborder" href="#"><span><img src="images/bnr1.jpg" alt=""><span class="theHoverBorder"></span></span></a>
                        </figure>
                        <figure class="col-sm-5">
                            <a class="hoverborder" href="#"><span><img src="images/bnr2.jpg" alt=""><span class="theHoverBorder"></span></span></a>
                        </figure>
                        <figure class="col-sm-3">
                            <a class="hoverborder" href="#"><span><img src="images/bnr3.jpg" alt=""><span class="theHoverBorder"></span></span></a> 
                            <a class="hoverborder" href="#"><span><img src="images/bnr4.jpg" alt=""><span class="theHoverBorder"></span></span></a>
                        </figure>                      
                    </div>
                    <!--END IMAGES--> 
                </section>
                <!--END PREFERENTIAL BANNER-->
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>