<?php 

/*
Template Name: Contact Page
*/


get_header(); ?>
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
		  
			<?php 
			
				$contact_from_title = get_field('contact_from_title');
			
			if($contact_from_title ):  ?>
            <h3 class="line-bottom mt-0 mb-30"> <?php  echo $contact_from_title; ?></h3>
			
			<?php endif; ?>
            
            <!-- Contact Form
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
				
				<input type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait..." value="Send your message" />
				
				
				
				<input type="reset" class="btn btn-default btn-flat btn-theme-colored" value="Reset" />
                
              </div>
            </form>  -->
			
			
			<?php 
			
			$contact_from_shortcode = get_field('contact_from_shortcode');
			
			if($contact_from_shortcode): 

			echo $contact_from_shortcode;
			
			endif;

			?>

            
          </div>
          <div class="col-md-6">
			<?php  $get_in_touch_title = get_field('get_in_touch_title');
			
			if($get_in_touch_title): ?>
            <h3 class="line-bottom mt-0"><?php echo $get_in_touch_title; ?></h3>
			<?php endif; ?>
			
			<?php  $get_in_touch_description = get_field('get_in_touch_description');
			
			if($get_in_touch_description): ?>
            <p><?php echo $get_in_touch_description; ?></p>
			<?php endif; ?>
			
			
			
			
			<?php if(get_field('social_media_icons') == 'show'):  ?>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
			
				<?php if(!empty($dentalorange['facebook'])):  ?>
				 <li><a href="<?php echo $dentalorange['facebook'];  ?>" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['twitter'])):  ?>
				<li><a href="<?php echo $dentalorange['twitter'];  ?>" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				
				<?php if(!empty($dentalorange['vk'])):  ?>
                 <li><a href="<?php echo $dentalorange['vk'];  ?>" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['instagram'])):  ?>
				<li><a href="<?php echo $dentalorange['instagram']; ?>" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['google-plus'])):  ?>
				  <li><a href="<?php echo $dentalorange['google-plus']; ?>" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($dentalorange['android'])):  ?>
				  <li><a href="<?php echo $dentalorange['android']; ?>" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>
				<?php endif; ?>
				
            </ul>
			<?php endif; ?>
			
			
			
			<?php  $location = get_field('location');
			
			if($location): ?>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
			  
				<?php echo $location; ?>
                
              </div>
            </div>
			<?php endif; ?>
			
			
			<?php  $contact_number = get_field('contact_number');
			
			if($contact_number): ?>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
				<?php echo $contact_number; ?>
               
              </div>
            </div>
			<?php endif; ?>
			
			<?php  $email_address = get_field('email_address');
			
			if($email_address): ?>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
			  <?php echo $email_address; ?>
                
              </div>
            </div>
			<?php endif; ?>
			
			
			<?php  $make_a_video = get_field('make_a_video');
			
			if($make_a_video): ?>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
              <div class="media-body">
			  <?php echo $make_a_video; ?>
               
              </div>
            </div>
			<?php endif; ?>
			
			
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
		
		<?php  $google_maps = get_field('google_maps');
			
			if($google_maps): ?>
           
			  <?php echo $google_maps; ?>
               
			<?php endif; ?>

          <!-- Google Map HTML Codes 
          <div 
            id="map-canvas-multipointer"
            data-mapstyle="default"
            data-height="500"
            data-zoom="12"
            data-marker="images/map-marker.png">
          </div>
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="<?php echo get_template_directory_uri(); ?>/js/google-map-init-multilocation.js"></script> -->

        </div>
      </div>
    </section>
	
	
	
<?php get_footer(); ?>