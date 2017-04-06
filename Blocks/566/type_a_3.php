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
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type_a_3">
            <div class="mod">
                <div class="content">
                    <!-- Main Side -->
                    <!-- CONTENT -->
                    <!-------------------------------------nguyen ------------------------------------------>
                    <div class="mosthot">
                        <div class=" vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="sidebar">
                                    <div class="widget tabsajax">
                                        <div class="title">Most hot</div>
                                        <div class=" rh_col_tabs_3">
                                            <div class="re_filter_panel">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#home"><p>Best rated</p></a></li>
                                                    <li><a data-toggle="tab" href="#menu1"><p>This month</p></a></li>
                                                    <li><a data-toggle="tab" href="#menu2"><p>This year</p></a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade in active">
                                                    <div class="wpsm_recent_posts_list">
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">410<span class="gradus_icon"></span></span> <a href="#">LUMBABACK best sport bandage deal</a>
                                                                <span class="simple_price_count">$107</span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span>6 months ago</span>
                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">271<span class="gradus_icon"></span></span>
                                                                <a href="#">Calcium with Magnesium, Natural Orange Flavor</a>
                                                                <span class="simple_price_count">$15.36
                                                                    <del>$19.95</del>
                                                                </span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span>6 months ago </span>
                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">240<span class="gradus_icon"></span></span>
                                                                <a href="#">Apple Pectin, 700 mg</a>
                                                                <span class="simple_price_count">$10.18<del>$15.99</del></span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >6 months ago</span>
                                                                <span ><i class="fa fa-commenting"></i> 1</span>
                                                            </div>
                                                        </div>
                                                        <div style="display: block;"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade">
                                                    <div class="wpsm_recent_posts_list" data-filterargs="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;orderby&quot;:&quot;meta_value_num&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;meta_key&quot;:&quot;post_hot_count&quot;,&quot;no_found_rows&quot;:1}" data-template="simplepostlist" data-innerargs="{&quot;nometa&quot;:&quot;1&quot;}">
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">410<span class="gradus_icon"></span></span> <a href="#">LUMBABACK best sport bandage deal</a>

                                                                <span class="simple_price_count">
                                                                    $106 			 		</span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >
                                                                    6 months ago </span>
                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">271<span class="gradus_icon"></span></span> <a href="#">Calcium with Magnesium, Natural Orange Flavor</a>

                                                                <span class="simple_price_count">
                                                                    $15.36
                                                                    <del>$19.95</del>
                                                                </span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >
                                                                    6 months ago </span>
                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">240
                                                                    <span class="gradus_icon">

                                                                    </span>

                                                                </span> <a href="#">Apple Pectin, 700 mg</a>

                                                                <span class="simple_price_count">
                                                                    $10.18 			 <del>$15.99</del> 		</span>

                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >
                                                                    6 months ago
                                                                </span>
                                                                <span ><i class="fa fa-commenting"></i> 1
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade">
                                                    <div class="wpsm_recent_posts_list" data-filterargs="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;orderby&quot;:&quot;meta_value_num&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;meta_key&quot;:&quot;post_hot_count&quot;,&quot;no_found_rows&quot;:1}" data-template="simplepostlist" data-innerargs="{&quot;nometa&quot;:&quot;1&quot;}">
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">410<span class="gradus_icon"></span></span> <a href="#">LUMBABACK best sport bandage deal</a>

                                                                <span class="simple_price_count">
                                                                    $107 			 		</span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >
                                                                    6 months ago </span>
                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">271<span class="gradus_icon"></span></span> <a href="#">Calcium with Magnesium, Natural Orange Flavor</a>

                                                                <span class="simple_price_count">
                                                                    $15.36
                                                                    <del>$19.95</del>
                                                                </span>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >
                                                                    6 months ago </span>
                                                                <span ><i class="fa fa-commenting"></i> 6</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-small-news" style="display: block;">
                                                            <h3><span class="temperatur">240
                                                                    <span class="gradus_icon">

                                                                    </span>

                                                                </span> <a href="#">Apple Pectin, 700 mg</a>

                                                                <span class="simple_price_count">
                                                                    $10.18 			 <del>$15.99</del> 		</span>

                                                            </h3>
                                                            <div class="post-meta">
                                                                <span >
                                                                    6 months ago
                                                                </span>
                                                                <span ><i class="fa fa-commenting"></i> 1
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>

</html>
