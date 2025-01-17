<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();

	astra_footer_after(); 
?>

<!-- Footer Vinay -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-12">
        <div class="image">
          <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/wcc-footer-logo.png" align="Wcc" width="" height="" class="lazy" />
        </div>
      </div>
      <div class="col-xl-9  col-lg-9 col-md-9  d-md-flex justify-content-md-end  d-lg-flex justify-content-lg-end d-xl-flex justify-content-xl-end">
        <div class="w-100">
          <div class="social-icon d-md-flex justify-content-md-end  d-lg-flex justify-content-lg-end d-xl-flex justify-content-xl-end">
            <div class="d-flex">
              <a href="https://www.linkedin.com/in/world-cares-center-9ab78387/" title="Linkedin" target = "_blank">
                <div class="icon">
                  <span class="icon-linkedin"></span>
                </div>
              </a>
              <a href="https://www.facebook.com/theworldcarescenter/" target = "_blank" title ="facebook">
                <div class="icon" title="Facebook">
                  <span class="icon-facebook"></span>
                </div>
              </a>
              <a href="https://twitter.com/worldcares?lang=en" title="Twitter" target="_blank">
                <div class="icon">
                  <span class="icon-twitter"></span>
                </div>
              </a>
              <a href="https://www.instagram.com/worldcarescenter/" title="Instagram" target="_blank">
                <div class="icon">
                  <span class="icon-instagram"></span>
                </div>
              </a>
              
              <a href="https://www.youtube.com/@WorldCaresCenterInc/videos" title="Youtube" target="_blank">
                <div class="icon">
                  <span class="icon-youtube"></span>
                </div>
              </a>
              
            </div>
          </div>
          <div class="footer-link  d-md-flex justify-content-md-end  d-lg-flex justify-content-lg-end d-xl-flex justify-content-xl-end">
            <ul>
              <li>
                <a href="<?php echo site_url();?>" title="Home">Home</a>
              </li>
              <li>
                <a href="<?php echo site_url('what-we-do');?>" title="What We Do">What We Do</a>
              </li>
              <li>
                <a href="<?php echo site_url('world-cares-center')?>" title="World Cares Center">World Cares Center</a>
              </li>
              <li>
                <a href="<?php echo site_url('training-old')?>" title="Training">Training</a>
              </li>
              <li>
                <a href="<?php echo site_url('coordination')?>" title="Coordination">Coordination</a>
              </li>

              <li>
                <a href="<?php echo site_url('blogs')?>" title="Blog">Blog</a>
              </li>
              <li>
                <a href="<?php echo site_url('contact-us')?>" title="Contact Us">Contact Us</a>
              </li>
              <li>
                <a href="<?php echo site_url('donate-2')?>" title="Donate">Donate</a>
              </li>
            </ul>
          </div>
          <div class="d-xl-flex justify-content-xl-end d-md-flex justify-content-md-end d-lg-flex justify-content-lg-end">
            <div class="footer-link-II">
              <ul>
                <li>
                  <a href="<?php echo site_url('terms-of-use')?>" title="Terms of Use">Terms of Use</a>
                </li>
                <li>|</li>
                <li>
                  <a href="<?php echo site_url('privacy-policy')?>" title="Privacy policy">Privacy policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="<?php echo site_url('sitemap')?>" title="Sitemap">Sitemap</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="border-bottom"></div>
          <div class="copyright">
            <div class="d-xl-flex justify-content-xl-end d-md-flex justify-content-md-end d-lg-flex justify-content-lg-end">
              <div class="footer-link-II">
                <p>Copyright © <?php echo date('Y'); ?> All Rights Reserved</p>
              </div>
            </div>
          </div>
          
          
          

        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Footer vinay-->




	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
	
	

	
?>
<script type="text/javascript">
	function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script> -->

<!--<script src="<?//php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lazyload.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js" type="text/javascript"></script>
<script type="text/javascript">

  window.addEventListener("resize", function() {
    "use strict"; window.location.reload(); 
  });


  document.addEventListener("DOMContentLoaded", function(){

    // make it as accordion for smaller screens
    if (window.innerWidth > 320) {

      document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
        
        everyitem.addEventListener('mouseover', function(e){

          let el_link = this.querySelector('a[data-bs-toggle]');

          if(el_link != null){
            let nextEl = el_link.nextElementSibling;
            el_link.classList.add('show');
            nextEl.classList.add('show');
          }
          
        });
        everyitem.addEventListener('mouseleave', function(e){
          let el_link = this.querySelector('a[data-bs-toggle]');
          
          if(el_link != null){
            let nextEl = el_link.nextElementSibling;
            el_link.classList.remove('show');
            nextEl.classList.remove('show');
          }
          

        })
      });

    }
    // end if innerWidth
  }); 
  // DOMContentLoaded  end

</script>

  

	</body>
</html>
