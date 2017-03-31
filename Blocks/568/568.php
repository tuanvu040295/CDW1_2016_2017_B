<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/568.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/568.less', 'css/568.css');
        ?>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="type-568">
                    <div class="col-md-8">
                        <!--BEGIN MAIN SILE -->
                        <div class="main-side">
                            <!--BEGIN NEWS LIST -->
                            <div data-template="query_type1">
                                <!--NEWS 1-->
                                <div class="news-community">
                                    <div class="newscom_wrap_table">
                                        <div class="featured_newscom_left">
                                            <figure>
                                                <a href="#"><img data-src="#" alt="" src="image/pic1.jpg"></a>
                                            </figure>
                                            <div class="newscom_btn_block">
                                                <span class="single_price_count">$15.36<del>$19.95</del></span>
                                                <div class="btn_block_part">
                                                    <a href="#" class="btn_offer_block medium" target="_blank" rel="nofollow">Buy this item</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="newscom_detail">
                                            <span class="table_cell_hot">
                                                <span class="temperatur"><i class="fa fa-fire"></i>282<span class="gradus_icon"></span></span>
                                            </span>
                                            <span class="table_cell_hot">
                                                <button class="hotminus" alt="Vote down" title="Vote down" data-post_id="169" data-informer="282"></button>
                                            </span>
                                            <span class="table_cell_hot">
                                                <button class="hotplus" alt="Vote up" title="Vote up" data-post_id="169" data-informer="282"></button>
                                            </span>
                                            <span class=" table_cell_hot"></span>
                                            <div class="table_cell_hot fullwidth_cell">
                                                <div >
                                                    <div style="width:100%"></div>
                                                </div>
                                            </div>
                                            <h3><a href="">Calcium with Magnesium, Natural Orange Flavor</a></h3>
                                            <span >
                                                <a href="#"><img src="image/picthumb.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk">u8tgk</a>
                                            </span>
                                            <span >April 10, 2016</span>
                                            <span ><a class="cat" href="#" alt="View all posts in Baby">Baby</a></span>
                                            <p>We found that you can buy some combos:
                                                Save $12.00 when you purchase these items today for only $27.31 &nbsp;(Wellness Formula, With Andrographis and Propolis Extract, 180 ...</p>
                                            <div class="wpsm_update">
                                                <span class="label-info">Update - 2016.04.12</span>We found that you can buy some combos:
                                                <ul>
                                                    <li>
                                                        <span >Save $12.00 </span>when you purchase these items today <span>
                                                            <span >for only <span>$27.31</span> &nbsp;(</span>
                                                        </span>Wellness Formula, With Andrographis and Propolis Extract, 180 Tablets)</li>
                                                    <li>Derer&nbsp;Formulas, Dophilus EPS, 120 Veggie Caps for <span style="color: #ff0000;">$28.67</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!--NEWS 2-->
                                <div class="news-community">
                                    <div class="newscom_wrap_table">
                                        <div class="featured_newscom_left">
                                            <figure>
                                                <span class="re-line-badge">
                                                    <span class="re-line-table-badge badge_4">Best price</span>
                                                </span>
                                                <a href="#">
                                                    <img data-src="#" width="138" height="138" alt="" src="image/pic2.jpg">
                                                </a>
                                            </figure>
                                            <div class="newscom_btn_block">
                                                <span class="single_price_count">$9.97<del>$19.75</del></span>
                                                <div class="btn_block_part">
                                                    <a href="#" class="btn_offer_block medium" target="_blank" rel="nofollow">Buy this item</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="newscom_detail">
                                            <span class="table_cell_hot">
                                                <span class="temperatur">
                                                    <i class="fa fa-fire"></i> 155<span class="gradus_icon"></span>
                                                </span>
                                            </span>
                                            <span class="table_cell_hot">
                                                <button class="hotminus" alt="Vote down" title="Vote down" data-post_id="144" data-informer="155"></button></span>
                                            <span class="table_cell_hot">
                                                <button class="hotplus" alt="Vote up" title="Vote up" data-post_id="144" data-informer="155"></button>
                                            </span><span class=" table_cell_hot"></span><div class="table_cell_hot fullwidth_cell">
                                            </div>
                                            <h3><a href="#">Soft and Ultra fine bristles</a></h3>
                                            <span >
                                                <a href="#">
                                                    <img src="image/picthumb.jpg" class=" photo" width="22" height="22" alt="Profile photo of u8tgk">u8tgk</a>
                                            </span>
                                            <span >April 10, 2016</span>
                                            <span ><a class="cat" href="#" alt="View all posts in Baby">Baby</a>
                                                <a class="cat" href="#" alt="View all posts in Oral Care">Oral Care</a>
                                            </span>
                                            <p>About the Product
                                                For people with larger-sized mouths with health gums, please buy our Ranhee 5 (large size head) or Hannull 4 (medium size head)
                                                Bristles are extremely ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END NEWS LIST -->
                        </div>
                        <!--END MAIN SILE -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
