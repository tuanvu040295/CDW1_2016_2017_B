<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/538.less', 'css/538.css');
    ?>
    <link href="css/538.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="type-538">
        <div class="container">
            <!--TITLE SERVICES -->
            <div class="title"><img src="images/title-services.png ">SERVICE</div>
            <!--BEGIN SERVICES -->
            <div class="survice ">
                <!--SERVICES ECOMMERCE THEME-->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ">
                    <div class="service group service-wrapper">
                        <div class="image-wrapper    ">
                            <a href=""><img src="images/section_services_bag.png"></a>
                        </div>
                        <h4>ECOMMERCE THEME</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                        <div class="read-more ">
                            <a href="# " class="btn_readmore ">Read More</a>
                        </div>
                    </div>
                </div>
                <!--SERVICES PAYPAL PAYMENT-->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ">
                    <div class="service group ">
                        <div class="image-wrapper ">
                            <a href=""><img src="images/icon3.jpg"></a>
                        </div>
                        <h4>PAYPAL PAYMENT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                        <div class="read-more ">
                            <a href="# " class="btn_readmore ">Read More</a>
                        </div>
                    </div>
                </div>
                <!--SERVICES FREE SHIPPING-->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ">
                    <div class="service group ">
                        <div class="image-wrapper ">
                            <a href=""><img src="images/icon2.jpg "></a>
                        </div>
                        <h4>FREE SHIPPING</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                        <div class="read-more ">
                            <a href="# " class="btn_readmore ">Read More</a>
                        </div>
                    </div>
                </div>
                <!--SERVICES FREE BOUNUS-->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ">
                    <div class="service group ">
                        <div class="image-wrapper ">
                            <a href=""><img src="images/section_services_box.png "></a>
                        </div>
                        <h4>FREE BOUNUS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                        <div class="read-more ">
                            <a href="# " class="btn_readmore ">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END SERVICES -->
        </div>
    </div>
</body>