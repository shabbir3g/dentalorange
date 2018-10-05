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
				
				<?php if(!empty($dentalorange['twitter'])):  ?>
                <li><a href="<?php echo $dentalorange['twitter'];  ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['skype'])):  ?>
                <li><a href="<?php echo $dentalorange['skype'];  ?>"><i class="fa fa-skype"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['youtube'])):  ?>
                <li><a href="<?php echo $dentalorange['youtube'];  ?>"><i class="fa fa-youtube"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['instagram'])):  ?>
                <li><a href="<?php echo $dentalorange['instagram'];  ?>"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['pinterest'])):  ?>
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