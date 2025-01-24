<style>
    .back-btn a{
        background:#F96703;
        color:#fff;
        margin-bottom: 20px;
    }
</style>

<?php
/* Template Name: Member Profile */
session_start();

get_header('new'); 

if (isset($_SERVER['HTTP_REFERER'])) {
    $previous_url = $_SERVER['HTTP_REFERER'];
} else {
    $previous_url = site_url('my-dashboard');
}

$user_id = $_GET['id']; // The ID of the profile user
$current_user_id = get_current_user_id(); // Get the ID of the logged-in user

// Function to check if the current user can view the profile
function should_show_user_profile($profile_user_id) {
    // If the current user is an admin, allow access to any profile
    if (current_user_can('administrator')) {
        return true;
    }

    // Get the group IDs where the current user is either a member or admin
    $user_groups = learndash_get_users_group_ids(get_current_user_id());

    // If there are no groups, return false
    if (empty($user_groups)) {
        return false;
    }

    // Check if the profile user is in any of the current user's groups
    foreach ($user_groups as $group_id) {
        // Get the members of each group
        $group_members = learndash_get_groups_user_ids($group_id);
        
        // If the profile user is in the group, allow access
        if (in_array($profile_user_id, $group_members)) {
            return true;
        }
    }

    // Default to false if no matching group is found
    return false;
}

?>

    <br>

    <div style="display:none;"> <?php the_content(); ?> </div>

    <div class="">

        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">

                <?php include('user_topbar.php') ?>

            </div>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3">

                <div class="col-xl-7 col-lg-8 col-md-10">

                    <div class="top_heading_sec">

                        <?php if ($welcome_text) { ?>

                            <small><?php echo $welcome_text; ?></small>

                        <?php } ?>

                    </div>

                </div>
                <div class="follow btn-1 back-btn mr-4" style="text-align: right;">
                    <a href="<?php echo $previous_url;?>" class="btn btn-primary follwMember ums_btn818" type="button">
                        <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
                    </a>
                </div>

    <?php
    // Check if the current user is allowed to view this profile
    if ($user_id && should_show_user_profile($user_id)) {
    ?>

        <div class="profile-section" style="margin-bottom: 40px;">
            <?php
            // Include the profile display template from the Astra theme directory
            include get_template_directory() . '/profile_display_personal_info.php';
            ?>
        </div>

        <div class="profile-section" style="margin-bottom: 40px;">
            <?php
            // Include the profile display template from the Astra theme directory
            include get_template_directory() . '/profile_display_skills.php';
            ?>
        </div>

        <div class="profile-section" style="margin-bottom: 40px;">
            <?php
            // Include the profile display template from the Astra theme directory
            include get_template_directory() . '/profile_display_experience.php';
            ?>
        </div>
        <div class="follow btn-1 back-btn mr-4" style="text-align: right;">
            <a href="<?php echo $previous_url; ?>" class="btn btn-primary follwMember ums_btn818" type="button">
                <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back
            </a>
        </div>
    <?php
    } else { ?>
         <div class="mb-5">
         No Member Details Found
        </div>
   <?php } ?>

<?php 
include('common_user_footer.php');
?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        // Check the current page URL and hide sections as needed
        if (window.location.href.indexOf("member-profile/?id") !== -1) {
            $("#profileskills").hide();
            $("#displayExperience").hide();
        }
    });
</script>
