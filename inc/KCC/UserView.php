<?php

namespace KCC;

class UserView{

    protected $user;

    public function __construct( $user ){
        $this->user = $user;
    }

    public function render_profile_image_section(){
        ?>
            <div class="profile-information-column">
                <!-- first the user avatar -->
                <div class="profile_image_div  d-flex justify-content-center">
                <img class="profile_image" src="<?php echo $this->user->user_avatar_url(); ?>">
                </div>
                <div class="display_name d-flex justify-content-center">
                <?= $this->user->full_name();?></div>
                <div class="display_email d-flex justify-content-center">
                <a href="mailto:<?= $this->user->email();?>"><?= $this->user->email(); ?></a>
                </div>
                <div class="display_location d-flex justify-content-center">
                <span><?= $this->user->state();?>, <?= $this->user->city();?></span>
                </div>
                <!-- then the location and number of connects -->
                <div class="display_groups_connects  d-flex justify-content-center">
                <div class="profile_count d-lg-flex d-md-flex align-self-end">
                    <div class="profile_count_main d-lg-flex d-md-flex justify-content-between px-2 align-items-center">
                        <div class="profile_count1 d-flex justify-content-start align-items-center">
                            <div class="px-2"><span><?= $this->user->connections_count() ?></span></div>
                            <div class="">
                            <p>Connects</p>
                            </div>
                        </div>
                        <div class=" profile_count2 d-flex justify-content-start align-items-center">
                            <div class="px-3"><span><?= count($this->user->allMyGroups()); ?></span></div>
                            <div class="">
                            <p>Groups</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- then the badges -->
                <div class="profile_medal1 d-flex justify-content-center ml-3 mr-3">
                <div class="d-flex justify-content-center">
                        <!-- begin badges paste -->
                        <div class="col-md-3 col-3">
                            <div class="text-center pt-1 pb-2">
                            <a href="/courses/the-collaborative-disaster-volunteer-credential-level-one/">
                                <img src="/wp-content/themes/astra/assets/images/cdvc_1b.png" width="50" class="img-fluid membergroup-img1 pro_img1" alt="image">
                            </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="text-center pt-1 pb-2">
                            <a href="/courses/the-collaborative-disaster-volunteer-credential-level-two/">
                                <img src="/wp-content/themes/astra/assets/images/cdvc_2b.png" width="50" class="img-fluid membergroup-img1 pro_img2" alt="image">
                            </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="text-center pt-1 pb-2">
                            <a href="/courses/the-collaborative-disaster-volunteer-credential-level-three/">
                                <img src="/wp-content/themes/astra/assets/images/cdvc_3b.png" width="50" class="img-fluid membergroup-img1 pro_img3" alt="image">
                            </a>
                            </div>
                        </div>
                    <!-- end badges paste -->
                    <?php //echo do_shortcode('[user_badges]'); 
                    ?>
                </div>
                </div>
            </div>
        <?php
    }
}