<?php 
/*
YARPP Template: Sidebar
Author: Leonid Lezner
Description: Template used for the sidebar
*/
?>
<?php if (have_posts()): ?>

<div class="sidebar-box">
	<div class="sidebar-box-headline">
		<h3><?php echo __('Related posts', 'leonidlezner') ?></h3>
	</div>
	<div class="sidebar-box-body">
		<ul class="posts-list-small">
			<?php while (have_posts()) : the_post(); ?>
			<li>
				<div class="post-thumbnail">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('large'); ?></a>
				</div>
				
				<h4 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
				
				<?php the_excerpt(); ?>
				
				<?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); ?>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<?php else: ?>
<?php endif; ?>
