<?php if ( ! defined( 'ABSPATH' ) ) exit;
$wow = (isset($_REQUEST["wow"])) ? sanitize_text_field($_REQUEST["wow"]) : '';
include_once( 'modal/menu.php' );
if ($wow == "add"){
	include_once( 'modal/add.php' );
	return;	
}
if ($wow == ""){
	include_once( 'modal/list.php' );
	return;
}
if ($wow == "discount"){
	include_once( 'modal/discount.php' );	
	return;
}
?>
</div>