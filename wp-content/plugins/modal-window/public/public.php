<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
function show_modalsimple_window($atts) {
    extract(shortcode_atts(array('id' => ""), $atts));	
    global $wpdb;
	$table_modal = $wpdb->prefix . "mwp_modal_free";
    $sSQL = "select * from $table_modal WHERE id=$id";
    $arrresult = $wpdb->get_results($sSQL); 
    if (count($arrresult) > 0) {
        foreach ($arrresult as $key => $val) {
			include( 'partials/public.php' );			
			$path_style = WOWMODAL_PLUGIN_DIR.'asset/wowstyle-'.$val->id.'.css';
			$path_script = WOWMODAL_PLUGIN_DIR.'asset/wowscript-'.$val->id.'.js';
			$file_style = WOWMODAL_PLUGIN_DIR.'admin/css/style.php';
			$file_script = WOWMODAL_PLUGIN_DIR.'admin/js/script.php';
			if (file_exists($file_style) && !file_exists($path_style)){
				ob_start();
				include ($file_style);
				$content_style = ob_get_contents();
				ob_end_clean();
				file_put_contents($path_style, $content_style);
			}			
			if (file_exists($file_script) && !file_exists($path_script)){
				ob_start();
				include ($file_script);
				$content_script = ob_get_contents();
				$packer = new JavaScriptPacker($content_script, 'Normal', true, false);
				$packed = $packer->pack();
				ob_end_clean();
				file_put_contents($path_script, $packed);				
			}
			if (file_exists($path_style)) {				
				wp_enqueue_style( 'wow-modalsimple-style-'.$val->id, WOWMODAL_PLUGIN_URL. 'asset/wowstyle-'.$val->id.'.css');			
			}			
			if (file_exists($path_script)) {				
				wp_enqueue_script( 'wow-modalsimple-script-'.$val->id, WOWMODAL_PLUGIN_URL. 'asset/wowscript-'.$val->id.'.js', array( 'jquery' ) );						
			}
			if ($val->use_cookies == "yes"){
				wp_enqueue_script( 'cookie-modal-window', plugin_dir_url( __FILE__ ) . 'js/jquery.cookie.js', array( 'jquery' ) );
			}			
        }
    } else {		
		echo "<p><strong>No Records</strong></p/><p/>";        
    }  
	
	return;
}
add_shortcode('modalsimple', 'show_modalsimple_window');
add_shortcode('Wow-Modal-Windows', 'show_modalsimple_window');
