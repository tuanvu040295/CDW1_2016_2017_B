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
    $less->compileFile('less/539.less', 'css/539.css');
    ?>

    <link href="css/539.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="type-539">
                <!-- BEGIN TABPILL TITLE -->
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
                <!-- END TABPILL TITLE -->
                <!-- BEGIN TAB CONTENT --> 
                <div class="tab-content col-md-8 col-sm-8 col-lg-8 col-xs-12">
                    <div class="tab-content">
                        <!-- BEGIN FIRST TAB -->                    
                        <div class="tab-pane active" id="basic-tab">
                            <h2>Product Description</h2>
                            <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget dignissim vitae, rutrum vel sapien.</p>
                        </div>
                        <!-- END FIRST TAB --> 
                        <!-- BEGIN SECOND TAB --> 
                        <div class="tab-pane" id="database-tab">
                            <form id="contact-form-product-enquiry" class="contact-form" method="post" action="#tab-info" enctype="multipart/form-data">
                                <fieldset>
                                    <ul>
                                        <li class="text-field with-icon">
                                            <div>
                                                <input type="text" name="yit_contact[name]" id="name-product-enquiry" class="with-icon" value="" placeholder="Name"> </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="text-field with-icon">
                                            <div>
                                                <input type="text" name="yit_contact[email]" id="email-product-enquiry" class="with-icon" value="" placeholder="Email"> </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="text-field with-icon">
                                            <div>
                                                <input type="text" name="yit_contact[phone]" id="phone-product-enquiry" class="with-icon" value="" placeholder="Phone"> </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="with-icon">
                                            <div>
                                                <textarea name="yit_contact[message]" id="message-product-enquiry" rows="8" cols="30" class="with-icon" placeholder="Message"></textarea>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="submit-button">
                                            <input type="submit" name="yit_sendemail" value="Send Enquiry" class="sendmail alignleft">
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </fieldset>
                            </form>
                        </div>
                        <!-- END SECOND TAB --> 
                        <!-- BEGIN THIRD TAB --> 
                        <div class="tab-pane" id="reviews-tab">
                            <div id="reviews">
                                <div id="comments">
                                    <h2>Reviews</h2>
                                    <p>There are no reviews yet.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond">
                                            <h3 id="reply-title">Be the first to review “Belt” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/sistina/all-products/belt/#respond" style="display:none;">Cancel reply</a></small></h3>
                                            <form action="#" method="post" id="commentform">
                                                <div class="row">
                                                    <p><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span>*</span> </p>
                                                    <p>
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
                                                    <p>
                                                        <label for="comment">Your Review <span>*</span> </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                    </p>
                                                    <p>
                                                        <label for="author">Name <span>*</span> </label>
                                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true" required=""> </p>
                                                    <p>
                                                        <label for="email">Email <span>*</span> </label>
                                                        <input id="email" name="email" type="email" value="" size="30" aria-required="true" required=""> </p>
                                                    <p>
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                        <input type="hidden" name="comment_post_ID" value="139" id="comment_post_ID">
                                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0"> </p>
                                                    <p>
                                                        <label>Current ye@r <span>*</span> </label>
                                                        <input type="hidden" name="antspm-a" value="2016">
                                                        <input type="text" name="antspm-q" value="4.2" autocomplete="off"> </p>
                                                    <p>
                                                        <label>Leave this field empty</label>
                                                        <input type="text" name="antspm-e-email-url-website" value="" autocomplete="off"> </p>
                                                </div>
                                                <input type="hidden" name="antspm-d" value="2016"> </form>
                                        </div>
                                        <!-- #respond -->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- END THIRD TAB --> 
                    </div>
                </div>
                <!-- END TAB CONTENT --> 
            </div>
        </div>
    </div>
        <script src="js/bootstrap.min.js"></script>
</body>
