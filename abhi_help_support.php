<?php 

/* Template Name: Abhi Help & Support */ 

 if ( is_user_logged_in() ) {

get_header('new'); ?>









    <div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">



             <?php include('user_topbar.php')?>

            <?php global $current_user; wp_get_current_user(); 

                $welcome_text = get_field('welcome_text');

                $disaster_title = get_field('disaster_title');

                $disaster_sub_title = get_field('disaster_sub_title');

                $disaster_description = get_field('disaster_description');

                $disaster_pic = get_field('disaster_pic');

                $responders_title = get_field('responders_title');

                $responders_sub_title = get_field('responders_sub_title');

                $responders_description = get_field('responders_description');

                $responders_pic = get_field('responders_pic');

                $side_pic = get_field('side_pic');

            ?>



           <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3 profile-setting-page">

           <div class="main_box_center_tickit col-xl-11 donation_tab_pills">

            <div class="row">

              <div class="col-md-4">

                <div class="side_profile_view text-center">

                  <div class="profile_sec_top">

                      <a href="<?php echo esc_url( um_user_profile_url() ); ?>"><?php echo get_avatar( um_user( 'ID' ), 120 ); ?></a>

                  </div>

                  <div class="um-account-name">

                      <a href="<?php echo esc_url( um_user_profile_url() ); ?>"><?php echo esc_html( um_user( 'display_name' ) ); ?></a>

                    <div class="um-account-profile-link">

                      <a href="<?php echo esc_url( um_user_profile_url() ); ?>" class="um-link"><?php _e( 'View profile', 'ultimate-member' ); ?></a>

                  </div>

                </div>

                <div class="linked_page_left">

                  <a href="<?php echo esc_url( UM()->page($id) ); ?>/profile-setting">Profile Setting</a>

                    <a href="<?php echo esc_url( UM()->page($id) ); ?>/change-password">Change Password</a>

                    <a href="<?php echo esc_url( UM()->page($id) ); ?>/help-support" class="active">Help & Support</a>

                  </div>

                </div>

              </div>





              <div class="col-md-8">

                

              

              <div class="tab-pane fade show" id="pills-help-support" role="tabpanel" aria-labelledby="pills-profile-tab">

                                <div class="main_pr_setting">

                                    <div class="d-flex">

                                        <img class="setting_icon" src="../wp-content/themes/astra/assets/images/ProfileSettingImg.png">

                                        <h5 class="setting_title ml-2">Setting</h5>

                                    </div>

                                    <div class="mail-text">

                                        <div>

                                            <label class="setting_subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label>

                                        </div>    

                                        

                                    </div>

                                </div>

                                <div class="search-item">

                                    <form id="" method="" name="" action="">

                                        <div class="row">

                                            <div class="col-xl-12">

                                                <div>

                                                    <div class="form-group">

                                                        <input type="text" class="form-control" id="" placeholder="Search for your questions">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                                <div class="tab-item">

                                    <div>

                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">

                                            <li class="nav-item">

                                                <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>

                                            </li>

                                            <li class="nav-item">

                                                <a class="nav-link" id="pills-profile-1-tab" data-toggle="pill" href="#pills-profile-1" role="tab" aria-controls="pills-profile-1" aria-selected="false">Profile</a>

                                            </li>

                                            <li class="nav-item">

                                                <a class="nav-link" id="pills-cordination-center-tab" data-toggle="pill" href="#pills-cordination-center" role="tab" aria-controls="pills-cordination-center" aria-selected="false">Cordination Center</a>

                                            </li>

                                            <li class="nav-item">

                                                <a class="nav-link" id="pills-knowledge-tab" data-toggle="pill" href="#pills-knowledge" role="tab" aria-controls="pills-contact" aria-selected="false">Knowledge</a>

                                            </li>

                                        </ul>

                                    </div>

                                    <div class="tab-content" id="pills-tabContent">

                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                            <div id="accordion" class="accordion">

                                                <div class="row">

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-1">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">

                                                                               What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-2">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">

                                                                               Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-3">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-4">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">

                                                                               Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-5">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-6">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-7">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">

                                                                                Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-8">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-9">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-10">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-11">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">

                                                                               Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-12">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pills-profile-1" role="tabpanel" aria-labelledby="pills-profile-1-tab">

                                            <div id="accordion" class="accordion">

                                                <div class="row">

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-1">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">

                                                                               What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-2">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">

                                                                               Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-3">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-4">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">

                                                                               Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-5">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-6">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-7">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">

                                                                                Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-8">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-9">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-10">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-11">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">

                                                                               Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-12">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pills-cordination-center" role="tabpanel" aria-labelledby="pills-cordination-center-tab">

                                            <div id="accordion" class="accordion">

                                                <div class="row">

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-1">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">

                                                                               What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-2">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">

                                                                               Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-3">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-4">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">

                                                                               Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-5">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-6">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-7">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">

                                                                                Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-8">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-9">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-10">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-11">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">

                                                                               Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-12">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="pills-knowledge" role="tabpanel" aria-labelledby="pills-knowledge-tab">

                                            <div id="accordion" class="accordion">

                                                <div class="row">

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-1">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">

                                                                               What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-2">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">

                                                                               Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-3">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-4">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">

                                                                               Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-5">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-6">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-7">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">

                                                                                Where can I get some?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-8">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-9">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">

                                                                                What is Lorem Ipsum?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-10">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">

                                                                                Why do we use it?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-11">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">

                                                                               Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="row">

                                                            <div class="col-lg-12">

                                                                <div class="card">

                                                                    <div class="card-header" id="heading-12">

                                                                        <h5 class="mb-0">

                                                                            <a href="javascript:void(0);" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">

                                                                                Where does it come from?

                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordion">

                                                                        <div class="card-body">

                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="get-in-touch">

                                    <div class="d-flex justify-content-between w-100 align-items-center">

                                        <div class="still-question">

                                            <div class="d-flex w-100 align-items-center">

                                                <div class="image">

                                                    <img src="https://via.placeholder.com/58x58" alt="" height="" width="" title="">    

                                                </div>

                                                <div class="title ml-3">

                                                    <h2>Still have questions?</h2>

                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                                </div>

                                                

                                            </div>

                                        </div>

                                        <div class="btn-touch">

                                            <a href="javascript:void(0);" title="Get in touch" class="btn btn-primary">Get in touch</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

              

              

              

              </div>

            </div>

          </div>





                <div class="faq_tab_pills hide-accordian-cls mt-4">

                                        

                                        <div class="tab-pane fade accordian_Sec" id="pills-know" role="tabpanel" aria-labelledby="pills-contact-tab">

                                                <div class="row " id="accordion">                                                   

                                                    <div class="col-xl-6">

                                                        <div class="card">

                                                            <div class="card-header" id="heading3">

                                                                <h5 class="mb-0 panel-title">

                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">

                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod.

                                                                    </button>

                                                                </h5>

                                                            </div>

                                                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">

                                                                <div class="card-body">

                                                                   Vitae suscipit tellus mauris a diam maecenas. Netus et malesuada fames ac turpis egestas integer. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Magna fringilla urna porttitor rhoncus dolor purus.

                                                                </div>

                                                            </div>

                                                        </div>

                                                       

                                                        

                                                    </div>    

                                                </div>                                                

                                            </div>

                                        </div>            



                </div> 

            </div>



            

            



        </div>  

        <?php include('common_user_footer.php')?>      

    </div>



    <script type="text/javascript">

   function readURLprofile(input) {

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

   

     $("#imageUpload").change(function() {

   

     var form = $('imageuploadform')[0]; // You need to use standard javascript object here

     var formData = new FormData(form);

   

   

       var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

   

       readURLprofile(this);

   

   

        $.ajax({

           url :ajaxurl,             

           type: "POST",

           data:  formData,

           contentType: false,

            cache: false,

           processData: false,

           success: function(data)

            {

              console.log(data);

            },

           error: function(data)

           {

             console.log("error");

                 console.log(data);

           }

        });

   });

</script>

<script type="text/javascript">

    function readURLprofile1(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

               $('.imagePreview1').css('background-image', 'url('+e.target.result +')');

               $('.imagePreview1').hide();

               $('.imagePreview1').fadeIn(650);

            }

            reader.readAsDataURL(input.files[0]);

        }

   }

   

     $("#imageUpload1").change(function() {

   

     var form = $('imageuploadform')[0]; // You need to use standard javascript object here

     var formData = new FormData(form);

   

   

       var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

   

       readURLprofile1(this);

   

   

        $.ajax({

           url :ajaxurl,             

           type: "POST",

           data:  formData,

           contentType: false,

            cache: false,

           processData: false,

           success: function(data)

            {

              console.log(data);

            },

           error: function(data)

           {

             console.log("error");

                 console.log(data);

           }

        });

   });

</script>

<script type="text/javascript">

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