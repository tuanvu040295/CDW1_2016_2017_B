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
        $less->compileFile('less/type-a-20.less', 'css/type-a-20.css');
        ?>
        <link href="css/type-a-20.css" rel="stylesheet" type="text/css" />


        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-a-20">
            <div id="user1" class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="moduletable " id="mod206" data-id="206">
                            <div class="bghelper">

                                <h4 class="moduletitle ">VM - Shopping cart</h4>
                                <div class="modulecontent">

                                    <!-- Virtuemart 2 Ajax Card -->
                                    <div class="vmCartModule " id="vmCartModule">
                                        <div id="hiddencontainer" style=" display: none; ">
                                            <div class="vmccontainer">
                                                <div class="prices" style="float: right;"></div>
                                                <div class="product_row">
                                                    <span class="quantity"></span>&nbsp;x&nbsp;<span class="product_name"></span>
                                                </div>

                                                <div class="product_attributes"></div>
                                            </div>
                                        </div>
                                        <div class="vm_cart_products">
                                            <div class="vmccontainer">


                                            </div>
                                        </div>
                                        <div class="carttotal fixclear">
                                            <div class="total" style="float: right;">
                                            </div>
                                            <div class="total_products">Cart empty</div>
                                            <div class="show_cart">
                                            </div>
                                        </div>
                                        <noscript>
                                        Please wait</noscript>
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