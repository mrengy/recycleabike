<?php
/**
 * @package WordPress
 * @subpackage RAB_Theme
 */
get_header();
?>

<ul id="seperator" class="main">
	<?php 
		query_posts( array( 'post_type' => 'seperator', 'orderby' => menu_order, 'order' => 'ASC' ));
		if (have_posts()) : while (have_posts()) : the_post(); 
	?>
		
		<?php $slug = basename(get_permalink()); //get the post's slug for navigation ?>
	
		<li class="<?php echo $slug; ?>">
			<a href="#<?php echo $slug; ?>" title="">
				<?php 
					$attr = array('title'	=> '');
					the_post_thumbnail('large', $attr); 
				?>
				<div class="floater">
					<?php the_title('<h3>', '</h3>'); ?>
					<?php the_content(); ?>					
				</div><!--.floater-->
				
			</a>
		</li>
		
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</ul><!--#seperator-->

<div id="whats-new" class="post">
	<div class="newsletter">
		<?php rewind_posts();
			query_posts( array( 'showposts' => 1 ));
			if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php 
				$attr = array('title'	=> '');
				the_post_thumbnail(array(210, 210), $attr); 
			?>
		
			<div class="content">
				<h4><a href="<?php the_permalink(); ?>">What's New This Month:</a></h4>
				
				<?php the_excerpt(); ?>
				
				<a href="<?php the_permalink(); ?>">Continue reading&rarr;</a>
				
				<p class="social_buttons">
					<span style="margin-right: 3px;float: left;">Share this: </span>
					<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
					
					<iframe src="http://www.facebook.com/plugins/like.php?app_id=219957031362415&amp;href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
					
				</p><!--.social_buttons-->
			</div><!--.content-->		
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<div class="clear"></div>
	</div><!--.newsletter-->
	
	<div class="mailchimp special">
		<?php dynamic_sidebar('mailchimp'); ?>
	</div><!--.special-->
		
	<div class="clear"></div>
	
	
	
</div><!--.post-->

<?php rewind_posts();
	query_posts( array( 'post_type' => 'page', 'orderby' => menu_order, 'order' => 'ASC',  'showposts' => -1, 'post__not_in' => array(121) ));
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php $slug = basename(get_permalink()); //get the post's slug for navigation?>
	
	<div id="<?php echo $slug; ?>" class="post">
		<?php the_title('<h3>', '</h3>'); ?>
		
		<div class="clear"></div>
		
		<div class="content">
			<?php the_content(); ?>
		</div><!--.content-->
		
		<div class="clear"></div>
		
		<p class="post_nav"><a href="#header">Back to top</a></p>
		
		<div class="clear"></div>
	</div><!--.post-->
	
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>