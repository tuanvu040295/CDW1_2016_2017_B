<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
        <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
        <script src="js/video.js" type="text/javascript"></script>  
    </head>

    <body>
        <div class="type-3">
            <div class='container'>
                <div class='row'>
            <section class="content-section video-section">
            
                <div class="pattern-overlay">
                    
                <a id="bgndVideo" class="player" data-property="
                   {videoURL:'https://www.youtube.com/watch?v=WiCiqH5D1YM',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">
                    
                </a>
                    
                <div class="container">
                <div class="row">
                <div class="col-lg-12">
                
                <h1>Scribe Make it So Easy</h1> 

                                <div class="sc-feature-box text-center">
                                    <a href="">
                                        <div class="hi-icon-wrap hi-icon-effect-1">
                                            <span class="hi-icon sc-icon fa fa-heart-o  slideExpandUp"></span></div>
                                    </a>
                                </div>

                <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg outline">Get it Now</button>
                </div>
                </div>
                </div>
                </div>
                </div>

            
            
            
            </section>
                
                
                
                
            </div>
            </div>
            </div>

    </body>
</html>