<div class="entry-content border-1px p-20 pr-10">
	  <div class="entry-meta media mt-0 no-bg no-border">
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
	  
	  <p class="mt-10"><?php echo wp_trim_words(get_the_content(), 25, '</p>
	  <a href="'.get_the_permalink().'" class="btn-read-more">Read more</a>'); ?>
	  <div class="clearfix"></div>
	</div>
	