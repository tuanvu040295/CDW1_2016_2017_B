<!DOCTYPE html>

<html>

    <head>
        <title>Đồ án web 2</title>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <?php
                if (!class_exists('lessc')) {
                    include ('./libs/lessc.inc.php');
                }
                $less = new lessc;
                $less->compileFile('less/type-p-36.less', 'css/type-p-36.css');
                ?>
                <link href="css/type-p-36.css" rel="stylesheet" type="text/css"/>
                <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>

                </head>

                <body>
                    <div class="type-back-top-p-36">
                        <div id="back-to-top" style="display: none">
                            <a href="#"></a>
                        </div>

                    </div>
                    <script>
                        $(document).ready(function () {
                            $(window).scroll(function () {
                                if ($(this).scrollTop() > 50) {
                                    $('#back-to-top').fadeIn();
                                } else {
                                    $('#back-to-top').fadeOut();
                                }
                            });
                            // scroll body to 0px on click
                            $('#back-to-top').click(function () {
                                $('#back-to-top').tooltip('hide');
                                $('body,html').animate({
                                    scrollTop: 0
                                }, 800);
                                return false;
                            });

                            $('#back-to-top').tooltip('show');

                        });
                    </script>
                </body>

                </html>