<?php
// Check if the user is logged in
if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}
// $uid= $_GET['id'];

$current_user_id = get_current_user_id();


$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : $current_user_id;

// Retrieve user data and ensure valid user
$user_info = get_userdata($user_id);
$array= get_user_meta($user_id);

$current_employment_status = $array['currently_employed'][0];
$website= $array['userWeb'][0];

$user = new KCC\User($user_id);

// echo $current_employment_status; // Output: Yes

if (!$user_info) {
    echo '<div class="alert alert-danger">User not found.</div>';
    exit;
}

// Check if the current user is viewing their own profile
$is_own_profile = ($current_user_id === $user_id);

?>

<div class="main_my_pro p-3">
    <div class="main_pro_tab nav nav-pills nav-pills1 mb-3 justify-content-between">
        <div class="align-items-center pro_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png">
            <span>Profile</span>
        </div>



        <?php if ($is_own_profile): ?>
            <div class="align-items-center pro_ico" id="profilepersonal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Union 4.png">
                <span><a href="/profile/">Edit Personal Info</a></span>
            </div>


        <?php endif; ?>
    </div>
        
    <div class="my_pro_title">
        <h4>Personal Information</h4>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="input_main">
                <div class="row">
                    <div class="col-md-8"><span class="input_b">First Name</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->first_name(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Last Name</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->last_name(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Nickname</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->nickname(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Birth Year</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->birth_year(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Gender</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->gender(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Country</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->country(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">State</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->state(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">City</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->city(),"Not Provided");?></span></div>`
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Zip Code</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->zip(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Race/Ethnicity</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->race(), "Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Language</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->language(),"Not Provided");?></span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input_main">
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Highest Education Level</span></div>
                    <div class="col-md-4"><span class="input_r"></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Have You Worked On a Hazardous Waste Site In The Past Year?</span></div>
                    <div class="col-md-4">
                    <span class="input_r">
                        <?php echo $user->print_field($user->hazardous_waste_site(),"Not Provided");?>
                    </span>
              
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Are you currently employed?</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->employment_status(),"Not Provided");?></span></div>

                    <!-- <div class="col-md-4"><span class="input_r">
                        <?php //echo $current_employment_status(get_user_meta($user_id, 'currently_employed', true)) == 'yes' ? 'Yes' : 'No'; 
                        ?>
                    </span></div> -->
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Occupation</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->occupation(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Employer</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->employer(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Represented by a union?</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->union(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Job Title</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->job_title(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Occupational Field</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->occupational_field(),"Not Provided");?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Work Setting</span></div>
                    <div class="col-md-4"><span class="input_r"><?= $user->print_field($user->work_setting(),"Not Provided");?></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
