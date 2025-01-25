<style>
   .disaster_textbox {
      display: none;
      /* Hidden by default */
   }

   .severe_checkbox {
    border: 1px solid #000; /* This adds a black border with a width of 1px */
    padding: 10px; /* Optional: Adds some space inside the fieldset */
    margin: 10px 0; /* Optional: Adds space outside the fieldset */
}

.structural_checkbox{
   border: 1px solid #000; /* This adds a black border with a width of 1px */
    padding: 10px; /* Optional: Adds some space inside the fieldset */
    margin: 10px 0; /* Optional: Adds space outside the fieldset */ 
}

.terrorist_checkbox{
   border: 1px solid #000; /* This adds a black border with a width of 1px */
    padding: 10px; /* Optional: Adds some space inside the fieldset */
    margin: 10px 0; /* Optional: Adds space outside the fieldset */ 
}

#disaster_field {
    width: 200px;
    box-sizing: border-box; /* Ensures padding and border are included in the width calculation */
}

</style>
<?php
if (is_user_logged_in()) {

   /* Template Name: Profile Edit Experience Info */

   include 'aq_resizer.php';

   get_header('new');
   ?>

   <div class="">
      <div class="row justify-content-end mt-3">
         <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <?php include('user_topbar.php') ?>
         </div>
      </div>
      <div class="row justify-content-end mt-3 mb-4 footer_f2 profile-setting-page mr-1">
         <div class="col-xl-11 col-md-11">
            <div class="row second_input">
               <div class=" col-md-12 mb-3">
                  <div class="input_main1">
                     <div class="input_hed nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                        <div class="align-items-center pro_img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png">
                           <span>Experience</span>
                        </div>
                     </div>
                     <form method="post">
                        <input type="hidden" name="add_user_experience" value="add_user_experience" />
                        <input type="hidden" name="reportsforms_nonce"
                           value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                        <div class="form check-boxess m-0">
                           <div class="row m-0 p-0 mt-4">
                              <div class="col-md-12 mb-4">
                                 <h4>Disaster Type *</h4>
                              </div>
                              <div class="col-12 col-lg-3 mb-3">
                                 <div class="form-check d-flex align-items-center">
                                    <label class="form-check-label">
                                       <?php
                                       global $wpdb;
                                       $table = 'user_experience';
                                       $user_id = get_current_user_id();
                                       $query = $wpdb->get_results("SELECT * FROM user_experience WHERE user_id = '" . $user_id . "' ", ARRAY_A);
                                       $all_experience = $query[0]['disaster_type'];
                                       $otherInfo = $query[0]['other_info'];
                                       $myExperience = explode(",", $all_experience);
                                       ?>
                                       <input type="checkbox" class="form-check-input" id="severe_type" <?php if (in_array('severe_type', $myExperience)) {
                                          echo 'checked';
                                       } ?>
                                          value="severe_type" name=""><strong>Severe Weather</strong> <small>(Select all
                                          that apply)</small>
                                    </label>
                                 </div>
                                 <fieldset class="severe_checkbox">
                                    <div class="form-check d-flex align-items-center">
                                       <label class="form-check-label">
                                          <input type="checkbox" id="Hurricane" class="form-check-input" value="Hurricane"
                                             <?php if (in_array('Hurricane', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Hurricane
                                       </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                       <label class="form-check-label">
                                          <input type="checkbox" id="Flooding" class="form-check-input" value="Flooding"
                                             <?php if (in_array('Flooding', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Flooding
                                       </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                       <label class="form-check-label">
                                          <input type="checkbox" id="Earthquake" class="form-check-input"
                                             value="Earthquake" <?php if (in_array('Earthquake', $myExperience)) {
                                                echo 'checked';
                                             } ?> name="experience[]">Earthquake

                                       </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                       <label class="form-check-label">
                                          <input type="checkbox" id="Landslide" class="form-check-input" value="Landslide"
                                             <?php if (in_array('Landslide', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Landslide

                                       </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                       <label class="form-check-label">
                                          <input type="checkbox" id="Severe Heat" class="form-check-input"
                                             value="Severe Heat" <?php if (in_array('Severe Heat', $myExperience)) {
                                                echo 'checked';
                                             } ?> name="experience[]"> Severe Heat
                                       </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center">
                                       <label class="form-check-label">

                                          <input type="checkbox" id="Snowstorm" class="form-check-input" value="Snowstorm"
                                             <?php if (in_array('Snowstorm', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Snowstorm

                                       </label>

                                    </div>

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" id="Tornado" class="form-check-input" value="Tornado"
                                             <?php if (in_array('Tornado', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Tornado

                                       </label>

                                    </div>

                                 </fieldset>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" <?php if (in_array('Fire-emergency', $myExperience)) {
                                          echo 'checked';
                                       } ?>
                                          value="Fire-emergency" name="experience[]">Fire Emergency

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" <?php if (in_array('Spill', $myExperience)) {
                                          echo 'checked';
                                       } ?> value="Spill"
                                          name="experience[]">Hazardous Material/Spill/ Chemical Release

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" <?php if (in_array('Casualty', $myExperience)) {
                                          echo 'checked';
                                       } ?> value="Casualty"
                                          name="experience[]">Medical Emergency/Mass Casualty

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" <?php if (in_array('Missing-persons', $myExperience)) {
                                          echo 'checked';
                                       } ?>
                                          value="Missing-persons" name="experience[]">Missing Persons

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" <?php if (in_array('Utility-outage', $myExperience)) {
                                          echo 'checked';
                                       } ?>
                                          value="Utility-outage" name="experience[]">Utility Outage

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" id="structural_type" <?php if (in_array('structural_type', $myExperience)) {
                                          echo 'checked';
                                       } ?>
                                          value="structural_type" name="experience[]"><strong>Structural Disaster</strong><small>(Select all that apply)</small>

                                    </label>

                                 </div>

                                 <fieldset class="structural_checkbox">

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" id="Collapse" class="form-check-input" value="Collapse"
                                             <?php if (in_array('Collapse', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]"> Collapse

                                       </label>

                                    </div>

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" id="Weakened-Structures" class="form-check-input"
                                             value="Weakened-Structures" <?php if (in_array('Weakened-Structures', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Weakened Structures

                                       </label>

                                    </div>

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" class="form-check-input" <?php if (in_array('Radiological', $myExperience)) {
                                             echo 'checked';
                                          } ?>
                                             value="Radiological" id="Radiological" name="experience[]">Radiological Event

                                       </label>

                                    </div>


                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" class="form-check-input" <?php if (in_array('Disasters', $myExperience)) {
                                             echo 'checked';
                                          } ?> value="Disasters"
                                             id="Disasters" name="experience[]">Nuclear Power Disasters

                                       </label>

                                    </div>

                                 </fieldset>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" id="Violence" class="form-check-input" <?php if (in_array('Violence', $myExperience)) {
                                          echo 'checked';
                                       } ?> value="Violence"
                                          name="experience[]">Workplace Violence Or Threat Of Violence

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" id="Outbreak" class="form-check-input" <?php if (in_array('Outbreak', $myExperience)) {
                                          echo 'checked';
                                       } ?> value="Outbreak"
                                          name="experience[]">Epidemic / Pandemic Outbreak

                                    </label>

                                 </div>

                              </div>

                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" id="terrorist_type" value="Attack"
                                          <?php if (in_array('Attack', $myExperience)) {
                                             echo 'checked';
                                          } ?>
                                          name="experience[]"><strong>Terrorist Attack<strong><small> (Select all that
                                                apply)</small>

                                    </label>

                                 </div>

                                 <fieldset class="terrorist_checkbox">

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" id="Bomb" class="form-check-input" value="Bomb" <?php if (in_array('Bomb', $myExperience)) {
                                             echo 'checked';
                                          } ?> name="experience[]">
                                          Bomb/Explosion

                                       </label>

                                    </div>

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" id="Shooting" class="form-check-input" value="Shooting"
                                             <?php if (in_array('Shooting', $myExperience)) {
                                                echo 'checked';
                                             } ?>
                                             name="experience[]">Shooting

                                       </label>

                                    </div>

                                    <div class="form-check d-flex align-items-center">

                                       <label class="form-check-label">

                                          <input type="checkbox" id="Biological" class="form-check-input"
                                             value="Biological" <?php if (in_array('Biological', $myExperience)) {
                                                echo 'checked';
                                             } ?> name="experience[]">Biological Attack/Chemical Release

                                       </label>

                                    </div>

                                 </fieldset>

                              </div>












                              <div class="col-12 col-lg-3 mb-3">

                                 <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                       <input type="checkbox" class="form-check-input" id="structural_other" value="Other"
                                          name="" <?php if (!empty($otherInfo)) {
                                             echo 'checked';
                                          } ?>>Other

                                    </label>

                                 </div>

                                 <fieldset class="disaster_textbox">

                                    <input type="text" class="form-control" name="other_info" id="disaster_field"
                                       value="<?php echo $otherInfo; ?>" />

                                 </fieldset>

                              </div>

                              <div class="col-12 col-lg-12 mb-3 text-center">

                                 <button class="btn btn-orange">

                                    Submit

                                 </button>

                              </div>

                           </div>

                        </div>

                     </form>

                  </div>

               </div>

            </div>
         </div>
      </div>

      <?php get_footer('new');
} ?>
   <script
      src="<?= get_template_directory_uri();?>/assets/js/popper.min.js"></script>
   <script
      src="<?= get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>

   <script>
      document.getElementById('severe_type').addEventListener('change', function () {
         // Get all the checkboxes with specific ids
         const checkboxes = ['Hurricane', 'Flooding', 'Earthquake', 'Landslide', 'Severe Heat', 'Snowstorm', 'Tornado'];

         // Loop through each checkbox and set checked status
         checkboxes.forEach(function (id) {
            document.getElementById(id).checked = document.getElementById('severe_type').checked;
         });
      });

      document.getElementById('terrorist_type').addEventListener('change', function () {
         // Get all the checkboxes with specific ids
         const checkboxes = ['Bomb', 'Shooting', 'Biological'];
         // Loop through each checkbox and set checked status
         checkboxes.forEach(function (id) {
            document.getElementById(id).checked = document.getElementById('terrorist_type').checked;
         });
      });

      document.getElementById('structural_type').addEventListener('change', function () {
         // Get all the checkboxes with specific ids
         const checkboxes = ['Collapse', 'Weakened-Structures', 'Radiological', 'Disasters'];
         // Loop through each checkbox and set checked status
         checkboxes.forEach(function (id) {
            document.getElementById(id).checked = document.getElementById('structural_type').checked;
         });
      });

      $(document).ready(function () {
         // Function to toggle visibility and clear textbox if unchecked
         function toggleVisibility(checkboxSelector, textboxSelector) {
            $(checkboxSelector).on("click", function () {
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
         toggleVisibility("#structural_other", ".disaster_textbox");

      });

      $(function () {
         $("#structural_other").on("click", function () {

            $(".disaster_textbox").toggle(this.checked);

         });
      });

   </script>