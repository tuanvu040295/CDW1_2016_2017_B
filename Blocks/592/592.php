<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/592.less', 'css/592.css');
        ?>
        <link href="css/592.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-592">
            <div class="container">
                <!-- BEGIN CONTENT -->
                <div class="contact">
                    <div class="col-md-12">
                        <!-- BEGIN FORM CONTACT -->
                        <div class="col-md-6">
                            <h4 class="aq-block-title">Contact Us</h4>
                            <form>
                                <p>Your Name (required)<br>
                                    <span><input type="text" name="your-name" value="" size="40"></span> 
                                </p>
                                <p>Your Email (required)<br>
                                    <span><input type="email" name="your-email" value="" size="40"></span> 
                                </p>
                                <p>Subject<br>
                                    <span><input type="text" name="your-subject" value="" size="40"></span> 
                                </p>
                                <p>Your Message<br>
                                    <span><textarea name="your-message" cols="40" rows="10"></textarea></span> 
                                </p>
                                <p><input type="submit" value="Send"></p>
                            </form>
                        </div>
                        <!-- END FORM CONTACT -->
                        <!-- HAPPY USERS -->
                        <div class="sc_stats col-md-3">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <div>
                                <span class="highlight">364</span> 
                                <div class="milestone-details">
                                    <p>Happy Users</p>
                                </div>
                            </div>
                        </div>
                        <!-- SUPPORT -->
                        <div class="sc_stats col-md-3">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div>
                                <span class="highlight">365</span>
                                <div class="milestone-details">
                                    <p>Support Requests</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec id elit non mi porta gravida at eget metus. </p>
                        </div>
                        <div class="col-md-6">
                            <!-- MOBILE -->
                            <div class="sc-feature-box text-center col-md-6">
                                <a href="">
                                    <i class="hi-icon fa fa-mobile" aria-hidden="true"></i>
                                </a>
                                <h4>800-123-4321</h4>
                            </div>
                            <!-- MAIL -->
                            <div class="sc-feature-box text-center col-md-6">
                                <a href="">
                                    <i class="hi-icon fa fa-envelope-o" aria-hidden="true"></i>
                                </a>
                                <h4>scribe@email.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
            </div>
        </div>
    </body>
</html>