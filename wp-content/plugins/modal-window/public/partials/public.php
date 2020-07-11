
<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
     $modal = '<div id="smwoverlay-'.$val->id.'">';
	 $modal .= '<div id="modal-window-'.$val->id.'" style="display: none;">';
	 $modal .= '<div id="smwclose-'.$val->id.'">X</div>';
	 $modal .= do_shortcode($val->content);	 
	 $modal .= '</div></div>';	 
	 echo $modal;	 
?>


