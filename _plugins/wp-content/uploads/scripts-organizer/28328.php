<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 ?>
<?php
function dplugins_taxonomy_filter($post_type){
    /** Ensure this is the correct Post Type*/
    if($post_type !== 'post')
        return;

	
	$all_plugin = get_terms(array(
		'taxonomy' => 'plugin',
		'hide_empty' => true,
		'orderby' => 'term_order',
		'number' => 999,
	));

    /** Grab all of the dest_options that should be shown */
    $plugin_options[] = sprintf('<option value="">%1$s</option>', __('All Plugins', 'tourmaster'));
    $selected = "";
    foreach($all_plugin as $doc_plugin) :
    	if(isset($_GET['post_plugin']) && $_GET['post_plugin'] == $doc_plugin->slug){
    		$selected = 'selected="selected"';
    	} else {
    		$selected = '';
    	}
        $plugin_options[] = sprintf('<option value="%1$s" %2$s>%3$s</option>', esc_attr($doc_plugin->slug), $selected, $doc_plugin->name);
    endforeach;

    /** Output the dropdown menu */
    echo '<select class="" id="post-plugin" name="post_plugin">';
    echo join("\n", $plugin_options);
    echo '</select>';

	$all_publish_options = get_terms(array(
		'taxonomy' => 'publish_options',
		'hide_empty' => true,
		'orderby' => 'term_order',
		'number' => 999,
	));

    /** Grab all of the dest_options that should be shown */
    $publish_options[] = sprintf('<option value="">%1$s</option>', __('All Publish Options', 'tourmaster'));
    $selected = "";
    foreach($all_publish_options as $publish_option) :
    	if(isset($_GET['publish_options']) && $_GET['publish_options'] == $doc_plugin->slug){
    		$selected = 'selected="selected"';
    	} else {
    		$selected = '';
    	}
        $publish_options[] = sprintf('<option value="%1$s" %2$s>%3$s</option>', esc_attr($publish_option->slug), $selected, $publish_option->name);
    endforeach;

    /** Output the dropdown menu */
    echo '<select class="" id="publish_options-plugin" name="publish_options">';
    echo join("\n", $publish_options);
    echo '</select>';
}

add_action('restrict_manage_posts', 'dplugins_taxonomy_filter');

function dplugins_taxonomy_filter_query($query) {
   global $pagenow;
   $current_page = isset( $_GET['post_type'] ) ? $_GET['post_type'] : '';

   	if ( is_admin() && 
     'docs' == $current_page &&
     'edit.php' == $pagenow) {
     	$tax_query = array('relation' => 'AND');
     	if(isset( $_GET['docs_plugin'] ) && !empty($_GET['docs_plugin'])){
     		$tax_query[] = array(
	            'taxonomy' => 'plugin',
	            'field' => 'slug',
	            'terms' => array( $_GET['docs_plugin'] ),
	        );
     	}

		if(isset( $_GET['publish_option'] ) && !empty($_GET['publish_option'])){
     		$tax_query[] = array(
	            'taxonomy' => 'publish_option',
	            'field' => 'slug',
	            'terms' => array( $_GET['publish_option'] ),
	        );
     	}

     	
     	if(!empty($tax_query) && $query->is_main_query()){
			//echo "here again"; exit;
		    $query->set( 'tax_query', $tax_query );
		    //echo "<pre>"; print_r($query); "</pre>"; exit;
     	}
	}
}
add_filter( 'parse_query', 'dplugins_taxonomy_filter_query' );
?>
