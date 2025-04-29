$(document).ready(function () {

    console.log("form js");

    $('.js-example-placeholder-multiple-II').select2({
        placeholder: "Sheltering"
    });

    $('.js-example-placeholder-multiple-123').select2({
        placeholder: "Utilities"
    });


    $(".step-button.form-next").click(function () {

        // get all inputs, selects, and textareas in the current step that have the required attribute
        var inputs = $('.form-section.active input[required], .form-section.active select[required], .form-section.active textarea[required]');

        var isValid = true;
        // loop through each input
        inputs.each(function () {

            switch ($(this).prop('type')) {
                case 'radio':
                    // if the radio is checked, mark it as valid
                    if ($(this).is(':checked')) {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').find('.form-error').hide();
                    } else {
                        // if the radio is not checked, mark it as invalid
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').find('.form-error').show();
                    }
                    break;
                case 'checkbox':
                    // if the checkbox is checked, mark it as valid
                    if ($(this).is(':checked')) {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').find('.form-error').hide();
                    } else {
                        // if the checkbox is not checked, mark it as invalid
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').find('.form-error').show();
                    }
                    break;
                case 'select':
                    // if the select is empty, mark it as invalid
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').find('.form-error').show();
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').find('.form-error').hide();
                    }
                    break;
                case 'text':
                case 'email':
                case 'tel':
                case 'search':
                case 'number':
                case 'password':
                    // if the input is empty, mark it as invalid
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').siblings('.form-error').show();
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').siblings('.form-error').hide();
                    }
                    break;
                case 'textarea':
                    // if the textarea is empty, mark it as invalid
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').siblings('.form-error').show();
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').siblings('.form-error').hide();
                    }
                    break;
                default:
                    // if the input is empty, mark it as invalid
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').siblings('.form-error').show();
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').siblings('.form-error').hide();
                    }
                    break;
            }
        });
        var conditionals = $('.form-section.active input[data-require-condition], .form-section.active select[data-require-condition], .form-section.active textarea[data-require-condition]');

        conditionals.each(function () {
            // the required condition is a form element id and a value
            var condition = $(this).data('require-condition');
            // split it on =
            var parts = condition.split('=');
            // the first part is the form element name
            var name = parts[0];
            // the second part is the value
            var value = parts[1];
            // find the radio button with the name = name and the value of value and the property checked
            var formElement = $('input[name="' + name + '"][value="' + value + '"]');

            if(!formElement.length) {
                // don't do anything if the form element doesn't exist
                return;
            }

            // log whether it's checked or not.
            console.log(formElement.prop('checked'));

            if (formElement.prop('checked')) {
                // if the form element is checked, mark it as valid

                // if the form element is not empty
                if (formElement.val() == value) {
                    // if the input is empty, mark it as invalid
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        // find the nearest form-error element and show it
                        $(this).closest('.form-group').siblings('.form-error').show();
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).closest('.form-group').siblings('.form-error').hide();
                    }
                } else {
                    // if the form element is empty, hide the error message
                    $(this).removeClass('is-invalid');
                    $(this).closest('.form-group').siblings('.form-error').hide();
                }
            }

        });
        if (!isValid) {
            return;
        }


        var index = $('.report-process').index($('.report-process.active'));
        var nextIndex = index + 1;
        // remove active class from current step
        $('.report-process').removeClass('active');

        // add complete to current step
        $('.report-process').eq(index).addClass('complete');

        // add active class to next step
        $('.report-process').eq(nextIndex).addClass('active');

        $('.form-section').eq(index).removeClass('active');
        $('.form-section').eq(nextIndex).addClass('active');

        // scroll to the top of the page
        $('html, body').animate({
            scrollTop: $('.reports-top').offset().top
        }, 500);

    });

    $(".step-button.form-back").click(function () {
        var index = $('.form-section').index($('.form-section.active'));
        var prevIndex = index - 1;

        // remove active from current
        $('.report-process').removeClass('active');
        // remove complete class from current step
        $('.report-process').eq(prevIndex).removeClass('complete');

        // add active class to next step
        $('.report-process').eq(prevIndex).addClass('active');

        $('.form-section').eq(index).removeClass('active');
        $('.form-section').eq(prevIndex).addClass('active');

        // scroll to the top of the page
        $('html, body').animate({
            scrollTop: $('.reports-top').offset().top
        }, 500);

    });


    $('.audience-section').on('click', "#audience-all", function () {

        $(this).closest('.audience-section').find('.group-select-wrap').hide();
        $(this).closest('.audience-section').find('#audience_group').val(null).trigger('change');

        // remove the selected options from the group_id select
        // $('#audience_group').val(null).trigger('change');

    });

    $('.audience-section').on('click', "#audience-group", function () {
        // from the parent "audience-select" div, find the group-select div and show it
        $(this).closest('.audience-section').find('.group-select-wrap').show();
    }
    );

    $('#other_age126').change(function () {
        if ($(this).is(':checked')) {
            $('#div15').show();
        } else {
            $('#div15').hide();
        }
    });


    $('select.form-control.country').change(function () {
        // the ID is the data-value attribute of the selected option
        let countryId = $(this).find('option:selected').data('value');

        let html = '<option value="">Select State*</option>';

        // Check if countryId is invalid
        if (!countryId) {
            $('#' + $(this).data('change-target')).html(html);
            return false;
        }



        let states = formvars.all_states;

        // Check if states data is valid
        if (!states || !states.length) {
            console.log(
                'Invalid states data',
                states
            )
            $('#' + $(this).data('change-target')).html(html);
            return false;
        }

        console.log('States data', states);
        $.each(states, function (key, value) {
            if (value.country_id == countryId) {
                html += '<option value="' + value.state + '" data-value="' + value.id + '">' + value.state + '</option>';
            }
        });

        // set the states of the state select
        $('#' + $(this).data('change-target')).html(html);

    });


    $('.checkbox-select').on('click', function () {

        if ($(this).is(':checked')) {
            //$(this).closest('.checkbox-select-container').find('.select-container').show();
            $(this).closest('.checkbox-select-container').find('select').attr('disabled', false);
        }
        else {
            //$(this).closest('.checkbox-select-container').find('.select-container').hide();
            $(this).closest('.checkbox-select-container').find('select').val(null).trigger('change').attr('disabled', true);
        }
    });

    $('.checkbox-text').on('click', function () {

        if ($(this).is(':checked')) {
            //$(this).closest('.checkbox-text-container').find('.text-container').show();  
            // remove the disabled
            $(this).closest('.checkbox-text-container').find('input').attr('disabled', false);
        }
        else {
            //$(this).closest('.checkbox-text-container').find('.text-container').hide();  
            // clear the value
            $(this).closest('.checkbox-text-container').find('input[type=text]').val('');
            // add the disabled
            $(this).closest('.checkbox-text-container').find('input[type=text]').attr('disabled', true);
        }
    }
    );

    $('.checkbox-textarea').on('click', function () {
        if ($(this).is(':checked')) {
            // enable the text area
            $(this).closest('.checkbox-textarea-container').find('textarea').attr('disabled', false);
            // show the container
            $(this).closest('.checkbox-textarea-container').find('.textarea-container').show();
        }
        else {
            // clear the value
            $(this).closest('.checkbox-textarea-container').find('textarea').val('');
            // disable the text area
            $(this).closest('.checkbox-textarea-container').find('textarea').attr('disabled', true);
            // hide the container
            $(this).closest('.checkbox-textarea-container').find('.textarea-container').hide();
        }
    });

    $('.checkbox-checkboxes').on('click', function () {
        if ($(this).is(':checked')) {
            $(this).closest('.checkbox-checkboxes-container').find('.checkboxes').find('input[type="checkbox"]').attr('disabled', false);
        }
        else {
            $(this).closest('.checkbox-checkboxes-container').find('.checkboxes').find('input[type="checkbox"]').attr('disabled', true);
            // uncheck all checkboxes
            $(this).closest('.checkbox-checkboxes-container').find('.checkboxes').find('input[type="checkbox"]').prop('checked', false);
        }
    });

    $('.radio-checkboxes').on('change', function () {

        // this turns off both
        $(this).closest('.radios-checkboxes-container').find('.checkboxes').find('input[type="checkbox"]').attr('disabled', true);
        // hide all checkboxes
        $(this).closest('.radios-checkboxes-container').find('.checkboxes').hide();
        // clear all checkboxes
        $(this).closest('.radios-checkboxes-container').find('.checkboxes').find('input[type="checkbox"]').prop('checked', false);

        // this turns on the one we want
        $(this).closest('.radio-checkboxes-container').find('.checkboxes').find('input[type="checkbox"]').attr('disabled', false);
        // show the checkboxes
        $(this).closest('.radio-checkboxes-container').find('.checkboxes').show();


    });

    $('.radios-conditional .form-check-input').on('change', function () {
        if ($(this).val() == $(this).closest('.radios-conditional').children('.conditional').data('conditional-value')) {
            $(this).closest('.radios-conditional').children('.conditional').show();
        }
        else {
            $(this).closest('.radios-conditional').children('.conditional').hide();
            // clear the value
            $(this).closest('.radios-conditional').children('.conditional').children('input[type="text"]').val('');
            // clear the value
            $(this).closest('.radios-conditional').children('.conditional').children('textarea').val('');
            // clear the checkboxes
            $(this).closest('.radios-conditional').children('.conditional').children('input[type="checkbox"]').prop('checked', false);
            // clear the email fields
            $(this).closest('.radios-conditional').children('.conditional').children('input[type="email"]').val('');
            // clear the number fields
            $(this).closest('.radios-conditional').children('.conditional').children('input[type="number"]').val('');
            // clear the select fields
            $(this).closest('.radios-conditional').children('.conditional').children('select').val(null).trigger('change');
            
            // clear the value
            $(this).closest('.radios-conditional').children('.conditional').children('select').val(null).trigger('change');
            $(this).closest('.radios-conditional').children('.conditional').children('input[type="checkbox"]').prop('checked', false);
            $(this).closest('.radios-conditional').children('.conditional').children('input[type="number"]').attr('disabled', true);
        }
    });

    $('.questionnaire-radio').on('change', function () {

        console.log($(this).attr('required'));

        // if it's required, hide the error message
        if ($(this).attr('required') === "required") {
            $(this).closest('.questionnaire').find('.form-error').hide();
        }
        else {
            // find the closest required radio from the questionnaire
            var radios = $(this).closest('.questionnaire').find('.questionnaire-radio[required]');
            console.log(radios);
            // if there is length, show the error message
            if (radios.length) {
                $(this).closest('.questionnaire').find('.form-error').show();
            }
            else {
                $(this).closest('.questionnaire').find('.form-error').hide();
            }
        }

    });

    $('.demographic-checkbox').on('change', function () {
        const groupId = $(this).data('group') + '_counts';
        if ($(this).is(':checked')) {
            $('#' + groupId).show();
        } else {
            $('#' + groupId).hide();
            // Clear values when unchecked
            $('#' + groupId).find('input[type="number"]').val('');
        }
    });



    // Clear placeholder text when any text input gains focus
    $('input[type="text"], input[type="email"], input[type="tel"], input[type="search"], input[type="number"], input[type="password"], textarea').focus(function () {
        $(this).attr('data-placeholder', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).attr('data-placeholder'));
    });


});

function editBlog(args) {

    if (args.post_thumbnail) {
        $('#edit-modal-preview-div').css('background-image', 'url("' + encodeURI(args.post_thumbnail) + '")');
    } else {
        $('#edit-modal-preview-div').css('background-image', 'url("' + localvars.default_image + '")');
    }

    $("#editBlog").find("#blog_title").val(args.post_title);
    $("#editBlog").find("#blog_content").val(args.post_content);
    $("#editBlog").find("#post_id").val(args.post_id);

    // if args.audience is 'all-rnn-users', then #audience-all is selected
    if (args.audience == 'all-rnn-users') {
        $("#editBlog").find('#audience-all').prop('checked', true).trigger('click');
    } else {
        $("#editBlog").find('#audience-group').prop('checked', true).trigger('click');
        $("#editBlog").find('#audience_group_id').val(args.group_id);
    }


    $('#editBlog').modal('show');

}


function show2() {
    $("#div44").removeClass("hides");
    $("#div55").addClass("hides");
}


function show7() {
    document.getElementById('div4').style.display = 'none';
}

function show8() {
    document.getElementById('div4').style.display = 'block';
}




const getCountries = () => {

    countryId = $('#country option:selected').data('value');
    let html = '<option value="">Select State*</option>';

    if (countryId == undefined || countryId == 0 || countryId == '') {
        $('#state').html(html);

        return false;
    }

    let states = formvars.all_states;

    if (states == '') {
        $('#state').html(html);

        return false;
    }

    if (states.length == 0) {
        $('#state').html(html);

        return false;
    }

    $.each(states, function (key, value) {
        if (value.country_id == countryId) {
            html += '<option value="' + value.state + '" data-value="' + value.id + '">' + value.state + '</option>';
        }
    });
    $('#state').html(html);

    post_title_val = $("#post_title").val();
    if (post_title_val == "") {
        $("#post_title").css("background-color", "#0F0");
        $("#post_title").focus();
    }
}

const getCities = () => {
    stateId = $('#state option:selected').data('value');
    let html = '<option value="">Select City*</option>';
    if (stateId == undefined || stateId == 0 || stateId == '') {
        $('#city').html(html);
        return false;
    }
    var cities = formvars.all_cities;

    if (cities == '') {
        $('#city').html(html);
        return false;
    }
    if (cities.length == 0) {
        $('#city').html(html);
        return false;
    }
    $.each(cities, function (key, value) {
        if (value.state_id == stateId) {
            html += '<option value="' + value.city + '">' + value.city + '</option>';
        }
    });
    $('#city').html(html);

    var country_val = $('select[name="country"]').val();
    if (country_val == "") {
        $("#country_val").css("background-color", "#0F0");
        $("#country_val").focus();
    }
}

const getCountries2 = () => {
    countryId = $('#countries option:selected').data('value');
    let html = '<option value="">Select State*</option>';
    let html1 = '<option value="">Select City*</option>';
    if (countryId == undefined || countryId == 0 || countryId == '') {
        $('#states').html(html);
        $('#cities').html(html1);
        return false;
    }

    let states = formvars.all_states;
    if (states == '') {
        $('#states').html(html);
        $('#cities').html(html1);
        return false;
    }
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
    let html = '<option value="">Select City*</option>';
    if (stateId == undefined || stateId == 0 || stateId == '') {
        $('#cities').html(html);
        return false;
    }
    var cities = formvars.all_cities;

    if (cities == '') {
        $('#cities').html(html);
        return false;
    }

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




$(document).ready(function () {



    $(".next").click(function () {

        let previous = $(this).closest("fieldset").attr('id');

        let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');

        if (previous == "step0") {

            console.log(previous);

            $('#' + next).show();

            $('#' + previous).hide();

        }

        else if (previous == "step1") {

            $('#' + next).show();

            $('#' + previous).hide();

        }


    });



});

$(".previous").click(function () {

    let current = $(this).closest("fieldset").attr('id');

    let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');

    $('#' + previous).show();

    $('#' + current).hide();

});


function printDiv(divName) {

    var printContents = document.getElementById(divName).innerHTML;

    var originalContents = document.body.innerHTML;



    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;

}



function deleteActiondisasterReport(id) {

    $('#disaster_report_id').val(id);

    $('#disaster_report').modal('show');

}




jQuery(document).ready(function () {

    // Add event listeners for the two dropdowns
    jQuery('#rf_publish_select_from_my_joined_group').on('change', function () {
        setSelectedGroupId(jQuery(this).val());
    });

    jQuery('#rf_publish_select_from_my_group').on('change', function () {
        setSelectedGroupId(jQuery(this).val());
    });

    // Function to set the hidden field with the selected group ID
    function setSelectedGroupId(value) {
        document.getElementById('selected_groupid').value = value;  // Set hidden input field

        console.log('Selected group ID set to:', value);
    }
});  // <-- Missing closing parenthesis added her









//  var urlmenu = document.getElementById( 'myGroup' );

// urlmenu.onchange = function() {

//     window.open( 'create-disaster-report?gid=' + this.options[ this.selectedIndex ].value );

//};



function updateLocationLink() {

    var report_type = $("#report_type").val();

    var url = '/reports/create/' + report_type + '?gid=' + $("#myGroup").val();
    window.location.href = url;

}







$(function () {

    // Javascript to enable link to tab

    var hash = document.location.hash;

    if (hash) {

        console.log(hash);

        $('.nav-link a[href=' + hash + ']').tab('show');

    }



    // Change hash for page-reload

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        window.location.hash = e.target.hash;

    });

});


function showEditModal(args) {

    var selector = args.selector;

    var type = args.type;

    console.log(args);

    if (args.post_thumbnail) {
        $(selector).find('#edit-modal-preview-div').css('background-image', 'url("' + encodeURI(args.post_thumbnail) + '")');
    } else {
        $(selector).find('#edit-modal-preview-div').css('background-image', 'url("' + localvars.default_image + '")');
    }

    $(selector).find("#" + type + "_title").val(args.post_title);
    $(selector).find("#" + type + "_content").val(args.post_content);
    $(selector).find("#post_id").val(args.post_id);

    // if args.audience is 'all-rnn-users', then #audience-all is selected
    if (args.audience == 'all-rnn-users') {
        $(selector).find('#audience-all').prop('checked', true).trigger('click');
    } else {
        $(selector).find('#audience-group').prop('checked', true).trigger('click');
        console.log(args.group_id);
        $(selector).find('#audience_group_id').val(args.group_id);
    }


    $(selector).modal('show');

}


function deleteBlog(id) {
    $('#blogDelete').find('#post_id').val(id);
    $('#blogDelete').modal('show');
}

function deleteAnnouncement(id) {
    $('#announcementDelete').find('#post_id').val(id);
    $('#announcementDelete').modal('show');
}


// repeater items 

jQuery(document).ready(function ($) {
    // Handle adding new task item
    $('.add-repeater-item').on('click', function () {
        var container = $(this).closest('.repeater-container').find('.repeater-fields');
        var items = container.find('.repeater-item');
        var max = container.data('max');

        if (items.length < max) {
            var newItem = items.first().clone();
            var index = items.length;

            // Update the name attributes with new index
            newItem.find('input, select, textarea').each(function () {
                var name = $(this).attr('name');
                if (name) {
                    var newName = name.replace(/\[\d+\]/, '[' + index + ']');
                    $(this).attr('name', newName);
                    $(this).val(''); // Clear the value
                }
            });

            // Reset error messages
            newItem.find('.marker').empty();

            // Append the new item
            container.append(newItem);

            // Check if we've reached the maximum
            if (items.length + 1 >= max) {
                $(this).prop('disabled', true);
            }
        }
    });

    // Handle removing task item
    $(document).on('click', '.remove-repeater-item', function () {
        var container = $(this).closest('.repeater-container').find('.repeater-fields');
        var items = container.find('.repeater-item');
        var min = container.data('min');

        // Only remove if we have more than the minimum required
        if (items.length > min) {
            $(this).closest('.repeater-item').remove();

            // Re-enable the add button if it was disabled
            $(this).closest('.repeater-container').find('.add-repeater-item').prop('disabled', false);

            // Reindex the remaining items to ensure sequential indices
            container.find('.repeater-item').each(function (index) {
                $(this).find('input, select, textarea').each(function () {
                    var name = $(this).attr('name');
                    if (name) {
                        var newName = name.replace(/\[\d+\]/, '[' + index + ']');
                        $(this).attr('name', newName);
                    }
                });
            });
        } else {
            alert('You must have at least ' + min + ' task item(s).');
        }
    });
});