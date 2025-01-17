<?php
/*
Template Name: Email Log
*/

if ( is_user_logged_in() ) {

    // Get global user data
    global $wpdb, $current_user;
    wp_get_current_user();

    // Load the header
    get_header();

    // Fetch the last 1000 emails from the custom emailLog table, ordered by dateCreated in descending order
    $email_logs = $wpdb->get_results("
        SELECT * 
        FROM cpwcckandc_wccdev.emailLog
        ORDER BY dateCreated DESC
        LIMIT 1000
    ");

    ?>
    
    <style>
        .topOff {
            margin-top: 35px;
            padding-top: 35px;
        }
        .botOff {
            margin-top: 20px;
            padding-top: 20px;
        }
        /* Modal styling for email body display */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <div class="topOff"></div>

    <!-- Table for Email Log -->
    <table id="email-log-report" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date Created</th>
                <th>Subject</th>
                <th>To Email</th>
                <th>CC Email</th>
                <th>BCC Email</th>
                <th>Action Link</th>
                <th>Called From</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Loop through the fetched email logs and display them in table rows
        foreach ( $email_logs as $log ) {
            echo "<tr>
                    <td>{$log->id}</td>
                    <td>{$log->dateCreated}</td>
                    <td>{$log->subject}</td>
                    <td>{$log->to_email}</td>
                    <td>{$log->cc_email}</td>
                    <td>{$log->bcc_email}</td>
                    <td>{$log->actionlink}</td>
                    <td>{$log->calledFrom}</td>
                    <td><button class='view-body-btn' data-body='" . esc_attr($log->body) . "'>View Body</button></td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
    <div class="botOff"></div>

    <!-- Modal for displaying email body -->
    <div id="emailBodyModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="emailBodyContent"></p>
        </div>
    </div>

    <!-- jQuery and DataTables setup -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>

    <!-- Initialize DataTables -->
    <script>
        jQuery(document).ready(function($) {
            // Initialize DataTables for the Email Log table
            $('#email-log-report').DataTable({
                "pageLength": 40, // Number of rows per page
                "order": [[ 1, "desc" ]] // Sort by Date Created in descending order
            });

            // Modal handling
            var modal = $('#emailBodyModal');
            var modalContent = $('#emailBodyContent');

            // Use event delegation to handle dynamically loaded buttons
            $('#email-log-report').on('click', '.view-body-btn', function() {
                var emailBody = $(this).data('body');
                modalContent.text(emailBody); // Set email body content
                modal.show(); // Show the modal
            });

            // Close the modal when clicking the close button
            $('.close').on('click', function() {
                modal.hide();
            });

            // Close the modal if clicked outside the modal content
            $(window).on('click', function(event) {
                if (event.target == modal[0]) {
                    modal.hide();
                }
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
