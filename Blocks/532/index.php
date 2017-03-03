<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-23-f-main">
            <div class="container">
                <div class="row">
                    <div id="primary" class="sidebar-right">
                        <div class="container">
                            <div class="row">
                                <!--PRODUCTS LEFT-->
                                <div id="content-shop" class="col-md-10 content group">
                                    <div class="row">
                                        <div id="page-meta" class="group">
                                            <h1 class="product-title page-title">Single bed</h1>
                                            <p id="yit-breadcrumb" itemprop="breadcrumb">
                                                <a class="home" href="#">Home</a> &nbsp;/&nbsp;<a href="#">Category</a>&nbsp;/&nbsp;<a href="#">Beds</a>&nbsp;/&nbsp;Single bed
                                            </p>
                                        </div>
                                    </div>
                                    <!--SHOW-PRODUCTS-->
                                    <div class="row">
                                        <!--HINH ANH SAN PHAN-->
                                        <div class="col-md-6">
                                            <div class="row pro-row">
                                                <div class="col-md-12 large-pic">
                                                    <img src="images/sp1.jpg" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="row pro-row row3">
                                                <div class="col-md-4 col-xs-4 small-pic">
                                                    <img src="images/sp1.jpg" class="img-responsive">
                                                </div>
                                                <div class="col-md-4 col-xs-4 small-pic blind">
                                                    <img src="images/sp2.jpg" class="img-responsive">
                                                </div>
                                                <div class="col-md-4 col-xs-4 small-pic blind">
                                                    <img src="images/sp3.jpg" class="img-responsive">
                                                </div>
                                            </div>

                                        </div>

                                        <!--GIOI THIEU SAN PHAM-->
                                        <div class="col-md-6">
                                            <div class="summary entry-summary">
                                                <h2 class="fn hide" itemprop="name">Single bed</h2>
                                                <div itemprop="description" class="product-description group">
                                                    <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum.</p>
                                                    <p>Donec nisi est, tempus eget. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget.</p>
                                                </div>
                                                <form class="cart" method="post" enctype="multipart/form-data">
                                                    <div class="simple-quantity">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus">
                                                            <input type="number " step="1" min="1" max="" name="quantity" value="1" title="Qty" class="price input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                            <input type="button" value="+" class="plus">
                                                        </div>
                                                    </div>
                                                    <div class="woocommerce-price-and-add group">
                                                        <div class="woocommerce-price">
                                                            <div itemprop="offers" itemscope="" itemtype="#">
                                                                <p class="price"> <span class="price-label">Price:</span><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>400.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>375.00</span></ins></p>
                                                                <meta itemprop="priceCurrency" content="GBP">
                                                                <link itemprop="availability" href="#">
                                                            </div>
                                                        </div>
                                                        <div class="woocommerce-add-to-cart">
                                                            <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                                            <input type="hidden" name="add-to-cart" value="389">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-389">
                                                    <div class="yith-wcwl-add-button show" style="display:block"> <a href="/cheope/product/single-bed/?add_to_wishlist=389" rel="nofollow" data-product-id="389" data-product-type="simple" class="add_to_wishlist"> Add to Wishlist</a> <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden"></div>
                                                    <!--<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"> <span class="feedback">Product added!</span> <a href="#" rel="nofollow"> Browse Wishlist </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"> <span class="feedback">The product is already in the wishlist!</span> <a href="#" rel="nofollow"> Browse Wishlist </a></div>-->
                                                    <div style="clear:both"></div>
                                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="nmp"><a href="/cheope/product/single-bed/?action=yith-woocompare-add-product&amp;id=389" class="compare button" data-product_id="389" rel="nofollow">Compare</a></div>
                                                <div class="product_meta"> <span class="posted_in">Categories: <a href="#" rel="tag">Beds</a>, <a href="#" rel="tag">Brand 1</a>.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab bill-->
                                    <div class="row">
                                        <div class="col-md-10 woocommerce-tabs">
                                            <div id="exTab2">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#1" data-toggle="tab">Description</a>
                                                    </li>
                                                    <li><a href="#2" data-toggle="tab">Product Inquiry</a>
                                                    </li>
                                                    <li><a href="#3" data-toggle="tab">Reviews (0)</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content ">
                                                    <div class="tab-pane active" id="1">
                                                        <h2>Product Description</h2>
                                                        <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget. Nam ullamcorper neque non erat elementum vulputate.</p>
                                                        <p>Nullam dignissim lobortis interdum. Donec nisi est, tempus eget.&nbsp;<strong>Phasellus egestas</strong>, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros.</p>
                                                        <p>Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum.&nbsp;<a href="#">Donec nisi est</a>, tempus eget. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget.</p>
                                                    </div>
                                                    <div class="tab-pane panel entry-content" id="2">
                                                        <div id="ask-info-wrapper">
                                                            <form id="contact-form-contact-form" class="contact-form row-fluid" method="post" action="#tab-info" enctype="multipart/form-data">
                                                                <div class="usermessagea"></div>
                                                                <fieldset>
                                                                    <ul>
                                                                        <li class="text-field col-md-4">
                                                                            <label for="name-contact-form"> <span class="mainlabel">Name</span> </label>
                                                                            <div class="input-prepend"><span class="add-on"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                                                <input type="text" name="yit_contact[name]" id="name-contact-form" class="required" value="">
                                                                            </div>
                                                                            <div class="msg-error"></div>
                                                                            <div class="clear"></div>
                                                                        </li>
                                                                        <li class="text-field col-md-4">
                                                                            <label for="email-contact-form"> <span class="mainlabel">Email</span> </label>
                                                                            <div class="input-prepend"><span class="add-on"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                                                <input type="text" name="yit_contact[email]" id="email-contact-form" class="required email-validate" value="">
                                                                            </div>
                                                                            <div class="msg-error"></div>
                                                                            <div class="clear"></div>
                                                                        </li>
                                                                        <li class="text-field col-md-4">
                                                                            <label for="phone-contact-form"> <span class="mainlabel">Phone</span> </label>
                                                                            <div class="input-prepend"><span class="add-on"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                                                <input type="text" name="yit_contact[phone]" id="phone-contact-form" class="" value="">
                                                                            </div>
                                                                            <div class="msg-error"></div>
                                                                            <div class="clear"></div>
                                                                        </li>
                                                                        <li class="textarea-field  left-no-margin col-md-12">
                                                                            <label for="message-contact-form"> <span class="mainlabel">Message</span> </label>
                                                                            <div class="input-prepend"><span class="add-on"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                                                <textarea name="yit_contact[message]" id="message-contact-form" rows="8" cols="30" class="required"></textarea>
                                                                            </div>
                                                                            <div class="msg-error"></div>
                                                                            <div class="clear"></div>
                                                                        </li>
                                                                        <li class="submit-button left-no-margin col-md-12">
                                                                            <input type="text" name="yit_bot" id="yit_bot">
                                                                            <input type="hidden" name="yit_action" value="sendemail" id="yit_action">
                                                                            <input type="hidden" name="yit_referer" value="http://live.yithemes.com/cheope/product/fantasy-sofa/">
                                                                            <input type="hidden" name="id_form" value="4">
                                                                            <input type="hidden" name="yit_contact[sku]" value="">
                                                                            <input type="hidden" name="yit_contact[product_id]" value="285">
                                                                            <input type="submit" name="yit_sendemail" value="Send Message" class="sendmail alignright">
                                                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="bafbc3ffba">
                                                                            <input type="hidden" name="_wp_http_referer" value="/cheope/product/fantasy-sofa/">
                                                                            <div class="clear"></div>
                                                                        </li>
                                                                    </ul>
                                                                </fieldset>
                                                            </form>
                                                            <script type="text/javascript">
                                                                var messages_form_4 = {
                                                                    name: "Insert the name",
                                                                    email: "Insert a valid email",
                                                                    phone: "",
                                                                    message: "Insert a message"
                                                                };
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="panel entry-content tab-pane" id="3">
                                                        <div class="row">
                                                            <div id="reviews">

                                                                <div id="comments">
                                                                    <h2>Reviews</h2>
                                                                    <p>There are no reviews yet, would you like to <a href="#review_form" class="inline show_review_form">submit yours</a>?</p>
                                                                </div>

                                                                <div id="review_form_wrapper">
                                                                    <div id="review_form">
                                                                        <div id="respond" class="comment-respond">
                                                                            <h2 id="reply-title" class="comment-reply-title">Be the first to review “Fantasy sofa” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/cheope/product/fantasy-sofa/#respond" style="display:none;">Cancel reply</a></small></h2>
                                                                            <form action="#" method="post" id="commentform" class="comment-form anti-spam-form-processed">
                                                                                <div class="row row3">
                                                                                    <p class="comment-form-rating">
                                                                                        <label for="rating">Rating</label>
                                                                                    <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>
                                                                                    <select name="rating" id="rating" style="display: none;">
                                                                                        <option value="">Rate…</option>
                                                                                        <option value="5">Perfect</option>
                                                                                        <option value="4">Good</option>
                                                                                        <option value="3">Average</option>
                                                                                        <option value="2">Not that bad</option>
                                                                                        <option value="1">Very Poor</option>
                                                                                    </select>
                                                                                    </p>
                                                                                    <p class="comment-form-comment">
                                                                                        <label for="comment">Your Review</label>
                                                                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                                    </p>
                                                                                    <p class="comment-form-author">
                                                                                        <label for="author">Name</label> <span class="required">*</span>
                                                                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                                                                                    </p>
                                                                                    <p class="comment-form-email">
                                                                                        <label for="email">Email</label> <span class="required">*</span>
                                                                                        <input id="email" name="email" type="text" value="" size="30" aria-required="true">
                                                                                    </p>
                                                                                    <p class="form-submit">
                                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit Review">
                                                                                        <input type="hidden" name="comment_post_ID" value="285" id="comment_post_ID">
                                                                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                                                    </p>
                                                                                    <p class="antispam-group antispam-group-q" style="clear: both; display: none;">
                                                                                        <label>Current ye@r <span class="required">*</span></label>
                                                                                        <input type="hidden" name="antspm-a" class="antispam-control antispam-control-a" value="2016">
                                                                                        <input type="text" name="antspm-q" class="antispam-control antispam-control-q" value="4.2" autocomplete="off">
                                                                                    </p>
                                                                                    <p class="antispam-group antispam-group-e" style="display: none;">
                                                                                        <label>Leave this field empty</label>
                                                                                        <input type="text" name="antspm-e-email-url-website" class="antispam-control antispam-control-e" value="" autocomplete="off">
                                                                                    </p>
                                                                                </div>
                                                                                <input type="hidden" name="antspm-d" class="antispam-control antispam-control-d" value="2016">
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/menu.js" type="text/javascript"></script>
    </body>

</html>