<?php 

   /* Template Name: Abhi My Organization Volunteer Request */

   if ( is_user_logged_in() ) {



    get_header('new'); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

<link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>

<!-- css links -->

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>

<style>

    .my_resources_table .table{border:none;}

    .tracking-temp .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

    padding: 1rem 0rem 2rem 0rem;

    margin-top: 40px;

    float: right;

}

.tracking-temp .tab-content>.active {

    margin-bottom: 25px;

}

.my_resources_table .table tr td{color: #242424;

    font-size: 14px;

    font-family: 'Poppins';

    font-weight: 400;}

    .nav{margin:0px;}

    .linked_blog{margin-left:12px;}

    .tracking_head{margin:0px!important;}

    .my_org_vol_req{padding:2rem 0rem; margin-bottom:20px;}

    .my_org_vol_req .org_vol{margin:0px 25px;}

    .my_org_vol_req .org_vol .main_flow div{padding:1rem 3rem 1rem 0rem;}

    .title_create h4 { font-size: 16px; color: #132843; margin: 1rem 0 1rem 0; font-weight: 600;}  

.title_create h4 span{ color: #F92903;}

.title_create p{font-size: 13px;  color: #000000;}

.g_donation_tab_pills .title_create {

    background: #f8f8f8;

    padding: 3px 26px;

    margin: 5px 0px 10px;

}



</style>



<div class="col-xl-12 coordination-center-tracking tracking-temp">

        <div class="row justify-content-end mt-3">



            <?php include('user_topbar.php')?>

        </div>



        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                    <div class="col-xl-8 col-lg-7 col-md-8 col-12">

                        <div class="notification_Sec_main">

                            <h5>Organization Volunteer Request</h5>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" >

                        <div class="back_btn">

                            <a href="#">Back</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 tracking_head my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between  flex-wrap px-0">

                    <div class="linked_blog">



                        <ul class="nav nav-pills justify-content-center" role="tablist">

                            <li class="nav-item">

                              <a class="nav-link active" data-toggle="tab" href="#my-reports" role="tab">

                                <i class="now-ui-icons objects_umbrella-13"></i>Reports

                              </a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" data-toggle="tab" href="#accepted-roles" role="tab">

                                <i class="now-ui-icons shopping_cart-simple"></i>Members Info

                              </a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" data-toggle="tab" href="#my-groups" role="tab">

                                <i class="now-ui-icons shopping_shop"></i>Requests

                              </a>

                            </li>

                            

                          </ul>

                        

                   </div>

                </div>

            </div>

        </div>







        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                    

                    <div class="tab-content col-xl-12">

                        <!--mt reports tabs-->

                        <div class="tab-pane active" id="my-reports" role="tabpanel">

                            <div class="mt-2">                               

                                <div class="my_org_vol_req disaster_p donation_tab_pills  g_donation_tab_pills">

                                    <div class="title_create">

                                        <h4>Contact Information</h4>

                                    </div>  

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Name of event</h4>

                                                    <p>Progressive Management - Covid 19</p>

                                                </div>

                                                <div>

                                                    <h4>Name of Organization</h4>

                                                    <p>Progressive Managment</p>

                                                </div>

                                                <div>

                                                    <h4>Contact Person</h4>

                                                    <p>Carol McGlynn</p>

                                                </div>

                                                <div>

                                                    <h4>Email Address</h4>

                                                    <p>rahimur.rahman@jjay.edu</p>

                                                </div>

                                                <div>

                                                    <h4>Address</h4>

                                                    <p>1044 Northern blvd</p>

                                                </div> 

                                                <div>

                                                    <h4>State</h4>

                                                    <p>NY</p>

                                                </div> 

                                                <div>

                                                    <h4>Website</h4>

                                                    <p>www.progressivemgmt.net</p>

                                                </div> 

                                                <div>

                                                    <h4>Title</h4>

                                                    <p>Operation Manager</p>

                                                </div> 

                                                <div>

                                                    <h4>Phone</h4>

                                                    <p>516-445-8780</p>

                                                </div>

                                                <div>

                                                    <h4>City</h4>

                                                    <p>Roslyn</p>

                                                </div>

                                                <div>

                                                    <h4>Zip code</h4>

                                                    <p>11576</p>

                                                </div>

                                                <div>

                                                    <h4>Mission</h4>

                                                    <p>Seeking to provide food services for tenants in need due to Covid 19 Virus.</p>

                                                </div>                                    

                                            </div>

                                        </div>

                                        <div class="title_create">

                                            <h4>Volunteer Service Location And Point Of Contact Point of contact</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Name of Organization</h4>

                                                    <p>Brooklyn Preservation</p>

                                                </div>                                                         

                                                <div>

                                                    <h4>Contact person</h4>

                                                    <p>Carol McGlynn</p>

                                                </div>                                                         

                                                <div>

                                                    <h4>Email address</h4>

                                                    <p>cmcglynn@progressivemgmt.net</p>

                                                </div>                                    

                                                <div>

                                                    <h4>Title</h4>

                                                    <p>Operations Manager</p>

                                                </div>                                                         

                                                <div>

                                                    <h4>Phone</h4>

                                                    <p>516-445-8780</p>

                                                </div>

                                                        

                                            </div>

                                        </div>  

                                        <div class="title_create">

                                            <h4>Point of contact</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Name of Organization</h4>

                                                    <p>Mission</p>

                                                </div>

                                                <div>

                                                    <h4>Name of Organization</h4>

                                                    <p>Carol McGlynn</p>

                                                </div>

                                                <div>

                                                    <h4>Email address</h4>

                                                    <p>cmcglynn@progressivemgmt.net</p>

                                                </div>

                                                <div>

                                                    <h4>Title</h4>

                                                    <p>Operations Manager</p>

                                                </div>                                                         

                                                <div>

                                                    <h4>Phone</h4>

                                                    <p>516-445-8780</p>

                                                </div>

                                            </div>

                                        </div>  

                                        <div class="title_create">

                                            <h4>Disaster Type</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Disaster Type</h4>

                                                    <p>Epidemic / Pandemic Outbreak</p>

                                                </div>                    

                                            </div>

                                        </div>  

                                        <div class="title_create">

                                            <h4>Volunteer Project Description</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Scope of Work</h4>

                                                    <p>Seeking food suppliers to help senior citizens in affordable housing in need of meal deliveries.</p>

                                                </div> 

                                                

                                            </div>

                                        </div>  

                                        <div class="title_create">

                                            <h4>Volunteer Service Details</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Start Date</h4>

                                                    <p>2020-05-01</p>

                                                </div>

                                                <div>

                                                    <h4>End Date</h4>

                                                    <p>2020-09-30</p>

                                                </div>

                                                <div>

                                                    <h4>Shift Start Date</h4>

                                                    <p>9:00</p>

                                                </div>

                                                <div>

                                                    <h4>Shift End Date</h4>

                                                    <p>9:00</p>

                                                </div>        

                                            </div>

                                        </div>

                                        <div class="title_create">

                                            <h4>Geographic Areas Volunteers Will Serve Within</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>State</h4>

                                                    <p>NY</p>

                                                </div>  

                                                <div>

                                                    <h4>Town</h4>

                                                    <p>Brooklyn</p>

                                                </div>  

                                                <div>

                                                    <h4>Zip Code</h4>

                                                    <p>112116</p>

                                                </div>  

                                            </div>

                                        </div>  

                                        <div class="title_create">

                                            <h4>Skills and Disqualifiers</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Disqualifiers</h4>

                                                    <p>Bad back</p>

                                                </div>  

                                            </div>

                                        </div>  

                                        <div class="title_create">

                                            <h4>Skills Needed</h4>

                                        </div>

                                        <div class="org_vol">

                                            <div class="main_flow flex-wrap">

                                                <div>

                                                    <h4>Skills Needed</h4>

                                                    <p>emergency services, evacuation, crowd control</p>

                                                </div>  

                                            </div>

                                        </div>  

                                    </div>

                                        <div class="row justify-content-center mb-5">

                                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                                                <div class="apply_btn ">

                                                <a href="#" data-toggle="modal" data-target="#track_delete"><button class="btn btn_apply">Delete</button></a>

                                                </div>   

                                            </div>

                                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                                                <div class="apply_btn active">

                                                    <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button>

                                                </div>

                                            </div>

                                        </div>

                                

                                        

                            </div>

                        </div>



                        <!--accepted roles tabs-->

                        <div class="tab-pane" id="accepted-roles" role="tabpanel">

                            <div class="my_resources_table table-7-col">

                                <div class="main_table_sec">

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                            <tr>

                                                <th scope="col">Member name</th>

                                                <th scope="col">City</th>

                                                <th scope="col">Email Address</th>

                                                <th scope="col">Phone</th>

                                                <th scope="col">Skills Needed</th>

                                                <th scope="col"></th>

                                            </tr>

                                            </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>Tirrell Richardson</td>

                                                        <td>New York</td>

                                                        <td>tirrellbmx@gmail.com</td>

                                                        <td>3479614321</td>

                                                        <td>Emergency Services</td>

                                                        <td><a href="/my-organization-volunteer-request/"><button class="btn btn_view btn-pdng btn-opacity">View</button></a></td>

                                                    </tr>    

                                                    <tr>

                                                        <td>Alida Cintron</td>

                                                        <td>Brooklyn</td>

                                                        <td>Atiahalshammari@unt.edu</td>

                                                        <td>3479614321</td>

                                                        <td>Emergency Services</td>

                                                        

                                                        <td><a href="/my-organization-volunteer-request/"><button class="btn btn_view btn-pdng btn-opacity">View</button></a></td>

                                                    </tr>    

                                                    <tr>

                                                        <td>Atiah Alshammari</td>

                                                        <td>Roslyn</td>

                                                        <td>operations@worldcares.org</td>

                                                        <td>3479614321</td>

                                                        <td>Food Services</td>

                                                        

                                                        <td><a href="/my-organization-volunteer-request/"><button class="btn btn_view btn-pdng btn-opacity">View</button></a></td>

                                                    </tr>    

                                                    <tr>

                                                        <td>Dr.Edward Williams</td>

                                                        <td>Queens</td>

                                                        <td>tirrellbmx@gmail.com</td>

                                                        <td>3479614321</td>

                                                        <td>Food Services</td>

                                                    

                                                        <td><a href="/my-organization-volunteer-request/"><button class="btn btn_view btn-pdng btn-opacity">View</button></a></td>

                                                    </tr>                           

                                                                        

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>  

                            </div>





                        <!--my groups tab-->

                        <div class="tab-pane" id="my-groups" role="tabpanel">



                            <div class="my_resources_table table-7-col">

                                    <div class="main_table_sec">

                                            <div class="table-responsive">

                                             <table class="table">                            

                                                <thead>

                                                  <tr>

                                                    <th scope="col">Date of Submission</th>

                                                    <th scope="col">Contact Person</th>

                                                    <th scope="col">City</th>

                                                    <th scope="col">Email Address</th>

                                                    <th scope="col">Phone</th>

                                                    <th scope="col">Skills Needed</th>

                                                    <th scope="col">

                                                    <th>Accept</th>

                                                    <th>Reject</th>

                                                    </th>

                                                  </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>

                                                        <td>September 06, 2022</td>

                                                        <td>Tirrell Richardson</td>

                                                        <td>New York</td>

                                                        <td>tirrellbmx@gmail.com</td>

                                                        <td>3479614321</td>

                                                        <td>Emergency Services</td>

                                                        <td><a href="/disaster-situational-report/"><button class="btn btn_view btn-pdng">Track</button></a></td>

                                                        <td><a href="/disaster-situational-report/"><button class="btn btn_view btn-pdng">Track</button></a></td>

                                                    </tr>    

                                                    <tr>

                                                        <td>August 29, 2022</td>

                                                        <td>Atiah Alshammari</td>

                                                        <td>Brooklyn</td>

                                                        <td>Atiahalshammari@unt.edu</td>

                                                        <td>3479614321</td>

                                                        <td>Emergency Services</td>

                                                        <td><button class="btn btn_view btn-pdng btn-opacity">Applied</button></td>

                                                    </tr>    

                                                    <tr>

                                                        <td>November 09, 2022</td>

                                                        <td>Alida Cintron</td>

                                                        <td>Roslyn</td>

                                                        <td>operations@worldcares.org</td>

                                                        <td>3479614321</td>

                                                        <td>Food Services</td>

                                                        <td><button class="btn btn_view btn-pdng">Track</button></td>

                                                    </tr>    

                                                    <tr>

                                                        <td>November 14, 2022</td>

                                                        <td>Dr.Edward Williams</td>

                                                        <td>Queens</td>

                                                        <td>tirrellbmx@gmail.com</td>

                                                        <td>3479614321</td>

                                                        <td>Food Services</td>

                                                        <td><button class="btn btn_view btn-pdng">Track</button></td>

                                                    </tr>                           

                                                                           

                                                </tbody>

                                              </table>

                                          </div>

                                    </div>

                            </div> 

                                

                        </div>

                        <!--my blogs tab-->

                    </div>

                </div>

            </div>

        </div>



        <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex justify-content-between  flex-wrap">

         <div class="col-xl-3 col-lg-3 col-md-3 col-12">

            <div class="footer_logo">

               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid">

            </div>

         </div>

         <div class="col-xl-8 col-lg-9 col-md-9 col-12">

            <div class="side_right_footer ">

               <div class="social_icon_sec">

                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid"></a>

                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid"></a>

                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid"></a>

                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid"></a>

               </div>

               <div class="linked_pages">

                  <a href="<?php echo get_site_url(); ?>/">HOME</a>

                  <a href="<?php echo get_site_url(); ?>/what-we-do/">WHAT WE DO</a>

                  <a href="<?php echo get_site_url(); ?>/world-cares-center/">WORLD CARES CENTER</a>

                  <a href="<?php echo get_site_url(); ?>/training/">TRAINING</a>

                  <a href="<?php echo get_site_url(); ?>/cordination/">COORDINATION</a>

                  <a href="<?php echo get_site_url(); ?>/blogs/">BLOG</a>

                  <a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT US</a>

                  <a href="#">DONATE</a>

               </div>

               <div class="privercy_pag">

                  <a href="<?php echo get_site_url(); ?>/terms-of-use/">TERMS OF USE</a>

                  <a href="<?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY  </a>

                  <a href="#">SITEMAP</a>

               </div>

            </div>

            <div class="copy_right_Sec">

               <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>

            </div>

         </div>

      </div>

                  

    </div>





    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

              <div class="modal-content">

            

                <div class="modal-body">

                

                <div class="blog_grid">

                    <div class=" created-resource-form">

                        <form class="row">

                            <div class="col-xl-12 col-lg-10">

                                <div class="form-group calendar-sec">

                                    <label for="exampleInputPassword1">Short By Date</label>

                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Select Date">

                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-10">

                                <div class="form-group select_sec">

                                    <label for="exampleFormControlSelect1">Short by City</label>

                                    <select class="form-control" id="exampleFormControlSelect1">

                                      <option>Select</option>

                                      <option>Male</option>

                                      <option>Female</option>

                                      <option>Other</option>                                                      

                                    </select>

                                  </div>

                            </div>

                            <div class="col-xl-12 col-lg-10">

                                <div class="form-group">

                                    <label for="exampleFormControlSelect1">Short by Name</label>

                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter here">

                                  </div>

                            </div>

                                                                        

                        </form>                                

                        <div class="row mt-4 d-flex justify-content-center">

                            <div class="col-xl-6 col-lg-10">

                                <div class="cancal_btn">

                                    <button class="btn btn_cancal">Cancal</button>

                                </div>

                            </div>

                            <div class="col-xl-6 col-lg-10">

                                <div class="update_btn">

                                    <button class="btn btn_update">Update</button>

                                </div>

                            </div>

                        </div>

                    </div>

                                </div>

                             

                </div>

                <!--   <div class="modal-footer" style="border-top:none;">

                

                  <center>

                  <div class="apply_btn active">

                                <button class="btn btn_apply">Done</button>

                            </div>

                            </center>

                            </div> -->

                </div>

                

              </div>

            </div>  







<!-- js links -->

<script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/jquery.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/popper.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/bootstrap.min.js"></script>   

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/owl.carousel.min.js"></script>



    <script>      

        $(document).ready(function() {  

       

        $(".next").click(function() {

            let previous = $(this).closest("fieldset").attr('id');

            let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');

            if(previous == "step0"){

                console.log(previous);

               $('#'+next).show();

                $('#'+previous).hide();

            } 

            else if(previous == "step1"){

                $('#'+next).show();

                $('#'+previous).hide();

            }      

        }); 

        

    });

    $(".previous").click(function() {

        let current = $(this).closest("fieldset").attr('id');

        let previous = $('#'+this.id).closest('fieldset').prev('fieldset').attr('id');

        $('#'+previous).show();

        $('#'+current).hide();

    }); 

    </script>













<?php get_footer('new'); } ?>