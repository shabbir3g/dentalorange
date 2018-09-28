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
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            
            <!-- Contact Form -->
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
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>

            
          </div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0">Get in touch with us</h3>
            <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus.</p>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
              <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>
            </ul>

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Our Office Location</h5>
                <p>#405, Lan Streen, Los Vegas, USA</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+325-12345-65478">+325-12345-65478</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Email Address</h5>
                <p><a href="mailto:supporte@yourdomin.com">supporte@yourdomin.com</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Make a Video Call</h5>
                <p>ThemeMascotSkype</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.922552700279!2d-117.88797298479396!3d33.71095288070026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd8d111d9280f%3A0xd18aeee755ca4ecc!2sOC+Dental+Center!5e0!3m2!1sen!2sbd!4v1538159809730" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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