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
      <div class="col-xl-3 col-12">
        <div class="image">
          <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/wcc-footer-logo.png" align="Wcc" width="" height="" class="lazy" />
        </div>
      </div>
      <div class="col-xl-9  d-xl-flex justify-content-xl-end">
        <div class="w-100">
          <div class="social-icon d-xl-flex justify-content-xl-end">
            <div class="d-flex">
              <a href="javascript:void(0);" title="Linkedin">
                <div class="icon">
                  <span class="icon-linkedin"></span>
                </div>
              </a>
              <a href="javascript:void(0);">
                <div class="icon" title="Facebook">
                  <span class="icon-facebook"></span>
                </div>
              </a>
              <a href="javascript:void(0);" title="Twitter">
                <div class="icon">
                  <span class="icon-twitter"></span>
                </div>
              </a>
              <a href="javascript:void(0);" title="Instagram">
                <div class="icon">
                  <span class="icon-instagram"></span>
                </div>
              </a>
            </div>
          </div>
          <div class="footer-link  d-xl-flex justify-content-xl-end">
            <ul>
              <li>
                <a href="javascript:void(0)" title="Home">Home</a>
              </li>
              <li>
                <a href="javascript:void(0)" title="What We Do">What We Do</a>
              </li>
              <li>
                <a href="javascript:void(0)" title="World Cares Center">World Cares Center</a>
              </li>
              <li>
                <a href="javascript:void(0)" title="Training">Training</a>
              </li>
              <li>
                <a href="javascript:void(0)" title="Coordination">Coordination</a>
              </li>

              <li>
                <a href="javascript:void(0)" title="Blog">Blog</a>
              </li>
              <li>
                <a href="javascript:void(0)" title="Contact Us">Contact Us</a>
              </li>
              <li>
                <a href="javascript:void(0)" title="Donate">Donate</a>
              </li>
            </ul>
          </div>
          <div class="d-xl-flex justify-content-xl-end">
            <div class="footer-link-II">
              <ul>
                <li>
                  <a href="javascript:void(0)" title="Terms of Use">Terms of Use</a>
                </li>
                <li>|</li>
                <li>
                  <a href="javascript:void(0)" title="Privacy policy">Privacy policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="javascript:void(0)" title="Sitemap">Sitemap</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="border-bottom"></div>
          <div class="copyright">
            <div class="d-xl-flex justify-content-xl-end">
              <div class="footer-link-II">
                <p>Copyright © <?php echo 'Y'; ?> All Reserved</p>
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lazyload.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js" type="text/javascript"></script>
	</body>
</html>
