<?php
/**
 * @package WordPress
 * @subpackage RAB_Theme
 */
 
/* Template Name: Archive; */
get_header();
?>

<div id="single_page">
	<?php if (have_posts()) : ?>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("posts_per_page=3&post_type=post&paged=$paged"); ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<div class="post" style="padding: 30px 0 20px 0; border-bottom: 5px solid #D0ECF2;">
				<?php the_title('<h3>', '</h3>'); ?>
				<div class="clear"></div>
				<div class="content">
					<?php the_content(); ?>
				</div><!--.content-->
				
				<div class="clear"></div>
			</div><!--.post-->
	
		<?php endwhile; ?>
			<div class="navigation" style="padding-top:20px;">
				<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
				<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
			</div>
		<?php endif; ?>
		
</div>

<div class="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
		|| !dynamic_sidebar('news_posts') ) : ?>
	<?php endif; ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>