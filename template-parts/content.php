<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ready
 */

?>


  <article class="post clearfix mb-30 pb-30">
  
	<?php if(has_post_thumbnail()):  ?>
	<div class="entry-header">
	  <div class="post-thumb thumb"> 
		<?php the_post_thumbnail('img-responsive img-fullwidth'); ?>
	  </div>
	</div>
	<?php endif; ?>
	
	
	<?php get_template_part('template-parts/common-content'); ?>
  </article>
				  