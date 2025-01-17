<?php
$calendar_id = $_GET['id'];
$current_user_id = get_current_user_id();
$myGroups = get_posts([
    'post_type' => 'groups',
    'post_status' => 'publish',
    'author' => $current_user_id,
    'numberposts' => 1000,
]);
?>
<!-- Modal -->
<style type="text/css">
    #ModalEdit {
        overflow-y: scroll;
    }

    .hides {
        display: none;
    }

    .foroption {
        margin: 20px 0;
    }

    .foroption .form-control {
        height: 50px;
        padding: 6px 12px !important;
    }
</style>

<div class="modal fade bd-example-modal-lg center-modal-as" id="ModalAdd" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content cal_pag">
            <div class="modal-header">
                <h5 class="modal-title">Add New Event</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="<?php echo get_template_directory_uri(); ?>/event-calendar_addEvent.php">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Event Name</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Enter Title" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" name="start" id="start" class="form-control" placeholder="dd-mm-yyyy"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Time</label>
                                <!-- Step set to 1800 seconds, which equals 30 minutes -->
                                <input type="time" id="start_time" name="start_time" class="form-control" step="1800" required>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" id="location" name="location" class="form-control"
                                    placeholder="Enter here" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Organization</label>
                                <input type="text" id="organization" name="organization" class="form-control"
                                    placeholder="Enter here" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group textarea-cs">
                                <label>Details</label>
                                <textarea class="form-control" id="details" name="details" placeholder="Enter here"
                                    rows="2"></textarea>
                            </div>
                        </div>

                        <!-- Publish Form to -->
                        <div class="col-lg-12 mb-3">
                            <h6><b>Publish the Form or Calendar Event to:</b></h6>
                        </div>
                        <div class="col-lg-12 mb-3 foroption">
                            <div class="row mb-4">
                                <div class="col-12 col-lg-4 mb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <label class="form-check-label">
                                            <input onclick="show3();" id="vin_publish" name="is_rf_check" type="radio"
                                                onchange="getRadioValue(this)" <?php echo (get_post_meta($rf_id, 'rf_publish', true) == "Select From My Joined Group") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input joined "
                                                value="joined">Select from Groups I Joined
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                        <?php
                                       // echo '<p>Current User ID: ' . $current_user_id . '</p>'; // This will display the user ID when debugging

                                        $joinGrp = learndash_get_users_group_ids($current_user_id);
                                        $joinedArg = [
                                            'post_type' => 'groups',
                                            'post_status' => 'publish',
                                            'paged' => $currentPage,
                                            'posts_per_page' => 50,
                                            'post__in' => $joinGrp,
                                        ];
                                        $myJoinedGroups = get_posts($joinedArg);
                                        ?>
                                        <div id="div55" class="hides div55">
                                            <select class="form-control mt-3 border rf_publish" id="joined"
                                                onchange="getGroupId(this)">
                                                <?php
                                                $isFirst = true; 
                                                foreach ($myJoinedGroups as $joinedGrpupVal) {
                                                    $author_id = $joinedGrpupVal->post_author;
                                                    $selected = $isFirst ? 'selected' : ''; 
                                                    $isFirst = false; 
                                                    if ($current_user_id != $author_id) { ?>
                                                        <option value="<?php echo $joinedGrpupVal->ID; ?>"  <?php echo $selected; ?>>
                                                            <?php echo $joinedGrpupVal->post_title; ?>
                                                        </option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 mb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <label class="form-check-label">
                                            <input onclick="show2();" required name="is_rf_check"  type="radio" onchange="getRadioValue(this)" <?php echo (get_post_meta($rf_id, 'rf_publish', true) == "Select From My Groups") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input my_group"
                                               value="created">Select from Groups I Created
                                        </label>
                                    </div>
                                    <div id="div44" class="hides div44">
                                        <select class="form-control mt-3 border my_group rf_publish" id="created"
                                            onchange="getGroupId(this)">
                                            <?php 
                                            $isCreatedFirst = true;
                                            foreach ($myGroups as $value) { 
                                                $selected = $isCreatedFirst ? 'selected' : ''; 
                                                $isCreatedFirst = false; 
                                                 ?>
                                                <option value="<?php echo $value->ID; ?>"  <?php echo $selected; ?>><?php echo $value->post_title; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 mb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <label class="form-check-label">
                                            <input onclick="show1();" type="radio" onchange="getGroupId(this)" <?php echo (get_post_meta($rf_id, 'rf_publish', true) == "all_users") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input all_rrn"
                                                name="is_rf_check" value="all_rrn_users">Site Wide/Global
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Publish Form to -->

                        <div class="col-lg-12 text-center modal-btn">
                            <button class="btn btn-primary send_review" title="Add Event">Send for Review</button>
                        </div>
                    </div>
                    <input type="hidden" name="rf_check" value="">
                    <input type="hidden" name="rf_radio_value" value="">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Event Modal -->
<div class="modal fade bd-example-modal-lg center-modal-as" id="ModalEdit" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content cal_pag">
            <div class="modal-header">
                <h5 class="modal-title">Edit Event</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"
                    action="<?php echo get_template_directory_uri(); ?>/editEventTitle.php">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="post_id" id="post_id">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Event Name</label>
                                <input type="text" name="title" id="title_edit" class="form-control"
                                    placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="start" id="start_date_edit" class="form-control"
                                    placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Time</label>
                                <!-- Step set to 1800 seconds, which equals 30 minutes -->
                                <input type="time" id="start_time" name="start_time" class="form-control" step="1800" required>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" id="location_edit" name="location" class="form-control"
                                    placeholder="Enter here">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Organization</label>
                                <input type="text" id="organization_edit" name="organization" class="form-control"
                                    placeholder="Enter here">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group textarea-cs">
                                <label>Details</label>
                                <textarea class="form-control" id="details_edit" name="details" placeholder="Enter here"
                                    rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h4>Publish to</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="radio-part">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="publish_type"
                                        id="publish_type_edit" value="all" checked>
                                    <label class="form-check-label">For all</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="publish_type"
                                        id="publish_type_edit1" value="group">
                                    <label class="form-check-label">Select Group to Post</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Group</label>
                                <select class="form-control select_cont select-text" name="group_name"
                                    id="group_name_edit" placeholder="Select">
                                    <option selected>Select</option>
                                    <?php
                                    if (!empty($myGroups)) {
                                        foreach ($myGroups as $grpupVal) {
                                            echo '<option value="' . $grpupVal->ID . '">' . $grpupVal->post_title . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center modal-btn">
                            <button class="btn btn-primary send_review" title="Add Event">Update for Review</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Event Details Modal -->
<div class="modal fade bd-example-modal-lg center-modal-as" id="ModalDetail" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content cal_pag">
            <div class="modal-header">
                <h5 class="modal-title">Event Details</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 pb-t-3">
                        <div class="main-title">
                            <h3 id="event_title_d"><b>Event Title here</b></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-t-3">
                        <div class="title-text">
                            <h6>Date and Time</h6>
                        </div>
                        <div class="values">
                            <span id="event_start_d">15 Jun, 2022 All Day</span>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-t-3">
                        <div class="title-text">
                            <h6>Location</h6>
                        </div>
                        <div class="values">
                            <span id="event_location_d">New York, New York</span>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-t-3">
                        <div class="title-text">
                            <h6>Organization</h6>
                        </div>
                        <div class="values">
                            <span id="event_organization_d">Long Group Name Here</span>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-t-3">
                        <div class="title-text">
                            <h6>Group</h6>
                        </div>
                        <div class="values">
                            <span id="event_group">Group Name</span>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-t-3">
                        <div class="title-text">
                            <h6>Status</h6>
                        </div>
                        <div class="values">
                            <span id="event_status_d" class="in-progress">In Review</span>
                        </div>
                    </div>
                    <div class="col-lg-12 pb-t-3">
                        <div class="title-text pb-t-3">
                            <h6>Details</h6>
                        </div>
                        <div class="values">
                            <p id="event_detail_d">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 float-right detail-btn" id="navIDDel">
                        <input type="hidden" id="val_cal" />
                        <button class="btn btn-outline-primary" title="Delete" data-toggle="modal" id="event_delete_d"
                            data-id="" onclick="deleteActionCalendar('<?php echo $calendar_id ?>');">Delete</button>
                    </div>
                    <div class="col-lg-6 detail-btn" id="navIDEdit">
                        <button class="btn btn-primary" id="event_edit_d" data-id="" data-toggle="modal"
                            title="Edit">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Event Modal -->
<div class="modal fade" id="deleteevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="blog_grid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete Event</h5>
                            <button type="button" class="close"
                                style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%"
                                data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="row">
                                <div class="col-6">
                                    <div class="apply_btn active">
                                        <form method="POST" action="" class="mediadoc_form"
                                            enctype="multipart/form-data">
                                            <input type="hidden" id="calender_event_id" name="calender_event_id"
                                                value="">
                                            <input type="hidden" name="delete_calendarEvent"
                                                value="delete_calendarEvent">
                                            <input type="hidden" name="my_calendar"
                                                value="<?php echo wp_create_nonce('my_calendar'); ?>">
                                            <button class="btn btn_apply d-inline">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="apply_btn active">
                                        <button type="button" data-dismiss="modal" class="btn btn_apply"
                                            style="color: #F9671D;background: #fff;">Cancel</button>
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

<style type="text/css">
    #createeventmodal .modal-dialog,
    #eventdetail .modal-dialog {
        margin: 0;
    }

    .calander_option {
        padding: 8px;
    }

    .month_days {
        padding: 0;
    }

    .month_days i {
        font-size: 16px;
        padding: 0 2px;
    }

    @media only screen and (max-width: 375px) {
        #calendar .weekdays th {
            font-size: 6px;
        }

        #calendar .event {
            font-size: 6px;
            width: 27px;
        }

        .current_vvent h3 {
            font-size: 21px !important;
        }
    }

    .modal-dialog.create_tickit .modal-content {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 10px 20px #0000000d;
        border-radius: 20px;
        padding: 0rem 1rem 1rem 1rem;
    }

    .edit-modal .form-check-inline {
        margin-right: 0px;
    }

    .publish_group {
        margin-left: 45px;
    }

    .center-modal-as .modal-body {
        padding: 5px 40px 40px 40px;
    }

    .center-modal-as .modal-body .main-title h3 {
        padding-top: 0px;
    }

    #event_title_d {
        font-weight: 600;
        margin-top: 0px;
        font-size: 25px;
    }

    .center-modal-as .modal-body .form-group label {
        top: -3px !important;
        color: #000000 !important;
    }
</style>

<script>

    function getGroupId(selectElement) {
        var selectedValue = $(selectElement).val();
        if (selectedValue == 'all_rrn_users') {
            $('.send_review').removeAttr('disabled');
            $('#joined').attr('required', false);
            $('#created').attr('required', false);
            $('input[name="rf_check"]').val('all_rrn_users');
            $('input[name="rf_radio_value"]').val('all');
        }
        $('input[name="rf_check"]').val(selectedValue);
    }
    function getRadioValue(selectElement) {
        var selectedValue = $(selectElement).val();
        var joinedElement = $('#joined');
        var createdElement = $('#created');
        var sendReviewButton = $('.send_review');
        var rfCheckInput = $('input[name="rf_check"]');
        if (selectedValue === 'joined') {
            joinedElement.attr('required', true);
            createdElement.attr('required', false);
            var selectedValueJoined = joinedElement.val();
            sendReviewButton.prop('disabled', !selectedValueJoined);
            rfCheckInput.val(selectedValueJoined);
        } else if (selectedValue === 'created') {
            joinedElement.attr('required', false);
            createdElement.attr('required', true);
            var selectedValueCreated = createdElement.val();
            sendReviewButton.prop('disabled', !selectedValueCreated);
            rfCheckInput.val(selectedValueCreated);
        } else {
            joinedElement.attr('required', false);
            createdElement.attr('required', false);
            rfCheckInput.val('');
        }
        $('input[name="rf_radio_value"]').val(selectedValue);
    }

    function show1() {
        $("#div55").addClass("hides");
        $("#div44").addClass("hides");
    }

    function show2() {
        $("#div44").removeClass("hides");
        $("#div55").addClass("hides");
    }

    function show3() {
        $("#div44").addClass("hides");
        $("#div55").removeClass("hides");
    }


// Code For New Page


    function show1() {
        $(".div55").addClass("hides");
        $(".div44").addClass("hides");
    }

    function show2() {
        $(".div44").removeClass("hides");
        $(".div55").addClass("hides");
    }

    function show3() {
        $(".div44").addClass("hides");
        $(".div55").removeClass("hides");
    }



    $('#ModalAdd').on('hidden.bs.modal', function () {
        location.reload();
    });

    function deleteActionCalendar(event_id) {
        var val_cal = $("#val_cal").val();
        $('#calender_event_id').val(val_cal);
        $('#deleteevent').modal('show');
    }

    jQuery(document).ready(function($){
   $('#div55').on('click', function(){
       show3();
   });
});
    // Set initial value on page load if needed
$(document).ready(function() {
    var selectedValue = $('#joined').find(':selected').val(); 
    if(selectedValue){
        getGroupId($('#joined')); 
    }  
});
</script>