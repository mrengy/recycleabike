<?php
/**
 * @package WordPress
 * @subpackage RAB_Theme
 */
get_header();
?>

<div id="single_page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post">
			<?php the_title('<h3 style="margin-top: 40px;">', '</h3>'); ?>
			<div class="clear"></div>
			<div class="content">
				<?php the_content(); ?>
				<?php wp_get_newsletters('type=alpha'); ?>
			</div><!--.content-->
			
			<div class="clear"></div>
			<p class="post_nav"><a href="#header">Back to top</a></p>
		</div><!--.post-->
		
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
		
</div>

<div class="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
		|| !dynamic_sidebar('news_posts') ) : ?>
	<?php endif; ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>