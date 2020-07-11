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
			<div class="social_buttons">
				<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				
				<iframe src="http://www.facebook.com/plugins/like.php?app_id=219957031362415&amp;href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
			</div><!--.social_buttons-->
			<div class="clear"></div>
			<?php the_title('<h3>', '</h3>'); ?>
			<div class="clear"></div>
			
			<div class="content">
				<?php the_content(); ?>
			</div><!--.content-->
			
			
			<div class="clear"></div>
			
			
			<!--<p class="post_nav">
				<a href="#header">Back to top</a> | <a href="<?php bloginfo('url'); ?>">Back to home</a>
			</p>-->
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