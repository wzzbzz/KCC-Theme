<?php 
/* Template Name: Memeber Listing new */
if ( is_user_logged_in() ) {
get_header('new'); ?>
        <!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>

    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"> 

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css" rel="stylesheet">
	<style>
         .discription_donate{
            height: auto;
        }
        .annoucement_visiblity .member_box img{
            width: 100%;
            border-radius: 0 !important;
        }
        .annoucement_visiblity .member_box .dropdown{
            z-index: 9;
        }
       .annoucement_visiblity .member_box .dropdown i.fa-solid.fa-ellipsis-vertical {
    color: #fff;
}
.to_donate .btn:hover{
background-color:#F9671D  !important;
border:none;
outline:none;
color:#fff !important;
}
.to_donate .btn:focus{
background-color:#F9671D  !important;
border:none;
outline:none;
color:#fff !important;
box-shadow:none !important;
}
.to_donate .btn:focus{
background-color:#F9671D  !important;
border:none;
outline:none;
color:#fff !important;
}
.annoucement_content{
    width: 70%;
    font-size:12px;
}
.discription_contnet_reponse{
    display: flex;
    justify-content: space-between;
}
.annoucement_visiblity .discription_donate{
    text-align: start;
}
.annoucement_visiblity .discription_donate h5{
    margin-bottom: 7px;
}
/* .annoucement_visiblity  {
    display: block !important;
}
.annoucement_visiblity {
    opacity: 1 !important;
} */
.annoucement_visiblity .add-memberbtn{
    position: absolute;
}
.annoucement_visiblity .fa-ellipsis-v{background: #fff;
    width: 19px;
    border-radius: 3px;
    padding: 2px 3px;
    }
.addbtn_wrapper{
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
}
.elips_img{
    width: 18px !important;
    background: #fff;

    padding: 3px;
    border-radius: 5px;
}
.input_wrapper_content{
    box-shadow: 0px 10px 20px #00000029;
    padding: 20px 30px;
    margin: 10px 0;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    border-radius: 8px;
}
.input_wrapper_content label{
    color: #000;
}
.input_wrapper_content input{
    display: block;
    width: 100%;
    border: none;
    outline: none;

}
.input_wrapper_content textarea{
    border: none;
    
}
.input_wrapper_content textarea:focus{
    border: none;
    outline: none;
}
.input_wrapper_content textarea:focus-visible{
    border: none;
    outline: none;
}
.add_anoucement_popup_content img{
    width: 100%;
}
.input_wrapper_content .form-control:focus{
    border: none;
    outline: none;
    box-shadow: none;
}
.add_anoucement_popup_content button{
    width: 60% !important;
}
.add_anoucement_popup_content .apply_btn {
    text-align: center;
}
 @media only screen and (max-width:768px){
    .annoucement_content{
        width:61%;
    }
    .addbtn_wrapper{
    display: block;
   
}
.addbtn_wrapper button{
    margin-top: 15px;
}
}
@media only screen and (max-width:600px){
    .annoucement_content{
        width:100%;
        padding-left: 8px;
    }
    .annoucement_visiblity{
        text-align: center;
    }
    .addbtn_wrapper{
    display: block;
   
}
.add_anoucement_popup_content button{
    width: 100% !important;
}
}
    </style>
</head>
<body class="main_all_bg_Sec">
    
    <div class="main_side_bar_left">
        <div class="main_menu_sec">
            <div class="top_logo_sec">
                <a href="#" class="d-flex align-items-center ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//small_logo.png" class="img-fluid small_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//opn_menu_logo.png" class="img-fluid side_open_logo ">
                </a>
            </div>
            <div class="center_logo_sec">
                <div class="main_menu_Sec active">
                    <a href="http://159.65.151.159/wcc/dashboard-home/">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//home_icon.png" class="img-fluid normal_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//active_home_icon.png" class="img-fluid active_icon">
                        </div>
                        <div class="side_text_view">
                            <p>Home</p>
                        </div>
                    </a>
                </div>
                <div class="main_menu_Sec">
                    <a href="http://159.65.151.159/wcc/dashboard/">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//dashboard_icon.png" class="img-fluid normal_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//active_dashboard_icon.png" class="img-fluid active_icon">
                        </div>
                        <div class="side_text_view">
                            <p>My Dashboard</p>
                        </div>
                    </a>
                </div>
               
                <div class="main_menu_Sec">
                    <a href="#">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//knowlage_icon.png" class="img-fluid normal_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//active_knowlage_icon.png" class="img-fluid active_icon">
                        </div>
                        <div class="side_text_view">
                            <p>Knowledge
                                Center</p>
                        </div>
                    </a>
                </div>
                <div class="main_menu_Sec">
                    <a href="http://159.65.151.159/wcc/dashboard-coordination-center/">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//coordination_icon.png" class="img-fluid normal_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//active_coordination_icon.png" class="img-fluid active_icon">
                        </div>
                        <div class="side_text_view">
                            <p>Coordination
                                Center</p>
                        </div>
                    </a>
                </div>
                <div class="main_menu_Sec">
                    <a href="http://159.65.151.159/wcc/event-calendar">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//calender_icon.png" class="img-fluid normal_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//active_calender_icon.png" class="img-fluid active_icon">
                        </div>
                        <div class="side_text_view">
                            <p>Calendar</p>
                        </div>
                    </a>
                </div>
                <div class="main_menu_Sec">
                    <a href="#">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//resources_icon.png" class="img-fluid normal_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//active_resources_icon.png" class="img-fluid active_icon">
                        </div>
                        <div class="side_text_view">
                            <p>My Resources</p>
                        </div>
                    </a>
                </div>                
            </div>
            <div class="bottom_logo_sec">
                <div class="main_menu_Sec">
                    <a href="http://159.65.151.159/wcc/dashboard-donate/">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_icon.png" class="img-fluid">                           
                        </div>
                        <div class="side_text_view">
                            <p>Donate</p>
                        </div>
                    </a>
                </div>
                <div class="main_menu_Sec">
                    <a href="http://159.65.151.159/wcc/my-tickets-support/">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//help_support_icon.png" class="img-fluid">                           
                        </div>
                        <div class="side_text_view">
                            <p>Help & Support</p>
                        </div>
                    </a>
                </div>
                <div class="main_menu_Sec">
                    <a href="#">
                        <div class="menu_icon ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//setting_icon.png" class="img-fluid">                           
                        </div>
                        <div class="side_text_view">
                            <p>Settings</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
        <link rel="stylesheet" href="css/lavleen.css">
        <link rel="stylesheet" href="css/lavleenres.css">
<div class="col-xl-12 ">
        <div class="row justify-content-end mt-3">

             <?php include('user_topbar.php')?>
			<div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">
           <div class="donation_tab_pills col-xl-11">
                    <div class="donate_details_main">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//detail_click.png" class="img-fluid membergroup-img" alt="image">
                        <div class="donation_detail">
                            <div class="d-flex align-items-center flex-wrap">
                                <h5>Group Name</h5>
                                <span>Member only</span>
                            </div>
                            <div class="donate_btn_right">
                                <button class="btn now_donate"><i class="fa fa-pencil"></i> Edit Group</button>
                            </div>
                        </div>
                    </div>
					<div class="d-flex align-items-center flex-wrap">
					<h5 class="parent-member parent-member col-lg-3 col-md-12 row">
					<img class="image1" src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
					<img class="image2" src="<?php echo get_template_directory_uri(); ?>/assets/images//message_4_icon.png">
					<img class="image3" src="<?php echo get_template_directory_uri(); ?>/assets/images//message_3_icon.png">
					<img class="image4" src="<?php echo get_template_directory_uri(); ?>/assets/images//message_2_icon.png">
					<img class="image5" src="<?php echo get_template_directory_uri(); ?>/assets/images//message_1_icon.png">
					<span class="image6">+25K</span>
					</h5>
					<span>
					<b>Manager</b>
					<img class="image1" src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
					<span>You</span></span>
					</div>
                    <div class="about_donate">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
					</div>
               </div>
            </div> 
            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">
               <div class="memebr_tab_pills col-xl-11">
			   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="pills-feeds-tab" data-toggle="pill" href="#pills-feeds" role="tab" aria-controls="pills-feeds" aria-selected="true">Feeds</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Members</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab" aria-controls="pills-blogs" aria-selected="false">Blogs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-annoucements-tab" data-toggle="pill" href="#pills-annoucements" role="tab" aria-controls="pills-annoucements" aria-selected="false">Annoucements</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-reports-tab" data-toggle="pill" href="#pills-reports" role="tab" aria-controls="pills-reports" aria-selected="false">Reports & Forms</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-media-tab" data-toggle="pill" href="#pills-media" role="tab" aria-controls="pills-media" aria-selected="false">Media & Resources</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-feeds" role="tabpanel" aria-labelledby="pills-feeds-tab">...</div>
                    <div class="tab-pane fade show active" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">					
					  <ul class="nav nav-pills nav-pills1 mb-3" id="pills1-tab" role="tablist">
						<li class="nav-item">
						  <a class="nav-link active" id="pills-members1-tab" data-toggle="pill" href="#pills-members1" role="tab" aria-controls="pills-members1" aria-selected="true">All Members</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-joinmembers-tab" data-toggle="pill" href="#pills-joinmembers" role="tab" aria-controls="pills-joinmembers" aria-selected="false">Join Request</a>
						</li>
					  </ul>
					<button class="add-memberbtn btn btn_donate" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images//plus_icon.png"> Add Member</button> 
					<div class="tab-content" id="pills1-tabContent">
					<div class="tab-pane fade show active" id="pills-members1" role="tabpanel" aria-labelledby="pills-members1-tab">
                        <div class="grid-container">
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_4_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_3_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_2_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_1_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//notification_icon4.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//notification_icon3.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//1.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div><div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">							
							<div class="dropdown">
							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa-solid fa-ellipsis-vertical"></i>
							  </a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Allow Permissiom</a>
								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>
							  </div>
							</div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Follow</button>
								</div>
							</div>
						</div>
						</div>
                    </div>
					<div class="tab-pane fade" id="pills-joinmembers" role="tabpanel" aria-labelledby="pills-joinmembers-tab">
                        <div class="grid-container">
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Accept</button>
									<button class="btn btn_white">Decline</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_4_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Accept</button>
									<button class="btn btn_white">Decline</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_3_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Accept</button>
									<button class="btn btn_white">Decline</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_2_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Accept</button>
									<button class="btn btn_white">Decline</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_1_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Accept</button>
									<button class="btn btn_white">Decline</button>
								</div>
							</div>
						</div>
						</div>
                    </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">...</div>
                    <div class="tab-pane fade annoucement_visiblity" id="pills-annoucements" role="tabpanel" aria-labelledby="pills-annoucements-tab">
                        <div class="addbtn_wrapper"> <p class=" annoucement_content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero deserunt, quisquam quae beatae earum dolorem.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero deserunt, quisquam quae beatae earum dolorem. 
                             </p>
                         <button class="add-memberbtn btn btn_donate" data-toggle="modal" data-target="#createAnnoucement"><img src="<?php echo get_template_directory_uri(); ?>/assets/images//plus_icon.png"> Add Annoucement</button> </div>					
                         
                      <div class="tab-content" id="pills1-tabContent">
                      <div class="tab-pane fade show active" id="pills-members1" role="tabpanel" aria-labelledby="pills-members1-tab">
                          <div class="grid-container">
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                         
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                  
                                </div>
                            </div>
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                   
                                </div>
                            </div>
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                  
                                </div>
                            </div>
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                   
                                </div>
                            </div>
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                  
                                </div>
                            </div>
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                   
                                </div>
                            </div>
                            <div href="#" class="mt-1 mr-1">
                                <div class="member_box grid-item text-center">							
                                <div class="dropdown">
                                  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                  </div>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//donate_2.png" class="img-fluid" alt="image">
                                      <div class="discription_donate">
                                        <div class="discription_contnet_reponse"> <h5>Disaster Response Fund</h5> <p>Aug 29, 2022</p></div>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>
                                      </div>
                                  
                                </div>
                            </div>
                            
                          </div>
                      </div>
                      
                      </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">...</div>
                    <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab">...</div>
                  </div>
                </div>
               
             <!--    <div class="btm_pagination_sec">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        
                        </ul>
                      </nav>
                </div> -->
            </div> 
            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">
                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                    <div class="footer_logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images//footer_logo.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-9 col-12">
                    <div class="side_right_footer ">
                        <div class="social_icon_sec">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images//footer_linkdin.png" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images//footer_fb.png" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images//footer_twitter.png" class="img-fluid"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images//footer_instra.png" class="img-fluid"></a>
                        </div>
                        <div class="linked_pages">
                            <a href="http://159.65.151.159/wcc/">HOME</a>
                            <a href="http://159.65.151.159/wcc/what-we-do/">WHAT WE DO</a>
                            <a href="http://159.65.151.159/wcc/world-cares-center/">WORLD CARES CENTER</a>
                            <a href="http://159.65.151.159/wcc/training/">TRAINING</a>
                            <a href="http://159.65.151.159/wcc/cordination/">COORDINATION</a>
                            <a href="http://159.65.151.159/wcc/blogs/">BLOG</a>
                            <a href="http://159.65.151.159/wcc/contact-us/">CONTACT US</a>
                            <a href="#">DONATE</a>
                        </div>
                        <div class="privercy_pag">
                            <a href="http://159.65.151.159/wcc/terms-of-use/">TERMS OF USE</a>
                            <a href="http://159.65.151.159/wcc/privacy-policy/">PRIVACY POLICY  </a>
                            <a href="#">SITEMAP</a>
                        </div>                            
                    </div>
                    <div class="copy_right_Sec">
                        <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>


        </div>        
    </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
      <div class="modal-content">
    
        <div class="modal-body">
		
		<div class="blog_grid">
		 <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">
				<h5 class="modal-title " id="exampleModalLongTitle">Add Member</h5>
                </div>
				  <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                    <button type="button" class="close" style="font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                </div>
				  <div class="col-xl-12 col-lg-12 col-md-12 col-12">
				  <div class="serch_sec_top">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search member here">
                    </div>
				  </div>
            </div>
			
					<br>
           <div class="grid-container">
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">	
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Invite</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_4_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Invite</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">	
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_3_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Invite</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">	
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_2_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Invite</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">	
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_1_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Invite</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">	
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2 disabled">Invited</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">	
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2">Invite</button>
								</div>
							</div>
						</div>
						<div href="#" class="mt-1 mr-1">
							<div class="member_box grid-item text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images//message_5_icon.png">
								<div class="">
									<h5 class="mt-2">Josephine <br> Arden</h5>
                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>
								</div>
								<div class="to_donate">
									<button class="btn btn_donate mt-2 disabled">Invited</button>
								</div>
							</div>
						</div>
						</div>
						  <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
				<br>
                    <div class="apply_btn active">
                        <button class="btn btn_apply">Done</button>
                    </div>
                </div>
            </div>
						</div>
                     
        </div>
		<!--   <div class="modal-footer" style="border-top:none;">
		
		  <center>
          <div class="apply_btn active">
                        <button class="btn btn_apply">Done</button>
                    </div>
					</center>
                    </div> -->
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="createAnnoucement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
          <div class="modal-content">
        
            <div class="modal-body">
            
            <div class="blog_grid">
             <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">
                    <h5 class="modal-title " id="exampleModalLongTitle">Create Annoucement</h5>
                    </div>
                      <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <button type="button" class="close" style="font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                    </div>
                      <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                      
                      </div>
                </div>
                
                        <br>
               <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="add_anoucement_popup_content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//image.png"/>
                            <div class="input_wrapper_content">
                                <label for="annoucement_title">Annocement Title</label>
                                <input type="text" placeholder="Select Here" id="annoucement_title"/>
                            </div>
                            <div class="input_wrapper_content">
                                <label for="annoucement_title">Description</label>
                                <textarea class="form-control" id="annoucement_title" rows="3" placeholder="Enter Here"></textarea>
                            </div>
                            <div class="apply_btn active">
                                <button class="btn btn_apply mt-4">Create Annoucement</button>
                            </div>
                        </div>
                    </div>
                </div>
                            
                              
                            </div>
                         
            </div>
            <!--   <div class="modal-footer" style="border-top:none;">
            
              <center>
              <div class="apply_btn active">
                            <button class="btn btn_apply">Done</button>
                        </div>
                        </center>
                        </div> -->
            </div>
            
          </div>
        </div>
        </div>
	<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
      <div class="modal-content">
    
        <div class="modal-body">
		
		<div class="blog_grid">
		 <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<h5 class="modal-title " style="display:inline-block" id="exampleModalLongTitle">Remove Member</h5>
                    <button type="button" class="close" style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                </div>
            </div><br>
			  <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
				<i class="fa fa-trash" style="font-size:70px;color:#F9671D"></i> <br><br>
				<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-6">
                    <div class="apply_btn active">
                        <button class="btn btn_apply d-inline"><i class="fa fa-check"></i> Confirm</button>
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

   
    <div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
          <div class="modal-content">
        
            <div class="modal-body">
            
            <div class="blog_grid">
             <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">
                    <h5 class="modal-title " id="exampleModalLongTitle">Edit Annoucement</h5>
                    </div>
                      <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <button type="button" class="close" style="font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                    </div>
                      <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                      
                      </div>
                </div>
                
                        <br>
               <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="add_anoucement_popup_content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images//image.png"/>
                            <div class="input_wrapper_content">
                                <label for="annoucement_title">Annocement Title</label>
                                <input type="text" placeholder="Select Here" id="annoucement_title"/>
                            </div>
                            <div class="input_wrapper_content">
                                <label for="annoucement_title">Description</label>
                                <textarea class="form-control" id="annoucement_title" rows="3" placeholder="Enter Here"></textarea>
                            </div>
                            <div class="apply_btn active">
                                <button class="btn btn_apply mt-4">Edit Annoucement</button>
                            </div>
                        </div>
                    </div>
                </div>
                            
                              
                            </div>
                         
            </div>
            <!--   <div class="modal-footer" style="border-top:none;">
            
              <center>
              <div class="apply_btn active">
                            <button class="btn btn_apply">Done</button>
                        </div>
                        </center>
                        </div> -->
            </div>
            
          </div>
        </div>
        </div>
        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
              <div class="modal-content">
            
                <div class="modal-body">
                
                <div class="blog_grid">
                 <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                        <h5 class="modal-title " style="display:inline-block" id="exampleModalLongTitle">Delete Member</h5>
                            <button type="button" class="close" style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  
                        </div>
                    </div><br>
                      <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                        <i class="fa fa-trash" style="font-size:70px;color:#F9671D"></i> <br><br>
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="apply_btn active">
                                <button class="btn btn_apply d-inline"><i class="fa fa-check"></i> Confirm</button>
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
    <!-- js links -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/owl.carousel.min.js"></script>

    <script>      
        $(document).ready(function() {  
       
        $(".next").click(function() {
            let previous = $(this).closest("fieldset").attr('id');
            let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');
            if(previous == "step0"){
                console.log(previous);
               $('#'+next).show();
                $('#'+previous).hide();
            } 
            else if(previous == "step1"){
                $('#'+next).show();
                $('#'+previous).hide();
            }      
        }); 
        
    });
    $(".previous").click(function() {
        let current = $(this).closest("fieldset").attr('id');
        let previous = $('#'+this.id).closest('fieldset').prev('fieldset').attr('id');
        $('#'+previous).show();
        $('#'+current).hide();
    }); 
    </script>
    

  

</body>
</html>
<?php get_footer('new'); }?>