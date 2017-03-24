<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/545.less', 'css/545.css');
        ?>
        <link href="css/545.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="type-545">
                    <div class="col-md-9">
                        <!--TITLE PRODUCTS-->
                        <h3 class="section-big">Women</h3>
                        <!--BEGIN ORDERBY FORM-->
                        <div class="col-sm-4">
                            <p class="woocommerce-result-count">Showing 1-12 of 38 results</p>
                        </div>
                        <div class="col-sm-4 pagination-header"></div>
                        <div class="col-sm-4">
                            <a class="btn btn-default btn-select">
                                <input type="hidden" id="" name="" value="" />
                                <span class="btn-select-value">Select an Item</span>
                                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                                <ul>
                                    <li class="selected">Sort by newness</li>
                                    <li>Sort by default sorting</li>
                                    <li>Sort by popularity</li>
                                    <li>Sort by average rating</li>
                                </ul>
                            </a>
                        </div>
                        <!--BEGIN ORDERBY FORM-->
                        <div class="clearfix"></div>
                        <!--BEGIN PRODUCTS -->
                        <div class="products row">
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#">
                                            <img src="images/product/hipster8.jpg" alt="" width="100%" 
                                                 onmouseover="this.src = 'images/product/hipster7.jpg'" onmouseout="this.src = 'images/product/hipster8.jpg'"/>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="rating-none">
                                    <a href="" title="Petit Chic Coat" class="post_name">Petit Chic Coat</a>
                                </h2>
                                <p class="price">
                                    <del>
                                        <span>$</span>220.99</span>
                                    </del> 
                                    <ins>
                                        <span>$</span>198.50</span>
                                    </ins>
                                </p>
                            </div>
                        </div>
                        <!--END PRODUCTS -->
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>