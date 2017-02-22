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
        $less->compileFile('less/type-a-18.less', 'css/type-a-18.css');
        ?>
        <link href="css/type-a-18.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-a-18">
            <div id="mainbody" class="container">
                <div class="col-lg-9">

                    <div class="row-fluid product-page">

                        <div class="col-lg-5">
                            <div class="product-gallery">
                                <div class="big-image">
                                    <a rel="prettyPhoto" href="#">
                                        <img src="images/1344484_60502956.jpg" alt=""></a>	
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">

                            <div class="main-data">

                                <ul class="actions">
                                    <li class="pdf-icon"><a rel="prettyPhoto" data-rel="tooltip" data-original-title="PDF" href="/kallyas_joomla/shop/chairs-pack-detail?tmpl=component&amp;format=pdf&amp;iframe=true&amp;width=800&amp;height=550"><span class="icon-file icon-white"></span></a></li><li class="print-icon"><a rel="prettyPhoto" data-rel="tooltip" data-original-title="Print" href="/kallyas_joomla/shop/chairs-pack-detail?tmpl=component&amp;print=1&amp;iframe=true&amp;width=800&amp;height=550"><span class="icon-print icon-white"></span></a></li><li class="email-icon"><a rel="prettyPhoto" data-rel="tooltip" data-original-title="Email" href="/kallyas_joomla/shop/furniture/chairs-pack-detail/recommend?tmpl=component&amp;iframe=true&amp;width=800&amp;height=550"><span class="icon-envelope icon-white"></span></a></li>        </ul>


                                <h1 class="name">Chairs Pack</h1>

                                <p class="first-details">
                                    <strong>Product Availability:</strong> Yes&nbsp; / &nbsp;        
                                    <strong>Manufacturer: </strong>
                                    <a target="_blank" href="/kallyas_joomla/shop/manufacturer-default-layout/manufacturers/test-manufacturer?tmpl=component">Test manufacturer</a>
                                </p>

                                <div class="rating_block">				
                                    <span class="vote">Rating:  Not Rated Yet</span>
                                </div>


                                <p class="small_desc">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.</p>
                            </div><!-- main data -->

                            <div class="spacer-buy-area">

                                <div class="product-price" id="productPrice28">
                                    <div class="PricevariantModification" style="display : none;">Variant price modifier: 
                                        <span class="PricevariantModification"></span>
                                    </div>
                                    <span class="price-crossed">
                                        <div class="PricebasePriceWithTax" style="display : none;">Base price with tax: 
                                            <span class="PricebasePriceWithTax"></span>
                                        </div>                                           
                                    </span>
                                    <div class="PricesalesPriceWithDiscount" style="display : none;">Salesprice with discount: 
                                        <span class="PricesalesPriceWithDiscount"></span>
                                    </div>
                                    <div class="mainprice">
                                        <div class="PricesalesPrice" style="display : block;">
                                            <span class="PricesalesPrice">€68,00</span>
                                        </div>
                                    </div>
                                    <div class="PricepriceWithoutTax" style="display : block;">Sales price without tax: 
                                        <span class="PricepriceWithoutTax">€68,00</span>
                                    </div>
                                    <div class="PricediscountAmount" style="display : none;">Discount: 
                                        <span class="PricediscountAmount"></span>
                                    </div>
                                    <div class="PricetaxAmount" style="display : none;">Tax amount: 
                                        <span class="PricetaxAmount"></span>
                                    </div>
                                
                                </div>

                                <div class="addtocart-area">

                                    <form method="post" class="product js-recalculate" action="/kallyas_joomla/shop">
                                        <input name="quantity" type="hidden" value="1">

                                        <div class="addtocart-bar clearfix">

                                            <div class="input-prepend input-append">
                                                <div class="spin">
                                                    <input type="text" name="demo1" id="demo1" class="form-control input-number" value="1" min="1" max="1000">
                                                </div>

                                                <span class="">
                                                    <input type="submit" name="addtocart" class="addtocart-button btn btn-danger" value="Add to Cart" title="Add to Cart">
                                                </span>
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                        <input type="hidden" class="pname" value="Chairs Pack">
                                        <input type="hidden" name="option" value="com_virtuemart">
                                        <input type="hidden" name="view" value="cart">
                                        <noscript>&lt;input type="hidden" name="task" value="add"/&gt;</noscript>
                                        <input type="hidden" name="virtuemart_product_id[]" value="28">
                                    </form>

                                    <div class="clear"></div>
                                </div>

                                <div class="ask-a-question">
                                    <a class="ask-a-question btn btn-info" href="/kallyas_joomla/shop/furniture/chairs-pack-detail/askquestion?tmpl=component&amp;iframe=true&amp;width=700&amp;height=550" rel="prettyPhoto"><span class="icon-question-sign icon-white"></span> &nbsp;&nbsp;Ask a question about this product</a>
                                </div>

                            </div><!-- spacer-buy-area -->

                        </div>

                    </div>

                    <div class="row-fluid product-page">

                        <div class="col-lg-12">

                            <div class="tabbable tabs_style4">
                                <ul class="nav fixclear">
                                    <li class="active">
                                        <a href="#shop-desc" data-toggle="tab">Description</a>
                                    </li>
                                    <li class="">
                                        <a href="#shop-rating" data-toggle="tab">Rating: </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="shop-desc">
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.&nbsp;<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.&nbsp;<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Vestibulum lacinia arcu eget nulla.</p>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.&nbsp;<strong>Mauris massa</strong>. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.&nbsp;<strong>Curabitur tortor</strong>. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.</p>			</div>
                                    </div>
                                    <div class="tab-pane specialBehavior" id="shop-rating">

                                        <div class="customer-reviews">
                                            <form method="post" action="/kallyas_joomla/shop/furniture/chairs-pack-detail" name="reviewForm" id="reviewform">
                                                <!--<h4>Reviews</h4>-->

                                                <div class="list-reviews">
                                                    <span class="step">There are yet no reviews for this product.</span>
                                                    <div class="clear"></div>
                                                </div>

                                                <input type="hidden" name="virtuemart_product_id" value="28">
                                                <input type="hidden" name="option" value="com_virtuemart">
                                                <input type="hidden" name="virtuemart_category_id" value="9">
                                                <input type="hidden" name="virtuemart_rating_review_id" value="0">
                                                <input type="hidden" name="task" value="review">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row-fluid product-page">
                        <div class="col-lg-12 product-neighbours">
                            <a href="/kallyas_joomla/shop/furniture/colored-chairs-detail" class="next-page">Colored Chairs<span class="icon-chevron-right"></span></a>    <div class="clear"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.bootstrap-touchspin.js" type="text/javascript"></script>

        <script>
            $("input[name='demo1']").TouchSpin({
                min: 1,
                max: 100,
                initval: '',
                replacementval: '',
                decimals: 0,
                forcestepdivisibility: 'round',
                verticalbuttons: false,
                verticalupclass: 'glyphicon glyphicon-chevron-up',
                verticaldownclass: 'glyphicon glyphicon-chevron-down',
                boostat: 5,
                booster: true,
                maxboostedstep: 10,
                prefix_extraclass: '',
                postfix_extraclass: '',
                step: 1,
                stepinterval: 100,
                stepintervaldelay: 500,
                mousewheel: true,
                buttondown_class: 'btn btn-danger',
                buttonup_class: 'btn btn-success',
                buttondown_txt: '-',
                buttonup_txt: '+'
            });
        </script> 
    </body>
</html>