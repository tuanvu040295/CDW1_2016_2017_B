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
        $less->compileFile('less/style_footer.less', 'css/style_footer.css');
        ?>
        <link href="css/style_footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="footer">
            <footer id="Footer" class="clearfix">
                <div class="widgets_wrapper">
                    <div class="container">
                        <div class="column one-fourth">
                            <aside class="widget">
                                    <div class="image_frame scale-with-grid no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="images/home_surveyor_footer_logo.png" alt="home_surveyor_footer_logo">
                                        </div>
                                    </div>
                                    <hr class="no_line" id="line1">
                                    <p class="p1">Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis</p>
                                
                            </aside>
                        </div>
                        <div class="column one-fourth">
                            <aside class="widget">
                                <h4>Shortcut links</h4>
                               
                                    <ul class="u1">
                                        <li>
                                            <i class="icon-right-dir"></i>
                                            <a href="#">Aenean sollicitudin orem qui</a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Duis sed odio sit amet nibh</a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Morbi accumsan ipsum velit</a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i>
                                            <a href="#">Nam nec tellus </a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Class aptent taciti sociosqu </a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Mauris in erat justo</a>
                                        </li>
                                    </ul>
                                
                            </aside>
                        </div>
                        <div class="column one-fourth">
                            <aside class="widget">
                                <h4>Info about us</h4>
                               
                                    <div style="padding-right: 5%;">
                                        <h6>Phasellus metus ac turpis egestas. Vesti bulum massa nec odio leo, pretium nec ultrices posuere commodo.</h6>
                                        <p>Curabitur ultrices eget, bibendum iaculis augue. Aenean sit amet dolor. Maecenas viverra nonummy, mi. Cras rhoncus ut, semper auctor. Nam molestie. Nulla sem at porttitor vel, congue odio.</p>
                                    </div>
                                
                            </aside>
                        </div>
                        <div class="column one-fourth">
                            <aside class="widget">
                                <h4>Contact centre</h4>
                                
                                    <h6>Maecenas viverra nonummy, mi. Cras rhoncus ut, semper auctor. Nam molestie.</h6>
                                    <p>Level 13, 2 Elizabeth St,<br> Melbourne, Victoria 3000<br> Australia</p>
                                    <p>Contact us: 
                                        <span class="span1">+61 (0) 3 8376 6284</span>
                                        <br> Write us: 
                                        <a href="#">noreply@envato.com</a>
                                    </p>
                                
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <div class="copyright"> © 2016 BeSurveyor - BeTheme. All Rights Reserved.
                                <a target="_blank" rel="nofollow" href="#">Muffin group</a>
                            </div>
                            <ul class="social"></ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
