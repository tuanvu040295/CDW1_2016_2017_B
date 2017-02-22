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
        $less->compileFile('less/type-a-25.less', 'css/type-a-25.css');
        ?>
        <link href="css/type-a-25.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-a-25">
            <div id="user1" class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="moduletable " id="mod207" data-id="207">
                            <div class="bghelper">

                                <h4 class="moduletitle ">VM - Category</h4>
                                <div class="modulecontent">

                                    <ul class="menu VMmenu" id="VMmenu141_7359">

                                        <li class="VmClose">
                                            <div>
                                                <a href="#">Electronics</a>	</div>
                                        </li>

                                        <li class="VmClose">
                                            <div>
                                                <a href="#">Fashion</a>	</div>
                                        </li>

                                        <li class="VmClose">
                                            <div>
                                                <a href="#">Furniture</a>	</div>
                                        </li>

                                        <li class="VmOpen">
                                            <div>
                                                <a href="#">Jewlery</a>	</div>
                                        </li>
                                    </ul>
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