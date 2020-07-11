<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
global $wpdb;
$wpdb->mwp_modal_free = $wpdb->prefix . 'mwp_modal_free';
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
$sql = "CREATE TABLE " . $wpdb->mwp_modal_free . " (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,  
  modal_width TEXT,
  modal_width_par TEXT,
  modal_height TEXT,
  modal_height_par TEXT,  
  modal_show TEXT,
  use_cookies TEXT,
  modal_cookies TEXT,
  modal_timer TEXT,
  content TEXT,	
  close_button_overlay TEXT,
  close_button_esc TEXT,
  UNIQUE KEY id (id)
) DEFAULT CHARSET=utf8;";
dbDelta($sql);	