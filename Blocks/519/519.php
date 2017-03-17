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
    $less->compileFile('less/519.less', 'css/519.css');
    ?>

    <link href="css/519.css" rel="stylesheet" type="text/css"/>

</head>

<body>
    <div class="container">
        <!-- START SIDEBAR -->
        <div class="col-md-4 col-md-12 col-md-3 col-md-3">
            <div class="type-519">
                <div class="sidebar">
                    <!--BEST SELLERS-->
                    <div class="widget widget_best_sellers">
                        <h3>Best <span class="title-highlight">sellers</span><span class="dropdown_widget"></span></h3>
                        <div class="clearfix"></div>
                        <ul class="product_list_widget">
                            <li>
                                <a href="#"> <img src="images/cxi_1000191499-79x79.jpg" alt="cxi_1000191499"> Boxy shirt </a> <del><span class=" amount">19.00&nbsp;<span >$</span></span></del> <ins><span class=" amount">10.00&nbsp;<span >$</span></span></ins>
                                <div class="number-position">
                                    <p>01</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"> <img src="images/13071650-79x79.jpg" alt="13071650"> Kids Sweatshirt </a> <span class=" amount">79.00&nbsp;<span >$</span></span>
                                <div class="number-position">
                                    <p>02</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"> <img src="images/vvs_1000164757-4-79x79.jpg    " alt="vv_1000020517 (1)"> Flag T-Shirt </a> <span class=" amount">19.00&nbsp;<span >$</span></span>
                                <div class="number-position">
                                    <p>03</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"> <img src="images/975052-79x79.jpg" alt="975052"> Sport Chronograph </a> <span class=" amount">29.00&nbsp;<span >$</span></span>
                                <div class="number-position">
                                    <p>04</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--VIEW THE DENIM COLLECTION-->
                    <div class=" widget teaser">
                        <div class="teaser">
                            <div class="image"> <img src="images/teaser.jpg" alt="VIEW THE DENIM COLLECTION" style="opacity: 1;">
                                <p class="title"><a href="#">VIEW THE DENIM COLLECTION</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--SALE PRODUCTS-->
                    <div class=" widget widget_products">
                        <h3>On-Sale Products<span class="dropdown_widget"></span></h3>
                        <ul class="product_list_widget">
                            <li>
                                <a href="#" title="Square Shorts"> <img src="images/cxi_1000191499-79x79.jpg" alt="vvs_1000165027 (4)"> <span >Square Shorts</span> </a> <del><span class=" amount">49.00&nbsp;<span >$</span></span></del> <ins><span class=" amount">24.99&nbsp;<span >$</span></span></ins>
                            </li>
                            <li>
                                <a href="#" title="Sport Sweatshirt"> <img src="images/vvs_1000164757-4-79x79.jpg" alt="vvs_1000164757 (4)"> <span >Sport Sweatshirt</span> </a> <del><span class=" amount">59.00&nbsp;<span >$</span></span></del> <ins><span class=" amount">49.00&nbsp;<span >$</span></span></ins>
                            </li>
                            <li>
                                <a href="#" title="Woman Jeans"> <img src="images/cru_1000057717-79x79.jpg" alt="cru_1000057717"> <span >Woman Jeans</span> </a> <del><span class=" amount">89.00&nbsp;<span >$</span></span></del> <ins><span class=" amount">79.00&nbsp;<span >$</span></span></ins>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
    </div>
</body>
