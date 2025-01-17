<?php 



if (!is_user_logged_in() ){

    wp_redirect( 'login' );

}

 else{

get_header('new'); 

global $post;

$group_id=$post->ID;

$author_id=$post->post_author;



$current_user_id = get_current_user_id();

$ownerInfo  = get_userdata($author_id);

$owner_name =$ownerInfo->display_name;





$author_img = get_avatar_url( $author_id ); 

if(empty($author_img)){

    $author_img = get_template_directory_uri()."/avatar.png";

}

 $ldUsersList = learndash_get_groups_user_ids($post->ID);



 $group_type = get_post_meta($post->ID,'group_type',true);

 if( $group_type=='Open' && $author_id!=$current_user_id){

    ld_update_group_access( $current_user_id, $post->ID );

 }



 if(!in_array($current_user_id,$ldUsersList) && $author_id!=$current_user_id){

    $_SESSION['flash_msg'] = "You are not allowed to access this group.";

    header('Location: '.site_url('wccgroups'));

        exit;

 }

 

 $headerurl = $_SERVER['REQUEST_URI']; 

 $main_url = 'https://knowledge.communication.worldcares.org';

 $baseHref = $main_url."$headerurl";

?>

 

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

<link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />

<!-- css links -->

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>



<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"

/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet" />

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

<style>

        .blog_u {height:30px;}

        .blog_u li a img{margin-right:5px;}

        .blog_u .dropdown-menu { position: absolute; right:0; top:0;}

        .dropdown-menu {

                position: absolute;

                top: 100%;

                left: 0;

                z-index: 1000;

                display: none;

                float: left;

                min-width: 10rem;

                padding: .5rem 0;

                margin: .125rem 0 0;

                font-size: 1rem;

                color: #212529;

                text-align: left;

                list-style: none;

                background-color: #fff;

                background-clip: padding-box;

                border: 1px solid rgba(0,0,0,.15);

                border-radius: .25rem;

        }

.ck-editor__editable_inline {

    min-height: 200px;

}





.donate_detais_main .imgHeightWidth {

    height: 200px;

    width: 100%;

    background: transparent url('img/shutterstock_1143859865.png') 0% 0% no-repeat padding-box;

    border-radius: 13px;

    opacity: 1;

    object-fit: contain;

}





/*End code */

        .bor{

            border:1px solid red;

        }

.modal{

    visibility: unset;

}

.image-upload > input

        {

            display: none;

        }



    .image-upload img

        {

            width: 80px;

            cursor: pointer;

        }

    

    .dropdown-item:focus, .dropdown-item:hover {

        color: #16181b;

        text-decoration: none;

        background-color: unset;

    }

        .add-mem-list .col-lg-4{

            padding-left:3.5px;

            padding-right:3.5px;

            margin-bottom:7px;

        }

        .modal .modal-dialog{

            width:100%!important;

        }

        .blog_grid .col-xl-4.col-lg-4.col-md-4{

            padding-left:3.5px;

            padding-right:3.5px;

            

        }

        .blog_grid .col-xl-12.col-lg-12.col-md-12{

            padding-left:3.5px;

            padding-right:3.5px;

        }

        .now_donate img{

            height: 15px;

        }





        .disaster_p {padding: 15px 0px;}

.disaster_p .row{padding: 0px 40px;}

.situation_title {margin-bottom:30px;}

.situation_contant{margin-bottom:50px;}

.situation_report .modal-content{ max-width:714px;}

.situation_contant p { font-size: 15px; color: #242424; font-family: 'Poppins'; margin: 0px 54px; text-align: center;}

     </style>



<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">     

<div class="col-xl-12">

    <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">

               <?php include('user_topbar.php')?>

            </div>

            <?php 

                $ldUsersList = learndash_get_groups_user_ids($post->ID); 

            ?>

            

        <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-0">

           <div class="donation_tab_pills ">

                <div class="donate_detais_main">

                    <?php  

                    $groupImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                        if(empty($groupImg)){                                                        

                            $groupImg= get_template_directory_uri()."/assets/images/range_1.png";

                        }

                     ?>

                    <img src="<?php echo $groupImg; ?>" class="imgHeightWidth">

                    <div class="donation_detail">

                        <div class="d-flex justify-content-between w-100">

                            <div class="d-flex align-items-center">

                                <div>

                                    <h5 data-id="<?php echo $post->ID;?>"><?php echo the_title()?></h5>

                                    <?php 

                                        $postType = get_post_meta( $post->ID, 'gorup_type',true);

                                        if($postType == ''){ ?>

                                    <?php } else {  ?>

                                            <span data-id="<?php echo $post->ID;?>" ><?php echo   get_post_meta( $post->ID, 'gorup_type',true);?></span>

                                    <?php } ?>        

                                </div>

                            </div>

                            <div>

                                <?php if ($current_user_id==$author_id){?>

                                <div class="donate_btn_right">

                                    <a href="<?php echo site_url('group-edit?id='.$group_id)?>"><button class="btn now_donate">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/editImg.png">

                                         Edit Group</button>

                                    </a>

                                </div>

                                <?php } ?>

                            </div>

                            </div>

                        </div>

                    </div>

                    <div>

                        <div class="d-flex">

                            <div class="main-group-image single-group">

                                <?php if(count($ldUsersList)>0){?>

                               <div class="mem-image">

                                    <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/avatar.png" alt="" height="" title="" width="">

                                </div>

                            <?php } ?>

                               

                            </div>

                             <?php if(count($ldUsersList)>0){?>

                            <div class="single-group-circle blue-circle">

                                <div class="circle-text">

                                    <p>+<?php 

                                    echo count($ldUsersList)?></p>

                                </div>

                            </div>

                        <?php } ?>

                            <div class="d-flex manager-part w-100 align-items-center">

                                <div class="manager-title">

                                    Manager

                                </div>

                                <div class="manger-img mx-2">

                                    <?php if( file_exists($author_img)){ ?>

                                        <img width="" height="" alt="" title="" src="<?php echo $author_img; ?>" />        

                                    <?php } else { ?>

                                        <img width="" height="" alt="" title="" src="https://via.placeholder.com/30x30" />        

                                    <?php } ?>

                                </div>

                                <div>

                                    <span><?php echo ($current_user_id==$author_id)?"You":$owner_name;?></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="about_donate">

                       <?php echo the_content();?>

                    </div>

               </div>

            </div> 

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3 mb-4 pb-4">

               <div class="memebr_tab_pills reports-forms">

               <ul class="nav nav-pills" id="pills-tab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Members</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab" aria-controls="pills-blogs" aria-selected="false">Blogs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-announcements-tab" data-toggle="pill" href="#pills-announcements" role="tab" aria-controls="pills-announcements" aria-selected="false">Announcements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-reports-tab" data-toggle="pill" href="#pills-reports" role="tab" aria-controls="pills-reports" aria-selected="false">Reports & Forms</a>
                        <!-- <a href="<?php // echo $baseHref ?>all-reports-forms" class="nav-link">Reports & Forms</a> -->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-media-tab" data-toggle="pill" href="#pills-media" role="tab" aria-controls="pills-media" aria-selected="false">Media & Resources</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-calendar-tab" data-toggle="pill" href="#pills-calendar" role="tab" aria-controls="pills-calendar" aria-selected="false">Calendar Events</a>
                    </li>

                </ul>


        <div class="tab-content resources-inc remove-space" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">
                <?php include('member_inc.php'); ?>
            </div>

            <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">
                <?php include('blog_inc.php'); ?>
            </div>

            <div class="tab-pane fade" id="pills-announcements" role="tabpanel" aria-labelledby="pills-announcements-tab">
                <?php include('announcement_inc.php'); ?>
            </div>

            <div class="tab-pane fade" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">
                <div class="report-media-tab">
                    <?php include('report-media.php'); ?>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab">
                <?php include('resources_inc.php'); ?>
            </div>
            
            <!-- added tab for group calendar 08SEP24  -->
            <div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                <?php include('event-calendar_groupFiltered.php'); ?>
            </div>

        </div>


                </div>

                <div class="btm_pagination_sec">

                    <nav aria-label="Page navigation example">

                        <ul class="pagination justify-content-end">

                            

                          <?php 

                            $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(

                               'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),

                               'format' => '<li>?paged=%#%</li>',

                               'current' => max( 1, get_query_var('paged') ),

                               'total' => $loop->max_num_pages ) );

                          ?>

                        

                        </ul>

                      </nav>

                </div>

            </div> 

            <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">

            <?php include('common_user_footer.php')?>

         </div>





        </div>         

    </div> 





     <!--  Modal Feed Edit  -->

           <div class="modal fade feed" id="editFeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"

                aria-hidden="true">

                <div class="modal-dialog modal-lg modal-dialog-centered create_tickit"

                    role="document">

                    <div class="modal-content">

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">

                                    <h5 class="modal-title create_feed_title_modeal " style="display:inline-block" id="exampleModalLongTitle">Update Feed</h5>

                                        <button type="button" class="close close-btn" data-dismiss="modal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png"></button>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                    <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">

                                        <input type ="hidden" name ="feed_id"  id="feed_id1"  value ="">

                                        <input type="hidden" name="update_feed" value="update_feed"/>

                                        <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

                                      

                                        <div class="col-lg-12 col-12">

                                            <div class="avatar-upload mb-3">

                                                <div class="avatar-preview">

                                                 <img class="imagePreview" src="" id="img_new" height="88"  width="120"> 

                                                   <div  class="imagePreview" id="img_new" style="background-image: url(https://via.placeholder.com/120x88);">

                                                    </div> 

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xl-12 col-lg-12 my-2">

                                            <div class="form-group">

                                                <label for="exampleFormControlSelect1">Description</label><br/>

                                                <input type="text" name="post_content" value="" id="feed_desc">

                                                

                                              <!-- <textarea class="form-control" name ="post_content"  placeholder="Enter here" id="feed_desc" style="height: 100px"> </textarea>-->

                                               

                                                

                                            </div>

                                        </div>

                                        <div class="col-xl-12 col-lg-12">

                                            <div class="avatar-edit">



                                                <input type='file' id="feedimageUpload" name="feed_edit_image" accept=".png, .jpg, .jpeg" />

                                                <label for="feedimageUpload"></label>

                                            </div>

                                        </div>

                                      

                                        <div class="col-lg-12 col-12 text-center ">

                                            <div class="apply_btn active modal-btn d-flex justify-content-center">

                                                <button class="btn btn_apply d-inline">Update</button>

                                            </div>

                                        </div>       

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>







            <!-- Delete Feed Modal -->



            <div class="modal fade situation_report" id="track_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                    <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

                        <div class="modal-content">

                            <div class="modal-body">

                                <div class="situation_title d-flex justify-content-between">

                                    <div class=" ">

                                        <h4 style="color:#132843; font-size:26px; font-family:'poppins';margin-left: 100px;">Are you sure you want to Delete</h4>

                                    </div>

                                    <div class="">

                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png"></a>

                                    </div>

                                </div>

                                <div class="situation_contant">                       

                                   <?php echo the_content();?>

                                </div>

                                <div class="row justify-content-center mb-5">

                                            <div class="col-lg-3 col-md-4 col-6">

                                                <div class="apply_btn ">

                                                <a href="#" data-toggle="modal" data-target="#track_delete"><button class="btn btn_apply">Cancle</button></a>

                                                </div>   

                                            </div>

                                            <div class="col-lg-3 col-md-4 col-6">

                                                <div class="apply_btn active">

                                                      <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                                         <input type="hidden" id = "feed_id" name="feed_id"  value= "">

                                                           <input type="hidden" name="delete_feed" value="delete_feed"/>

                                                           



                                                         <button class="btn btn_apply next"></i> Delete</button>

                                                     </form>

                                                </div>

                                            </div>

                                        </div>

                            </div>

                        </div>

                    </div>

    </div>



             

<?php



$nonce = wp_create_nonce("send_group__nonce");

$ajaxUrl = admin_url('admin-ajax.php?action=send_group_request&nonce='.$nonce);

$ajaxUrlaccept = admin_url('admin-ajax.php?action=accept_group_request&nonce='.$nonce);

$feedAjaxUrl = admin_url('admin-ajax.php?nonce='.$nonce);



?>

<script type="text/javascript">

    var ajaxurl = "<?php echo $ajaxUrl;?>";

        var ajaxUrlaccept = "<?php echo $ajaxUrlaccept;?>";





    $('.dropdown-toggle').dropdown();   

        jQuery(document).ready(function() {  

        jQuery(".next").click(function() {

            let previous = jQuery(this).closest("fieldset").attr('id');

            let next = jQuery('#'+this.id).closest('fieldset').next('fieldset').attr('id');

            if(previous == "step0"){

                console.log(previous);

               jQuery('#'+next).show();

                jQuery('#'+previous).hide();

            } 

            else if(previous == "step1"){

                jQuery('#'+next).show();

                jQuery('#'+previous).hide();

            }      

        }); 

        

    });

    jQuery(".previous").click(function() {

        let current = jQuery(this).closest("fieldset").attr('id');

        let previous = jQuery('#'+this.id).closest('fieldset').prev('fieldset').attr('id');

        jQuery('#'+previous).show();

        jQuery('#'+current).hide();

    }); 



        function clickfunction(id,content,img){ 

            $("#img_new").attr("src",img);

            $('#feed_id1').val(id);

            $('#feed_desc').val(content);

             $("#feed_img").val(img );

            $('#editFeed').modal('show');

        }





    $(document).ready(function(){

        $("#serach_user").on("keyup", function() {

            var value = $(this).val().toLowerCase();

            $(".add-mem-list").children('div').children('div').children('div').children('h5').filter(function() {         



                $(this).parent('div').parent('div').parent('div').toggle($(this).text().toLowerCase().indexOf(value) > -1);

            });

        });





              $(".acceptUser").click( function(e) {

                  e.preventDefault(); 

                  var group_id = "<?php echo $post->ID?>";

                  var uid = $(this).data("uid");

                  var id = $(this).data("id");

                  var nonce = $(this).attr("data-nonce");

                  $.ajax({

                     type : "post",

                     dataType : "json",

                     url :ajaxUrlaccept,

                     data : {"action": "accept_group_request", "uid" : uid, "group_id" : group_id, "id" : id, "nonce": nonce},

                     success: function(response) { 

                       $('.ums_btn'+id).text(response.msg);

                       $('.ums_'+id).remove();

                        

                     }

                  })

               });



              $(".rejectUser").click( function(e) {

                  e.preventDefault(); 

                  var group_id = "<?php echo $post->ID?>";

                  var uid = $(this).data("uid");

                  var id = $(this).data("id");

                  var nonce = $(this).attr("data-nonce");

                  $.ajax({

                     type : "post",

                     dataType : "json",

                     url :ajaxUrlaccept,

                     data : {"action": "reject_group_request", "uid" : uid, "group_id" : group_id, "id" : id, "nonce": nonce},

                     success: function(response) { 

                       $('.ums_btn'+id).text(response.msg);

                       $('.ums_'+id).remove();

                        

                     }

                  })

               });



              $(".inviteMember").click( function(e) {

                  e.preventDefault(); 

                  var group_id = "<?php echo $post->ID?>";

                  var mid = $(this).data("mid");

                  var nonce = $(this).attr("data-nonce");

                  $.ajax({

                     type : "post",

                     dataType : "json",

                     url :ajaxUrlaccept,

                     data : {"action": "invite_group_request", "mid" : mid, "group_id" : group_id, "nonce": nonce},

                     success: function(response) { 

                       $('.inviteMemberBtn_'+mid).text(response.msg);

                       alert("User Invited Successfully!")

                       $('.inviteMember_'+mid).remove();

                       

                        

                     }

                  })

               });





              $(".followMember").click( function(e) {

                  e.preventDefault(); 

                  var group_id = "<?php echo $post->ID?>";

                  var mid = $(this).data("mid");

                  var nonce = $(this).attr("data-nonce");

                  $.ajax({

                     type : "post",

                     dataType : "json",

                     url :ajaxUrlaccept,

                     data : {"action": "follow_member", "mid" : mid, "group_id" : group_id, "nonce": nonce},

                     success: function(response) { 

                       $('.followMemberBtn_'+mid).text(response.msg);

                       //$('.followMember_'+mid).remove();

                        

                     }

                  })

               });





               $(".removeMember").click( function(e) {

                  e.preventDefault(); 

                  var group_id = "<?php echo $post->ID?>";

                  var mid = $(this).data("mid");

                  var nonce = $(this).attr("data-nonce");

                  $.ajax({

                     type : "post",

                     dataType : "json",

                     url :ajaxUrlaccept,

                     data : {"action": "remove_member", "mid" : mid, "group_id" : group_id, "nonce": nonce},

                     success: function(response) { 

                       $('.followMemberBtn_'+mid).text(response.msg);

                       $('.followMember_'+mid).remove();

                        

                     }

                  })

               });











            

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

                $('#mdate').html(date);

                $('#mtag').html(tag);

                $('#mgroup').html(group);

                $('#mdesc').html(desc);



                $('#mresource_id1').val(mresource_id);

                $('#title1').val(title);

                $('#tags1').val(tag);

                $('#mr_group1').val(group);

                $('#mr_description1').val(desc);

            });





            $(".editAnnouncement").click(function () {

                let title = $(this).data('title');

                let img = $(this).data('img');

                let desc = $(this).data('desc');

                let edit_ann_id = $(this).data('id');

                $('#edit_imagePreviewFileannouncement').css('background-image', 'url('+img +')');

                $('#post_title1').val(title);               

                $('#post_content1').html(desc);

                $('#edit_ann_id').val(edit_ann_id);               

            });







            

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







    var imgUpload = document.getElementById('upload_imgs')

  , imgPreview = document.getElementById('img_preview')

  , imgUploadForm = document.getElementById('img-upload-form')

  , totalFiles

  , previewTitle

  , previewTitleText

  , img;









function previewImgs(event) {

  totalFiles = imgUpload.files.length;

  

  if(!!totalFiles) {

    imgPreview.classList.remove('quote-imgs-thumbs--hidden');

    previewTitle = document.createElement('p');

    previewTitle.style.fontWeight = 'bold';

    previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');

    previewTitle.appendChild(previewTitleText);

    imgPreview.appendChild(previewTitle);

  }

  

  for(var i = 0; i < totalFiles; i++) {

    img = document.createElement('img');

    img.src = URL.createObjectURL(event.target.files[i]);

    img.classList.add('img-preview-thumb');

    imgPreview.appendChild(img);

  }

}









    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#imagePreview').css('background-image', 'url('+e.target.result +')');

                $('#imagePreview').hide();

                $('#imagePreview').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }



     function showImagePreview(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('.imagePreview').css('background-image', 'url('+e.target.result +')');

                $('.imagePreview').hide();

                $('.imagePreview').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }



    function readURLC(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#imagePreviewResources').css('background-image', 'url('+e.target.result +')');

                $('#imagePreviewResources').hide();

                $('#imagePreviewResources').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    function readURLCannouncement(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#imagePreviewFileannouncement').css('background-image', 'url('+e.target.result +')');

                $('#imagePreviewFileannouncement').hide();

                $('#imagePreviewFileannouncement').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }



    function readURLCEditannouncement(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#edit_imagePreviewFileannouncement').css('background-image', 'url('+e.target.result +')');

                $('#edit_imagePreviewFileannouncement').hide();

                $('#edit_imagePreviewFileannouncement').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }





    jQuery(document).ready(function($){        



     $(".feedDetail").click(function() {

            var authorimg = $(this).data('authorimg');

            var id = $(this).data('id');

            var feeimg = $(this).data('feeimg');

            var content = $(this).data('content');

            var title = $(this).data('title');

            var like = $(this).data('like');

            var comment = $(this).data('comment');

            $('.fIcon').data('id',id);

            $('#feed_detail_id').val(id);

            $('#feedimg').attr('src',feeimg);

            $('#feed_content').html(content);

            $('#feed_title').html(title);

            $('#authorimg').attr('src',authorimg);

            $('#feed_like').html(like);

            $('#feed_comment').html(comment);

             $.ajax({

                     type : "post",

                     dataType : "json",

                     url :"<?php echo $feedAjaxUrl?>",

                     data : {"action": "get_feed_comment", "post_id" : id},

                     success: function(json ) {

                        if( json && json.comment ) {

                            $('#commentList').html( json.comment );

                        }

                    

                     }

                  })





            

        });





    $("#imageUpload").change(function() {

        readURL(this);

    });



    $("#feedimageUpload").change(function() {

        showImagePreview(this);

    });



    

    $("#imageUploadRes").change(function() {

        readURLC(this);

    });



     $("#resource_media_img").change(function() {

        showImagePreview(this);

    });





    

    $("#fileUploadannouncement").change(function() {

        readURLCannouncement(this);

    });



    $("#edit_fileUploadannouncement").change(function() {

        readURLCEditannouncement(this);

    });



});



    function blogfileupload(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#blogEditImage').css('background-image', 'url('+e.target.result +')');

                $('#blogEditImage').hide();

                $('#blogEditImage').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    

    $("#blog_edit_image").change(function() {

        blogfileupload(this);

    });



    function blogfileuploadCreate(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('.imagePreviewFileCreate').css('background-image', 'url('+e.target.result +')');

                $('.imagePreviewFileCreate').hide();

                $('.imagePreviewFileCreate').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    

    $("#fileUpload").change(function() {

        blogfileuploadCreate(this);

    });











$(".fIcon").click( function(e) {

  e.preventDefault(); 

  var mid = $('#feed_detail_id').val();

  $.ajax({

     type : "post",

     dataType : "json",

     url :"<?php echo $feedAjaxUrl?>",

     data : {"action": "update_feed_like", "post_id" : mid},

     success: function(json ) {

        if( json && json.count ) {

            $('#feed_like').html( json.count );

        }

    

     }

  })

});



$(".addFeedCommentBtn").click( function(e) {

    $("#sub_btn").attr('disabled',true);

  e.preventDefault(); 

  var mid = $('#feed_detail_id').val();

  var feedComment = $('#feedComment').val();

  if(feedComment==""){

    alert("Enter comment");

    return false;

  }

  $.ajax({

     type : "post",

     dataType : "json",

     url :"<?php echo $feedAjaxUrl?>",

     data : {"action": "add_feed_comment", "post_id" : mid,"feedComment" : feedComment},

     success: function(json ) {

        console.log(json.comment)

        if( json && json.comment ) {

             $('#feedComment').val("");

            $('#commentList').append( json.comment );



        }

        $('#sub_btn').removeAttr("disabled")

    }



  })

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



$(document).ready(function() {

    $('.js-example-placeholder-multiple').select2();

     placeholder: "Tags"

});





function deleteFeed(id){         

    $('#feed_id').val(id);

    $('#track_delete').modal('show');

}



function deleteBlog(id){         

    $('#blog_id').val(id);

    $('#blogDelete').modal('show');

}



function deleteAnnouncement(id){         

    $('#ann_id').val(id);

    $('#deleteAnnoucementModal').modal('show');

}





imgUpload.addEventListener('change', previewImgs, false);

 </script>



<?php }

?>

