
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
    <div class="wrapper white_bg">
        <!--Header section start-->
        <header class="header header-2">
            <?php echo $__env->make('premenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-property">
                                <a href="<?php echo e(route('add-property')); ?>">ADD PROPERTY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Search box inner start-->
            <div class="search-box-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-form">
                                <div class="search-form-inner">
                                    <form action="#">
                                        <input type="text" placeholder="Search..">
                                        <button type="submit"><i class="icofont icofont-search-alt-1"></i></button>
                                    </form>
                                </div>
                                <div class="search-close-btn">
                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Search box inner end-->
        </header>
        <!--Header section end-->

        <!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1><?php echo $__env->yieldContent('page-title'); ?></h1>
                            </div>
                            <div class="breadcrumbs-menu">
                                <ul>
                                    <li><a href="<?php echo e(route('home')); ?>">Home /</a></li>
                                    <li><?php echo $__env->yieldContent('breadcrumb'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <?php echo $__env->yieldContent('content'); ?>

        <!--Happy client section end-->
        <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>