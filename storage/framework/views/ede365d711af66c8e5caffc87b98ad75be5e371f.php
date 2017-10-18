<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('page-title','Login'); ?>
<?php $__env->startSection('breadcrumb','Login'); ?>
<?php $__env->startSection('content'); ?>
		<!--Register page inner start-->
        <div class="register-page-inner ptb-100 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <div class="register-page-form">
                            <div class="account-title">
                                <h5>Login</h5>
                            </div>
                            <form action="#">
                                <div class="username">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="agree-text">
                                    <p>
                                        <label>
                                            <input type="checkbox"> <span>Remember me</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="lost-password">
                                    <p><a href="#">Lost your password?</a></p>
                                </div>
                                <div class="login">
                                    <button type="button">Sign in</button>
                                </div>
                            </form>
                            <div class="login-with-another">
                                <a class="facebook" href="#"><i class="icofont icofont-social-facebook"></i> Login with Facebook</a>
                                <a class="linkedin" href="#"><i class="icofont icofont-brand-linkedin"></i> Login with Linkedin</a>
                                <a class="google" href="#"><i class="icofont icofont-social-google-plus"></i> Login with Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Register page inner end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>