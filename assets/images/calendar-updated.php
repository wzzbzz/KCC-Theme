<?php
    /* Template Name: Calendar Updated */
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calender-wcc</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

    <!-- css links -->

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" />


    <style>

#calendar td:before {
    content: '';
    position: absolute;
    height: 2.5px;
    width: 50%;
    background: #000;
   
    /* font-weight: bold; */
}
#calendar td{
    position: relative;
    font-size: 25px;
}

.calender_section{background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 10px 20px #00000029;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    height: 100%;
    width: 93%;;
    
}
#calendar {
	width: 100%;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
}

#calendar tr, #calendar tbody {
  grid-column: 1 / -1;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
 width: 100%;
}

caption {
	text-align: center;
  grid-column: 1 / -1;
  font-size: 130%;
  font-weight: bold;
  padding: 10px 0;
}

#calendar a {
	color: #89C3FF;
	text-decoration: none;
}

#calendar td, #calendar th {
	padding: 5px;
	box-sizing:border-box;
	
}

#calendar .weekdays th {
	text-align: start;
	text-transform: uppercase;
	line-height: 20px;
	border: none !important;
	padding: 10px 6px;
	color: #80807F;
	font-size: 13px;
}
.unique_color{
    color: #FFC489;
    margin: 3px 0 7px 0;
	text-decoration: none;	
}



.event-time{
    color: #DFDFDF;
    cursor: pointer;
}
#calendar td {
   
    margin-bottom: 20px;
}

#calendar .date {
	text-align: center;
	margin-bottom: 5px;
	padding: 4px;
	
	color: #000;
	width: 20px;
	border-radius: 50%;
  flex: 0 0 auto;
  align-self: flex-end;
}

#calendar .event {
  flex: 0 0 auto;
	font-size: 13px;
	
	padding: 5px;
	margin-bottom: 5px;
	line-height: 14px;
	
	
	
	text-decoration: none;
}

#calendar .event-desc {
	color:#000;
	margin: 3px 0 7px 0;
	text-decoration: none;	
}


.modal.show .modal-dialog{
    width: 100%;
    max-width: 620px !important;
}
.calender_model{
    position: fixed !important;
    top: 3% !important;
   
}
.calender_section .modal.show .modal-dialog {
    
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 10px 20px #00000029;
    border-radius: 20px;
   /* padding: 2rem 1.5rem;*/
   padding: 0rem 1.5rem .5rem 1.5rem;
}
.create_enent{
    color: #429FFF;
}
.modal-title{
    margin-left: auto;
}
.modal-content{
    border: none !important;
}
.modal-header{
    border: none !important;
}
.modal-footer{
    border: none !important;
}
.form-control{
    border: none !important;
    background: #FFFFFF 0% 0% no-repeat padding-box !important;
    box-shadow: 0px 10px 20px #00000029 !important;
    border-radius: none !important;
    padding: 2rem 1.5rem;
    border-radius: 10px;
}
.send_review{
    height: 55px;
    border-radius: 9px;
    opacity: 1;
}
.form-control input{
    border: none !important;
}
.send_review{
    background-color: #F96703 !important;
    color: #fff !important;
    width: 50%;
    margin: auto;
    font-size: 12px;
    left: 490px;
}
.select_group{
    display: flex !important;
    justify-content: space-between;
    align-items: center;
}
.select_group #inputState{
    width: 60%;;
}
.group_post{
    display: flex !important;
    align-items: center;
}
.current_vvent{
  display: flex;
  justify-content: space-around;
 
}
.current_vvent h3{
  color:#0E559F;
  font-weight: bold !important;
  font-size: 38px !important;
}
.calender_model .modal-title{
 /* margin: 0;*/
 text-align: center;
}
.event_detail_popup_content h5{
  font-size: 16px;
  color: #132843;
 font-weight: 500;
  
}
.event_detail_popup_content p span{
  color:#FA812D;
}
.event_detail_popup_content p{
  font-size: 12px;
  color:#8D8C8C
}
.cancel_button .btn_apply {
    border: 2.5px solid #86AACF !important;
}
#eventdetail h5,h2{
  color: #132843;
  /*font-weight: bold;*/
}
.serch_sec_top .form-control {
    font-size: 22px;
    color: #3D62A9;
    background: transparent !important;
    border: transparent !important;
    border-left: 4px solid #F96703 !important;
    height: 50px;
    box-shadow: unset !important;
}
.calander_option{
  border: none;
  padding: 20px;
  color:#0E559F;
  background-color: transparent;
  font-weight: bold;
}
.month_days{
  display: inline-block;
  padding: 0 10px;
}
.month_days i{
  font-weight: bold;
  font-size: 33px;
  padding: 0 10px;;
}
.form-check-label {
    margin-bottom: 0;
    margin-top: 4px;
}
/*Floating Input Css here*/
.form-floating > .form-control, .form-floating > .form-select {
    height: calc(4rem + 2px);
    font-size: 15px;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 2rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
  font-size: 16px;
  border: 3px solid transparent!important;
}
.form-floating > .form-control {
  padding: 1rem 0.75rem;
}
.form-floating > .form-control::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.8rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label, .form-floating > .form-control:not(:placeholder-shown) ~ label, .form-floating > .form-select ~ label {
  opacity: 0.55;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  font-size: 15px;
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control, .input-group > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus, .input-group > .form-select:focus {
  z-index: 3;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 3;
}
.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}
.input-group-lg > .form-control, .input-group-lg > .form-select, .input-group-lg > .input-group-text, .input-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}
.input-group-sm > .form-control, .input-group-sm > .form-select, .input-group-sm > .input-group-text, .input-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}
.input-group-lg > .form-select, .input-group-sm > .form-select {
  padding-right: 3rem;
}
.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu), .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu), .input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

element.style {
}
.form-floating>label {
    position: absolute;
    top: 5px;
    left: 12px;
    height: 100%;
    padding: 1rem 0.75rem;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity .1s ease-in-out,transform .1s ease-in-out;
}
label {
    display: inline-block;
}
/* ============================
				Mobile Responsiveness
   ============================*/


@media(max-width: 768px) {

	#calendar .weekdays, #calendar .other-month {
		display: block;
	}

	#calendar li {
		height: auto !important;
		border: 1px solid #ededed;
		width: 100%;
		padding: 10px;
		margin-bottom: -1px;
	}
  
  #calendar .weekdays th{
    padding: 10px 10px;;
  }
  
  #calendar  tr {
    grid-column: 1 / 2;
  }

	#calendar .date {
		align-self: flex-start;
	}
  .calender_section{
    width: 100%;
  }
}

@media only screen and (max-width:600px){
  #calendar td{
    margin-bottom: 0;
  }
  #calendar .weekdays th {
    padding: 10px 3px;
    font-size: 7px;
}
#calendar tr, #calendar tbody {
   
    grid-template-columns: repeat(7, 1fr);
    
}
#calendar td{
  font-size: 13px;
}
#calendar .event {
    font-size: 8px;
    margin-bottom: 0;
    width: 32px;
}
.calender_section{
    width: 100%;
  }
.current_vvent h3 {
   
    font-size: 28px !important;
}
#calendar td:before{
  height: 0.5px;
}
#createeventmodal .modal-dialog{
  margin: 0;
}
#eventdetail .modal-dialog{
  margin: 0;
}
.calander_option {
   
    padding: 8px;
}
.month_days{
  padding: 0;
}
.month_days i{
  font-size: 16px;
  padding: 0 2px;;
}
}
@media only screen and (max-width: 375px){
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
    </style>
  </head>
  <body class="main_all_bg_Sec">
    <div class="main_side_bar_left">
      <div class="main_menu_sec">
        <div class="top_logo_sec">
          <a href="#" class="d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small_logo.png" class="img-fluid small_logo" />
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/opn_menu_logo.png"
              class="img-fluid side_open_logo"
            />
          </a>
        </div>
        <div class="center_logo_sec">
          <div class="main_menu_Sec active">
            <a href="#">
              <div class="menu_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home_icon.png" class="img-fluid normal_icon" />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_home_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Home</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/dashboard_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_dashboard_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>My Dashboard</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_knowlage_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Knowledge Center</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/coordination_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_coordination_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Coordination Center</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/calender_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_calender_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Calendar</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/resources_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_resources_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>My Resources</p>
              </div>
            </a>
          </div>
        </div>
        <div class="bottom_logo_sec">
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/donate_icon.png" class="img-fluid" />
              </div>
              <div class="side_text_view">
                <p>Donate</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/help_support_icon.png" class="img-fluid" />
              </div>
              <div class="side_text_view">
                <p>Help & Support</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/setting_icon.png" class="img-fluid" />
              </div>
              <div class="side_text_view">
                <p>Settings</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-12">
      <div class="row justify-content-end mt-3">
        <div
          class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap"
        >
          <div class="col-xl-3 col-lg-3 col-md-4 order-lg-1 order-1">
            <div class="top_title">
              <h5>Calender</h5>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-8 order-lg-2 order-3">
            <div class="serch_sec_top">
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Search for resources, reports, forms etc"
              />
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-8 order-lg-3 order-2">
            <div class="right_top_sec">
              <div class="notification_sec btn-group">
                <a
                  href="#"
                  class="btn dropdown-toggle"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/notifiocation_icon.png" class="img-fluid"
                /></a>

                <div class="dropdown-menu dropdown-menu-right">
                  <div class="title_notification">
                    <div class="col-xl-9 col-lg-8">
                      <h4>Notifications</h4>
                      <p>Catch up on updates form all your accounts.</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 text-right">
                      <img
                        src="./images/close_modal.png"
                        class="img-fluid"
                      /><br />
                      <a href="#">View All</a>
                    </div>
                  </div>
                  <div class="mian_notification_sec">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon.png" class="img-fluid" />
                    <div class="w-100">
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <h5>Notification Title</h5>
                        <span>2 hrs ago</span>
                      </div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                      </p>
                    </div>
                  </div>
                  <div class="mian_notification_sec">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png"
                      class="img-fluid"
                    />
                    <div class="w-100">
                      <div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <h5>User Name</h5>
                          <span>2 hrs ago</span>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <p>
                            Requested to join to your <br />
                            <span>Group Name.</span>
                          </p>
                          <div>
                            <a href="#" class="mr-2">Approve</a>
                            <a href="#" class="red">Deny</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mian_notification_sec">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png"
                      class="img-fluid"
                    />
                    <div class="w-100">
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <h5>Notification Title</h5>
                        <span>2 hrs ago</span>
                      </div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                      </p>
                    </div>
                  </div>
                  <div class="mian_notification_sec">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png"
                      class="img-fluid"
                    />
                    <div>
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <h5>Notification Title</h5>
                        <span>2 hrs ago</span>
                      </div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                      </p>
                    </div>
                  </div>
                  <div class="mian_notification_sec">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon2.png"
                      class="img-fluid"
                    />
                    <div class="w-100">
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <h5>Notification Title</h5>
                        <span>2 hrs ago</span>
                      </div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                      </p>
                    </div>
                  </div>
                  <div class="mian_notification_sec">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png"
                      class="img-fluid"
                    />
                    <div>
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <h5>Notification Title</h5>
                        <span>2 hrs ago</span>
                      </div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="notification_sec">
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_icon.png" class="img-fluid"
                /></a>
              </div>
              <div class="back_bg">
                <div class="dropdown right_dropdown">
                  <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Micheal Tucker
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png"
                      class="img-fluid mr-2 profile_icn"
                    /><i class="fas fa-ellipsis-v"></i>
                  </button>
                  <div
                    class="dropdown-menu text-right"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <button
                      class="dropdown-item profile_main_drop"
                      type="button"
                    >
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_profile_icon.png" class="img-fluid" />
                      My Profile
                    </button>
                    <button class="dropdown-item" type="button">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logout_icon.png" class="img-fluid" />
                      Logout
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="current_vvent">
              <h3><select class="calander_option"><option class="option_date">May</option> <option class="option_date">June</option></select><select class="calander_option"><option class="option_date">2022</option> <option class="option_date">2023</option></select> <div class="month_days"><i class="fa-regular fa-less-than"></i>today<i class="fa-regular fa-greater-than"></i></div></h3>             
            </div>
           
          </div>
        </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">
          <div class="calender_section">
            <table id="calendar">
             
              <tr class="weekdays my-lg-5">
                <th scope="col">Sunday</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
              </tr>
            
              
              <tr>
                <td class="day">
                  <div class="date">25</div>
                </td>
                <td class="day">
                  <div class="date">26</div>
                </td>
                <td class="day">
                  <div class="date">27</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class=" unique_color">
                      Holiday Name
                    </div>
                    <div class="event-time">
                      All Day
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">28</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Task Title
                    </div>
                    <div class="event-time">
                      Starts 1:00 PM
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">29</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Task Title
                    </div>
                    <div class="event-time">
                      All Day
                    </div>
                  </div>
                 
                </td>
                <td class="day">
                  <div class="date">30</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Task Title
                    </div>
                    <div class="event-time">
                      All Day
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">01</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Task Title
                    </div>
                    <div class="event-time">
                     Ends 11:00 Pm
                    </div>
                  </div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Long Task
                    </div>
                    <div class="event-time">
                     Ends 11:00 Pm
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="day">
                  <div class="date">02</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Long Task
                    </div>
                    <div class="event-time">
                     Ends 11:00 Pm
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">03</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Long Task<br>TitleName
                    </div>
                    <div class="event-time">
                     Ends 11:00 Pm
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">04</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class="event-desc ">
                     Long Task
                    </div>
                    <div class="event-time">
                     Ends 11:00 Pm
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">05</div>
                  <div class="event" href="javascript:" data-toggle="modal" data-target="#eventdetail">
                    <div class=" unique_color">
                      Holiday Name
                    </div>
                    <div class="event-time">
                      All Day
                    </div>
                  </div>
                </td>
                <td class="day">
                  <div class="date">06</div>
                  <div class="event">
                   
                    
                     <!-- Button trigger modal -->

 <button type="button" class="create_enent"  data-toggle="modal" data-target="#createeventmodal">
  + create an event
</button>

<!-- Modal -->
 <div class="modal fade calender_model" id="createeventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="" placeholder="Name Of the Event">
                        <label for="floatingInputGrid">Name Of the Event</label>
                      </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="" placeholder="dd-mm-yyyy" >
                        <label for="floatingInputGrid">Date</label>
                      </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-floating">
                        <input type="time" class="form-control" id="" placeholder=": — : — " value="— : — : —  ">
                        <label for="floatingInputGrid">Time</label>
                      </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="" placeholder="Enter Location">
                        <label for="floatingInputGrid">Enter Location</label>
                      </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="" placeholder="Enter Organisation">
                        <label for="floatingInputGrid">Enter Organisation</label>
                      </div>
                </div>
            
                <div class="col-lg-12 mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingInputGrid" placeholder="Enter Details"  style="height: 150px"></textarea>
                        <label for="floatingInputGrid">Enter Details</label>
                    </div>
                </div>
               <div class="col-lg-12 mb-3">
                    <h6 class="title-publish">Publish to</h6>
                </div>
                <div class="col-lg-6 mb-3 d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" checked>For all
                            </label>
                        </div>
                       
                        <div class="form-check-inline pl-4">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Select Group to Post
                            </label>
                        </div>
                    </div>
                    
                </div>
                

                <div class="col-lg-6 mb-3">
                    <div class="form-floating">
                        <select class="form-control" id="" placeholder="Select" value="Select">
                            <option selected>Select</option>
                            <option>Group1</option>
                            <option>Group2</option>
                            <option>Group2</option> 
                        </select>
                        <label for="floatingInputGrid">Group</label>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center mt-3">
                    <button type="submit"  class="btn send_review">Send For Review</button>
                </div>
            </div>
          
    
        </form>
      </div>
     
    </div>
  </div>
</div>
</div>
</div> 

</td>
<td class="day">
<div class="date">07</div>
</td>
<td class="day">
<div class="date">08</div>
</td>
</tr>
<tr>

<td class="day">
<div class="date">09</div>
</td>
<td class="day">
<div class="date">10</div>
</td>
<td class="day">
<div class="date">11</div>
</td>
<td class="day">
<div class="date">12</div>
</td>
<td class="day">
<div class="date">13</div>
</td>
<td class="day">
<div class="date">14</div>

</td>
<td class="day">
<div class="date">16</div>
</td>
</tr>
<tr>
<td class="day">
<div class="date">17</div>
</td>
<td class="day">
<div class="date">18</div>

</td>
<td class="day">
<div class="date">19</div>
</td>
<td class="day">
<div class="date">20</div>
</td>
<td class="day">
<div class="date">21</div>
</td>
<td class="day">
<div class="date">22</div>
</td>
<td class="day">
<div class="date">23</div>
</td>
</tr>
<tr>

<td class="day">
<div class="date">24</div>
</td>
<td class="day other-month">
<div class="date">25</div>
<!-- Next Month -->
</td>
<td class="day other-month">
<div class="date">26</div>
</td>
<td class="day other-month">
<div class="date">27</div>
</td>
<td class="day other-month">
<div class="date">28</div>
</td>
<td class="day other-month">
<div class="date">29</div>
</td>
<td class="day other-month">
<div class="date">30</div>
</td>

</table>
</div>
</div>
</div>
</div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered create_tickit"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Filter by</h5>
          </div>
          <div class="modal-body main_profile_form">
            <div class="form-group select_sec date_sec">
              <label for="exampleFormControlSelect1">Filter by Date</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Select date</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group select_sec">
              <label for="exampleFormControlSelect1">Filter by City</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Select City</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Filter by Name</label>
              <input
                type="text"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Type here"
              />
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                <div class="apply_btn">
                  <button
                    class="btn btn_apply"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    Cancal
                  </button>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                <div class="apply_btn active">
                  <button class="btn btn_apply">Apply filter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- model -->

    <div class="modal fade" id="eventdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
        <div class="modal-content">
      
          <div class="modal-body">
          
          <div class="blog_grid">
           <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                  <h5 class="modal-title " style="display:inline-block" id="exampleModalLongTitle"> Event Detal</h5>
                      <button type="button" class="close" style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                  </div>
              </div><br>
              <h4>Event Title Here</h4>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-start">
                 <div class="row" >
                  <div class="col-lg-4 event_detail_popup_content">
                    <h5 class="my-3">Date And Time</h5>
                    <p>15 jun 2022      All Day</p>
                  </div>
                  <div class="col-lg-4 event_detail_popup_content" >
                    <h5 class="my-3">Location</h5>
                    <p>New York, New York</p>
                  </div>
                  <div class="col-lg-4 event_detail_popup_content">
                    <h5 class="my-3">Organization</h5>
                    <p>Long Group Name Here</p>
                  </div>
                 </div>
                 <div class="row my-4" >
                  <div class="col-lg-4 event_detail_popup_content">
                    <h5 class="mb-3">Group</h5>
                    <p>Long Group Name Here</p>
                  </div>
                  <div class="col-lg-4 event_detail_popup_content">
                    <h5 class="mb-3">Status</h5>
                    <p><span>In Review</span></p>
                  </div>
                  </div>
                  <div class="row text-strart mb-3" >
                    <div class="col-lg-12 event_detail_popup_content">
                      <h5 class="mb-3">Detail</h5>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos non deleniti officia ipsam. Corrupti, magnam!< Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos non deleniti officia ipsam. </p>
                    </div>
                   
                   </div>
                 
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                      <div class="apply_btn active cancel_button">
                          <button class="btn btn_apply" style="color: #0E559F;background: #fff;" href="javascript:" data-toggle="modal" data-target="#deleteevent">Delete</button>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                      <div class="apply_btn active">
                          <button class="btn btn_apply d-inline" href="javascript:" data-toggle="modal" data-target="#editevent"><img src="assets/images/edit.png" width="16"/> Edit</button>
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


      <!-- delte event -->
      <div class="modal fade" id="deleteevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
          <div class="modal-content">
        
            <div class="modal-body">
        
        <div class="blog_grid">
         <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
            <h5 class="modal-title " style="display:inline-block" id="exampleModalLongTitle">Delete Event</h5>
                        <button type="button" class="close" style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                    </div>
                </div><br>
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                      <img src="./images/image (1).png" width="50ppx"/><br><br>
            <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                        <div class="apply_btn active">
                            <button class="btn btn_apply d-inline"><img src="./images/image (2).png" /> Confirm</button>
                        </div>
                    </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                        <div class="apply_btn active">
                            <button class="btn btn_apply" style="color: #F9671D;background: #fff;">Cancel</button>
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

<!-- edit event modal -->
<div class="modal fade calender_model" id="editevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="inputAddress">Enter Title</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Name Of the Event">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Date</label>
              <input type="date" class="form-control" id="inputdate" placeholder="dd-mm-yyyy">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Time</label>
              <input type="time" class="form-control" id="time5" placeholder="-:-:-">
            </div>
          </div>
         
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Location</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Location">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Organisation</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="enter Here">
            </div>
          </div>  
         
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Details</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Here"></textarea>
          </div>
          <h6>Publish to</h6>
          <div class="form-row align-items-center">
            
            <div class="form-group col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  For All
                </label>
              </div>
            </div>
            <div class="form-group col-md-8 select_group">
              <div class="form-check group_post">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                 Select Group to Post
                </label>
              </div>
             
              <select id="inputState" class="form-control">
                <option selected>Select...</option>
                <option>...</option>
              </select>
            </div>
            </div>
           
          </div>
         
          <button type="submit"  class="btn send_review">Update</button>
        </form>
      </div>
     
    </div>
  </div>


    <!-- js links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- <script src="<?php //echo get_template_directory_uri(); ?>/assets/src/jquery.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/src/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/src/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/src/fontawesome.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/src/owl.carousel.min.js"></script>

    <script>
      $(document).ready(function () {
        $(".next").click(function () {
          let previous = $(this).closest("fieldset").attr("id");
          let next = $("#" + this.id)
            .closest("fieldset")
            .next("fieldset")
            .attr("id");
          if (previous == "step0") {
            console.log(previous);
            $("#" + next).show();
            $("#" + previous).hide();
          } else if (previous == "step1") {
            $("#" + next).show();
            $("#" + previous).hide();
          }
        });
      });
      $(".previous").click(function () {
        let current = $(this).closest("fieldset").attr("id");
        let previous = $("#" + this.id)
          .closest("fieldset")
          .prev("fieldset")
          .attr("id");
        $("#" + previous).show();
        $("#" + current).hide();
      });
    </script>
  </body>
</html>
