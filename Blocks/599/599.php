<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/599.less', 'css/599.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/599.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-599" >

            <div class="container">
                <div class="row">
                    <!-- BEGIN CONTENT -->
                    <!-- Fixed navbar -->
                    <div class="navbar navbar-default navbar-fixed-top sc-nav " role="navigation" >
                        <div class="nav-container container">
                            <div class="navbar-header">
                                <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="brand" href="#"> <img class="a" src="images/sc-logo-main1.png" alt=""> </a>
                            </div>
                            <div id="sc-navbar-collapse-main" class="collapse navbar-collapse"><ul id="menu-main-menu" class="nav navbar-nav"><li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6"><a href="http://pixelgrapes.com/demo/scribe/">Home</a></li>
                                    <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-28 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-31 active dropdown active"><a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" aria-haspopup="true">Showcase <span class="caret"></span></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-28 current_page_item menu-item-502 active active"><a href="https://scribe.pixelgrapes.com/app-showcase/">Phone App</a></li>
                                            <li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-501"><a href="#">Tablet App</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="#">Highlights</a></li>
                                    <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="#">Tour</a></li>
                                    <li id="menu-item-169" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-169 dropdown"><a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" aria-haspopup="true">Examples <span class="caret"></span></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423"><a href="#">Team</a></li>
                                            <li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="#">Countdown</a></li>
                                            <li id="menu-item-168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168"><a href="#">Pricing</a></li>
                                            <li id="menu-item-351" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-351"><a href="#">Gallery</a></li>
                                            <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="#">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530"><a href="#">Blog</a></li>
                                    <li id="menu-item-442" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-442"><a href="#">Buy Theme</a></li>
                                </ul></div></div></div>
                    <!-- END CONTENT -->
                    <script src="js/scripts.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </body>
</html>