<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/552.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/552.less', 'css/552.css');
        ?>
    </head>

    <body>
        <div class="type-552">
            <div class="container">
                <!-- BEGIN CONTENT-->
                <div class="row-fluid">
                    <div class="content">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#" class="btncart">
                                        <i class="fa fa-pencil icon-barr" aria-hidden="true"></i>
                                        <p><strong>Unique & Clean</strong></p>
                                    </a>   
                                </div>
                                <div class="price">
                                    <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#" class="btncart">
                                        <i class="fa fa-mobile icon-barr" aria-hidden="true"></i>
                                        <p><strong>Unique & Clean</strong></p>
                                    </a>   
                                </div>
                                <div class="price">
                                    <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#" class="btncart">
                                        <i class="fa fa-lightbulb-o icon-barr" aria-hidden="true"></i>
                                        <p><strong>Unique & Clean</strong></p>
                                    </a>   
                                </div>
                                <div class="price">
                                    <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#" class="btncart">
                                        <i class="fa fa-rocket icon-barr" aria-hidden="true"></i>
                                        <p><strong>Unique & Clean</strong></p>
                                    </a>   
                                </div>
                                <div class="price">
                                    <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenemodo ligula eget dolorenean massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT-->
            </div>
        </div>  
    </body>
</html>