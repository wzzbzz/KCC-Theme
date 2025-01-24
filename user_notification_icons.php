<style>
   .notification_secb{
      padding-right:10px;
   }
   .notification-body {
      max-height: 400px;
      overflow: auto;
   }
   .notification-body .mian_notification_sec {
      align-items: flex-start;
   }
   .mian_notification_sec .notification-icon-wrapper {
      width: 50px;
   }
   .mian_notification_sec .notification-content{
      width: calc(100% - 50px);
   }
   .mian_notification_sec .notification-icon-wrapper span {
    font-size: 14px;
    margin-top: 4px;
   }
   .see-more-link {
      background:none;
      border:none;
      color:#4ABE2B;
      padding:0; font:inherit;
      cursor:pointer;
      text-decoration: none;
   }
   .see-more-link:hover {
      text-decoration: none;
      color: #4ABE2B;
      background-color: transparent;
   }
   .noNewNotifications{
      padding-left:20px;
      color:dimgrey;
      font-size:12px;
      font-style: italic;
   }
</style>
<div class="notification_sec btn-group" onclick="resetUnansweredNotifications(); return false;">
   <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" id="notification_button" aria-haspopup="true" aria-expanded="false">
      <img src="<?php echo get_template_directory_uri(); ?><?php echo get_unread_notification_count(get_current_user_id()) > 0 ? '/assets/images/new_notifiocation.png' : '/assets/images/notification_icon.png'; ?>" class="img-fluid">
   </a>
   <div class="dropdown-menu dropdown-menu-right" id="show-notification">
      <div class="title_notification">
         <div class="col-xl-9 col-lg-8">
            <h4>Notifications</h4>
            <!---<p>Catch up on updates form all your accounts.</p>-->
         </div>
         <div class="col-xl-3 col-lg-4 text-right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png" class="img-fluid"><br>
            <a href="#" style="font-size: 8pt;" onclick="showAcknowledgedNotifications(); return false;">View Acknowledged (temp freature while in dev)</a>
         </div>
      </div>
      <div class="notification-body">
       <div class="ml-4"><p class="noNewNotifications">- Loading Notifications -</p></div>
      </div>
   </div>
</div>
<div class="notification_sec">
   <a href="<?php echo site_url('message') ?>"><img

         src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_icon.png" class="img-fluid"></a>
</div>
<?php if (current_user_can('administrator')) : ?>
<div class="notification_secb">
   <a href="<?php echo site_url('super-admin-menu') ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/superadmin_icon.png" class="img-fluid">
   </a>
</div>
<?php endif; ?>

<script>
   // Function to reset notifications to unanswered (mode 0)
   function resetUnansweredNotifications() {
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      var userid = <?php echo get_current_user_id(); ?>;

      $.ajax({
         type: "post",
         dataType: "html",
         url: ajaxurl,
         data: {
            action: "get_unanswered_notifications",
            userid: userid
         },
         success: function (response) {
            // Replace the notification body content with unanswered notifications
            $('.notification-body').html(response);
         },
         error: function() {
            alert("Failed to load notifications.");
         }
      });
   }

   // Function to load acknowledged notifications (mode 1)
   function showAcknowledgedNotifications() {
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      var userid = <?php echo get_current_user_id(); ?>;

      $.ajax({
         type: "post",
         dataType: "html",
         url: ajaxurl,
         data: {
            action: "get_acknowledged_notifications",
            userid: userid
         },
         success: function (response) {
            // Replace the notification body content with the acknowledged notifications
            $('.notification-body').html(response);
         },
         error: function() {
            alert("Failed to load notifications.");
         }
      });
   }

   // Use Bootstrap's show.bs.dropdown event to reset notifications every time the dropdown is opened
   jQuery('#notification_button').parent().on('show.bs.dropdown', function() {
      resetUnansweredNotifications(); // Reset to unanswered notifications when the dropdown is opened
   });

   // Redirect to notification function
   function redirectToNotification(url, kccId) {
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      $.ajax({
         type: "post",
         dataType: "json",
         url: ajaxurl,
         data: { "action": "clear_notification_for_this_page", "kcc_id": kccId },
         success: function (response) {
            window.location.href = url;
         }
      });
   }
</script>
