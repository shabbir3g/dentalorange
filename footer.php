<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dentalorange
 */
global $dentalorange;
?>

</div>  

<!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
	  
	  
	  
	  <?php dynamic_sidebar('footer-widget'); ?>
	  
	  
	  <!--
	  
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo-wide-white.png">
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="mt-5">
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list-border">
              <li><a href="index-mp-layout1.html">Home</a></li>
              <li><a href="page-about1.html">About us</a></li>
              <li><a href="shortcode-sitemap.html">Sitemap</a></li>
              <li><a href="page-faq-style1.html">Faq's</a></li>
              <li><a href="page-contact1.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Latest News</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right flip"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix text-white"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right flip"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right flip"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right flip"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
		
		-->
		
		
		
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6 sm-text-center">
		  
		<?php if(isset($dentalorange['copytext'])):  ?>
            <p class="font-13 text-black-777 m-0"><?php echo $dentalorange['copytext']; ?></p>
		<?php endif; ?>
			 
			 
          </div>
          <div class="col-md-6 text-right flip sm-text-center">
            <div class="widget no-border m-0">
			
			<?php if($dentalorange['footer-social-media'] == 1):  ?>
              <ul class="styled-icons icon-dark icon-circled icon-sm">
				<?php if(isset($dentalorange['facebook'])):  ?>
                <li><a href="<?php echo $dentalorange['facebook'];  ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				<?php if(isset($dentalorange['twitter'])):  ?>
                <li><a href="<?php echo $dentalorange['twitter'];  ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				<?php if(isset($dentalorange['skype'])):  ?>
                <li><a href="<?php echo $dentalorange['skype'];  ?>"><i class="fa fa-skype"></i></a></li>
				<?php endif; ?>
				
				<?php if(isset($dentalorange['youtube'])):  ?>
                <li><a href="<?php echo $dentalorange['youtube'];  ?>"><i class="fa fa-youtube"></i></a></li>
				<?php endif; ?>
				
				<?php if(isset($dentalorange['instagram'])):  ?>
                <li><a href="<?php echo $dentalorange['instagram'];  ?>"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>
				
				<?php if(isset($dentalorange['pinterest'])):  ?>
                <li><a href="<?php echo $dentalorange['pinterest'];  ?>"><i class="fa fa-pinterest"></i></a></li>
				<?php endif; ?>
              </ul>
			  <?php endif; ?>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->


	<?php wp_footer(); ?>

</body>
</html>