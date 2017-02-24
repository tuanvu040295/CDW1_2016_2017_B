<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/508.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/508.less', 'css/508.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-508">
            <div class="container type-508-content ">
                <!-- BEGIN MODULE 508-->

                <div class="row">

                    <div class="moduletable " >

                        <!-- BEGIN MODULECONTENT-->
                        <div class="modulecontent">
                            <div class="process_steps ">
                                <div class="col-md-3">
                                    <div class="step intro">
                                        <h3>our working process 
                                            <strong>in 3 steps</strong>
                                        </h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        <p style="margin-bottom: 0;">
                                            <a href="#">MORE ABOUT US +</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- BEGIN STEP 1 -->
                                <div class="col-md-3"> 
                                    <div class="step step1 ">
                                        <figure class="icon" data-animation="tada">
                                            <img src="images/ico-plan.png" alt="planning & strategy">
                                        </figure>
                                        <h3>planning & strategy</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>

                                    </div>

                                </div>
                                <!-- END STEP 1 -->

                                <!-- BEGIN STEP 2 -->
                                <div class="col-md-3">
                                    <div class="step step2 ">
                                        <figure class="icon" data-animation="pulse">
                                            <img src="images/ico-designdev.png"" alt="design & develop">
                                        </figure>
                                        <h3>design & develop</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    </div>
                                </div
                                <!-- END STEP 2 -->

                                <!-- BEGIN STEP 3 -->
                                <div class="col-md-3">
                                    <div class="step step3 last_step">
                                        <figure class="icon" data-animation="fadeOutRightBig">
                                            <a href="#" target="_self">
                                                <img src="images/ico-launch.png" alt="test & deliver">
                                            </a>
                                        </figure>
                                        <h3>test & deliver</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    </div>
                                </div>
                                <!-- END STEP 3 -->

                            </div>			
                        </div>
                        <!-- END MODULECONTENT-->
                    </div>
                </div>
            </div>
            <!-- END MODULE 508 -->
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>