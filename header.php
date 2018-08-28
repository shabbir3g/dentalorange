<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dentalorange
 */

 global $dentalorange;
 
 
?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="DentalPro | Dental Clinic, Dentist & Dental Care HTML5 Template" />
<meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
<meta name="author" content="ThemeMascot" />

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">




<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class('has-side-panel side-panel-right fullwidth-page'); ?>>
<div id="wrapper" class="clearfix">
  <!-- preloader 
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> -->
  
  <!-- Header 
  <header id="header" class="header">
    <div class="header-top bg-light sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget">
			
			<?php if(isset($dentalorange['hdleft'])):  ?>
              <i class="fa fa-clock-o text-theme-colored"></i> <?php echo $dentalorange['hdleft']; ?> 
			 <?php endif; ?>
			  
			 
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center">
				
				<?php if($dentalorange['denor_cell']):  ?>
                <li><i class="fa fa-phone text-theme-colored"></i> Call Us at <a href="tel:<?php echo $dentalorange['denor_cell']; ?>"><?php echo $dentalorange['denor_cell']; ?></a></li>
				 <?php endif; ?>
				 
				  <?php if($dentalorange['denor_email']):  ?>
                <li><i class="fa fa-envelope-o text-theme-colored"></i> <a href="mailto:<?php echo $dentalorange['denor_email']; ?>"><?php echo $dentalorange['denor_email']; ?></a></li>
				 <?php endif; ?>
				
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
		
		
		
          <nav id="menuzord-right" class="menuzord blue no-bg"><a href="<?php echo home_url(); ?>" class="menuzord-brand pull-left flip mb-15" href="index-mp-layout1.html"><img src="<?php global $dentalorange; echo $dentalorange['logoup']['url']; ?>" alt=""></a>
		  
		  
		 <!-- <ul class="list-inline nav-side-icon-list pull-right">
              <li>
                <a href="#fullscreen-search-form" id="fullscreen-search-btn"><i class="search-icon fa fa-search"></i></a>
                <div id="fullscreen-search-form" class="hanging-top-search-form">
                  <button type="button" class="close">×</button>
                  <form>
                    <input type="search" value="" placeholder="Search keywords(s)" />
                    <button type="submit"><i class="search-icon fa fa-search"></i></button>
                  </form>
                </div>
              </li>
              <li>
                <div class="woocommerce top-nav-mini-cart-icon-container">
                   <div class="top-nav-mini-cart-icon-contents">
                      <a class="mini-cart-icon" href="#" title="View your shopping cart"><i class="icon_cart_alt"></i><span class="items-count">2</span> <span class="cart-quick-info">2 items - <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>38.00</span></span></a>
                      <div class="dropdown-content">
                        <div class="dropdown-content-wrapper">
                          <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                            <li class="woocommerce-mini-cart-item mini_cart_item">
                              <a href="#" class="remove" aria-label="Remove this item" data-product_id="3265" data-product_sku="">×</a>
                              <a href="#"><img src="http://placehold.it/68x68" alt="" width="68">Happy Ninja&nbsp;</a>
                              <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>18.00</span></span>         
                            </li>
                            <li class="woocommerce-mini-cart-item mini_cart_item">
                              <a href="#" class="remove" aria-label="Remove this item" data-product_id="31" data-product_sku="">×</a>
                              <a href="#"><img src="http://placehold.it/68x68" alt="" width="68">Ninja Silhouette&nbsp;</a>
                              <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>20.00</span></span>         
                            </li>
                          </ul>
                          <div class="woocommerce-mini-cart__total total cart-subtotal">Subtotal: <span><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>38.00</span></span></div>
                          <div class="woocommerce-mini-cart__buttons buttons cart-action-buttons">
                            <div class="row">
                              <div class="col-xs-6 pr-5"><a href="http://kodesolution.net/demo/wp/medicale-wp/cart/" class="btn btn-gray btn-block wc-forward">View Cart</a></div>
                              <div class="col-xs-6 pl-5"><a href="http://kodesolution.net/demo/wp/medicale-wp/checkout/" class="btn btn-dark btn-theme-colored btn-block checkout wc-forward">Checkout</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
              </li>
              <li><div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="fa fa-bars font-24"></i></a></div></li>
            </ul> 
		  
			<?php wp_nav_menu([
				'theme_location'		=> 'main-menu',
				'menu_class'			=> 'menuzord-menu',
				'container'				=> '',
				'fallback_cb'			=> 'default_menu',
			]); ?>
		 
			
			
			
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  
   -->
  
  
  
  
  
  
  
  
  <header id="header" class="header modern-header modern-header-theme-colored2">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="widget text-white">
			 <?php if(isset($dentalorange['hdleft'])):  ?>
              <i class="fa fa-clock-o text-theme-colored"></i> <?php echo $dentalorange['hdleft']; ?> 
			   <?php endif; ?>
            </div>
          </div>
          <div class="col-md-5">
            <div class="widget pull-right flip sm-pull-none">
              <ul class="nav navbar-nav list-bordered language-switcher">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/images/en.png" alt="En"> ENG <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fr.png" alt="En"> France</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/de.png" alt="En"> German</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/it.png" alt="En"> Italy</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="widget pull-right flip sm-pull-none">
              <ul class="list-inline text-right flip sm-text-center">
                <li>
                  <a class="text-white" href="#">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center pb-30">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
		  
		   <a href="<?php echo home_url(); ?>" class="menuzord-brand pull-left flip sm-pull-center mb-15" href="index-mp-layout1.html"><img src="<?php global $dentalorange; echo $dentalorange['logoup']['url']; ?>" alt=""></a>
		  
          </div>
          <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
			  
			 
				 
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
				<?php if(isset($dentalorange['denor_email'])):  ?>
                  <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">Mail Us Today</a>
                  <h5 class="font-13 text-black m-0"> <?php echo $dentalorange['denor_email']; ?></h5>
				  <?php endif; ?>
				  
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
				
				
				 
				  <?php if(isset($dentalorange['denor_cell'])):  ?>
                  <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">Call us for more details</a>
                  <h5 class="font-13 text-black m-0"> <?php echo $dentalorange['denor_cell']; ?></h5>
				   <?php endif; ?>
				  
				  
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
				
				<?php if(isset($dentalorange['denor_compl'])):  ?>
                  <i class="fa fa-building-o text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">Company Location</a>
                  <h5 class="font-13 text-black m-0"><?php echo $dentalorange['denor_compl']; ?></h5>
				  <?php endif; ?>
				  
				  
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-2 sm-text-center">
            <div class="widget mt-10 mb-10 m-0">
              <ul class="styled-icons icon-dark icon-sm mt-10">
			  
			  
				<?php if(isset($dentalorange['facebook'])):  ?>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s;"><a href="<?php echo $dentalorange['facebook']; ?>" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) none repeat scroll 0% 0% !important;"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				
				<?php if(isset($dentalorange['twitter'])):  ?>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;"><a href="<?php echo $dentalorange['twitter']; ?>" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) none repeat scroll 0% 0% !important;"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				
				<?php if(isset($dentalorange['skype'])):  ?>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s;"><a href="tel:<?php echo $dentalorange['skype']; ?>" data-bg-color="#05A7E3" style="background: rgb(5, 167, 227) none repeat scroll 0% 0% !important;"><i class="fa fa-skype"></i></a></li>
				<?php endif; ?>
				
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed" style="z-index: 999; position: absolute; top: 0px;">
        <div class="container">
          <nav id="menuzord" class="menuzord red menuzord-responsive"><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a>
		  
		  	<?php wp_nav_menu([
				'theme_location'		=> 'main-menu',
				'menu_class'			=> 'menuzord-menu menuzord-indented scrollable',
				'container'				=> '',
				'fallback_cb'			=> 'default_menu',
			]); 
			
			
			
			?>
			
			
			
		  
		
			
			
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <!-- Start main-content -->
  <div class="main-content">

  
	<?php if(!is_front_page()): ?>
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="<?php echo get_template_directory_uri(); ?>/images/banner.png">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title"><?php wp_title(' '); ?></h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="<?php echo home_url(); ?>"><?php echo get_the_title( get_option('page_on_front') ); ?></a></li>
                <li class="active text-theme-colored"><?php wp_title(' '); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php endif; ?>

