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
// Query to get the skills data for the current user
$results = $wpdb->get_row(
    $wpdb->prepare(
        "SELECT * FROM user_skills WHERE user_id = %d",
        $user_id
    )
);
$mySkills = array();
$emergency_other = '';
$general_other = '';
$repair_other = '';
$property_other = '';
$health_other = '';
$food_other = '';
$volunteer_other = '';
$additional_info = '';
// Check if results are found
if (!empty($results)) {
    $skill_type = $results->skill_type;
    $emergency_other =  $results->emergency_other;
    $general_other =  $results->general_other;
    $repair_other =  $results->repair_other;
    $property_other =  $results->property_other;
    $health_other =  $results->health_other;
    $food_other =  $results->food_other;
    $volunteer_other =  $results->volunteer_other;
    $additional_info =  $results->additional_info;
    $mySkills  = explode(",", $skill_type);
}
?>

<div class="main_my_pro p-3">
    <div class="main_pro_tab nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
        <div class="align-items-center pro_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png">
            <span>Skills</span>
        </div>
        <?php if ($is_own_profile): ?>
            <div class="align-items-center pro_ico" id="profileskills">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Union 4.png">
                <span><a href="/profile-edit-skills/">Edit Skills</a></span>
            </div>
        <?php endif; ?>
    </div>

    <div class="my_pro_title">
        <h4> <?php
                if (empty($mySkills)) {
                    echo "No Skills are available";
                } else {
                    echo "Skills";
                }
                ?></h4>
    </div>

    <div class="row">
        <?php
        $skillsToCheck = ['Emergency', 'Evacuation', 'Crowd-control', 'Emergency_N/A'];
        if ((array_intersect($skillsToCheck, $mySkills) || $emergency_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">Emergency Services</span></div>
                    </div>
                    <?php if (in_array('Emergency', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Emergency Services</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Evacuation', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Evacuation</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Crowd-control', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Crowd Control</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Emergency_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A for Emergency Services</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($emergency_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $emergency_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $generalToCheck = [
            'Animal-services',
            'Canvassing',
            'Communications',
            'Collection/Entry',
            'Disaster-child-care',
            'Warehousing',
            'Logistics',
            'Reunification',
            'Traffic-Management',
            'Interpretation/Translation',
            'Transportation',
            'Coordination',
            'Shelter-Services',
            'General_N/A'
        ];
        if ((array_intersect($generalToCheck, $mySkills) || $general_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">General Services Needed</span></div>
                    </div>
                    <?php if (in_array('Animal-services', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Animal Services</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Canvassing', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Canvassing</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Communications', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Communications</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Collection/Entry', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Data Collection/Entry</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Disaster-child-care', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Disaster Child Care</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Warehousing', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Donation Management/Warehousing</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Logistics', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Logistics</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Reunification', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Reunification</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Traffic-Management', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Traffic Management</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Interpretation/Translation', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Interpretation/Translation</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Transportation', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Transportation</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Shelter-Services', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Shelter Services</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Coordination', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Coordination</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('General_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A for General Services</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($general_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $general_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $propertyToCheck = ['Assessments', 'Debris Removal', 'Mold-treatment', 'Muck Out', 'Beautification', 'Property_N/A'];
        if ((array_intersect($propertyToCheck, $mySkills) || $property_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">Property Preservation</span></div>
                    </div>
                    <?php if (in_array('Assessments', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Assessments</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Debris Removal', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Debris-removal</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Mold-treatment', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Mold Treatment</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Muck Out', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Muck Out</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Beautification', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Light Clean Up/Beautification</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Property_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A for Repair</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($property_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $property_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $repairToCheck = ['Framing', 'Insulation-installation', 'Sheetrock', 'Mudding-taping', 'Painting-sanding', 'repair_N/A'];
        if ((array_intersect($repairToCheck, $mySkills) || $repair_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">Repair and Rebuild</span></div>
                    </div>
                    <?php if (in_array('Framing', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Framing</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Insulation-installation', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Insulation Installation</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Sheetrock', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Sheetrock</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Mudding-taping', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Mudding And Taping</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Painting-sanding', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Painting and Sanding</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('repair_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A for Repair</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($repair_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $repair_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $foodToCheck = ['Food-preparation', 'Food-service', 'Food_N/A'];
        if ((array_intersect($foodToCheck, $mySkills) || $food_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">Food Services</span></div>
                    </div>
                    <?php if (in_array('Food-preparation', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b"> Food Preparation</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Food-service', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Food Service</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Food_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($food_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $food_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $healthToCheck = ['Licensed', 'Registered', 'EMT/Paramedic', 'CPR', 'Practitioner', 'Support', 'Public', 'Spiritual-emotional', 'Medical_data', 'POD', 'Health_N/A'];
        if ((array_intersect($healthToCheck, $mySkills) || $health_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">Health Services</span></div>
                    </div>
                    <?php if (in_array('Licensed', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Health Services: Licensed Doctor</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Registered', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Physical Health Services: Registered Nurse</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('EMT/Paramedic', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">EMT/Paramedic</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('CPR', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">CPR</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Practitioner', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Mental Health: Licensed Practitioner</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Support', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Mental Health: Compassionate Support</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Public', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Public Health</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Spiritual-emotional', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Spiritual And Emotional Care</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Medical_data', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Medical Data Entry</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('POD', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Medication Dispensing: POD</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Health_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($health_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $health_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $volunteerToCheck = [
            'Feeding',
            'Greeters/Receptionists',
            'Security',
            'Runner',
            'Interviewer',
            'Resource-coordinator',
            'Volunteer-manager',
            'Volunteer_N/A',
            'Trainer'
        ];
        if ((array_intersect($volunteerToCheck, $mySkills) || $volunteer_other)) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8"><span style="font-size:16px;font-weight:700">Volunteer Management</span></div>
                    </div>
                    <?php if (in_array('Feeding', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Feeding</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Greeters/Receptionists', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Greeters/Receptionists</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Security', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Security</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Runner', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Runner</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Interviewer', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Interviewer</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Resource-coordinator', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Resource Coordinator</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Volunteer-manager', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Volunteer Manager</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Trainer', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Trainer</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if (in_array('Volunteer_N/A', $mySkills)) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">N/A</span></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($volunteer_other) : ?>
                        <div class="row">
                            <div class="col-md-8"><span class="input_b">Other: </span><span class="input_r"><?php echo $volunteer_other ?></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>




        <?php if ($additional_info) : ?>
            <div class="col-md-6 mb-3">
                <div class="input_main">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-8">
                            <span class="input_b" style="font-size:16px;font-weight:700">Additional Information: </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <span class="input_b"><?php echo $additional_info ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>