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
    $less->compileFile('less/sidebar.less', 'css/sidebar.css');
    ?>

    <link href="css/sidebar.css" rel="stylesheet" type="text/css"/>

</head>

<body>
    <div class="_sidebar">

        <div class="col-md-3 col-xs-12 col-lg-3 col-sm-3">
            <div id="sidebar-shop-sidebar" class="span3 sidebar group">
                <div id="woocommerce_price_filter-2" class="widget-1 widget-first widget woocommerce widget_price_filter">
                    <h3>Filter by price
                        <span class="dropdown_widget">

                        </span>
                    </h3>
                    <form method="get" action="#">
                        <div class="price_slider_wrapper">
                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;">                          
                                </div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                            </div>
                            <div class="price_slider_amount">
                                <input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price" style="display: none;">
                                <input type="text" id="max_price" name="max_price" value="" data-max="99" placeholder="Max price" style="display: none;">
                                <button type="submit" class="button">Filter</button>
                                <div class="price_label" style="">
                                    Price: <span class="from">10 $</span> — <span class="to">99 $</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </form>

                </div>
                <div id="yith-woo-ajax-navigation-3" class="widget-2 widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">
                    <h3>Filter by 
                        <span class="title-highlight">categories</span>
                        <span class="dropdown_widget"></span>
                    </h3>
                    <ul class="yith-wcan-list yith-wcan ">
                        <li>
                            <a href="#">Jeans</a> 
                            <small class="count">3</small>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#">Kids</a>
                            <small class="count">5</small>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#">Pullover</a> 
                            <small class="count">1</small>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="h#">Salopette</a>
                            <small class="count">1</small>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#">Shorts</a>
                            <small class="count">3</small>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#">Sweatshirt</a>
                            <small class="count">3</small>
                            <div class="clear"></div>
                        </li><li><a href="#">T-Shirt</a>
                            <small class="count">6</small>
                            <div class="clear"></div>
                        </li>
                    </ul>                     
                </div>
                <div id="yith-woo-ajax-navigation-2" class="widget-3 widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">
                    <h3>Filter by
                        <span class="title-highlight">color</span>
                        <span class="dropdown_widget"></span>
                    </h3>
                    <ul class="yith-wcan-color yith-wcan yith-wcan-group ">
                        <li>
                            <a style="background-color:#e8dbb9;" href="#" title="Beige">Beige</a>
                        </li>
                        <li>
                            <a style="background-color:#000000;" href="#" title="Black">Black</a>
                        </li>
                        <li>
                            <a style="background-color:#1e73be;" href="#" title="Blue">Blue</a>
                        </li>
                        <li>
                            <a style="background-color:#dd9933;" href="#" title="Brown">Brown</a>
                        </li>
                        <li>
                            <a style="background-color:#20c0cc;" href="#" title="Cyan">Cyan</a>
                        </li>
                        <li>
                            <a style="background-color:#476d1e;" href="#" title="Dark green">Dark green</a>
                        </li>
                        <li>
                            <a style="background-color:#636363;" href="#" title="Grey">Grey</a>
                        </li>
                        <li>
                            <a style="background-color:#1e73be;" href="#" title="Jeans">Jeans</a>
                        </li>
                        <li>
                            <a style="background-color:#f47338;" href="#" title="Orange">Orange</a>
                        </li>
                        <li>
                            <a style="background-color:#e5b5ce;" href="#" title="Pink">Pink</a>
                        </li>
                        <li>
                            <a style="background-color:#6223e0;" href="#" title="Purple">Purple</a>
                        </li>
                        <li>
                            <a style="background-color:#dd3333;" href="#" title="Red">Red</a>
                        </li>
                        <li>
                            <a style="background-color:#eeee22;" href="#" title="White">White</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div id="yith-woo-ajax-navigation-4" class="widget-4 widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">
                    <h3>Filter by 
                        <span class="title-highlight">size</span>
                        <span class="dropdown_widget"></span>
                    </h3>
                    <ul class="yith-wcan-label yith-wcan yith-wcan-group ">
                        <li>
                            <a title="Large" href="#">L</a>
                        </li>
                        <li>
                            <a title="Medium" href="#">M</a>
                        </li>
                        <li>
                            <a title="Short" href="#">S</a>
                        </li>
                        <li>
                            <a title="Small" href="#">XS</a>
                        </li>
                    </ul>
                </div>
                <div id="yith-woo-ajax-reset-navigation-2" class="widget-5 widget-last widget yith-woocommerce-ajax-product-filter yith-woo-ajax-reset-navigation yith-woo-ajax-navigation woocommerce widget_layered_nav" style="display:none">

                </div>    
            </div>
        </div>
    </div>
</body>

