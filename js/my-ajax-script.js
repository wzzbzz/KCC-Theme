jQuery(document).ready(function(){

        jQuery('form').submit(function(e){

            e.preventDefault();

            var formData = jQuery(this).serialize();

            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: my_ajax_object.ajax_url,
                data: formData,
                success: function(msg){
                    console.log(msg);
                }
            });

            return false;

        });

    });

