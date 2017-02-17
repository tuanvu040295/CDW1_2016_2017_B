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
        $less->compileFile('less/type-a-22.less', 'css/type-a-22.css');
        ?>
        <link href="css/type-a-22.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-a-22">
            <div id="user1" class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="moduletable " id="mod203" data-id="203">
                            <div class="bghelper">

                                <h4 class="moduletitle ">VM - Featured products</h4>
                                <div class="modulecontent">
                                    <div class="vmgroup ">


                                        <div class="vmproduct">
                                            <div class="product-list-item">
                                                <span class="hover"></span>
                                                <div class="image">
                                                    <a href="#" title="Galaxy Tab II">
                                                        <img src="images/img229527_17052012164027_0_120x120.jpg" alt="img229527_17052012164027_0" class="featuredProductImage" border="0">
                                                    </a>
                                                </div>		
                                                <div class="prod-details fixclear">
                                                    <h3><a href="#">Galaxy Tab II</a></h3>
                                                    <p class="desc">For stunning and inventive handheld entertainment look no further than the Samsung Galaxy Tab 2...</p>                                            
                                                    <div class="price">
                                                        <span>€400,00</span>			
                                                    </div>
                                                </div><!-- end prod-details -->
                                            </div><!-- end product-list-item -->

                                        </div>
                                    </div>			
                                </div><!-- end modulecontent-->
                            </div><!-- end bghelper -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>