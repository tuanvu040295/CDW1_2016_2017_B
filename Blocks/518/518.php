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
        $less->compileFile('less/518.less', 'css/type-a-19.css');
        ?>
        <link href="css/type-a-19.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-518">
            <main id="mainbody" class="container type-518 content">
                <section class="col-lg-9">
                    <div class="row-fluid product-page">

                        <section class="col-lg-12">

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
                                        <article class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.&nbsp;
                                                <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.&nbsp;
                                                <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Vestibulum lacinia arcu eget nulla.</p>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.&nbsp;
                                                <strong>Mauris massa</strong>. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.&nbsp;
                                                <strong>Curabitur tortor</strong>. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.</p>			
                                        </article>
                                    </div>
                                    <div class="tab-pane specialBehavior" id="shop-rating">

                                        <div class="customer-reviews">
                                            <form method="post" action="/kallyas_joomla/shop/furniture/chairs-pack-detail" name="reviewForm" id="reviewform">
                                                <!--<h4>Reviews</h4>-->

                                                <article class="list-reviews">
                                                    <span class="step">There are yet no reviews for this product.</span>
                                                    <div class="clear"></div>
                                                </article>

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

                        </section>

                    </div>

                    <div class="row-fluid product-page">
                        <div class="col-lg-12 product-neighbours">
                            <a href="/kallyas_joomla/shop/furniture/colored-chairs-detail" class="next-page">Colored Chairs<span class="icon-chevron-right"></span></a>    <div class="clear"></div>
                        </div>
                    </div>

                </section>
            </main>
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