<!DOCTYPE html>

<html>

    <head>
        <title>Đồ án</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/574.less', 'css/574.css');
        ?>
        <link href="css/574.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.roundabout.min.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>
        <script src="js/npm.js" type="text/javascript"></script>
    </head>

    <body> 
        <div class="type-574">
            <section class="container benefits">
                <div class="row">
                    <div class="col-xs-12 col-md-7">	
                        <h2 class="section-title">Appic<span class="text-highlight">benefits</span></h2>
                        <ul class="list-arrow list-arrow--hover-efect">
                            <li class="list__item">
                                <i class="icon-circle icon-circle--thin fa fa-arrow-right"></i>
                                <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Nunc sit amet orci sed lorem blandit lobortis quis sed dui. Quisque eget est sem, vel semper purus. Nullam sed lacus eu justo sollicitudin faucibus. Duis gravida semper vehicula.
                            </li>
                            <li class="list__item">
                                <i class="icon-circle icon-circle--thin fa fa-arrow-right"></i>
                                <strong>Vivamus tristique blandit dapibus.</strong> Cras at erat nisi. Cras mi orci, aliquet quis tempor et, bibendum a odio. Vivamus eu felis at felis porta pharetra. Praesent mattis enim purus.
                            </li>
                            <li class="list__item">
                                <i class="icon-circle icon-circle--thin fa fa-arrow-right"></i>
                                <strong>Cras interdum, urna nec convallis blandit, nibh libero pharetra ante, in iaculis nisl nunc eget ipsum.</strong> Duis non consequat elit. Aliquam fringilla porttitor sem, ut convallis lorem egestas vel. Aliquam quis purus sapien. Ut commodo porta orci, a aliquam mi semper luctus.
                            </li>
                            <li class="list__item">
                                <i class="icon-circle icon-circle--thin fa fa-arrow-right"></i>
                                <strong>Fusce aliquet euismod luctus.</strong> Aliquam scelerisque tincidunt risus nec pellentesque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sed tristique massa. Aenean iaculis diam nec ligula ullamcorper eu tempus dolor ullamcorper.
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-8 col-md-3 col-xs-offset-2 col-md-offset-1 roundabout-wrapper">
                        <ul class="roundabout roundabout-holder" style="padding: 0px; position: relative;">
                            <li class="roundabout-slide roundabout-moveable-item roundabout-in-focus" style="position: absolute; left: 0px; top: -14px; width: 268px; height: 510px; opacity: 1; z-index: 280; font-size: 14px;">
                                <img src="images/iphone-blue.png" alt="">
                            </li>
                            <li class="roundabout-slide roundabout-moveable-item" style="position: absolute; left: 155px; top: 99px; width: 167.5px; height: 318.75px; opacity: 1; z-index: 145; font-size: 8.8px;">
                                <img src="images/iphone-dark.png" alt="">
                            </li>
                            <li class="roundabout-slide roundabout-moveable-item" style="position: absolute; left: -55px; top: 99px; width: 167.5px; height: 318.75px; opacity: 1; z-index: 145; font-size: 8.8px;">
                                <img src="images/iphone-pink.png" alt="">
                            </li>
                        </ul>
                        <div class="roundabout-controls">
                            <a class="prev" href="#"></a>
                            <a class="next" href="#"></a>
                        </div>
                    </div>
                    <script>
                        var roundabout = new Roundabout('.roundabout', {
                            tilt: 0.4,
                            minScale: 0.5,
                            minOpacity: 1,
                            duration: 400,
                            easing: 'easeOutQuad',
                            enableDrag: true,
                            dropEasing: 'easeOutBack',
                            dragFactor: 2,
                            responsive: true
                        });


                    </script>
            </section>






        </div>

    </body>


</html>