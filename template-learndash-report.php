<?php
/*
Template Name: LearnDash Course Report
*/

if ( is_user_logged_in() ) {

    // Get global user data
    global $wpdb, $current_user;
    wp_get_current_user();

    // Load the header
    get_header();

    // Get all users enrolled in LearnDash courses
    $users = get_users();
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
                <th>Course</th>
                <th>Date Completed</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Loop through each user
        foreach ( $users as $user ) {
            $user_id = $user->ID;
            $user_name = $user->display_name;
            $user_email = $user->user_email;

            // Get enrolled courses for each user
            $courses = learndash_user_get_enrolled_courses($user_id);
            foreach ( $courses as $course_id ) {
                $course_title = get_the_title($course_id);

                // Fetch date completed from user meta
                $date_completed = get_user_meta($user_id, 'course_completed_' . $course_id, true);

                // Format the date for sorting and display
                $date_completed_formatted = $date_completed ? date("d/m/Y", $date_completed) : 'In Progress';
                $date_completed_order = $date_completed ? date("Y-m-d", $date_completed) : '';

                echo "<tr>
                        <td>{$user_id}</td>
                        <td>{$user_name}</td>
                        <td>{$user_email}</td>
                        <td>{$course_title}</td>
                        <td data-order='{$date_completed_order}'>{$date_completed_formatted}</td>
                      </tr>";

            }
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
            "order": [[ 4, "desc" ]], // Sort by Date Completed (index 4) in descending order
            "dom": 'Bfrtip', // Add buttons to the table
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    title: 'LearnDash Course Report', // Excel file name
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
