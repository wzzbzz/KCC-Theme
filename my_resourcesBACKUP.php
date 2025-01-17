<?php
/* Template Name: My Resources */ 
if ( is_user_logged_in() ) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/evolution.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://knowledge.communication.worldcares.org/wp-content/plugins/ultimate-member/assets/css/select2/select2.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
</head>
<body class="main_all_bg_Sec">
<?php include('user-sidebar.php');?>
    <div class="col-xl-12 my-resources-temp mt-4">
        <div class="row justify-content-end temp-my-resources">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <?php include('user_topbar.php')?>
                
        </div>
        </div>
        <div class="row justify-content-end top-space">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10">
                <div class="d-lg-flex d-lg-flex align-items-center justify-content-lg-between w-100">
                    <div class="linked_blog">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#created-by-me" role="tab">
                                    <i class="now-ui-icons shopping_cart-simple"></i> Created By Me
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#media-documents" role="tab">
                                    <i class="now-ui-icons shopping_shop"></i> Media or Document
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn_list_blog">
                        <a href="<?php echo get_site_url(); ?>/my-resource-create-resources/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2"> Create New Resource
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end main-table-content">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="tab-content w-100">
                        <div class="tab-pane active " id="all" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="resources_title">
                                    <h5>All Resources</h5>    
                                </div>
                                <div class="table-btn">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">Sort</button>
                                </div>
                            </div>
                            <div class="global-table">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Service Provided</th>
                                                <th>Organization Name</th>
                                                <th>Area Served</th>
                                                <th>About Organization</th>
                                                <th>Website URL</th>
                                                <th>Contact information</th>
                                                <th>Username</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                            <?php 
                                            $searchArg= array(); 
                                            $searchArg['post_type'] = 'resources';
                                            $searchArg['post_status'] = 'publish';
                                            $searchArg['numberposts'] = 1000;
                                            
                                            if(!empty($_GET['title'])){
                                                $searchArg['s'] = $_GET['title'];
                                            }
                                            if(!empty($_GET['city'])){
                                                $searchArg['meta_query'] =      array(
                                                                                        'key' => 'resource_city',
                                                                                        'value'   => $_GET['city'],
                                                                                        'compare' => '='
                                                                                    );
                                            }
                                            if(!empty($_GET['date'])){
                                             $searchArg['date_query'] =      array(
                                                                                        'after' => date('Y-m-d',strtotime($_GET['date']))
                                                                                        //'before' => date('Y-m-d',strtotime($_GET['groupDate'])),
                                                                                      //  'compare' => '=',
                                                                                );   
                                            }

                                            $allResource = get_posts( $searchArg );
                                            if(!empty($allResource)){
                                                foreach($allResource as $grpupVal){

                                                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($grpupVal->ID) );
                                                if(empty($feat_image)){                                                        
                                                    $groupImg= get_template_directory_uri()."/assets/images/range_1.png";
                                                }else{
                                                    $groupImg= get_template_directory_uri()."/assets/images/detail_click.png";
                                                }
                                                                
                                             
                                                $member_id=$grpupVal->post_author;
                                                $author_img = the_author_meta( 'avatar' , $member_id ); 
                                                if(empty($author_img)){
                                                    $author_img = get_template_directory_uri()."/avatar.png";
                                            }?>
                                            <tr class="bg-color">
                                               <td><?php echo get_post_meta($grpupVal->ID, 'services_provided', true )?></td>
                                                <td><?php echo get_post_meta($grpupVal->ID, 'org', true )?></td>
                                                <td><?php echo get_post_meta($grpupVal->ID, 'area_served', true )?></td>
                                                <td>

                                                    <?php echo get_post_meta($grpupVal->ID, 'organization', true )?>
                                                </td>
                                                <td>
                                                   <div class="organization">
                                                        <a href="javascript:void(0);" title="<?php echo get_post_meta($grpupVal->ID, 'Website_url', true )?>"><?php echo get_post_meta($grpupVal->ID, 'Website_url', true )?></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mail-section">
                                                        <div>
                                                            <div class="d-flex">
                                                                <div class="mail">
                                                                    Email :
                                                                </div>
                                                                <div>
                                                                    <a href="mailto:<?php echo get_post_meta($grpupVal->ID, 'email', true )?>" title="<?php echo get_post_meta($grpupVal->ID, 'email', true )?>"><?php echo get_post_meta($grpupVal->ID, 'email', true )?></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="mail">
                                                                    Phone :
                                                                </div>
                                                                <div>
                                                                    <a href="tel:<?php echo get_post_meta($grpupVal->ID, 'phone_no', true )?>" title="<?php echo get_post_meta($grpupVal->ID, 'phone_no', true )?>"><?php echo get_post_meta($grpupVal->ID, 'phone_no', true )?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo the_author_meta( 'user_nicename' , $member_id )?></td>
                                                <td>
                                                    <a href="<?php echo site_url('message?room_id='.$grpupVal->ID); ?>" class="d-block">
                                                        <div class="orange-box">
                                                            <i class="fa fa-comment" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>


                                             <?php }
                                            }else{ ?>
                                            <tr class="bg-color my-3">
                                               <td  colspan="8" class="text-center">No Record found</td> 
                                            </tr>
                                            <?php } ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="created-by-me" role="tabpanel">
                            <div class="col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0 mb-0">
                                <h5>My Created Resources</h5>
                                <div class="btn_list_blog btn_short_list my-lg-4 mr-lg-4">
                                    <button class="btn_short_list" type="button" data-toggle="modal" data-target="#byMeModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">Sort-2989898989</button>
                                </div>
                            </div>
                             <div class="global-table">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Service Provided</th>
                                                <th>Organization Name</th>
                                                <th>Area Served</th>
                                                <th>About Organization</th>
                                                <th>Website URL</th>
                                                <th width="20%">Information</th>
                                                <th>Username</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                            <?php 
                                                $current_user_id = get_current_user_id();
                                                $allResource = get_posts( array(
                                                        'post_type'      => 'resources',
                                                        'post_status'    => 'publish',
                                                        'numberposts' => 1000,
                                                        'author'        =>  $current_user_id,
                                                        ) );
                                                        
                                                        echo 'crerated By Me';
                                                       
                                          
                                             if(!empty($_GET['title'])){
                                                $searchArg['s'] = $_GET['title'];
                                            }
                                            if(!empty($_GET['city'])){
                                                $searchArg['meta_query'] =      array(
                                                                                        'key' => 'resource_city',
                                                                                        'value'   => $_GET['city'],
                                                                                        'compare' => '='
                                                                                    );
                                            }
                                            if(!empty($_GET['date'])){
                                             $searchArg['date_query'] =      array(
                                                                                        'after' => date('Y-m-d',strtotime($_GET['date']))
                                                                                        //'before' => date('Y-m-d',strtotime($_GET['groupDate'])),
                                                                                      //  'compare' => '=',
                                                                                );   
                                            }
                                          
                                          

                                            if(!empty($allResource)){
                                                foreach($allResource as $grpupVal){

                                                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($grpupVal->ID) );
                                                if(empty($feat_image)){                                                        
                                                    $groupImg= get_template_directory_uri()."/assets/images/range_1.png";
                                                }else{
                                                    $groupImg= get_template_directory_uri()."/assets/images/detail_click.png";
                                                }
                                                                
                                             
                                                $member_id=$grpupVal->post_author;
                                                $author_img = the_author_meta( 'avatar' , $member_id ); 
                                                if(empty($author_img)){
                                                    $author_img = get_template_directory_uri()."/avatar.png";
                                                }?>
                                            <tr class="bg-color">
                                                <td><?php echo get_post_meta($grpupVal->ID, 'services_provided', true )?></td>
                                                <td><?php echo get_post_meta($grpupVal->ID, 'org', true )?></td>
                                                <td><?php echo get_post_meta($grpupVal->ID, 'area_served', true )?></td>
                                                <td><?php echo get_post_meta($grpupVal->ID, 'organization', true )?></td>
                                                <td>
                                                   <div class="organization">
                                                        <a href="javascript:void(0);" title="<?php echo get_post_meta($grpupVal->ID, 'Website_url', true )?>"><?php echo get_post_meta($grpupVal->ID, 'Website_url', true )?></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mail-section">
                                                        <div>
                                                            <div class="d-flex">
                                                                <div class="mail">
                                                                    Email :
                                                                </div>
                                                                <div>
                                                                    <a href="mailto:<?php echo get_post_meta($grpupVal->ID, 'email', true )?>" title="<?php echo get_post_meta($grpupVal->ID, 'email', true )?>"><?php echo get_post_meta($grpupVal->ID, 'email', true )?></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="mail">
                                                                    Phone :
                                                                </div>
                                                                <div>
                                                                    <a href="tel:<?php echo get_post_meta($grpupVal->ID, 'phone_no', true )?>" title="<?php echo get_post_meta($grpupVal->ID, 'phone_no', true )?>"><?php echo get_post_meta($grpupVal->ID, 'phone_no', true )?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo the_author_meta( 'user_nicename' , $member_id )?></td>
                                                
                                            </tr>


                                             <?php }
                                            }else{ ?>
                                            <tr class="bg-color my-3">
                                               <td  colspan="8" class="text-center">No Record found</td> 
                                            </tr>
                                            <?php } ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="media-documents" role="tabpanel">
                            <?php include('resoucre_media_inc.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('common_user_footer.php')?>
    <!--short by filter modal-->
    <?php 
    //$city_list = $wpdb->get_results( "SELECT distinct(meta_value) FROM wp_postmeta WHERE meta_key = 'resource_city'",ARRAY_A);
   /*$allCities = !empty($allCities) ? array_map(function($item) {
            $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);
            return $item;
        }, $allCities) : []; */   
         $city_list = $wpdb->get_results("SELECT * FROM `wp_cities`");
    
    ?>

   

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable custom-modal-ap" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h4>Short by</h4> -->
                        <div class="d-flex justify-content-between w-100 align-items-center">
                            <div class="modal-title">
                                <h4>Filter by</h4>
                            </div>
                            <div>
                                <div class="filter-btn">
                                    <a class="btn  btn-primary" href="javascript:void(0);" title="Reset Filter">Reset Filter</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-body">
                        
                        <form class="" method="get" class="p-0 m-0">
                            <div class="row m-0">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Filter by Date</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Select Date">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Filter by City</label>
                                        <select class="js-select2 form-control" multiple>
                                            <?php foreach($city_list as $value){ ?>
                                                <option value="<?php echo $value->city;?>"><?php echo $value->city ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Filter by Name</label>
                                        <input type="text" class="form-control" id="title" name="title"  placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12 modal-btn-ap">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <div class="left-btn w-100">
                                            <button class="btn btn-outline-primary close" title="Cancal" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="mx-2"></div>
                                        <div class="right-btn w-100">
                                            <button class="btn btn-primary " type="submit" title="Apply filter">Apply filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                   
                    </div>
                </div>

            </div>
       </div>


       <div class="modal fade" id="byMeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable custom-modal-ap" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h4>Short by</h4> -->
                        <div class="d-flex justify-content-between w-100 align-items-center">
                            <div class="modal-title">
                                <h4>Filter by (Created By Me)</h4>
                            </div>
                            <div>
                                <div class="filter-btn">
                                    <a class="btn  btn-primary" href="javascript:void(0);" title="Reset Filter">Reset Filter</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-body">
                        
                        <form class="" method="get" class="p-0 m-0">
                            <div class="row m-0">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Filter by Date</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Select Date">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Filter by City</label>
                                        <select class="js-select2 form-control" multiple>
                                            <?php foreach($city_list as $value){ ?>
                                                <option value="<?php echo $value->city;?>"><?php echo $value->city ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Filter by Name</label>
                                        <input type="text" class="form-control" id="title" name="title"  placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12 modal-btn-ap">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <div class="left-btn w-100">
                                            <button class="btn btn-outline-primary close" title="Cancal" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="mx-2"></div>
                                        <div class="right-btn w-100">
                                            <button class="btn btn-primary " type="submit"   title="Apply filter">Apply filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                   
                    </div>
                </div>

            </div>
       </div>





    <!-- js links -->
<?php

$nonce = wp_create_nonce("send_group__nonce");
$ajaxUrl = admin_url('admin-ajax.php?action=send_group_request&nonce='.$nonce);
$ajaxUrlaccept = admin_url('admin-ajax.php?action=accept_group_request&nonce='.$nonce);
$feedAjaxUrl = admin_url('admin-ajax.php?nonce='.$nonce);

?>
    <script src='https://knowledge.communication.worldcares.org/wp-content/plugins/ultimate-member/assets/js/select2/select2.full.min.js?ver=4.0.13' id='select2-js'></script>
    <script>
        
             var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

        $(document).ready(function () {


            
            $(".viewDetails").click(function () {
                let title = $(this).data('title');
                let img = $(this).data('img');
                let tag = $(this).data('tag');
                let desc = $(this).data('desc');
                let group = $(this).data('group');
                let date = $(this).data('date');
                 let mresource_id = $(this).data('id');
                $('#mtitle').html(title);
                $('#mimg').attr('src',img);
                $('#mdate').html(date);
                $('#mtag').html(tag);
                $('#mgroup').html(group);
                $('#mdesc').html(desc);

                $('#mresource_id').val(mresource_id);
                 $('.deleteMedia').attr('data-id',mresource_id);
                $('#title').val(title);
                $('#tags').val(tag);
                $('#mr_group').val(group);
                $('#mr_description').val(desc);
                 $('.delbtn').css('display','none');
            });

            
            $(".editResource").click(function () {
                let title = $(this).data('title');
                let img = $(this).data('img');
                let tag = $(this).data('tag');
                let desc = $(this).data('desc');
                let group = $(this).data('group');
                let date = $(this).data('date');
                 let mresource_id = $(this).data('id');
                 $('.delbtn').css('display','block');
                $('#mtitle').html(title);
                $('#mimg').attr('src',img);
                $('.imagePreviewFile').css('background-image', 'url(' + img + ')');

                $('#mdate').html(date);
                $('#mtag').html(tag);
                $('#mgroup').html(group);
                $('#mdesc').html(desc);

                $('#mresource_id1').val(mresource_id);
                 $('.deleteMedia').attr('data-id',mresource_id);
                $('#title1').val(title);
                $('#tags1').val(tag);
                $('#mr_group1').val(group);
                $('#mr_description1').val(desc);
            });



              $(".deleteMedia").click( function(e) {
          e.preventDefault(); 
          var media_id = $(this).data("id");
          var nonce = $(this).attr("data-nonce");
          $.ajax({
             type : "post",
             dataType : "json",
             url :ajaxurl,
             data : {"action": "delete_resource_media", "media_id" : media_id, "nonce": nonce},
             success: function(response) {  
                  console.log(response);          
                  alert(response.msg);
                 $('#modalupload').modal('hide');
                
             }
          })   

       })



            
            $(".downloadF").click(function () {
                let img1 = $(this).data('img');
                 window.open(img1, '_blank');
            });

            $(".next").click(function () {
                let previous = $(this).closest("fieldset").attr('id');
                let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');
                if (previous == "step0") {
                    console.log(previous);
                    $('#' + next).show();
                    $('#' + previous).hide();
                }
                else if (previous == "step1") {
                    $('#' + next).show();
                    $('#' + previous).hide();
                }
            });

        });
        $(".previous").click(function () {
            let current = $(this).closest("fieldset").attr('id');
            let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
            $('#' + previous).show();
            $('#' + current).hide();
        }); 
    </script>




<?php } //get_footer('new'); }?>
  <script type="text/javascript">
    function fileupload(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.imagePreviewFile').css('background-image', 'url('+e.target.result +')');
                $('.imagePreviewFile').hide();
                $('.imagePreviewFile').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fileUpload").change(function() {
        fileupload(this);
    });
    $("#resource_media_img").change(function() {
        fileupload(this);
    });

     $("#resource_media_img_edit").change(function() {
        fileupload(this);
    });
     
    
    $(document).ready(function() {
        $('.js-example-placeholder-multiple').select2();
         placeholder: "Tags"
    });

    $(document).ready(function() {


        $(".js-select2").select2({
            placeholder: "Pick states",
            theme: "material"
        });
        
        $(".select2-selection__arrow")
            .addClass("material-icons")
            .html("arrow_drop_down");


        /*    $(".saveMedia").click( function(e) {
              e.preventDefault(); 
              var rmid = $(this).data('id'); 
              var group_id = $(this).data('gid'); 
              $.ajax({
                 type : "post",
                 dataType : "json",
                 url :ajaxurl,
                 data : {"action": "save_resource_media", "rmid" : rmid,'group_id':group_id},
                 success: function(json ) {
                    if( json && json.msg ) {
                        alert(json.msg);   
                    }    
                 }
              })
            });*/
    });
$(".saveMedia").click( function(e) {
  e.preventDefault(); 
  var rmid = $(this).data('id'); 
  var group_id = "<?php echo $post->ID?>";
  $.ajax({
     type : "post",
     dataType : "json",
     url :"<?php echo $feedAjaxUrl?>",
     data : {"action": "save_resource_media", "rmid" : rmid,'group_id':group_id},
     success: function(json ) {
        if( json && json.msg ) {
            alert(json.msg);   
        }    
     }
  })
});
</script>


</body>
</html>
