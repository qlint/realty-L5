<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('slider'); ?>
    <?php echo $__env->make('slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



		<!--Feature property section start-->
        <div class="property-area fadeInUp wow ptb-130" data-wow-delay="0.2s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-property-title">
                            <h3>NEWLY ADDED PROPERTY</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="property-tab-menu">
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active"><a href="#sale" aria-controls="sale" data-toggle="tab">PROPERTY FOR SALE</a></li>
                                <li role="presentation"><a href="#rent" aria-controls="rent" data-toggle="tab">PROPERTY TO RENT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="sale">
                            <div class="property-list">
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/7.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 1</a></h6>
                                                <h4 class="price">$52,354</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/8.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 2</a></h6>
                                                <h4 class="price">$52,454</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.php">
                                                    <img src="<?php echo e(URL::asset('img/property/9.jpg')); ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.php">Concept 3</a></h6>
                                                    <h4 class="price">$42,354</h4>
                                                    <div class="property-location">
                                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                    </div>
                                                </div>
                                                <div class="property-desc-bottom">
                                                    <div class="property-bottom-list">
                                                        <ul>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                                <span>550 sqft</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                                <span>6</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                                <span>4</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                                <span>3</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/7.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 4</a></h6>
                                                <h4 class="price">$22,354</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/8.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 5</a></h6>
                                                <h4 class="price">$72,354</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/9.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 6</a></h6>
                                                <h4 class="price">$52,444</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="rent">
                            <div class="property-list">
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/7.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 7</a></h6>
                                                <h4 class="price">$12,354</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/8.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 8</a></h6>
                                                <h4 class="price">$92,354</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">   
                                    <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.php">
                                                    <img src="<?php echo e(URL::asset('img/property/9.jpg')); ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.php">Concept 9</a></h6>
                                                    <h4 class="price">$22,354</h4>
                                                    <div class="property-location">
                                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                    </div>
                                                </div>
                                                <div class="property-desc-bottom">
                                                    <div class="property-bottom-list">
                                                        <ul>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                                <span>550 sqft</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                                <span>6</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                                <span>4</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                                <span>3</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/7.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 10</a></h6>
                                                <h4 class="price">$52,334</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php">
                                                <img src="<?php echo e(URL::asset('img/property/8.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 11</a></h6>
                                                <h4 class="price">$52,351</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-property">
                                        <div class="property-img">
                                            <a href="single-properties.php"><img src="<?php echo e(URL::asset('img/property/9.jpg')); ?>" alt=""></a>
                                        </div>
                                        <div class="property-desc">
                                            <div class="property-desc-top">
                                                <h6><a href="single-properties.php">Concept 12</a></h6>
                                                <h4 class="price">$62,354</h4>
                                                <div class="property-location">
                                                    <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                                </div>
                                            </div>
                                            <div class="property-desc-bottom">
                                                <div class="property-bottom-list">
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                            <span>550 sqft</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                            <span>6</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                            <span>4</span>
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                            <span>3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature property section end-->

        <!--Welcome Haven section-->
        <div class="welcome-haven bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 fadeInLeft wow welcome-pd" data-wow-delay="0.2s">
                        <div class="welcome-title">
                            <h3 class="title-1">WELCOME TO <span>SIDAI NAIVASHA</span></h3>
                            <h4 class="title-2">WE ALWAYS PROVIDE PRORITY TO OUR CUSTOMER</h4>
                        </div>
                        <div class="welcome-content">
                            <p> <span>SIDAI NAIVASHA</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. eiusmod tempor dolor sit amet, conse ctetur adipiscing elit</p>
                        </div>
                        <div class="welcome-services">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="<?php echo e(URL::asset('img/welcome/icon-1.png')); ?>" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Low Cost</h6>
                                            <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="<?php echo e(URL::asset('img/welcome/icon-2.png')); ?>" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Good Marketing </h6>
                                            <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="<?php echo e(URL::asset('img/welcome/icon-3.png')); ?>" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Easy to Find</h6>
                                            <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="<?php echo e(URL::asset('img/welcome/icon-4.png')); ?>" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Reliable</h6>
                                            <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="welcome-haven-img fadeInRight wow" data-wow-delay="0.2s">
                            <img src="<?php echo e(URL::asset('img/welcome/1.jpg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Welcome Haven section end-->

        <!--Download apps section start-->
        <div class="download-apps overlay-blue">
            <div class="container">
                <div class="row">
                    <div class="download-app-inner">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="download-apps-desc wow fadeInDown" data-wow-delay="0.1s">
                                <div class="download-apps-title">
                                    <h3 class="title-1">DOWNLOAD OUR APPS</h3>
                                    <h3 class="title-2">AND GET NOTIFICATION FOR NEW PROPERTIES</h3>
                                </div>
                                <div class="download-apps-bottom">
                                    <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur apiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam</p>
                                    <a href="#">DOWNLOAD</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="download-apps-caption-img f-right wow fadeUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                <img src="<?php echo e(URL::asset('img/common/download-caption.png')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Download apps section end-->

        <!--Services section start-->
        <div class="services-section ptb-130 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>OUR SERVICES</h3>
                            <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-sm-12">
                        <div class="single-services wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <div class="single-services-img">
                                <img src="<?php echo e(URL::asset('img/service/1.png')); ?>" alt="">
                            </div>
                            <div class="single-services-desc">
                                <h5>Buy Property</h5>
                                <p>Sidai Naivasha the best theme for  elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-sm-12">
                        <div class="single-services wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.2s">
                            <div class="single-services-img">
                                <img src="<?php echo e(URL::asset('img/service/2.png')); ?>" alt="">
                            </div>
                            <div class="single-services-desc">
                                <h5>Sale Property</h5>
                                <p>Sidai Naivasha the best theme for  elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-sm-12">
                        <div class="single-services wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <div class="single-services-img">
                                <img src="<?php echo e(URL::asset('img/service/3.png')); ?>" alt="">
                            </div>
                            <div class="single-services-desc">
                                <h5>rent Property</h5>
                                <p>Sidai Naivasha the best theme for  elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Services section end-->

        <!--Feature property section-->
        <div class="feature-property ptb-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>FEATURED PROPERTY</h3>
                            <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property wow fadeInUp mb-40" data-wow-delay="0.2s" data-wow-duration="1s">
                            <span>FOR SALE</span>
                            <div class="property-img">
                                <a href="single-properties.php">
                                    <img src="<?php echo e(URL::asset('img/property/1.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6><a href="single-properties.php">Concept Name</a></h6>
                                    <h4 class="price">$48,354</h4>
                                    <div class="property-location">
                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                    </div>
                                </div>
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                <span>550 sqft</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property mb-40 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.1s">
                            <div class="property-img">
                                <a href="single-properties.php">
                                    <img src="<?php echo e(URL::asset('img/property/2.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6><a href="single-properties.php">Concept Name</a></h6>
                                    <h4 class="price">$52,354</h4>
                                    <div class="property-location">
                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                    </div>
                                </div>
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                <span>550 sqft</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property mb-40 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.2s">
                            <span class="bg-blue">FOR Rent</span>
                            <div class="property-img">
                                <a href="single-properties.php">
                                    <img src="<?php echo e(URL::asset('img/property/3.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6><a href="single-properties.php">Concept Name</a></h6>
                                    <h4 class="price">$52,354</h4>
                                    <div class="property-location">
                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                    </div>
                                </div>
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                <span>550 sqft</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                            <div class="property-img">
                                <a href="single-properties.php">
                                    <img src="<?php echo e(URL::asset('img/property/4.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6><a href="single-properties.php">Concept Name</a></h6>
                                    <h4 class="price">$52,354</h4>
                                    <div class="property-location">
                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                    </div>
                                </div>
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                <span>550 sqft</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.4s">
                            <span>FOR SALE</span>
                            <div class="property-img">
                                <a href="single-properties.php">
                                    <img src="<?php echo e(URL::asset('img/property/5.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6><a href="single-properties.php">Concept Name</a></h6>
                                    <h4 class="price">$32,344</h4>
                                    <div class="property-location">
                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt=""> Location</p>
                                    </div>
                                </div>
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                <span>550 sqft</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.5s">
                            <div class="property-img">
                                <a href="single-properties.php">
                                    <img src="<?php echo e(URL::asset('img/property/6.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6><a href="single-properties.php">Concept Name</a></h6>
                                    <h4 class="price">$65,354</h4>
                                    <div class="property-location">
                                        <p><img src="<?php echo e(URL::asset('img/property/icon-5.png')); ?>" alt="">Location</p>
                                    </div>
                                </div>
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-1.png')); ?>" alt="">
                                                <span>550 sqft</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-2.png')); ?>" alt="">
                                                <span>6</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-3.png')); ?>" alt="">
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo e(URL::asset('img/property/icon-4.png')); ?>" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature property section end-->

        <!--Awesome Feature section-->
        <div class="awesome-feature bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>AWESOME FEATURES</h3>
                            <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="awesome-feature-desc">
                            <div class="awesome-feature-img">
                                <div class="awesome-feature-img-border">
                                    <div class="awesome-feature-img-inner">
                                        <img src="<?php echo e(URL::asset('img/awesome/feature.jpg')); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="awesome-feature-list">
                                <div class="col-4 left">
                                    <div class="single-awesome-feature one mb-87 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Fully Furnished</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-tools-alt-2"></i>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature two mb-87 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Royal Touch Paint</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-paint-brush"></i>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature three wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.4s">
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Non Stop Security</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                        <div class="s-awesome-feature-icon">
                                            <i class="zmdi zmdi-bug"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 right">
                                    <div class="single-awesome-feature four mb-87 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-calculations"></i>
                                        </div>
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Latest Interior Design</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature five mb-87 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                        <div class="s-awesome-feature-icon">
                                            <i class="fa fa-leaf" ></i>
                                        </div>
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Living Inside a Nature</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature six wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.4s">
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-fix-tools"></i>
                                        </div>
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Luxurious Fittings</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Awesome Feature section end-->

        <!--Fun fact area start-->
        <div class="fun-fact overlay-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="singe-fun-fact  f-left">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        999
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Complete Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="singe-fun-fact middle">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="fa fa-key"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        999
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Property Sold</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="singe-fun-fact text-center middle-2">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="zmdi zmdi-mood"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        450
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="singe-fun-fact f-right">
                            <div class="fun-head">
                                <div class="fun-icon">
                                    <i class="fa fa-trophy"></i>
                                </div>
                                <div class="fun-count">
                                    <h3 class="counter">
                                        120
                                    </h3>
                                </div>
                            </div>
                            <div class="fun-text">
                                <p>Awards Win</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fun fact area end-->

        <!--Team area start-->
        <div class="team-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>HERE IS OUR AGENTS</h3>
                            <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-team wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="team-img">
                                <a href="agent-details.php">
                                    <img src="<?php echo e(URL::asset('img/team/1.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="team-desc">
                                <div class="team-member-title">
                                    <h6><a href="agent-details.php">Agent's Name</a></h6>
                                    <p>Real Estate Agent</p>
                                </div>
                                <div class="team-member-social">
                                    <a href="#"><i class="zmdi zmdi-phone-in-talk"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-team wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="team-img">
                                <a href="agent-details.php">
                                    <img src="<?php echo e(URL::asset('img/team/2.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="team-desc">
                                <div class="team-member-title">
                                    <h6>
                                        <a href="agent-details.php">Agent's Name</a>
                                    </h6>
                                    <p>Real Estate Agent</p>
                                </div>
                                <div class="team-member-social">
                                    <a href="#"><i class="zmdi zmdi-phone-in-talk"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-team wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
                            <div class="team-img">
                                <a href="agent-details.php">
                                    <img src="<?php echo e(URL::asset('img/team/3.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="team-desc">
                                <div class="team-member-title">
                                    <h6>
                                        <a href="agent-details.php">Agent's Name</a>
                                    </h6>
                                    <p>Real Estate Agent</p>
                                </div>
                                <div class="team-member-social">
                                    <a href="#"><i class="zmdi zmdi-phone-in-talk"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="single-team wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="team-img">
                                <a href="agent-details.php">
                                    <img src="<?php echo e(URL::asset('img/team/4.jpg')); ?>" alt="">
                                </a>
                            </div>
                            <div class="team-desc">
                                <div class="team-member-title">
                                    <h6>
                                        <a href="agent-details.php">Agent's Name</a>
                                    </h6>
                                    <p>Real Estate Agent</p>
                                </div>
                                <div class="team-member-social">
                                    <a href="#"><i class="zmdi zmdi-phone-in-talk"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Team area end-->

          <!--Latest blog start-->
        <div class="latest-blog ptb-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>LATEST FROM THE BLOG</h3>
                            <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="blog-thubmnail">
                                <a href="article.php">
                                    <img src="<?php echo e(URL::asset('img/blog/1.jpg')); ?>" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                        20
                                    </span>
                                    <span class="post-month">
                                        March
                                    </span>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.php">New Duplex Villa design with Latest Altra Concept</a></h6>
                                <p class="post-content">Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt </p>
                                <div class="bolg-continue">
                                    <a href="article.php">Continure Reading  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.2s">
                            <div class="blog-thubmnail">
                                <a href="article.php">
                                    <img src="<?php echo e(URL::asset('img/blog/2.jpg')); ?>" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                        20
                                    </span>
                                    <span class="post-month">
                                        March
                                    </span>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.php">New Duplex Villa design with Latest Altra Concept</a></h6>
                                <p class="post-content">Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt </p>
                                <div class="bolg-continue">
                                    <a href="article.php">Continure Reading  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                            <div class="blog-thubmnail">
                                <a href="article.php">
                                    <img src="<?php echo e(URL::asset('img/blog/3.jpg')); ?>" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                        20
                                    </span>
                                    <span class="post-month">
                                        March
                                    </span>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.php">New Duplex Villa design with Latest Altra Concept</a></h6>
                                <p class="post-content">Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt </p>
                                <div class="bolg-continue">
                                    <a href="article.php">Continure Reading  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Latest blog end-->

        <!--Happy client section start-->
        <div class="happy-client wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>HERE IS THE REVIEW OF OUR HAPPY CLIENTS</h3>
                            <p>Sidai Naivasha  the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="happy-client-list">
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-reveiw">
                                <div class="review-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="review-desc">
                                    <p> <span>SIDAI NAIVASHA</span> is the best theme for elit sed do od tempor dolor sit amet conse tetur adipiscingit</p>
                                </div>
                                <div class="happy-client-name">
                                    <h6>Client Name, <span>Occupation</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Happy client section end-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>