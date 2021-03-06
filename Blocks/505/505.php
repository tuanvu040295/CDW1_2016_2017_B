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
        $less->compileFile('less/505.less', 'css/type-a-6.css');
        ?>
        <link href="css/type-a-6.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-505">
            <div  class="container type-505 content">
                <section class="row">

                    <div data-id="106">
                        <div>

                            <div class="modulecontent">
                                <div class="row  feature_box style2 ">
                                    <div class="col-md-12">
                                        <summary class="smallm_title centered bigger"><span>WHY CHOOSE THIS THEME</span></summary>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-01.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">CUSTOMER SUPPORT</summary>
                                            </a>
                                            <p>Great customer support! Check out our forum.</p></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-02.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">WELL DOCUMENTED</summary>
                                            </a>
                                            <p>Documentation include with explanations for most of the options.</p></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-03.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">UNLIMITED COLORS</summary>
                                            </a>
                                            <p>With just a few clicks you can add any color you want.</p></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-04.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">CUSTOM SHORTCODES</summary>
                                            </a>
                                            <p>Great custom shortcodes which are ment to ease up your work.</p></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-05.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">RESPONSIVE</summary>
                                            </a>
                                            <p>The template has a responsive layout. Try resizing the window.</p></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-06.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">MULTILANGUAGE READY</summary>
                                            </a>
                                            <p>You can install languages and extend the website's languages.</p></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-07.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">HTML5 & CSS3</summary>
                                            </a>
                                            <p>Built with modern technologies like HTML5 and CSS3.</p></div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="box">
                                            <a href="#" target="_self">
                                                <span class="icon"><img src="images/img-icon/ico-08.png" alt="CUSTOMER SUPPORT"></span>
                                                <summary class="title">CUSTOMER SUPPORT</summary>
                                            </a>
                                            <p>This template includes lots of customizations and combinations.</p></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>