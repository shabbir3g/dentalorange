<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ready
 */

?>
 <article class="post clearfix pb-30">
	<div class="clearfix"></div>
	<div class="entry-content">
	  <a class="post-link text-center text-white bg-theme-colored display-block font-20 p-30" href="<?php the_permalink(); ?>">
		<?php the_title(); ?><br><span class="font-13"><?php the_content(); ?></span>
	  </a>
	</div>
  </article>
  
				  