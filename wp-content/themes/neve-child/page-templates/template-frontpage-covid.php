<?php
/**
 * Template Name: RAB Covid Front Page
 */

get_header();
?>
<div class="covid-frontpage">
	<div class="wrapper">
		<div class="featured-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
		<div class="container">
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', 'pagebuilder' );
		}
	?>
		</div>
	<?php
		get_footer();
	?>
	</div>
</div>
