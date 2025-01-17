 <ul class="nav nav-pills nav-pills1 mb-3" id="pills1-tab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="pills-members1-tab" data-toggle="pill" href="#pills-members1" role="tab" aria-controls="pills-members1" aria-selected="true">All Members</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="pills-joinmembers-tab" data-toggle="pill" href="#pills-joinmembers" role="tab" aria-controls="pills-joinmembers" aria-selected="false">Join Request</a>
                            </li>
</ul>
<a class="add-memberbtn" href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"> Add Member</a>


<div class="tab-content" id="pills1-tabContent">
                        <div class="tab-pane fade show active" id="pills-members1" role="tabpanel" aria-labelledby="pills-members1-tab">
                        <div class="grid-container">
						 <div class="row">	
                            <?php if(!empty($ldUsersList)){
                                foreach ($ldUsersList as $ldU) {
                                    $grp_author_img = the_author_meta( 'avatar' , $ldU ); 
                                    if(empty($grp_author_img)){
                                        $grp_author_img = get_template_directory_uri()."/avatar.png";
                                    }
                            ?>
							<div class="col-md-3">
								<a href="#" class="mt-1 mr-1">
									<div class="member_box grid-item text-center">                          
									<div class="dropdown">
									  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa-solid fa-ellipsis-vertical"></i>
									  </a>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Allow Permission</a>
										<a class="dropdown-item" href="#">Remove</a>
									  </div>
									</div>
										<img src="<?php echo $grp_author_img; ?>">
										<div class="">
											<h5 class="mt-2"><?php echo the_author_meta( 'display_name' , $ldU ); ?></h5>
											<h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>
										</div>
										<div class="to_donate">
											<button class="btn btn_donate mt-2">Follow</button>
										</div>
									</div>
								</a>
							 </div>
							 
							 
							<?php }
						}
						?>
							</div>
                        </div>
                  </div>
                    <div class="tab-pane fade" id="pills-joinmembers" role="tabpanel" aria-labelledby="pills-joinmembers-tab">
                        <div class="grid-container">
					    	<div class="row">	
								<?php
									global $wpdb;
								echo 	$group_id  =  $post->ID;
									$allInvitedUsers = $wpdb->get_results(" SELECT * FROM `group_invite` WHERE `group_id` = $group_id" );

									//$allData = array();
									foreach($allInvitedUsers as $value)
									{
										$allData = $value->id;
										echo "<pre>";
										print_r($allData);
										
									    $userInfo  = get_userdata($allData);
										//echo "<pre>";
										//print_r($userInfo);
										
										//$author_img = the_author_meta( 'avatar' ,119 ); 
										//print_r($author_img);
										//echo $author_img;
										
										$avatar_url = get_avatar_url($allData);
										
										if(empty($author_img))
										{
											$author_img = get_template_directory_uri()."/avatar.png";
										}
								
									?>  
			
								<div class="col-md-3">
									<a href="#" class="mt-1 mr-1">
										<div class="member_box grid-item text-center">
											<img src= "<?php echo $avatar_url;?>">
											<div class="">
												<h5 class="mt-2"><?php echo $userInfo->display_name;?></h5>
												<h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>
											</div>
											<div class="to_donate">
												<button class="btn btn_donate mt-2">Accept</button>
												<button class="btn btn_white">Decline</button>
											</div>
										</div>
									</a>
								</div>
								<?php } ?>

								
								
							</div>

                        
                       
                      
                        </div>
                    </div>
                    </div>

<!-- Invite member modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
      <div class="modal-content">
    
        <div class="modal-body">
        
        <div class="blog_grid">
         <div class="row my-3">
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
			
			<div class="row add-mem-list">
				
				<?php
				    global $wpdb;
				    $group_id  =  $post->ID;
				    $allInvitedUsers = $wpdb->get_results(" SELECT * FROM `group_invite` WHERE `group_id` = $group_id" );
			
					$allData = array();
					foreach($allInvitedUsers as $value)
						{
						 $allData[] = $value->invited_to;
						}
				
					$args = array(
						'role'    =>  'subscriber',
						'exclude' => $allData
					);
					$users = get_users($args);    
					foreach ($users as $value) { 
					
					$author_img = the_author_meta( 'avatar' , $value->ID ); 
						if(empty($author_img))
						{
						   $author_img = get_template_directory_uri()."/avatar.png";
					    }
				?>  
				
					<div class="col-lg-4 col-12">
							
						<div class="member_box grid-item text-center">
							<img src="<?php echo $author_img; ?>">
							<div class="">
								<h5 class="mt-2"><?php echo $value->display_name?></h5>
								<!-- <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?//php echo '15 connects'; ?></h6> -->
							</div>
							<div class="to_donate">
                            <form method = "post"  action ="" class="row mediadoc_form" enctype="multipart/form-data">
								<input type="hidden" name ="invite_member" value ="invite_member">
								 <input type ="hidden" name ="member_id" value="<?php echo $value->ID?>" >
							   <input type = "hidden" name ="group_id" value = "<?php echo $post->ID?>">
								
								 <button type ="submit" value="save_ajax_data"/ class="btn btn_donate mt-2"  member-id ="<?php echo $value->ID?>">Invite</button>
								
                             </form> 
							</div>
						</div>
					</div>
                    
				
				<?php } ?>
					
					
           
				     
			 
			</div>
                          
          </div>
                     
        </div>
        </div>
        
      </div>
    </div>   
