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
    $less->compileFile('less/ffooter.less', 'css/ffooter.css');
    ?>

    <link href="css/ffooter.css" rel="stylesheet" type="text/css"/>

</head>

<body>
    <div class="ffooter">
        <div id="footer" class="newsletter-footer">
            <div id="footernewsletter-container" class="group">
                <form role="search" method="post" id="footernewsletter" action="">
                    <input type="hidden" id="_mc_submit_signup_form_nonce" name="_mc_submit_signup_form_nonce" value="6d49c916ea">
                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="814d789957">
                    <div class="group formborder">
                        <input type="text" value="" name="" id="footers" placeholder="Email" vk_11623="subscribed">
                        <input type="submit" class="button" id="footernewslettersubmit" value="ADD ME"> </div>
                </form>
            </div>
            <div class="container">
                <div class="row">
                    <!----1----->
                    <div class="footer-row-1 footer-columns-4 col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div id="nav_menu-3" class="widget-1 widget-first widget span3 widget_nav_menu">
                            <h3>PRODUCT CATEGORIES</h3>
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <li id="menu-item-563" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-563"> <a href="#">Our Free Themes</a> </li>
                                    <li id="menu-item-564" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-564"> <a href="#">Get Support
                                        </a> </li>
                                    <li id="menu-item-565" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-565"> <a href="#">Gift card</a> </li>
                                    <li id="menu-item-566" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-566"> <a href="#">Customer support</a> </li>
                                    <li id="menu-item-567" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-567"> <a href="#">Shipping options</a> </li>
                                    <li id="menu-item-568" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-568"> <a href="#">Terms &amp; conditions</a> </li>
                                    <li id="menu-item-569" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-569"> <a href="#">Featured items</a> </li>
                                    <li id="menu-item-570" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-570"> <a href="#">Our FAQS</a> </li>
                                    <li id="menu-item-571" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-571"> <a href="#">Testimonials</a> </li>
                                    <li id="menu-item-572" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-572"> <a href="#">Privacy policy</a> </li>
                                    <li id="menu-item-573" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-573"> <a href="#">Blog news</a> </li>
                                    <li id="menu-item-574" class="two-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-574"><a href="#">Features</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!----2----->
                    <div id="recent-posts-4" class="widget-2 widget span3 recent-posts col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <h3>NEWS</h3>
                        <div class="recent-post group">
                            <div class="hentry-post group">
                                <div class="thumb-date"> <span class="month">Jul</span> <span class="day">19</span> </div>
                                <div class="text"> <a href="#" title="-50% special discount on June" class="title">-50% special discount on June</a>
                                    <p class="post-comments">0 comments</p>
                                </div>
                            </div>
                            <div class="hentry-post group">
                                <div class="thumb-date"> <span class="month">Jul</span> <span class="day">19</span> </div>
                                <div class="text"> <a href="#" title="-50% special discount on June" class="title">-50% special discount on June</a>
                                    <p class="post-comments">2 comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----3----->
                    <div id="portfolio-gallery-2" class="widget-3 widget span3 portfolio-gallery col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <h3>FROM THE GALLERY</h3>
                        <div class="portfolio-gallery-widget">
                            <ul>
                                <li class="work-item group">
                                    <a class="work-thumb" href="#"> <img src="images/Fotolia_33222871_Subscription_Monthly_XL-65x65.jpg" title="rotes Italien" class="yit-image attachment-portfolio_gallery_thumb" width="65" height="65"> </a>
                                </li>
                                <li class="work-item group">
                                    <a class="work-thumb" href="#"> <img src="images/Fotolia_40212210_Subscription_Monthly_XL-65x65.jpg" title="Viticulture" class="yit-image attachment-portfolio_gallery_thumb" width="65" height="65"> </a>
                                </li>
                                <li class="work-item group">
                                    <a class="work-thumb" href="#"> <img src="images/Fotolia_40872345_Subscription_Monthly_XL-65x65.jpg" title="Cinque Terre coast of Italy with flowers" class="yit-image attachment-portfolio_gallery_thumb" width="65" height="65"> </a>
                                </li>
                                <li class="work-item group">
                                    <a class="work-thumb" href="#"> <img src="images/Fotolia_44298623_Subscription_Monthly_XXL1-65x65.jpg" title="St. Peter's cathedral at night, Rome" class="yit-image attachment-portfolio_gallery_thumb" width="65" height="65"> </a>
                                </li>
                                <li class="work-item group">
                                    <a class="work-thumb" href="#"> <img src="images/Fotolia_42858782_Subscription_Monthly_XXL-65x65.jpg" title="Paesaggio toscano. Podere, campo di grano" class="yit-image attachment-portfolio_gallery_thumb" width="65" height="65"> </a>
                                </li>
                                <li class="work-item group">
                                    <a class="work-thumb" href="#"> <img src="images/Fotolia_42871699_Subscription_Monthly_XL-65x65.jpg" title="View from the bridge - Venice" class="yit-image attachment-portfolio_gallery_thumb" width="65" height="65"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!----------4----------->
                    <div id="text-5" class="widget-4 widget-last widget span3 widget_text col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <h3>GET SOCIALS</h3>
                        <div class="textwidget">

                            <div class="socials-default facebook default"> <a href="#" class="socials-default default facebook">facebook</a> </div>
                            <div class="socials-default pinterest default"> <a href="#" class="socials-default default pinterest">pinterest</a> </div>
                            <div class="socials-default instagram default"> <a href="#" class="socials-default default instagram">instagram</a> </div>
                            <div class="socials-default twitter default"> <a href="#" class="socials-default default twitter">twitter</a> </div>
                            <div class="socials-default google default"> <a href="#" class="socials-default default google">google</a> </div>
                            <div style="clear: both;"></div>
                            <p>If you <strong>need support</strong> about this wonderful theme, enjoy our site
                                <a href="#"> <strong>yithemes.com</strong> </a> : you can find a lot of video tutorials and open a ticket to ask help to our developers. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
