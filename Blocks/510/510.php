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
                <!-- BEGIN #FOOTER1 -->
                <div class="container">
                    <div class="row">
                        <!---BEGIN FOOTER MENU--->
                        <div class="moduletable col-md-5 " >
                            <h4 class=" m_title">FOOTER MENU</h4>
                            <ul class="menu ">
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                                <li><a href="#">Curabitur iaculis</a></li>
                            </ul>
                        </div>
                        <!---END FOOTER MENU--->

                        <!---BEGIN NEWSLETTER SIGNUP--->
                        <div class="moduletable col-md-4 " >
                            <h4 class=" m_title">NEWSLETTER SIGNUP</h4>
                            <div class="newsletter-signup">
                                <p>By subscribing to our mailing list you will always be update with the latest news from us.</p>		
                                <form method="post" name="newsletter_form">
                                    <input type="text" name="name_nl120" value="" placeholder="your name">
                                    <input type="text" name="email_nl120" value="" placeholder="email@address" required="required">
                                    <input class="til" type="submit" name="submit_nl120" value="JOIN US">
                                </form>
                                <span id="result">* it really works! Mailchimp Integration.</span>	
                                <p><small>We never spam!</small></p>
                            </div>
                        </div>
                        <!---END NEWSLETTER SIGNUP--->

                        <!---BEGIN GET IN TOUCH--->
                        <div class="moduletable col-md-3 contact-details" >
                            <h4 class=" m_title">GET IN TOUCH</h4>
                            <div class="contact-details">
                                <p><strong>T (212) 555 55 00</strong><br> Email: <a href="#">sales@yourwebsite.com</a></p>
                                <p>Your Company LTD<br> Street nr 100, 4536534, Chicago, US</p>
                                <a href="#" target="_blank" class="map-link"><span class="icon-map-marker icon-white"></span> <span> Open in Google Maps</span></a>
                            </div>
                        </div>
                        <!---END GET IN TOUCH--->
                    </div>
                </div>
                <!-- END #FOOTER1 -->

                <!-- BEGIN #FOOTER2 -->
                <div id="bottom" class="container">
                    <!---BEGIN FOLLOW SOCIAL--->
                    <div class="row">
                        <div class="col-md-6">
                            <div id="twitterFeed"></div>
                            <iframe scrolling="no" frameborder="0" allowtransparency="true"  title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.39f7ee9fffbd122b7a37a520dbdaebc6.en-gb.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en-gb&amp;screen_name=hogash&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1476868246885" style="position: static; visibility: visible; width: 112px; height: 20px;" data-screen-name="hogash"></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="social-share">
                                <img src="images/share4.jpg" alt="social sharing">
                            </div>
                        </div>
                    </div>
                    <!---END FOLLOW TWITTER--->

                    <!---BEGIN COPYRIGHT--->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="bottom ">
                                <div class="row col-md-7">
                                    <div class="copyright">
                                        <a href="#"><img src="images/logo2.png" alt="Kallyas Template for Joomla"></a><p>© 2014 <strong>KALLYAS Template</strong>. All Rights Reserved. Click <a href="#">here</a> to buy it.<br> Designed by <a href="#" target="_blank">HOGASH</a></p>				
                                    </div><!-- end copyright -->
                                </div><!-- end bottom -->
                                <div class="col-md-5">
                                    <ul class="social-icons">
                                        <li class="title">GETSOCIAL</li>
                                        <li class="social-twitter"><a href="#" target="_blank" title="Follow us on Twitter">Twitter</a></li>
                                        <li class="social-dribbble"><a href="#" target="_blank" title="Follow us on Dribbble">Dribbble</a></li>
                                        <li class="social-facebook"><a href="#" target="_blank" title="Follow us on Facebook">Facebook</a></li>
                                        <li class="social-envato"><a href="#" target="_blank" title="Follow us on Envato">Envato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---BEGIN COPYRIGHT--->
                </div>
                <!-- BEGIN #FOOTER2 -->
            </footer>
        </div>
    </body>
</html>