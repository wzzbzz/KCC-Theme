<?php 

   /* Template Name: Abhi Knowledge Center Course List */

   if ( is_user_logged_in() ) {



    get_header('dashboard'); ?>


<div class="col-xl-12 coordination-center-tracking my-resources-temp knolw_cen_cour">

    <div class="container">

        <div class="row">

            <div class="col-md-12 mt-5">

                <div class="course-info-course course_listing-1 d-flex align-items-center justify-content-center">

                    <div class="col-md-10 mt-5">

                        <div class="row mt-5">

                            <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dva-slide2-scaled-1.png" class="img-fluid">

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>The Collaborative Disaster Volunteer Credential Level 1</h4>

                                    <p>

                                       This course contains 10 one hour lessons:   Know Before You Go, Introduction to: Disaster Management, Physical Safety, First Aid, CPR,  Infectious Disease Awareness, Flood response, Food Distribution, and Emotional Resiliency At the end of this training participants will have gained an understanding of what to expect when volunteering during a disaster, assessed suitable roles that meet their physical and mental health and understand the risks associated with volunteering during disasters and crisis.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/level-one-course-list/">

                                    <button class="btn btn-primary mt-4"> View Course </button>

                                    </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>The Collaborative Disaster Volunteer Credential Level 2</h4>

                                    <p>

                                        After completing DV1 Learners can move on to take this intermediate course that contains 12 hours of lessons.  At the end of this training participants will have gained an understanding of specific skills need to stay safe and conduct field response including muck and gut operations. Important health and safety protocols are presented as common standards that all members adopting the credential agree to follow. 

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/level-two-course-list/">

                                      <button class="btn btn-primary mt-4"> View Course </button>

                                   </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Intro-to-disaster-volutneerism-safety.jpg" class="img-fluid">

                            </div>



                            <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dva-slide2-scaled-1.png" class="img-fluid">

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>The Collaborative Disaster Volunteer Credential Level 3: Management</h4>

                                    <p>

                                        After completing DV1 and DV2 move on to take this Management level course that contains 20 hours of lessons including participation in an interactive exercise so that you may apply your skills to applicable scenarios and case studies. At the end of this training participants will have gained an understanding of how to prepare plans that effectively place volunteers in roles that are an appropriate risk level, effective management skills using ICS and how to maintain an emotional resilient team. Managers will apply methods on how to keep their team physically and emotionally safe as well as applying self-care strategies in the role of a disaster manager. Participants will learn field management strategies including how to set up and manage volunteer teams in various functions. 

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/level-three-course-list/">

                                    <button class="btn btn-primary mt-4"> View Course </button>

                                </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
       
</div>


<?php get_footer(); } ?>