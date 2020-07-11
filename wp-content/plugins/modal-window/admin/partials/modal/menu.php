<?php
global $wpdb;
$table_modal = $wpdb->prefix . "mwp_modal_free";
$info = (isset($_REQUEST["info"])) ? $_REQUEST["info"] : '';
if ($info == "saved") {
    echo "<div class='updated' id='message'><p><strong>".__("Record Added", "wow-marketings")."</strong>.</p></div>";
}
if ($info == "update") {
    echo "<div class='updated' id='message'><p><strong>".__("Record Updated", "wow-marketings")."</strong>.</p></div>";
}
if ($info == "del") {
    $delid = $_GET["did"];
    $wpdb->query("delete from " . $table_modal . " where id=" . $delid);
    echo "<div class='updated' id='message'><p><strong>".__("Record Deleted", "wow-marketings").".</strong>.</p></div>";
}
$resultat = $wpdb->get_results("SELECT * FROM " . $table_modal . " order by id asc");
$count = count($resultat);
?>
<div class="wow">
<h1><?php esc_attr_e("Modal Window", "wow-modal-windows") ?></h1>
<ul class="wow-admin-menu">
<li><a href='admin.php?page=wow-modalsimple'><?php esc_attr_e("List", "wow-marketings") ?></a></li>
<li>
	<?php if($count<3){?>
	<a href='admin.php?page=wow-modalsimple&wow=add' ><?php esc_attr_e("Add new", "wow-marketings") ?></a>
	<?php } ?>
	</li>
<li><a href='https://wow-estore.com/downloads/wow-modal-windows-pro/' target="_blank"><b><?php esc_attr_e("Get Pro version", "wow-marketings") ?></b></a></li>
<li><a href='https://marketing-wp.com/' target='_blank'><b><?php esc_attr_e("Marketing Bundle", "wow-marketings") ?></b></a></li>
<li><a href='admin.php?page=wow-modalsimple&wow=discount'><?php esc_attr_e("Get Discount", "wow-marketings") ?></a></li>
</ul>
<div class="wow_admin_signup">
<div class="wow-admin-col">
<div class="wow-admin-col-6">
<h2>GET DISCOUNTS & FREEBIES:</h2>
<div id="mc_embed_signup">
<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post" target="_blank">
<div class="mc-field-group">
<input type="email" value=""  placeholder="Enter your email here.." name="email" class="required email">
<input type="hidden" name="campaign_token" value="nwEGo" />
<input class="mwp_admin_green" name="subscribe" type="submit" value="Sign Up Now!">
</div>
</form>


</div>
<!--End mc_embed_signup-->

</div>
<div class="wow-admin-col-6">
<h2>KEEP UP WITH THE INDUSTRY:</h2>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwowaffect%2F&tabs&width=500&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=365329313856232" width="500" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
</div>
</div>

</div>