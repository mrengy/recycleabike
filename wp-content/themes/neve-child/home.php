<?php
/**
 * Index template.
 *
 * @package Neve
 */
$container_class = apply_filters( 'neve_container_class_filter', 'container', 'blog-archive' );

get_header();

?>
	<div class="<?php echo esc_attr( $container_class ); ?> archive-container">
<?php
		do_action( 'neve_before_loop' );
		do_action( 'neve_page_header', 'index' );

		$featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
		if ($featured_img) {
			$image_src = $featured_img[0];
?>
			<div id="featured-container">
				<div id="featured-image" style="background-image: url('<?php echo $image_src; ?>');">
				</div>
			</div>
<?php
		}
		?>
		<div class="row nv-content-wrap">
			<?php do_action( 'neve_do_sidebar', 'blog-archive', 'left' ); ?>
			<div class="nv-index-posts blog col">
				<?php
				do_action( 'neve_before_posts_loop' );
				if ( have_posts() ) {
					/* Start the Loop. */
					echo '<div class="posts-wrapper row">';


					$pagination_type = get_theme_mod( 'neve_pagination_type', 'number' );
					if ( $pagination_type !== 'infinite' ) {
						global $wp_query;

						$posts_on_current_page = $wp_query->post_count;
						$hook_after_post       = -1;

						if ( $posts_on_current_page >= 2 ) {
							$hook_after_post = intval( ceil( $posts_on_current_page / 2 ) );
						}
						$post_index = 1;
					}
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );

						if ( $pagination_type !== 'infinite' ) {
							if ( $post_index === $hook_after_post && $hook_after_post !== - 1 ) {
								do_action( 'neve_middle_posts_loop' );
							}
							$post_index ++;
						}
					}
					echo '</div>';
					if ( ! is_singular() ) {
						do_action( 'neve_do_pagination', 'blog-archive' );
					}
				} else {
					get_template_part( 'template-parts/content', 'none' );
				}
				?>
				<div class="w-100"></div>
				<?php do_action( 'neve_after_posts_loop' ); ?>
			</div>
			<?php do_action( 'neve_do_sidebar', 'blog-archive', 'right' ); ?>
		</div>
	</div>
<?php
get_footer();
