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
        <script src="js/swiper.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-client-says-p-36">
            <section class="container client-says">
                <div class="row"> 
                    <div class="col-sm-12">
                        <div class="divider-circle divider-circle--light visible-xs"></div>
                        <h2 class="section-title">Recently
                            <span class="text-highlight">
                                Client says
                            </span>
                        </h2>
                        <!-- Qoutation slider -->
                        <div class="swiper-controls qoutation-slider-controls">
                            <a class="prev-arrow" href="#"></a>
                            <a class="next-arrow" href="#"></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="swiper-container qoutation-slider qoutation-slider--higher">
                            <div class="swiper-wrapper" style="width: 8190px; /*transform: translate3d(-7020px, 0px, 0px);*/ transition-duration: 0.3s; height: 173px;">


                                <!-- Client saying -->
                                <div class="swiper-slide" style="width: 1170px; /*height: 173px;*/"> 
                                    <div class="client-says__item">
                                        <div class="author__photo triangled-box">
                                            <img src="images/user-photo-4.jpg" alt="">	
                                            <div class="author__name">John Doe</div>
                                        </div>
                                        <p class="author__message">Fusce aliquet euismod luctus. Aliquam scelerisque tincidunt risus nec pellentesque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sed tristique massa. Aenean iaculis diam nec ligula ullamcorper eu tempus dolor ullamcorper. Morbi in nisi tincidunt neque gravida facilisis.  Pellentesque mattis nisl eget neque scelerisque adipiscing. Vestibulum euismod commodo odio sit amet congue.</p>
                                    </div>
                                </div>
                                <!-- End Client saying -->

                                <!-- Client saying -->
                                <div class="swiper-slide" style="width: 1170px; /*height: 173px;*/"> 
                                    <div class="client-says__item">
                                        <div class="author__photo triangled-box">
                                            <img src="images/user-photo-9.jpg" alt="">	
                                            <div class="author__name">Clark Kent</div>
                                        </div>
                                        <p class="author__message">Ut id tellus id sapien facilisis convallis sed a turpis. Maecenas nec nisi vel risus consectetur consectetur. Suspendisse a neque felis, a molestie quam. Vestibulum consequat ultrices ullamcorper. Vestibulum elementum semper libero a varius. Integer tristique fringilla mauris vel sollicitudin. Phasellus consequat ipsum sed purus tempus tincidunt. Aliquam rhoncus iaculis porta. Aliquam pharetra nisi ut neque sollicitudin rhoncus.</p>
                                    </div>
                                </div>
                                <!-- End Client saying -->

                                <!-- Client saying -->
                                <div class="swiper-slide" style="width: 1170px; /*height: 173px;*/"> 
                                    <div class="client-says__item">
                                        <div class="author__photo triangled-box">
                                            <img src="images/user-photo-6.jpg" alt="">	
                                            <div class="author__name">Barbara Lee</div>
                                        </div>
                                        <p class="author__message">Pellentesque suscipit augue eu turpis suscipit faucibus faucibus id lacus. Fusce cursus aliquet vulputate. Aliquam erat volutpat. Nam nec tincidunt nibh. Nullam urna leo, tincidunt eget sodales id, volutpat quis dolor. Etiam ac ipsum non mauris fermentum semper. Vivamus faucibus risus orci. Ut ultrices, quam nec dapibus viverra, erat est fermentum urna, eget ultrices odio neque at odio. Sed pulvinar interdum libero nec vulputate.</p>
                                    </div>
                                </div>
                                <!-- End Client saying -->

                                <!-- Client saying -->
                                <div class="swiper-slide" style="width: 1170px; /*height: 173px;*/"> 
                                    <div class="client-says__item">
                                        <div class="author__photo triangled-box">
                                            <img src="images/user-photo-5.jpg" alt="">	
                                            <div class="author__name">Emely White</div>
                                        </div>
                                        <p class="author__message">Nunc id ante id lorem accumsan ultrices sed vel nisl. Etiam et massa eu diam facilisis tincidunt ut ut urna. Cras vulputate suscipit sem non dictum. Curabitur pretium nisi ac neque congue commodo scelerisque neque iaculis. Praesent ornare quam eget justo rhoncus vitae hendrerit est vehicula. Nunc lectus enim, condimentum vitae varius eu, iaculis ac nisl. Sed hendrerit nisi in velit aliquet eget luctus diam lacinia.</p>
                                    </div>
                                </div>
                                <!-- End Client saying -->

                                <!-- Client saying -->
                                <div class="swiper-slide" style="width: 1170px; /*height: 173px;*/"> 
                                    <div class="client-says__item">
                                        <div class="author__photo triangled-box">
                                            <img src="images/user-photo-8.jpg" alt="">	
                                            <div class="author__name">Santsa Sky</div>
                                        </div>
                                        <p class="author__message">Cras vel ligula justo, id condimentum libero. Aliquam erat volutpat. Nunc at erat eget urna semper semper sed sit amet tortor. Suspendisse urna nulla, ullamcorper non congue at, condimentum eu est. Nullam mattis erat ut enim bibendum sed gravida risus cursus. Etiam imperdiet sollicitudin ante, non rhoncus nunc pellentesque ut. Etiam velit lorem, iaculis quis malesuada congue, cursus at massa. Duis ut mauris a nunc tincidunt egestas.</p>
                                    </div>
                                </div>
                                <!-- End Client saying -->


                            </div>
                        </div>
                        <script>
                            var swiper = new Swiper('.swiper-container', {
                                loop: true,
                                calculateHeight: true,
                                mode: 'horizontal',
                                nextButton: '.next-arrow',
                                prevButton: '.prev-arrow'
                            });
                        </script>

                    </div>
            </section>

        </div>
    </body>

</html>