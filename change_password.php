<?php 
   if ( is_user_logged_in() ) {
   /* Template Name: change Password*/
   include 'aq_resizer.php';
   get_header('new'); 
   
$allCountry = $wpdb->get_results("SELECT * FROM `countries`");
        $allCountry = !empty($allCountry) ? array_map(function($item) {
            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);
            return $item;
        }, $allCountry) : [];
        
$allStates = $wpdb->get_results("SELECT * FROM `wp_states`");
        $allStates = !empty($allStates) ? array_map(function($item) {
            $item->state = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);
            return $item;
        }, $allStates) : [];
        
$allCities = $wpdb->get_results("SELECT * FROM `wp_cities`");
        $allCities = !empty($allCities) ? array_map(function($item) {
            $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);
            return $item;
        }, $allCities) : [];  
		
		//echo get_user_meta($current_user->ID,'country',true);

$userCountryName=get_user_meta($current_user->ID,'country',true);
$usrStateId=0;
if($userCountryName!=""){
	
$allCountryExist = $wpdb->get_results("SELECT * FROM `countries` where name = '".get_user_meta($current_user->ID,'country',true)."'");
        $allCountry = !empty($allCountry) ? array_map(function($item) {
            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);
            return $item;
        }, $allCountry) : [];

$allStatesExist = $wpdb->get_results("SELECT * FROM `wp_states` where country_id='".$allCountryExist[0]->id."'");
        $allStates = !empty($allStates) ? array_map(function($item) {
            $item->state = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);
            return $item;
        }, $allStates) : [];		



foreach($allStatesExist as $st){
	if($current_user->state == $st->state){
		$usrStateId = $st->id;
	}
}	


$allCitiesExist = $wpdb->get_results("SELECT * FROM `wp_cities` where state_id='".$usrStateId."'");
        $allCities = !empty($allCities) ? array_map(function($item) {
            $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);
            return $item;
        }, $allCities) : [];  
//print_r($allCitiesExist);		
		

}		
		

	
   
   /*Update user data*/
if(isset($_REQUEST['submit'])){
    
    $id = $_POST['id'];
    $cover_photo = $_FILES['cover_photo'];
    $profile_photo = $_FILES['profile_photo'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $year = $_POST['byear'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $ethnicity = $_POST['ethnicity'];
    $lang = $_POST['lang'];
    $edu = $_POST['edu'];


    if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );

      // profile image upload
      if(!empty($_FILES['profile_photo']['name'])){
         $profile_uploaded_file = $_FILES['profile_photo'];   
         $upload_overrides = array( 'test_form' => false );
         $profilePhotoData = wp_handle_upload( $profile_uploaded_file, $upload_overrides );
         if(!empty($profilePhotoData['url']) && !empty($_FILES['profile_photo']['name'])){
            update_user_meta( $id, 'profile_photo',$profilePhotoData['url'] );
         }
      }
      // cover image uploaad
      if(!empty($_FILES['cover_photo']['name'])){
         $cover_photo_file = $_FILES['cover_photo'];   
         $upload_cover = array( 'test_form' => false );
         $coverPhotoData = wp_handle_upload( $cover_photo_file, $upload_cover );
         if(!empty($coverPhotoData['url']) && !empty($_FILES['cover_photo']['name'])){
            update_user_meta( $id, 'cover_photo',$coverPhotoData['url'] );
         }
      }


    $metas = array(
        'first_name'   => $fname,
        'last_name' => $lname, 
        'uname'  => $uname ,
        'dob'       => $year ,
        'gendar'     => $gender,
        'country'   => $country,
        'state'   => $state,
        'city'   => $city,
        'code' => $zipcode, 
        'race'  => $ethnicity ,
        'language'       => $lang ,
        'education'     => $edu,
        'user_nicename'   => $fname,
        'display_name' => $fname." ".$lname, 
        'nickname'   => $uname,
       // 'userWeb'   => $_POST['userWeb']
    );
    
    if($_POST['selector'] == 'yes')
      {
          $userWeb   = $_POST['userWeb'];
      }
      else
      {
          $userWeb = ''; 
      }
      update_user_meta($id,'userWeb',$userWeb);

    foreach($metas as $key => $value) {

         $id = $_POST['id'];

        update_user_meta( $id, $key, $value );
        
        echo $value;
      
    }
    header("Location: ".get_site_url()."/user-profile-setting/");
   }
   
   /*Update user data*/

   /*Update user password*/
        if(isset($_REQUEST['updatePass']))
        {  
            
             $old_password = $_POST['old_password'];
             $user_pass = $_POST['new_password'];
             $id        = $_POST['id'];
            
            $userdata = [
                'ID'        => $id,
                'user_pass' => $user_pass
            ];
            wp_update_user( $userdata );
             //header("Location: ".get_site_url()."/user-profile-setting/");
             session_destroy();
              header("Location: ".get_site_url('login'));
               exit;
         }
   /*Update user password*/
   ?>
<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/lavleen.css">
<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">
<link rel="shortcut icon" type="image/jpg" href="<?php //echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>

<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>
<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>
<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>
<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>
<link href="<?php //echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/> -->

<div class="">
   <div class="row justify-content-end mt-3">
   <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
               <?php include('user_topbar.php')?>
                
            </div>
   </div>
   <div class="row justify-content-end mt-3 mb-4 footer_f2 profile-setting-page mr-1">
      <div class="col-xl-11 col-md-11">
         <div class="donation_tab_pills mb-5">
            <div class="row">
               <div class="col-md-4">
                  <div class="profile_setting_avatar justify-content-center">
                     <img class="profile_Img" src="<?php echo $avatar_url; ?>">
                     <?php 
                        // echo "<pre>";
                        // print_r($current_user); ?>
                     <h4><?php echo  $current_user->first_name?> <?php echo  $current_user->last_name?></h4>
                     <span><a title="<?php echo  $current_user->user_email?>" href="mailto:<?php echo  $current_user->user_email?>"><?php echo  $current_user->user_email?></a></span>
                     <div class="linked_page_left nav flex-column nav-pills" id="v-pills-tab" role="tablist"  aria-orientation="vertical">
                         <a class="nav-link" id="pills-profile-tab"  href="https://knowledge.communication.worldcares.org/user-profile-setting/">Profile Setting</a>
                        <a class="nav-link active" id="pills-profile-tab" href="https://knowledge.communication.worldcares.org/reset-password/">Change Password</a>
                        <a class="nav-link" id="pills-profile-tab" href="https://knowledge.communication.worldcares.org/faq/">Help &amp; Support</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="main_box_center_tickit tab-content" id="v-pills-tabContent">
                    
                    
                        <div class="main_pr_setting">
                           <div class="d-flex mb-4">
                              <img class="Pass_icon" src="../wp-content/themes/astra/assets/images/changPassIcon.png">
                              <h5 class="setting_title ml-2">Change Password</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12">
                              <div class="profile_upload setting_pass mt-2">
                                 <div class="">
                                    <div class="main_profile_form">
                                       <div class="row d-flex justify-content-start">
                                          <div class="col-xl-6">
                                             <form method="POST" action="">
                                                <div class="form-group">
                                                   <label for="OldPassword">Old Password</label>
                                                   <input type="password" class="form-control" id="OldPassword" name="old_password" placeholder="Enter here" />
                                                </div>
                                                <div class="form-group">
                                                   <label for="NewPassword">New Password</label>
                                                   <input type="password" class="form-control" id="NewPassword" name="new_password" placeholder="Enter here" onChange="onChange()" />
                                                </div>
                                                <div class="form-group">
                                                   <label for="RetypePassword">Retype Password</label>
                                                   <input type="password" name = "confirm" class="form-control" id="RetypePassword" placeholder="Enter here" onChange="onChange()" />
                                                </div>
                                                <div class="update_btn">
                                                    <input type="hidden" name="id" id="hiddenField" value="<?php echo $current_user->ID; ?>" />
                                                   <button type="submit" class="btn btn_update"  name="updatePass" >Submit</button>
                                                </div>
                                             </form>
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
   
   $("#imageUpload").change(function() {   
      readURLprofile(this);      
   });


   $("#imageUpload1").change(function() {  
      readURLprofile1(this);
   });

</script>
<script>
 function onChange() {
  const password = document.querySelector('input[name=new_password]');
  const confirm = document.querySelector('input[name=confirm]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}

    $( document ).ready(function() {
    
        $('.profile_yes').click(function(){
            $('.usersWeb').css('display','block');
        })

        $('.profile_No').click(function(){
            $('.usersWeb').css('display','none');
        })


    });

   if ($("#radio2").attr('checked') == "checked") {
         $('.usersWeb').addClass('d-none')

   } else {
      $('.usersWeb').removeClass('d-none')
   }

   $('#radio1').click(function(){
      $('.usersWeb').removeClass('d-none')
   })

   $( document ).ready(function() {
    
        $('.webYes').click(function(){
            $('.userWeb').css('display','block');
        })

        $('.webNo').click(function(){
            $('.userWeb').css('display','none');
        })

    
       
    });
  function getStateName(a){
      //alert(a);
      var stateId=0;
       let states = '<?=json_encode($allStates)?>';
       
      states = JSON.parse(states);
      $.each(states,function(key, value){
            if(value.state == a) {
               stateId = value.id;
            }
        });
     //alert(stateId);
     return stateId;
  }     
</script>
 <script type="text/javascript">
   
    //function getCountries(){
    const getCountries = () => {
        countryId = $('#country option:selected').data('value'); 
        let html = '<option value="">Select State*</option>';
        let html1 = '<option value="">Select City*</option>';
        if(countryId == undefined || countryId == 0 || countryId == '') {
            $('#state').html(html);
            $('#city').html(html1);
            return false;
        }

        let states = '<?=json_encode($allStates)?>';
        if(states == '' ) {
            $('#state').html(html);
            $('#city').html(html1);
            return false;
        }
        states = JSON.parse(states);
        if(states.length == 0 ) {
            $('#state').html(html);
            $('#city').html(html1);
            return false;
        } 

        $.each(states,function(key, value){
            if(value.country_id == countryId) {
                html += '<option value="'+value.state+'" data-value="'+value.id+'">'+value.state+'</option>';
            }
        });
        $('#state').html(html);
        $('#city').html(html1);
    }
   
    const getCities = () => {

        stateId = $('#state').val();
        var stid=getStateName(stateId);
        getStateName(stateId);
        let html = '<option value="">Select City*</option>';
        if(stateId == undefined || stateId == 0 || stateId == '') {
            $('#city').html(html);
            return false;
        }
        var cities = '<?=json_encode($allCities)?>';

        if(cities == '' ) {
            $('#city').html(html);
            return false;
        }
        cities = JSON.parse(cities);
        if(cities.length == 0 ) {
            $('#city').html(html);
            return false;
        }
        $.each(cities,function(key, value){
            if(value.state_id == stid) {
                html += '<option value="'+value.city+'">'+value.city+'</option>';
            }
        });
        $('#city').html(html);
    }

       const getCountries2 = () => {
        countryId = $('#countries option:selected').data('value');
        let html = '<option value="">Select State*</option>';
        let html1 = '<option value="">Select City*</option>';
        if(countryId == undefined || countryId == 0 || countryId == '') {
            $('#states').html(html);
            $('#cities').html(html1);
            return false;
        }

        let states = '<?=json_encode($allStates)?>';
        if(states == '' ) {
            $('#states').html(html);
            $('#cities').html(html1);
            return false;
        }
        states = JSON.parse(states);
        if(states.length == 0 ) {
            $('#states').html(html);
            $('#cities').html(html1);
            return false;
        }

        $.each(states,function(key, value){
            if(value.country_id == countryId) {
                html += '<option value="'+value.state+'" data-value="'+value.id+'">'+value.state+'</option>';
            }
        });
        $('#states').html(html);
        $('#cities').html(html1);
    }




    const getCities2 = () => {

        stateId = $('#states option:selected').data('value');
        let html = '<option value="">Select City*</option>';
        if(stateId == undefined || stateId == 0 || stateId == '') {
            $('#cities').html(html);
            return false;
        }
        var cities = '<?=json_encode($allCities)?>';

        if(cities == '' ) {
            $('#cities').html(html);
            return false;
        }
        cities = JSON.parse(cities);
        if(cities.length == 0 ) {
            $('#cities').html(html);
            return false;
        }
        $.each(cities,function(key, value){
            if(value.state_id == stateId) {
                html += '<option value="'+value.city+'">'+value.city+'</option>';
            }
        });
        $('#cities').html(html);
    }
 </script>
 
 <script>
 $(document).ready(function() {

  $('.submit_on_enter').keydown(function(event) {
    // enter has keyCode = 13, change it if you want to use another button
    if (event.keyCode == 13) {
      this.form.submit();
      return false;
    }
  });

});
 </script>


<?php get_footer('new'); } ?>