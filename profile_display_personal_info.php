<?php
// Check if the user is logged in
if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}
// $uid= $_GET['id'];
// // Get the user ID from the query string or default to the current logged-in user
$current_user_id = get_current_user_id();
// $user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : $current_user_id;

// Retrieve user data and ensure valid user
$user_info = get_userdata($user_id);
$array= get_user_meta($user_id);

$current_employment_status = $array['currently_employed'][0];
$website= $array['userWeb'][0];

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
                <span><a href="/profile-edit-personal-info/">Edit Personal Info</a></span>
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
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'first_name', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Last Name</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'last_name', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">User Name</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html($user_info->nickname); ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Birth Year</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'dob', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Gender</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'gendar', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Country</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'country', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">State</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'state', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">City</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'city', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Zip Code</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'code', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Race/Ethnicity</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'race', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Language</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'language', true)) ?: 'Not provided'; ?></span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input_main">
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Highest Education Level</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'education', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Have You Worked On a Hazardous Waste Site In The Past Year?</span></div>
                    <div class="col-md-4">
                    <span class="input_r">
                        <?php  //echo esc_html(get_user_meta($user_id, 'hazardous_waste_site', true)) ?: 'No';
                        if (empty($website)) {
                            echo 'No';
                        } else {
                            echo 'Yes: ' . esc_html($website);
                        }
                        ?>
                    </span>
              
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Are you currently employed?</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo $current_employment_status; ?></span></div>

                    <!-- <div class="col-md-4"><span class="input_r">
                        <?php //echo $current_employment_status(get_user_meta($user_id, 'currently_employed', true)) == 'yes' ? 'Yes' : 'No'; 
                        ?>
                    </span></div> -->
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Occupation</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'occupation', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Employer</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'employer', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Represented by a union?</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'rep_union', true)) ?: 'No'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Job Title</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'job_title', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Occupational Field</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'occup_field', true)) ?: 'Not provided'; ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Work Setting</span></div>
                    <div class="col-md-4"><span class="input_r"><?php echo esc_html(get_user_meta($user_id, 'work_setting', true)) ?: 'Not provided'; ?></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
