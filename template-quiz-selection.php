<?php
/*
Template Name: LearnDash Quiz Items and Answers
*/

if ( is_user_logged_in() ) {

    // chatgpt for thsi is:  https://chatgpt.com/c/66f5c8a5-c258-800d-a4ac-7ef32c66a0f0 

    // Load the header
    get_header();

    global $wpdb;

    // Query for quizzes that have activity
    $query = "
        SELECT DISTINCT p.ID, p.post_title 
        FROM {$wpdb->prefix}posts p
        INNER JOIN {$wpdb->prefix}learndash_user_activity act
        ON p.ID = act.post_id
        WHERE p.post_type = 'sfwd-quiz'
        AND p.post_status = 'publish'
        AND act.activity_type = 'quiz'
    ";
    
    // Get the quizzes with activity
    $quizzes_with_activity = $wpdb->get_results($query);

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

    <!-- Dropdown to select a quiz -->
    <div class="quiz-selection">
        <label for="quiz_select">Select a Quiz:</label>
        <div class="quiz-dropdown-and-button">
            <select id="quiz_select">
                <option value="">-- Select a Quiz --</option>
                <?php
                if ( !empty($quizzes_with_activity) ) :
                    foreach ( $quizzes_with_activity as $quiz ) :
                        echo '<option value="' . $quiz->ID . '">' . $quiz->ID . ': ' . $quiz->post_title . '</option>';
                    endforeach;
                else :
                    echo '<option value="">No quizzes with activity found</option>';
                endif;
                ?>
            </select>
            <!-- Submit button to load the quiz items -->
            <button id="load_quiz" class="btn btn-primary">Load Quiz</button>
        </div>
    </div>


    <!-- Table to display quiz items and answers -->
    <div class="quiz-items">
        <table id="quiz-items-table" class="display" style="display:none;">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
            <!-- The content will be loaded here by AJAX -->
            </tbody>
        </table>
    </div>

    <div class="botOff"></div>

    <!-- jQuery and DataTables setup -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>

    <script>
    jQuery(document).ready(function($) {
        // Initialize the DataTable (but keep it hidden until a quiz is selected)
        var table = $('#quiz-items-table').DataTable({
            "pageLength": 20
        });

        // Handle quiz selection on button click
        $('#load_quiz').on('click', function() {
            var quiz_id = $('#quiz_select').val(); // Get the selected quiz ID
            if (quiz_id) {
                // Fetch quiz items and answers using AJAX
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>', // WordPress AJAX URL
                    method: 'POST',
                    data: {
                        action: 'get_quiz_items', // AJAX action
                        quiz_id: quiz_id
                    },
                    success: function(response) {
                        // Clear existing data
                        table.clear().draw();

                        // Check if the response is valid and contains data
                        if (response.success && response.data) {
                            var items = response.data;

                            // Loop through each question and answer
                            $.each(items, function(index, item) {
                                table.row.add([
                                    item.question,
                                    item.answer
                                ]).draw();
                            });

                            // Show the table
                            $('#quiz-items-table').show();
                        } else {
                            alert('No quiz items found for the selected quiz.');
                        }
                    }
                });
            } else {
                // Hide the table if no quiz is selected
                $('#quiz-items-table').hide();
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
