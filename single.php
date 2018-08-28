<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dentalorange
 */

get_header(); ?>

	<!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
		
		
		<?php while(have_posts()): the_post();  ?>
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
				
				
				<?php if(wp_oembed_get(get_post_meta(get_the_ID(), 'video-post-link', true))){ ?>
				<div class="post-thumb">
				<?php echo wp_oembed_get(get_post_meta(get_the_ID(), 'video-post-link', true)) ; ?>
				</div>
				<?php }elseif(wp_oembed_get( get_post_meta( get_the_ID(), 'audio-post-link', true ) )){ ?>
				<div class="post-thumb">
				 <?php echo wp_oembed_get( get_post_meta( get_the_ID(), 'audio-post-link', true ) ); ?>
				</div>
				<?php }elseif(get_post_meta(get_the_ID(), 'comet-gallery-images', true)){ ?>
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
				 <?php }else{ ?>
				 
				 <div class="post-thumb thumb"> 
					<?php the_post_thumbnail('img-responsive img-fullwidth'); ?>
				 </div>
				 
				 <?php } ?>
				
				
                  
				  
				  
				  
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                     <ul>
						<li class="font-16 text-white font-weight-600"><?php the_time('j'); ?></li>
						<li class="font-12 text-white text-uppercase"><?php the_time('M'); ?></li>
					  </ul>
                    </div>
                    <div class="media-body pl-15">
                       <div class="event-content pull-left flip">
						<h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> <?php comments_popup_link('No Comments','1 Comment','% Comments','',''); ?></span>                       
						<span class="mb-10 text-gray-darkgray mr-10 font-13"><?php echo get_simple_likes_button( get_the_ID() ); ?></span>
					  </div>
                    </div>
                  </div>
                  <p class="mb-15"><?php the_content(); ?></p>
				  
				  
				  
				  
                  <div class="mt-30 mb-0">
                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                    <div class="entry-content"></div>
                  </div>
                </div>
              </article>
              <div class="tagline p-0 pt-20 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
					<?php if(has_tag()):  ?>
                      <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <?php the_tags(); ?></p>
					  <?php endif; ?>
					  
					  
					  
					  
                    </div>
                  </div>
                  <!--<div class="col-md-4">
                    <div class="share text-right flip">
                      <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                    </div>
                  </div> -->
                </div>
              </div>
              
              <div id="comments" class="comments-area pt-50">
                <h3 class="comments-title">Comments</h3>
				<?php comments_template(); ?>

              </div>
            </div>
          </div>
		  <?php endwhile; ?>
		  
          <div class="col-md-3">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->


	

<?php get_footer();
