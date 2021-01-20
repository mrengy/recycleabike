<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve Child
 * @since   1.0.0
 */

do_action( 'neve_before_primary_end' );
?>
</main><!--/.neve-main-->

<?php do_action( 'neve_after_primary' ); ?>

<!-- overwriting theme-editable footer content in favor of widget area -->
<footer id="site-footer" class="site-footer">
	<div class="footer--row-inner footer-bottom-inner footer-content-wrap">
		<div class="content-wrapper container">
			<?php //display footer widget area if it's active
				if ( is_active_sidebar( 'neve-child-footer' )  ) : ?>
			 <div class="widget-area" role="complementary">
			  <?php dynamic_sidebar( 'neve-child-footer' ); ?>
				<aside id="copyright" class="widget widget_text">
						&copy; <?php echo date('Y'); ?> Recycle-a-Bike
				</aside>
			 </div>
			<?php endif; ?>
		</div>
	</div>
</footer>

</div><!--/.wrapper-->
<?php wp_footer(); ?>

</body>

</html>
