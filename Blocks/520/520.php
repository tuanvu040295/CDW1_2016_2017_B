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
        $less->compileFile('less/520.less', 'css/520.css');
        ?>
        <link href="css/520.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-520">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="moduletable ">
                            <h4 class="moduletitle ">VM - Search in Shop</h4>
                            <!--BEGIN Search Box -->
                            <form action="#" method="get">
                                <div class="search">
                                    <input name="keyword" maxlength="20" alt="Search" type="text" size="20" value="Search..." onblur="if (this.value == '')
                                                this.value = 'Search...';" onfocus="if (this.value == 'Search...')
                                                            this.value = '';"></div>
                                <input type="hidden" name="limitstart" value="0">
                                <input type="hidden" name="option" value="com_virtuemart">
                                <input type="hidden" name="view" value="category">
                            </form>
                            <!-- End Search Box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>