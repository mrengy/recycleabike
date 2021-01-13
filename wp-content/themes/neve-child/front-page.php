<?php
/**
 * Template Name: front page with caption
 */

get_header();
?>
	<div class="content-wrapper container single-page-container ">
		<div class="row neve-child-wrap">
				<div id="featured-container">
					<div id="featured-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
					<div id="featured-caption">
						<?php
							$caption = get_post_custom_values( $key = 'Caption');
							if (!empty($caption)){
								echo wpautop($caption[0]);
							}
						?>
					</div>
				</div>
				<div class="neve-child-nowrap" id="main-container">
					<?php do_action( 'neve_do_sidebar', 'single-page', 'left' ); ?>
					<div class="nv-single-page-wrap col-sm-8 col-12">
						<div class="nv-content-wrap">
							grid area
						</div>
					</div>
					<div class="nv-sidebar-wrap col-sm-4 col-12 nv-right blog-sidebar" id="page-content">
						<?php
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content', 'pagebuilder' );
							}
						?>
					</div>
				</div>
		</div>
<?php get_footer();	?>
