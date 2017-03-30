<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/561.less', 'css/561.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/561.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="type-561">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <!--SECTION TITLE-->
                                <header class="sectionTitle">
                                    <h4>FEATURES</h4>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <!--BEGIN TABS AND PILL-->
                            <div class="col-md-12">
                                <!--TITLE TABS AND PILL-->
                                <ul class="tabs"> 
                                    <li class="active col-xs-3 col-md-2" rel="tab1"> MIGHTY POWER</li>
                                    <li class="col-xs-4 col-md-3" rel="tab2"> CHALLENGING REQUESTS</li>
                                    <li class="col-xs-4 col-md-3" rel="tab3"> OVERPRICED PLEDGES</li>
                                </ul>
                                <div class="tab_container col-xs-12">
                                    <!--TAB 1-->
                                    <div id="tab1" class="tab_content"> 
                                        <strong>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam 
                                            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                        </strong>
                                        <p>
                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
                                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                        </p>
                                    </div>
                                    <!--TAB 2-->
                                    <div id="tab2" class="tab_content">
                                        <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        <p>
                                        <ul>
                                            <li>Nemo enim ipsam voluptatem</li>
                                            <li>Quia voluptas sit aspernatur aut odit aut fugit</li>
                                            <li>Sed quia consequuntur magni dolores eos</li>
                                            <li>Qui ratione voluptatem sequi nesciunt</li>
                                        </ul>
                                    </div>
                                    <!--TAB 3-->
                                    <div id="tab3" class="tab_content">
                                        <p>
                                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--END TABS AND PILL-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
