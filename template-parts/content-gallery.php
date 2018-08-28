<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ready
 */

?>
  <article class="post clearfix mb-30 pb-30">
	<div class="entry-header">
	  <div class="post-thumb">
		<div class="owl-carousel-1col" data-nav="true">
		
		<?php  

				$gall = get_post_meta(get_the_ID(), 'comet-gallery-images', true);

				foreach( $gall as $gallll ) :
		?>
		
		 <div class="item">
			<img src="<?php echo $gallll; ?>" alt="">
		  </div>
	   
		<?php endforeach; ?>
		
		</div>
	  </div>
	</div>
	<div class="clearfix"></div>
	
	
	
	<?php get_template_part('template-parts/common-content'); ?>
	
	
	
  </article>
				  
