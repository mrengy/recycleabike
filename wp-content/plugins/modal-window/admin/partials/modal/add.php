<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php include ('include/data.php'); ?>
<h2><?php esc_attr_e("Shortcode", "wow-marketings") ?> <?php esc_attr_e("for Modal Window", "wow-marketings") ?> : <?php echo "[Wow-Modal-Windows id=$id]"; ?></h2>
<form action="admin.php?page=wow-modalsimple" method="post" id="addtag">
<div class="wowbox">
<h3><?php esc_attr_e("Name", "wow-marketings") ?></h3>
<div class="inside wow-admin" style="display: block;">	
<div class="wow-admin-col">
<div class="wow-admin-col-12">
<input  placeholder="Name is used only for admin purposes" type='text' name='title' value="<?php echo $title; ?>" class="input-12"/>
</div>
</div>
</div>
</div>
<div class="wowbox">
    <h3><?php esc_attr_e("Content", "wow-marketings") ?></h3>
    <div class="inside wow-admin" style="display: block;">
<div class="wow-admin-col-12">
<div style="width:95%">
	<?php wp_editor(stripcslashes($content), 'content', $settings); ?>	
	</div>
	</div>		
	</div>
	</div>

<div class="wowbox">    
    <h3><?php esc_attr_e("Style of the modal window", "wow-marketings") ?></h3>
    <div class="inside wow-admin" style="display: block;">	
	<div class="wow-admin-col" style="overflow:hidden;">	
	<div class="wow-admin-col-3"><?php esc_attr_e("Width", "wow-marketings") ?>:<br/><input type='text' placeholder="662"  name='modal_width' value="<?php echo $modal_width; ?>" style="margin-bottom:5px;"/><br/> <input name="modal_width_par" type="radio" value="px" <?php if($modal_width_par=='px') { echo 'checked="checked"'; } ?>>px <input name="modal_width_par" type="radio" value="pr" <?php if($modal_width_par=='pr') { echo 'checked="checked"'; } ?>>%</div>
	<div class="wow-admin-col-3"><?php esc_attr_e("Height", "wow-marketings") ?>:<br/> 
	<input type='text' placeholder="auto" name='modal_height' value="<?php echo $modal_height; ?>" style="margin-bottom:5px;"/><br/> <input name="modal_height_par" type="radio" value="auto" <?php if($modal_height_par=='auto') { echo 'checked="checked"'; } ?>>auto <input name="modal_height_par" type="radio" value="px" <?php if($modal_height_par=='px') { echo 'checked="checked"'; } ?>>px <input name="modal_height_par" type="radio" value="pr" <?php if($modal_height_par=='pr') { echo 'checked="checked"'; } ?>>%
	</div>
</div>	
</div>	
</div>
	
<div class="wowbox">
    <h3><?php esc_attr_e("Close Button", "wow-marketings") ?></h3>
    <div class="inside wow-admin" style="display: block;">	
	<div class="wow-admin-col">	
	<div class="wow-admin-col-6"><?php esc_attr_e("Also enable closing on", "wow-marketings") ?>:<br>
	<?php esc_attr_e("Overlay", "wow-marketings") ?> <input name="close_button_overlay" type="checkbox" value="1" <?php if($close_button_overlay=='1') { echo 'checked="checked"'; } ?>> Esc  <input name="close_button_esc" type="checkbox" value="1" <?php if($close_button_esc=='1') { echo 'checked="checked"'; } ?>>
	</div>
	</div>
</div>	
</div>
	<div class="wowbox">
    <h3><?php esc_attr_e("Display", "wow-marketings") ?></h3>
    <div class="inside wow-admin" style="display: block;">	
	<div class="wow-admin-col">
	<div class="wow-admin-col-3"><?php esc_attr_e("Show a modal window", "wow-marketings") ?>:<br/>
	<select name='modal_show' id="modal_show" onchange="wpchange();">        
        <option value="load" <?php if($modal_show=='load') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the page loads", "wow-marketings") ?></option>
		<option value="click" <?php if($modal_show=='click') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Click on a link (with id)", "wow-marketings") ?></option>
		<option value="anchor" <?php if($modal_show=='anchor') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Click on a link (with an #anchor link)", "wow-marketings") ?></option>
        <option value="scroll" <?php if($modal_show=='scroll') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the window is scrolled", "wow-marketings") ?></option>
        <option value="close" <?php if($modal_show=='close') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the user tries to leave the page", "wow-marketings") ?></option>		
    </select><br/>
	<div id="wpchange1" style="display:none; width:80%;"><?php echo __("Add an <b>id='wow-modal-id-X'</b> to the link, where X is the number of the modal window", "wow-marketings") ?></div>
	<div id="wpchange2" style="display:none; width:80%;"><?php echo __("Add an anchor to the link: <b>a href='#wow-modal-id-X'</b>, where X is the number of the modal window", "wow-marketings") ?></div>
	</div>
	<div class="wow-admin-col-3 wpcookie"><?php esc_attr_e("Show only once? (use cookies)", "wow-marketings") ?>:<br/>
	<select name='use_cookies'>
        <option value="no" <?php if($use_cookies=='no') { echo 'selected="selected"'; } ?>><?php esc_attr_e("no", "wow-marketings") ?></option>
        <option value="yes" <?php if($use_cookies=='yes') { echo 'selected="selected"'; } ?>><?php esc_attr_e("yes", "wow-marketings") ?></option>        
    </select>
	</div>
	<div class="wow-admin-col-3 wpcookie"><?php esc_attr_e("Reset in", "wow-marketings") ?>:<br/>
	<input type='text'  placeholder="5" name='modal_cookies' value="<?php echo $modal_cookies; ?>"/> <?php esc_attr_e("days", "wow-marketings") ?>
	</div>
	<div class="wow-admin-col-3"><?php esc_attr_e("Delay", "wow-marketings") ?>:<br/>
	<input type='text'  placeholder="0" name='modal_timer' value="<?php echo $modal_timer; ?>"/> <?php esc_attr_e("seconds", "wow-marketings") ?>
	</div>
	</div>
	</div>
	</div>
	<?php submit_button($btn); ?>	
    <input type="hidden" name="addwow" value="<?php echo $hidval; ?>" />    
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="hidden" name="wowpage" value="<?php echo $wowpage; ?>" />
	<input type="hidden" name="wowtable" value="<?php echo $table_modal; ?>" />	
	<input type="hidden" name="plugdir" value="<?php echo WOW_MODALSIMPLE_PLUGIN_BASENAME; ?>" />	
	<?php wp_nonce_field('wow_action','wow_nonce_field'); ?>	
  </form>
