<?php

/* Template Name: Level Three Course List */

if (is_user_logged_in()) {



   get_header('dashboard'); ?>


   <div class="col-xl-12 coordination-center-tracking my-resources-temp knolw_cen_cour">






      <div class="mt-5">

         <div class="row">

            <div class="col-md-12">

               <div class="course_listing ml-4">



                  <?php echo do_shortcode('[level_three]'); ?>



               </div>

            </div>

         </div>

      </div>

   </div>

<?php get_footer();
} ?>