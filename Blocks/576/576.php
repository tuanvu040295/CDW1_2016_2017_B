<!DOCTYPE html>
<html>
    <head>
        <title>Đồ án</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/576.less', 'css/576.css');
        ?>
        <link href="css/576.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body> 
        <div class="type-576"> 
            <!-- BEGIN HEADER -->
            <div class="main-nav">
                <nav class="container">
                    <!-- BEGIN LOGO -->
                    <div class="pull-left">
                        <a href="#">
                            <h1 class="logo-text">A<span class="text-highlight">pp</span>ic</h1>
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN MAIN NAVIGATION-->
                    <div class="pull-right">
                        <ul>
                            <li class="dropdown active-item">
                                <a href="#" class="dropdown-toggle active-item " data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Coming soon</a></li>
                                    <li><a href="#">How it works</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Coming soon</a></li>
                                    <li><a href="#">How it works</a></li>
                                    <li><a href="#">Page elements</a></li>
                                    <li><a href="#">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Price plans</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Blog style 1</a></li>
                                    <li><a href="#">Blog style 1 fullwidth</a></li>
                                    <li><a href="#">Blog style 2</a></li>
                                    <li><a href="#">Blog style 2 fullwidth</a></li>
                                    <li><a href="#">Blog style 3</a></li>
                                    <li><a href="#">Blog style 3 fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Gallery random</a></li>
                                    <li><a href="#">Gallery columns 2</a></li>
                                    <li><a href="#">Gallery columns 3</a></li>
                                    <li><a href="#">Gallery columns 4</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Single product</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!-- END MAIN NAVIGATION-->
                </nav>
            </div>
            <!-- END HEADER -->
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>