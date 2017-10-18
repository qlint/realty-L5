<?php $__env->startSection('title','Contact Us'); ?>
<?php $__env->startSection('page-title','Contact Us'); ?>
<?php $__env->startSection('breadcrumb','Contact Us'); ?>
<?php $__env->startSection('content'); ?>
		<!--Contact page start-->
        <div class="contact-page pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                <div class="contact-list-inner">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="<?php echo e(URL::asset('img/icon/c-4.png')); ?>" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>256, 1st AVE, Manchester</p>
                                                    <p>125 , Noth England</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="<?php echo e(URL::asset('img/icon/c-5.png')); ?>" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Telephone : +88 (012) 356 958 45</p>
                                                    <p>Telephone : +88 (012) 356 958 86</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="single-contact_list">
                                                <div class="single-contact-icon">
                                                    <img src="<?php echo e(URL::asset('img/icon/c-6.png')); ?>" alt="">
                                                </div>
                                                <div class="single-contact-desc">
                                                    <p>Email : info@sidainaivasha.com</p>
                                                    <p>Web : www.sidainaivasha.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-message">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                    <div class="contact-form-inner">
                                        <div class="contact-form-title">
                                            <h5>Leave a Message</h5>
                                        </div>
                                        <form id="contact-form" action="mail.php" method="post">
                                            <input name="name" type="text" placeholder="Your Name">
                                            <input  name="email" type="text" placeholder="Email here">

                                            <textarea name="message" placeholder="Write here"></textarea>
                                            <div class="form-submit">
                                                <button type="submit">Submit</button>
                                            </div>
                                            <p class="form-messege"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact page end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>