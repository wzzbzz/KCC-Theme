<?php
// Check if the user is logged in and get the current user
if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}

$current_user_id = get_current_user_id();
// $user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : $current_user_id;

// Check if the current user is viewing their own profile
$is_own_profile = ($current_user_id === $user_id);

$results = $wpdb->get_row( 
    $wpdb->prepare( 
        "SELECT * FROM user_experience WHERE user_id = %d", 
        $user_id 
    )
);
$myExperience = array();

// Check if results are found
if ( !empty($results) ) {
    // Get the disaster type
    $experience_type = $results->disaster_type;

    // Explode the disaster type into an array
    $myExperience  = explode(",", $experience_type);
} 

$experience_other= '';

if ( !empty($results) ) {
    $experience_other =  $results->other_info;

}

// Output the contents of $myExperience
// echo "<pre>";
// print_r($myExperience);

?>

<div class="main_my_pro p-3">
    <div class="main_pro_tab nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
        <div class="align-items-center pro_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png">
            <span>Experience</span>
        </div>
        <?php if ($is_own_profile): ?>
        <div class="align-items-center pro_ico" id="displayExperience">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Union 4.png">
            <span><a href="/profile-edit-experience/">Edit Experience</a></span>
        </div>
        <?php endif; ?>
    </div>
    <div class="my_pro_title">
        <h4> <?php
        if (empty($myExperience)) {
            echo "No Experience is available";
        } else {
            echo "Experience";
        }
        ?></h4>
    </div>
<div class="row">
            <?php
                $experienceToCheck = ['Hurricane', 'Flooding', 'Earthquake', 'Landslide','Severe Heat','Snowstorm','Tornado'];
            if ((array_intersect($experienceToCheck, $myExperience))) : ?>
          <div class="col-md-6 mb-3">
            <div class="input_main">
            <div class="d-flex justify-content-between">
            <div class="col-md-8"><span style="font-size:16px;font-weight:700">Severe Weather</span></div>
            </div>
            <?php if (in_array('Hurricane',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Hurricane</span></div>
                </div>
                <?php endif; ?>
                <?php if (in_array('Flooding',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Flooding</span></div>
                </div>
                <?php endif; ?>
                <?php if (in_array('Earthquake',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Earthquake</span></div>
                </div>
                <?php endif; ?>
                <?php if (in_array('Landslide',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Landslide</span></div>
                </div>
                <?php endif; ?>
                <?php if (in_array('Severe Heat',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Severe Heat</span></div>
                </div>
                <?php endif; ?>
                <?php if (in_array('Snowstorm',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Snowstorm</span></div>
                </div>
                <?php endif; ?>               
                <?php if (in_array('Tornado',$myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8"><span class="input_b">Tornado</span></div>
                </div>
                <?php endif; ?>               
            </div>
        </div>
        <?php endif; ?>  
        
        

<?php
$terrToCheck = ['Bomb', 'Shooting', 'Biological'];
if (array_intersect($terrToCheck, $myExperience)) : ?>
    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <span style="font-size:16px; font-weight:700">Terrorist Attack</span>
                </div>
            </div>
          

            <?php if (in_array('Bomb', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Bomb</span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_array('Shooting', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Shooting</span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_array('Biological', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Biological</span>
                    </div>
                </div>
            <?php endif; ?>         

        </div>
    </div>
<?php endif; ?>

<?php
 
   $fireToCheck = ['Fire-emergency'];
   if (array_intersect($fireToCheck, $myExperience)) : ?>
       <div class="col-md-6 mb-3">
           <div class="input_main">
               <div class="d-flex justify-content-between">    
                   <div class="col-md-8">
                       <span style="font-size:16px; font-weight:700">Fire-emergency</span>
                   </div>
               </div>                
               <?php if (in_array('Fire-emergency', $myExperience)) : ?>
                   <div class="row">
                       <div class="col-md-8">
                           <span class="input_b">Fire-emergency</span>
                       </div>
                   </div>
               <?php endif; ?>                          
           </div>
       </div>            
   <?php endif; ?>
   



   <?php
    $spillToCheck = ['Spill'];
    if (array_intersect($spillToCheck, $myExperience)) : ?>
        <div class="col-md-6 mb-3">
            <div class="input_main">
                <div class="d-flex justify-content-between">
                    <div class="col-md-8">
                        <span style="font-size:16px; font-weight:700">Hazardous Material/Spill/ Chemical Release</span>
                    </div>
                </div>

                <?php if (in_array('Spill', $myExperience)) : ?>
                    <div class="row">
                        <div class="col-md-8">
                            <span class="input_b">Hazardous Material/Spill/ Chemical Release</span>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    <?php endif; ?>

    <?php
$experienceToCheck = ['Collapse', 'Weakened-Structures', 'Disasters', 'Radiological'];
if (array_intersect($experienceToCheck, $myExperience)) : ?>
    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <span style="font-size:16px; font-weight:700">Structural Type</span>
                </div>
            </div>

            <?php if (in_array('Collapse', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Collapse</span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_array('Weakened-Structures', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Weakened-Structures</span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_array('Disasters', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Nuclear Power Disasters</span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_array('Radiological', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Radiological Event</span>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>


    <?php
    $CasualtyToCheck = ['Casualty'];
    if (array_intersect($CasualtyToCheck, $myExperience)) : ?>
        <div class="col-md-6 mb-3">
            <div class="input_main">
                <div class="d-flex justify-content-between">
                    <div class="col-md-8">
                        <span style="font-size:16px; font-weight:700">Medical Emergency/Mass Casualty</span>
                    </div>
                </div>
                
                <?php if (in_array('Casualty', $myExperience)) : ?>
                    <div class="row">
                        <div class="col-md-8">
                            <span class="input_b">Medical Emergency/Mass Casualty</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>


    <?php
$utilioCheck = ['Utility-outage'];
if (array_intersect($utilioCheck, $myExperience)) : ?>
    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <span style="font-size:16px; font-weight:700">Utility-outage</span>
                </div>
            </div>
            <?php if (in_array('Utility-outage', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Utility-outage</span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>




        
        <?php
$missingToCheck = ['Missing-persons'];
if (array_intersect($missingToCheck, $myExperience)) : ?>
    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <span style="font-size:16px; font-weight:700">Missing-persons</span>
                </div>
            </div>

            <?php if (in_array('Missing-persons', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Missing-persons</span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php
$utiliToCheck = ['Utility-outage'];
if (array_intersect($utiliToCheck, $myExperience)) : ?>
    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <span style="font-size:16px; font-weight:700">Workplace Violence Or Threat Of Violence</span>
                </div>
            </div>
            <?php if (in_array('Utility-outage', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Workplace Violence Or Threat Of Violence</span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php 
$OutbreakToCheck = ['Outbreak'];
if (array_intersect($OutbreakToCheck, $myExperience)) : ?>
    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <span style="font-size:16px; font-weight:700">Epidemic / Pandemic Outbreak</span>
                </div>
            </div>

            <?php if (in_array('Outbreak', $myExperience)) : ?>
                <div class="row">
                    <div class="col-md-8">
                        <span class="input_b">Epidemic / Pandemic Outbreak</span>
                    </div>
                </div>
            <?php endif; ?>                          
        </div>
    </div>
<?php endif; ?>

<?php
$otherToCheck = ['Other'];
if (array_intersect($otherToCheck, $myExperience) || $experience_other) : ?>

    <div class="col-md-6 mb-3">
        <div class="input_main">
            <div class="row">
                <div class="col-md-8">
                    <span class="input_b">Other: </span>
                    <span class="input_r"><?php echo htmlspecialchars($experience_other); ?></span>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

  
    </div>
</div>
