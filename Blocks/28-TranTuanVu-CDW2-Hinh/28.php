<html>
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
        $less->compileFile('less/28.less', 'css/28.css');
        ?>
        <link href="css/28.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-28">
            <!--BEGIN HEAGER -->
            <nav class="navbar navbar-default" role="navigation">
                <!--BEGIN TOP HEAGER -->
                <div class="top-navbar">
                    <div class="container">
                        <div class="user-link col-sm-8">
                            <div>
                                <p><a  href="#"> <i class="fa fa-phone" aria-hidden="true"></i>+1 800 559 6580</a></p>
                                <p><a href="#" ><i class="fa fa-map-marker" aria-hidden="true"></i>28 Jackson Blvd Ste 1020 Chicago</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END TOP HEAGER -->
                <!--BEGIN MENU -->
                <div class="menu">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="logo" href="#">Golf</a>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"> <a href="#page-top">Home</a> </li>
                                <li> <a href="#about">About</a> </li>
                                <li> <a href="#services">Services</a> </li>
                                <li> <a href="#contact">Gallery</a> </li>
                                <li> <a href="#contact">Blog</a> </li>
                                <li> <a href="#contact">Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--BEGIN TOP HEAGER -->
            </nav>
            <!--END HEAGER -->
            <!--BEGIN SLIDER -->
            <div class="carousel fade-carousel slide" data-ride="carousel" id="bs-carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                        <div class="hero">
                            <hgroup>
                                <h1>Our club</h1>        
                            </hgroup>
                            <button class="btn btn-hero btn-lg" role="button">read more</button>
                            <button class="btn btn-hero btn-lg" role="button">join us</button>
                        </div> 
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                        <div class="hero">
                            <hgroup>
                                <h1>Our club</h1>        
                            </hgroup>
                            <button class="btn btn-hero btn-lg" role="button">read more</button>
                            <button class="btn btn-hero btn-lg" role="button">join us</button>
                        </div> 
                    </div>
                    <div class="item slides">
                        <div class="slide-3"></div>
                        <div class="hero">
                            <hgroup>
                                <h1>Our club</h1>        
                            </hgroup>
                            <button class="btn btn-hero btn-lg" role="button">read more</button>
                            <button class="btn btn-hero btn-lg" role="button">join us</button>
                        </div> 
                    </div>
                </div> 
            </div>
            <!--END SLIDER -->
            <!--BEGIN HELLO -->
            <div class="hello">
                <div class="container">
                    <div class="row col-lg-9">
                        <div class="title">Hello!</div>
                        <p>The Golf has hosted golf royalty including Hogan, Snead, Palmer, Player, Nicklaus, Trevino, Faldo, Watson, Ballesteros, Woods, Mickelson and many others! Come follow in their footsteps as you play our five championship courses for yourself! The Old White TPC, home to The Golf Classic PGA TOUR event, is the oldest course currently used for a PGA TOUR event as well as the only C. B. Macdonald course available to the public!</p>
                    </div>
                </div>
            </div>
            <!--END HELLO -->
            <!--BEGIN THUMNAIL -->
            <div class="thumnail">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="post-img-content">
                                <img src="images/page1_pic1.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="post-img-content">
                                <img src="images/page1_pic1.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="post-img-content">
                                <img src="images/page1_pic1.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="post-img-content">
                                <img src="images/page1_pic1.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END THUMNAIL -->
            <!--BEGIN PLAYGOLF -->
            <div class="playgolf">
                <div class="container">
                    <div class="title">The best place to play golf</div>
                </div>
            </div>
            <!--END PLAYGOLF -->
            <!--BEGIN OUR HISTORY -->
            <div class="ourhistory">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="post">
                                <img src="images/page1_icon2.png" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="post">
                                <img src="images/page1_icon2.png" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="post">
                                <img src="images/page1_icon2.png" class="img-responsive" alt=""/>
                            </div>
                            <div class="content">
                                <div class="title">Tee Times</div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                                <div>
                                    <a href="#" class="btn btn-warning btn-sm">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END OUR HISTORY -->
            <!--BEGIN GALLERY -->
            <div class="gallery">
                <div class="container">
                    <div class="title">Gallery</div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="images/gall1-big-pic-1.jpg" class="img-responsive" alt=""/> </a>
                        </div>
                    </div>
                    <button class="btnview">view all</button>
                </div>
            </div>
            <!--END GALLERY -->
            <div class="playgolf">
                <div class="container">
                    <div class="title">The place to rest</div>
                </div>
            </div>
            <!--BEGIN MEMBER -->
            <div class="member">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="Carousel" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carousel" data-slide-to="1"></li>
                                    <li data-target="#Carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content">
                                                    <div class="number">30</div>
                                                    <h2>Memebers</h2>
                                                    <p>Joined us for the past two years.</p>
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
            <!--END GALLERY -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0; width: 100%; height: 602px"></iframe>
        </div>
    </body>
</html>