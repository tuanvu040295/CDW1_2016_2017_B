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
        $less->compileFile('less/style_chitiet2.less', 'css/style_chitiet2.css');
        ?>
        <link href="css/style_chitiet2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="custom-25-chitiet2">
            <div class="section full-width no-margin-h no-margin-v" id="section2">
                <div class="section_wrapper">
                    <div class="mcb-wrap one clearfix">
                      
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client1.png" alt="home_surveyor_client1">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client2.png" alt="home_surveyor_client2">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images//home_surveyor_client3.png" alt="home_surveyor_client3">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client4.png" alt="home_surveyor_client4">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client5.png" alt="home_surveyor_client5">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
