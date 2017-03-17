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
    $less->compileFile('less/33.less', 'css/33.css');
    ?>
    <link href="css/33.css" rel="stylesheet" type="text/css"/>
    <script src="js/Tabs.js" type="text/javascript"></script>
</head>

<body>
    <div class="type-33">
        <div class="container">
            <div id="tabs" class="tabs">
                <!--TITLE CONTENT -->
                <div class="col-xs-12">
                    <h1 class="titlebig">OUR SPICEAL MENU</h1>
                    <div class="title">
                        <h4>FLOURANT TASTY</h4>
                        <p>The role of a good cookware in the preparation of a sumptuous meal cannot be over </p>
                    </div>
                </div>
                <!--TITLE TABS -->
                <nav class="col-md-12">
                    <ul>
                        <li><a href="#section-2"><span class="clicktitle">BREAKFATS</span></a></li>
                        <li><a href="#section-3"><span class="clicktitle">DESSERT</span></a></li>
                        <li><a href="#section-4"><span class="clicktitle">DINNER</span></a></li>
                        <li><a href="#section-5"><span class="clicktitle">FRESHFOOD</span></a></li>
                        <li><a href="#section-4"><span class="clicktitle">LUNCH</span></a></li>
                    </ul>
                </nav>
                <!--BEGIN CONTENT -->
                <div class="content">
                    <!--SECTION 1 -->
                    <section id="section-1">
                        <div class="row">
                            <div id="catlist">
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>

                            </div>
                        </div>
                    </section>
                    <!--SECTION 2 -->
                    <section id="section-2">
                        <div class="row">
                            <div id="catlist">
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </section>
                    <!--SECTION 3 -->
                    <section id="section-3">
                        <div class="row">
                            <div id="catlist">
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>

                            </div>
                        </div>
                    </section>
                    <!--SECTION 4 -->
                    <section id="section-4">
                        <div class="row">
                            <div id="catlist">
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood1.jpg" alt="Product image" width="30%" />
                                        <strong>$16.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </section>
                    <!--SECTION 5 -->
                    <section id="section-5">
                        <div class="row">
                            <div id="catlist">
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>
                                <dl class="col-md-6">
                                    <dt>
                                        <img src="images/imagefood.jpg" alt="Product image" width="30%" />
                                        <strong>$15.00</strong>
                                        <a href="#">The Name of the Product</a>
                                    </dt>
                                    <dd>
                                        <p>The description of whatever the heading is about goes here. The description of whatever [....]</p>
                                    </dd>
                                </dl>

                            </div>
                        </div>
                    </section>
                </div>
                <!--END CONTENT -->
            </div>
        </div>
    </div>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>