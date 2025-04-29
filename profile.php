<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
require_once ($path . 'wp-load.php');
global $current_user;
//$allStates  = $wpdb->get_results( "SELECT * FROM wp_states WHERE country_id = 1 ");




$allCountry = $wpdb->get_results("SELECT * FROM `countries`");
$allCountry = !empty($allCountry) ? array_map(function ($item) {
    $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);
    return $item;
}, $allCountry) : [];

$allStates = $wpdb->get_results("SELECT * FROM `wp_states`");
$allStates = !empty($allStates) ? array_map(function ($item) {
    $item->state = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);
    return $item;
}, $allStates) : [];

$allCities = $wpdb->get_results("SELECT * FROM `wp_cities`");
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


if (isset($_REQUEST['submit'])) {

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

    $currently_employed = $_POST['currently_employed'];
    $occupation = $_POST['occupation'];
    $employer = $_POST['employer'];
    $rep_union = $_POST['rep_union'];
    $job_title = $_POST['job_title'];
    $occup_field = $_POST['occup_field'];
    $work_setting = $_POST['work_setting'];



    // $job_title = $_POST['job_title'];
    $id = get_current_user_id();
    if (!function_exists('wp_handle_upload'))
        require_once (ABSPATH . 'wp-admin/includes/file.php');
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
        'first_name' => $fname,
        'last_name' => $lname,
        'uname' => $uname,
        'dob' => $year,
        'gendar' => $gender,
        'country' => $country,
        'state' => $state,
        'city' => $city,
        'code' => $zipcode,
        'race' => $ethnicity,
        'language' => $lang,
        'education' => $edu,
        'user_nicename' => $fname,
        'display_name' => $fname . " " . $lname,
        'nickname' => $uname,
        'currently_employed' => $currently_employed,
        'occupation' => $occupation,
        'employer' => $employer,
        'rep_union' => $rep_union,
        'job_title' => $job_title,
        'occup_field' => $occup_field,
        'work_setting' => $work_setting,

        //'userWeb'   => $_POST['userWeb']
    );

    if ($_POST['selector'] == 'yes') {
        $userWeb = $_POST['userWeb'];
    } else {
        $userWeb = '';
    }

    update_user_meta($id, 'userWeb', $userWeb);


    foreach ($metas as $key => $value) {
        $id = $_POST['id'];
        update_user_meta($id, $key, $value);

        echo $value;
    }
    header("Location: " . get_site_url() . "/account-successfully-created/");
}



$current_user = wp_get_current_user();
$first_name = $current_user->user_login;
$email = $current_user->user_email;

$user = new WP_User(get_current_user_id());

$first_name = get_user_meta($user->ID, 'first_name', true);
$last_name = get_user_meta($user->ID, 'last_name', true);
$dob = get_user_meta($user->ID, 'dob', true);
$gendar = get_user_meta($user->ID, 'gendar', true);
$country = get_user_meta($user->ID, 'country', true);
$state = get_user_meta($user->ID, 'state', true);
$city = get_user_meta($user->ID, 'city', true);
$code = get_user_meta($user->ID, 'code', true);
$race = get_user_meta($user->ID, 'race', true);
$language = get_user_meta($user->ID, 'language', true);
$education = get_user_meta($user->ID, 'education', true);
$job_title = get_user_meta($user->ID, 'job_title', true);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup-detail-wcc</title>
    <?php /* Template Name: Profile */ wp_head(); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png">

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <style type="text/css">
        .copy-link a {
            color: #707070;
        }
    </style>
</head>

<body class="main_all_bg_Sec">

    <div class="container-fluid profile-add">
        <div class="login_nav">
            <nav class="navbar  justify-content-between">
                <a class="navbar-brand" href="/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png"
                        class="img-fluid" alt="img">
                </a>
                <form class="form-inline">
                    <!-- <button class="btn btn_account active"><a href="<?//php echo wp_logout_url( home_url() ); ?>" >Logout<a></button>  -->
                    <button class="btn btn_account active"><a
                            href="<?php echo wp_logout_url('login'); ?>  ">Logout</a></button>
                </form>
            </nav>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-10">
                <div class="title_detail text-center">
                    <h5>Complete your Profile</h5>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing.</p> -->
                </div>
                <div class="profile_upload mt-3">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="avatar-upload_1 mx-auto">
                            <div class="avatar-edit">
                                <input type='file' name="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <?php
                            $cover_img = get_user_meta($user->ID, 'profile_photo', true);
                            if (empty($cover_img)) {
                                $cover_img = "https://via.placeholder.com/1920x318";
                            }
                            ?>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('<?php echo $cover_img; ?>')">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 mt-4 mx-auto">
                            <div class="main_profile_form">

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">* First name</label>
                                            <input type="text" name="fname" class="form-control"
                                                id="exampleInputPassword1" placeholder="First name"
                                                value="<?php echo $first_name ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">* Last name</label>
                                            <input type="text" name="lname" class="form-control"
                                                id="exampleInputPassword1" placeholder="Last name"
                                                value="<?php echo $last_name ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">* Nickname</label>
                                            <input type="text" name="uname" class="form-control"
                                                id="exampleInputPassword1" placeholder="Enter here"
                                                value="<?php echo $current_user->uname ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <!--<div class="form-group">
                                            <label for="exampleInputPassword1">Birth year</label>
                                            <input type="text" name="byear" class="form-control" id="exampleInputPassword1" placeholder="Enter here" value="<?php echo $dob ?>" required>
                                        </div>-->
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">* Year of Birth</label>
                                            <!-- <select class="form-control" name="byear" id="exampleFormControlSelect1"
                                                required>
                                                <option value="" selected>Select Year</option>
                                                <option value="1900" <?php //echo (get_user_meta($current_user->ID, 'dob', true) == "1900") ? "selected='selected'" : "" ?>>
                                                    1900</option>
                                            </select> -->
                                            <?php
                                            $current_user = wp_get_current_user();
                                            $user_dob = get_user_meta($current_user->ID, 'dob', true);
                                            ?>
                                            <select class="form-control" name="byear" id="exampleFormControlSelect1"
                                                required>
                                                <option value="" selected>Select Year</option>
                                                <?php
                                                $start_year = 1900;
                                                $end_year = 2023; // Adjust this to the current year or desired end year
                                                for ($year = $start_year; $year <= $end_year; $year++) {
                                                    $selected = ($user_dob == $year) ? "selected='selected'" : "";
                                                    echo "<option value='$year' $selected>$year</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Gender Identity</label>
                                            <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                <option value="" selected>Select</option>
                                                <option value="Male" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Male") ? "selected='selected'" : "" ?>>
                                                    Male</option>
                                                <option value="Female" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Female") ? "selected='selected'" : "" ?>>
                                                    Female</option>
                                                <option value="Non-Binary" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Non-Binary") ? "selected='selected'" : "" ?>>
                                                    Non-Binary</option>
                                                <option value="Prefer not to say" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Prefer not to say") ? "selected='selected'" : "" ?>>Prefer not to say</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Country</label>
                                            <select class="form-control" name="country" onchange="getCountries()"
                                                id="country" required>
                                                <option value="" selected>Select Country*</option>

                                                <?php $existCountryID = 0; ?>
                                                <?php foreach ($allCountry as $country) { ?>
                                                    <option value="<?= $country->name; ?>"
                                                        <?= get_user_meta($current_user->ID, 'country', true) == $country->name ? 'selected' : ''; ?>
                                                        data-value="<?php echo $existCountryID = $country->id; ?>">
                                                        <?= $country->name; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">State</label>
                                            <select class="form-control" name="state" onchange="getCities()" id="state"
                                                required>
                                                <option value="" selected>Select State*</option>
                                                <?php foreach ($allStates as $value) { ?>

                                                    <option value="<?php echo $value->state ?>" <?php if ($current_user->state == $value->state) {
                                                           echo 'selected="selected"';
                                                       } ?>><?php echo $value->state ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">City</label>
                                            <select class="form-control" name="city" id="city" required>
                                                <option value="" selected>Select City*</option>

                                                <?php foreach ($allCities as $value) { ?>

                                                    <option value="<?php echo $value->city ?>" <?php if ($current_user->city == $value->city) {
                                                           echo 'selected="selected"';
                                                       } ?>><?php echo $value->city ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div> -->


                                 <!-- Country Dropdown -->
<div class="col-xl-6 col-lg-6 col-md-6 col-12">
    <div class="form-group select_sec">
        <label for="exampleFormControlSelect1">* Country</label>
        <select class="form-control" name="country" onchange="getCountries()" id="country">
                                                        <option value="" selected>Select Country</option>
                                                        <?php foreach ($allCountry as $country) {

                                                        ?>
                                                            <option value="<?= $country->name; ?>"
                                                                <?= get_user_meta($current_user->ID, 'country', true) == $country->name ? 'selected' : ''; ?> data-value="<?php echo $edtCountry = $country->id; ?>"><?= $country->name; ?> </option>
                                                        <?php } ?>
                                                    </select>
    </div>
</div>

<!-- State Dropdown -->
<div class="col-xl-6 col-lg-6 col-md-6 col-12">
    <div class="form-group select_sec">
        <label for="exampleFormControlSelect1">* State</label>
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

<!-- City Dropdown -->
<div class="col-xl-6 col-lg-6 col-md-6 col-12">
    <div class="form-group">
        <label for="exampleFormControlSelect1">* City</label>
       <input type="text" name="city" class="form-control" value="<?php echo $city ?>">
    </div>
</div>   


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Zip Code</label>
                                            <input type="number" name="zipcode" maxlength="6" class="form-control"
                                                id="exampleInputPassword1" placeholder="Enter here"
                                                value="<?php echo $code ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Race/Ethnicity</label>
                                            <select class="form-control" name="ethnicity"
                                                id="exampleFormControlSelect1">
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
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Primary language</label>
                                            <select class="form-control" name="lang" id="exampleFormControlSelect1">
                                                <option value="" selected>Select</option>
                                                <option id="language" value="English" <?php echo (get_user_meta($current_user->ID, 'language', true) == "English") ? "selected='selected'" : "" ?>>English</option>
                                                <option id="language1" value="Spanish" <?php echo (get_user_meta($current_user->ID, 'language', true) == "Spanish") ? "selected='selected'" : "" ?>>Spanish</option>
                                                <option id="language2" value="other" <?php echo (get_user_meta($current_user->ID, 'language', true) == "Other") ? "selected='selected'" : "" ?>>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Highest Level of Education</label>
                                            <select class="form-control" name="edu" id="exampleFormControlSelect1">
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

                                <div class="row mt-3">

                                    <div class="col-md-12 mt-3 mb-3">
                                        <h5>Employment information</h5>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Are you currently employed?</label>
                                            <select class="form-control" name="currently_employed"
                                                id="exampleFormControlSelect1">
                                                <option value="" selected>Select</option>
                                                <option value="Yes" <?php echo (get_user_meta($current_user->ID, 'currently_employed', true) == "Yes") ? "selected='selected'" : "" ?>>
                                                    Yes</option>

                                                <option value="No" <?php echo (get_user_meta($current_user->ID, 'currently_employed', true) == "No") ? "selected='selected'" : "" ?>>
                                                    No </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Occupation</label>
                                            <input type="text" name="occupation" class="form-control"
                                                value="<?php echo get_user_meta($current_user->ID, 'occupation', true) ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Employer</label>
                                            <input type="text" name="employer" class="form-control"
                                                value="<?php echo get_user_meta($current_user->ID, 'employer', true) ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Represented by a union?</label>
                                            <select class="form-control" name="rep_union"
                                                id="exampleFormControlSelect1">
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
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Job Title</label>
                                            <select class="form-control" name="job_title">
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
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Occupational Field</label>
                                            <select class="form-control" name="occup_field"
                                                id="exampleFormControlSelect1">
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

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group select_sec">
                                            <label for="exampleFormControlSelect1">Work Setting</label>
                                            <select class="form-control" name="work_setting"
                                                id="exampleFormControlSelect1">
                                                <option value="" selected>Select</option>

                                                <option value="Private Industry" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Private Industry") ? "selected='selected'" : "" ?>>
                                                    Private Industry
                                                </option>
                                                <option value="Municipal Government" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Municipal Government") ? "selected='selected'" : "" ?>>
                                                    Municipal Government
                                                </option>
                                                <option value="County Government" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Country Government") ? "selected='selected'" : "" ?>>
                                                    County Government
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
                                                <option value="Non‐Profit" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Non‐Profit") ? "selected='selected'" : "" ?>>
                                                    Non‐Profit
                                                </option>
                                                <option value="Other" <?php echo (get_user_meta($current_user->ID, 'work_setting', true) == "Other") ? "selected='selected'" : "" ?>>
                                                    Other
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="row selection_yes justify-content-between align-items-center">
                                    <p>Have you worked on a hazardous waste site in the past year?</p>
                                    <div class="select_yes">
                                        <div class="selector">
                                            <div class="selecotr-item">
                                                <input type="radio" id="radio1" name="selector" value="yes"
                                                    class="selector-item_radio <?php echo get_user_meta($user->ID, 'userWeb', true) ?>"
                                                    <?php if (!empty(get_user_meta($user->ID, 'userWeb', true))) { ?>
                                                        <?php echo 'checked' ?> <?php } ?>>
                                                <label for="radio1" class="selector-item_label webYes">Yes</label>
                                            </div>
                                            <div class="selecotr-item">
                                                <input type="radio" id="radio2" name="selector" value="no"
                                                    class="selector-item_radio <?php echo get_user_meta($user->ID, 'userWeb', true) ?>"
                                                    <?php if (get_user_meta($user->ID, 'userWeb', true) == '') { ?>     <?php echo 'checked' ?> <?php } ?>>
                                                <label for="radio2" class="selector-item_label webNo">No</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 userWeb" style='display:<?php if (!empty(get_user_meta($user->ID, 'userWeb', true))) { ?>
                                                 <?php echo 'block'; ?> 
                                            <?php } else { ?> 
                                            <?php echo 'none'; ?> 
                                            <?php } ?>'>
                                        <div class="form-group">
                                            <input type="text" name="userWeb" class="userWeb py-3 form-control"
                                                value="<?php echo get_user_meta($user->ID, 'userWeb', true) ?>"
                                                placeholder="Enter Waste Site">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="update_btn">

                                            <input type="hidden" name="id" id="hiddenField"
                                                value="<?php echo $user->ID; ?>" />
                                            <button type="submit" class="btn btn_update" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copy_right mt-5 mb-3">
            <div class="row justify-content-between">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <p>Copyright © <?php echo date('Y'); ?> All Rights Reserved</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-right text-grey copy-link">
                            <a href="<?php echo get_site_url(); ?>/terms-of-use/">TERMS OF USE</a>
                            <a href="<?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY </a>
                            <a href="<?php echo get_site_url(); ?>/sitemap" target="_blank">SITEMAP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <!-- js links -->



    <script>
// Function to load states based on selected country
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

            $.each(states, function (key, value) {
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
            $.each(cities, function (key, value) {
                if (value.state_id == stateId) {
                    html += '<option value="' + value.city + '">' + value.city + '</option>';
                }
            });
            $('#cities').html(html);
        }
    </script>
    <script>
        function imagePreview(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var fileReader = new FileReader();
                fileReader.onload = function (event) {
                    //$('#imagePreview').html('<img src="'+event.target.result+'" border-radius="100%" width="300" height="auto"/>');
                    $('#imagePreview').css('background-image', 'url(' + event.target.result + ')');
                    //document.body.style.backgroundImage = "url(" + event.target.result + ")";
                };
                fileReader.readAsDataURL(fileInput.files[0]);

            }
        }
        $("#imageUpload").change(function () {
            imagePreview(this);
        });


        $(document).ready(function () {
            $('.webYes').click(function () {
                $('.userWeb').css('display', 'block');
            })
            $('.webNo').click(function () {
                $('.userWeb').css('display', 'none');
            })
        });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <?php wp_footer(); ?>

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

        $(document).ready(function () {

            $('.profile_yes').click(function () {
                $('.usersWeb').css('display', 'block');
            })

            $('.profile_No').click(function () {
                $('.usersWeb').css('display', 'none');
            })


        });

        if ($("#radio2").attr('checked') == "checked") {
            $('.usersWeb').addClass('d-none')

        } else {
            $('.usersWeb').removeClass('d-none')
        }

        $('#radio1').click(function () {
            $('.usersWeb').removeClass('d-none')
        })

        $(document).ready(function () {

            $('.webYes').click(function () {
                $('.userWeb').css('display', 'block');
            })

            $('.webNo').click(function () {
                $('.userWeb').css('display', 'none');
            })



        });
        function getStateName(a) {
            //alert(a);
            var stateId = 0;
            let states = '<?= json_encode($allStates) ?>';

            states = JSON.parse(states);
            $.each(states, function (key, value) {
                if (value.state == a) {
                    stateId = value.id;
                }
            });
            //alert(stateId);
            return stateId;
        }  
    </script>
</body>

</html>
<?php ?>