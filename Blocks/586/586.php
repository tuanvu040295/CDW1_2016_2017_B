<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/586.less', 'css/586.css');
        ?>
        <link href="css/586.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="type-586">
            <!--menu-->
            
            <!--endmenu-->

            <!--body-->

            <div class="ds">
                <div class="tite">
                    <h1>Exposure</h1>
                </div>

                <div class="product">
                    <div class="image">
                        <img src="image/img1.jpg" alt=""/>

                    </div>
                    <div class="opa"></div>
                    <div class="name">
                        <div class="blue"></div>

                        <h2>Aliquam sapien in diam amet</h2>
                        <span class="big">Maecenas dolor nisi feugiat quis metus</span>
                    </div>
                    <div class="info">
                        <div class="date">
                            <hr>
                            <h5 class="label">Date</h5>
                            <h5>December 7,2015</h5>
                        </div>
                        <div class="client">
                            <hr>
                            <h5 class="label">Client</h5>
                            <h5>Muffin Group</h5>
                        </div>

                        <div class="website">
                            <hr>
                            <h5 class="label">Website</h5>
                            <h5><i class="fa fa-share"style="margin-right:5px"></i>View Website</h5>
                        </div>
                    </div>
                </div>
                


        </div>
        <!--endbody-->



    </div>
</body>
</html>
