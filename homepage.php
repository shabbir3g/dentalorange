<?php 

/*
Template Name: Home
*/


get_header(); ?>
	<!-- Start main-content -->
	<div class="main-content">
		<!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-white-5">
      <div class="maximage-slider">
        <div id="maximage" class="z-index--1">
		
		
		<?php $slider_image = get_field('slider_image'); 
		
		foreach( $slider_image as $imgslider){
			
			
			$img = $imgslider['url'];
			
			echo '<img src="'.$img.'" alt="" />';
			
			
		}
		
		
		?>
		

		  
		  
        </div>
        <div class="fullscreen-controls"> <a class="img-prev"><i class="pe-7s-angle-left"></i></a> <a class="img-next"><i class="pe-7s-angle-right"></i></a> </div>
      </div>
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-100 pb-100">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="bg-white-transparent text-center pt-20 pb-50 outline-border">
					<?php $slider_title =  get_field('slider_title');
					if($slider_title): ?>
                  <h1 class="text-black-222 text-uppercase font-54"><?php echo $slider_title; ?></h1>
				  <?php endif; ?>
				  <?php 
						$slider_subtitle = get_field('slider_subtitle');
				  if($slider_subtitle ):  ?>
                  <p class="lead"><?php echo $slider_subtitle; ?></p>
				  <?php endif; ?>
				  <?php $slider_button = get_field('slider_button'); 
					if($slider_button): ?>
                  <a class="btn btn-colored btn-theme-colored btn-lg smooth-scroll-to-target mt-15" href="<?php echo $slider_button['url']; ?>"><?php echo $slider_button['title']; ?></a>
				  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <!-- Section: home-boxes -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row equal-height-inner home-blocks" data-margin-top="-150px">
		  
		  
			<?php
			$home_bloks = get_field('home_bloks');
			
			
			if($home_bloks):


			foreach($home_bloks as $bloks):
				
			?>
			
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1 hblock">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class=" <?php // echo $bloks['block_icon']; ?> text-theme-colored"></i> </a>
                    <h3 class="text-white"><?php echo $bloks['block_title']; ?></h3>
                    <p class="text-white"><?php echo $bloks['block_subtitle']; ?></p>
                  </div>
                </div>
              </div>
            </div>
			
			<?php endforeach; endif; ?>
			
          
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section id="about">
    	<div class="container pt-0">
    		<div class="section-content">
    			<div class="row">
            <div class="col-md-8">
			
             <?php $about_text = get_field('about_text'); 

			if($about_text): echo $about_text; endif; ?>
			  
              
              <div class="row mb-sm-30 abouticons">
			  
			  
			  
			  	<?php
				$about_boxes = get_field('about_boxes');
				
				
				if($about_boxes):


				foreach($about_boxes as $boxes):
					
				?>
                <div class="col-sm-6 col-md-6 abouticon">
                  <div class="icon-box icon-left">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circled pull-left flip sm-pull-none" href="#">
                      <i class="text-white"></i>
                    </a>
                    <h4 class="icon-box-title mt-10"><?php echo $boxes['about_title']; ?> </h4>
                    <p><?php echo $boxes['about_subtitle']; ?> </p>
                  </div>
                </div>
				<?php endforeach; endif; ?>
				
				
               
              </div>
            </div>
            <div class="col-md-4">
			 <?php $request_an_appointment = get_field('request_an_appointment'); 
			   if($request_an_appointment): ?>
              <div class="border-3px p-30 pt-10 pb-20 border-theme-colored bg-theme-colored2cont">
                <h3 class="text-white">Request An Appointment!</h3>
                <p class="text-white mt-0">Just make an appointment to get help from our experts</p>

              
			   
			  <?php echo $request_an_appointment; ?>
			   
			

                <!-- Appointment Form Validation-->
                <script>
                  $("#appointment_form_at_home").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
                <!-- Appontment Form Ends -->
              </div>
			  <?php    endif; ?>
			  
			  
			  
			  
            </div>
    			</div>
    		</div>
    	</div>
    </section>

	
	<?php $services_title = get_field('services_title');
			if($services_title): ?>
    <!-- Section: Services --> 
    <section id="services" class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?php $services_area_background =  get_field('services_area_background'); 
	
	echo $services_area_background['url'];
	
	?>">
    	<div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
			
			
              <h2 class="text-uppercase text-white mt-0 line-height-1"><?php echo $services_title; ?></h2>
              <div class="title-icon">
                <img class="mb-10" src="<?php echo get_template_directory_uri(); ?>/images/title-icon-white.png" alt="">
              </div>
			
			  
			  <?php $services_subtitle = get_field('services_subtitle');
				if($services_subtitle): ?>
              <p class="text-white"><?php echo $services_subtitle; ?></p>
			  <?php endif; ?>
			  
			  
            </div>
          </div>
        </div>
    		<div class="section-content">
    			<div class="row">
				
				
				
				<?php 
				
				$services = new WP_Query([
					'post_type'				=> 'services',
					'posts_per_page'		=> 6,
				]);
				
				
				while($services->have_posts()): $services->the_post(); ?>
    				<div class="col-sm-6 col-md-4">
    					<div class="icon-box text-center p-30 bg-white mb-30 border-3px">
    						<a href="#"><i class='fa <?php echo get_field('services_icons'); ?> text-theme-colored'></i></a>
    						<div class="features-details">
    							<h3><?php the_title(); ?></h3>
    							<p><?php echo wp_trim_words(get_the_content(), 14, '</p>
    						</div>
    						<a href="'.get_the_permalink().'" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>'); ?>
    					</div>
    				</div>
				<?php endwhile; ?>
					
					
					
					
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Section: Depertment -->
	 <?php endif; ?>
	
	
	<?php 
	
	$page_id     = get_queried_object_id();
	
	$depertment_title = get_field('depertment_title',$page_id ); 
	if($depertment_title): ?>
    <section id="depertment" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1"><?php echo  $depertment_title ; ?></h2>
			  
			  <?php $depertment_subtitle = get_field('depertment_subtitle',$page_id);  
			  
			  if($depertment_subtitle): ?>
              <div class="title-icon">
                <img class="mb-10" src="<?php echo get_template_directory_uri(); ?>/images/title-icon.png" alt="">
              </div>
              <p><?php echo $depertment_subtitle ; ?></p>
			  <?php endif; ?>
			  
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            

			
           <?php 

		   $depertment = new WP_Query([
				'post_type'				=> 'depertment',
				'posts_per_page'		=> 3,
		   ]);

		   while($depertment->have_posts()): $depertment->the_post(); ?>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="p-20 bg-white">
                <?php the_post_thumbnail(); ?>
                <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class=""><?php echo wp_trim_words(get_the_content(), 12, '</p>
                <a href="'.get_the_permalink().'" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>   '); ?>            
              </div>
            </div>
			<?php endwhile; ?>
			
			
			
          </div>
        </div>
      </div>
    </section>
	<?php endif; ?>

    <!-- Section: Pricing  -->
	
	
	<?php 
	
	$pricing_title = get_field('pricing_title',$page_id ); 
	if($pricing_title): ?>
    <section id="pricing">
      <div class="container pb-50">
        <div class="section-title text-center mb-60">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
			
			
              <h2 class="text-uppercase mt-0"><?php echo $pricing_title; ?></h2>
			  <?php $pricing_subtitle = get_field('pricing_subtitle',$page_id);  
			  
			  if($pricing_subtitle): ?>
              <div class="title-icon">
                <img class="mb-10" src="<?php echo get_template_directory_uri(); ?>/images/title-icon.png" alt="">
              </div>
              <p><?php echo $pricing_subtitle; ?></p>
			  <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="section-content mt-20">
          <div class="row">
		  
		  
		  
		  
		  <?php $pricing_01 = get_field('pricing_01',$page_id);  
			  
			if($pricing_01): ?>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-hammers5 text-theme-colored"></i>
                  </div>
				  
				  <?php echo $pricing_01; ?>
				  
                 
                </div>
              </div>
            </div>
			<?php endif; ?>
			
			
			<?php $pricing_02 = get_field('pricing_02',$page_id);  
			  
			if($pricing_02): ?>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon bg-theme-colored">
                    <i class="flaticon-medical-human3 text-white"></i>
                  </div>
				  
				  <?php echo $pricing_02 ; ?>
                 
                </div>
              </div>
            </div>
			<?php endif; ?>
			
			
			
			<?php $pricing_03 = get_field('pricing_03',$page_id);  
			  
			if($pricing_03): ?>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-scalpel3 text-theme-colored"></i>
                  </div>
				  
				  <?php echo $pricing_03 ; ?>
				  
                  
                </div>
              </div>
            </div>
			<?php endif; ?>
			
			
          </div>
        </div>
      </div>
    </section>
	
	<?php endif; ?>

  <!--	start funfact Section-->
	
	
	
	<?php $section_background_counter = get_field('section_background_counter' ,$page_id);
	if($section_background_counter): ?>
  	<section  class="divider parallax layer-overlay overlay-white-8" data-bg-img="<?php echo $section_background_counter['url']; ?>">
  			<div class="container pb-50">
  				<div class="section-content">
  					<div class="row">
					
						<?php $counter_title_01 = get_field('counter_title_01',$page_id); 
						if($counter_title_01): ?>
  						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-male100 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="<?php echo get_field('counter_data_01',$page_id) ?>" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0"><?php echo $counter_title_01; ?></h5>
  							</div>
  						</div>
						<?php endif; ?>
						
						
						<?php $counter_title_02 = get_field('counter_title_02',$page_id); 
						if($counter_title_02): ?>
  						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-family21 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="<?php echo get_field('counter_data_02',$page_id) ?>" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0"><?php echo $counter_title_02; ?></h5>
  							</div>
  						</div>
						<?php endif; ?>
						
						
						
						
						
						<?php $counter_title_03 = get_field('counter_title_03',$page_id); 
						if($counter_title_03): ?>
  						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-hospital17 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="<?php echo get_field('counter_data_03',$page_id) ?>" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0"><?php echo $counter_title_03; ?></h5>
  							</div>
  						</div>
						<?php endif; ?>
						
						<?php $counter_title_04 = get_field('counter_title_04',$page_id); 
						if($counter_title_04): ?>
						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-hospital36 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="<?php echo get_field('counter_data_04',$page_id) ?>" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0"><?php echo $counter_title_04; ?></h5>
  							</div>
  						</div>
						<?php endif; ?>
						
						
  					</div>
  				</div>
  			</div>
  	</section>
	<?php endif; ?>
	
	
	
	
	<?php $section_title_dentist = get_field('section_title_dentist', $page_id); 
	
	if($section_title_dentist):  ?>
    <!-- start Doctors Section:-->
    <section id="doctors">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class=" mt-0 line-height-1"><?php echo $section_title_dentist;  ?></h2>
			  
			  <?php $section_subtitle_dentist = get_field('section_subtitle_dentist', $page_id); 
	
			if($section_subtitle_dentist):  ?>
              <div class="title-icon">
                <img class="mb-10" src="<?php echo get_template_directory_uri(); ?>/images/title-icon.png" alt="">
              </div>
              <p><?php echo $section_subtitle_dentist; ?></p>
			  <?php endif; ?>
			  
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col">
			
			
			
			<?php 
			
			$dentist = new WP_Query([
				'post_type'				=> 'dentist',
				'posts_per_page'		=> -1,
			]);
			
			
			while($dentist->have_posts()): $dentist->the_post();  ?>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                  <div class="team-thumb">
                    <?php the_post_thumbnail('img-fullwidth'); ?>
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><?php the_title(); ?></h4>
                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0"><?php the_content(); ?></h6>
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
					<?php
					
					

					$facebook_url =  get_field('facebook_url'); 
					if($facebook_url): ?>
                      <li><a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook"></i></a></li>
					  <?php endif; ?>
					  
					  <?php $twitter_url =  get_field('twitter_url'); 
					if($twitter_url): ?>
                      <li><a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter"></i></a></li>
					   <?php endif; ?>
					   
					  <?php $instagram_url =  get_field('instagram_url');
					  
					if($instagram_url): ?>
                      <li><a href="<?php echo $instagram_url; ?>"><i class="fa fa-instagram"></i></a></li>
					   <?php endif; ?>
					   
					   
					  <?php $skyep_name =  get_field('skyep_name'); 
					if($skyep_name): ?>
                      <li><a href="tel:<?php echo $skyep_name; ?>"><i class="fa fa-skype"></i></a></li>
					   <?php endif; ?>
                    </ul>
                  </div>
                </div>
              </div>
             <?php endwhile; ?>
			 
			 
			 
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<?php endif; ?>

  	<!-- Section: Call To Action -->
	
	 
	<?php 
	
	$page_id     = get_queried_object_id();
	
	$add_certificate = get_field('add_certificate', $page_id);
	
	
	if($add_certificate): 

	$certificate_section_background = get_field('certificate_section_background' ,$page_id);

	?>
	<section class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="<?php echo $certificate_section_background['url'] ?>" data-parallax-ratio="0.7" style="background-image: url(<?php echo $certificate_section_background['url'] ?>;); background-position: 50% 72px;">
      <div class="container">
        <div class="row">
		
		
		<?php foreach($add_certificate as $certificate):  ?>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 text-center">
            <a href="<?php echo $certificate['url']; ?>" data-lightbox-gallery="certificates" title="Certificate"><img src="<?php echo $certificate['url']; ?>" alt="<?php echo $certificate['title']; ?>"></a>
          </div>
        <?php endforeach; ?>
		
		  
        </div>
      </div>
    </section>
	<?php endif; ?>
	
	
	
	
	
	
	
	
	<?php

	

	$background_image_call = get_field('background_image_call', $page_id );
	
	if($background_image_call): ?> 
	
  	<section  class="divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="<?php echo $background_image_call['url']; ?>">
			<div class="container pt-20 pb-20">
				<div class="call-to-action">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
						  
						  <?php $call_to_action_content = get_field('call_to_action_content', $page_id);
	
							if($call_to_action_content):
							
							echo $call_to_action_content;
							
							endif;


							?>
						  
						  
						</div>
					</div>
				</div>
			</div>
  	</section>
	
	<?php endif; ?>

		<!--start gallary Section-->
		
		
		<?php $gallery_title = get_field('gallery_title', $page_id); 
		
		if( $gallery_title): ?>
		
		<section class="bg-lighter">
			<div class="container">
				<div class="section-title text-center mt-0">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="mt-0 line-height-1"><?php echo $gallery_title; ?></h2>
							
							<?php $gallery_subtitle = get_field('gallery_subtitle', $page_id); 
		
							if( $gallery_subtitle): ?>
							<p><?php echo $gallery_subtitle; ?></p>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-md-12">
							<!-- Portfolio Filter -->
							<div class="portfolio-filter text-center">
								<a href="#" class="active" data-filter="*">All</a>
								
								
								<?php $cates =  get_terms('gallerycategory'); 
								foreach($cates as $cat){
									?>
								<a href="#<?php echo $cat->slug; ?>" class="" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
								
								<?php } ?>
								
								
								
							</div>
							<!-- End Portfolio Filter -->
							
							<!-- Portfolio Gallery Grid -->
							<div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
								<!-- Portfolio Item Start -->
								
								<?php 
								$gallery = new WP_Query([
									'post_type'		=> 'gallery',
									'posts_per_page'=> 9,
								]);
								while($gallery->have_posts()): $gallery->the_post(); ?>
								<div class="gallery-item <?php $type = get_the_terms(get_the_id(),'gallerycategory'); 
												
												foreach( $type as $tp){ 
												
												echo  $tp->slug.' ';
												
												}
												 ?>">
									<div class="thumb">
										<?php the_post_thumbnail('img-fullwidth'); ?>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center"><?php the_title(); ?></div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
								
								
								
							</div>
							<!-- End Portfolio Gallery Grid -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif; ?>
		
		
		
	<?php $testimonial_title = get_field('testimonial_title', $page_id); 
		
	if( $testimonial_title): 
		
	$section_background_testimonial = get_field('section_background_testimonial', $page_id); 	 ?>
		
    <!--start testimonial Section-->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-parallax-ratio="0.1" data-bg-img="<?php echo $section_background_testimonial['url'] ?>">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1"><?php echo $testimonial_title; ?></h2>
			  
			  <?php $testimonial_subtitle = get_field('testimonial_subtitle', $page_id); 
		
			if( $testimonial_subtitle): ?>
              <div class="title-icon">
                <img class="mb-10" src="<?php echo get_template_directory_uri(); ?>/images/title-icon-white.png" alt="">
              </div>
              <p class="text-white"><?php echo $testimonial_subtitle; ?></p>
			  <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col" data-dots="true">
			  
			  
			  
			  <?php $client_review = get_field('client_review', $page_id); 

				if($client_review): 
				foreach($client_review as $reviews): ?>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-white">
                      <p class="lead text-black-333"><?php echo $reviews['client_reviews']; ?></p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="<?php echo $reviews['client_image']['url']; ?>"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-theme-colored2"><?php echo $reviews['client_name']; ?></h5>
                        <h6 class="title text-white mt-0"><?php echo $reviews['designationcompany']; ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
				<?php endforeach; endif; ?>
		
				
				
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
	
<?php endif; ?>






	<?php $section_title_blog = get_field('section_title_blog', $page_id); 
		
	if( $section_title_blog):  ?>
		
    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1"><?php echo $section_title_blog; ?></h2>
			  
			  <?php $section_subtitle_blog = get_field('section_subtitle_blog', $page_id); 
		
				if( $section_subtitle_blog):  ?>
              <p><?php echo $section_subtitle_blog; ?></p>
			  <?php endif; ?>
			  
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-nav="true">
              
			  
			<?php 
			
			$ppppost = new WP_Query([
				'post_type'				=> 'post',
				'posts_per_page'		=> -1,
			]);
			
			
			while($ppppost->have_posts()): $ppppost->the_post();  ?>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
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
				  
				  
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i><?php the_time('j F'); ?></span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> <?php comments_popup_link('No Comments','1 Comment','% Comments','',''); ?></span>
                    <span class="mb-10 text-white mr-10 font-13"> <?php echo get_simple_likes_button( get_the_ID() ); ?> Like</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?></a></h3>
                      </div>
                    </div>
                    <p class="mt-10"><?php echo wp_trim_words(get_the_content(), 23, '</p>
                    <div class="mt-10"> <a href="'.get_the_permalink().'" class="btn btn-theme-colored btn-sm">Read More</a>'); ?> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
			  <?php endwhile; ?>
			  
			  
			  
			  
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<?php endif; ?>
	
	

    
    <!-- Divider: Clients -->
	
	<?php 
	
	$logos = get_field('logos', $page_id);
	
	if($logos):  ?>
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center owl-nav-top">
			
				
			<?php 
		
			foreach( $logos as $logo): ?>
			
              <div class="item"> <a href="#"><img src="<?php echo $logo['url']; ?>" alt=""></a></div>
			
			<?php endforeach; ?>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php endif; ?>
	
	
	
  </div>
  <!-- end main-content -->
  
  
<?php  get_footer(); ?>