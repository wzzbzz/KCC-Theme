// $(window).resize(function(){
//     if ($(window).width() <= 576){ 
//         alert("Test");
//         $("#show-icon").click(function(){
//             $("#hide-sidebar-media").removeClass('d-none');
//             $("#show-icon").removeClass('d-none');
//             alert("Test 1");
//         });
//     }
// });


function getCertificate(course_id) {
    jQuery.ajax({
        url: 'https://knowledge.communication.worldcares.org/wp-admin/admin-ajax.php', // WordPress AJAX URL
        type: 'POST',
        data: {
            action: 'get_certificate_link',
            course_id: course_id
        },
        success: function(response) {
            if (response.success) {
                window.location.href = response.data;
            } else {
                alert('Error: ' + response.data);
            }
        },
        error: function() {
            alert('AJAX request failed.');
        }
    });
}