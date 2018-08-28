<?php 


	 // Dental Orange slider start 


	function home_slider($one, $two){ 

			$sliderhome = shortcode_atts( [

				'slideimages'			=> '',
				'title'					=> '',
				'subtitle'				=> '',
				'link'					=> '',

			], $one);

			ob_start();
		?>
		
	<section id="home" class="divider parallax layer-overlay overlay-white-5">
      <div class="maximage-slider">
        <div id="maximage" class="z-index--1">
		
		
		<?php 
		
		$image_ids=explode(',',$sliderhome['slideimages']);
		


		$image_no = 1;
		foreach( $image_ids as $image_id ){
			$images = wp_get_attachment_image_src( $image_id, 'full' );
			echo $output ='<img src="'. $images[0] .'" alt="" data-mce-src="'. $images[0] .'">';
			
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
                  <h1 class="text-black-222 text-uppercase font-54"><?php echo $sliderhome['title']; ?></h1>
                  <p class="lead"><?php echo $sliderhome['subtitle']; ?></p>
				  
				<?php  
				
				
				$url = $sliderhome['link'];
				
				   $url = ($url=='||') ? '' : $url;
		$url = vc_build_link( $url );
		$a_link = $url['url'];
		$a_title = $url['title'];
$a_target = ($url['target'] == '') ? '' : 'target="'.$url['target'].'"'; ?>
				  
                  <a class="btn btn-colored btn-theme-colored btn-lg smooth-scroll-to-target mt-15" href="<?php echo $a_link; ?>"><?php echo $a_title; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php 
		return ob_get_clean();
}
	add_shortcode('slider','home_slider');





	if( function_exists("vc_map") ){
		vc_map([
		'name'				=> "Home Slider",
		'base'				=> 'slider',
		'description'		=> "This is home slider",
		'icon'				=> get_template_directory_uri(). '/images/logo.png',
		'params'			=> [
			[
				'param_name'		=> 'slideimages',
				'type'				=> 'attach_images',
				'heading'			=> "Slider Images",
				'description'		=> "Please add your slider images here"
			],
			[
				'param_name'		=> 'title',
				'type'				=> 'textarea',
				'heading'			=> "Slider Title",
				'description'		=> "Please add your Slider Title here"
			],
			[
				'param_name'		=> 'subtitle',
				'type'				=> 'textarea',
				'heading'			=> "Slider Subtitle",
				'description'		=> "Please add your slider Subtitle here"
			],
			[
				'param_name'		=> 'link',
				'type'				=> 'vc_link',
				'heading'			=> "Slider link",
				'description'		=> "Please add your slider link here"
			],
			
		]
	]);
	
	}
	
	 // Dental Orange slider end 
	 
	 
	 
	 
	 // Dental Orange Block


		function home_block($one, $two){ 

			$blockhome = shortcode_atts( [
			
				'btitle'				=> '',
				'bsubtitle'				=> '',
				'bicon'					=> '',
				'homeblock'				=> '',

			], $one);

			ob_start();
		?>
		
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row equal-height-inner" data-margin-top="-150px">
		  
		  
		  
           <?php $bblocks =  vc_param_group_parse_atts($blockhome['homeblock']); 

				foreach($bblocks as $bblock) : ?>
			
			
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="<?php echo $bblock['bicon']; ?> text-theme-colored"></i> </a>
                    <h3 class="text-white"><?php echo $bblock['btitle']; ?></h3>
                    <p class="text-white"><?php echo $bblock['bsubtitle']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
			
			
			
			
          </div>
        </div>
      </div>
    </section>

	
	
	
	<?php 
		return ob_get_clean();
}
	add_shortcode('block','home_block');





	if( function_exists("vc_map") ){
		vc_map([
		'name'				=> "Home Block",
		'base'				=> 'block',
		'description'		=> "This is Home Block",
		'icon'				=> get_template_directory_uri(). '/images/logo.png',
		'params'			=> [
			[
				'param_name'		=> 'homeblock',
				'type'				=> 'param_group',
				'heading'			=> "Home Page Block Box",
				'description'		=> "Please add your Home Page Block Box here",
				"params"			=> [
						[
							'param_name'		=> 'btitle',
							'type'				=> 'textfield',
							'heading'			=> "Slider Title",
							'description'		=> "Please add your Slider Title here"
						],
						[
							'param_name'		=> 'bsubtitle',
							'type'				=> 'textfield',
							'heading'			=> "Slider Subtitle",
							'description'		=> "Please add your slider Subtitle here"
						],
					
						[
							'type'        => 'iconpicker',
							'heading'     => _x( 'Icon', 'backend', 'vc-elements-pt' ),
							'param_name'  => 'bicon',
							'value'       => 'fa fa-home',
							'settings'	  => [
								'emptyIcon'    => false, // default true, display an "EMPTY" icon?
								'iconsPerPage' => 100, // default 100, how many icons per/page to display
							],
						],
				
				],
			]
			
		]
	]);
	
	}
	
	
	
	
	
	
	
	// Dental Orange About


		function home_abouts($ones, $twos){ 

			$abouthomes = shortcode_atts( [
			
				'aaboutusus'				=> ' ',
				

			], $ones);

			ob_start();
		?>
		
    <!-- Section: about -->
    <section id="about">
    	<div class="container pt-0">
    		<div class="section-content">
    			<div class="row">
            <div class="col-md-8">
			
			
              <?php echo $abouthomes['aaboutusus']; ?>
			  
			  
              
              <div class="row mb-sm-30">
			  
			  
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box icon-left">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circled pull-left flip sm-pull-none" href="#">
                      <i class="flaticon-medical-first32 text-white"></i>
                    </a>
                    <h4 class="icon-box-title mt-10">Teeth Whitening</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box icon-left">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circled pull-left flip sm-pull-none" href="#">
                      <i class="flaticon-medical-brush18 text-white"></i>
                    </a>
                    <h4 class="icon-box-title mt-10">Teeth Cleaning</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box icon-left">
                    <a class="icon bg-theme-colored2 icon-circled icon-border-effect effect-circled pull-left flip sm-pull-none" href="#">
                      <i class="flaticon-medical-microscope13 text-white"></i>
                    </a>
                    <h4 class="icon-box-title mt-10">Oral surgery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box icon-left">
                    <a class="icon bg-theme-colored2 icon-circled icon-border-effect effect-circled pull-left flip sm-pull-none" href="#">
                      <i class="flaticon-medical-teeth2 text-white"></i>
                    </a>
                    <h4 class="icon-box-title mt-10">Quality Brackets</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur ipsum dolor.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border-3px p-30 pt-10 pb-20 border-theme-colored bg-theme-colored2">
                <h3 class="text-white">Request An Appointment!</h3>
                <p class="text-white mt-0">Just make an appointment to get help from our experts</p>

                <!-- Appontment Form Starts -->
                <form id="appointment_form_at_home" name="appointment_form_at_home" class="" method="post" action="includes/appointment.php">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input id="form_name" name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_appontment_date" class="form-control required datetime-picker" type="text" placeholder="Appoinment Date & Time" aria-required="true">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-10">
                    <textarea name="form_message" class="form-control required"  placeholder="Enter Message" rows="4" aria-required="true"></textarea>
                  </div>
                  <div class="form-group mb-0 mt-20">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

                <!-- Appointment Form Validation
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
            </div>
    			</div>
    		</div>
    	</div>
    </section>

	
	<?php 
		return ob_get_clean();
}
	add_shortcode('abouts','home_abouts');





	if( function_exists("vc_map") ){
		vc_map([
		'name'				=> "Home About",
		'base'				=> 'abouts',
		'description'		=> "This is Home About",
		'icon'				=> get_template_directory_uri(). '/images/logo.png',
		
		"class" => "vc_unslider",
		"category" => "Goldwatercap",
		"as_parent" => array('only' => 'unslider_item'),
		"content_element" => true,
        "show_settings_on_create" => true,
		
		
		'params'			=> [
			[
				'param_name'		=> 'aaboutusus',
				'type'				=> 'textarea_html',
				'heading'			=> "About Us Text",
				'description'		=> "Please add your About Us Text here"
			],
			
		]
	]);
	
	}