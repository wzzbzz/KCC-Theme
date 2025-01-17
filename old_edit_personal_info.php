<?php
/* Template Name: User Edit Personal Info */
if (is_user_logged_in()) {
    global $wpdb;
    //$allStates  = $wpdb->get_results( "SELECT * FROM wp_states WHERE country_id = 1 ");
    echo $allCountry = $wpdb->get_results("SELECT * FROM `countries`");
    $allCountry = !empty($allCountry) ? array_map(function ($item) {
        $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);
        return $item;
    }, $allCountry) : [];

    echo $allStates = $wpdb->get_results("SELECT * FROM `wp_states`");
    $allStates = !empty($allStates) ? array_map(function ($item) {
        $item->state = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);
        return $item;
    }, $allStates) : [];

    echo $allCities = $wpdb->get_results("SELECT * FROM `wp_cities`");
    $allCities = !empty($allCities) ? array_map(function ($item) {
        $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);
        return $item;
    }, $allCities) : [];


    $userCountryName = get_user_meta($current_user->ID, 'country', true);
    $usrStateId = 0;
    if ($userCountryName != "") {

        $allCountryExist = $wpdb->get_results("SELECT * FROM `countries` where name = '" . get_user_meta($current_user->ID, 'country', true) . "'");
        $allCountry = !empty($allCountry) ? array_map(function ($item) {
            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);
            return $item;
        }, $allCountry) : [];

        $allStatesExist = $wpdb->get_results("SELECT * FROM `wp_states` where country_id='" . $allCountryExist[0]->id . "'");
        $allStates = !empty($allStates) ? array_map(function ($item) {
            $item->state = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);
            return $item;
        }, $allStates) : [];



        foreach ($allStatesExist as $st) {
            if ($current_user->state == $st->state) {
                $usrStateId = $st->id;
            }
        }


        $allCitiesExist = $wpdb->get_results("SELECT * FROM `wp_cities` where state_id='" . $usrStateId . "'");
        $allCities = !empty($allCities) ? array_map(function ($item) {
            $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);
            return $item;
        }, $allCities) : [];
        //print_r($allCitiesExist);		


    }

    if (isset($_POST['profle_update'])) {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $uname = $_POST['uname'];
        // $uname = $_POST['uname'];
        $year = $_POST['dob'];
        $gender = $_POST['gendar'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zipcode = $_POST['code'];
        $ethnicity = $_POST['race'];
        $lang = $_POST['language'];
        $edu = $_POST['education'];
        // $job_title = $_POST['job_title'];
        $currently_employed = $_POST['currently_employed'];
        $occupation = $_POST['occupation'];
        $employer = $_POST['employer'];
        $rep_union = $_POST['rep_union'];
        $job_title = $_POST['job_title'];
        $occup_field = $_POST['occup_field'];
        $work_setting = $_POST['work_setting'];


        $id = $_POST['id'];
        if (! function_exists('wp_handle_upload')) require_once(ABSPATH . 'wp-admin/includes/file.php');
        // profile image upload
        if (!empty($_FILES['file']['name'])) {
            $uploadedfile = $_FILES['file'];
            $upload_overrides = array('test_form' => false);
            $profilePhotoData = wp_handle_upload($uploadedfile, $upload_overrides);
            if (!empty($profilePhotoData['url'])) {
                update_user_meta($id, 'profile_photo', $profilePhotoData['url']);
            }
        }

        $metas = array(
            'file' => $movefile['url'],
            'first_name'   => $fname,
            'last_name' => $lname,
            'uname'  => $uname,
            'dob'       => $year,
            'gendar'     => $gender,
            'country'   => $country,
            'state'   => $state,
            'city'   => $city,
            'code' => $zipcode,
            'race'  => $ethnicity,
            'language'       => $lang,
            'education'     => $edu,
            'user_nicename'   => $fname,
            'display_name' => $fname . " " . $lname,
            'nickname'   => $uname,
            'job_title'   => $job_title,
            'currently_employed'   => $currently_employed,
            'occupation'   => $occupation,
            'employer'   => $employer,
            'rep_union'   => $rep_union,
            'occup_field'   => $occup_field,
            'work_setting'   => $work_setting,



            //'userWeb'   => $_POST['userWeb']
        );

        if ($_POST['selector'] == 'yes') {
            $userWeb   = $_POST['userWeb'];
        } else {
            $userWeb = '';
        }

        update_user_meta($id, 'userWeb', $userWeb);


        foreach ($metas as $key => $value) {
            $id = $_POST['id'];
            update_user_meta($id, $key, $value);

            echo $value;
        }
        // header("Location: ".get_site_url()."/account-successfully-created/");
        wp_redirect(get_permalink());
    }





    if (isset($_POST['exp_update'])) {
        $expData = array(
            'user_id' =>  $current_user->ID,
            'disaster_type' => esc_attr($_POST['disaster_type']),
            'role_type' => esc_attr($_POST['role_type']),
            'exp_date' => esc_attr($_POST['exp_date']),
            'disaster_desc' => esc_attr($_POST['disaster_desc'])
        );

        $wpdb->insert('user_experience', $expData);
        wp_redirect(get_permalink());
    }

    if (isset($_POST['skill_update'])) {
        $expData = array(
            'user_id' =>  $current_user->ID,
            'skill_type' => esc_attr($_POST['skill_type'])
        );

        $wpdb->insert('user_skills', $expData);
        wp_redirect(get_permalink());
    }

    if (isset($_GET['mode']) && $_GET['mode'] == 'skill' && !empty($_GET['skill_id'])) {

        $id = $_GET['skill_id'];
        $table = 'user_skills';
        $dd =  $wpdb->delete($table, array('id' => $id, 'user_id' => $current_user->ID));
        wp_redirect(get_permalink());
    }

    if (isset($_GET['mode']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $table = 'user_experience';
        $dd =  $wpdb->delete($table, array('id' => $id, 'user_id' => $current_user->ID));
        wp_redirect(get_permalink());
    }

    $userDetails1 =   get_user_meta($current_user->ID);
    $expList = $wpdb->get_results("SELECT * FROM user_experience WHERE user_id = '" . $current_user->ID . "' ", ARRAY_A);
    $skillList = $wpdb->get_results("SELECT * FROM user_skills WHERE user_id = '" . $current_user->ID . "' ", ARRAY_A);

    get_header('new');

?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />
    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">
    <style>
        .skills_add_b {
            border: 1px dashed #D3D3D3;
            background: none;
            height: 45px;
            width: 100px;
            justify-content: center;
            border-radius: 15px;
        }

        .skills_add_b button {
            background: none;
            padding: 0px 10px;
            font-size: 16px;
            color: #242424;
        }

        .skill_add1 .col-md-4 {
            background: none !important;
        }

        .input_main1 .row .col-md-3 {
            max-height: 45px;
        }

        .skills_add_b button:hover {
            color: #242424;
            background: transparent;
        }

        .input_main1 .skill {
            margin: 0px 8px;
            padding: 4px 5px;
            background: #f8f8f8;
            border-radius: 10px;
            height: 50px;
        }

        .skill_add1 input {
            background: #f8f8f8;
        }

        .close {
            opacity: 1;
        }

        .edit_personal1 {
            padding: 10px;
            width: 100%;
            min-height: 300px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 10px 20px #00000029;
            border-radius: 20px;
            opacity: 1;
            margin-top: 0px;
        }

        .edit_per_1 {
            box-shadow: 1px -1px 26px #00000012;
            border-radius: 9px;
        }

        .edit_per_1 input {
            border: none;
        }

        .edit_per_1 label {
            margin-left: 10px;
        }

        .edit_per_1 .form-check select {
            width: 100%;
            padding: 6px 5px;
            border: 0;
        }

        .edit_per_1 .form-check {
            padding-left: 0 !important;
        }

        .edit_per_1 label {
            margin-top: 5px;
            margin-bottom: 0px;
        }

        .pers_submit button {
            width: 300px;
            height: 60px;
            box-shadow: 0px 3px 99px #CCD6FF3E;
            opacity: 1;
            border-radius: 12px;
            margin-bottom: 20px;
            padding: 10px 30px;
        }

        /*.personal_info .form-check-inline .form-check-label input.form-check-input[type="radio"]:checked{
      border: 6px solid #F9671D;
      background: #FFFFFF 0% 0% no-repeat padding-box;
      width: 26px;
      height: 26px;;
    }*/

        .personal_info .form-check-inline .form-check-label input[type=radio] {
            appearance: none;
            padding: 6px;
            background-color: #ccc;
            border-radius: 50%;
            width: 22px;
        }

        .personal_info .form-check-inline .form-check-label input[type=radio]:checked {
            background-color: #fff;
            border: 4px solid #F9671D;
        }
    </style>

    <?php
    ?>
    <div class="col-xl-12 profile-page-main">
        <div class="row justify-content-end mt-3">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
                <?php include('user_topbar.php') ?>
            </div>
            <div class="row second_input w-100 justify-content-end">
                <div class=" col-md-11 m-3">
                    <div class="d-flex align-items-center justify-content-between grp_box">
                        <div class="g_group_box_new">
                            <!--<ul class="nav nav-pills mb-3 linked_blog" id="pills-tab" role="tablist">
                                <li class="nav-item group_btn">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item group_btn">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Groups</a>
                                </li>
                            </ul>-->
                        </div>
                        <div class="back_btn">
                            <a href="<?php echo site_url('my-profile') ?>">Back</a>
                        </div>
                    </div>
                    <div class="edit_personal1 mt-4 px-5">
                        <div class="nav nav-pills mt-3 nav-pills1 mb-3 blog_u justify-content-between">
                            <div class="align-items-center pro_img"><!-- <img src="<?php //echo get_template_directory_uri(); 
                                                                                    ?>/assets/images/profile_settting.png"> --><span>Edit Personal Information</span></div>
                            <!-- <div class="align-items-center pro_ico"><img src="<?php //echo get_template_directory_uri(); 
                                                                                    ?>/assets/images/Union 4.png"><span><a href="#" data-toggle="modal" data-target="#skillsedit">Edit Skills</a></span></div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="personal_info" name="userfrm" method="post" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="profle_update" value="profle_update">

                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault01">* First name</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="<?php echo  get_user_meta($current_user->ID, 'first_name', true) ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault02">* Last name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="<?php echo  get_user_meta($current_user->ID, 'last_name', true) ?>" required>
                                            </div>
                                        </div>



                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault02">* User Name</label>
                                                <input type="text" name="uname" class="form-control" required placeholder="Janedoe23" value="<?php echo  $current_user->uname ?>" />
                                            </div>
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefaultUsername">Year of Birth</label>
                                                <div class="form-check">
                                                    <!--<input type="number" class="form-control"  name="dob"  id="dob" value="<?php echo  get_user_meta($current_user->ID, 'dob', true) ?>"  placeholder="DOB" required>-->
                                                    <select id="dob" type="select" name="dob">

                                                        <option value="1900" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1900") ? "selected='selected'" : "" ?>>1900</option>
                                                        <option value="1901" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1901") ? "selected='selected'" : "" ?>>1901</option>
                                                        <option value="1902" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1902") ? "selected='selected'" : "" ?>>1902</option>
                                                        <option value="1903" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1903") ? "selected='selected'" : "" ?>>1903</option>
                                                        <option value="1904" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1904") ? "selected='selected'" : "" ?>>1904</option>
                                                        <option value="1905" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1905") ? "selected='selected'" : "" ?>>1905</option>
                                                        <option value="1906" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1906") ? "selected='selected'" : "" ?>>1906</option>
                                                        <option value="1960" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1907") ? "selected='selected'" : "" ?>>1907</option>
                                                        <option value="1908" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1908") ? "selected='selected'" : "" ?>>1908</option>
                                                        <option value="1909" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1909") ? "selected='selected'" : "" ?>>1909</option>
                                                        <option value="1910" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1910") ? "selected='selected'" : "" ?>>1910</option>
                                                        <option value="1911" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1911") ? "selected='selected'" : "" ?>>1911</option>
                                                        <option value="1912" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1912") ? "selected='selected'" : "" ?>>1912</option>
                                                        <option value="1913" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1913") ? "selected='selected'" : "" ?>>1913</option>
                                                        <option value="1914" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1914") ? "selected='selected'" : "" ?>>1914</option>
                                                        <option value="1915" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1915") ? "selected='selected'" : "" ?>>1915</option>
                                                        <option value="1916" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1916") ? "selected='selected'" : "" ?>>1916</option>
                                                        <option value="1917" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1917") ? "selected='selected'" : "" ?>>1917</option>
                                                        <option value="1918" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1918") ? "selected='selected'" : "" ?>>1918</option>
                                                        <option value="1919" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1919") ? "selected='selected'" : "" ?>>1919</option>
                                                        <option value="1920" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1920") ? "selected='selected'" : "" ?>>1920</option>

                                                        <option value="1921" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1921") ? "selected='selected'" : "" ?>>1921</option>
                                                        <option value="1922" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1922") ? "selected='selected'" : "" ?>>1922</option>
                                                        <option value="1923" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1923") ? "selected='selected'" : "" ?>>1923</option>
                                                        <option value="1924" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1924") ? "selected='selected'" : "" ?>>1924</option>
                                                        <option value="1925" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1925") ? "selected='selected'" : "" ?>>1925</option>
                                                        <option value="1926" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1926") ? "selected='selected'" : "" ?>>1926</option>
                                                        <option value="1927" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1927") ? "selected='selected'" : "" ?>>1927</option>
                                                        <option value="1928" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1928") ? "selected='selected'" : "" ?>>1928</option>
                                                        <option value="1929" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1929") ? "selected='selected'" : "" ?>>1929</option>
                                                        <option value="1930" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1930") ? "selected='selected'" : "" ?>>1930</option>
                                                        <option value="1931" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1931") ? "selected='selected'" : "" ?>>1931</option>
                                                        <option value="1932" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1932") ? "selected='selected'" : "" ?>>1932</option>
                                                        <option value="1933" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1933") ? "selected='selected'" : "" ?>>1933</option>
                                                        <option value="1934" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1934") ? "selected='selected'" : "" ?>>1934</option>
                                                        <option value="1935" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1935") ? "selected='selected'" : "" ?>>1935</option>
                                                        <option value="1936" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1936") ? "selected='selected'" : "" ?>>1936</option>
                                                        <option value="1937" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1937") ? "selected='selected'" : "" ?>>1937</option>
                                                        <option value="1938" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1938") ? "selected='selected'" : "" ?>>1938</option>
                                                        <option value="1939" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1939") ? "selected='selected'" : "" ?>>1939</option>
                                                        <option value="1940" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1940") ? "selected='selected'" : "" ?>>1940</option>
                                                        <option value="1941" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1941") ? "selected='selected'" : "" ?>>1941</option>
                                                        <option value="1942" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1942") ? "selected='selected'" : "" ?>>1942</option>
                                                        <option value="1943" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1943") ? "selected='selected'" : "" ?>>1943</option>
                                                        <option value="1944" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1944") ? "selected='selected'" : "" ?>>1944</option>
                                                        <option value="1945" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1945") ? "selected='selected'" : "" ?>>1945</option>
                                                        <option value="1946" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1946") ? "selected='selected'" : "" ?>>1946</option>
                                                        <option value="1947" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1947") ? "selected='selected'" : "" ?>>1947</option>
                                                        <option value="1948" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1948") ? "selected='selected'" : "" ?>>1948</option>
                                                        <option value="1949" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1949") ? "selected='selected'" : "" ?>>1949</option>
                                                        <option value="1950" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1950") ? "selected='selected'" : "" ?>>1950</option>
                                                        <option value="1951" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1951") ? "selected='selected'" : "" ?>>1951</option>
                                                        <option value="1952" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1952") ? "selected='selected'" : "" ?>>1952</option>
                                                        <option value="1953" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1953") ? "selected='selected'" : "" ?>>1953</option>
                                                        <option value="1954" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1954") ? "selected='selected'" : "" ?>>1954</option>
                                                        <option value="1955" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1955") ? "selected='selected'" : "" ?>>1955</option>
                                                        <option value="1956" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1956") ? "selected='selected'" : "" ?>>1956</option>
                                                        <option value="1957" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1957") ? "selected='selected'" : "" ?>>1957</option>
                                                        <option value="1958" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1958") ? "selected='selected'" : "" ?>>1958</option>
                                                        <option value="1959" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1959") ? "selected='selected'" : "" ?>>1959</option>
                                                        <option value="1960" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1960") ? "selected='selected'" : "" ?>>1960</option>
                                                        <option value="1961" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1961") ? "selected='selected'" : "" ?>>1961</option>
                                                        <option value="1962" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1962") ? "selected='selected'" : "" ?>>1962</option>
                                                        <option value="1963" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1963") ? "selected='selected'" : "" ?>>1963</option>
                                                        <option value="1964" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1964") ? "selected='selected'" : "" ?>>1964</option>
                                                        <option value="1965" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1965") ? "selected='selected'" : "" ?>>1965</option>
                                                        <option value="1966" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1966") ? "selected='selected'" : "" ?>>1966</option>
                                                        <option value="1967" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1967") ? "selected='selected'" : "" ?>>1967</option>
                                                        <option value="1968" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1968") ? "selected='selected'" : "" ?>>1968</option>
                                                        <option value="1969" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1969") ? "selected='selected'" : "" ?>>1969</option>
                                                        <option value="1970" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1970") ? "selected='selected'" : "" ?>>1970</option>
                                                        <option value="1971" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1971") ? "selected='selected'" : "" ?>>1971</option>
                                                        <option value="1972" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1972") ? "selected='selected'" : "" ?>>1972</option>
                                                        <option value="1973" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1973") ? "selected='selected'" : "" ?>>1973</option>
                                                        <option value="1974" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1974") ? "selected='selected'" : "" ?>>1974</option>
                                                        <option value="1975" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1975") ? "selected='selected'" : "" ?>>1975</option>
                                                        <option value="1976" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1976") ? "selected='selected'" : "" ?>>1976</option>
                                                        <option value="1977" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1977") ? "selected='selected'" : "" ?>>1977</option>
                                                        <option value="1978" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1978") ? "selected='selected'" : "" ?>>1978</option>
                                                        <option value="1979" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1979") ? "selected='selected'" : "" ?>>1979</option>
                                                        <option value="1980" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1980") ? "selected='selected'" : "" ?>>1980</option>
                                                        <option value="1981" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1981") ? "selected='selected'" : "" ?>>1981</option>
                                                        <option value="1982" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1982") ? "selected='selected'" : "" ?>>1982</option>
                                                        <option value="1983" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1983") ? "selected='selected'" : "" ?>>1983</option>
                                                        <option value="1984" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1984") ? "selected='selected'" : "" ?>>1984</option>
                                                        <option value="1985" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1985") ? "selected='selected'" : "" ?>>1985</option>
                                                        <option value="1986" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1986") ? "selected='selected'" : "" ?>>1986</option>


                                                        <option value="1987" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1987") ? "selected='selected'" : "" ?>>1987</option>
                                                        <option value="1988" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1988") ? "selected='selected'" : "" ?>>1988</option>
                                                        <option value="1989" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1989") ? "selected='selected'" : "" ?>>1989</option>
                                                        <option value="1990" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1990") ? "selected='selected'" : "" ?>>1990</option>
                                                        <option value="1991" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1991") ? "selected='selected'" : "" ?>>1991</option>
                                                        <option value="1992" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1992") ? "selected='selected'" : "" ?>>1992</option>
                                                        <option value="1993" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1993") ? "selected='selected'" : "" ?>>1993</option>
                                                        <option value="1994" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1994") ? "selected='selected'" : "" ?>>1994</option>
                                                        <option value="1995" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1995") ? "selected='selected'" : "" ?>>1995</option>
                                                        <option value="1996" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1996") ? "selected='selected'" : "" ?>>1996</option>
                                                        <option value="1997" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1997") ? "selected='selected'" : "" ?>>1997</option>
                                                        <option value="1998" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1998") ? "selected='selected'" : "" ?>>1998</option>
                                                        <option value="1999" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "1999") ? "selected='selected'" : "" ?>>1999</option>
                                                        <option value="2000" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2000") ? "selected='selected'" : "" ?>>2000</option>
                                                        <option value="2001" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2001") ? "selected='selected'" : "" ?>>2001</option>


                                                        <option value="2002" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2002") ? "selected='selected'" : "" ?>>2002</option>
                                                        <option value="2003" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2003") ? "selected='selected'" : "" ?>>2003</option>
                                                        <option value="2004" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2004") ? "selected='selected'" : "" ?>>2004</option>
                                                        <option value="2005" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2005") ? "selected='selected'" : "" ?>>2005</option>
                                                        <option value="2006" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2006") ? "selected='selected'" : "" ?>>2006</option>
                                                        <option value="2007" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2007") ? "selected='selected'" : "" ?>>2007</option>
                                                        <option value="2008" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2008") ? "selected='selected'" : "" ?>>2008</option>
                                                        <option value="2009" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2009") ? "selected='selected'" : "" ?>>2009</option>
                                                        <option value="2010" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2010") ? "selected='selected'" : "" ?>>2010</option>
                                                        <option value="2011" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2011") ? "selected='selected'" : "" ?>>2011</option>
                                                        <option value="2012" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2012") ? "selected='selected'" : "" ?>>2012</option>

                                                        <option value="2013" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2013") ? "selected='selected'" : "" ?>>2013</option>
                                                        <option value="2014" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2014") ? "selected='selected'" : "" ?>>2014</option>
                                                        <option value="2015" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2015") ? "selected='selected'" : "" ?>>2015</option>
                                                        <option value="2016" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2016") ? "selected='selected'" : "" ?>>2016</option>
                                                        <option value="2017" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2017") ? "selected='selected'" : "" ?>>2017</option>
                                                        <option value="2018" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2018") ? "selected='selected'" : "" ?>>2018</option>
                                                        <option value="2019" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2019") ? "selected='selected'" : "" ?>>2019</option>
                                                        <option value="2020" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2020") ? "selected='selected'" : "" ?>>2020</option>
                                                        <option value="2021" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2021") ? "selected='selected'" : "" ?>>2021</option>
                                                        <option value="2022" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2022") ? "selected='selected'" : "" ?>>2022</option>
                                                        <option value="2023" <?php echo (get_user_meta($current_user->ID, 'dob', true) == "2023") ? "selected='selected'" : "" ?>>2023</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault04">Gender</label>
                                                <div class="form-check">
                                                    <!--<input class="form-check-input" type="checkbox" name="gendar"  id="gendar" value="Male" <?php //echo (get_user_meta($current_user->ID,'gendar',true)=="Male")?"CHECKED='CHECKED'":"" 
                                                                                                                                                ?>>
                        <label class="form-check-label" for="defaultCheck1">Male</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" name="gendar"  id="gendar1" value="Female"  <?php //echo (get_user_meta($current_user->ID,'gendar',true)=="Female")?"CHECKED='CHECKED'":"" 
                                                                                                                    ?>>
                        <label class="form-check-label" for="defaultCheck1">Female</label>-->



                                                    <select id="gendar" type="select" name="gendar">
                                                        <option value="" selected>Gender Identity</option>
                                                        <option value="Male" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Male") ? "selected='selected'" : "" ?>>Male</option>
                                                        <option value="Female" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Female") ? "selected='selected'" : "" ?>>Female</option>
                                                        <option value="Non-Binary" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Non-Binary") ? "selected='selected'" : "" ?>>Non-Binary</option>
                                                        <option value="Prefer not to say" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Prefer not to say") ? "selected='selected'" : "" ?>>Prefer not to say</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault04">* Country</label>
                                                <div class="form-check">
                                                    <?php $edtCountry = 0; ?>
                                                    <select class="form-control" name="country" onchange="getCountries()" id="country">
                                                        <option value="" selected>Select Country</option>
                                                        <?php foreach ($allCountry as $country) {

                                                        ?>
                                                            <option value="<?= $country->name; ?>"
                                                                <?= get_user_meta($current_user->ID, 'country', true) == $country->name ? 'selected' : ''; ?> data-value="<?php echo $edtCountry = $country->id; ?>"><?= $country->name; ?> </option>
                                                        <?php } ?>
                                                    </select>

                                                    <!--<option value="<? //php echo $value->state 
                                                                        ?>"<//?php if($current_user->state == $value->state){ echo 'selected="selected"';} ?>><//?php echo $value->state ?></option>-->

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">









                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault04">* State</label>
                                                <div class="form-check">
                                                    <select class="form-control" name="state" onchange="getCities()" id="state">
                                                        <?php foreach ($allStatesExist as $value) { ?>
                                                            <?php ?>
                                                            <option value="<?php echo $value->state ?>" <?php if ($current_user->state == $value->state) {
                                                                                                            echo 'selected="selected"';
                                                                                                        } ?>><?php echo $value->state ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault04">* City</label>
                                                <div class="form-check">
                                                    <select class="form-control" name="city" id="city">
                                                        <option value="" selected>Select City</option>


                                                        <?php foreach ($allCitiesExist as $value) { ?>

                                                            <option value="<?php echo $value->city ?>" <?php if ($current_user->city == $value->city) {
                                                                                                            echo 'selected="selected"';
                                                                                                        } ?>><?php echo $value->city ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault05">* Zip code</label>
                                                <input type="text" class="form-control" name="code" maxlength="6" id="code" value="<?php echo  get_user_meta($current_user->ID, 'code', true) ?>" placeholder="Code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault03">Race/Ethnicity</label>
                                                <div class="form-check">
                                                    <!--<input type="text" class="form-control"  name="race"  id="race" value="<?php //echo $race;
                                                                                                                                ?>" placeholder="Race/Ethnicity" required>-->
                                                    <select name="race">
                                                        <option value="" selected>Select</option>
                                                        <option id="race" value="Hispanic or Latino" <?php echo (get_user_meta($current_user->ID, 'race', true) == "Hispanic or Latino") ? "selected='selected'" : "" ?>>Hispanic or Latino</option>
                                                        <option id="race1" value="Black or African American" <?php echo (get_user_meta($current_user->ID, 'race', true) == "Black or African American") ? "selected='selected'" : "" ?>>Black or African American</option>
                                                        <option id="race2" value="American Indian or Alaska Native" <?php echo (get_user_meta($current_user->ID, 'race', true) == "American Indian or Alaska Native") ? "selected='selected'" : "" ?>>American Indian or Alaska Native</option>
                                                        <option id="race3" value="White" <?php echo (get_user_meta($current_user->ID, 'race', true) == "White") ? "selected='selected'" : "" ?>>White</option>
                                                        <option id="race4" value="Asian" <?php echo (get_user_meta($current_user->ID, 'race', true) == "Asian") ? "selected='selected'" : "" ?>>Asian</option>
                                                        <option id="race5" value="Two or More Races" <?php echo (get_user_meta($current_user->ID, 'race', true) == "Two or More Races") ? "selected='selected'" : "" ?>>Two or More Races</option>
                                                        <option id="race6" value="I prefer not to say" <?php echo (get_user_meta($current_user->ID, 'race', true) == "I prefer not to say") ? "selected='selected'" : "" ?>>I prefer not to say</option>
                                                        <option id="race7" value="Other" <?php echo (get_user_meta($current_user->ID, 'race', true) == "Other") ? "selected='selected'" : "" ?>>Other</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefault04">Language</label>
                                                <div class="form-check">
                                                    <!--<input type="text" class="form-control"  name="language"  id="language" value="<?php //echo  get_user_meta($current_user->ID,'language',true)
                                                                                                                                        ?>" placeholder="Language" required>-->
                                                    <select name="language" id="validationDefault04">
                                                        <option value="" selected>Select</option>
                                                        <option id="language" value="English" <?php echo (get_user_meta($current_user->ID, 'language', true) == "English") ? "selected='selected'" : "" ?>>English</option>
                                                        <option id="language1" value="Spanish" <?php echo (get_user_meta($current_user->ID, 'language', true) == "Spanish") ? "selected='selected'" : "" ?>>Spanish</option>
                                                        <option id="language2" value="other" <?php echo (get_user_meta($current_user->ID, 'language', true) == "other") ? "selected='selected'" : "" ?>>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="edit_per_1 mb-3">
                                                <label for="validationDefault05">Highest Level of Education</label>
                                                <div class="form-check">
                                                    <!--<input type="text" class="form-control"  name="education"  id="education" value="<?php //echo  get_user_meta($current_user->ID,'education',true)
                                                                                                                                            ?>" placeholder="Education" required>-->
                                                    <select name="education">
                                                        <option value="" selected>Select</option>
                                                        <option id="education" value="Primary / Elementary School" <?php echo (get_user_meta($current_user->ID, 'education', true) == "Primary / Elementary School") ? "selected='selected'" : "" ?>>Primary / Elementary School</option>
                                                        <option id="education" value="Some High School" <?php echo (get_user_meta($current_user->ID, 'education', true) == "Some High School") ? "selected='selected'" : "" ?>>Some High School</option>
                                                        <option id="education1" value="High School Diploma / GED / Equivalent" <?php echo (get_user_meta($current_user->ID, 'education', true) == "High School Diploma / GED / Equivalent") ? "selected='selected'" : "" ?>>High School Diploma / GED / Equivalent</option>
                                                        <option id="education2" value="Some College / Tech School" <?php echo (get_user_meta($current_user->ID, 'education', true) == "Some College / Tech School") ? "selected='selected'" : "" ?>>Some College / Tech School</option>
                                                        <option id="education3" value="College/Teach Degree" <?php echo (get_user_meta($current_user->ID, 'education', true) == "College/Teach Degree") ? "selected='selected'" : "" ?>>College/Teach Degree</option>
                                                        <option id="education4" value="Some Graduate School" <?php echo (get_user_meta($current_user->ID, 'education', true) == "Some Graduate School") ? "selected='selected'" : "" ?>>Some Graduate School</option>
                                                        <option id="education5" value="Graduate School" <?php echo (get_user_meta($current_user->ID, 'education', true) == "Graduate School") ? "selected='selected'" : "" ?>>Graduate School</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row mt-3">
                                        <div class="col-md-12 mt-3 mb-3">
                                            <h5>Employment information</h5>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="validationDefaultUsername">Are you currently employed?</label>
                                                <div class="form-check">
                                                    <select class="form-control" name="currently_employed" id="exampleFormControlSelect1">
                                                        <option value="" selected>Select</option>
                                                        <option value="Yes" <?php echo (get_user_meta($current_user->ID, 'currently_employed', true) == "Yes") ? "selected=''" : "" ?>>Yes</option>
                                                        <option value="No" <?php echo (get_user_meta($current_user->ID, 'currently_employed', true) == "No") ? "selected=''" : "" ?>>No</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="">Occupation <?php echo  get_user_meta($current_user->ID, 'occupation', true) ?></label>
                                                <input type="text" name="occupation" class="form-control" value="<?php echo get_user_meta($current_user->ID, 'occupation', true) ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="">Employer</label>
                                                <input type="text" name="employer" class="form-control" value="<?php echo get_user_meta($current_user->ID, 'employer', true) ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="unionRepresentationFormControlSelect">Represented by a union?</label>
                                                <div class="form-check">
                                                    <select class="form-control" name="rep_union" id="unionRepresentationFormControlSelect">
                                                        <option value="" selected>Select</option>

                                                        <option value="Yes" <?php echo (get_user_meta($current_user->ID, 'rep_union', true) == "Yes") ? "selected='selected'" : "" ?>>
                                                            Yes
                                                        </option>

                                                        <option value="No" <?php echo (get_user_meta($current_user->ID, 'rep_union', true) == "No") ? "selected='selected'" : "" ?>>
                                                            No
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="jobCodeFormControlSelect">Job Code</label>
                                                <div class="form-check">
                                                    <select class="form-control" name="job_title" id="jobCodeFormControlSelect">
                                                        <option value="" selected>Select</option>
                                                        <option value="1-Laborer – Trabajador(a), Jornalero(a)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "1-Laborer – Trabajador(a), Jornalero(a)") ? "selected='selected'" : "" ?>>1-Laborer – Trabajador(a), Jornalero(a)</option>
                                                        <option value="2-Operating Engineer – Ingeniero(a) de Operaciones" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "2-Operating Engineer – Ingeniero(a) de Operaciones") ? "selected='selected'" : "" ?>>2-Operating Engineer – Ingeniero(a) de Operaciones</option>
                                                        <option value="3-Job Supervisor - Supervisor(a)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "3-Job Supervisor - Supervisor(a)") ? "selected='selected'" : "" ?>>3-Job Supervisor - Supervisor(a)</option>
                                                        <option value="4-Contractor - Contratista" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "4-Contractor - Contratista") ? "selected='selected'" : "" ?>>4-Contractor - Contratista</option>
                                                        <option value="7-Environmental Technician – Técnico(a) Ambiental" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "7-Environmental Technician – Técnico(a) Ambiental") ? "selected='selected'" : "" ?>>7-Environmental Technician – Técnico(a) Ambiental</option>
                                                        <option value="10-Transit Worker – Trabajador(a) de Tránsito" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "10-Transit Worker – Trabajador(a) de Tránsito") ? "selected='selected'" : "" ?>>10-Transit Worker – Trabajador(a) de Tránsito</option>
                                                        <option value="13-Scientist – Científica(o)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "13-Scientist – Científica(o)") ? "selected='selected'" : "" ?>>13-Scientist – Científica(o)</option>
                                                        <option value="14-Safety Director/Mgr. – Directora(o)/Gerente de Seguridad Ocupacional" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "14-Safety Director/Mgr. – Directora(o)/Gerente de Seguridad Ocupacional") ? "selected='selected'" : "" ?>>14-Safety Director/Mgr. – Directora(o)/Gerente de Seguridad Ocupacional</option>
                                                        <option value="15-Project Coordinator – Coordinadora(o) de Proyecto" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "15-Project Coordinator – Coordinadora(o) de Proyecto") ? "selected='selected'" : "" ?>>15-Project Coordinator – Coordinadora(o) de Proyecto</option>
                                                        <option value="23-Nurse/Physician – Enfermero(a)/Médico" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "23-Nurse/Physician – Enfermero(a)/Médico") ? "selected='selected'" : "" ?>>23-Nurse/Physician – Enfermero(a)/Médico</option>
                                                        <option value="24-Industrial Hygienist – Higienista Industrial" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "24-Industrial Hygienist – Higienista Industrial") ? "selected='selected'" : "" ?>>24-Industrial Hygienist – Higienista Industrial</option>
                                                        <option value="25-Trainer - Adiestrador(a)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "25-Trainer - Adiestrador(a)") ? "selected='selected'" : "" ?>>25-Trainer - Adiestrador(a)</option>
                                                        <option value="26-Maintenance Worker – Trabajador(a) de Mantenimiento" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "26-Maintenance Worker – Trabajador(a) de Mantenimiento") ? "selected='selected'" : "" ?>>26-Maintenance Worker – Trabajador(a) de Mantenimiento</option>
                                                        <option value="28-HazWaste Worker – Trabajador(a) Materiales Peligrosos" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "28-HazWaste Worker – Trabajador(a) Materiales Peligrosos") ? "selected='selected'" : "" ?>>28-HazWaste Worker – Trabajador(a) Materiales Peligrosos</option>
                                                        <option value="32-Other - Otro" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "32-Other - Otro") ? "selected='selected'" : "" ?>>32-Other - Otro</option>
                                                        <option value="33-Firefighter - Bombera(o)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "33-Firefighter - Bombera(o)") ? "selected='selected'" : "" ?>>33-Firefighter - Bombera(o)</option>
                                                        <option value="34-Police - Policía" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "34-Police - Policía") ? "selected='selected'" : "" ?>>34-Police - Policía</option>
                                                        <option value="39-Engineer– Ingeniera(o)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "39-Engineer– Ingeniera(o)") ? "selected='selected'" : "" ?>>39-Engineer– Ingeniera(o)</option>
                                                        <option value="43-Carpenter - Carpintera(o)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "43-Carpenter - Carpintera(o)") ? "selected='selected'" : "" ?>>43-Carpenter - Carpintera(o)</option>
                                                        <option value="49-Emergency Medical Technician - Asistente Médico de Emergencias" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "49-Emergency Medical Technician - Asistente Médico de Emergencias") ? "selected='selected'" : "" ?>>49-Emergency Medical Technician - Asistente Médico de Emergencias</option>
                                                        <option value="50-Community Health Worker - Promotor(a) de Salud Comunitario" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "50-Community Health Worker - Promotor(a) de Salud Comunitario") ? "selected='selected'" : "" ?>>50-Community Health Worker - Promotor(a) de Salud Comunitario</option>
                                                        <option value="51-Nail Salon Technician - Técnico(a) del salón de belleza" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "51-Nail Salon Technician - Técnico(a) del salón de belleza") ? "selected='selected'" : "" ?>>51-Nail Salon Technician - Técnico(a) del salón de belleza</option>
                                                        <option value="52-Volunteer - Voluntario(a)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "52-Volunteer - Voluntario(a)") ? "selected='selected'" : "" ?>>52-Volunteer - Voluntario(a)</option>
                                                        <option value="53-Registered Environmental Health Specialist - Especialista Registrado de Salud y Medio Ambiente" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "53-Registered Environmental Health Specialist - Especialista Registrado de Salud y Medio Ambiente") ? "selected='selected'" : "" ?>>53-Registered Environmental Health Specialist - Especialista Registrado de Salud y Medio Ambiente</option>
                                                        <option value="54-Health Officer - Oficial de Salud" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "54-Health Officer - Oficial de Salud") ? "selected='selected'" : "" ?>>54-Health Officer - Oficial de Salud</option>
                                                        <option value="55-Coordinator - Coordinador(a)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "55-Coordinator - Coordinador(a)") ? "selected='selected'" : "" ?>>55-Coordinator - Coordinador(a)</option>
                                                        <option value="56-Consultant - Consultor(a)" <?php echo (get_user_meta($current_user->ID, 'job_title', true) == "56-Consultant - Consultor(a)") ? "selected='selected'" : "" ?>>56-Consultant - Consultor(a)</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                                <label for="occupationalFieldFormControlSelect">Occupational Field</label>
                                                <div class="form-check">
                                                    <select class="form-control" name="occup_field" id="occupationalFieldFormControlSelect">
                                                        <option value="" selected>Select</option>
                                                        <option value="Safety" <?php echo (get_user_meta($current_user->ID, 'occup_field', true) == "Safety") ? "selected='selected'" : "" ?>>
                                                            Safety
                                                        </option>
                                                        <option value="Industrial Hygiene" <?php echo (get_user_meta($current_user->ID, 'occup_field', true) == "Industrial Hygiene") ? "selected='selected'" : "" ?>>
                                                            Industrial Hygiene
                                                        </option>
                                                        <option value="Public Health" <?php echo (get_user_meta($current_user->ID, 'occup_field', true) == "Public Health") ? "selected='selected'" : "" ?>>
                                                            Public Health
                                                        </option>
                                                        <option value="Medicine" <?php echo (get_user_meta($current_user->ID, 'occup_field', true) == "Medicine") ? "selected='selected'" : "" ?>>
                                                            Medicine
                                                        </option>
                                                        <option value="Nursing" <?php echo (get_user_meta($current_user->ID, 'occup_field', true) == "Nursing") ? "selected='selected'" : "" ?>>
                                                            Nursing
                                                        </option>
                                                        <option value="Other" <?php echo (get_user_meta($current_user->ID, 'occup_field', true) == "Other") ? "selected='selected'" : "" ?>>
                                                            Other
                                                        </option>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class=" edit_per_1">
                                            <label for="workSettingControlSelect">Work Setting</label>
                                            <div class="form-check">
                                                <select class="form-control" name="work_setting" id="workSettingControlSelect">
                                                    <option value="">Select</option>

                                                    <option value="Private Industry" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Private Industry") ? "selected='selected'" : "" ?>>
                                                        Private Industry
                                                    </option>
                                                    <option value="Municipal Government" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Municipal Government") ? "selected='selected'" : "" ?>>
                                                        Municipal Government
                                                    </option>
                                                    <option value="Country Government" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Country Government") ? "selected='selected'" : "" ?>>
                                                        Country Government
                                                    </option>
                                                    <option value="State Government" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "State Government") ? "selected='selected'" : "" ?>>
                                                        State Government
                                                    </option>
                                                    <option value="Federal Government" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Federal Government") ? "selected='selected'" : "" ?>>
                                                        Federal Government
                                                    </option>
                                                    <option value="Public Authority" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Public Authority") ? "selected='selected'" : "" ?>>
                                                        Public Authority
                                                    </option>
                                                    <option value="Academic" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Academic") ? "selected='selected'" : "" ?>>
                                                        Academic
                                                    </option>
                                                    <option value="Non-Profit" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Non-Profit") ? "selected='selected'" : "" ?>>
                                                        Non-Profit
                                                    </option>
                                                    <option value="Other" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Other") ? "selected='selected'" : "" ?>>
                                                        Other
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault03">Have you worked on a hazardous waste site in the past year?</label>
                                            <!--<input type="text" class="form-control"  name="desc"  id="desc" value="<?php //echo  get_user_meta($current_user->ID,'desc',true)
                                                                                                                        ?>" placeholder="Have you worked on a hazardous waste site in the past year?" required>-->
                                        </div>
                                        
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check-inline">
                                                <div class="selector">
                                                    <div class="selecotr-item">
                                                        <input type="radio" id="radio1" name="selector" value="yes" class="selector-item_radio <?php echo get_user_meta($current_user->ID, 'userWeb', true) ?>" <?php if (!empty(get_user_meta($current_user->ID, 'userWeb', true))) { ?> <?php echo 'checked' ?> <?php } ?>>
                                                        <label for="radio1" class="selector-item_label webYes">Yes</label>
                                                    </div>
                                                    <div class="selecotr-item">
                                                        <input type="radio" id="radio2" name="selector" value="no" class="selector-item_radio <?php echo get_user_meta($current_user->ID, 'userWeb', true) ?>" <?php if (get_user_meta($current_user->ID, 'userWeb', true) == '') { ?> <?php echo 'checked' ?> <?php } ?>>
                                                        <label for="radio2" class="selector-item_label webNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                    

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 userWeb" style='display:<?php if (!empty(get_user_meta($current_user->ID, 'userWeb', true))) { ?>
                             <?php echo 'block'; ?> 
                        <?php } else { ?> 
                        <?php echo 'none'; ?> 
                        <?php } ?>'>
                                        <div class="form-group">
                                            <input type="text" name="userWeb" class="userWeb py-3 form-control" value="<?php echo get_user_meta($current_user->ID, 'userWeb', true) ?>" placeholder="Enter Waste Site">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 text-center pers_submit">
                                        <input type="hidden" name="id" id="hiddenField" value="<?php echo $current_user->ID; ?>" />
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex justify-content-between  flex-wrap">
                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                    <div class="footer_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-9 col-12">
                    <div class="side_right_footer ">
                    <div class="social_icon_sec">
                        <a href="#"><img src="<//?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid"></a>
                        <a href="#"><img src="<//?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid"></a>
                        <a href="#"><img src="<//?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid"></a>
                        <a href="#"><img src="<//?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid"></a>
                    </div>
                    <div class="linked_pages">
                        <a href="<//?php echo get_site_url(); ?>/">HOME</a>
                        <a href="<///?php echo get_site_url(); ?>/what-we-do/">WHAT WE DO</a>
                        <a href="<//?php echo get_site_url(); ?>/world-cares-center/">WORLD CARES CENTER</a>
                        <a href="<//?php echo get_site_url(); ?>/training/">TRAINING</a>
                        <a href="<//?php echo get_site_url(); ?>/cordination/">COORDINATION</a>
                        <a href="<//?php echo get_site_url(); ?>/blogs/">BLOG</a>
                        <a href="<//?php echo get_site_url(); ?>/contact-us/">CONTACT US</a>
                        <a href="#">DONATE</a>
                    </div>
                    <div class="privercy_pag">
                        <a href="<//?php echo get_site_url(); ?>/terms-of-use/">TERMS OF USE</a>
                        <a href="<//?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY  </a>
                        <a href="#">SITEMAP</a>
                    </div>
                    </div>
                    <div class="copy_right_Sec">
                    <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <?php

    $nonce = wp_create_nonce("send_group__nonce");
    $ajaxUrl = admin_url('admin-ajax.php?action=send_group_reques&nonce=' . $nonce);
    ?>


    <!-- <script>
    
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
       let states = '</?=json_encode($allStates)?>';
       
      states = JSON.parse(states);
      $.each(states,function(key, value){
            if(value.state == a) {
               stateId = value.id;
            }
        });
     //alert(stateId);
     return stateId;
  }     
</script> -->

    <script>
        //function getCountries(){
        const getCountries = () => {
            countryId = $('#country option:selected').data('value');
            let html = '<option value="">Select State</option>';
            let html1 = '<option value="">Select City</option>';
            if (countryId == undefined || countryId == 0 || countryId == '') {
                $('#state').html(html);
                $('#city').html(html1);
                return false;
            }

            let states = '<?= json_encode($allStates) ?>';
            if (states == '') {
                $('#state').html(html);
                $('#city').html(html1);
                return false;
            }
            states = JSON.parse(states);
            if (states.length == 0) {
                $('#state').html(html);
                $('#city').html(html1);
                return false;
            }

            $.each(states, function(key, value) {
                if (value.country_id == countryId) {
                    html += '<option value="' + value.state + '" data-value="' + value.id + '">' + value.state + '</option>';
                }
            });
            $('#state').html(html);
            $('#city').html(html1);
        }
        const getCities = () => {

            stateId = $('#state').val();
            var stid = getStateName(stateId);
            let html = '<option value="">Select City</option>';
            if (stateId == undefined || stateId == 0 || stateId == '') {
                $('#city').html(html);
                return false;
            }
            var cities = '<?= json_encode($allCities) ?>';

            if (cities == '') {
                $('#city').html(html);
                return false;
            }
            cities = JSON.parse(cities);
            if (cities.length == 0) {
                $('#city').html(html);
                return false;
            }
            //console.log(stateId);
            $.each(cities, function(key, value) {
                if (value.state_id == stid) {
                    html += '<option value="' + value.city + '">' + value.city + '</option>';
                }
            });
            $('#city').html(html);
        }

        const getCountries2 = () => {
            countryId = $('#countries option:selected').data('value');
            let html = '<option value="">Select State</option>';
            let html1 = '<option value="">Select City</option>';
            if (countryId == undefined || countryId == 0 || countryId == '') {
                $('#states').html(html);
                $('#cities').html(html1);
                return false;
            }

            let states = '<?= json_encode($allStates) ?>';
            if (states == '') {
                $('#states').html(html);
                $('#cities').html(html1);
                return false;
            }
            states = JSON.parse(states);
            if (states.length == 0) {
                $('#states').html(html);
                $('#cities').html(html1);
                return false;
            }

            $.each(states, function(key, value) {
                if (value.country_id == countryId) {
                    html += '<option value="' + value.state + '" data-value="' + value.id + '">' + value.state + '</option>';
                }
            });
            $('#states').html(html);
            $('#cities').html(html1);
        }




        const getCities2 = () => {

            stateId = $('#states option:selected').data('value');
            let html = '<option value="">Select City</option>';
            if (stateId == undefined || stateId == 0 || stateId == '') {
                $('#cities').html(html);
                return false;
            }
            var cities = '<?= json_encode($allCities) ?>';

            if (cities == '') {
                $('#cities').html(html);
                return false;
            }
            cities = JSON.parse(cities);
            if (cities.length == 0) {
                $('#cities').html(html);
                return false;
            }
            $.each(cities, function(key, value) {
                if (value.state_id == stateId) {
                    html += '<option value="' + value.city + '">' + value.city + '</option>';
                }
            });
            $('#cities').html(html);
        }
    </script>


<?php include('common_user_footer.php');
} else {

    header("Location:/login/");
} ?>

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

    $(document).ready(function() {

        $('.profile_yes').click(function() {
            $('.usersWeb').css('display', 'block');
        })

        $('.profile_No').click(function() {
            $('.usersWeb').css('display', 'none');
        })


    });

    if ($("#radio2").attr('checked') == "checked") {
        $('.usersWeb').addClass('d-none')

    } else {
        $('.usersWeb').removeClass('d-none')
    }

    $('#radio1').click(function() {
        $('.usersWeb').removeClass('d-none')
    })

    $(document).ready(function() {

        $('.webYes').click(function() {
            $('.userWeb').css('display', 'block');
        })

        $('.webNo').click(function() {
            $('.userWeb').css('display', 'none');
        })



    });

    function getStateName(a) {
        //alert(a);
        var stateId = 0;
        let states = '<?= json_encode($allStates) ?>';

        states = JSON.parse(states);
        $.each(states, function(key, value) {
            if (value.state == a) {
                stateId = value.id;
            }
        });
        //alert(stateId);
        return stateId;
    }
</script>