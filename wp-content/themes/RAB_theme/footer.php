<?php
/**
 * @package WordPress
 * @subpackage RAB_Theme
 */
?>
<!-- begin footer -->

	</div><!--#wrapper_container-->
</div><!--#wrapper-->

<div id="footer">
	<div id="footer_container">

		<div class="footer_blurb">
			<?php if ( !function_exists('dynamic_sidebar')
				|| !dynamic_sidebar('footer_1') ) : ?>
			<?php endif; ?>
			<div class="social">
				<a href="http://twitter.com/#!/recycleabike" class="twitter" title="Follow us on Twitter"></a>
				<a href="http://www.facebook.com/recycleabike" class="facebook" title="Like us on Facebook"></a>
				<a href="http://www.flickr.com/groups/recycleabike/pool" class="flickr" title="See our pics on Flickr"></a>
				<a href="http://www.recycleabike.org/rss" class="rss" title="Subscribe to our news blog"></a>
			</div>
			<div class="clear"></div>
		</div><!--.footer_blurb-->

		<div class="input_container">
			<h3>Got a Message?</h3>
			<!-- contact form disabled
			<?php echo do_shortcode('[contact-form 1 "Contact form 1"]'); ?>
		        -->
		Email <a href="mailto:rosy@recycleabike.org">John Rosenwinkel - Shop Mechanic</a> with questions about Recycle-A-Bike, Open Shop, Our Bikes and how to volunteer or <a href="mailto:chelsea@recycleabike.org"> Chelsea DeSantis - Head Mechanic & Instructor</a> with questions about our upcoming Repair-A-Bike classes, to sign your youth/adult group up for a program or for scholarship information! Feel free to text or give us a call at (401) 525-1822 with any questions you might have.<br />

		</div><!--.input_container-->
		<div class="clear"></div>


	<h4>Please support our sponsors & friends:</h4>
	<?php if ( !function_exists('dynamic_sidebar')
		|| !dynamic_sidebar('sponsors') ) : ?>
	<?php endif; ?>
	<div class="clear"></div>
	<p class="credit">&copy;<?php $the_year = date("Y"); echo $the_year; ?> <a href="<?php bloginfo('url'); ?>">Recycle-A-Bike</a> | Site design by <a href="http://www.deeluxdesign.com">Deelux</a> | Powered by <a href="http://www.wordpress.org">WordPress</a></p>


	</div><!--#footer_container-->
</div><!--#footer-->

<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11073343-18']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>