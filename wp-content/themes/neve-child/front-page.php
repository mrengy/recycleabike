<?php
/**
 * Template Name: front page with caption
 */

get_header();
?>
	<div class="content-wrapper container single-page-container ">
		<div class="row neve-child-wrap">
				<div id="featured-container">
					<?php //show slider if the plugin is active. Otherwise, show the featured image
					if ( function_exists( 'soliloquy' ) ){
					?>
						<div id="featured-image">
							<?php
								soliloquy( 'homepage-slider', 'slug' );
							?>
						</div>
					<?php
				  } else{
					?>
						<div id="featured-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
					<?php
					}
					?>
					<div id="featured-caption" class="col-md-10">
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
					<div class="col-md-10 col-12 nv-right blog-sidebar nv-content-wrap" id="page-content">
						<?php
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content', 'pagebuilder' );
							}
						?>
					</div>
					<div class="nv-single-page-wrap col-12">
						<div class="nv-content-wrap" id="homepage-grid-container">
							<a class="homepage-grid-item col-12" href="about" id="homepage-grid-about">
								<div class="grid-name-background col-6 col-sm-12">
									<div class="grid-name">
										About
									</div>
								</div>
							</a>
							<a class="homepage-grid-item col-12" href="friends" id="homepage-grid-friends">
								<div class="grid-name-background col-6 col-sm-12">
									<div class="grid-name">
										Friends
									</div>
								</div>
							</a>
							<a class="homepage-grid-item col-12" href="blog" id="homepage-grid-blog">
								<div class="grid-name-background col-6 col-sm-12">
									<div class="grid-name">
										Blog
									</div>
								</div>
							</a>
							<a class="homepage-grid-item col-12" href="donate" id="homepage-grid-donate">
								<div class="grid-name-background col-6 col-sm-12">
									<div class="grid-name">
										Donate
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
		</div>
<?php get_footer();	?>
