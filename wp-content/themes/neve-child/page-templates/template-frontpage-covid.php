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
				<?php
					$caption = get_post_custom_values( $key = 'Caption');
					if (!empty($caption)){
						echo wpautop($caption[0]);
					}
				?>
			</div>
		</div>
		<div class="container single-page-container">
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', 'pagebuilder' );
		}
	?>
	<div class="wp-block-group">
		<h1>Recent Blog Posts</h1>
		<ul>
			<?php
			// Define our WP Query Parameters
			$the_query = new WP_Query( 'posts_per_page=3' ); ?>


			<?php
			// Start our WP Query
			while ($the_query -> have_posts()) : $the_query -> the_post();
			// Display the Post Title with Hyperlink
			?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

			<span class="nv-meta-list">
				<li class="meta date posted-on"><?php the_date(); ?></li>
			</span>

			<li><?php
			// Display the Post Excerpt
			the_excerpt(); ?></li>

			<?php
			// Repeat the process and reset once it hits the limit
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
	</div>
	<?php
		get_footer();
	?>
	</div>
</div>
