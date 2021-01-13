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
						<div class="nv-content-wrap" id="homepage-grid-container">
							<a class="homepage-grid-item col-12 col-sm-6" href="about" id="homepage-grid-about">
								<div class="grid-name-background col-6">
									<div class="grid-name">
										About
									</div>
								</div>
							</a>
							<a class="homepage-grid-item col-12 col-sm-6" href="friends" id="homepage-grid-friends">
								<div class="grid-name-background col-6">
									<div class="grid-name">
										Friends
									</div>
								</div>
							</a>
							<a class="homepage-grid-item col-12 col-sm-6" href="blog" id="homepage-grid-blog">
								<div class="grid-name-background col-6">
									<div class="grid-name">
										Blog
									</div>
								</div>
							</a>
							<a class="homepage-grid-item col-12 col-sm-6" href="donate" id="homepage-grid-donate">
								<div class="grid-name-background col-6">
									<div class="grid-name">
										Donate
									</div>
								</div>
							</a>
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
