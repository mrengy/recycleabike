<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
$wowpage = 'wow-modalsimple';
$act = (isset($_REQUEST["act"])) ? sanitize_text_field($_REQUEST["act"]) : '';
if ($act == "update") {
$recid = sanitize_text_field($_REQUEST["id"]);
$result = $wpdb->get_row("SELECT * FROM $table_modal WHERE id=$recid");    
    if ($result){
        $id = $result->id;
        $title = $result->title;
		$modal_show = $result->modal_show;
		$use_cookies = $result->use_cookies;
		$modal_cookies = $result->modal_cookies;
		$modal_timer = $result->modal_timer;
		$content = $result->content;
		$close_button_overlay = $result->close_button_overlay;
		$close_button_esc = $result->close_button_esc;
		$modal_width = $result->modal_width;
		$modal_width_par = $result->modal_width_par;
		$modal_height_par = $result->modal_height_par;
		$modal_height = $result->modal_height;
		$btn = __("Update", "wow-marketings");
        $hidval = 2;
    }
}
else if ($act == "duplicate") { 
$recid = sanitize_text_field($_REQUEST["id"]);
$result = $wpdb->get_row("SELECT * FROM $table_modal WHERE id=$recid");
   if ($result){   
        $id = "";
        $title = "";
		$modal_show = $result->modal_show;
		$use_cookies = $result->use_cookies;
		$modal_cookies = $result->modal_cookies;
		$modal_timer = $result->modal_timer;
		$content = $result->content;
		$close_button_overlay = $result->close_button_overlay;
		$close_button_esc = $result->close_button_esc;
		$modal_width = $result->modal_width;
		$modal_width_par = $result->modal_width_par;
		$modal_height_par = $result->modal_height_par;
		$modal_height = $result->modal_height;
		$btn = __("Save", "wow-marketings");
        $hidval = 1;
    }
}
 else {
    $btn = __("Save", "wow-marketings");
    $id = "";
    $title = "";
	$modal_show = "";
	$use_cookies = "";
	$modal_cookies = "";
	$modal_timer = "";
	$content = "";
	$close_button_overlay = "";
	$close_button_esc = "";	
	$modal_width_par = "px";
	$modal_height_par = "auto";
	$modal_height = "";	
	$modal_width = "";
    $hidval = 1;
}
$settings = array(
    'textarea_name' => 'content',
	'textarea_rows' => '10',
	'wpautop' => 0,
    'media_buttons' => true,
    'tinymce' => array(
        'theme_advanced_buttons1' => 'formatselect,|,bold,italic,underline,|,' .
        'bullist,blockquote,|,justifyleft,justifycenter' .
        ',justifyright,justifyfull,|,link,unlink,|' .
        ',spellchecker,wp_fullscreen,wp_adv'
    )
);
?>