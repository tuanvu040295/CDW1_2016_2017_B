<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/585.less', 'css/585.css');
        ?>
        <link href="css/585.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type_585">
            <!--BEGIN MENU-->
            <div class="container">  
                <!--------------------------MENU MAIN------------------------------>
                <div class="navbar-wrapper">
                    <!-----BEGIN MEGA MENU------->
                    <nav class="col-md-12">
                        <div class="megamenu">
                            <div id="logo">
                                <a href="#"><img src="image/theme.png" alt=""/></a>
                            </div>
                            <ul>
                                <li class="web">Websites</li>
                                <li><a href="#">Builder</a></li>
                                <li><a href="#">Grid</a></li>
                                <li><a href="#">Header</a></li>
                                <li><a href="#">Features</a></li>
                                <!-----------------MENU SHORTSCODE---------------------->
                                <li class="dropdown">
                                    <a href="#">Shortcodes</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="custom-title">
                                                        <ul>
                                                            <li><a href="#"><span>TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Content Link</span></a></li>
                                                            <li><a href="#"><span>Divider</span></a></li>
                                                            <li><a href="#"><span>Dropcap</span></a></li>
                                                            <li><a href="#"><span>Fancy Link</span></a></li>
                                                            <li><a href="#"><span>Google Font</span></a></li>
                                                            <li><a href="#"><span>Highlight</span></a></li>
                                                            <li><a href="#"><span>Hr</span></a></li>
                                                            <li><a href="#"><span>Icons</span></a></li>
                                                            <li><a href="#"><span>Icon Bar</span></a></li>
                                                            <li><a href="#"><span>Icon Block</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-title">
                                                        <ul>
                                                            <li><a href="#"><span>TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Content Link</span></a></li>
                                                            <li><a href="#"><span>Divider</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- END COL-2 -->
                                                <div class="col-md-2">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Content Link</span></a></li>
                                                            <li><a href="#"><span>Divider</span></a></li>
                                                            <li><a href="#"><span>Dropcap</span></a></li>
                                                            <li><a href="#"><span>Fancy Link</span></a></li>
                                                            <li><a href="#"><span>Google Font</span></a></li>
                                                            <li><a href="#"><span>Highlight</span></a></li>
                                                            <li><a href="#"><span>Hr</span></a></li>
                                                            <li><a href="#"><span>Icons</span></a></li>
                                                            <li><a href="#"><span>Icon Bar</span></a></li>
                                                            <li><a href="#"><span>Icon Block</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-2 -->
                                                <div class="col-md-2">
                                                    <div class="custom-title" style="margin-top: 15px;padding-bottom: 260px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Content Link</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-2 -->
                                                <div class="col-md-2">
                                                    <div class="custom-title" style="margin-top: 15px; padding-bottom: 30px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Content Link</span></a></li>
                                                            <li><a href="#"><span>Divider</span></a></li>
                                                            <li><a href="#"><span>Dropcap</span></a></li>
                                                            <li><a href="#"><span>Fancy Link</span></a></li>
                                                            <li><a href="#"><span>Google Font</span></a></li>
                                                            <li><a href="#"><span>Highlight</span></a></li>
                                                            <li><a href="#"><span>Hr</span></a></li>
                                                            <li><a href="#"><span>Icons</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-2 -->
                                                <div class="col-md-2">
                                                    <div class="custom-title" style="margin-top: 15px;padding-bottom: 30px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Content Link</span></a></li>
                                                            <li><a href="#"><span>Divider</span></a></li>
                                                            <li><a href="#"><span>Dropcap</span></a></li>
                                                            <li><a href="#"><span>Fancy Link</span></a></li>
                                                            <li><a href="#"><span>Google Font</span></a></li>
                                                            <li><a href="#"><span>Highlight</span></a></li>
                                                            <li><a href="#"><span>Hr</span></a></li>
                                                            <li><a href="#"><span>Icons</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-2 -->
                                            </div><!-- END ROW -->
                                        </li>
                                    </ul>
                                </li>
                                <!-----------------------MENU BLOG---------------------->
                                <li class="dropdown megamenu-fw">
                                    <a href="#">Blog</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-----------------------MENU PORTFOLIO---------------------->
                                <li class="dropdown">
                                    <a href="#">Portfolio</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px; padding-bottom: 70px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                            <li><a href="#"><span>Buttons</span></a></li>
                                                            <li><a href="#"><span>Code</span></a></li>
                                                            <li><a href="#"><span>Columns</span></a></li>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                                <div class="col-sm-3">
                                                    <div class="custom-title" style="margin-top: 15px;">
                                                        <ul>
                                                            <li><a href="#"><span>Alert</span></a></li>
                                                            <li><a href="#"><span>Basic</span></a></li>
                                                            <li><a href="#"><span>Blockquote</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- END COL-3 -->
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a></li>
                                <li class="iconmenu" ><a href="#">=</a></li>
                                <li class="btn-buy" style="border-left: 1px solid #1b6d85;"><a href="#"><span style="color: white;">Buy now</span></a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-----END MEGA MENU------->
                </div>
                <!--------------------------TITLE MENU------------------------------>
                <div class="menurespon">
                    <a href="#"><p>Websites</p></a><br>
                    <a href="#"><p>Builder</p></a><br>
                    <a href="#"><p>Grid</p></a><br>
                    <a href="#"><p>Headers</p></a><br>
                    <a href="#"><p>Features</p></a><br>
                    <a href="#"><p>Shortcodes</p></a><br>
                    <a href="#"><p>Blog</p></a><br>
                    <a href="#"><p>Portfolio</p></a><br>
                    <a href="#"><p><i class="fa fa-question"></i></p></a><br>
                    <a href="#"><p><i class="fa fa-comment-o"></i></p></a><br>
                </div>
            </div>
            <!--END MENU-->
        </div>
        <script src="js/newjavascript.js" type="text/javascript"></script>
    </body>
</html>
