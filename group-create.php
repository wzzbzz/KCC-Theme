<?php
/* Template Name: Group Create */ 

if(!is_user_logged_in()){
    header('Location: '.site_url('login'));
    exit;
}
get_header('dashboard');
?>

            <?php

            $groupImg = "https://via.placeholder.com/120x88";

            ?>



            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

                <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

                    <div class="back_btn mb-5">

                        <a href="<?php echo site_url('groups') ?>">Back</a>

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

                        <form method="POST" action="" class="row mediadoc_form group-edit-page kcc-form" enctype="multipart/form-data">

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

                                        <div id="imagePreview" style="background-image: url(<?php echo $groupImg ?>);"></div>

                                    </div>

                                </div>

                            </div>



                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                                <div class="form-group">

                                    <label class="pl-0" for="exampleInputPassword1">Title</label>

                                    <input type="text" class="form-control" name="post_title" id="exampleInputPassword1" placeholder="Enter Name of Group" required value="<?php if (!empty($groupDetail)) { ?> <?php echo $groupDetail->post_title ?> <?php } ?> ">

                                </div>

                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                                <div class="form-group">

                                    <label class="pl-0" for="exampleInputPassword1">Description</label>

                                    <input type="text" class="form-control" id="exampleInputPassword1" name="post_content" placeholder="Enter Description" required value="<?php if (!empty($groupDetail)) { ?> <?php echo $groupDetail->post_content ?> <?php } ?>">

                                </div>

                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">

                                <div class="form-group select_sec">

                                    <label class="pl-0" for="exampleFormControlSelect1">Group Type</label>



                                    <select class="form-control" name="group_type" id="group_type" required>

                                        <?php $args = array(

                                            'Open' => 'Open',

                                            'Closed' => 'Closed',

                                            'Private' => 'Private'

                                        );


                                        foreach ($args as $value) {  ?>

                                            <option value="<?php echo $value; ?>"> <?php echo $value; ?></option>



                                        <?php } ?>

                                    </select>

                                </div>

                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-12 m-auto pt-2">

                                <div class="apply_btn active">

                                    <button id="createGroup" type="submit" class="btn btn_apply">Submit</button>

                                </div>

                            </div>

                        </form>

                        <div class="row justify-content-center"></div>

                    </div>

                </div>

            </div>


    <?php get_footer(); ?>