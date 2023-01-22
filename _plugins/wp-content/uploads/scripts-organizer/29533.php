<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

add_filter( 'jekyll_export_post_types', function() {
	return array('posts', 'pages', 'swiss-knife', 'scripts-organizer', 'asura', 'wp-admin-cleaner', 'sandbox', 'collaboration', 'devkit', 'oxy_font_manager', 'acf_blocks', 'font-hero', 'plain_classes_gut');
});

?>
