<!DOCTYPE html>
<html>
    <head>
        <title>Đồ án web 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/577.less', 'css/577.css');
        ?>
        <link href="css/577.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <section class="type-577">
            <footer class="footer-wrapper">
                <!--BEGIN FOOTER WIDGET-->
                <div class="container footer-widgets">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-6">
                            <h3 class="widget-title">News from APPIC</h3>
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="row col-md-6">
                                    <p class="widget-news__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet quam augue. Donec ut sem vel mauris sodales egestas.</p>
                                    </div>
                                    <!-- SUBSCRIBE FORM -->
                                    <div class="row col-md-6">
                                    <form class="subscribe-form" id="subscribe-form" name="subscribe-form" method="post" action="getEmail.php" novalidate="">
                                        <input class="subscribe-input" id="input-email" name="input-email" type="email" placeholder="your email here">
                                        <button class="submit-button" id="submit-button" type="submit">
                                            <i class="icon-circle fa fa-arrow-right"></i>
                                        </button>
                                    </form>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <address class="widget-contacts">
                                        <span class="widget-contacts__item">
                                            <i class="icon-circle fa fa-phone"></i>
                                            + 44 1225 324 980
                                        </span>
                                        <span class="widget-contacts__item">
                                            <i class="icon-circle fa fa-envelope"></i>
                                            <a href="mailto:appic@gmail.com">appic@gmail.com</a>
                                        </span>
                                        <span class="widget-contacts__item">
                                            <i class="icon-circle fa fa-map-marker"></i>
                                            101 West Street, New York, NY 12345
                                        </span>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3  ">
                            <h3 class="widget-title">Latest Tweets</h3>
                            <ul class="twitter_update_list" id="twitter-feed">
                                <li>
                                    <div class="twitter-text">
                                        <a href="https://twitter.com/@OliaGozha">@OliaGozha </a>
                                        How crazy it may sound deadlines are good for your work 😬 An issue of the last week UX Notebook by 
                                        <a href="http://twitter.com/sarahdoody" style="font-weight:lighter;">@sarahdoody</a> 
                                        <a href="https://t.co/csbC8AyHel">https://t.co/csbC8AyHel</a>
                                        #UX
                                    </div>
                                    <a class="timesince" href="https://twitter.com/OliaGozha/status/795726450053812225">about 19 hours ago</a>
                                </li>
                                <li>
                                    <div class="twitter-text">
                                        <a href="https://twitter.com/@OliaGozha">@OliaGozha </a>
                                        Single value statement works for any banner. Check these marketing tips for #Shopify app developers 
                                        <a href="https://t.co/f4ZaJdeoEb">https://t.co/f4ZaJdeoEb</a> 
                                        <a href="http://twitter.com/ShopifyPartners" style="font-weight:lighter;">
                                            @ShopifyPartners
                                        </a>
                                    </div>
                                    <a class="timesince" href="https://twitter.com/OliaGozha/status/795723641249996800">
                                        about 19 hours ago
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 widget-flickr">
                            <h3 class="widget-title">Flickr Stream</h3>
                            <ul class="flickr" id="flickr">
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                                <li><a href="#" data-rel="colorbox"  >
                                        <img src="images/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne">
                                        <span class="flickr__hover"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--END FOOTER WIDGET-->
                <!--BEGIN FOOTER SECONDARY -->
                <div class="footer-secondary">
                    <div class="divider-circle"></div>
                    <div class="container">
                        <ul class="social">
                            <li class="social__item    " title="" data-original-title="pinterest">
                                <a class="icon-circle fa fa-pinterest" href="#" target="_blank"></a>
                            </li>
                            <li class="social__item    " title="" data-original-title="google">
                                <a class="icon-circle fa fa-google-plus" href="#" target="_blank"></a>
                            </li>
                            <li class="social__item    " title="" data-original-title="linkedin">
                                <a class="icon-circle fa fa-linkedin" href="#" target="_blank"></a>
                            </li>
                            <li class="social__item    " title="" data-original-title="twitter">
                                <a class="icon-circle fa fa-twitter" href="#" target="_blank"></a>
                            </li>
                            <li class="social__item    " title="" data-original-title="facebook">
                                <a class="icon-circle fa fa-facebook" href="#" target="_blank"></a>
                            </li>
                        </ul>
                        <div class="copyright">
                            <small class="small">© APPIC, 2013. All rights reserved. <a href="#">Done by Designzway</a></small>
                        </div>
                    </div>
                </div>
                <!--END FOOTER SECONDARY -->
            </footer>
        </section>
    </body>
</html>