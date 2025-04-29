<?php

namespace KCC\Communications;

class BroadcastPost extends \jwc\Wordpress\WPPost{

    protected $post_type;

    protected $type;

    public function author(){
        return new \KCC\User( $this->author_id() );
    }

    public function getAudience(){
        $audience = get_post_meta($this->id(), 'audience', true);
        return $audience;
    }

    public function getGroupId(){
        if(get_class($this)=="KCC\Communications\Announcement"){
            
        }
        if(! $this->getAudience()=="group"){
            return false;
        }
        
        $group_id = get_post_meta($this->id(), 'group_id', true);
        if(empty($group_id)){
            return false;
        }
        return $group_id;
    }

    public function render_cell(){

        $editArgs = 
            json_encode([
            "post_id" => $this->id(),
            "post_title" => $this->title(),
            "post_content" => htmlentities($this->content(), ENT_QUOTES, 'UTF-8'),
            "post_thumbnail" => $this->thumbnail_url(),
            "audience" => $this->getAudience(),
            "group_id" => $this->getGroupId(),
            "selector" => "#edit" . ucfirst($this->type),
            "type" => $this->type
            ]);
            
            
            ?>

                      <div class="col-lg-3 col-12">
                        
                          <div class="blog-card">
                              <div class="image d-flex justify-content-center">
                                  <a href="<?= $this->permalink(); ?>">
                                      <?= $this->thumbnail(); ?>
                                  </a>
                                  <?php

                                    if ( get_current_user_id() == $this->author()->id() ) {

                                    ?>
                                      <div class="blog-dropdown">
                                          <div class="dropdown">
                                              <a id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">
                                                  <a class="dropdown-item" href="javascript:void(0)" onclick='showEditModal(<?= $editArgs; ?>);'>Edit <?= ucfirst($this->type);?></a>
                                                  <a href="javascript:void(0)" class="dropdown-item" onclick='delete<?= ucfirst($this->type);?>("<?php echo $this->id(); ?>")'>Delete</a>
                                              </div>
                                          </div>
                                      </div>
                                  <?php
                                    }
                                    ?>
                              </div>
                              <div class="card-title">
                                  <div class="d-flex justify-content-between w-100">
                                    
                                      <div class="title">
                                          <a href="<?= $this->permalink(); ?>">
                                              <h6><?php echo $this->title(); ?> </h6>
                                          </a>
                                      </div>
                                      <div class="blog-date">
                                          <p><?php echo $this->date(); ?></p>
                                      </div>
                                  </div>
                                  
                                  <div class="audience" style='font-size:11px;'>
                                        <?php
                                        if($this->getAudience()=="group"){
                                            $group = new \KCC\Group($this->getGroupId());
                                            ?>
                                            Posted in <?php echo $group->name(); ?>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            Public Post
                                            <?php
                                        }
                                        ?>
                                </div>

                                  <div class="blog-description">
                                    
                                      
                                      <a href="<?= $this->permalink(); ?>">
                                          <p> <?php echo  wp_trim_words($this->content(), 15); ?></p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
            <?php
    }

}