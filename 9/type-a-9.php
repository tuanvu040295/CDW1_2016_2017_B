<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/type-a-9.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-a-9.less', 'css/type-a-9.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-a-9">
            <div class="container">
                <div class="row">

                    <div class="moduletable span12 " id="mod116" data-id="116">
                        <div class="bghelper">


                            <div class="modulecontent">
                                <div class="process_steps fixclear ">
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

                                    <div class="col-md-3"> 
                                        <div class="step step1 ">
                                            <div class="icon" data-animation="tada">
                                                <img src="images/ico-plan.png" alt="planning &amp; strategy">
                                            </div>
                                            <h3>planning &amp; strategy</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        </div><!-- end step -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="step step2 ">
                                            <div class="icon" data-animation="pulse">
                                                <img src="images/ico-designdev.png"" alt="design &amp; develop">
                                            </div>
                                            <h3>design &amp; develop</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        </div><!-- end step -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="step step3 last_step">
                                            <div class="icon" data-animation="fadeOutRightBig">
                                                <a href="#" target="_self">
                                                    <img src="images/ico-launch.png" alt="test &amp; deliver">
                                                </a>
                                            </div>
                                            <h3>test &amp; deliver</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        </div><!-- end step -->
                                    </div>

                                </div>			
                            </div><!-- end modulecontent-->
                        </div><!-- end bghelper -->
                    </div><!-- end module -->


                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>