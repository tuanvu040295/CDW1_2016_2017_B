<!DOCTYPE html>

<html>
    <head>
        <title>Đồ án</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/575.less', 'css/575.css');
        ?>
        <link href="css/575.css" rel="stylesheet" type="text/css"/>
    </head>

    <body> 
        <div class="type-575">
            <div class="home-title-wrapper">
                <div class="pattern-light-wrapper">
                    <div class="container">
                        <h2 class="page-title-main">Simple and perfect</h2>
                        <h3 class="page-title-secondary">better information, motivation and controll with APPIC</h3>
                    </div>
                    <div class="decorative-lines"></div>
                    <div class="container">
                        <div class="circle-info-buttons">
                            <div class="circle-info-wrapper">
                                <div class="circle-info">
                                    <div class="circle-info__front">
                                        <h4 class="circle-info__title">Fast</h4>
                                    </div>
                                    <div class="circle-info__back">
                                        <h4 class="circle-info__title">Fast</h4>
                                        <p class="circle-info__text hidden-xs">Nunc sit amet orci sed lorem blandit lobortis quis sed dui. Quisque eget est sem, vel semper purus.</p>
                                        <a href="#"><i class="icon-circle icon-circle--small fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="circle-info-wrapper">
                                <div class="circle-info">
                                    <div class="circle-info__front">
                                        <h4 class="circle-info__title">Easy</h4>
                                    </div>
                                    <div class="circle-info__back">
                                        <h4 class="circle-info__title">Easy</h4>
                                        <p class="circle-info__text hidden-xs">Nunc sit amet orci sed lorem blandit lobortis quis sed dui. Quisque eget est sem, vel semper purus.</p>  
                                        <a href="#"><i class="icon-circle icon-circle--small fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="circle-info-wrapper">
                                <div class="circle-info">
                                    <div class="circle-info__front">
                                        <h4 class="circle-info__title">Efficient</h4>
                                    </div>
                                    <div class="circle-info__back">
                                        <h4 class="circle-info__title">Efficient</h4>
                                        <p class="circle-info__text hidden-xs">Nunc sit amet orci sed lorem blandit lobortis quis sed dui. Quisque eget est sem, vel semper purus.</p>  
                                        <a href="#"><i class="icon-circle icon-circle--small fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn--highlight btn-wider" href="#">Buy Template</a>
                    <div class="divider-simple"></div>
                </div>
            </div>
        </div>
    </body>

</html>