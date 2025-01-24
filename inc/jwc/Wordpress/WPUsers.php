<?php

namespace jwc\Wordpress;

class WPUsers extends WPCollection{
    public function __construct( $user_id )
    {
        parent::__construct( $user_id);
    }

    public function admin_init(){
        // add custom meta boxes
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_user', array($this, 'save_user'));
    }

    public function init(){
        // add custom user roles
        $this->add_roles();

    }

    public function add_roles(){
        // add_role('custom_role', 'Custom Role', array(
        //     'read' => true,
        //     'edit_posts' => true,
        //     'delete_posts' => true,
        // ));
    }

    public function add_meta_boxes(){
        add_meta_box(
            'user_meta',
            'User Meta',
            array($this, 'user_meta_box'),
            'user',
            'normal',
            'high'
        );
    }

    public function user_meta_box(){
        global $post;
        $user_id = $post->ID;
        $user_meta = get_user_meta($user_id);
        ?>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <table class="form-table
        ">
            <?php
            foreach($user_meta as $key => $value){
                ?>
                <tr>
                    <th><label for="user_meta[<?php echo $key; ?>]"><?php echo $key; ?></label></th>
                    <td><input type="text" name="user_meta[<?php echo $key; ?>]" value="<?php echo $value[0]; ?>"></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }

    public function save_user(){
        // save user meta
        if( isset($_POST['user_id']) ){
            $user_id = $_POST['user_id'];
            if( isset($_POST['user_meta']) ){
                foreach($_POST['user_meta'] as $key => $value){
                    update_user_meta($user_id, $key, $value);
                }
            }
        }
    }
}