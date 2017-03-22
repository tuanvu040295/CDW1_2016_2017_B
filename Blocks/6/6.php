<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link href="css/slick.css" rel="stylesheet" type="text/css"/>
        <link href="css/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/6.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/6.less', 'css/6.css');
        ?>

    </head>
    <body>
        <section class="type-6">
            <div class="container">

                <div class="col-md-12">
                    <article class="main-title">
                        <h1 class="title">Our Awesome Chef</h1>
                        <h4 class="sub_title">FLOURANT TEAM</h4>
                        <p class="description">The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized<br> then one consider white bread</p>
                    </article>
                </div>  


                <div class="slz-carousel-wrapper">
                    <div class="carousel-overflow">
                        <div class="slz-carousel slick-initialized slick-slider slick-dotted" >
                            <div class="slider">


                                <div class="item slick-slide" style="width: 390px;">
                                    <div class="slz-block-team-05">
                                        <div class="team-wrapper">
                                            <div class="team-image">
                                                <img width="310" height="310" src="images/team08-800x650.jpg">       
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="title" tabindex="-1">ANNA TAYLOR</a>
                                                <div class="team-position">Head Chief</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item slick-slide" style="width: 390px;">
                                    <div class="slz-block-team-05">
                                        <div class="team-wrapper">
                                            <div class="team-image">
                                                <img width="310" height="310" src="images/team01.jpg">       
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="title" tabindex="-1">Benderd Dimitor</a>
                                                <div class="team-position">Head Chief</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item slick-slide" style="width: 390px;">
                                    <div class="slz-block-team-05">
                                        <div class="team-wrapper">
                                            <div class="team-image">
                                                <img width="310" height="310" src="images/team05-800x650.jpg">       
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="title" tabindex="-1">ALEX WILSON</a>
                                                <div class="team-position">Head Chief</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item slick-slide" style="width: 390px;">
                                    <div class="slz-block-team-05">
                                        <div class="team-wrapper">
                                            <div class="team-image">
                                                <img width="310" height="310" src="images/team04-800x650.jpg">       
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="title" tabindex="-1">ROBERT MATHEW</a>
                                                <div class="team-position">Head Chief</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="slick-dots" style="display: block;" role="tablist">
                                    <li><button type="button" data-role="none" role="button" tabindex="0">1</button></li>
                                    <li><button type="button" data-role="none" role="button" tabindex="0">2</button></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/slick.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true,
                    infinite: true,
                    speed: 300,
                    responsive: [
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            });
        </script>

    </body>
</html>
