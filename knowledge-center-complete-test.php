<?php 

/* Template Name: Complete Test */

get_header('new') ?>



<div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">

             <?php include('user_topbar.php')?>

        </div>        



        <div class="row justify-content-end mt-3">





            <div class="col-xl-11 col-lg-11 col-md-11 col-10  ">

                <div class=" col-xl-11 top_center_main-course-content d-flex flex-wrap">

                    <div class="col-xl-6 col-lg-6">

                        <div class="side_left_sec">

                            <h4>Knowledge Check</h4>

                            <div class="bar">

                                <p>100%</p>

                                <div class="wrapper">

                                    <div class="progress_2"></div>

                                </div>

                            </div>

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

                                        <input type="radio" name="radio" style="display:none;" disabled/>

                                        <span>Course Content</span>

                                    </label>

                                    

                                    <label>

                                        <input type="radio" style="display:none;" name="radio" disabled/>

                                        <span>Evaluation</span>

                                    </label>

                                    <label>

                                        <input type="radio" style="display:none;" name="radio" checked/>

                                        <span>Knowledge Check</span>

                                    </label>

                                </form>

                            </div>

                        </div>

                    </div>     

                    <div class="col-xl-9 col-lg-6 px-0">

                        <div class="right_coordination course_content_title">

                            <h1>Knowledge Check</h1>

                            <div class="course-content">

                                <p>COVID-19 Emotional Resiliency for Disaster Volunteers & Workers</p>

                            </div>

                            <div class="course-introduction-in-detail">

                                <div class="knowledge-course-introduction">

                                    <h1>DV 101 COVID-19 Emotional Resiliency for Disaster Volunteers & Workers</h1>

                                    <center>

                                        <div class="complete-test">

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 74139.png" alt="">

                                            <h1>Congratulation, You have Passed <br> Test Successfully</h1>

                                            <p>Q14 out of 15 will be right</p>

                                            <a href="<?php echo get_site_url(); ?>/knowledge-center/"><button class="next-continue">Back to Course</button></a>

                                        </div>

                                    </center>

                                    

                                </div>

                                

                            </div>

                        </div>

                    </div>  

                </div>  

            </div>



            

           



<?php get_footer('new'); ?>



