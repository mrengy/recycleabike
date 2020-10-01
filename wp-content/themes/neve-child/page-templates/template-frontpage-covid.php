<?php
/**
 * Template Name: RAB Covid Front Page
 */

get_header();
?>
<div class="covid-frontpage">
	<div class="content-wrapper">
		<div class="relative">
			<div class="featured-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
			<div class="caption">
				<p>Recycle-a-Bike is a non-profit community bike shop in Providence, RI.</p>
				<p>Our mission is educating, empowering, and building community by connecting people and bicycles.</p>
			</div>
		</div>
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
