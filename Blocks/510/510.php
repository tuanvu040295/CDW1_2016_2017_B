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
        $less->compileFile('less/510.less', 'css/510.css');
        ?>
        <link href="css/510.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-510">
            <footer id="footer">
                <!-- BEGIN #footer1 -->
                <div class="container">
                    <div class="row">
                        <div class="moduletable col-lg-5 " >
                            <h4 class="moduletitle m_title">FOOTER MENU</h4>
                            <ul class="menu ">
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                                <li class="item-132"><a href="#">Curabitur iaculis</a></li>
                            </ul>
                        </div><!-- end module -->
                        <div class="moduletable col-lg-4 " >
                            <h4 class="moduletitle m_title">NEWSLETTER SIGNUP</h4>
                            <div class="newsletter-signup">
                                <p>By subscribing to our mailing list you will always be update with the latest news from us.</p>		
                                <form method="post" id="newsletter_subscribe120" name="newsletter_form">
                                    <input type="text" name="name_nl120" id="nl-name" value="" placeholder="your name">
                                    <input type="text" name="email_nl120" id="nl-email" value="" placeholder="email@address" required="required">
                                    <input type="submit" name="submit_nl120" id="nl-submit" value="JOIN US">
                                </form>
                                <span id="result">* it really works! Mailchimp Integration.</span>	
                                <p><small>We never spam!</small></p></div><!-- end newsletter-signup -->
                        </div><!-- end module -->
                        <div class="moduletable col-lg-3 contact-details" >

                            <h4 class="moduletitle m_title">GET IN TOUCH</h4>
                            <div class="custom contact-details">
                                <p><strong>T (212) 555 55 00</strong><br> Email: <a href="#">sales@yourwebsite.com</a></p>
                                <p>Your Company LTD<br> Street nr 100, 4536534, Chicago, US</p>
                                <a href="#" target="_blank" class="map-link"><span class="icon-map-marker icon-white"></span> <span> Open in Google Maps</span></a>
                            </div>
                        </div><!-- end module -->


                    </div>
                </div>
                <!-- END #footer1 -->



                <div id="bottom" class="container">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="twitter-feed">
                                <div class="tweets" id="twitterFeed"><ul></ul></div>
                                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.39f7ee9fffbd122b7a37a520dbdaebc6.en-gb.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en-gb&amp;screen_name=hogash&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1476868246885" style="position: static; visibility: visible; width: 112px; height: 20px;" data-screen-name="hogash"></iframe>
                            </div><!-- end twitter-feed -->
                        </div>
                        <div class="col-sm-6">
                            <div id="text-2" class="widget widget_text"> 
                                <div class="textwidget">
                                    <div class="social-share">
                                        <img src="images/share4.jpg" alt="social sharing">
                                    </div>
                                </div>
                            </div></div>
                    </div><!-- end row -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="bottom ">
                                <ul class="social-icons fixclear normal">
                                    <li class="title">GET SOCIAL</li>
                                    <li class="social-twitter"><a href="#" target="_blank" title="Follow us on Twitter">Twitter</a></li>
                                    <li class="social-dribbble"><a href="#" target="_blank" title="Follow us on Dribbble">Dribbble</a></li>
                                    <li class="social-facebook"><a href="#" target="_blank" title="Follow us on Facebook">Facebook</a></li>
                                    <li class="social-envato"><a href="#" target="_blank" title="Follow us on Envato">Envato</a></li>
                                </ul>
                                <div class="copyright">
                                    <a href="#"><img src="images/logo2.png" alt="Kallyas Template for Joomla"></a><p>© 2014 <strong>KALLYAS Template</strong>. All Rights Reserved. Click <a href="#">here</a> to buy it.<br> Designed by <a href="#" target="_blank">HOGASH</a></p>				
                                </div><!-- end copyright -->
                            </div><!-- end bottom -->
                        </div><!-- end row -->
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>