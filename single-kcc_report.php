<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

global $post;
$report_id = $post->ID;

$report = KCC\Reports\Report::factory($report_id);

$meta = get_post_meta($report_id);

get_header('dashboard');

$report->render_view();
?>


<div class="modal fade situation_report" id="disaster_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

   <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

      <div class="modal-content">

         <div class="modal-body">

            <div class="situation_title d-flex justify-content-between">

               <div class=" ">

                  <h4 style="color:#132843; font-size:26px; font-family:'poppins';margin-left: 100px;">Are you sure you want to Delete</h4>

               </div>



            </div>

            <div class="situation_contant">

               <p>You will not be able to recover the deleted item. To avoid deleting this item, click the Cancel button below.</p>

            </div>

            <div class="row justify-content-center mb-5">

               <div class="col-lg-3 col-md-4 col-6">

                  <div class="apply_btn ">

                     <a href="#" data-toggle="modal" data-target="#disaster_report"><button class="btn btn_apply">Cancel</button></a>

                  </div>

               </div>

               <div class="col-lg-3 col-md-4 col-6">

                  <div class="apply_btn active">

                     <form method="POST" action="" class="mediadoc_form" enctype="multipart/form-data">

                        <input type="hidden" id="report_id" name="report_id" value="<?= $report_id ?>" />

                        <input type="hidden" name="action" value="delete_report" />

                        <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Delete</button>

                     </form>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</div>

<?php
get_footer();
