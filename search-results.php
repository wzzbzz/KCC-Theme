<?php 

   /* Template Name: Search Result */

if (!is_user_logged_in() ){

    wp_redirect( 'login' );

} else{ get_header('new'); 

   global $post;

   include('aq_resizer.php');



$current_user_id = get_current_user_id();

$searchKeyword = "";

if(!empty($_GET['q'])){

    $searchKeyword = $_GET['q'];

}



// Get Courser Search List

$courseArgs = array(

                        'numberposts'   => 200,

                        'order'     => 'DESC',

                        'post_type'      => 'sfwd-courses',

                        'post_status' => 'publish'

                        );

if(!empty($searchKeyword)){                                          

    $courseArgs['s'] = $_GET['q'];

}



$couserList = get_posts( $courseArgs );



// Get Blog Search List

$blogArgs = array(

                    'numberposts'   => 200,

                    'order'     => 'DESC',

                    'post_type'      => 'post',

                    'post_status' => 'publish'

                );

if(!empty($searchKeyword)){                                          

    $blogArgs['s'] = $_GET['q'];

}



$blogList = get_posts( $blogArgs );





// Get Group Search List

$groupArgs = array(

                    'numberposts'   => 200,

                    'order'     => 'DESC',

                    'post_type'      => 'groups',

                    'post_status' => 'publish'

                );

if(!empty($searchKeyword)){                                          

    $groupArgs['s'] = $_GET['q'];

}



$groupList = get_posts( $groupArgs );



// Get Report & Form Search List

$reportArgs = array(

                    'numberposts'   => 200,

                    'order'     => 'DESC',

                    'post_type'      => 'reportsforms',

                    'post_status' => 'publish'

                );

if(!empty($searchKeyword)){                                          

    $reportArgs['s'] = $_GET['q'];

}



$reportList = get_posts( $reportArgs );







function addNotification($msg_type,$send_to,$msg="",$post_id=""){

    global $wpdb;

    $current_user_id = get_current_user_id();

    $insertData = array(

                            'msg_type' => $msg_type,

                            'send_from' => $current_user_id,

                            'send_to' => $send_to,

                            'msg' => $msg,

                            'post_id' => $post_id

                        ); 

     $insertId = $wpdb->insert('notifications',$insertData);

     return  $insertId;

}

function getUserNotifications(){

     global $wpdb;

    $current_user_id = get_current_user_id();

    $sql = "SELECT * FROM notifications WHERE send_to = '".$current_user_id."' AND read_status = 0 ";

    $nlist = $wpdb->get_results( $sql,ARRAY_A);

     return  $read_status;

}



function readNotification($id){

    global $wpdb;

    $current_user_id = get_current_user_id();

    $resData = $wpdb->update('notifications', array('read_status'=>'1'),

                                 array('id' => $id,'send_to'=>$current_user_id)

                             );

}





?>



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

</style>



<!--Header-->



<div class="col-xl-12 coordination-center-tracking tracking-temp">

    <div class="row justify-content-end mt-3">

 <?php include('user_topbar.php')?>

</div>





<div class="row d-flex justify-content-end serach-result-page">

    <div class="col-xl-11 col-lg-11 col-md-10 col-10">

        <div class="row justify-content-center">

            <div class="col-lg-8 col-xl-8">

                <div class="tab-section">

                    <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link active" id="pills-knowledge-center-tab" data-toggle="pill" href="#pills-knowledge-center" role="tab" aria-controls="pills-knowledge-center" aria-selected="true">Knowledge Center</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-groups-tab" data-toggle="pill" href="#pills-groups" role="tab" aria-controls="pills-groups" aria-selected="false">Groups</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-reports-froms-tab" data-toggle="pill" href="#pills-reports-froms" role="tab" aria-controls="pills-reports-froms" aria-selected="false">Reports & Froms</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="false">Blogs</a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-xl-12">

                <div class="tab-content tab-content-section" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-knowledge-center" role="tabpanel" aria-labelledby="pills-knowledge-center-tab">

                        <div class="row mt-4">

                            <?php 

                            if(!empty($couserList))

                            {

                             foreach($couserList as $course)

                             {



                                $progress= learndash_user_get_course_progress(get_current_user_id(),  $course->ID, $type = 'summary' );

                                $percentage = $progress['completed'] / $progress['total'];

                                if($percentage<=0){

                                    $percentage =0; 

                                }                              

                            

                            ?>    

                            <div class="col-xl-6">

                                <div class="right-part">

                                    <div class="card-box">

                                        <div class="row w-100">

                                            <div class="col-xl-4 pr-0">

                                                <div class="image">

                                            <a href="<?php the_permalink($course->ID); ?>">       

                                            <?php

                                            $img = get_the_post_thumbnail_url($course->ID,'thumbnail');



                                            if($img) { ?>

                                            <img src="<?php echo aq_resize($img, 343, 373, true); ?>" alt="">

                                            <?php } else { ?>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage-1.png" class="img-fluid" alt="image">

                                            <?php } ?>

                                        </a>

                                                </div>

                                            </div>

                                            <div class="col-xl-8">

                                                <div class="">

                                                    <div class="w-100">

                                                        <div class="card-box-title">

                                                            <h4><?php  echo mb_strimwidth($course->post_title, 0, 40, '...');?></h4>

                                                        </div>

                                                        <div class="d-flex w-100">

                                                            <div class="hour mr-3">

                                                                <span>

                                                                    <?php echo get_field('course_hour',$course->ID); ?>total hour

                                                                </span>

                                                            </div>

                                                            <div class="all">

                                                                <span>All Levels</span>

                                                            </div>

                                                        </div>

                                                        <div class="content-text">

                                                            <?php echo  wp_trim_words(get_field('course_description', $course->ID),15);?>

                                                        </div>

                                                        <div class="progress">

                                                            <div class="progress-bar" style="width:<?php echo $percentage?>%"><span class="progress-value"><?php echo $percentage?>%</span></div>

                                                        </div>

                                                    </div>

                                                    <div class="rating-section">

                                                        <div class="d-flex">

                                                            <div class="icon">

                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                            </div>

                                                            <div class="mx-2">

                                                                <b>4.3</b>

                                                            </div>

                                                            <div class="review">

                                                                <span>(40 Reviews)</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <?php } 

                        }

                        else{

                            echo "No course found";

                        }?>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-groups" role="tabpanel" aria-labelledby="pills-groups-tab">

                        <div class="main_all_bg_Sec pt-5">

                            <div class="row">

                               <?php 

                               

                               if(!empty($groupList)){

                                    foreach($groupList as $grpupVal){



                                    $groupImg = wp_get_attachment_url( get_post_thumbnail_id($grpupVal->ID) );

                                    if(empty($groupImg)){                                                        

                                        $groupImg= get_template_directory_uri()."/assets/images/range_1.png";

                                    }

                                                    

                                 

                                    $author_id=$grpupVal->post_author;

                                    $author_img = the_author_meta( 'avatar' , $author_id ); 

                                    if(empty($author_img)){

                                        $author_img = get_template_directory_uri()."/avatar.png";

                                    }



                                    $userList = learndash_get_groups_user_ids($grpupVal->ID);

                                    $group_type = get_post_meta($grpupVal->ID,'group_type',true);

                                                                    

                                        ?>     

                                <div class="col-lg-3 pb-4">

                                    <div class="custom-card">

                                        <!--<a href="javascript:void(0);" class="GroupeModalCenter" data-gid="<?php echo $grpupVal->ID;?>">-->







                                            <a href="<?php echo get_permalink($grpupVal->ID)?>">







                                            <div class="image">

                                                <img src="<?php echo $groupImg ?>">

                                                <div class="public-text">

                                                    <p><?php echo $group_type;?></p>

                                                </div>

                                            </div>

                                            <div class="d-flex justify-content-between">

                                                <div class="group-title">

                                                    <h4><?php echo $grpupVal->post_title?></h4>

                                                </div>

                                                <div class="total-member">

                                                    <p><?php echo count($userList)?> Member</p>

                                                </div>

                                            </div>

                                            <div class="d-flex main-content  align-items-center">

                                                <div class="left-text">

                                                    Manager

                                                </div>

                                                <div class="member-image">

                                                    <img src="<?php echo $author_img; ?>" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" height="" title="" width="">

                                                </div>

                                                <div class="right-text">

                                                    <?php echo the_author_meta( 'user_nicename' , $author_id )?>

                                                </div>

                                            </div>

                                            <div class="d-flex">

                                                    <div class="main-group-image">

                                                        <?php if(!empty( $userList)){?>

                                                            <?php 

                                                                $i=1;

                                                                foreach ($userList as $key => $member_id) {

                                                                $member_img = the_author_meta( 'avatar' , $member_id ); 

                                                                if(empty($member_img)){

                                                                    $member_img = get_template_directory_uri()."/avatar.png";

                                                                }



                                                            if($i>3){

                                                            echo "+".(count($userList)-3);

                                                            break;

                                                            }else{

                                                             echo '<div class="mem-image">

                                                            <img src="'.$member_img.'" alt="" height="" title="" width="">

                                                        </div>';   

                                                            }

                                                         $i++; 

                                                        

                                                        } 

                                                     } ?>

                                                    

                                                    </div>

                                                   <!--  <div class="blue-circle">

                                                        <div class="circle-text">

                                                            <p>+23K</p>

                                                        </div>

                                                    </div> -->

                                                </div>

                                            <div class="card-text">

                                                <p><?php echo $grpupVal->post_content?></p>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            <?php }

                            }else{

                                echo "No record found";

                            } ?>

                                

                            </div>    

                        </div>

                    </div>



            <!-- Report Section Starts -->

                    <?php include('search_reports_inc.php')?>

             <!--Report Section ends  -->







                    <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">

                        <div class="row blog-card-box pt-5">



                            <?php if(!empty($blogList)) {

                            foreach($blogList as $value) {

                                $blogImg = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );

                                if(empty($blogImg)){                                                        

                                    $blogImg= get_template_directory_uri()."/assets/images/range_1.png";

                                }

                                ?>

                            <div class="col-lg-3 col-12">

                                <a href="<?php echo  get_post_permalink($value->ID);?>">

                                <div class="blog-card">

                                    <div class="image">

                                        <img src="<?php echo $blogImg?>">

                                        

                                    </div>

                                    <div class="card-title">

                                        <div class="d-flex justify-content-between w-100">

                                            <div class="title">

                                                <h6><?php echo $value->post_title; ?></h6>

                                            </div>

                                            <div class="blog-date">

                                                <p><?php echo date("F jS, Y", strtotime($value->post_date)); ?></p>

                                            </div>

                                        </div>

                                        <div class="blog-description">

                                            <?php echo  wp_trim_words($value->post_content,15);?>

                                        </div>

                                    </div>

                                </div>

                            </a>

                            </div>

                        <?php }

                    }else {

                        echo "No records found";

                    }

                    ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>   

</div>







<!--fOOTER-->



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



<!-- All modal  -->



<!-- Group Modal -->



<div class="modal fade group-modal fade bd-example-modal-lg" id="GroupeModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Group Information</h5>

            </div>

             <div class="umsjee"></div>       

            <div class="modal-footer d-flex">

                <div>

                    <button type="button" class="btn btn-primary" data-dismiss="modal" title="Cancel">Cancel</button>    

                </div>

                <div class="mx-1">

                    

                </div>

                <div>

                    <button type="button" class="btn btn-secondary" id="requestaccess" data-nonce="<?php echo @$nonce;?>" data-gid="">Request Access</button>

                </div>

            </div>

        </div>

    </div>

</div>



     

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>   

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">

     var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



    $(document).ready(function() {

        

        $(".GroupeModalCenter").click(function() {

            var mthtml = $(this).html();

            var gid = $(this).attr('data-gid');

            $('#requestaccess').attr('data-gid',gid);

            $('.umsjee').html(mthtml);

            $('#GroupeModalCenter').modal('show');

        });





        



        $("#requestaccess").click( function(e) {

          e.preventDefault(); 

          var group_id = $(this).data("gid");

          var nonce = $(this).attr("data-nonce");

          $.ajax({

             type : "post",

             dataType : "json",

             url :ajaxurl,

             data : {"action": "send_group_request", "group_id" : group_id, "nonce": nonce},

             success: function(response) {  

                  console.log(response);          

                  alert(response.msg);

                 $('#GroupeModalCenter').modal('hide');

                

             }

          })   



       });

    });



</script>

<?php //get_footer('new'); 

}?>