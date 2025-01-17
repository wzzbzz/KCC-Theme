<?php 



/* Template Name: Group Edit */ 

$group_id = $_GET['id'];

$group_type = get_post_meta($group_id,'group_type',true);

$groupDetail = get_post($group_id);





if(!empty($groupDetail)){

$current_user_id = get_current_user_id();

	if($current_user_id!=$groupDetail->post_author){		

        header('Location: '.site_url('wccgroups'));

        exit;

	}

}else{



        header('Location: '.site_url('wccgroups'));

        exit;

}







	            ?>



<!DOCTYPE html>

<html lang="en">

<head>

       <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Groups</title>



    <!-- Favicon -->    

    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"> 



    <!-- css links -->

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css" rel="stylesheet">

 



<style> 



    @media screen and (max-width: 768px){

    .donation_tab_pills {

   

    margin-left: 30px;

}



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

       .group-edit-page .avatar-edit input + label:after {

          min-height: 0px !important;

          top: 20px !important;

          left: 0px;

       }

        .main_profile_form label {

         font-size: 16px;

        }

          span.extension-name {

          font-size: 13px;

        }

        span.browse {

         color: #429FFF;

        }

</style>





<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     

</head>

<body class="main_all_bg_Sec">

      <?php include('usermenucommon.php')?>



        <div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">



            <?php include('user_topbar.php')?>

			<?php            



				$groupImg = wp_get_attachment_url( get_post_thumbnail_id($groupDetail->ID) );

				if(empty($groupImg)){                                                        

					$groupImg= "https://via.placeholder.com/120x88";

				}



            ?>

         

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

			 <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

					<div class="back_btn mb-5">

						<a href="<?php echo site_url('wccgroups')?>">Back</a>

					</div>

					</div>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2 donation_tab_pills ">

                        

                <div class="main_profile_form create_group_form_1">

					

					 <div class="title_create">

                        <h4>Update Group</h4>

                        <?php echo do_action('success_msg'); ?>

                    </div> 

					<form  method ="POST" action="" class="row mediadoc_form group-edit-page" enctype="multipart/form-data">

                        <input type="hidden" name="ums_update_group" value="ums_update_group" />

                        <input type="hidden" name="group_id" value="<?php echo $group_id;?>" />

                        <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

					    <div class="col-xl-12 col-lg-12">

						    <div class="drag-drop-images text-center image-upload-box"> 

    							<div class="avatar-edit">

                                    <input type='file' id="imageUpload" name="group_image" accept=".png, .jpg, .jpeg" />

                                    <label for="imageUpload"></label>

                                <div class="main_profile_form">

                                    <br><span>Drop your image here, or </span><span class="browse">Browse</span><br>

                                   <span class="extension-name">Support JPG, JPEG, PNG, MP4</span>

                               </div>

                                </div>

					       </div>

					    </div>

                        <div class="col-xl-12 col-lg-12">

                            <div class="avatar-upload my-3">

                               

                                <div class="avatar-preview">

                                    <div id="imagePreview" style="background-image: url(<?php echo $groupImg?>);"></div>

                                </div>

                            </div>

                        </div>

					 

					   <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                            <div class="form-group">

                                <label class="pl-0" for="post_title">Title</label>

                                <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter Name of Group" required value="<?php echo $groupDetail->post_title?>">

                            </div>

                        </div>                                             

                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                            <div class="form-group">

                                <label class="pl-0" for="post_content">Description</label>

                                <input type="text" class="form-control" id="post_content" name="post_content" placeholder="Enter Description" required value="<?php echo $groupDetail->post_content?>">

                            </div>

                        </div>                                             

                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                            <div class="form-group select_sec">

                                <label class="pl-0" for="exampleFormControlSelect1">Group Type</label> 

						

                                <select class="form-control"  name = "group_type" id="group_type" required>



         <option value="Open" <?php echo (get_post_meta($group_id,'group_type',true)=="Open")?"selected='selected'":""?> >Open</option>

         <option value="Close" <?php echo (get_post_meta($group_id,'group_type',true)=="Closed")?"selected='selected'":""?> >Closed</option>

         <option value="Private" <?php echo (get_post_meta($group_id,'group_type',true)=="Private")?"selected='selected'":""?> >Private</option>







                              

                                       

                                </select>

                              </div>

                        </div> 

 						<div class="col-xl-4 col-lg-4 col-md-6 col-12 m-auto pt-2">

                            <div class="apply_btn active">

                                <button type="submit" class="btn btn_apply">Submit</button>

                            </div>

                        </div>						

				</form>			

       

                    <div class="row justify-content-center"></div>

                </div>

            </div>

            </div> 



               <?php include('common_user_footer.php')?>



        </div>        

    </div>



    <!-- js links -->

   <!--  <script src="<?//php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

    <script src="<?//php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

    <script src="<?//php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>    -->

    <script type="text/javascript">

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

        $("#imageUpload").change(function() {

            readURL(this);

        });

    </script>

</body>

</html>