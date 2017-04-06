<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type_569.less', 'css/type_569.css');
        ?>
        <link href="css/type_569.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type_569">
                <div class="sidebar">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="widget widget_text">
                                <div class="rehub_chimp centered_form">
                                    <h3>GET THE BEST DEALS IN YOUR INBOX</h3>
                                    <!-- Begin MailChimp Signup Form -->
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" name="" target="_blank" no="">
                                            <div >
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="email address" required="">
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;">
                                                    <input type="text" name="b_4b4bbda55bb6deb367e6f52d9_6b32851a5b" tabindex="-1" value="">
                                                </div>
                                                <div class="clear">
                                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--End mc_embed_signup-->
                                    <p>Don't worry we don't spam</p>
                                </div>
                            </div>
                            <div class="widget buddypress widget">
                                <div class="title">Groups</div>
                                <div class="item-options" id="groups-list-options">
                                    <a href="#" >Newest</a>
                                    <span role="separator">|</span>
                                    <a href="#" class="selected">Active</a>
                                    <span role="separator">|</span>
                                    <a href="#" >Popular</a>
                                </div>
                                <ul id="groups-list" class="item-list">
                                    <li class="odd">
                                        <div class="item-avatar">
                                            <a href="#" title="Green Food"><img src="images/1a.jpg" alt=""/></a>
                                        </div>
                                        <div class="item">
                                            <div ><a href="#">Green Food</a></div>
                                            <span>active 1 day, 17 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="even">
                                        <div class="item-avatar">
                                            <a href="#" title="Body Health"><img src="images/2a.png" alt=""/></a>
                                        </div>
                                        <div class="item">
                                            <a href="#">Body Health</a>
                                            <span >active 1 day, 18 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="item-avatar">
                                            <a href="#"><img src="images/3a.png" alt=""/></a>
                                        </div>
                                        <div class="item">
                                            <div ><a href="#">Bath &amp; Wash</a></div>
                                            <span >active 3 days, 20 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="even">
                                        <div class="item-avatar">
                                            <a href="#"><img src="images/4a.png" alt=""/></a>
                                        </div>
                                        <div class="item">
                                            <div ><a href="#">Sunshine</a></div>
                                            <span >active 4 days, 15 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="item-avatar">
                                            <a href="#" ><img src="images/5a.jpg" alt=""/></a>
                                        </div>
                                        <div class="item">
                                            <a href="#">Tooth for tooth</a>
                                            <span>active 4 days, 15 hours ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>
