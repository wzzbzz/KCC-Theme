
function fetchNotifications() {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'fetch_notifications.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById('notificationDropdown').innerHTML = xhr.responseText;
            } else {
                console.error('Error fetching notifications:', xhr.statusText);
            }
        }
    };
    // Replace CURRENT_USER_ID with the actual user's ID
    xhr.send('userid=' + encodeURIComponent(CURRENT_USER_ID));
}

function fetchNotificationslist() {
    fetch('user_notification.php')
        .then(response => response.text())
        .then(data => {
            // Do something with the data, e.g., display notifications
            console.log(data);
            document.getElementById('notifications').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}

// The Doc Ready stuff.
$(document).ready(function () {
    // I think this is a faled attempt to get the notifications
    // $(document).on('click', function (e) {
    //     if (!$(e.target).closest('#show-notification').length &&
    //         !$(e.target).closest('#viewNotificationsLink').length) {
    //             alert("check jw.js -1")
    //         let rightTopSec = document.querySelector('.right_top_sec');
    //         let notificationSec = rightTopSec.querySelector('.notification_sec');

    //         if (notificationSec) {
    //             notificationSec.classList.remove('show');
    //         }

    //         let notificationButton = document.getElementById('notification_button');
    //         notificationButton.setAttribute('aria-expanded', 'false');
    //         $('#show-notification').removeClass('show');
    //         document.getElementById("show-notification").removeAttribute("style");

    //     } else {
    //         alert( 'check jw.js -2');
    //         let notificationElement = document.getElementById('show-notification');
    //         let notificationButton = document.getElementById('notification_button');
    //         let rightTopSec = document.querySelector('.right_top_sec');
    //         let notificationSec = rightTopSec.querySelector('.notification_sec');
    //         // Show the notification panel
    //         notificationElement.classList.add('show');
    //         notificationButton.setAttribute('aria-expanded', 'true');

    //         // Add the show class to the notification_sec div if it exists
    //         if (notificationSec) {
    //             notificationSec.classList.add('show');
    //         }

    //         // Apply the CSS styles
    //         notificationElement.style.position = 'absolute';
    //         notificationElement.style.willChange = 'transform';
    //         notificationElement.style.top = '0px';
    //         notificationElement.style.left = '0px';
    //         notificationElement.style.transform = 'translate3d(-458px, 25px, 0px)';
    //     }
    // });
});

/* from group landing page */
$(document).ready(function () {

    $(".GroupeModalCenter").click(function () {
        var mthtml = $(this).html();
        var gid = $(this).attr('data-gid');
        $('#requestaccess').attr('data-gid', gid);
        $('.umsjee').html(mthtml);
        $('#GroupeModalCenter').modal('show');
    });

    $("#requestaccess").click(function (e) {
        e.preventDefault();
        var group_id = $(this).data("gid");
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "send_group_request", "group_id": group_id, "nonce": nonce },
            success: function (response) {
                console.log(response);
                alert(response.msg);
                $('#GroupeModalCenter').modal('hide');
            }
        });
    });

    $(".joinGroupeModal").click(function () {
        var mthtml = $(this).html();
        var gid = $(this).attr('data-gid');
        $('#joinGroupeAccess').attr('data-gid', gid);
        $('.umsjee').html(mthtml);
        $('#joinGroupeModal').modal('show');
    });

    $(".ownerModal").click(function () {
        var mthtml = $(this).html();
        var gid = $(this).attr('data-gid');
        $('#ownerModal').attr('data-gid', gid);
        $('.umsjee').html(mthtml);
        $('#ownerModal').modal('show');
    });



});

function allGroup() {
    $('#tab_type').val('allGroup');
}

function myGroup() {
    $('#tab_type').val('MyGroup');
}

function myGroupRequests() {
    $('#tab_type').val('MyGroupRequests');
}

/* from group create form */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imageUpload").change(function () {
    readURL(this);
});

/* from single-groups.php */
$('.dropdown-toggle').dropdown();

jQuery(document).ready(function () {
    jQuery(".next").click(function () {
        let previous = jQuery(this).closest("fieldset").attr('id');
        let next = jQuery('#' + this.id).closest('fieldset').next('fieldset').attr('id');

        if (previous == "step0") {
            console.log(previous);
            jQuery('#' + next).show();
            jQuery('#' + previous).hide();
        } else if (previous == "step1") {
            jQuery('#' + next).show();
            jQuery('#' + previous).hide();
        }
    });

    jQuery(".previous").click(function () {
        let current = jQuery(this).closest("fieldset").attr('id');
        let previous = jQuery('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
        jQuery('#' + previous).show();
        jQuery('#' + current).hide();
    });


});



function clickfunction(id, content, img) {
    $("#img_new").attr("src", img);
    $('#feed_id1').val(id);
    $('#feed_desc').val(content);
    $("#feed_img").val(img);
    $('#editFeed').modal('show');
}

$(document).ready(function () {
    $("#serach_user").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".add-mem-list").children('div').children('div').children('div').children('h5').filter(function () {
            $(this).parent('div').parent('div').parent('div').toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });


    $(".rejectUser").click(function (e) {
        e.preventDefault();
        var group_id = localvars.post_id;
        var uid = $(this).data("uid");
        var id = $(this).data("id");
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "reject_group_request", "uid": uid, "group_id": group_id, "id": id, "nonce": nonce },
            success: function (response) {
                $('.ums_btn' + id).text(response.msg);
                $('.ums_' + id).remove();
            }
        });
    });

    $(".followMember").click(function (e) {
        e.preventDefault();
        var group_id = localvars.post_id;
        var mid = $(this).data("mid");
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "follow_member", "mid": mid, "group_id": group_id, "nonce": nonce },
            success: function (response) {
                $('.followMemberBtn_' + mid).text(response.msg);
            }
        });
    });

    $(".removeMember").click(function (e) {
        e.preventDefault();

        // yes no alert box for confirmation
        var r = confirm("Are you sure you want to remove this member?");
        console.log(r);
        if (r == false) {
            return false;
        }
        var group_id = localvars.post_id;
        console.log(group_id);
        var mid = $(this).data("mid");
        console.log(mid);
        var nonce = $(this).attr("data-nonce");


        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "remove_group_member", "member_id": mid, "group_id": group_id, "nonce": nonce },
            success: function (response) {
                $('.followMemberBtn_' + mid).text(response.msg);
                $('.followMember_' + mid).remove();
            }
        });
    });

    $(".viewDetails").click(function () {
        let title = $(this).data('title');
        let img = $(this).data('img');
        let tag = $(this).data('tag');
        let desc = $(this).data('desc');
        let group = $(this).data('group');
        let date = $(this).data('date');
        let mresource_id = $(this).data('id');

        $('#mtitle').html(title);
        $('#mimg').attr('src', img);
        $('#mdate').html(date);
        $('#mtag').html(tag);
        $('#mgroup').html(group);
        $('#mdesc').html(desc);
        $('#mresource_id').val(mresource_id);

        $('#title').val(title);
        $('#tags').val(tag);
        $('#mr_group').val(group);
        $('#mr_description').val(desc);
        $('.delbtn').css('display', 'none');
    });

    $(".editResource").click(function () {
        let title = $(this).data('title');
        let img = $(this).data('img');
        let tag = $(this).data('tag');
        let desc = $(this).data('desc');
        let group = $(this).data('group');
        let date = $(this).data('date');
        let mresource_id = $(this).data('id');

        $('.delbtn').css('display', 'block');
        $('#mtitle').html(title);
        $('#mimg').attr('src', img);
        $('#mdate').html(date);
        $('#mtag').html(tag);
        $('#mgroup').html(group);
        $('#mdesc').html(desc);

        $('#mresource_id1').val(mresource_id);
        $('#title1').val(title);
        $('#tags1').val(tag);
        $('#mr_group1').val(group);
        $('#mr_description1').val(desc);
    });

    $(".editAnnouncement").click(function () {
        let title = $(this).data('title');
        let img = $(this).data('img');
        let desc = $(this).data('desc');
        let edit_ann_id = $(this).data('id');

        $('#edit_imagePreviewFileannouncement').css('background-image', 'url(' + img + ')');
        $('#post_title1').val(title);
        $('#post_content1').html(desc);
        $('#edit_ann_id').val(edit_ann_id);
    });

    $(".downloadF").click(function () {
        let img1 = $(this).data('img');
        window.open(img1, '_blank');
    });

    $(".next").click(function () {
        let previous = $(this).closest("fieldset").attr('id');
        let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');

        if (previous == "step0") {
            console.log(previous);
            $('#' + next).show();
            $('#' + previous).hide();
        } else if (previous == "step1") {
            $('#' + next).show();
            $('#' + previous).hide();
        }
    });

    $(".previous").click(function () {
        let current = $(this).closest("fieldset").attr('id');
        let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
        $('#' + previous).show();
        $('#' + current).hide();
    });



});


var imgUpload = document.getElementById('upload_imgs'),
    imgPreview = document.getElementById('img_preview'),
    imgUploadForm = document.getElementById('img-upload-form'),
    totalFiles, previewTitle, previewTitleText, img;

if (imgUpload !== null) {
    imgUpload.addEventListener('change', previewImgs, false);
}

function previewImgs(event) {
    totalFiles = imgUpload.files.length;

    if (!!totalFiles) {
        imgPreview.classList.remove('quote-imgs-thumbs--hidden');
        previewTitle = document.createElement('p');
        previewTitle.style.fontWeight = 'bold';
        previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
        previewTitle.appendChild(previewTitleText);
        imgPreview.appendChild(previewTitle);
    }

    for (var i = 0; i < totalFiles; i++) {
        img = document.createElement('img');
        img.src = URL.createObjectURL(event.target.files[i]);
        img.classList.add('img-preview-thumb');
        imgPreview.appendChild(img);
    }
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function showImagePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('.imagePreview').hide();
            $('.imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLC(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreviewResources').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreviewResources').hide();
            $('#imagePreviewResources').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLCannouncement(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreviewFileannouncement').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreviewFileannouncement').hide();
            $('#imagePreviewFileannouncement').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLCEditannouncement(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#edit_imagePreviewFileannouncement').css('background-image', 'url(' + e.target.result + ')');
            $('#edit_imagePreviewFileannouncement').hide();
            $('#edit_imagePreviewFileannouncement').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

jQuery(document).ready(function ($) {
    $(".feedDetail").click(function () {
        var authorimg = $(this).data('authorimg');
        var id = $(this).data('id');
        var feeimg = $(this).data('feeimg');
        var content = $(this).data('content');
        var title = $(this).data('title');
        var like = $(this).data('like');
        var comment = $(this).data('comment');

        $('.fIcon').data('id', id);
        $('#feed_detail_id').val(id);
        $('#feedimg').attr('src', feeimg);
        $('#feed_content').html(content);
        $('#feed_title').html(title);
        $('#authorimg').attr('src', authorimg);
        $('#feed_like').html(like);
        $('#feed_comment').html(comment);

        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url + "?nonce=" + localvars.nonce,
            data: { "action": "get_feed_comment", "post_id": id },
            success: function (json) {
                if (json && json.comment) {
                    $('#commentList').html(json.comment);
                }
            }
        });
    });

    $("#imageUpload").change(function () {
        readURL(this);
    });

    $("#feedimageUpload").change(function () {
        showImagePreview(this);
    });

    $("#imageUploadRes").change(function () {
        readURLC(this);
    });

    $("#resource_media_img").change(function () {
        showImagePreview(this);
    });

    $("#fileUploadannouncement").change(function () {
        readURLCannouncement(this);
    });

    $("#edit_fileUploadannouncement").change(function () {
        readURLCEditannouncement(this);
    });

    $("#fileUpload").change(function () {
        blogfileuploadCreate(this);
    });

    $(".fIcon").click(function (e) {
        e.preventDefault();
        var mid = $('#feed_detail_id').val();
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url + "?nonce=" + localvars.nonce,
            data: { "action": "update_feed_like", "post_id": mid },
            success: function (json) {
                if (json && json.count) {
                    $('#feed_like').html(json.count);
                }
            }
        });
    });

    $(".addFeedCommentBtn").click(function (e) {
        $("#sub_btn").attr('disabled', true);
        e.preventDefault();
        var mid = $('#feed_detail_id').val();
        var feedComment = $('#feedComm ent').val();
        if (feedComment == "") {
            alert("Enter comment");
            return false;
        }
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url + "?nonce=" + localvars.nonce,
            data: { "action": "add_feed_comment", "post_id": mid, "feedComment": feedComment },
            success: function (json) {
                console.log(json.comment);
                if (json && json.comment) {
                    $('#feedComment').val("");
                    $('#commentList').append(json.comment);
                }
                $('#sub_btn').removeAttr("disabled");
            }
        });
    });

    $(".saveMedia").click(function (e) {
        e.preventDefault();
        var rmid = $(this).data('id');
        var group_id = localvars.post_id;
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url + "?nonce=" + localvars.nonce,
            data: { "action": "save_resource_media", "rmid": rmid, 'group_id': group_id },
            success: function (json) {
                if (json && json.msg) {
                    alert(json.msg);
                }
            }
        });
    });

    $("#blog_edit_image").change(function () {
        blogfileupload(this);
    });



});

function blogfileupload(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blogEditImage').css('background-image', 'url(' + e.target.result + ')');
            $('#blogEditImage').hide();
            $('#blogEditImage').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function blogfileuploadCreate(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.imagePreviewFileCreate').css('background-image', 'url(' + e.target.result + ')');
            $('.imagePreviewFileCreate').hide();
            $('.imagePreviewFileCreate').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {
    $('.js-example-placeholder-multiple').select2({
        placeholder: "Tags"
    });
});

function deleteFeed(id) {
    $('#feed_id').val(id);
    $('#track_delete').modal('show');
}

function deleteBlog(id) {
    $('#blog_id').val(id);
    $('#blogDelete').modal('show');
}

function deleteAnnouncement(id) {
    $('#ann_id').val(id);
    $('#deleteAnnoucementModal').modal('show');
}



/* from user-dashboard.php */

var curtab = window.location.href; // Get the url
curtab = curtab.split("#"); // Split the url at #
curtab = "#" + curtab[1]; // Put the info after the # in a variable

$("a.tab").each(function (i) { // Loop through all links and compare tab from url with value in link
    if (curtab == $(this).attr("href")) {
        $(this).addClass("active"); // If they are the same, set that tab's class to active
    }
});

$("a.tab").click(function () { // Select tab
    $(".active").removeClass("active"); // Select the a, remove class for every link
    $(this).addClass("active"); // Select the clicked tab and add an active class
    var tabtocall = $(this).children().attr("href"); // Var to select current clicked tab
    $(".content").slideUp; // Slide up all content
    $(tabtocall).slideDown("normal"); // Slide down the selected content
});

$(document).ready(function () {

    $("#emergency_other").on("click", function () {
        $(".emergency_textbox").toggle(this.checked);
    });
    $("#general_other").on("click", function () {
        $(".general_textbox").toggle(this.checked);
    });
    $("#repair_other").on("click", function () {
        $(".repair_textbox").toggle(this.checked);
    });
    $("#property_other").on("click", function () {
        $(".property_textbox").toggle(this.checked);
    });
    $("#health_other").on("click", function () {
        $(".health_inputbox").toggle(this.checked);
    });
    $("#food_Other").on("click", function () {
        $(".food_textbox").toggle(this.checked);
    });
    $("#volunteer_other").on("click", function () {
        $(".volunteer_textbox").toggle(this.checked);
    });
    $("#severe_type").on("click", function () {
        $(".severe_checkbox").toggle(this.checked);
    });
    $("#structural_type").on("click", function () {
        $(".structural_checkbox").toggle(this.checked);
    });
    $("#terrorist_type").on("click", function () {
        $(".terrorist_checkbox").toggle(this.checked);
    });
    $("#structural_other").on("click", function () {
        $(".disaster_textbox").toggle(this.checked);
    });

});

$(document).ready(function () {

    /****
     * Member following
     */

    $(".follwMember").click(function (e) {
        e.preventDefault();
        var mid = $(this).data("uid");
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "follow_member1", "mid": mid, "nonce": nonce },
            success: function (response) {
                $('.ums_btn' + mid).text(response.msg);
                $('.ums_btn' + mid).removeClass('follwMember');
                $('.ums_btn' + mid).addClass('unFollwMember');
            }
        });
    });

    $(".unFollwMember").click(function (e) {
        e.preventDefault();
        var mid = $(this).data("uid");
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "unfollow_member", "mid": mid, "nonce": nonce },
            success: function (response) {
                $('.ums_btn' + mid).text(response.msg);
                $('.ums_btn' + mid).removeClass('unFollwMember');
                $('.ums_btn' + mid).addClass('follwMember');
            }
        });
    });


    /**
     * Group interactions
     */

    $('.action-button').on('click', '.btn-cancel-join-group-request', function (e) {
        // disable this for now
        return;

        e.preventDefault();

        var data = {
            action: 'cancel_join_group_request',
            group_id: $(this).data("gid"),
            nonce: $(this).data("nonce")
        }
        if ($(this).data("uid")) {
            data.user_id = $(this).data("uid");
        }
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: data,
            success: function (response) {
                console.log(response);
                console.log($obj);
                if (response.data.result == true) {
                    $obj.closest('.group-cell').removeClass('my-group-request-cell');
                    $obj.removeClass('btn-cancel-join-group-request');
                    $obj.addClass('btn-join-closed-group');
                    $obj.text('Request Access');
                }
            }
        });

    });
    // right now we have a different click for each button type.  I feel like this can be consolidated.
    $(".action-button").on("click", ".btn-join-closed-group", function (e) {

        e.preventDefault();

        var data = {
            action: 'join_closed_group_request',
            group_id: $(this).data("gid"),
            nonce: $(this).data("nonce")
        }
        if ($(this).data("uid")) {
            data.user_id = $(this).data("uid");
        }

        $obj = $(this);
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: data,
            success: function (response) {
                console.log(response.data);
                if (response.data.result == true) {

                    //$obj.removeClass('btn-join-closed-group');
                    //$obj.addClass('btn-cancel-join-group-request');
                    // disable the button
                    $obj.text('Request Sent');

                    // refresh the page
                    location.reload();
                }
            }
        });
    });


    $(".action-button").on('click', '.btn-join-open-group', function (e) {

        e.preventDefault();

        var data = {
            action: 'join_open_group',
            group_id: $(this).data("gid"),
            nonce: $(this).data("nonce")
        }
        if ($(this).data("uid")) {
            data.user_id = $(this).data("uid");
        }

        var nonce = $(this).attr("data-nonce");

        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: data,
            success: function (response) {
                console.log(response);
                console.log($obj);

                if (response.data.result == true) {
                    // change the button to leave group
                    $obj.removeClass('btn-join-open-group');
                    $obj.addClass('btn-leave-group');
                    $obj.text('Leave Group');

                    $obj.closest('.group-cell').addClass('my-joined-group-cell');

                    // click the active button in the header nav
                    $('.group_btn a.active').trigger('click');


                }
                //$('#joinGroupeModal').modal('hide');
                //window.location = response.group_url;
            }
        });
    });

    $(".action-button").on('click', '.btn-leave-group', function (e) {

        e.preventDefault();

        var data = {
            action: 'leave_group',
            group_id: $(this).data("gid"),
            nonce: $(this).data("nonce")
        }
        if ($(this).data("uid")) {
            data.user_id = $(this).data("uid");
        }
        $obj = $(this);

        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: data,
            success: function (response) {
                console.log(response);
                if (response.data.result == true) {
                    // change the button to join group
                    $obj.removeClass('btn-leave-group');
                    $obj.addClass('btn-join-open-group');
                    $obj.text('Join Group');

                    $obj.closest('.group-cell').removeClass('my-joined-group-cell');

                    // click the active button in the header nav
                    $('.group_btn a.active').trigger('click');

                }
                //$('#joinGroupeModal').modal('hide');
                //window.location = response.group_url;
            }
        });
    });


    $(".acceptMemberRequest").click(function (e) {
        e.preventDefault();
        var group_id = $(this).data("groupid");
        var uid = $(this).data("uid");
        var id = $(this).data("rid");
        var nonce = $(this).attr("data-nonce");
        var data = {
            "action": "accept_group_join_request",
            "user_id": uid,
            "group_id": group_id,
            "request_id": id,
            "nonce": nonce
        }

        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: data,
            success: function (response) {
                $obj.text("Accepted");
                $obj.attr('disabled', true);
                $obj.parent().find('.declineMemberRequest').remove();
            }
        });
    });

    $(".declineMemberRequest").click(function (e) {
        e.preventDefault();
        var group_id = $(this).data("groupid");
        var uid = $(this).data("uid");
        var id = $(this).data("rid");
        var nonce = $(this).attr("data-nonce");
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "decline_group_join_request", "user_id": uid, "group_id": group_id, "request_id": id, "nonce": nonce },
            success: function (response) {
                $obj.text("Declined");
                $obj.attr('disabled', true);
                $obj.parent().find('.acceptMemberRequest').remove();
            }
        });
    });

    // invite a member
    $(".action-button").on('click', ".inviteMember", function (e) {
        e.preventDefault();
        var group_id = localvars.post_id;
        var mid = $(this).data("mid");
        var nonce = $(this).attr("data-nonce");
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "send_closed_group_invite", "mid": mid, "group_id": group_id, "nonce": nonce },
            success: function (response) {
                $obj.text(response.msg);
                // set the buttom to "cancel invite"
                $obj.removeClass('inviteMember');
                $obj.addClass('cancelInvite');
                $obj.text('Cancel Invitation');
            }
        });
    });

    // cancel an invitation
    $(".action-button").on('click', ".cancelInvite", function (e) {
        e.preventDefault();
        var group_id = localvars.post_id;
        
        var user_id = $(this).data("mid");

        console.log(user_id);

        var nonce = $(this).attr("data-nonce");
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "cancel_group_invite", "group_id": group_id, "user_id": user_id, "nonce": localvars.nonce },
            success: function (response) {
                console.log(response);
                $obj.text(response.msg);
                // set the buttom to "cancel invite"
                $obj.removeClass('cancelInvite');
                $obj.addClass('inviteMember');
                $obj.text('Invite Member');
            }
        });
    });

    // accept an invitation
    $(".action-button").on('click', ".acceptInvitation", function (e) {

        e.preventDefault();
        var group_id = $(this).data("gid");
        var nonce = $(this).attr("data-nonce");
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "accept_group_invite", "group_id": group_id, "nonce": localvars.nonce },
            success: function (response) {
                console.log(response);
                $obj.text(response.msg);
                // set the buttom to "cancel invite"
                $obj.removeClass(' ');
                // disable the button
                // remove the ".declineInvitation" button 
                $obj.parent().find('.declineInvitation').remove();
                $obj.parent().find('button').attr('disabled', true);
                $obj.text('Invitation Accepted');


            }
        });
    });

    // decline an invitation
    $(".action-button").on('click', ".declineInvitation", function (e) {
        e.preventDefault();
        var group_id = $(this).data("gid");
        var nonce = $(this).attr("data-nonce");
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "decline_group_invite", "group_id": group_id, "nonce": localvars.nonce },
            success: function (response) {
                console.log(response);
                $obj.text(response.msg);
                // set the buttom to "cancel invite"
                $obj.removeClass('inviteMember');
                $obj.attr('disabled', true);
                // disable the button
                $obj.parent().find('.acceptInvitation').remove();
                $obj.text('Invitation Declined');




            }
        });
    });

    // cancel an invitation
    $(".action-button").on('click', ".cancelInvitation", function (e) {
        e.preventDefault();
        var group_id = localvars.post_id;
        var nonce = $(this).attr("data-nonce");
        $obj = $(this);
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "cancel_group_invite", "group_id": group_id, "nonce": localvars.nonce },
            success: function (response) {

                console.log(response);
                $obj.text(response.msg);
                // set the buttom to "cancel invite"
                $obj.removeClass('inviteMember');
                // disable the button
                $obj.attr('disabled', true);
                $obj.text('Invitation Cancelled');


            }
        });
    });


    $("#requestAccept").click(function (e) {
        alert("check this one");
        e.preventDefault();
        var group_id = $(this).data("gid");
        var invited_to = $(this).attr('data-invited_to');
        var invited_from = $(this).attr('data-invited_from');
        var nonce = $(this).attr("data-nonce");
        $.ajax({
            type: "post",
            dataType: "json",
            url: localvars.ajax_url,
            data: { "action": "lmuser_add_in_group", "group_id": group_id, "invited_to": invited_to, "invited_from": invited_from, "nonce": localvars.nonce },
            success: function (response) {
                console.log(response);
                $('#GroupeModalCenter').modal('hide');
            }
        });
    });

    $(".next").click(function () {
        let previous = $(this).closest("fieldset").attr('id');
        let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');
        if (previous == "step0") {
            console.log(previous);
            $('#' + next).show();
            $('#' + previous).hide();
        } else if (previous == "step1") {
            $('#' + next).show();
            $('#' + previous).hide();
        }
    });

    $(".previous").click(function () {
        let current = $(this).closest("fieldset").attr('id');
        let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
        $('#' + previous).show();
        $('#' + current).hide();
    });

    $("#imageUpload").change(function () {
        var form = $('imageuploadform')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);



        readURLprofile(this);

        $.ajax({
            url: localvars.ajax_url,
            type: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log("error");
                console.log(data);
            }
        });
    });

});


function readURLprofile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var currentPage = localvars.current_page

    if (currentPage === 'my-profile') {
        // Simulate a click on the tab element
        var profileTab = document.getElementById('pills-profile-tab');
        if (profileTab) {
            profileTab.click();
        }

        // Wait for 1 second (1000 milliseconds) before scrolling
        setTimeout(function () {
            // Scroll to #skills-section and position it in the middle of the viewport
            var id = getParameterByName('id');
            if (id === 'skills' && id !== null) {
                console.log('skills');
                if ($('#skills-section').length) {
                    var sectionOffset = $('#skills-section').offset().top;
                    var middleOfViewport = $(window).height() / 2;

                    $('html, body').animate({
                        scrollTop: sectionOffset - middleOfViewport + ($('#skills-section').outerHeight() / 2)
                    }, 500);
                }
            }
        }, 500); // Delay of 1 second
    }
});


// Function to get query parameter by name
function getParameterByName(name) {
    name = name.replace(/[\[\]]/g, "\\$&");
    var url = window.location.href;
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
    var results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}



// JW Doc Ready Pile 
$(document).ready(function () {

    $(".kcc-form").on('submit', function (e) {
        // disconnect the click event from the submit button inside it.
        $(this).find('button[type="submit"]').prop('disabled', true);

    });


    // Groups nav menu filters
    $(".group_btn a").on('click', function (e) {
        // disconnect the click event from the submit button inside it.
        e.preventDefault();
        // find all the divs with the class of group-cell and hide them
        console.log($(this).data('filter'));
        switch ($(this).data('filter')) {
            case 'all':
                $('.group-cell').show();

                break;
            case 'mine':
                $('.group-cell').hide();
                $('.my-group-cell').show();
                break;
            case 'joined':
                $('.group-cell').hide();
                $('.my-joined-group-cell').show();
            case 'requests':
                $('.group-cell').hide();
                $('.my-group-has-pending-requests').show();
                $('.invited-to-join').show();
                
                break;
        }

        $('.nav-item a').removeClass('active');
        $(this).addClass('active');
    });


    // check for a query variable called "tab" and if it exists, click the tab with that id
    var tab = getParameterByName('tab');
    if (tab) {
        $('#' + tab).click();
    }
    

    // Intercept touch event for menu_icon images in mobile views
    $('.main_side_bar_left a').on('touchstart', function (e) {
        e.preventDefault();
        
        // set body class .ast-mouse-clicked
        $('body').addClass('ast-mouse-clicked');
    });

});


/* announcements */
$(".editAnnouncement").click(function () {

    let title = $(this).data('title');

    let img = $(this).data('img');

    let desc = $(this).data('desc');

     let edit_ann_id = $(this).data('id');

    $('#post_title1').val(title);               

    $('#post_content1').html(desc);

    $('#edit_ann_id').val(edit_ann_id);               

});
