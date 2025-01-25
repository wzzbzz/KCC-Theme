<style>
.emergency_textbox, .general_textbox, .repair_textbox, 
.property_textbox, .food_textbox, .health_textbox, .volunteer_textbox {
    display: none; /* Hidden by default */}

</style>
<?php
if (is_user_logged_in()) {

    /* Template Name: Profile Edit Skills Info */
    include 'aq_resizer.php';
    get_header('new');

    global $wpdb;
    $user_id = get_current_user_id();

    // Fetch user skills from the database
    $query = $wpdb->get_results("SELECT * FROM user_skills WHERE user_id = '$user_id'", ARRAY_A);

    // Initialize variables for the fields, in case no data exists in the query
    $all_skills = isset($query[0]['skill_type']) ? $query[0]['skill_type'] : '';
    $emergencyOther = isset($query[0]['emergency_other']) ? $query[0]['emergency_other'] : '';
    $generalOther = isset($query[0]['general_other']) ? $query[0]['general_other'] : '';
    $repairOther = isset($query[0]['repair_other']) ? $query[0]['repair_other'] : '';
    $propertyOther = isset($query[0]['property_other']) ? $query[0]['property_other'] : '';
    $healthOther = isset($query[0]['health_other']) ? $query[0]['health_other'] : '';
    $foodOther = isset($query[0]['food_other']) ? $query[0]['food_other'] : '';
    $volunteerOther = isset($query[0]['volunteer_other']) ? $query[0]['volunteer_other'] : '';
    $additionalInfo = isset($query[0]['additional_info']) ? $query[0]['additional_info'] : '';

    $mySkills = explode(",", $all_skills);
?>

<div class="container">
    <div class="row justify-content-end mt-3">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <?php include('user_topbar.php'); ?>
        </div>
    </div>

    <div class="row justify-content-end mt-3 mb-4 footer_f2 profile-setting-page mr-1">
        <div class="col-xl-11 col-md-11">
            <div class="donation_tab_pills mb-5">
                <div class="row second_input">
                    <div class="col-md-12 mb-3">
                        <div class="input_main1">
                            <div class="input_hed nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                                <div class="align-items-center pro_img">
                                    <img src="<?= get_template_directory_uri();?>/assets/images/profile_settting.png">
                                    <span>Skills</span>
                                </div>
                            </div>

                            <div class="form check-boxess m-0">
                                <form method="post">
                                    <input type="hidden" name="add_user_skills" value="add_user_skills">
                                    <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>">

                                    <!-- Emergency Services Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>Emergency Services</h4>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Emergency" name="skills[]"
                                                    <?php if (in_array('Emergency', $mySkills)) { echo 'checked'; } ?>>Emergency Services
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Evacuation" name="skills[]"
                                                    <?php if (in_array('Evacuation', $mySkills)) { echo 'checked'; } ?>>Evacuation
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Crowd-control" name="skills[]"
                                                    <?php if (in_array('Crowd-control', $mySkills)) { echo 'checked'; } ?>>Crowd Control
                                                </label>
                                            </div>
                                        </div>
<!--
                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Emergency_N/A" name="skills[]"
                                                    <?php if (in_array('Emergency_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- Emergency 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="emergency_other" value="emergency_other" name="skills[]"
                                                    <?php if (!empty($emergencyOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="emergency_textbox">
                                                <input type="text" class="form-control" name="emergency_other" id="emergency_field" value="<?php echo $emergencyOther; ?>">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- General Services Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>General Services Needed *</h4>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Animal-services" name="skills[]"
                                                    <?php if (in_array('Animal-services', $mySkills)) { echo 'checked'; } ?>>Animal Services
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Canvassing" name="skills[]"
                                                    <?php if (in_array('Canvassing', $mySkills)) { echo 'checked'; } ?>>Canvassing
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Communications" name="skills[]"
                                                    <?php if (in_array('Communications', $mySkills)) { echo 'checked'; } ?>>Communications
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Data Collection/Entry" name="skills[]"
                                                    <?php if (in_array('Data Collection/Entry', $mySkills)) { echo 'checked'; } ?>>Data Collection/Entry
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Disaster Child Care" name="skills[]"
                                                    <?php if (in_array('Disaster Child Care', $mySkills)) { echo 'checked'; } ?>>Disaster Child Care
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Donation Management/Warehousing" name="skills[]"
                                                    <?php if (in_array('Donation Management/Warehousing', $mySkills)) { echo 'checked'; } ?>>Donation Management/Warehousing
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Logistics" name="skills[]"
                                                    <?php if (in_array('Logistics', $mySkills)) { echo 'checked'; } ?>>Logistics
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Reunification" name="skills[]"
                                                    <?php if (in_array('Reunification', $mySkills)) { echo 'checked'; } ?>>Reunification
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Traffic Management" name="skills[]"
                                                    <?php if (in_array('Traffic Management', $mySkills)) { echo 'checked'; } ?>>Traffic Management
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Interpretation/Translation" name="skills[]"
                                                    <?php if (in_array('Interpretation/Translation', $mySkills)) { echo 'checked'; } ?>>Interpretation/Translation
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Transportation" name="skills[]"
                                                    <?php if (in_array('Transportation', $mySkills)) { echo 'checked'; } ?>>Transportation
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Coordination" name="skills[]"
                                                    <?php if (in_array('Coordination', $mySkills)) { echo 'checked'; } ?>>Coordination
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Shelter Services" name="skills[]"
                                                    <?php if (in_array('Shelter Services', $mySkills)) { echo 'checked'; } ?>>Shelter Services
                                                </label>
                                            </div>
                                        </div>
<!-- 
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="General_N/A" name="skills[]"
                                                    <?php if (in_array('General_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- General 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="general_other" value="general_other" name="skills[]"
                                                    <?php if (!empty($generalOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="general_textbox">
                                                <input type="text" class="form-control" name="general_other" id="general_field" value="<?php echo $generalOther; ?>">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- Repair and Rebuild Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>Repair And Rebuild *</h4>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Framing" name="skills[]"
                                                    <?php if (in_array('Framing', $mySkills)) { echo 'checked'; } ?>>Framing
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Insulation-installation" name="skills[]"
                                                    <?php if (in_array('Insulation-installation', $mySkills)) { echo 'checked'; } ?>>Insulation Installation
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Sheetrock" name="skills[]"
                                                    <?php if (in_array('Sheetrock', $mySkills)) { echo 'checked'; } ?>>Sheetrock
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Mudding-taping" name="skills[]"
                                                    <?php if (in_array('Mudding-taping', $mySkills)) { echo 'checked'; } ?>>Mudding And Taping
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Painting-sanding" name="skills[]"
                                                    <?php if (in_array('Painting-sanding', $mySkills)) { echo 'checked'; } ?>>Painting And Sanding
                                                </label>
                                            </div>
                                        </div>
 <!--
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="repair_N/A" name="skills[]"
                                                    <?php if (in_array('repair_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- Repair 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="repair_other" value="repair_other" name="skills[]"
                                                    <?php if (!empty($repairOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="repair_textbox">
                                                <input type="text" class="form-control" name="repair_other" value="<?php echo $repairOther; ?>" id="repair_field">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- Property Preservation Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>Property Preservation *</h4>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Assessments" name="skills[]"
                                                    <?php if (in_array('Assessments', $mySkills)) { echo 'checked'; } ?>>Assessments
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Debris-removal" name="skills[]"
                                                    <?php if (in_array('Debris-removal', $mySkills)) { echo 'checked'; } ?>>Debris Removal
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Mold-treatment" name="skills[]"
                                                    <?php if (in_array('Mold-treatment', $mySkills)) { echo 'checked'; } ?>>Mold Treatment
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Muck-out" name="skills[]"
                                                    <?php if (in_array('Muck-out', $mySkills)) { echo 'checked'; } ?>>Muck Out
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Beautification" name="skills[]"
                                                    <?php if (in_array('Beautification', $mySkills)) { echo 'checked'; } ?>>Light Clean Up/Beautification
                                                </label>
                                            </div>
                                        </div>
<!--
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Property_N/A" name="skills[]"
                                                    <?php if (in_array('Property_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- Property 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="property_other" value="property_other" name="skills[]"
                                                    <?php if (!empty($propertyOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="property_textbox">
                                                <input type="text" class="form-control" name="property_other" value="<?php echo $propertyOther; ?>" id="property_field">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- Health Services Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>Health Services *</h4>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Licensed" name="skills[]"
                                                    <?php if (in_array('Licensed', $mySkills)) { echo 'checked'; } ?>>Physical Health Services: Licensed Doctor
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Registered" name="skills[]"
                                                    <?php if (in_array('Registered', $mySkills)) { echo 'checked'; } ?>>Physical Health Services: Registered Nurse
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="EMT/Paramedic" name="skills[]"
                                                    <?php if (in_array('EMT/Paramedic', $mySkills)) { echo 'checked'; } ?>>EMT/Paramedic
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="CPR" name="skills[]"
                                                    <?php if (in_array('CPR', $mySkills)) { echo 'checked'; } ?>>First Aid And CPR
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Practitioner" name="skills[]"
                                                    <?php if (in_array('Practitioner', $mySkills)) { echo 'checked'; } ?>>Mental Health: Licensed Practitioner
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Support" name="skills[]"
                                                    <?php if (in_array('Support', $mySkills)) { echo 'checked'; } ?>>Mental Health: Compassionate Support
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Public" name="skills[]"
                                                    <?php if (in_array('Public', $mySkills)) { echo 'checked'; } ?>>Public Health
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Spiritual-emotional" name="skills[]"
                                                    <?php if (in_array('Spiritual-emotional', $mySkills)) { echo 'checked'; } ?>>Spiritual And Emotional Care
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Medical_data" name="skills[]"
                                                    <?php if (in_array('Medical_data', $mySkills)) { echo 'checked'; } ?>>Medical Data Entry
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="POD" name="skills[]"
                                                    <?php if (in_array('POD', $mySkills)) { echo 'checked'; } ?>>Medication Dispensing: POD
                                                </label>
                                            </div>
                                        </div>
<!-- 
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Health_N/A" name="skills[]"
                                                    <?php if (in_array('Health_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- Health 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="health_other" value="health_other" name="skills[]"
                                                    <?php if (!empty($healthOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="health_textbox">
                                                <input type="text" class="form-control" name="health_other" value="<?php echo $healthOther; ?>" id="health_field">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- Food Services Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>Food Services *</h4>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Food-preparation" name="skills[]"
                                                    <?php if (in_array('Food-preparation', $mySkills)) { echo 'checked'; } ?>>Food Preparation
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Food-service" name="skills[]"
                                                    <?php if (in_array('Food-service', $mySkills)) { echo 'checked'; } ?>>Food Service
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Food-distribution" name="skills[]"
                                                    <?php if (in_array('Food-distribution', $mySkills)) { echo 'checked'; } ?>>Food Distribution
                                                </label>
                                            </div>
                                        </div>
<!-- 
                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Food_N/A" name="skills[]"
                                                    <?php if (in_array('Food_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- Food 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="food_other" value="food_other" name="skills[]"
                                                    <?php if (!empty($foodOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="food_textbox">
                                                <input type="text" class="form-control" name="food_other" id="food_field" value="<?php echo $foodOther; ?>">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- Volunteer Management Section -->
                                    <div class="row m-0 p-0 mt-4">
                                        <div class="col-md-12 mb-4">
                                            <h4>Volunteer Management *</h4>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Feeding" name="skills[]"
                                                    <?php if (in_array('Feeding', $mySkills)) { echo 'checked'; } ?>>Feeding
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Greeters/Receptionists" name="skills[]"
                                                    <?php if (in_array('Greeters/Receptionists', $mySkills)) { echo 'checked'; } ?>>Greeters/ Receptionists
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Security" name="skills[]"
                                                    <?php if (in_array('Security', $mySkills)) { echo 'checked'; } ?>>Security
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Runner" name="skills[]"
                                                    <?php if (in_array('Runner', $mySkills)) { echo 'checked'; } ?>>Runner
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Interviewer" name="skills[]"
                                                    <?php if (in_array('Interviewer', $mySkills)) { echo 'checked'; } ?>>Interviewer
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Resource-coordinator" name="skills[]"
                                                    <?php if (in_array('Resource-coordinator', $mySkills)) { echo 'checked'; } ?>>Resource Coordinator
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Volunteer-manager" name="skills[]"
                                                    <?php if (in_array('Volunteer-manager', $mySkills)) { echo 'checked'; } ?>>Volunteer Manager
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Trainer" name="skills[]"
                                                    <?php if (in_array('Trainer', $mySkills)) { echo 'checked'; } ?>>Trainer
                                                </label>
                                            </div>
                                        </div>
 <!--
                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Volunteer_N/A" name="skills[]"
                                                    <?php if (in_array('Volunteer_N/A', $mySkills)) { echo 'checked'; } ?>>N/A
                                                </label>
                                            </div>
                                        </div>
-->
                                        <!-- Volunteer 'Other' Checkbox and Field -->
                                        <div class="col-12 col-lg-2 mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="volunteer_other" value="volunteer_other" name="skills[]"
                                                    <?php if (!empty($volunteerOther)) { echo 'checked'; } ?>>Other
                                                </label>
                                            </div>
                                            <fieldset class="volunteer_textbox">
                                                <input type="text" class="form-control" name="volunteer_other" id="volunteer_field" value="<?php echo $volunteerOther; ?>">
                                            </fieldset>
                                        </div>
                                    </div>

                                    <!-- Additional Information Section -->
                                    <div class="col-12 col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Additional Information</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="additional_info"><?php echo $additionalInfo; ?></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 col-lg-12 mb-3 text-center">
                                        <button class="btn btn-orange">Submit</button>
                                    </div>
                                </form>
                            </div> <!-- /.form -->
                        </div> <!-- /.input_main1 -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.donation_tab_pills -->
        </div> <!-- /.col-xl-11 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<?php
get_footer('new');
}
?>
<script>
$(document).ready(function() {
    // Function to toggle visibility and clear textbox if unchecked
    function toggleVisibility(checkboxSelector, textboxSelector) {
        $(checkboxSelector).on("click", function() {
            if (this.checked) {
                // Show textbox when checkbox is checked
                $(textboxSelector).show();
            } else {
                // Hide and clear textbox when checkbox is unchecked
                $(textboxSelector).hide().find('input').val('');
            }
        });

        // Show textbox if it has a value initially (even if checkbox is not checked)
        if ($(textboxSelector + ' input').val() !== "") {
            $(textboxSelector).show();
        }
    }

    // Apply to each pair of checkbox and textbox
    toggleVisibility("#emergency_other", ".emergency_textbox");
    toggleVisibility("#general_other", ".general_textbox");
    toggleVisibility("#repair_other", ".repair_textbox");
    toggleVisibility("#property_other", ".property_textbox");
    toggleVisibility("#health_other", ".health_inputbox");
    toggleVisibility("#food_other", ".food_textbox");
    toggleVisibility("#health_other", ".health_textbox");
    toggleVisibility("#food_other", ".food_textbox");
    toggleVisibility("#volunteer_other", ".volunteer_textbox");
});



   $(function() {

  $("#emergency_other").on("click",function() {

    $(".emergency_textbox").toggle(this.checked);

  });

  $("#general_other").on("click",function() {

    $(".general_textbox").toggle(this.checked);

  });

  $("#repair_other").on("click",function() {

    $(".repair_textbox").toggle(this.checked);

  });

    $("#property_other").on("click",function() {

    $(".property_textbox").toggle(this.checked);

  });

    $("#health_other").on("click",function() {

    $(".health_textbox").toggle(this.checked);

  });

    $("#food_other").on("click",function() {

    $(".food_textbox").toggle(this.checked);

  });

    $("#volunteer_other").on("click",function() {

    $(".volunteer_textbox").toggle(this.checked);

  });

    $("#severe_type").on("click",function() {

    $(".severe_checkbox").toggle(this.checked);

  });

  

  $("#structural_type").on("click",function() {

   $(".structural_checkbox").toggle(this.checked);



  });

  

  

  $("#terrorist_type").on("click",function() {

    $(".terrorist_checkbox").toggle(this.checked);

  });

   $("#structural_other").on("click",function() {

    $(".disaster_textbox").toggle(this.checked);

  });

});
</script>
 <script src="<?= get_template_directory_uri();?>/assets/js/popper.min.js"></script>
 <script src="<?= get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>