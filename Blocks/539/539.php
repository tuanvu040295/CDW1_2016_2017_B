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
    <script src="js/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="type-539">
        <div class="container">
            <!-- BEGIN TAB CONTENT -->
            <div class="tab-content">
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="#basic-tab" data-toggle="tab">Description</a>
                        </li>
                        <li><a href="#database-tab" data-toggle="tab">Product Inquiry</a>
                        </li>
                        <li><a href="#reviews-tab" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                    <div class="tab-content">
                        <!-- BEGIN FIRST TAB -->
                        <div class="tab-pane active " id="basic-tab" >
                            <h2>Product Description</h2>
                            <p>Phasellus egestas, nunc non consectetur hendrerit, risus mauris cursus velit, et condimentum nisi enim in eros. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget dignissim vitae, rutrum vel sapien.</p>
                        </div>
                        <!-- END FIRST TAB --> 
                        <!-- BEGIN SECOND TAB -->
                        <div class="tab-pane" id="database-tab" >
                            <form class="contact-form" method="post" action="#tab-info" enctype="multipart/form-data">
                                <fieldset>
                                    <ul>
                                        <li class="with-icon">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-contact-name"></i></span>
                                                <input type="text" name="yit_contact[name]" class="with-icon" value="" placeholder="Name">
                                            </div>
                                        </li>
                                        <li class="with-icon">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-contact-email"></i></span>
                                                <input type="text" name="yit_contact[ ]" class="with-icon" value="" placeholder="Email">
                                            </div>
                                        </li>
                                        <li class=" with-icon">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-contact-phone"></i></span>
                                                <input type="text" name="yit_contact[phone]" class="with-icon" value="" placeholder="Phone">
                                            </div>
                                        </li>
                                        <li class=" with-icon">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-contact-text"></i></span>
                                                <textarea name="yit_contact[message]" rows="8" cols="30" class="with-icon" placeholder="Message"></textarea>
                                            </div>
                                        </li>
                                        <li class="submit-button">
                                            <input type="submit" name="yit_sendemail" value="Send Enquiry" class="sendmail">
                                        </li>
                                    </ul>
                                </fieldset>
                            </form>
                        </div>
                        <!-- END SECOND TAB --> 
                        <!-- BEGIN THIRD TAB --> 
                        <div class="tab-pane" id="reviews-tab" >
                            <div id="reviews" >
                                <div id="comments">
                                    <h2 class=" -title">Reviews</h2>
                                    <p >There are no reviews yet.</p>
                                </div>
                                <div id="review_form">
                                    <div id="respond" >
                                        <h3 id="reply-title" >Be the first to review “Belt”
                                            <small><a rel="nofollow" href="/sistina/all-products/belt/#respond"></a></small>
                                        </h3>
                                        <form action="#" method="post" >
                                            <p><span >Your address will not be published.</span> Required fields are marked <span >*</span> </p>
                                            <p>
                                                <label for="rating">Your Rating</label>
                                                <select class="select" name="" aria-required="true">
                                                    <option value="">Rate…</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very Poor</option>
                                                </select>
                                            </p>
                                            <p class=" -comment">
                                                <label for="comment">Your Review <span >*</span> </label>
                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                            </p>
                                            <p>
                                                <label for="author">Name <span >*</span> </label>
                                                <input name="" type="text" value="" size="30" aria-required="true" required=""> </p>
                                            <p>
                                                <label for="email">Email <span >*</span> </label>
                                                <input name="" type="" value="" size="30" aria-required="true" required="">
                                            </p>
                                            <p>
                                                <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                <input type="hidden" name="" value="139" >
                                                <input type="hidden" name="" value="0">
                                            </p>
                                        </form>
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
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
