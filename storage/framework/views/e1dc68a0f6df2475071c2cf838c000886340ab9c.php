
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="<?php echo e(URL::asset('img/apple-touch-icon.png')); ?>" type="images/x-icon" rel="shortcut icon">
     <!-- All css files are included here. -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/core.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/shortcode/shortcodes.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/responsive.css')); ?>">
    <!-- customizer style css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style-customizer.css')); ?>">
    <link href="#" data-style="styles" rel="stylesheet">    
    <!-- Modernizr JS -->
    <script src="<?php echo e(URL::asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    <!--Preloader start-->
    <div id="fakeLoader"></div>
    <!--Preloader end-->
   <!--Header section start-->
   <div class="wrapper white_bg">
        <header class="header">
            <?php echo $__env->yieldContent('premenu'); ?>
            <?php echo $__env->make('menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="haven-call">
                                <p>+254 7XX XXX XXX</p>
                            </div>
                            <div class="add-property">
                                <a href="add-property.php">ADD PROPERTY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->
        <?php echo $__env->yieldContent('slider'); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <!--Footer-->
        <!--Brand section start-->
        <div class="brand-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-list">
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/1.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/2.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/3.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/4.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/5.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/1.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/2.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/3.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/4.png')); ?>" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="<?php echo e(URL::asset('img/brand/5.png')); ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand section end-->
        <footer class="footer wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map-area">
                                <div id="contact-map" class="map-area">
                                    <div id="googleMap" style="width:100%;height:365px;"></div>
                                </div>
                                <!--Footer desc start-->
                                <div class="footer-desc">
                                    <div class="singe-footer-newsletter">
                                        <div class="footer-logo">
                                            <div class="f-logo">
                                                <a href="#"><img src="http://via.placeholder.com/125x112/222222" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="newsletter">
                                            <p>Sidai Naivasha explain to you how all this istaolt cing pleasure and praising ain wasnad  I will give you a complet</p>
                                            <!--<div class="newsletter-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Email for Newsletter">
                                                     <button type="submit"><i class="fa fa-paper-plane" ></i></button>
                                                </form>
                                            </div>-->
                                            <div class="newsletter-form">
                                                <div id="mc_embed_signup">
                                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                        <div id="mc_embed_signup_scroll">
                                                        <input type="email"  class="email" id="mce-EMAIL" placeholder="email address" required>
                                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                            <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                                        </div>
                                                        <div class="clear">
                                                        <button type="submit" id="mc-embedded-subscribe" class="button"><i class="fa fa-paper-plane" ></i></button>

                                                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="single-footer-contact">
                                        <div class="contact-head">
                                            <h2>CONTACT US</h2>
                                            <p>Sidai Naivasha  the best theme for elit, sed <br>do eiusmod tempor dolor sit </p>
                                        </div>
                                        <div class="f-contact-details">
                                            <div class="single-contact-list">
                                                <div class="contact-icon">
                                                    <img src="<?php echo e(URL::asset('img/icon/c-1.png')); ?>" alt="">
                                                </div>
                                                <div class="contact-text">
                                                    <p>26, 1st AVE, Location</p>
                                                    <p>25, X St, Location</p>
                                                </div>
                                            </div>
                                            <div class="single-contact-list">
                                                <div class="contact-icon">
                                                    <img src="<?php echo e(URL::asset('img/icon/c-2.png')); ?>" alt="">
                                                </div>
                                                <div class="contact-text">
                                                    <p>Telephone : +254 72X XXX XXX</p>
                                                    <p>Telephone : +254 73X XXX XXX</p>
                                                </div>
                                            </div>
                                            <div class="single-contact-list">
                                                <div class="contact-icon">
                                                    <img src="<?php echo e(URL::asset('img/icon/c-3.png')); ?>" alt="">
                                                </div>
                                                <div class="contact-text">
                                                    <p>Email : info@sidainaivasha.com</p>
                                                    <p>Web : www.sidainaivasha.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer desc end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom start-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="blog.php">BLog </a></li>
                                    <li><a href="contact.php">Contact </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="copyright">
                                <p>Copyright <i class="fa fa-copyright"></i> 2017 <a target="_blank" href="#">Sidai Naivasha</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->
         </footer>
    <!-- Placed js at the end of the document so the pages load faster -->
    </div>
        <!--=================================
     style-customizer start  -->

    <div class="style-customizer closed">

      <div class="buy-button">
            <a href="#" class="customizer-logo"><img src="http://via.placeholder.com/108x108/0000ff" alt="Theme Logo"></a>
            <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>
            <div>
                <h4 style="font-size: 16px">By Clint A. Andrew<br>
                0736 348020</h4>
            </div>
        </div>
      <div class="clearfix content-chooser">
        <h3>Layout Options</h3>
        <p>Which layout option you want to use?</p>
        <ul class="layoutstyle clearfix">
          <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
          <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
        </ul>
        <h3>Color Schemes</h3>
        <p>Which theme color you want to use? Select from here.</p>
        <ul class="styleChange clearfix">
          <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
          <li class="color-1" title="color-1" data-style="color-1"></li>
          <li class="color-2" title="color-2" data-style="color-2"></li>
          <li class="color-3" title="color-3" data-style="color-3"></li>
          <li class="color-4" title="color-4" data-style="color-4"></li>
          <li class="color-5" title="color-5" data-style="color-5"></li>
          <li class="color-6" title="color-6" data-style="color-6"></li>
          <li class="color-7" title="color-7" data-style="color-7"></li>
          <li class="color-8" title="color-8" data-style="color-8"></li>
          <li class="color-9" title="color-9" data-style="color-9"></li>
          <li class="color-10" title="color-10" data-style="color-10"></li>
          <li class="color-11" title="color-11" data-style="color-11"></li>
        </ul>
        
        <h3>Background Patterns</h3>
        <p>Which background pattern you want to use?</p>
        <ul class="patternChange clearfix">
          <li class="pattern-0" data-style="pattern-0" title="white background"></li>
          <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
          <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
          <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
          <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
          <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
          <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
          <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
        </ul>
        <h3>Background img</h3>
        <p>Which background image you want to use?</p>
        <ul class="patternChange main-bg-change clearfix">
          <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-1.jpg')); ?>" alt=""></li>
          <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-2.jpg')); ?>" alt=""></li>
          <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-3.jpg')); ?>" alt=""></li>
          <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-4.jpg')); ?>" alt=""></li>
          <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-5.jpg')); ?>" alt=""></li>
          <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-6.jpg')); ?>" alt=""></li>
          <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-7.jpg')); ?>" alt=""></li>
          <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-8.jpg')); ?>" alt=""></li>
          <li class="main-bg-9" data-style="main-bg-9" title="Background 9"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-9.jpg')); ?>" alt=""></li>
          <li class="main-bg-10" data-style="main-bg-10" title="Background 10"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-10.jpg')); ?>" alt=""></li>
          <li class="main-bg-11" data-style="main-bg-11" title="Background 11"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-11.jpg')); ?>" alt=""></li>
          <li class="main-bg-12" data-style="main-bg-12" title="Background 12"> <img src="<?php echo e(URL::asset('img/customizer/bodybg/bg-12.jpg')); ?>" alt=""></li>
        </ul>
        <ul class="resetAll">
          <li><a class="button button-border button-reset" href="#">Reset All</a></li>
        </ul>
      </div>
    </div>

    <!-- style-customizer End -->
    
    
    
    <!-- Map js code here -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
    <script src="<?php echo e(URL::asset('js/map.js')); ?>"></script>

    <!-- All jquery file included here -->
    <script src="<?php echo e(URL::asset('js/vendor/jquery-1.12.0.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jquery.nivo.slider.pack.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/ajax-mail.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/jquery.magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/style-customizer.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/plugins.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/main.js')); ?>"></script>

</body>

</html>
