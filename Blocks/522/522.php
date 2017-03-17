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
        $less->compileFile('less/522.less', 'css/522.css');
        ?>
        <link href="css/522.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="container">
            <div class="row">
                <!-- BEGIN SIDEBAR RIGHT -->
                <div class="col-md-4">
                    <div class="type-522">
                        <!-- TITLE CURRENCIES -->
                        <h4 class="moduletitle">VM - Currencies Selector</h4>
                        <!-- BEGIN CURRENCIES SELECTTOR-->
                        <div class="modulecontent">
                            <div class="vmcurrency">
                                <p>Lorem ipsum</p>
                                <form action="#" method="post">
                                    <div class="input-prepend input-append">
                                        <span class="add-on">€</span>
                                        <select id="virtuemart_currency_id" name="virtuemart_currency_id" class="input-medium">
                                            <option value="52">British pound £</option>
                                            <option value="26">Canadian dollar $</option>
                                            <option value="47" selected="selected">Euro €</option>
                                            <option value="144">United States dollar $</option>
                                        </select>
                                        <input class="btn" type="submit" name="submit" value="Change">
                                    </div>
                                </form>
                            </div>			
                        </div>
                        <!-- END CURRENCIES SELECTTOR-->
                    </div>
                    <!-- END SIDEBAR RIGHT -->
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>