<?php 

/* Template Name: Knowledge Check */

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

                            <h4>Course Content</h4>

                            <div class="bar">

                                <p>66%</p>

                                <div class="wrapper">

                                    <div class="progress"></div>

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

                                        <span>Course Contentsdadsas</span>

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

                                    

                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type pecimen book. It has survived not only five centuries.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/knowledge-center-course-detail/"><button class="next-continue">Start Quiz</button></a>

                                </div>

                                

                            </div>

                        </div>

                    </div>  

                </div>  

            </div>



            

           



<?php get_footer('new'); ?>



