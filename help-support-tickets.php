<?php
/* Template Name: Help & Support Tickets */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help Support Ticket</title>
    
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/style_new.min.css"/>
  </head>
  <style>
    .message_Serch_user{
        height: calc(100vh - 260px);
    }
    .main-nav .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background: unset;
    }
    .btn_send:hover{
      box-shadow: unset;
       background: #F96703 0% 0% no-repeat padding-box !important;
    }
  @media (max-width: 768px){
.dropdown.right_dropdown .dropdown-toggle img {
    max-width: unset !important;
} 
  }
    @media (max-width:600px){
      .send_btn button.btn_send {
    margin: 20px 0;
}
    }
  </style>
  <body class="main_all_bg_Sec">
  <div class="main_side_bar_left">
         <?php include('usermenucommon.php')?>

    </div>

    <div class="col-xl-12">
      <div class="row justify-content-end mt-3">
        <?php include('user_topbar.php')?>
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3 mb-3">
          <div class="main_box_center_tickit chat_tickit col-xl-11">
            <div class="col-xl-12">
              <div
                class="top_profile d-flex justify-content-between align-items-center pb-3">
                <div>
                  <div class="d-flex align-items-center">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/main_tickit.png"
                      class="img-fluid mr-2"
                    />
                    <h4><?php echo the_title()?></h4>
                  </div>
                  <?php echo the_content()?>
                </div>
                <div class="create_tickit_Btn">
                  <button class="btn btn_tickit" data-toggle="modal" data-target="#exampleModalCenter"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/create_tickit.png" class="img-fluid mr-2"/>Create a Ticket -998
                  </button>
                </div>
                </div>
                <div class="mian_tickit_Sec d-flex main_chat hide-left-chat">
                    <div class="col-xl-4 col-lg-4 left_Side_chat">
                        <div class="close-btn-chat">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="side_menu_chat">
                            <?php require_once('bdd.php');
                                $user_id = get_current_user_id();
                                date_default_timezone_set("Asia/Manila");
                                $sql = "SELECT * FROM  wp_tickets where user_id = ".$user_id;
                                $req = $bdd->prepare($sql);
                                $req->execute();
                                $ticketList = $req->fetchAll();
                            ?>
                            <div class="message_Serch_user main-nav">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php foreach($ticketList as $key => $ticket){?>
                                    <a class="nav-link" id="v-pills-home-tab-<?php echo $key?>" data-toggle="pill" href="#v-pills-home-<?php echo $key?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <div class="user_serch_messsage d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_tickit.png" class="img-fluid"/>
                                            <div class="user_sserch ml-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6><?php echo $ticket['ticket_title']?></h6>
                                                    <?php if( $ticket['status']=='1'){
                                                        echo "<small>(Open)</small>";
                                                    }else{
                                                        echo "<small class='red'>(Closed)</small>";
                                                    }?>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-2 btm_dis" >
                                                    <p><?php echo $ticket['description']?></p>
                                                    <p><span><?php echo $ticket['date_created']?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 center-chat">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home-0" role="tabpanel" aria-labelledby="v-pills-home-tab-0">
                                <div class="chat_Section_main">
                                    <div class="open_chat_uer_menu">
                                        <!-- <button id="chat_open"><i class="fas fa-bars"></i></button> -->
                                        <div>
                                            <button id="chat-menu">
                                                <i class="fas fa-align-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="header_title_Chat">
                                        <div class="name_head d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png" class="img-fluid mr-3" />
                                            <div>
                                                <h5>Suport Team 0</h5>
                                                    <?php  if ( current_user_can( 'manage_options' ) ) {
                                                        echo 'admin login';
                                                        } else {
                                                            echo 'admin not login';
                                                        }
                                                    ?>
                                                <p><i class="fas fa-circle"></i> Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_writting_sec">
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="time_chat text-center my-3">
                                            <p>Yesterday</p>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                    </div>
                                    <div class="mesage_type d-flex align-items-center my-2">
                                        <div class="input_type">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"   
                                                aria-describedby="emailHelp"
                                                placeholder="Type something…."
                                            />
                                            <div class="smily_Sec">
                                                <a href="#"><i class="far fa-image"></i></a>
                                                <a href="#" ><i class="fa-solid fa-paperclip mx-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="send_btn">
                                            <button class="btn btn_send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="tab-pane fade show" id="v-pills-home-1" role="tabpanel" aria-labelledby="v-pills-home-tab-1">
                                <div class="chat_Section_main">
                                    <div class="open_chat_uer_menu">
                                        <!-- <button id="chat_open"><i class="fas fa-bars"></i></button> -->
                                        <div>
                                            <button id="chat-menu">
                                                <i class="fas fa-align-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="header_title_Chat">
                                        <div class="name_head d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png" class="img-fluid mr-3" />
                                            <div>
                                                <h5>Suport Team 1</h5>
                                                    <?php  if ( current_user_can( 'manage_options' ) ) {
                                                        echo 'admin login';
                                                        } else {
                                                            echo 'admin not login';
                                                        }
                                                    ?>
                                                <p><i class="fas fa-circle"></i> Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_writting_sec">
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="time_chat text-center my-3">
                                            <p>Yesterday</p>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                    </div>
                                    <div class="mesage_type d-flex align-items-center my-2">
                                        <div class="input_type">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"   
                                                aria-describedby="emailHelp"
                                                placeholder="Type something…."
                                            />
                                            <div class="smily_Sec">
                                                <a href="#"><i class="far fa-image"></i></a>
                                                <a href="#" ><i class="fa-solid fa-paperclip mx-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="send_btn">
                                            <button class="btn btn_send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="v-pills-home-2" role="tabpanel" aria-labelledby="v-pills-home-tab-2">
                                <div class="chat_Section_main">
                                    <div class="open_chat_uer_menu">
                                        <!-- <button id="chat_open"><i class="fas fa-bars"></i></button> -->
                                        <div>
                                            <button id="chat-menu">
                                                <i class="fas fa-align-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="header_title_Chat">
                                        <div class="name_head d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png" class="img-fluid mr-3" />
                                            <div>
                                                <h5>Suport Team 2</h5>
                                                    <?php  if ( current_user_can( 'manage_options' ) ) {
                                                        echo 'admin login';
                                                        } else {
                                                            echo 'admin not login';
                                                        }
                                                    ?>
                                                <p><i class="fas fa-circle"></i> Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_writting_sec">
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="time_chat text-center my-3">
                                            <p>Yesterday</p>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                    </div>
                                    <div class="mesage_type d-flex align-items-center my-2">
                                        <div class="input_type">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"   
                                                aria-describedby="emailHelp"
                                                placeholder="Type something…."
                                            />
                                            <div class="smily_Sec">
                                                <a href="#"><i class="far fa-image"></i></a>
                                                <a href="#" ><i class="fa-solid fa-paperclip mx-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="send_btn">
                                            <button class="btn btn_send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="tab-pane fade show" id="v-pills-home-3" role="tabpanel" aria-labelledby="v-pills-home-tab-3">
                                <div class="chat_Section_main">
                                    <div class="open_chat_uer_menu">
                                        <!-- <button id="chat_open"><i class="fas fa-bars"></i></button> -->
                                        <div>
                                            <button id="chat-menu">
                                                <i class="fas fa-align-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="header_title_Chat">
                                        <div class="name_head d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png" class="img-fluid mr-3" />
                                            <div>
                                                <h5>Suport Team 3</h5>
                                                    <?php  if ( current_user_can( 'manage_options' ) ) {
                                                        echo 'admin login';
                                                        } else {
                                                            echo 'admin not login';
                                                        }
                                                    ?>
                                                <p><i class="fas fa-circle"></i> Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_writting_sec">
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="time_chat text-center my-3">
                                            <p>Yesterday</p>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                    </div>
                                    <div class="mesage_type d-flex align-items-center my-2">
                                        <div class="input_type">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"   
                                                aria-describedby="emailHelp"
                                                placeholder="Type something…."
                                            />
                                            <div class="smily_Sec">
                                                <a href="#"><i class="far fa-image"></i></a>
                                                <a href="#" ><i class="fa-solid fa-paperclip mx-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="send_btn">
                                            <button class="btn btn_send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="tab-pane fade show" id="v-pills-home-4" role="tabpanel" aria-labelledby="v-pills-home-tab-4">
                                <div class="chat_Section_main">
                                    <div class="open_chat_uer_menu">
                                        <!-- <button id="chat_open"><i class="fas fa-bars"></i></button> -->
                                        <div>
                                            <button id="chat-menu">
                                                <i class="fas fa-align-left"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="header_title_Chat">
                                        <div class="name_head d-flex align-items-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png" class="img-fluid mr-3" />
                                            <div>
                                                <h5>Suport Team 4</h5>
                                                    <?php  if ( current_user_can( 'manage_options' ) ) {
                                                        echo 'admin login';
                                                        } else {
                                                            echo 'admin not login';
                                                        }
                                                    ?>
                                                <p><i class="fas fa-circle"></i> Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_writting_sec">
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="time_chat text-center my-3">
                                            <p>Yesterday</p>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="again_message_Sec my-4">
                                            <div class="again_mes_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                        <div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>
                                                    Cool, let's talk about it later, shall we? This is
                                                    going to be a huge!! We already sent you the details
                                                    bro.
                                                </p>
                                            </div>
                                            <small>15:30</small>
                                        </div>
                                    </div>
                                    <div class="mesage_type d-flex align-items-center my-2">
                                        <div class="input_type">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"   
                                                aria-describedby="emailHelp"
                                                placeholder="Type something…."
                                            />
                                            <div class="smily_Sec">
                                                <a href="#"><i class="far fa-image"></i></a>
                                                <a href="#" ><i class="fa-solid fa-paperclip mx-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="send_btn">
                                            <button class="btn btn_send">Send</button>
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

      <?php include('common_user_footer.php'); ?>
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
          <div class="modal-header justify-content-center">
            <h5 class="modal-title" id="exampleModalLongTitle">
              Create Ticket
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png"
                class="img-fluid"
              />
            </button>
          </div>
          <div class="modal-body main_profile_form">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/addTicket.php">
            <div class="form-group">
              <label for="exampleInputPassword1">Ticket Name</label>
              <input
                type="text"
                class="form-control"
                id="ticket_title"
                name="ticket_title"
                placeholder="Title"
              />
            </div>
            <div class="form-group select_sec">
              <label for="exampleFormControlSelect1">Select Subject</label>
              <select class="form-control" id="ticket_category" name="ticket_category">
                <option value="">Select</option>
                <option value="course">Course</option>
                <option value="group">Group</option>
                <option value="blog">Blog</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Ticket Description</label>
              <textarea name="description" 
                class="form-control"
                id="description"
                rows="4"
                placeholder="description"
              ></textarea>
            </div>
            <div class="update_btn">
              <button type="submit" class="btn btn_update">Create Ticket</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- js links -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

    <script>
      function toggleIcon(e) {
        $(e.target)
          .prev(".panel-heading")
          .find(".more-less")
          .toggleClass("glyphicon-plus glyphicon-minus");
      }
      $(".panel-group").on("hidden.bs.collapse", toggleIcon);
      $(".panel-group").on("shown.bs.collapse", toggleIcon);
    </script>

    <script>
      $(document).ready(function () {
        $("#left-menu").click(function () {
          $(".deshboard_main").removeClass("hide-leftbar");
        });
        $("#right-menu").click(function () {
          $(".deshboard_main").removeClass("hide-rightbar");
          $(".deshboard_main").addClass("hide-leftbar");
        });
        $(".close-btn button").click(function () {
          $(".deshboard_main").addClass("hide-rightbar");
        });
        $(".closeleftbar-btn button").click(function () {
          $(".deshboard_main").addClass("hide-leftbar");
        });

        //chat

        $("#chat-menu").click(function () {
          $(".main_chat").removeClass("hide-left-chat");
        });
        $(".close-btn-chat button").click(function () {
          $(".main_chat").addClass("hide-left-chat");
        });
      });
    </script>
  </body>
</html>