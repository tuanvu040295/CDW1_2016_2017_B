<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/553.less', 'css/553.css');
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Latest Project</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/553.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>

    <div class="container">
        <div class="type-553">
            <!--BEGIN HEADER-->
            <div class="row header">
                <!--TITLE-->
                <div class="col-md-6 col-xs-6">
                    <header class="sectionTitle">
                        <h3 class="tieudethink"><i class="fa fa-pencil icon-den"></i>
                            <strong>Latest Projects</strong></h3>
                    </header>
                </div>
                <!--VIEW PORTFOLIO-->
                <div class="col-md-6 col-xs-6">
                    <div class="view">
                        <a href="#">
                            View all portfolio →
                        </a>
                    </div>
                </div>
            </div>
            <!--END HEADER-->
            <!--BEGIN PRỌJECTS-->
            <div class="row rbprojects">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="images">
                            <div class="img">
                                <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                            </div>
                            <div class="caption">
                                <h3>WowWay</h3>
                                <span>WPtheme</span>
                            </div>
                        </div>
                    </a>
                </div>    
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="images">
                            <div class="img">
                                <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                            </div>
                            <div class="caption">
                                <h3>WowWay</h3>
                                <span>WPtheme</span>
                            </div>
                        </div>
                    </a>
                </div>  
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="images">
                            <div class="img">
                                <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                            </div>
                            <div class="caption">
                                <h3>WowWay</h3>
                                <span>WPtheme</span>
                            </div>
                        </div>
                    </a>
                </div>  
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="images">
                            <div class="img">
                                <img src="images/hinh1.jpg" width="100%" alt="WowWay"/>
                            </div>
                            <div class="caption">
                                <h3>WowWay</h3>
                                <span>WPtheme</span>
                            </div>
                        </div>
                    </a>
                </div>  
            </div>
            <!--END PRỌJECTS-->
        </div> 
    </div>
</body>
</html>   
