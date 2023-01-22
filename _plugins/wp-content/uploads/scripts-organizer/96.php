<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 ?>
<?php

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_sub_page(array(
        'page_title'     => 'Swiss Knife',
        'menu_title'    => 'Swiss Knife Settings',
        'parent_slug'    => 'edit.php?post_type=swiss-knife',
    ));


    acf_add_options_sub_page(array(
        'page_title'     => 'Scripts Organizer',
        'menu_title'    => 'Scripts Organizer Settings',
        'parent_slug'    => 'edit.php?post_type=scripts-organizer',
    ));

}


?>
