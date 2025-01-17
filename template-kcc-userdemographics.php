<?php
/*
Template Name: User Demographic Report
*/

if ( is_user_logged_in() ) {

    // Get global user data
    global $wpdb, $current_user;
    wp_get_current_user();

    // Load the header
    get_header();

    // SQL query to get users and associated data
    $query = "
        SELECT 
            u.ID AS user_id, 
            u.user_login, 
            u.user_email,
            MAX(CASE WHEN m.meta_key = 'first_name' THEN m.meta_value END) AS first_name,
            MAX(CASE WHEN m.meta_key = 'last_name' THEN m.meta_value END) AS last_name,
            MAX(CASE WHEN m.meta_key = 'city' THEN m.meta_value END) AS city,
            MAX(CASE WHEN m.meta_key = 'state' THEN m.meta_value END) AS state,
            MAX(CASE WHEN m.meta_key = 'code' THEN m.meta_value END) AS code,
            MAX(CASE WHEN m.meta_key = 'country' THEN m.meta_value END) AS country,
            MAX(CASE WHEN m.meta_key = 'dob' THEN m.meta_value END) AS dob,
            MAX(CASE WHEN m.meta_key = 'gendar' THEN m.meta_value END) AS gendar,
            MAX(CASE WHEN m.meta_key = 'language' THEN m.meta_value END) AS language,
            MAX(CASE WHEN m.meta_key = 'education' THEN m.meta_value END) AS education,
            MAX(CASE WHEN m.meta_key = 'race' THEN m.meta_value END) AS race,
            MAX(CASE WHEN m.meta_key = 'currently_employed' THEN m.meta_value END) AS currently_employed,
            ue.disaster_type, 
            ue.other_info, 
            ue.role_type, 
            ue.exp_date, 
            ue.disaster_desc, 
            ue.added_date AS experience_added_date,
            us.skill_type, 
            us.emergency_other, 
            us.general_other, 
            us.repair_other, 
            us.property_other, 
            us.health_other, 
            us.food_other, 
            us.volunteer_other, 
            us.additional_info, 
            us.added_date AS skills_added_date
        FROM wp_users u
        LEFT JOIN wp_usermeta m ON u.ID = m.user_id
        LEFT JOIN user_experience ue ON u.ID = ue.user_id
        LEFT JOIN user_skills us ON u.ID = us.user_id
        GROUP BY u.ID
    ";

    // Get all users with their experience and skills
    $users = $wpdb->get_results($query);

    ?>
    
    <style>
        .topOff {
            margin-top: 35px;
            padding-top: 35px;
        }
        .botOff{
            margin-top: 20px;
            padding-top: 20px;
        }
        .export-buttons {
            margin-bottom: 20px;
        }
    </style>

    <div class="topOff"></div>

    <!-- Custom container for Export button -->
    <div class="export-buttons">
        <button id="excel-export" class="btn btn-primary">Export to Excel</button>
    </div>

    <table id="learndash-report" class="display">
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Language</th>
                <th>Education</th>
                <th>Race</th>
                <th>Currently Employed</th>
                <th>Disaster Type</th>
                <th>Skill Type</th>
                <th>Date Completed</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Loop through each user and display their data in the table
        foreach ( $users as $user ) {
            echo "<tr>
                    <td>{$user->user_id}</td>
                    <td>{$user->user_login}</td>
                    <td>{$user->user_email}</td>
                    <td>{$user->first_name}</td>
                    <td>{$user->last_name}</td>
                    <td>{$user->city}</td>
                    <td>{$user->state}</td>
                    <td>{$user->code}</td>
                    <td>{$user->country}</td>
                    <td>{$user->dob}</td>
                    <td>{$user->gendar}</td>
                    <td>{$user->language}</td>
                    <td>{$user->education}</td>
                    <td>{$user->race}</td>
                    <td>{$user->currently_employed}</td>
                    <td>{$user->disaster_type}</td>
                    <td>{$user->skill_type}</td>
                    <td>{$user->experience_added_date}</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
    <div class="botOff"></div>

    <!-- jQuery and DataTables setup -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>

    <!-- DataTables Buttons extension -->
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script>
    jQuery(document).ready(function($) {
        // Initialize DataTables with Excel export functionality
        var table = $('#learndash-report').DataTable({
            "pageLength": 40,
            "order": [[ 17, "desc" ]], // Sort by Date Completed (index 17) in descending order
            "dom": 'Bfrtip', // Add buttons to the table
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    title: 'User Demographic Report', // Excel file name
                    exportOptions: {
                        columns: ':visible' // Export only visible columns
                    }
                }
            ]
        });

        // Trigger the export to Excel on button click
        $('#excel-export').on('click', function() {
            table.button(0).trigger();
        });
    });
    </script>

    <?php
    // Load the footer
    get_footer();

} else {
    // Redirect to login page if user is not logged in
    wp_redirect( wp_login_url() );
    exit;
}
?>
