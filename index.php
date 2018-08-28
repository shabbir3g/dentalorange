<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dentalorange
 */

get_header(); ?>

	
  <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">
				
				  
				 <?php while(have_posts()) : the_post(); ?>
	            	<?php get_template_part('template-parts/content', get_post_format()); ?>
	        	<?php endwhile; ?>
				  

                 
				  
                </div>
              </div>
              <div class="col-md-12">
                <nav>
                  <div class="pagination theme-colored">
				  <?php  

	            		the_posts_pagination([
	            			'screen_reader_text'			=> ' ',
	            			'prev_text'						=> '<span aria-hidden="true">«</span>',
	            			'next_text'						=> '<span aria-hidden="true">»</span>',
	            			'type'							=> 'list'
	            		]);

	            	?>
                  
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            
			
			<?php get_sidebar(); ?>
			
          </div>
        </div>
      </div>
    </section> 
  
  <!-- end main-content -->

	

<?php get_footer();
