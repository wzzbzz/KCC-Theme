 <div class="row justify-content-end mt-3">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <div class="col-xl-4 col-lg-3 col-md-4 order-lg-1 order-1">
                <div class="top_title">
                    <h5><?php echo "hello ";the_title()?></h5>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-8 order-lg-2 order-3">
                <div class="serch_sec_top">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search for resources, reports, forms etc">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-8 order-lg-3 order-2">
                <div class="right_top_sec">
                    <div class="notification_sec btn-group"> <?php echo basename(__FILE__); ?> <!-- Outputs the filename -->
                        <a href="#"  class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/notifiocation_icon.png" class="img-fluid"></a>

                        <div class="dropdown-menu dropdown-menu-right">                                
                            <div class="title_notification">
                                <div class="col-xl-9 col-lg-8">
                                    <h4>Notifications</h4>
                                    <p>Catch up on updates form all your accounts.</p>
                                </div>
                                <div class="col-xl-3 col-lg-4 text-right">
                                    <img src=".<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png" class="img-fluid"><br>
                                    <a href="#">View All</a>
                                </div >
                            </div>
                            <div class="mian_notification_sec">
                                <img src="images/notification_icon.png" class="img-fluid">
                                <div class="w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5>Notification Title</h5>
                                        <span>2 hrs ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                            </div>
                            <div class="mian_notification_sec">
                                <img src="images/notification_icon4.png" class="img-fluid">
                                <div class="w-100">  
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>User Name</h5>
                                            <span>2 hrs ago</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Requested to join to your <br> <span>Group Name.</span></p>
                                            <div>
                                                <a href="#" class="mr-2">Approve</a>
                                                <a href="#" class="red">Deny</a>
                                            </div>
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                            <div class="mian_notification_sec">
                                <img src="images/notification_icon3.png" class="img-fluid">
                                <div class="w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5>Notification Title</h5>
                                        <span>2 hrs ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                            </div>
                            <div class="mian_notification_sec">
                                <img src="images/notification_icon4.png" class="img-fluid">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5>Notification Title</h5>
                                        <span>2 hrs ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                            </div>
                            <div class="mian_notification_sec">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon2.png" class="img-fluid">
                                <div class="w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5>Notification Title</h5>
                                        <span>2 hrs ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                            </div>
                            <div class="mian_notification_sec">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png" class="img-fluid">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5>Notification Title</h5>
                                        <span>2 hrs ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                            </div>
                        </div>

                    </div> 
                    <div class="notification_sec"> <?php echo basename(__FILE__); ?> <!-- Outputs the filename -->
                    <div>D:\worldcaressvn\wp-content\themes\astra\user_header.php</div>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_icon.png" class="img-fluid"></a>
                    </div> 
                    <?php $avatar_url = get_avatar_url(get_avatar( $curauth->ID, 100 ),     
                        array("size"=>50)); 
                        $current_user = wp_get_current_user();
                        $current_user_id = $current_user->ID;
                        $fname = get_user_meta( $current_user_id, 'fname' , true );
                        $pic = get_user_meta( $current_user_id, 'file' , true );
                        ?>                        
                        <div class="back_bg">
                            <div class="dropdown right_dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $fname; ?> <img src="<?php echo $pic ; ?>" class="img-fluid mr-2 profile_icn"><i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton" >
                                    <button class="dropdown-item profile_main_drop" onclick="window.location.href='<?php echo get_site_url(); ?>/account/';" type="button" id="profileButton">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_profile_icon.png"   class="img-fluid"> My Profile
                                    </button>
                                    <button class="dropdown-item" onclick="window.location.href='<?php echo get_site_url(); ?>';" type="button">
                                        <!-- <img src="<?php /*echo get_template_directory_uri();*/ ?>/assets/images/logout_icon.png" class="img-fluid"> Logout -->
                                        <a href="<?php echo wp_logout_url('<?php echo get_site_url(); ?>/') ?>">Log out</a>
                                    </button>                                       
                                </div>
                            </div>
                        </div>                       
                </div>
            </div>                
        </div>
    </div>  
    