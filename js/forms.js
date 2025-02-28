$(document).ready(function() {

    console.log("form js");

    $('.js-example-placeholder-multiple-II').select2({
        placeholder: "Sheltering"
    });

    $('.js-example-placeholder-multiple-123').select2({
        placeholder: "Utilities"
    });

    $("#back-2").click(function() {
        $("#step-1").removeClass('d-none');
        $("#step-2").addClass('d-none');
        $("#step-3").addClass('d-none');
        $("#step-4").addClass('d-none');
        $("#step-5").addClass('d-none');

        // for circle color
        $("#bd-1").removeClass('orange-bd');
        $("#red-2").removeClass('circle-red');
        $("#red-1").removeClass('circle-orange');
        $("#red-1").addClass('circle-red');

        $("#back-1").removeClass('d-none');
        $("#back-2").addClass('d-none');
    });

    $("#back-3").click(function() {
        $("#step-1").addClass('d-none');
        $("#step-2").removeClass('d-none');
        $("#step-3").addClass('d-none');
        $("#step-4").addClass('d-none');
        $("#step-5").addClass('d-none');

        // for circle color
        $("#bd-2").removeClass('orange-bd');
        $("#red-3").removeClass('circle-red');
        $("#red-2").removeClass('circle-orange');
        $("#red-2").addClass('circle-red');

        $("#back-1").addClass('d-none');
        $("#back-2").removeClass('d-none');
        $("#back-3").addClass('d-none');
    });

    $("#back-4").click(function() {
        $("#step-1").addClass('d-none');
        $("#step-3").removeClass('d-none');
        $("#step-2").addClass('d-none');
        $("#step-4").addClass('d-none');
        $("#step-5").addClass('d-none');

        // for circle color
        $("#bd-3").removeClass('orange-bd');
        $("#red-4").removeClass('circle-red');
        $("#red-3").removeClass('circle-orange');
        $("#red-3").addClass('circle-red');

        $("#back-1").addClass('d-none');
        $("#back-2").addClass('d-none');
        $("#back-3").removeClass('d-none');
        $("#back-4").addClass('d-none');
    });

    $("#back-5").click(function() {
        $("#step-1").addClass('d-none');
        $("#step-3").addClass('d-none');
        $("#step-2").addClass('d-none');
        $("#step-4").removeClass('d-none');
        $("#step-5").addClass('d-none');
        $("#step-6").addClass('d-none');

        // for circle color
        $("#bd-4").removeClass('orange-bd');
        $("#red-5").removeClass('circle-red');
        $("#red-4").removeClass('circle-orange');
        $("#red-4").addClass('circle-red');

        $("#back-1").addClass('d-none');
        $("#back-2").addClass('d-none');
        $("#back-3").addClass('d-none');
        $("#back-4").removeClass('d-none');
        $("#back-5").addClass('d-none');
    });

    $("#step-btn-1").click(function() {
        var disName = $('.dis_name').val();
        var disAdress = $('.dis_address').val();
        var country = $('.dis_country').val();
        var state = $('.dis_state').val();
        var city = $('.dis_city').val();

        if (disName == '') {
            $("#post_title_error").text("Please enter name.");
        }

        if (country == '') {
            $("#country_error").text("Please enter Country.");
        }

        if (state == '') {
            $("#state_error").text("Please enter state.");
        }

        if (city == '') {
            $("#city_error").text("Please enter city.");
        }

        if (disAdress == '') {
            $("#dis_address_error").text("Please enter Address.");
        } else {
            $("#step-2").removeClass('d-none');
            $("#step-1").addClass('d-none');
            $("#step-3").addClass('d-none');
            $("#step-4").addClass('d-none');
            $("#step-5").addClass('d-none');
            $("#step-6").addClass('d-none');

            // for circle color
            $("#bd-1").addClass('orange-bd');
            $("#red-2").addClass('circle-red');
            $("#red-1").addClass('circle-orange');
            $("#red-1").removeClass('circle-red');

            $("#back-1").addClass('d-none');
            $("#back-2").removeClass('d-none');
        }
    });

    $("#step-btn-2").click(function() {
        var disDate = $('.dis_date').val();
        var disTime = $('.dis_time').val();

        if (disDate == '') {
            $("#date_error").text("Please select date.");
        }

        if (disTime == '') {
            $('#time_error').text("Please select time.");
        } else {
            $("#step-3").removeClass('d-none');
            $("#step-1").addClass('d-none');
            $("#step-2").addClass('d-none');
            $("#step-4").addClass('d-none');
            $("#step-5").addClass('d-none');
            $("#step-6").addClass('d-none');

            // for circle color
            $("#bd-2").addClass('orange-bd');
            $("#red-3").addClass('circle-red');
            $("#red-2").addClass('circle-orange');
            $("#red-2").removeClass('circle-red');

            $("#back-2").addClass('d-none');
            $("#back-3").removeClass('d-none');
        }
    });

    $("#step-btn-3").click(function() {
        var disOrg = $('.dis_org').val();
        var disTitle = $('.dis_title').val();
        var disPhone = $('.dis_phone').val();
        var disAddress2 = $('.con_dis_address').val();

        if (disOrg == '') {
            $('#org_error').text("Please enter organization.");
        }

        if (disTitle == '') {
            $('#tile_error').text("Please enter title name.");
        }

        if (disPhone == '') {
            $('#phone_error').text("Please enter phone number.");
        }

        if (disAddress2 == '') {
            $('#con_dis_address_error').text("Please enter address.");
        } else {
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

    $("#step-btn-4").click(function() {
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

        $("#back-4").addClass('d-none');
        $("#back-5").removeClass('d-none');
    });

    $("#step-btn-5").click(function() {
        
        var ground_situation = document.getElementsByName('ground_1');
        var groundSelected = false;

        for (let j of ground_situation) {
            if (j.checked) {
                groundSelected = true;
                break;
            }
        }

        if (!groundSelected) {
            $("#ground_error").text("Please select any option.");
        }

    
        $("#step-6").removeClass('d-none');
        $("#step-1").addClass('d-none');
        $("#step-2").addClass('d-none');
        $("#step-3").addClass('d-none');
        $("#step-4").addClass('d-none');
        $("#step-5").addClass('d-none');

        // for circle color
        $("#bd-5").addClass('orange-bd');
        $("#red-6").addClass('circle-red');
        $("#red-5").addClass('circle-orange');
        $("#red-5").removeClass('circle-red');
    
    });

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

    $('#other_age126').change(function() {
        if ($(this).is(':checked')) {
            $('#div15').show();
        } else {
            $('#div15').hide();
        }
    });
});

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

    $.each(states, function(key, value) {
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
    $.each(cities, function(key, value) {
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
