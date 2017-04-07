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
    </head>

    <body>
        <div class="container">
            <div class="col-md-4">
                <div class="type_569">
                    <!--BEGIN SIDEBAR -->
                    <div class="sidebar">
                        <div class="tab-content">
                            <!--BEGIN MAILCHIMP SIGNUP FORM -->
                            <div class="rehub_chimp centered_form">
                                <h4>Get The Best Deals In Your Inbox</h4>
                                <div id="mc_embed_signup">
                                    <form action="#" method="post" name="" target="_blank" no="">
                                        <div >
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Email address" required="">
                                            <div class="clear">
                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p>Don't worry we don't spam</p>
                            </div>
                            <!--END MAILCHIMP SIGNUP FORM -->
                            <div class="tab_pill">
                                <div class="title">Groups</div>
                                <div id="tabs" data-tabs="tabs">
                                    <div id="tabs" class="nav" data-tabs="tabs">
                                        <span class="active"><a href="#newest" data-toggle="tab">Newest</a></span>
                                        <span class="bp-separator" role="separator">|</span>
                                        <span><a href="#active" data-toggle="tab">Active</a></span>
                                        <span class="bp-separator" role="separator">|</span>
                                        <span><a href="#popular" data-toggle="tab">Popular</a></span>
                                    </div>
                                </div>
                                <!--BEGIN TAB CONTENT-->
                                <div id="my-tab-content" class="tab-content">
                                    <!--NEWEST-->
                                    <div class="tab-pane active" id="newest">
                                        <ul>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/1a.jpg" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/1a.jpg" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/1a.jpg" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/1a.jpg" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--ACTIVE-->
                                    <div class="tab-pane" id="active">
                                        <ul>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/2a.png" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/2a.png" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--POPULAR-->
                                    <div class="tab-pane" id="popular">
                                        <ul>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/1a.jpg" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-avatar">
                                                    <a href="#" title="Green Food"><img src="images/1a.jpg" width="100%" alt=""/></a>
                                                </div>
                                                <div class="item">
                                                    <div ><a href="#">Green Food</a></div>
                                                    <h5>active 1 day, 17 hours ago</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--END TAB CONTENT-->
                            </div>
                        </div>
                    </div>
                    <!--END SIDEBAR -->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
