   <?php
    //header top part variables _start_
    $address = get_theme_mod('top_header_address', __('The queens walk, TSV 3456', 'aidzone'));
    $address_url = get_theme_mod('top_header_address_url', __('#', 'aidzone'));
    $email = get_theme_mod('top_header_email', __('example@email.com', 'aidzone'));
    // header top part variables _end_ 

    ?>
   <header class="tp-header-height">
       <!-- header area start -->
       <div class="tp-header-area tp-header-style-2 tp-header-style-3">
           <div class="tp-header-wrapp">
               <!-- header top part _start_ -->
               <div class="tp-header-top-area black-bg d-none d-md-block">
                   <div class="container">
                       <div class="tp-header-top-wrapp">
                           <div class="row align-items-center">
                               <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6">
                                   <div class="tp-header-info d-flex align-items-center">
                                       <div class="tp-header-info-social">

                                           <?php if (get_theme_mod('facebook_enable') && get_theme_mod('facebook_url')) : ?>
                                               <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank">
                                                   <i class="fa-brands fa-facebook"></i>
                                               </a>
                                           <?php endif; ?>

                                           <?php if (get_theme_mod('instagram_enable') && get_theme_mod('instagram_url')) : ?>
                                               <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" target="_blank">
                                                   <i class="fa-brands fa-instagram"></i>
                                               </a>
                                           <?php endif; ?>

                                           <?php if (get_theme_mod('twitter_enable') && get_theme_mod('twitter_url')) : ?>
                                               <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank">
                                                   <i class="fa-brands fa-twitter"></i>
                                               </a>
                                           <?php endif; ?>

                                           <?php if (get_theme_mod('pinterest_enable') && get_theme_mod('pinterest_url')) : ?>
                                               <a href="<?php echo esc_url(get_theme_mod('pinterest_url')); ?>" target="_blank">
                                                   <i class="fa-brands fa-pinterest"></i>
                                               </a>
                                           <?php endif; ?>

                                       </div>
                                   </div>
                               </div>
                               <div class="col-xl-6 col-lg-8 col-md-8 d-none d-md-block">
                                   <div class="tp-header-info tp-header-info-bg d-flex align-items-center justify-content-end">
                                       <?php if (!empty($address)) : ?>
                                           <h3 class="tp-header-info-text tp-header-info-center">
                                               <a target="_blank" href="<?php echo esc_url($address_url); ?>">
                                                   <i class="fa-light fa-location-dot"></i>
                                                   <?php echo esc_html($address); ?>
                                               </a>
                                           </h3>
                                       <?php endif; ?>
                                       <h3 class="tp-header-info-text">
                                           <?php if (!empty($email)) : ?>
                                               <a href="mailto:<?php echo $email; ?>">
                                                   <i class="fa-light fa-envelope"></i> <?php echo $email; ?>
                                               </a>
                                           <?php endif; ?>
                                       </h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- header top part _end_ -->
               <div class="tp-header-bottom-area white-bg">
                   <div id="header-sticky" class="tp-header-bottom-area header-3">
                       <div class="container">
                           <div class="row align-items-center">
                               <div class="col-xl-2 col-lg-6 col-md-5 col-sm-6 col-6">
                                   <div class="tp-main-logo">
                                       <a href="index.html">
                                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="">
                                       </a>
                                   </div>
                               </div>
                               <div class="col-xl-7 d-none d-xl-block">
                                   <div class="tp-main-menu d-flex justify-content-end">
                                       <nav class="tp-main-menu-content tp-mobile-menu-active">
                                           <ul>
                                               <li class="has-dropdown"><a href="index.html">Home</a></li>
                                               <li class="has-dropdown"><a href="index.html">Pages</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="about.html">About Us</a></li>
                                                       <li><a href="team.html">Team</a></li>
                                                       <li><a href="team-details.html">Team Details</a></li>
                                                       <li><a href="portfolio.html">Portfolio</a></li>
                                                       <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                       <li><a href="error.html">Error</a></li>
                                                   </ul>
                                               </li>
                                               <li class="has-dropdown"><a href="index.html">Service</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="service.html">Service</a></li>
                                                       <li><a href="service-details.html">Service Details</a></li>
                                                   </ul>
                                               </li>
                                               <li class="has-dropdown"><a href="index.html">Shop</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="shop.html">Shop</a></li>
                                                       <li><a href="shop-details.html">Shop Details</a></li>
                                                       <li><a href="cart.html">Cart</a></li>
                                                       <li><a href="checkout.html">Checkout</a></li>
                                                   </ul>
                                               </li>
                                               <li class="has-dropdown"><a href="blog-sidebar.html">Blog</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                       <li><a href="blog-details.html">Blog Details</a></li>
                                                   </ul>
                                               </li>
                                               <li><a href="contact.html">Contact</a></li>
                                           </ul>
                                       </nav>
                                   </div>
                               </div>
                               <div class="col-xl-3 col-lg-6 col-md-7 col-sm-6 col-6">
                                   <div class="tp-header-bottom-right d-flex align-items-center justify-content-end">
                                       <div class="tp-header-bottom-icon d-none d-xl-block">
                                           <ul>
                                               <li>
                                                   <div class="tp-header-icon">
                                                       <button class="search-open-btn">
                                                           <span>
                                                               <i class="flaticon-search"></i>
                                                           </span>
                                                       </button>
                                                   </div>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="tp-header-bottom-action d-flex align-items-center">
                                           <div class="tp-header-bottom-btn">
                                               <a href="contact.html" class="tp-theme-btn btn-black">EXPLORE MORE</a>
                                           </div>
                                       </div>
                                       <div class="tp-main-menu-bars d-block d-xl-none">
                                           <button class="tp-offcanvas-toogle">
                                               <i class="far fa-bars"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- header area end -->
   </header>