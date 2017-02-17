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
        $less->compileFile('less/type-a-11.less', 'css/type-a-11.css');
        ?>
        <link href="css/type-a-11.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-a-11">
            <footer id="footer">


                <div id="footer1" class="container">
                    <div class="row">

                        <div class="moduletable col-lg-5 " >
                            <div class="bghelper">
                                <h4 class="moduletitle m_title">FOOTER MENU</h4>
                                <div class="modulecontent">
                                    <ul class="menu  clearfix">
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
                                </div><!-- end modulecontent-->
                            </div><!-- end bghelper -->
                        </div><!-- end module -->


                        <div class="moduletable col-lg-4 " >
                            <div class="bghelper">

                                <h4 class="moduletitle m_title">NEWSLETTER SIGNUP</h4>
                                <div class="modulecontent">


                                    <div class="newsletter-signup">
                                        <p>By subscribing to our mailing list you will always be update with the latest news from us.</p>		
                                        <form method="post" id="newsletter_subscribe120" name="newsletter_form">
                                            <input type="text" name="name_nl120" id="nl-name" value="" placeholder="your name">
                                            <input type="text" name="email_nl120" id="nl-email" value="" placeholder="email@address" required="required">
                                            <input type="submit" name="submit_nl120" id="nl-submit" value="JOIN US">
                                        </form>

                                        <span id="result">* it really works! Mailchimp Integration.</span>	
                                        <p><small>We never spam!</small></p></div><!-- end newsletter-signup -->
                                </div><!-- end modulecontent-->
                            </div><!-- end bghelper -->
                        </div><!-- end module -->


                        <div class="moduletable col-lg-3 contact-details" >
                            <div class="bghelper">

                                <h4 class="moduletitle m_title">GET IN TOUCH</h4>
                                <div class="modulecontent">


                                    <div class="custom contact-details">
                                        <p><strong>T (212) 555 55 00</strong><br> Email: <a href="#">sales@yourwebsite.com</a></p>
                                        <p>Your Company LTD<br> Street nr 100, 4536534, Chicago, US</p>
                                        <a href="#" target="_blank" class="map-link"><span class="icon-map-marker icon-white"></span> <span> Open in Google Maps</span></a>
                                    </div>
                                </div><!-- end modulecontent-->
                            </div><!-- end bghelper -->
                        </div><!-- end module -->


                    </div>
                </div><!-- end #footer1 -->



                <div id="bottom" class="container">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="twitter-feed">

                                <div class="tweets" id="twitterFeed"><ul></ul></div>


                                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.39f7ee9fffbd122b7a37a520dbdaebc6.en-gb.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en-gb&amp;screen_name=hogash&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1476868246885" style="position: static; visibility: visible; width: 112px; height: 20px;" data-screen-name="hogash"></iframe>

                            </div><!-- end twitter-feed -->
                        </div>

                        <div class="col-lg-6">
                            <ul class="social-share fixclear">

                                <li class="sc-facebook">
                                    <div class="fb-like fb_iframe_widget" data-href="#" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-font="lucida grande" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=90&amp;font=lucida%20grande&amp;href=http%3A%2F%2Ffacebook.com%2Fhogash.themeforest&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=120"><span style="vertical-align: bottom; width: 85px; height: 20px;"><iframe name="f9218cee18984" width="120px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FfTmIQU3LxvB.js%3Fversion%3D42%23cb%3Df2aa3ae73b49824%26domain%3Dhogash-demos.com%26origin%3Dhttp%253A%252F%252Fhogash-demos.com%252Ff2aee17f846df%26relation%3Dparent.parent&amp;container_width=90&amp;font=lucida%20grande&amp;href=http%3A%2F%2Ffacebook.com%2Fhogash.themeforest&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=120" style="border: none; visibility: visible; width: 85px; height: 20px;" class=""></iframe></span></div>
                                </li>

                                <li class="sc-twitter">

                                    <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.39f7ee9fffbd122b7a37a520dbdaebc6.en-gb.html#dnt=false&amp;hashtags=joomla&amp;id=twitter-widget-1&amp;lang=en-gb&amp;original_referer=http%3A%2F%2Fhogash-demos.com%2Fkallyas_joomla%2F&amp;size=m&amp;text=Check%20out%20this%20awesome%20Kallyas%20Joomla%20Template&amp;time=1476873257001&amp;type=share&amp;url=http%3A%2F%2Fhogash-demos.com%2Fkallyas_joomla%2F&amp;via=hogash" style="position: static; visibility: visible; width: 60px; height: 20px;" data-url="#"></iframe>

                                </li>

                                <li class="sc-gplus">

                                    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1476868246186" name="I0_1476868246186" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=http%3A%2F%2Fhogash-demos.com&amp;url=http%3A%2F%2Fhogash-demos.com%2Fkallyas_joomla%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.AZNogzwVxmY.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPlDxWRNUFmXoi4TwehAJIDFNOCVQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1476868246186&amp;parent=http%3A%2F%2Fhogash-demos.com&amp;pfname=&amp;rpctoken=26802611" data-gapiattached="true" title="+1"></iframe></div>
                                </li><!-- Gogle Plus Button -->

                                <li class="sc-pinterest">
                                    <span class="PIN_1476868249293_button_pin PIN_1476868249293_beside" data-pin-log="button_pinit" data-pin-href="#" data-pin-x="4"><span class="PIN_1476868249293_count" data-pin-href="#" data-pin-log="button_pinit" data-pin-x="4">4</span></span>

                                </li><!-- Pin IT Button -->
                            </ul>
                        </div>
                    </div><!-- end row -->

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="bottom fixclear">
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