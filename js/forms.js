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
        }
        );

        if(!isValid) {
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
        
    });


    $("#audience-all").click(function () {
        // remove the selected options from the group_id select
        $('#audience_group').val(null).trigger('change');

        // from the parent "audience-select" div, find the group-select div and hide it
        $(this).closest('.audience-section').find('.group-select-wrap').hide();
        
    });

    $("#audience-group").click(function () {
        // from the parent "audience-select" div, find the group-select div and show it
        $(this).closest('.audience-section').find('.group-select-wrap').show();
    }
    );

    var rf_id = formvars.rf_id;


    if (rf_id) {
        $("#step-2").addClass('d-none');
        $("#step-1").addClass('d-none');
        $("#step-3").addClass('d-none');
        $("#step-4").addClass('d-none');
        $("#step-5").addClass('d-none');
        $("#step-6").removeClass('d-none');

        $("#bd-1").addClass('orange-bd');
        $("#red-1").addClass('circle-red');
        $("#red-1").addClass('circle-orange');

        $("#bd-2").addClass('orange-bd');
        $("#red-2").addClass('circle-red');
        $("#red-2").addClass('circle-orange');

        $("#bd-3").addClass('orange-bd');
        $("#red-3").addClass('circle-red');
        $("#red-3").addClass('circle-orange');

        $("#bd-4").addClass('orange-bd');
        $("#red-4").addClass('circle-red');
        $("#red-4").addClass('circle-orange');

        $("#bd-5").addClass('orange-bd');
        $("#red-5").addClass('circle-red');
        $("#red-5").addClass('circle-orange');

        $("#bd-6").addClass('orange-bd');
        $("#red-6").addClass('circle-red');
        $("#red-6").removeClass('circle-red');
        $("#red-6").addClass('circle-orange');
    }

    $('#other_age126').change(function () {
        if ($(this).is(':checked')) {
            $('#div15').show();
        } else {
            $('#div15').hide();
        }
    });
});

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
    let html1 = '<option value="">Select City*</option>';
    if (countryId == undefined || countryId == 0 || countryId == '') {
        $('#state').html(html);
        $('#city').html(html1);
        return false;
    }

    let states = formvars.all_states;

    if (states == '') {
        $('#state').html(html);
        $('#city').html(html1);
        return false;
    }

    if (states.length == 0) {
        $('#state').html(html);
        $('#city').html(html1);
        return false;
    }

    $.each(states, function (key, value) {
        if (value.country_id == countryId) {
            html += '<option value="' + value.state + '" data-value="' + value.id + '">' + value.state + '</option>';
        }
    });
    $('#state').html(html);
    $('#city').html(html1);

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







//div show hide 

$(document).ready(function () {

    $('#other_age123').change(function () {

        if ($(this).is(':checked')) {

            $('#div11').show();

        } else {

            $('#div11').hide();

        }

    });

});

$(".tmp #back-2").click(function () {
    return;

    $(".tmp #step-1").removeClass('d-none');

    $(".tmp #step-2").addClass('d-none');

    $(".tmp #step-3").addClass('d-none');

    $(".tmp #step-4").addClass('d-none');

    $(".tmp #step-5").addClass('d-none');



    // for circle color

    $(".tmp #bd-1").removeClass('orange-bd');

    $(".tmp #red-2").removeClass('circle-red');

    $(".tmp #red-1").removeClass('circle-orange');

    $(".tmp #red-1").addClass('circle-red');



    $(".tmp #back-1").removeClass('d-none');

    $(".tmp #back-2").addClass('d-none');

});



$(".tmp #back-3").click(function () {

    $(".tmp #step-1").addClass('d-none');

    $(".tmp #step-2").removeClass('d-none');

    $(".tmp #step-3").addClass('d-none');

    $(".tmp #step-4").addClass('d-none');

    $(".tmp #step-5").addClass('d-none');



    // for circle color

    $(".tmp #bd-2").removeClass('orange-bd');

    $(".tmp #red-3").removeClass('circle-red');

    $(".tmp #red-2").removeClass('circle-orange');

    $(".tmp #red-2").addClass('circle-red');



    $(".tmp #back-1").addClass('d-none');

    $(".tmp #back-2").removeClass('d-none');

    $(".tmp #back-3").addClass('d-none');

});



$(".tmp #back-4").click(function () {

    $(".tmp #step-1").addClass('d-none');

    $(".tmp #step-3").removeClass('d-none');

    $(".tmp #step-2").addClass('d-none');

    $(".tmp #step-4").addClass('d-none');

    $(".tmp #step-5").addClass('d-none');



    // for circle color

    $(".tmp #bd-3").removeClass('orange-bd');

    $(".tmp #red-4").removeClass('circle-red');

    $(".tmp #red-3").removeClass('circle-orange');

    $(".tmp #red-3").addClass('circle-red');



    $(".tmp #back-1").addClass('d-none');

    $(".tmp #back-2").addClass('d-none');

    $(".tmp #back-3").removeClass('d-none');

    $(".tmp #back-4").addClass('d-none');

});









$(".tmp #step-btn-1").click(function () {

    var surDa = $('.sur_da').val();

    var surTi = $('.sur_ti').val();

    var surAdd = $('.sur_add').val();

    var surOth = $('.sur_oth').val();

    var surPr = $('.sur_pr').val();

    var surBe = $('.sur_be').val();











    if (surPr.length < 10) {

        $(".tmp #sur_pr_error").text("Please enter primary telephone. .");

    }





    if (surDa == '') {

        $(".tmp #sur_da_error").text("Please enter date .");

    }

    if (surTi == '') {

        $(".tmp #sur_ti_error").text("Please enter time .");

    }

    if (surAdd == '') {

        $(".tmp #sur_add_error").text("Please enter address .");

    }

    if (surOth == '') {

        $(".tmp #sur_oth_error").text("Please enter other information .");

    }

    if (surBe == '') {

        $(".tmp #sur_be_error").text("Please enter date .");

    }



    else {

        $(".tmp #step-2").removeClass('d-none');

        $(".tmp #step-1").addClass('d-none');

        $(".tmp #step-3").addClass('d-none');

        $(".tmp #step-4").addClass('d-none');

        $(".tmp #step-5").addClass('d-none');

        $(".tmp #step-6").addClass('d-none');



        // for circle color

        $(".tmp #bd-1").addClass('orange-bd');

        $(".tmp #red-2").addClass('circle-red');

        $(".tmp #red-1").addClass('circle-orange');

        $(".tmp #red-1").removeClass('circle-red');



        $(".tmp #back-1").addClass('d-none');

        $(".tmp #back-2").removeClass('d-none');



    }





});

$(".tmp #step-btn-2").click(function () {

    $(".tmp #step-3").removeClass('d-none');

    $(".tmp #step-1").addClass('d-none');

    $(".tmp #step-2").addClass('d-none');

    $(".tmp #step-4").addClass('d-none');

    $(".tmp #step-5").addClass('d-none');

    $(".tmp #step-6").addClass('d-none');



    // for circle color

    $(".tmp #bd-2").addClass('orange-bd');

    $(".tmp #red-3").addClass('circle-red');

    $(".tmp #red-2").addClass('circle-orange');

    $(".tmp #red-2").removeClass('circle-red');



    $(".tmp #back-2").addClass('d-none');

    $(".tmp #back-3").removeClass('d-none');

});

$(".tmp #step-btn-3").click(function () {

    var surPro = $('.sur_pro').val();

    var surSe = $('.sur_se').val();

    var insType = $('.ins_type').val();





    var publishFrom1 = document.getElementsByName('property_condition');

    for (let j of publishFrom1) {

        if (j.checked) {

        }

        else {

            $(".tmp #pro_con_error").text("Select any option.");

        }

    }





    var publishFrom2 = document.getElementsByName('life_safety');

    for (let v of publishFrom2) {

        if (v.checked) {

        }

        else {

            $("#li_fe_error").text("Select any option.");

        }

    }







    var publishFrom3 = document.getElementsByName('property_owner');

    for (let h of publishFrom3) {

        if (h.checked) {

        }

        else {

            $("#pro_ow_error").text("Select any option.");

        }

    }





    var publishFrom4 = document.getElementsByName('property_owner');

    for (let y of publishFrom4) {

        if (y.checked) {

        }

        else {

            $("#pro_ow_error").text("Select any option.");

        }

    }





    var publishFrom5 = document.getElementsByName('liability_waiver ');

    for (let a of publishFrom5) {

        if (a.checked) {

        }

        else {

            $("#la_yes_error").text("Select any option.");

        }

    }





    var publishFrom6 = document.getElementsByName('owner_present ');

    for (let b of publishFrom6) {

        if (b.checked) {

        }

        else {

            $("#ow_pr_error").text("Select any option.");

        }

    }

    var publishFrom7 = document.getElementsByName('agree_terms ');

    for (let c of publishFrom7) {

        if (c.checked) {

        }

        else {

            $("#ag_yes_error").text("Select any option.");

        }

    }



    var publishFrom8 = document.getElementsByName('willing_to_help ');

    for (let f of publishFrom8) {

        if (f.checked) {

        }

        else {

            $("#will_yes_error").text("Select any option.");

        }

    }





    var publishFrom9 = document.getElementsByName('property_type ');

    for (let g of publishFrom9) {

        if (g.checked) {

        }

        else {

            $("#pro_yes_error").text("Select any option.");

        }

    }





    var publishFrom10 = document.getElementsByName('is_water ');

    for (let k of publishFrom10) {

        if (k.checked) {

        }

        else {

            $("#is_yes_error").text("Select any option.");

        }

    }



    var publishFrom11 = document.getElementsByName('is_mud ');

    for (let l of publishFrom11) {

        if (l.checked) {

        }

        else {

            $("#mu_yes_error").text("Select any option.");

        }

    }





    var publishFrom12 = document.getElementsByName('damage_contents');

    for (let m of publishFrom12) {

        if (m.checked) {

        }

        else {

            $("#da_co_error").text("Select any option.");

        }

    }





    var publishFrom13 = document.getElementsByName('contacted_other');

    for (let n of publishFrom13) {

        if (n.checked) {

        }

        else {

            $("#con_yes_error").text("Select any option.");

        }

    }


    if (surPro == '') {

        $("#sur_pro_error").text("Select any value.");

    }

    if (surSe == '') {

        $("#sur_se_error").text("Select any value.");

    }



    if (insType == '') {

        $("#ins_type_error").text("Please enter insurance type.");

    }





    else {

        $("#step-4").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-5").addClass('d-none');

        $("#step-6").addClass('d-none');



        // for circle color

        $("#bd-3").addClass('orange-bd');

        $("#red-4").addClass('circle-red');

        $("#red-3").addClass('circle-orange');

        $("#red-3").removeClass('circle-red');



        $("#back-3").addClass('d-none');

        $("#back-4").removeClass('d-none');

    }



});


$("#step-btn-4").click(function () {

    var publishFrom = document.getElementsByName('rf_publish');

    for (let i of publishFrom) {

        if (i.checked) {

            $("#step-5").removeClass('d-none');
            $("#step-1").addClass('d-none');
            $("#step-2").addClass('d-none');
            $("#step-3").addClass('d-none');
            $("#step-4").addClass('d-none');
            $("#step-6").addClass('d-none');

            // for circle color

            $("#bd-4").addClass('orange-bd');

            $("#red-5").addClass('circle-red');

            $("#red-4").addClass('circle-orange');

            $("#red-4").removeClass('circle-red');



        }

        else {

            $("#publish_error").text("Please select any group.");

        }

    }



});

var rf_id = formvars.rf_id;

if (rf_id) {

    $("#step-2").addClass('d-none');

    $("#step-1").addClass('d-none');

    $("#step-3").addClass('d-none');

    $("#step-4").addClass('d-none');

    $("#step-5").removeClass('d-none');



    // $("#bd-5").addClass('orange-bd');

    // $("#red-5").addClass('circle-red');

    // $("#red-1").removeClass('circle-red');



    $("#bd-1").addClass('orange-bd');

    $("#red-1").addClass('circle-red');

    $("#red-1").addClass('circle-orange');



    $("#bd-2").addClass('orange-bd');

    $("#red-2").addClass('circle-red');

    $("#red-2").addClass('circle-orange');



    $("#bd-3").addClass('orange-bd');

    $("#red-3").addClass('circle-red');

    $("#red-3").addClass('circle-orange');



    $("#bd-4").addClass('orange-bd');

    $("#red-4").addClass('circle-red');

    $("#red-4").addClass('circle-orange');





    $("#bd-5").addClass('orange-bd');

    $("#red-5").addClass('circle-red');

    $("#red-5").removeClass('circle-red');

    $("#red-5").addClass('circle-orange');

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

function show4() {

    document.getElementById('div2').style.display = 'block';

}



function show5() {

    document.getElementById('div3').style.display = 'none';

}





function show6() {

    document.getElementById('div3').style.display = 'block';

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







$(function() {

    // Javascript to enable link to tab

    var hash = document.location.hash;

    if (hash) {

      console.log(hash);

      $('.nav-link a[href='+hash+']').tab('show');

    }



    // Change hash for page-reload

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

      window.location.hash = e.target.hash;

    });

  });