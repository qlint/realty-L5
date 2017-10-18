            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="logo">
                                <a href="<?php echo e(route('home')); ?>"><img src="http://via.placeholder.com/108x108/ffcc00" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-10 hidden-sm hidden-xs">
                            <div class="mgea-full-width">
                                <div class="header-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                            <li><a href="<?php echo e(route('about-us')); ?>">About</a></li>
                                            <li><a href="<?php echo e(route('blog')); ?>"> BLOG</a>
                                                <ul class="dropdown_menu">
                                                    <li><a href="<?php echo e(route('blog')); ?>">Blog pages</a></li>
                                                    <li><a href="<?php echo e(route('blog-sidebar')); ?>">Blog Sidebar</a></li>
                                                    <li><a href="<?php echo e(route('blog-right-sidebar')); ?>">Blog right Sidebar</a></li>
                                                    <li><a href="<?php echo e(route('article')); ?>">Blog details</a></li>
                                                    <li><a href="<?php echo e(route('article-left-sidebar')); ?>">Blog details left sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages</a>
                                                <ul class="dropdown_menu">
                                                    <li><a href="<?php echo e(route('about-us')); ?>">About us</a></li>
                                                    <li><a href="<?php echo e(route('contact')); ?>">contact us</a></li>
                                                    <li><a href="<?php echo e(route('error')); ?>">404</a></li>
                                                    <li><a href="<?php echo e(route('add-property')); ?>">Add property</a></li>
                                                    <li><a href="<?php echo e(route('login')); ?>">login</a></li>
                                                    <li><a href="<?php echo e(route('register')); ?>">register</a></li>
                                                    <li><a href="<?php echo e(route('my-account')); ?>">My account</a></li>
                                                    <li><a href="<?php echo e(route('services')); ?>">Services page</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="<?php echo e(route('properties')); ?>">PROPERTIES </a>
                                                <ul class="dropdown_menu">
                                                    <li><a href="<?php echo e(route('properties')); ?>">Properties page</a></li>
                                                    <li><a href="<?php echo e(route('single-properties')); ?>">Single Properties</a></li>
                                                    <li><a href="<?php echo e(route('properties-sidebar')); ?>">Properties sidebar</a></li>
                                                    <li><a href="<?php echo e(route('properties-right-sidebar')); ?>">Properties right sidebar</a></li>
                                                    <li><a href="<?php echo e(route('properties-list-sidebar')); ?>">Properties list sidebar</a></li>
                                                    <li><a href="<?php echo e(route('properties-list-right-sidebar')); ?>">Properties list right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo e(route('agent')); ?>">AGENT</a>
                                                <ul class="dropdown_menu">
                                                    <li><a href="<?php echo e(route('agent')); ?>">Agent page</a></li>
                                                    <li><a href="<?php echo e(route('agent-details')); ?>">Agent Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-parent"><a href="#">Elements</a>
                                                <ul class="mega_menu">
                                                    <li><a href="#" class="title">Column 1</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="#">Accordion</a></li>
                                                            <li><a href="#">Agent</a></li>
                                                            <li><a href="#">Alerts</a></li>
                                                            <li><a href="#">Audio</a></li>
                                                            <li><a href="#">Video</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="title">Column 2</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="#">Blog</a></li>
                                                            <li><a href="#">Cleint review</a></li>
                                                            <li><a href="#">Contact form</a></li>
                                                            <li><a href="#">Fun factor</a></li>
                                                            <li><a href="#">progress bar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="title">Column 3</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="#">Properties</a></li>
                                                            <li><a href="#">Map</a></li>
                                                            <li><a href="#">Map 2</a></li>
                                                            <li><a href="#">Services</a></li>
                                                            <li><a href="#">Tab</a></li>
                                                        </ul>  
                                                    </li>
                                                    <li><a href="#" class="title">Column 4</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="#">Sticky page</a></li>
                                                            <li><a href="#">Table</a></li>
                                                            <li><a href="#">typography</a></li>
                                                            <li><a href="#">single services</a></li>
                                                            <li><a href="#">single properties</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo e(route('contact')); ?>"> Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu start -->
                <div class="mobile-menu-area hidden-lg hidden-md">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('about-us')); ?>">About</a></li>
                                    <li><a href="<?php echo e(route('blog')); ?>"> BLOG</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('blog')); ?>">Blog pages</a></li>
                                            <li><a href="<?php echo e(route('blog-sidebar')); ?>">Blog Sidebar</a></li>
                                            <li><a href="<?php echo e(route('blog-right-sidebar')); ?>">Blog right Sidebar</a></li>
                                            <li><a href="<?php echo e(route('article')); ?>">Blog details</a></li>
                                            <li><a href="<?php echo e(route('article-left-sidebar')); ?>">Blog details left sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('about-us')); ?>">About us</a></li>
                                            <li><a href="<?php echo e(route('contact')); ?>">contact us</a></li>
                                            <li><a href="<?php echo e(route('error')); ?>">404</a></li>
                                            <li><a href="<?php echo e(route('add-property')); ?>">Add property</a></li>
                                            <li><a href="<?php echo e(route('login')); ?>">login</a></li>
                                            <li><a href="<?php echo e(route('register')); ?>">register</a></li>
                                            <li><a href="<?php echo e(route('my-account')); ?>">My account</a></li>
                                            <li><a href="<?php echo e(route('services')); ?>">Services page</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="<?php echo e(route('properties')); ?>">PROPERTIES </a>
                                        <ul >
                                            <li><a href="<?php echo e(route('properties')); ?>">Properties page</a></li>
                                            <li><a href="<?php echo e(route('single-properties')); ?>">Single Properties</a></li>
                                            <li><a href="<?php echo e(route('properties-sidebar')); ?>">Properties sidebar</a></li>
                                            <li><a href="<?php echo e(route('properties-right-sidebar')); ?>">Properties right sidebar</a></li>
                                            <li><a href="<?php echo e(route('properties-list-sidebar')); ?>">Properties list sidebar</a></li>
                                            <li><a href="<?php echo e(route('properties-list-right-sidebar')); ?>">Properties list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(route('agent')); ?>">AGENT</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('agent')); ?>">Agent page</a></li>
                                            <li><a href="<?php echo e(route('agent-details')); ?>">Agent Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Elements</a>
                                        <ul>
                                            <li><a href="#" class="title">Column 1</a>
                                                <ul>
                                                    <li><a href="#">Accordion</a></li>
                                                    <li><a href="#">Agent</a></li>
                                                    <li><a href="#">Alerts</a></li>
                                                    <li><a href="#">Audio</a></li>
                                                    <li><a href="#">Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="title">Column 2</a>
                                                <ul>
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Cleint review</a></li>
                                                    <li><a href="#">Contact form</a></li>
                                                    <li><a href="#">Fun factor</a></li>
                                                    <li><a href="#">progress bar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="title">Column 3</a>
                                                <ul>
                                                    <li><a href="#">Properties</a></li>
                                                    <li><a href="#">Map</a></li>
                                                    <li><a href="#">Map 2</a></li>
                                                    <li><a href="#">Services</a></li>
                                                    <li><a href="#">Tab</a></li>
                                                </ul>  
                                            </li>
                                            <li><a href="#" class="title">Column 4</a>
                                                <ul>
                                                    <li><a href="#">Sticky page</a></li>
                                                    <li><a href="#">Table</a></li>
                                                    <li><a href="#">typography</a></li>
                                                    <li><a href="#">single services</a></li>
                                                    <li><a href="#">single properties</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(route('contact')); ?>"> Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            <!-- Mobile menu end -->
            </div>
