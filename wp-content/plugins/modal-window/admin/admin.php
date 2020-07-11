<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function wow_modalsimple_admin_menu() {	
add_menu_page('Modal Window', __( "Modal Window", "wow-marketings"), 'manage_options', 'wow-modalsimple', 'wow_modalsimple', 'dashicons-images-alt2', null);
add_action('admin_print_styles', 'wow_script_style');	
}
add_action('admin_menu', 'wow_modalsimple_admin_menu', 999);
function wow_modalsimple() {
	global $wow_plugin;	
	$wow_plugin = true;
	include_once( 'partials/modal.php' );
	wp_enqueue_script('jquery-add-modalsimple', plugin_dir_url(__FILE__) . 'js/add.js', array('jquery'));		 	

}

if ( ! function_exists ( 'wow_script_style' ) ) {
function wow_script_style() {
	wp_enqueue_style('wow-style', plugin_dir_url(__FILE__) . 'css/style.css'); 	
	
}
}

if ( ! function_exists ( 'wow_nonce_chek' ) ) {
function wow_nonce_chek() 
{
	if ( !empty($_POST) && wp_verify_nonce($_POST['wow_nonce_field'],'wow_action') && current_user_can('manage_options'))
	{
		wow_run_wowwpclass();
	}	
}
add_action( 'plugins_loaded', 'wow_nonce_chek' );

function wow_run_wowwpclass(){
$objItem = new WOWWPClass();
$addwow = (isset($_REQUEST["addwow"])) ? sanitize_text_field($_REQUEST["addwow"]) : '';
$table_name = sanitize_text_field($_REQUEST["wowtable"]);
$wowpage = sanitize_text_field($_REQUEST["wowpage"]);
$id = sanitize_text_field($_POST['id']);
/*  Save and update Record on button submission */
if (isset($_POST["submit"])) {
    if (sanitize_text_field($_POST["addwow"]) == "1") {
        $objItem->addNewItem($table_name, $_POST);			
        header("Location:admin.php?page=".$wowpage."&info=saved");
		exit;		
    } else if (sanitize_text_field($_POST["addwow"]) == "2") {
        $objItem->updItem($table_name, $_POST);				
        header("Location:admin.php?page=".$wowpage."&wow=add&act=update&id=".$id."&info=update");		
       exit;
    }
}
}
}

if ( ! function_exists ( 'wow_plugins_admin_footer_text' ) ) {
function wow_plugins_admin_footer_text( $footer_text ) {
	global $wow_plugin;
	if ( $wow_plugin == true ) {
		$rate_text = sprintf( '<span id="footer-thankyou">Developed by <a href="http://wow-company.com/" target="_blank">Wow-Company</a> | <a href="https://wow-estore.com/support/" target="_blank">Support </a> | <a href="https://www.facebook.com/wowaffect/" target="_blank">Join us on Facebook</a></span>'
		);
		return str_replace( '</span>', '', $footer_text ) . ' | ' . $rate_text . '</span>';
	}
	else {
		return $footer_text;
	}	
}
add_filter( 'admin_footer_text', 'wow_plugins_admin_footer_text' );
}