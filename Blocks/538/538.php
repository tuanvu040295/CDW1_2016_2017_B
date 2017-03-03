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
    <div class="container type-538">
        <div class="clearfix "></div>
        <div class="row section ">
            <h3><img src="images/title-services.png "> Service</h3> </div>
        <div class="row survice ">
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                <div class="service group ">
                    <div class="image-wrapper "> <img src="images/section_services_bag.png "> </div>
                    <h4>ECOMMERCE THEME</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                    <div class="read-more "> <a href="# " class="btn_readmore ">Read More</a> </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                <div class="service group ">
                    <div class="image-wrapper "> <img src="images/icon3.jpg "> </div>
                    <h4>PAYPAL PAYMENT</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                    <div class="read-more "> <a href="# " class="btn_readmore ">Read More</a> </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                <div class="service group ">
                    <div class="image-wrapper "> <img src="images/icon2.jpg "> </div>
                    <h4>FREE SHIPPING</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                    <div class="read-more "> <a href="# " class="btn_readmore ">Read More</a> </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                <div class="service group ">
                    <div class="image-wrapper "> <img src="images/section_services_box.png "> </div>
                    <h4>FREE BOUNUS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt […]</p>
                    <div class="read-more "> <a href="# " class="btn_readmore ">Read More</a> </div>
                </div>
            </div>
        </div>
    </div>
</body>
