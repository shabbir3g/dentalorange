<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dentalorange
 */

get_header(); ?>

<!--
<?php //while(have_posts()): the_post(); ?>


<?php //the_content(); ?>


<?php //endwhile; ?> -->


<section>
      <div class="container">
        <div class="row mtli-row-clearfix">
		
		<?php 
		
		
		
		
		while(have_posts()):  the_post(); ?>
		
		
		
          <div class="col-sm-6 col-md-8 col-lg-8">
            <div class="campaign maxwidth500 mb-sm-30">
              <div class="thumb">
                <?php the_post_thumbnail('img-fullwidth'); ?>
                <div class="campaign-overlay"></div>
              </div>
              <h4 class="<?php the_permalink(); ?>"><a href="#"><?php the_title(); ?></a></h4>
            </div>
            <div class="event-details">
              <?php the_content(); ?>
            </div>
          </div>
		  <?php endwhile; ?>
		  
		  
		  
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="sidebar sidebar-right mt-sm-30">
			
			<?php dynamic_sidebar('page-widget'); ?>
			
			
      
			  
			  
			  
            </div>
          </div>
        </div>
        
      </div>
    </section>

	
	

<?php get_footer();
