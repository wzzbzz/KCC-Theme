<?php 



/* Template Name: Group Create */ ?>



<!DOCTYPE html>

<html lang="en">

<head>

       <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Groups</title>



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



        .group-edit-page .avatar-edit input + label:after {

    content: "\f093";

    color: #0E559F;

    font-size: 40px;

}



</style>





<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     

</head>

<body class="main_all_bg_Sec">

      <?php include('usermenucommon.php')?>



        <div class="col-xl-12 m-0 p-0">

        <div class="row justify-content-end mt-3">



            <?php include('user_topbar.php')?>

			<?php            

				$groupImg= "https://via.placeholder.com/120x88";

            ?>

         

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

			<div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

				<div class="back_btn mb-5">

					<a href="<?php echo site_url('wccgroups')?>">Back</a>

				</div>

			</div>

				<!----tab------->

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2 donation_tab_pills ">

                        

                <div class="main_profile_form create_group_form_1">

					

					<!----form------>

					 <div class="title_create">

                        <h4>Create Group </h4>

                        <?php echo do_action('success_msg'); ?>

                    </div> 

					<form  method ="POST" action="" class="row mediadoc_form group-edit-page" enctype="multipart/form-data">

                    <input type="hidden" name="ums_create_group" value="ums_create_group" />

                    <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

					    <div class="col-xl-12 col-lg-12">

						    <div class="drag-drop-images text-center image-upload-box"> 

    							<div class="avatar-edit">

                                    <input type='file' id="imageUpload" name="group_image" accept=".png, .jpg, .jpeg,.webp" />

                                    <label for="imageUpload"></label>

                                <div class="main_profile_form">

                                    <br><span>Upload group image here</span>

                                   <!--<span class="extension-name">Support JPG, JPEG, PNG, MP4</span>-->

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

                                <label class="pl-0" for="exampleInputPassword1">Title</label>

                                <input type="text" class="form-control" name="post_title" id="exampleInputPassword1" placeholder="Enter Name of Group" required value="<?php  if(!empty($groupDetail)){?> <?php echo $groupDetail->post_title?> <?php }?> ">

                            </div>

                        </div>                                             

                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                            <div class="form-group">

                                <label class="pl-0" for="exampleInputPassword1">Description</label>

                                <input type="text" class="form-control"  id="exampleInputPassword1" name="post_content" placeholder="Enter Description" required value="<?php  if(!empty($groupDetail)){?> <?php echo $groupDetail->post_content?> <?php }?>">

                            </div>

                        </div>                                             

                        <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                            <div class="form-group select_sec">

                                <label class="pl-0" for="exampleFormControlSelect1">Group Type</label> 

						

                                <select class="form-control"  name = "group_type" id="group_type" required>

                                        <?php 	$args = array(

												 'Open' => 'Open',

												 'Closed' => 'Closed',

												 'Private' => 'Private'

											);

									

								                  foreach($args as $value){  ?>

									              <option value="<?php echo $value;?>" > <?php echo $value;?></option>

									

									     <?php }?>

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

        </div> 

        <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">

            <?php include('common_user_footer.php')?>

         </div>       

    </div>



    <!-- js links -->

    

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

