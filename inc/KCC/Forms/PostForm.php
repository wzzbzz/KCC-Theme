<?php

namespace KCC\Forms;

class PostForm extends Form
{

    protected $post_type;
    protected $type;
    protected $post_id;
    protected $group_id;
    
    public function render_form_box()
    {
?>

        <div class="form-box dsr">

            <div class="report-next-tab">

                <div class="row">

                    <div class="col-xl-12">

                    <form method="post" class="form-upload  resources-modal-page float" id="<?= $this->type;?>_edit_imagefrm" enctype="multipart/form-data">
                                  <?php $this->render_hidden_fields(); ?>
                                  <div class="row">
                                      <div class="col-lg-12 col-12">
                                          <div class="mb-3">
                                              <div class="drag-drop-images text-center image-upload-box">
                                                  <div class="avatar-edit">
                                                      <input type="file" id="<?= $this->type;?>_edit_image" name="<?= $this->type;?>_edit_image" accept=".png, .jpg, .jpeg">
                                                      <label for="<?= $this->type;?>_edit_image" class="d-flex align-items-center justify-content-center">
                                                          <div>
                                                              <div class="icon">
                                                                  <i class="fa fa-upload" aria-hidden="true"></i>
                                                              </div>
                                                              <p class="pt-4">Drop your Image here, or <b>Browse</b></p>
                                                              <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>
                                                          </div>

                                                      </label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-12 col-12">
                                          <div class="avatar-upload mb-3">
                                              <div class="avatar-preview">
                                                  <div id="blogEditImage" class="blogEditImage" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-12 col-12">
                                          <div class="form-floating mb-3">
                                              <input type="text" name="post_title" class="form-control" id="<?= $this->type;?>_title" placeholder="Enter here" value="">
                                              <label for="floatingInput"><?= ucfirst($this->type);?> title</label>
                                          </div>
                                      </div>


                                      <div class="col-lg-12 col-12">
                                          <div class="form-floating mb-3">
                                              <textarea class="form-control" name="post_content" placeholder="Enter here" id="<?= $this->type;?>_content" style="height: 100px"></textarea>
                                              <label for="floatingInput">Description</label>
                                          </div>
                                      </div>

                                      <div class="col-lg-12 col-12 d-flex justify-content-center">
                                          <button class="btn btn-primary" type="submit" title="Update <?= ucfirst($this->type);?>" id="Upload">Update <?= ucfirst($this->type);?></button>
                                      </div>
                                  </div>
                              </form>

                    </div>

                </div>

            </div>

        </div>
<?
    }


    public function renderCreateModal( ){

       // find out what page it is
         
      
        if(is_single() && get_post_type() == 'groups'){
            $this->group_id = get_the_ID();
         }else{   
            $this->group_id = '';
         }  
   
        ?>

        <div class="modal fade document-upload" id="create<?= ucfirst($this->type);?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

           <div class="modal-content">

              <div class="modal-header">

                 <h4 class="modal-title text-center">Create <?= ucfirst($this->type);?></h4>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">

                 </button>

              </div>

              <div class="modal-body">

                 <div class="row">

                    <div class="col-md-12">

                       <form method ="post"class="form-upload  resources-modal-page float" id="" enctype="multipart/form-data">

                          <input type="hidden" name="group_id" value="<?= $this->group_id;?>" />

                          <input type="hidden" name="create_<?= $this->type;?>" value="create_<?= $this->type;?>">

                          <input type="hidden" name="create_<?= $this->type;?>_nonce" value="<?php echo wp_create_nonce('create_'.$this->type);?>" />

                          <div class="row image-upload-and-preview">

                             <div class="col-lg-12 col-12">

                                <div class="mb-3">

                                   <div class="drag-drop-images text-center image-upload-box">

                                      <div class="avatar-edit">

                                         <input class='post-image-input' type="file" id="fileUpload<?= ucfirst($this->type);?>" name="post_image" accept=".png, .jpg, .jpeg">

                                         <label for="fileUpload<?= ucfirst($this->type);?>" class="d-flex align-items-center justify-content-center">

                                            <div>

                                               <div class="icon">

                                                  <i class="fa fa-upload" aria-hidden="true"></i>

                                               </div>

                                               <p class="pt-4">Drop your Image here, or <b>Browse</b></p>

                                               <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    

                                            </div>

                                         </label>

                                      </div>

                                   </div>

                                </div>

                             </div>

                             <div class="col-lg-12 col-12">

                                <div class="avatar-upload mb-3">

                                   <div class="avatar-preview">

                                      <div class='image-preview' id="imagePreviewFile" style="background-image: url(https://via.placeholder.com/120x88);"></div>

                                   </div>

                                </div>

                             </div>

                             <div class="col-lg-12 col-12">

                                <div class="form-floating mb-3">

                                   <input type="text" name= "post_title" class="form-control" id="floatingInput" placeholder="">

                                   <label for="floatingInput"><?= ucfirst($this->type)?> title</label>

                                </div>

                             </div>

                             <div class="col-lg-12 col-12">

                                <div class="form-floating mb-3">

                                   <textarea class="form-control rich-text mytextarea" name ="post_content"  placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>

                                </div>

                             </div>



                              <?php  $this->render_audience_section(); ?>

                                <button class="btn btn-primary" title="Create <?= ucfirst($this->type);?>" id="Upload">Create <?= strtoupper($this->type)?></button>

                             </div>

                          </div>

                       </form>

                    </div>

                 </div>

              </div>

           </div>

        </div>
     <?php
    }

    public function renderEditModal(){
        ?>

     <div class="modal edit<?= ucfirst($this->type);?>fade document-upload" id="edit<?= ucfirst($this->type);?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

      <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

         <div class="modal-content">

            <div class="modal-header">

               <h4 class="modal-title text-center">Edit <?= ucfirst($this->type);?></h4>

               <button type="button" class="close" data-dismiss="modal" aria-label="Close">

               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">

               </button>

            </div>

            <div class="modal-body">

               <div class="row">

                  <div class="col-md-12">

                     <form method="post"class="form-upload  resources-modal-page float" id="<?= $this->type;?>_edit_imagefrm" enctype="multipart/form-data">

                        <input type="hidden" name="group_id" value="" />

                        <input type ="hidden" name ="post_id"  id="post_id"  value ="">

                        <input type="hidden" name="update_<?= $this->type;?>" value="update_<?= $this->type;?>">

                        <input type="hidden" name="update_<?= $this->type;?>_nonce" value="<?php echo wp_create_nonce('update_<?= $this->type;?>_nonce'); ?>" />

                        <div class="row image-upload-and-preview">

                           <div class="col-lg-12 col-12">

                              <div class="mb-3">

                                 <div class="drag-drop-images text-center image-upload-box">

                                    <div class="avatar-edit">

                                       <input type="file" class = "post-image-input" id="<?= $this->type;?>_edit_image" name="<?= $this->type;?>_image" accept=".png, .jpg, .jpeg">

                                       <label for="<?= $this->type;?>_edit_image" class="d-flex align-items-center justify-content-center">

                                          <div>

                                             <div class="icon">

                                                <i class="fa fa-upload" aria-hidden="true"></i>

                                             </div>

                                             <p class="pt-4">Drop your Image here, or <b>Browse</b></p>

                                             <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    

                                          </div>

                                       </label>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-12 col-12">

                              <div class="avatar-upload mb-3">

                                 <div class="avatar-preview">

                                    <div id="edit-modal-preview-div" class="image-preview" style="background-image: url(https://via.placeholder.com/120x88);"></div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-12 col-12">

                              <div class="form-floating mb-3">

                                 <input type="text" name= "post_title" class="form-control" id="<?= $this->type;?>_title" placeholder="" value="">

                                 <label for="floatingInput"><?= ucfirst($this->type);?> title</label>

                              </div>

                           </div>

                           <div class="col-lg-12 col-12">

                              <div class="form-floating mb-3">

                                 <textarea class="form-control" name ="post_content"  placeholder="" id="<?= $this->type;?>_content" style="height: 100px"></textarea>

                                 <label for="floatingInput">Description</label>

                              </div>

                           </div>

                           <?php $form = new \KCC\Forms\Form(); $form->render_audience_section(); ?>


                           <div class="col-lg-12 col-12 d-flex justify-content-center">

                              <button class="btn btn-primary" type="submit" title="Update <?= ucfirst($this->type);?>" id="Upload">Update <?= ucfirst($this->type);?></button>

                           </div>

                        </div>

                     </form>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>
        <?php
    }

    public function renderDeleteModal(){
        ?>
         <div class="modal fade deleteModal" id="<?= $this->type;?>Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Delete</h5>

                    <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="d-flex modal-btn-delete">

                        <div class="w-50">

                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" title="Cancel">Cancel</button>

                        </div>

                        <div class="mx-2"></div>

                        <div class="w-50">

                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">
                            <input type ="hidden" name ="post_id"  id="post_id"  value ="">
                            <input type="hidden" name="delete_<?= $this->type;?>" value="delete_post"/>
                            <input type="hidden" name="group_image_nonce" value="<//?php echo wp_create_nonce('group_image_nonce'); ?>" />
                            <button type="submit" class="btn btn-primary" title="Delete">Delete</button>
                        </form>

                        </div>

                    </div>

                </div>

            </div>

            </div>

        </div>  
        <?php
    }
}
