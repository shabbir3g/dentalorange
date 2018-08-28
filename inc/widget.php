<?php 
// Dental Orange Posts 
	class dental_orange_post extends WP_Widget{

		public function __construct(){
			parent::__construct('dental_orange_post','Dental Orange Posts', [
				'description'				=> 'Dental Orange Recent Post'
			]);
		}

		public function widget($one, $two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
			?>
				
				<?php echo $one['before_widget']; ?>
              <?php echo $one['before_title']; ?><?php echo $title ; ?><?php echo $one['after_title']; ?>
				<div class="widget-image-carousel">
				
				<?php 
				
				$recentpost = new WP_Query([
					'post_type'				=> 'post',
					'posts_per_page'		=> 3,
				]);
				
				
				while($recentpost->have_posts()): $recentpost->the_post(); ?>
                  <div class="item sidebarspost">
				  <?php if(has_post_thumbnail()):  ?>
                    <?php the_post_thumbnail(); ?>
					<?php endif; ?>
                    <h4 class="title"><?php the_title(); ?></h4>
                    <p><?php echo wp_trim_words(get_the_content(), 10, false); ?></p>
                  </div>
				  <?php endwhile; ?>
				  
                 
                </div>
               <?php echo $one['after_widget']; ?>
			
		<?php }
		public function form($two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
			?>
			<p>
				<label for="<?php echo $this -> get_field_id('title'); ?>">Title</label>
				<input name="<?php echo $this -> get_field_name('title'); ?>" id="<?php echo $this -> get_field_id('title'); ?>" value="<?php echo $title ; ?>" class="widefat" type="text">
			</p>
		<?php }

	}
	
	
	
	
	// Dental Orange About Us
	class dental_orange_about extends WP_Widget{

		public function __construct(){
			parent::__construct('dental_orange_about','Dental Orange About us', [
				'description'				=> 'Dental Orange About us add here'
			]);
		}

		public function widget($one, $two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
				$address = isset($two['title']) ? $two['address'] : '' ;
			?>
				
		   <div class="col-sm-6 col-md-3">
			  <div class="widget dark">
				<a href="<?php echo home_url(); ?>"><img class="mt-10 mb-20" alt="" src="<?php global $dentalorange; echo $dentalorange['logofo']['url']; ?>"></a>
				<p><?php echo $address ?></p>
				<ul class="mt-5">
				<?php if($dentalorange['denor_cell']):  ?>
				  <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="tel:<?php echo $dentalorange['denor_cell']; ?>"><?php echo $dentalorange['denor_cell']; ?></a> </li>
				  <?php endif; ?>
				  
				  <?php if($dentalorange['denor_email']):  ?>
				  <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:<?php echo $dentalorange['denor_email']; ?>"><?php echo $dentalorange['denor_email']; ?></a> </li>
				  <?php endif; ?>
				  
				  <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="<?php echo home_url(); ?>"><?php echo get_site_url(); ?></a> </li>
				</ul>
			  </div>
			</div>
			
		<?php }
		public function form($two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
				$address = isset($two['title']) ? $two['address'] : '' ;
			?>
			<p>
				<label for="<?php echo $this -> get_field_id('title'); ?>">Title</label>
				<input name="<?php echo $this -> get_field_name('title'); ?>" id="<?php echo $this -> get_field_id('title'); ?>" value="<?php echo $title ; ?>" class="widefat" type="text">
				<label for="<?php echo $this -> get_field_id('address'); ?>">Address</label>
				<textarea name="<?php echo $this -> get_field_name('address'); ?>" id="<?php echo $this -> get_field_id('address'); ?>" cols="30" rows="3" class="widefat"><?php echo $address; ?></textarea>
				
			</p>
		<?php }

	}

	
	
	// Dental Orange Latest News
	class dental_orange_latest_news extends WP_Widget{

		public function __construct(){
			parent::__construct('dental_orange_latest_news','Dental Latest News', [
				'description'				=> 'Dental Orange Latest News'
			]);
		}

		public function widget($one, $two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
			?>
			


             

			
		<?php echo $one['before_widget']; ?>
            <?php echo $one['before_title']; ?><?php echo $title ; ?><?php echo $one['after_title']; ?>
            <div class="latest-posts">
			
			<?php 
				
				$recentpost = new WP_Query([
					'post_type'				=> 'post',
					'posts_per_page'		=> 3,
				]);
				
				
				while($recentpost->have_posts()): $recentpost->the_post(); ?>
              <article class="post media-post clearfix pb-0 mb-10">
			  <?php if(has_post_thumbnail()):  ?>
                <a href="<?php the_permalink(); ?>" class="post-thumb footerwidget">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 2, false); ?></a></h5>
                  <p class="post-date mb-0 font-12"><?php the_time('M j, Y'); ?></p>
                </div>
              </article>
              <?php endwhile; ?>
			  
			  
            </div>
        <?php echo $one['after_widget']; ?>
			
		<?php }
		public function form($two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
			?>
			<p>
				<label for="<?php echo $this -> get_field_id('title'); ?>">Title</label>
				<input name="<?php echo $this -> get_field_name('title'); ?>" id="<?php echo $this -> get_field_id('title'); ?>" value="<?php echo $title ; ?>" class="widefat" type="text">
			</p>
		<?php }

	}
	
	
	
	// Dental Orange Opening Hours
	class dental_orange_opening_hours extends WP_Widget{

		public function __construct(){
			parent::__construct('dental_orange_opening_hours','Dental Opening Hours', [
				'description'				=> 'Dental Orange Opening Hours'
			]);
		}

		public function widget($one, $two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
				$days1 = isset($two['days1']) ? $two['days1'] : '' ;
				$days2 = isset($two['days2']) ? $two['days2'] : '' ;
				$days3 = isset($two['days3']) ? $two['days3'] : '' ;
				$days4 = isset($two['days4']) ? $two['days4'] : '' ;
			?>
			


		<?php echo $one['before_widget']; ?>
           <?php echo $one['before_title']; ?><?php echo $title ; ?><?php echo $one['after_title']; ?>
            <div class="opening-hours">
              <ul class="list-border">
			  
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right flip"> <?php echo $days1; ?> </div>
                </li>
                <li class="clearfix text-white"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right flip"> <?php echo $days2; ?></div>
                </li>
                <li class="clearfix"> <span> Fri - Sat: </span>
                  <div class="value pull-right flip"> <?php echo $days3; ?> </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right flip"><?php echo $days4; ?>  </div>
                </li>
				
              </ul>
            </div>
        <?php echo $one['after_widget']; ?>
			
		<?php }
		public function form($two){ 
				$title = isset($two['title']) ? $two['title'] : '' ;
				$days1 = isset($two['days1']) ? $two['days1'] : '' ;
				$days2 = isset($two['days2']) ? $two['days2'] : '' ;
				$days3 = isset($two['days3']) ? $two['days3'] : '' ;
				$days4 = isset($two['days4']) ? $two['days4'] : '' ;
			?>
			<p>
				<label for="<?php echo $this -> get_field_id('title'); ?>">Title</label>
				<input name="<?php echo $this -> get_field_name('title'); ?>" id="<?php echo $this -> get_field_id('title'); ?>" value="<?php echo $title ; ?>" class="widefat" type="text">
			</p>
			<p>
				<label for="<?php echo $this -> get_field_id('days1'); ?>">Mon - Tues :</label>
				<input name="<?php echo $this -> get_field_name('days1'); ?>" id="<?php echo $this -> get_field_id('days1'); ?>" value="<?php echo $days1 ; ?>" class="widefat" type="text">
			</p>
			<p>
				<label for="<?php echo $this -> get_field_id('days2'); ?>">Wednes - Thurs :</label>
				<input name="<?php echo $this -> get_field_name('days2'); ?>" id="<?php echo $this -> get_field_id('days2'); ?>" value="<?php echo $days2 ; ?>" class="widefat" type="text">
			</p>
			<p>
				<label for="<?php echo $this -> get_field_id('days3'); ?>">Fri : </label>
				<input name="<?php echo $this -> get_field_name('days3'); ?>" id="<?php echo $this -> get_field_id('days3'); ?>" value="<?php echo $days3 ; ?>" class="widefat" type="text">
			</p>
			<p>
				<label for="<?php echo $this -> get_field_id('days4'); ?>">Sun : </label>
				<input name="<?php echo $this -> get_field_name('days4'); ?>" id="<?php echo $this -> get_field_id('days4'); ?>" value="<?php echo $days4 ; ?>" class="widefat" type="text">
			</p>
		<?php }

	}
	
	

	
	
function dental_widgets_init() {

	register_widget('dental_orange_post');
	register_widget('dental_orange_about');
	register_widget('dental_orange_latest_news');
	register_widget('dental_orange_opening_hours');


}
add_action( 'widgets_init', 'dental_widgets_init' );
