<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/584.less', 'css/584.css');
        ?>
        <link href="css/584.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-584">
            <!--BEGIN FOOTER -->
            <footer id="Footer">
                <div class="widgets_wrapper">
                    <div class="container">
                        <!--COLUMN 1-->
                        <div class="col-md-3 col-sm-6">
                            <div><img class="scale-with-grid img-responsive" src="images/home_surveyor_footer_logo.png" alt="logo"></div>
                            <p class="p1">Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis</p>                                
                        </div>
                        <!--COLUMN 2-->
                        <div class="col-md-3 col-sm-6">
                            <h4 class="title">Shortcut links</h4>
                            <ul class="u1">
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="#">Aenean sollicitudin orem qui</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i> 
                                    <a href="#">Duis sed odio sit amet nibh</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i> 
                                    <a href="#">Morbi accumsan ipsum velit</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="#">Nam nec tellus </a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="#">Class aptent taciti sociosqu </a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="#">Mauris in erat justo</a>
                                </li>
                            </ul>
                        </div>
                        <!--COLUMN 3-->
                        <div class="col-md-3 col-sm-6">
                                <h4 class="title">Info about us</h4>
                                <div>
                                    <h6 class="timin">Phasellus metus ac turpis egestas. Vesti bulum massa nec odio leo, pretium nec ultrices posuere commodo.</h6>
                                    <p class="p1">Curabitur ultrices eget, bibendum iaculis augue. Aenean sit amet dolor. Maecenas viverra nonummy, mi. Cras rhoncus ut, semper auctor. Nam molestie. Nulla sem at porttitor vel, congue odio.</p>
                                </div>                                
                        </div>
                        <!--COLUMN 4-->
                        <div class="col-md-3 col-sm-6">
                                <h4 class="title">Contact centre</h4>
                                <h6 class="timin">Maecenas viverra nonummy, mi. Cras rhoncus ut, semper auctor. Nam molestie.</h6>
                                <p class="p1">Level 13, 2 Elizabeth St,<br> Melbourne, Victoria 3000<br> Australia</p>
                                <p class="p1">Contact us: 
                                    <span class="span1">+61 (0) 3 8376 6284</span>
                                <p class="p1"> Write us:<a href="#">noreply@envato .com</a></p>
                        </div>
                    </div>
                </div>
                <!--BEGIN COPYRIGHT-->
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <div class="copyright p1"> © 2016 BeSurveyor - BeTheme. All Rights Reserved.
                                <a target="_blank" rel="nofollow" href="#">Muffin group</a>
                            </div>
                            <ul class="social"></ul>
                        </div>
                    </div>
                </div>
                <!--BEGIN COPYRIGHT-->
            </footer>
            <!--END FOOTER -->

        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
