<?php 

/* Template Name: Message */
get_header('new'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message-wcc</title>
    <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
     <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">

    <!-- Favicon -->    
   
<style type="text/css">
    .modal{
        visibility: unset;
    }
    .main_all_bg_Sec .main_footer_sec {
    background: #134793 0% 0% no-repeat padding-box;
    border-radius: 50px 0px 0px 0px;
    padding: 1rem 0rem 0rem 0rem;
    margin-top: 40px;
    float: right;
}
.main_all_bg_Sec .main_footer_sec .footer_logo img {margin-bottom:12px; max-width:85%;}
</style>
</head>
<body class="main_all_bg_Sec">

<div class=" col-xl-12">
        <div class="row justify-content-end d-flex" style="display: flex; justify-content: end;">
            <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex align-items-center mt-0 flex-wrap">

            <?php include('user_topbar.php')?>
            </div>
    </div>


  


   <!---  <?php include('xxxusermenucommon.php')?> -->

    <div class="col-xl-12 ">
        
        <div class="row justify-content-end mt-3">

            <!---   <?php include('xxxsearch_frm.php')?> -->

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3">
                <div class="main_box_center_tickit chat_tickit col-xl-11">
                    <div class="col-xl-12">
                        <div class="top_profile d-flex justify-content-between align-items-center pb-3">
                            <div>
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_message.png" class="img-fluid mr-2">
                                    <h4>Messages</h4>
                                </div>
                               <!--- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
                            </div>
                            <div class="create_tickit_Btn">
                                <button class="btn btn_tickit" data-toggle="modal" data-target="#exampleModalCenter"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/crete_group.png" class="img-fluid mr-2">Create a Group</button>
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
                                    <div class="serch_sec_top">
                                        <form method="get" action="">
                                        <input type="text" class="form-control" id="q" name="q" aria-describedby="emailHelp" placeholder="Search chat">
                                        </form>
                                    </div>
                                    <div class="message_Serch_user mt-3">
                                        
                                     

                                        <?php 
                                        // $search_string = esc_attr( trim( $_GET['q'] ) );

                                         if(!empty($search_string)){
                                             $args = array(
                                                'role'    =>  'subscriber',
                                                'search'         => "*{$search_string}*"
                                                );
                                          
                                        
                                         }else{
                                            /*$args = array(
                                                            'role'    =>  'subscriber'
                                                         );*/
                                                         
                                             $current_user_id = get_current_user_id();  
                                                $args = array(
                                                        'numberposts'   => -1,
                                                        'post_type'     => 'groups',
                                                        'post_status'   => 'publish',
                                                         'author'       =>  $current_user_id
                                                    );
                                         }
                                        $users = get_posts( $args );
                                        if(!empty($users)){   
                                        foreach ($users as $value) { 
                                        
                                             $allUsers  = learndash_get_groups_user_ids($value->ID);
                                             
                                              
                                              foreach($allUsers as $newUser)
                                              {
                                                  
                                                   //$author_img = the_author_meta( 'avatar' , $newUser ); 
                                                   
                                                   $author_img = get_avatar_url($newUser);
                                                   
                                                    if(empty($author_img))
                                                    {
                                                        $author_img = get_template_directory_uri()."/avatar.png";
                                                    }
                                                    
                                                    $userInfo  =  get_userdata($newUser);
                                                    
                                                  // echo "<pre>"; 
                                                  //print_r($userInfo); 
                                                 echo "<a href ='https://knowledge.communication.worldcares.org/message/?user_id=$userInfo->ID'>";
                                                    echo  "<div class='user_serch_messsage d-flex align-items-center'>";
                                                    echo   "<img src='$author_img;' class='img-fluid'>";
                                                    echo    "<div class='user_sserch ml-2'>";
                                                    echo "<div class='mb-2'>";
                                                    echo "<h6> $userInfo->display_name</h6>";
                                                    
                                                    echo "</div>";
                                                    echo "<div class='d-flex align-items-center justify-content-between mb-2 btm_dis'>";
                                                  /*  echo  "<p>Let have a meeting.. I will be available ….</p>";
                                                    echo   "<p><span>30 min</span></p>"; */
                                                    echo "</div>";
                                                            
                                                    echo "</div>";
                                                    echo "</div>";
                                                echo "</a>"; 
                                                  
                                              }
                                        ?> 
                                        
                                       <?php } }else{
                                       
                                        echo "No user found";
                                       }
                                       ?> 

                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-8 col-lg-8  center-chat">
                                <div class="chat_Section_main ">
                                    <div class="open_chat_uer_menu">
                                        <!-- <button id="chat_open"><i class="fas fa-bars"></i></button> -->
                                        <div><button id="chat-menu"><i class="fas fa-align-left"></i></button> </div>
                                    </div>
                                    <?php 
                                        $to_user_id = get_userdata($_GET['user_id']);
                                        $user_id = get_current_user_id(); 


                                 
                                    //print_r($userInfo);
                                    
                                    if(!empty( $userInfo)){
                                        $author_img = get_avatar_url($userInfo->ID);
                                                   
                                                    if(empty($author_img))
                                                    {
                                                        $author_img = get_template_directory_uri()."/avatar.png";
                                                    }
                                        
                                       /* $author_img = the_author_meta( 'avatar' , $_GET['id'] ); 
                                            if(empty($author_img))
                                            {
                                                $author_img = get_template_directory_uri()."/avatar.png";
                                            }*/

                                            $username =  ($userInfo->display_name)?$userInfo->display_name:$userInfo->user_login;
                                    ?>
                                    <div class="header_title_Chat">
                                        <div class="name_head d-flex align-items-center">
                                            <img src="<?php echo $author_img; ?>" class="img-fluid mr-3">
                                            <div>
                                                <h5><?php echo $username;?></h5>
                                               <!-- <p><i class="fas fa-circle"></i> Online</p>-->
                                            </div>
                                        </div>                                       
                                    </div>
                                <?php } 
                                ?>
                                    <div class="chat_writting_sec" id="messages">
                                        <!--<div class="my_mes_Sec my-3">
                                            <div class="bg_sec_chat">
                                                <p>Cool, let's talk about it later, shall we? This is going to be a huge!! We already sent you the details bro.</p>
                                            </div>
                                            <small>15:30</small>
                                        </div>

                                        <div class="again_message_Sec my-4">                                            
                                            <div class=" again_mes_chat">
                                                <p>Cool, let's talk about it later, shall we? This is going to be a huge!! We already sent you the details bro.</p>                                                
                                            </div>
                                            <small>15:30</small>
                                        </div>-->                                            
                                    </div>
    <!-- <div class="mesage_type d-flex align-items-center my-2">   <form id="form" action="https://albumer.com/chat.php?room_id=<?//php echo $_GET['id'];?>&user_id=<?//php echo $_GET['id'];?>&user_name=<?//php echo $username;?>"> -->

                               <div class="mesage_type d-flex align-items-center my-2">   <form id="form" action="javascript:;">                                     
                                        <div class="input_type">
                                            <input type="text" class="form-control"  autocomplete="off" data-log="EVfkgXnfxpqrt9mHtTqW"  aria-describedby="emailHelp" placeholder="Enter message">                                        
                                            <div class="smily_Sec">
                                                <a href="javascript:void(0)"><i class="far fa-image"></i></a>
                                                <a href="javascript:void(0)"><i class="fa-solid fa-paperclip mx-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="send_btn">
                                            <button class="btn btn_send" id="send_group_chat">Send</button>
                                        </div>  
                                        </form>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                
            </div>

        </div>  
        
        <!--Footer-->
        <?php include('user-footer.php')?>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered create_tickit" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title" id="exampleModalLongTitle">Create a Group Chat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png" class="img-fluid">
          </button>
        </div>
        <div class="modal-body main_profile_form">
            <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Janedoe23">
            </div>
            <div class="form-group select_sec">
                <label for="exampleFormControlSelect1">Gender</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>                                                      
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry."></textarea>
              </div>
              <div class="update_btn">
                <button class="btn btn_update">Create Group</button>
            </div>
        </div>      
      </div>
    </div>
  </div>
   
  <?php

$nonce = wp_create_nonce("send_group__nonce");
$ajaxUrl = admin_url('admin-ajax.php?action=send_group_reques&nonce='.$nonce);
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

    <script>
    function toggleIcon(e) {
    $(e.target)
    .prev('.panel-heading')
    .find(".more-less")
    .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
    </script>



   <!--  <script type="text/javascript">

$(function() {
    var stringToHTML = function (str) {
        var parser = new DOMParser();
        var doc = parser.parseFromString(str, 'text/html');
        return doc.body;
    }; 
    var room_id = "<?php echo $_GET['id'];?>";
    var user_id ="<?php echo $_GET['id'];?>";
    var user_name = "<?php echo $username;?>";
     var user_img = "http://178.62.59.125//public/profile_image/1674148373.jpg";
    var chat_type = "group";
    var content_type = "1";

    var socket = io.connect('https://albumer.com:4001', {
        query: 'room_id=' + room_id + '&user_id=' + user_id+ '&userId=' + user_id+ '&chat_type=' + chat_type
    });

    console.log("Socket connected",socket);

    var messages = document.getElementById('messages');
      var form = document.getElementById('form');
      var input = document.getElementById('input');

      form.addEventListener('submit', function(e) {
        e.preventDefault();
        var msg = input.value;
        var chatMsgData = {};
        chatMsgData.room_id = room_id;
        chatMsgData.user_id = user_id;
        chatMsgData.user_name = user_name;
        chatMsgData.user_img  = user_img;
        chatMsgData.content_type = content_type;
        chatMsgData.chat_type = chat_type;
        chatMsgData.msg = msg;

        console.log("submit",chatMsgData);
        if (input.value) {
          socket.emit('send_msg', chatMsgData);
          input.value = '';
        }
      });
      socket.on('send_msg', function(responseData) {
         console.log("get send_msg",responseData);
        var msg = responseData.msg;
        var cdata = '<div class="my_mes_Sec my-3"><div class="bg_sec_chat"><p>'+msg+'</p></div><small>15:30</small></div>';
        messages.append(stringToHTML(cdata));
        window.scrollTo(0, document.body.scrollHeight);
      });

    socket.on('disconnect', (id) => {
        console.log('you have been disconnected');
    });

    socket.on('reconnect', () => {
        //console.log('you have been reconnected');
        if (user_id) {
            socket.emit('add_user', user_id,room_id);
        }
    });

    socket.on('reconnect_error', () => {
        console.log('attempt to reconnect has failed');
    });

});
</script> -->


<script>
    $(document).ready(function(){
        $("#left-menu").click(function(){
            $(".deshboard_main").removeClass('hide-leftbar');
        });
        $("#right-menu").click(function(){
            $(".deshboard_main").removeClass('hide-rightbar');
            $(".deshboard_main").addClass('hide-leftbar');

        });
        $(".close-btn button").click(function(){
            $(".deshboard_main").addClass('hide-rightbar');
        });
        $(".closeleftbar-btn button").click(function(){
            $(".deshboard_main").addClass('hide-leftbar');
        });
    
        //chat

            $("#chat-menu").click(function(){
            $(".main_chat").removeClass('hide-left-chat');
        });
        $(".close-btn-chat button").click(function(){
            $(".main_chat").addClass('hide-left-chat');
        });
            });
</script>

<!--Chat Message Script starst-->
   <script>
    //  $('#send_group_chat').click(function(){
	// 	var chat_message = $.trim($('#group_chat_message').html());
	// 	var action = 'insert_data';
	// 	if(chat_message != '')
	// 	{
	// 		$.ajax({
	// 			url:"group_chat.php",
	// 			method:"POST",
	// 			data:{chat_message:chat_message, action:action},
	// 			success:function(data){
	// 				$('#group_chat_message').html('');
	// 				$('#group_chat_history').html(data);
	// 			}
	// 		})
	// 	}
		
	// });


     $('#send_group_chat').on('click', '.send_chat', function(){
      var to_user_id = $(this).attr('id');
        var chat_message = $.trim($('#chat_message_'+to_user_id).val());
        if(chat_message != '')
        {
            $.ajax({
                url:"insert_chat.php",
                method:"POST",
                data:{to_user_id:to_user_id, chat_message:chat_message},
                success:function(data)
                {
                    //$('#chat_message_'+to_user_id).val('');
                    var element = $('#chat_message_'+to_user_id).emojioneArea();
                    element[0].emojioneArea.setText('');
                    $('#chat_history_'+to_user_id).html(data);
                }
            })
        }
        else
        {
            alert('Type something');
        }
    });










   
   </script>
   

<!--Chat message Script Ends -->



  

</body>
</html>