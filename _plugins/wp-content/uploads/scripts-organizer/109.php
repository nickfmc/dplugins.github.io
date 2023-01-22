<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 ?>
<?php 

/*
Plugin Name:  Remove Archive Prefix
Description:  Load custom fonts and inject to Oxygen
Author:       <a href="https://dplugins.com/">dPlugins</a>
Version:      1.0.1
Description:  https://dplugins.com/code_snippets/remove-archive-prefix/
Copyright:    © 2021, dPlugins
Version History:
2021-07-10  //  1.0.1  //  Fixed bug with Oxygen to load SVG Icons
2021-04-20  //  1.0.0  //  Initial Release
*/

/**
 * Add a span around the title prefix so that the prefix can be hidden with CSS
 * if desired.
 * Note that this will only work with LTR languages.
 *
 * @param string $title Archive title.
 * @return string Archive title with inserted span around prefix.
 */
function mk_hide_the_archive_title( $title ) {

    // Skip if the site isn't LTR, this is visual, not functional.
    // Should try to work out an elegant solution that works for both directions.
    if ( is_rtl() || !is_archive() ) {
        return $title;
    }

    // Split the title into parts so we can wrap them with spans.
    $title_parts = explode( ': ', $title, 2 );

    // Glue it back together again.
    if ( ! empty( $title_parts[1] ) ) {
        $title = wp_kses(
            $title_parts[1],
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        );
        $title = '<span class="screen-reader-text">' . esc_html( $title_parts[0] ) . ': </span>' . $title;
    }

    return $title;

}

add_filter( 'get_the_archive_title', 'mk_hide_the_archive_title' );

?>
Code language: PHP (php)

