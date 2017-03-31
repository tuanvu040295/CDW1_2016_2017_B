<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/563.less', 'css/563.css');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/563.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-563">
            <!------------BEGIN CUSTOM----------->
            <div class="container-fluid">
                <div id="customizer">
                    <span class="corner">
                        <span class="cog">
                        </span>
                    </span>
                </div>
            </div>
            <!------------END CUSTOM----------->
        </div>
        <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
