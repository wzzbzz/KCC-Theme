<?php
/* Template Name: Create Resources */ if ( is_user_logged_in() ) {
get_header('new'); ?>
    <?php 
        $gid=$_GET['gid'];
        //print_r($gid);
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resources</title>

    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/jpg" href="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/images/favicon.png"> 

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bhawna.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style_new.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/select2/select2.css" rel="stylesheet">
    <style type="text/css">
        .hides{
            display: none;
        }
    </style>
</head>
<body class="main_all_bg_Sec">
    
    
    <div class="col-xl-12 temp-my-profile">
        <div class="row justify-content-end mt-3">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
               <?php include('user_topbar.php')?>    
            </div>
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">
                <div class=" col-xl-11 d-flex align-items-center justify-content-end flex-wrap px-0">
                        <div class="back_btn">
                            <a href="./my-resources">Back</a>
                        </div>
                </div>
            </div>
        </div>
        <?php 
        
        $current_user_id = get_current_user_id();
        $searchArg= array(); 
                        $searchArg['post_type'] = 'resources';
                        $searchArg['post__in'] = array($_GET['ID']);
                        $searchArg['numberposts'] = 1;
                        $searchArg['author'] = $current_user_id;



        $allResource = get_posts($searchArg);
        $submit = "Submit";
        $resource_id = "";
        $ums_create_resource = "ums_create_resource";

        if(!empty($allResource)){
            $rdata = $allResource[0];
            $resource_id = $_GET['ID'];
            $org = get_post_meta($resource_id, 'org', true );
            $pre_org = get_post_meta($resource_id, 'pre_org', true );
            $title = $rdata->post_title;
            $organization = $rdata->post_content;
            $ymd = get_post_meta($resource_id, 'ymd', true );
            $services_provided = get_post_meta($resource_id, 'services_provided', true );
            $phone_no = get_post_meta($resource_id, 'phone_no', true );
            $email = get_post_meta($resource_id, 'email', true );
            $resource_city = get_post_meta($resource_id, 'resource_city', true );
            /*$country = get_post_meta($resource_id, 'country', true );
            $state = get_post_meta($resource_id, 'state', true );*/
            $zipcode = get_post_meta($resource_id, 'zipcode', true );
            $address = get_post_meta($resource_id, 'address', true );
            $submit = "Update";
            $ums_create_resource = "ums_update_resource";
          
        }
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
        ?>

        <div class="row justify-content-end mt-3">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-lg-4 mt-2">
                <div class=" col-xl-12 d-flex flex-wrap px-0">
                    <div class="shadow-block">
                        <div class="col-xl-12 my-4">
                            <div class=" created-resource-form">
                                <h5 class="mb-lg-4 mb-0"><b>Create Resources</b></h5>
                                <form class="row" method="post">
                                    <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo $gid;?>">
                                    <input type="hidden" name="resource_id" value="<?php echo $resource_id;?>">
                                     <input type="hidden" name="ums_create_resource" value="<?php echo $ums_create_resource;?>">
                                    <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Name of Organization*</label>
                                            <input type="text" class="form-control" name="org" id="org" placeholder="Enter Here" value="<?php echo $org; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Previous Organizations*</label>
                                            <input type="text" class="form-control" name="pre_org" id="pre_org" placeholder="Enter Here" value="<?php echo $pre_org; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Title*</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Here" value="<?php echo $title; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Years in Disaster Management*</label>
                                            <input type="number" class="form-control" name="ymd" id="ymd" placeholder="Enter Here" value="<?php echo $ymd; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Services Provided*</label>
                                            <select class="form-control" name="services_provided" id="services_provided" required>
                                              <option>Select</option>

                                              <option value="Child Services">Child Services</option>
                                              <option value="Covid-19">Covid-19 </option>
                                              <option value="Elderly Care">Elderly Care</option>  
                                              <option value="Emergency Services">Emergency Services</option>
                                              <option value="Food Services">Food Services</option> 
                                              <option value="Blog">Blog</option>
                                              <option value="Health Services">Health Services</option> 
                                              <option value="Medical Care">Medical Care</option>
                                              <option value="Property Reservation">Property Reservation </option> 
                                              <option value="Reapir and Rebuild">Reapir and Rebuild</option>
                                              <option value="Sheltring">Sheltring</option> 
                                              <option value="Spritual & Emotional Care">Spritual & Emotional Care</option>
                                              <option value="Training">Training</option> 
                                              <option value="Blog">Volunteer Management</option>
                                              <option value="Other">Other...</option>                                                     
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Area Served*</label>
                                            <input type="text" class="form-control" id="area_served" placeholder="Enter here" name="area_served" value="<?php echo $area_served; ?>" required>
                                          </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">About the Organization*</label>
                                            <textarea name="organization" id="organization" maxlength="2000" placeholder="Enter Here" rows="4" cols="100" class="form-control" required><?php echo $organization; ?></textarea>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Website URL*</label>
                                            <input type="url" class="form-control" name="Website_url" id="Website_url" placeholder="Enter here" value="http://<?php echo $Website_url; ?>" required>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Phone*</label>
                                            <input type="number" class="form-control" name="phone_no" id="phone_no" n="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter here" value="<?php echo $phone_no; ?>" required>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Email*</label>
                                            <input type="email" class="form-control" name="email" type="email" id="email" placeholder="Enter here" value="<?php echo $email; ?>" required>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlSelect1">Country*</label>
                                            <input type="text" class="form-control" name="country" id="country" placeholder="Enter here" value="<?//php echo $country; ?>" required> -->
                                            <select class="form-control" name="rf_country" onchange="getCountries()" id="country" required>
                                                <option value="">Select Country*</option>
                                                <?php foreach($allCountry as $country){?>
                                                <option value ="<?=$country->name; ?>" data-value="<?=$country->id; ?>"><?=$country->name; ?> </option>
                                                <?php } ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlSelect1">State*</label>
                                            <input type="text" class="form-control" name="state" id="state" placeholder="Enter here" value="<?//php echo $state; ?>" required> -->
                                            <select class="form-control" name ="rf_state" onchange="getCities()" id="state" required>
                                                <option value="">Select State*</option>  
                                            </select>  
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlSelect1">City*</label>
                                            <input type="text" class="form-control" name="resource_city" id="resource_city" placeholder="Enter here" value="<?//php echo $resource_city; ?>" required> -->
                                            <select class="form-control" name ="resources_city" id="city" required>
                                                <option value="">Select City*</option>  
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Address*</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter here" value="<?php echo $address; ?>" required>
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-10">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Zip Code*</label>
                                            <input type="number" class="form-control" name="zipcode" onKeyPress="if(this.value.length==5) return false;" pattern="[0-9]{5}" id="zipcode" placeholder="Enter here" value="<?php echo $zipcode; ?>" required>
                                          </div>
                                    </div>                                                                                
                                    <div class="col-lg-12  mt-2 mb-0">
                                        <!-- <div class="form-title">
                                            <h3>Publish Form to</h3>
                                        </div> --> 
                                    <h5 class="mb-lg-4 mb-0"><b>Publish Form to</b></h5>       
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 mb-3">
                                                <div class="form-check d-flex align-items-center">
                                                    <label class="form-check-label">
                                                        <input onclick="show33();" type="radio" <?php echo (get_post_meta($resource_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Joined Group
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center">
                                                    <?php $joinGrp = learndash_get_users_group_ids( $current_user_id);
                                                          $joinedArg= array(); 
                                                            $joinedArg['post_type'] = 'groups';
                                                            $joinedArg['post_status'] = 'publish';
                                                            $joinedArg['paged'] = $currentPage;
                                                            $joinedArg['posts_per_page'] = 50;
                                                            $joinedArg['post__in'] = $joinGrp;
                                                            $myJoinedGroups = get_posts( $joinedArg );
                                                    ?>  
                                                    <div id="div55" class="hides"> 
                                                        <select class="form-control mt-3 border" name ="rf_publish">
                                                            
                                                            <?php  foreach($myJoinedGroups as $joinedGrpupVal){
                                                                   $author_id=$joinedGrpupVal->post_author;
                                                                    if($current_user_id!=$author_id){
                                                            ?>
                                                               
                                                               <option value="<?php echo $joinedGrpupVal->ID?>"> <?php echo $joinedGrpupVal->post_title?></option>
                                                            <?php }} ?>
                                                      
                                                        </select>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-3">
                                                <div class="form-check d-flex align-items-center">
                                                    <label class="form-check-label">
                                                        <input onclick="show2();" type="radio" <?php echo (get_post_meta($resource_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Group
                                                    </label>
                                                </div>
                                                <div id="div44" class="hides">
                                                    <select class="form-control mt-3 border" name ="rf_publish">
                                                        <option>--Select any group--</option>
                                                        <?php
                                                            $current_user_id = get_current_user_id();  
                                                            $args = array(
                                                                    'numberposts'   => -1,
                                                                    'post_type'     => 'groups',
                                                                    'post_status'   => 'publish',
                                                                     'author'       =>  $current_user_id
                                                                );
                                                                
                                                               //$all_groups = learndash_get_users_group_ids($current_user_id);
                                                                $all_groups = get_posts( $args );
                                                                
                                                                
                                                               // echo "<pre>";
                                                                //print_r($all_groups);       
                                                        ?>
                                                        
                                                        <?php foreach($all_groups as $value){ ?>
                                                          <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>
                                                        <?php } ?>    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-3">
                                                <div class="form-check d-flex align-items-center">
                                                    <label class="form-check-label">
                                                        <input  onclick="show1();" type="radio" <?php echo (get_post_meta($resource_id,'rf_publish',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" value="all_rrn_users">All RRN Users
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class="row mt-4 d-flex justify-content-center w-100">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 ml-2">
                                            <div class="update_btn">

                                                <button class="btn btn_update"><?php echo $submit?></button>

                                            </div>
                                        </div>
                                    </div>
                                 </form>  
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">
            <?php include('common_user_footer.php')?>
         </div> 


    <!-- js links -->
   <!--  <script src="<?//php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?///php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?//php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>   
    <script src="<?//php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script> -->

    <script>      
        $(document).ready(function() {  
       
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
    <script>
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

        stateId = $('#state option:selected').data('value');
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
            if(value.state_id == stateId) {
                html += '<option value="'+value.city+'">'+value.city+'</option>';
            }
        });
        $('#city').html(html);
    }
</script>


<script>  
    function show1(){
        $("#div55").addClass("hides");
        $("#div44").addClass("hides");
    }
    
    function show2(){
      $("#div44").removeClass("hides");
      $("#div55").addClass("hides");
    }
     function show33(){
      $("#div44").addClass("hides");
      $("#div55").removeClass("hides");
    }
</script>
  
<?php get_footer('new'); }?>