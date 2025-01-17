<?php 

/* Template Name: Course Content */



get_header('new') ?>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



<style type="text/css">

   

    .course-content p{

        letter-spacing: 0px;

        color: #132843;

        opacity: 1;

        font-size: 16px;

        font-family: 'Poppins';

        font-weight: 600;

    }

    .course_content_title h1{

        font-family: 'Poppins';

        font-weight: 500;

        color: #132843;

        letter-spacing: 0.44px;

    }

    .course-content{

        margin-top: 10px;

    }

    .course-introduction-in-detail{

        padding: 70px;

    }

    .description {

        padding: 30px 50px 0px 0px;

        font-family: 'Poppins';

        font-weight: 400;

        color: #222222;

        line-height: 32px;

    }

</style>



<div class="col-xl-12 ">

    <div class="row justify-content-end mt-3 ">

         <?php include('user_topbar.php')?>     

        <div class="row justify-content-end mt-3 ">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  ">

                <div class=" col-xl-11 top_center_main-course-content d-flex flex-wrap">

                    <div class="col-xl-6 col-lg-6">

                        <div class="side_left_sec">

                            <h4>Course Content</h4>

                        </div>

                    </div>     

                    <div class="col-xl-6 col-lg-6 px-0">

                        <div class="right_coordination">

                            <div class="back_btn course_content">

                                <a href="<?php echo get_site_url(); ?>/knowledge-center/">Back</a>

                            </div>

                        </div>

                    </div>    

                </div>  

            </div>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  ">

                <div class=" col-xl-11 top_center_main d-flex flex-wrap">

                    <div class="col-xl-3 col-lg-6">

                        <div class="side_left_sec">

                            <div class="container-detailed-center">

                                <form>

                                    <label>

                                        <input type="radio" name="radio" style="display:none;" checked/>

                                        <span>Course Content</span>

                                    </label>

                                    <label>

                                        <input type="radio" style="display:none;" name="radio"/>

                                        <span>Evaluation</span>

                                    </label>

                                    <label>

                                        <input type="radio" style="display:none;" name="radio"/>

                                        <span>Knowledge Check</span>

                                    </label>

                                </form>

                            </div>

                        </div>

                    </div>     

                    <div class="col-xl-9 col-lg-6 px-0 ">

                        <div class="right_coordination course_content_title ">

                            <h1>Course Content</h1>

                            <div class="course-content">

                                <p>COVID-19 Emotional Resiliency for Disaster Volunteers & Workers</p>

                            </div>

                            <div class="course-introduction-in-detail">

                                <div class="course-introduction">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78197.png" alt="">

                                    <p>COVID-19 Emotional <br> Resiliency for Disaster <br> Volunteers & Workers</p>

                                    <a href="#" ><button class="start">Start Course</button></a>

                                    <a href="#" ><button class="details" >Details</button></a>

                                </div>

                                <div class="description">

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries

                                    <a href="<?php echo get_site_url(); ?>/detailed-course-content/">

                                        <div class="course-lesson">

                                            <div class="lesson">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78048.svg" alt="">

                                                <p>About World Cares Center</p>

                                            </div>

                                        </div>

                                    </a>

                                    <a href="<?php echo get_site_url(); ?>/detailed-course-content/">

                                        <div class="course-lesson">

                                            <div class="lesson">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78048.svg" alt="">

                                                <p>Agenda & Course Introduction</p>

                                            </div>

                                        </div>

                                    </a>

                                    <a href="<?php echo get_site_url(); ?>/detailed-course-content/">

                                        <div class="course-lesson">

                                            <div class="lesson">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78048.svg" alt="">

                                                <p>Chapter 1: OSHA Guidelines & Employer Responsibilities and Ethical Volunteer Management</p>

                                            </div>

                                        </div>

                                    </a>

                                    <a href="<?php echo get_site_url(); ?>/detailed-course-content/">

                                        <div class="course-lesson">

                                            <div class="lesson">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78048.svg" alt="">

                                                <p>Chapter 2: Disasters Will Induce Stress</p>

                                            </div>

                                        </div>

                                    </a>

                                    <a href="<?php echo get_site_url(); ?>/detailed-course-content/">

                                        <div class="course-lesson">

                                            <div class="lesson">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78048.svg" alt="">

                                                <p>Chapter 3: COVID-19 Creates Additional Stress</p>

                                            </div>

                                        </div>

                                    </a>

                                    <a href="<?php echo get_site_url(); ?>/detailed-course-content/">

                                        <div class="course-lesson">

                                            <div class="lesson">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 78048.svg" alt="">

                                                <p>Chapter 4: Defining Resiliency</p>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>  

                </div>  

                <center>

                    <a href="#">

                        <button class="next-lesson">Next Lesson</button>

                    </a>

                </center>

            </div>



            

           



<?php get_footer('new'); ?>



