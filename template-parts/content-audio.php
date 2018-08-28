<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ready
 */

?>

				  

  <article class="post clearfix mb-30 pb-30">
	<div class="entry-header">
	  <div class="post-thumb">
		 <?php echo wp_oembed_get( get_post_meta( get_the_ID(), 'audio-post-link', true ) ); ?>
	  </div>
	</div>
	
	
	<?php get_template_part('template-parts/common-content'); ?>
  </article>
  
  
  