<!DOCTYPE html>
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
    $less->compileFile('less/536.less', 'css/shop.css');
    ?>

    <link href="css/shop.css" rel="stylesheet" type="text/css"/>

</head>
<body>  
    <!------------SHOP-------------->
    <div class="type-536">
        <div class="container">          
            <section class="row">
                <div class="col-md-9">
                    <div class="content group">
                        <!-- START PAGE META -->
                        <div class="group">
                            <h1 class="page-title">ALL PRODUCTS</h1>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" sb="63227427" style="display: none;">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <summary class="sbHolder">
                                    <a href="#" class="sbToggle"></a>
                                    <a href="#" class="sbSelector">Default sorting</a>
                                    <ul class="sbOptions">
                                        <li>
                                            <a href="#menu_order" rel="menu_order">Default sorting</a>
                                        </li>
                                        <li>
                                            <a href="#popularity" rel="popularity">Sort by popularity</a>
                                        </li>
                                        <li>
                                            <a href="#rating" rel="rating">Sort by average rating</a>
                                        </li>
                                        <li>
                                            <a href="#date" rel="date">Sort by newness</a>
                                        </li>
                                        <li>
                                            <a href="#price" rel="price">Sort by price: low to high</a>
                                        </li>
                                        <li>
                                            <a href="#price-desc" rel="price-desc">Sort by price: high to low</a>
                                        </li>
                                    </ul>
                                </summary>
                            </form>
                            <ul class="nav nav-pills list-or-grid">
                                <li class="active "><a href="#grid" class="grid-view" data-toggle="tab">grid</a>
                                </li>
                                <li><a href="#list" class="list-view active" data-toggle="tab">list</a>
                                </li>                 
                            </ul>
                        </div>
                        <!-- END PAGE META -->
                        <div class="clearfix"></div>
                        <div class="woocommerce ">  
                            <!--------------Grid----------->
                            <div class="tab-content">                           
                                <div class="tab-pane active" id="grid">
                                    <ul class="products row ">
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section><section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section><section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                        <section class="col-md-4 col-lg-4 col-sm-3 col-xs-12 ">
                                            <li class="product first grid with-hover add-hover with-border span3 " style="opacity: 1; height: auto; ">
                                                <div class="product-wrapper ">
                                                    <a href="# " class="thumb "> 
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > </a>
                                                    <h3>Kids Sweatshirt</h3> <span class="price ">
                                                        <span class=" amount ">99.00&nbsp;
                                                            <span>$</span> </span>
                                                    </span>
                                                    <div class="clearfix "></div>
                                                    <div class="product-meta ">
                                                        <div class="product-meta-wrapper " style="height: 99px; ">
                                                            <div class="product-description show-on-list ">
                                                                <div itemprop="description " class="description ">
                                                                    <article>Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>
                                                            </div>
                                                            <summary class="buttons-list-wrapper "> 
                                                                <a rel="nofollow " href="# " data-quantity="1 " data-product_id="53 " data-product_sku=" " class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group ">
                                                                    <div class="action first wishlist ">                                                                      
                                                                        <div class="show " style="display:block "> <a href="# " rel="nofollow " data-product-id="53 " data-product-type="simple " ><i></i>
                                                                                Wishlist</a> <img src="images/wpspin_light.gif " alt="loading " width="16 " height="16 " style="visibility:hidden "> </div>
                                                                        <div class="hide " style="display:none; "> <span class="feedback ">Product added!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        </a> </div>
                                                                        <div class="hide " style="display:none "> <span class="feedback ">The product is already in the wishlist!</span> <a href="# " rel="nofollow "><i></i>
                                                                                View Wishlist	        
                                                                            </a> </div>
                                                                        <div class="clearfix "></div>
                                                                    </div>
                                                                    <div class="action compare ">
                                                                        <div class="woocommerce product "> <a href="# " class="compare " data-product_id="53 " rel="nofollow "><i></i>Compare</a> </div>
                                                                    </div>
                                                                </div>
                                                            </summary>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </section>
                                    </ul>
                                </div>    
                                <!-------------- LIST------------>
                                <div class="tab-pane" id="list">
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>                                 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                    <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>  <ul class="products row ">
                                        <li class="product first list with-hover add-hover with-border span3">                                       
                                            <div class="product-wrapper">
                                                <a href="#"></a>
                                                <figure class="col-md-4 col-xs-12 col-sm-12">
                                                    <a href="#" class="thumb">
                                                        <img src="images/awv087x08-4-254x357.jpg " class="wp-post-image " alt="13071650 " title="13071650 "> 
                                                        <img src="images/awv2-254x357.jpg " title="13091840 " class="image-hover " > 
                                                    </a> 
                                                </figure>
                                                <div class="col-md-8 col-xs-12">
                                                    <h3>Belt</h3>
                                                    <span class="price">
                                                        <span>99.00&nbsp;
                                                            <span>$</span>                                                        
                                                        </span>                                                   
                                                    </span>
                                                    <div class="clear"></div>
                                                    <div class="product-meta">
                                                        <div class="product-meta-wrapper">
                                                            <div class="product-description show-on-list">
                                                                <div itemprop="description" class="description">
                                                                    <article> Morbi et nisi ipsum, eget semper leo. Maecenas convallis, lacus nec aliquet viverra, sapien tellus tristique nunc, in sagittis est lorem eu arcu. Donec eget ipsum sit amet diam volutpat scelerisque. Sed ornare blandit ligula pellentesque eleifend.</article>
                                                                </div>    
                                                            </div>
                                                            <summary class="buttons-list-wrapper">
                                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button">Add to cart</a>
                                                                <div class="product-actions buttons_2 group">
                                                                    <div class="action first wishlist">                                          
                                                                        <a href="#" rel="nofollow" data-product-id="139" data-product-type="simple"><i></i>
                                                                            Wishlist
                                                                        </a>
                                                                        <img src="/images/wpspin_light.gif" alt="loading" width="16" height="16" style="visibility:hidden">        
                                                                        <div class="hide" style="display:none;">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a href="#" rel="nofollow">
                                                                                <i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div class="hide" style="display:none">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a href="#" rel="nofollow"><i></i>
                                                                                View Wishlist	        
                                                                            </a>
                                                                        </div>
                                                                        <div style="clear:both"></div> 
                                                                        <div class="clear"></div>                                           
                                                                    </div> 
                                                                    <div class="action compare">
                                                                        <a href="#" class="compare" data-product_id="139" rel="nofollow">
                                                                            <i></i>
                                                                            Compare
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </summary>        	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>       
                                </div>

                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a class="page-numbers" href="#">2</a></li>
                                        <li><a class="next page-numbers" href="#">→</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bootstrap.wizard.min.js"></script>
</body>

</html>