
<div class="row d-flex justify-content-end w-100 ml-0">
  <div class="col-xl-11 col-lg-12 col-md-10 col-10 main_footer_sec d-flex align-items-center mt-0 flex-wrap">
    <footer class="row w-100 d-flex">
      <div class="col-xl-2 col-lg-2 col-md-2 col-12">
        <div class="footer_logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid logos">
        </div>
      </div>
      <div class="col-xl-10 col-lg-10 col-md-10 col-12">
        <div class="side_right_footer ">
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
          <div class="linked_pages">
              <a href="<?php echo get_site_url(); ?>/">HOME</a>
              <a href="<?php echo get_site_url(); ?>/what-we-do/">WHAT WE DO</a>
              <a href="<?php echo get_site_url(); ?>/world-cares-center/">WORLD CARES CENTER</a>
              <a href="<?php echo get_site_url(); ?>/training-old/">TRAINING</a>
              <a href="<?php echo get_site_url(); ?>/coordination/">COORDINATION</a>
              <a href="<?php echo get_site_url(); ?>/blogs/">BLOG</a>
              <a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT US</a>
              <a href="<?php echo get_site_url(); ?>/donate-2/" target="_blank">DONATE</a>
          </div>
          <div class="privercy_pag">
              <a href="<?php echo get_site_url(); ?>/terms-of-use/">TERMS OF USE</a>
              <a href="<?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY  </a>
              <a href="<?php echo get_site_url(); ?>/sitemap" target="_blank">SITEMAP</a>
          </div>                            
        </div>
        <div class="copy_right_Sec">
            <p>COPYRIGHT © <?php echo date('Y'); ?> ALL RIGHTS RESERVED</p>
        </div>
      </div> 
    </footer>
  </div>
</div>

<script src='<?php echo get_template_directory_uri(); ?>/js/moment.min.js'></script>
    <!-- <script src='js/fullcalendar.min.js'></script> -->


<!--<script src='<//?php echo get_template_directory_uri(); ?>/js/sweetalert.min.js'></script>-->


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
<script src='<?php echo get_template_directory_uri(); ?>/js/fullcalendarxx.min.js'></script>
 <!--<script src='<?php echo get_template_directory_uri(); ?>/js/sweetalert.min.js'></script>-->
 <script src='<?php echo get_template_directory_uri(); ?>/packages/list/main.js'></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<!-- <script src='<?= wp_plugin_dir();?>/ultimate-member/assets/js/select2/select2.full.min.js?ver=4.0.13' id='select2-js'></script> -->
<script src="<?= wp_plugin_dir();?>/addon-elements-for-elementor-page-builder/assets/js/iconHelper.js?ver=1.0" id="eae-iconHelper-js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/select2/select2.full.js"></script>


<script>
  ClassicEditor
    .create( document.querySelector( '.mytextarea' ) )             
</script>
<script type="text/javascript">
    function fileupload(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreviewFile').css('background-image', 'url('+e.target.result +')');
                $('#imagePreviewFile').hide();
                $('#imagePreviewFile').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fileUpload").change(function() {
        fileupload(this);
    });
    $(document).ready(function() {
        $('.js-example-placeholder-multiple').select2();
         placeholder: "Tags"
    });
</script>
<script>
        jQuery(".postcls-trigger").on("click", function() {
        var dataId = jQuery(this).data("id");
            jQuery(".accordian_Sec").removeClass("active");
            jQuery("#"+dataId).addClass("active");

        });
</script>

 <script>
    function validatePhone(phone) {
    var re = /^\d{10}$/; //for exact 10 digits
    var re1 = /^(\d{4}\s)?\d{7}$/; // for phone if you don't need space remove \s
    if (re.test(phone)) {
        document.getElementById('phone').style.color = 'green';
        //document.getElementById('phoneError').style.display = "none";
        return true;
    } else if (re1.test(phone)) {
        document.getElementById('phone').style.backgroundColor = 'white';
    } else {
        document.getElementById('phone').style.color = 'red';
        document.getElementById('phone').focus();
        return false;
    }
}

$("#phone").on("blur", function () {
    validatePhone($(this).val());
});
 </script>
 






