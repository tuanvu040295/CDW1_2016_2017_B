<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/559.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/559.less', 'css/559.css');
        ?>
        <script src="js/javascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-559">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="col-md-12">
                            <div class="item0">
                                <h1><strong>FACT S</strong></h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="container1">
                                    <div class="border">
                                        <div  class="active-border">
                                            <div  class="circle">
                                                <span class="prec " id="prec">
                                                    <h2>
                                                        <strong>386</strong>
                                                    </h2>
                                                    <h3>Bugs Resolved</h3>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="container1">
                                    <div class="border">
                                        <div  class="active-border">
                                            <div  class="circle">
                                                <span class="prec " id="prec">
                                                    <h2>
                                                        <strong>386</strong>
                                                    </h2>
                                                    <h3>Bugs Resolved</h3>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="container1">
                                    <div class="border">
                                        <div  class="active-border">
                                            <div  class="circle">
                                                <span class="prec " id="prec">
                                                    <h2>
                                                        <strong>386</strong>
                                                    </h2>
                                                    <h3>Bugs Resolved</h3>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="clear"></div>
        </div>
    </body> 
</html>