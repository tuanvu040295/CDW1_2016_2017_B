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
    $less->compileFile('less/tabpill.less', 'css/tabpill.css');
    ?>

    <link href="css/tabpill.css" rel="stylesheet" type="text/css"/>

</head>

<body>
    <div class="row woocommerce-tabs group">
        <div class="tab-content col-md-4 col-sm-4 col-lg-4 col-xs-12">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#basic-tab" data-toggle="tab">Description</a>
                </li>
                <li><a href="#database-tab" data-toggle="tab">Product Inquiry</a>
                </li>
                <li><a href="#reviews-tab" data-toggle="tab">Reviews</a>
                </li>
            </ul>
        </div>
        <div class="tab-content col-md-8 col-sm-8 col-lg-8 col-xs-12">
            <div class="tab-content">
                <!-- First tab -->                    
                <div class="tab-pane active" id="basic-tab">
                    <h2>Product Description</h2>
                    <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget dignissim vitae, rutrum vel sapien.</p>
                </div>
                <!-- Second tab -->
                <div class="tab-pane" id="database-tab">
                    <form id="contact-form-product-enquiry" class="contact-form row-fluid" method="post" action="#tab-info" enctype="multipart/form-data">
                        <div class="usermessagea"></div>
                        <fieldset>
                            <ul>
                                <li class="text-field with-icon span4">
                                    <div class="input-prepend"> <span class="add-on"><i class="icon-contact-name"></i></span>
                                        <input type="text" name="yit_contact[name]" id="name-product-enquiry" class="with-icon required" value="" placeholder="Name"> </div>
                                    <div class="msg-error"></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="text-field with-icon span4">
                                    <div class="input-prepend"> <span class="add-on"><i class="icon-contact-email"></i></span>
                                        <input type="text" name="yit_contact[email]" id="email-product-enquiry" class="with-icon required email-validate" value="" placeholder="Email"> </div>
                                    <div class="msg-error"></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="text-field with-icon span4">
                                    <div class="input-prepend"> <span class="add-on"><i class="icon-contact-phone"></i></span>
                                        <input type="text" name="yit_contact[phone]" id="phone-product-enquiry" class="with-icon" value="" placeholder="Phone"> </div>
                                    <div class="msg-error"></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="textarea-field with-icon first-of-line span12">
                                    <div class="input-prepend"><span class="add-on">
                                            <i class="icon-contact-text"></i></span>
                                        <textarea name="yit_contact[message]" id="message-product-enquiry" rows="8" cols="30" class="with-icon required" placeholder="Message"></textarea>
                                    </div>
                                    <div class="msg-error"></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="submit-button span12">
                                    <input type="submit" name="yit_sendemail" value="Send Enquiry" class="sendmail alignleft">
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
                <!--Third tab-->
                <div class="tab-pane" id="reviews-tab">
                    <div id="reviews" class="woocommerce-Reviews">
                        <div id="comments">
                            <h2 class="woocommerce-Reviews-title">Reviews</h2>
                            <p class="woocommerce-noreviews">There are no reviews yet.</p>
                        </div>
                        <div id="review_form_wrapper">
                            <div id="review_form">
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Be the first to review “Belt” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/sistina/all-products/belt/#respond" style="display:none;">Cancel reply</a></small></h3>
                                    <form action="#" method="post" id="commentform" class="comment-form anti-spam-form-processed">
                                        <div class="row">
                                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span> </p>
                                            <p class="comment-form-rating">
                                                <label for="rating">Your Rating</label>
                                                <select name="rating" id="rating" aria-required="true" required="" style="display: none;">
                                                    <option value="">Rate…</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very Poor</option>
                                                </select>
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Your Review <span class="required">*</span> </label>
                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span> </label>
                                                <input id="author" name="author" type="text" value="" size="30" aria-required="true" required=""> </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span> </label>
                                                <input id="email" name="email" type="email" value="" size="30" aria-required="true" required=""> </p>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                <input type="hidden" name="comment_post_ID" value="139" id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0"> </p>
                                            <p class="antispam-group antispam-group-q" style="clear: both; display: none;">
                                                <label>Current ye@r <span class="required">*</span> </label>
                                                <input type="hidden" name="antspm-a" class="antispam-control antispam-control-a" value="2016">
                                                <input type="text" name="antspm-q" class="antispam-control antispam-control-q" value="4.2" autocomplete="off"> </p>
                                            <p class="antispam-group antispam-group-e" style="display: none;">
                                                <label>Leave this field empty</label>
                                                <input type="text" name="antspm-e-email-url-website" class="antispam-control antispam-control-e" value="" autocomplete="off"> </p>
                                        </div>
                                        <input type="hidden" name="antspm-d" class="antispam-control antispam-control-d" value="2016"> </form>
                                </div>
                                <!-- #respond -->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.bootstrap.wizard.min.js"></script>
        <script src="js/tabpill.js" type="text/javascript"></script>
</body>
