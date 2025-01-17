

     <script>
        
        jQuery(".postcls-trigger").on("click", function() {
        var dataId = jQuery(this).data("id");
            jQuery(".accordian_Sec").removeClass("active");
            jQuery("#"+dataId).addClass("active");

        });

</script>
<?php wp_footer(); 
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>
 <script>
    jQuery(document).ready(function() {
        jQuery('#next1').validate({
            rules: {
                firstName: "required",
                lastName: "required",
                email : "required"
            },
            messages: {
                firstName: "Please enter first name",
                lastName: "Please enter last name",
                email: "Please enter your email"
    
            },
            submitHandler: function(form) {
                form.submit();
            }
    
            // any other options and/or rules
        });
    });
  </script>
  <script>      
        jQuery(document).ready(function() {  


            $('.right_dropdown').on('click',function({
                $('.dropdown-menu').css('display','block');
                console.log('umesh');
            }))
       
        jQuery(".next").click(function() {
            let previous = jQuery(this).closest("fieldset").attr('id');
            let next = jQuery('#'+this.id).closest('fieldset').next('fieldset').attr('id');
            if(previous == "step0"){
                console.log(previous);
               jQuery('#'+next).show();
                jQuery('#'+previous).hide();
            } 
            else if(previous == "step1"){
                jQuery('#'+next).show();
                jQuery('#'+previous).hide();
            }      
        }); 
        
    });
    jQuery(".previous").click(function() {
        let current = jQuery(this).closest("fieldset").attr('id');
        let previous = jQuery('#'+this.id).closest('fieldset').prev('fieldset').attr('id');
        $('#'+previous).show();
        $('#'+current).hide();
    }); 

    function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>


    <script type="text/javascript">
    function fileupload(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreviewFile').css('background-image', 'url('+e.target.result +')');
                $('#imagePreviewFile').hide();
                $('#imagePreviewFile').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#fileUpload").change(function() {
        fileupload(this);
    });
    $(document).ready(function() {
        $('.js-example-placeholder-multiple').select2();
         placeholder: "Tags"
    });


</script>




</body>
</html>