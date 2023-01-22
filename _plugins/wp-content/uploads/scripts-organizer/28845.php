<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 ?>
<?php

    add_filter( 'jpeg_quality', function ( $arg ) {
        return 100;
    } );

?>
