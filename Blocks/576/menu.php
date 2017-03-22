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
        $less->compileFile('less/type-p-27.less', 'css/type-p-27.css');
        ?>
        <link href="css/type-p-27.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body> 
        <div class="type-menu-p-27"> 
                <!-- Begin main navigation -->
                <div class="main-nav">
                  <div class="divider-circle"></div>
                  <nav class="container">
                      <!-- Logo -->
                      <div class="logo pull-left">
                          <a href="index.html">
                              <h1 class="logo-text">A<span class="text-highlight">pp</span>ic</h1>
                          </a>
                      </div>
                      <!-- End Logo -->
                      <!-- Main navigation-->
                      <div class="pull-right" id="navigation-box">
                          <a id="navigation-toggle" href="#">
                              <span class="menu-icon"></span>
                          </a>
                          <ul id="navigation">
                              <li class="active-item" >
                                  <span class="sub-nav-toggle plus"></span>
                                  <a href="#" >Home</a>
                                  
                              </li>
                              <li><a href="#">About</a></li>
                              <li>
	                            <span class="sub-nav-toggle plus"></span>
                                    <a href="#" >Pages</a>
	                           
	                        </li>
                                <li>
	                            <span class="sub-nav-toggle plus"></span>
	                            <a href="#">Services</a>
	                            
	                        </li>
                                <li>
	                        	<span class="sub-nav-toggle plus"></span>
	                            <a href="#">Blog</a>
	                            
	                        </li>
                                <li>
	                            <span class="sub-nav-toggle plus"></span>
                                    <a href="#">Gallery</a>
	                            
	                        </li>
                                <li>
	                            <span class="sub-nav-toggle plus"></span>
                                    <a href="#"style="">Shop</a>
	                            
	                        </li>
                                <li><a href="#">Contact</a></li>
                          </ul>
                      </div>
                  </nav>
                </div>
                <!-- End main navigation -->
           
       
            
        </div>
    </body>

</html>