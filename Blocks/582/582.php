<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/582.less', 'css/582.css');
        ?>
        <link href="css/582.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-582">
            <div class="section equal-height-wrap" id="section1">
                <div class="section-decoration top"></div>
                <div class="section_wrapper">
                    <div class="mcb-wrap one-second  valign-middle clearfix" id="wrap1">
                        <div class="mcb-wrap-inner">
                            <div class="column one column-margin-10px">
                                <div class="column_attr clearfix">
                                    <h2 style="">Phasellus placerat velit congue sodales dignissim</h2>
                                    <p class="p1">Praesent nec tortor non nunc. Vestibulum iaculis. Nam interdum adipiscing elit. Sed malesuada augue odio non eros. Maecenas fermentum.</p>
                                </div>
                            </div>
                            <div class="column one-second column-margin-20px">
                                <div class="column_attr clearfix" id="column2">
                                    <p class="p2">Etiam ullamcorper. Suspendisse a pellen tesque dui, non felis. Maecenas male suada elit lectus felis, malesuada. Cura bitur et ligula. Ut molestie urna.</p>
                                </div>
                            </div>
                            <div class="column one-second column-margin-20px">
                                <div class="column_attr clearfix"  id="column2" style="">
                                    <p class="p2">Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum.</p>
                                </div>
                            </div>
                            <div class="column one column_button">
                                <a class="button" id="button1" href="#">
                                    <span class="button_label">See our references</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mcb-wrap one-second  column-margin-0px valign-bottom clearfix" id="wrap2">
                        <div class="mcb-wrap-inner">
                            <div class="column one column_image ">
                                <div class="image_frame scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="images/home_surveyor_pic1.png" alt="home_surveyor_pic1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
