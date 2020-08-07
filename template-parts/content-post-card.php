<div class="post-card">
    <div class="thumbnail">
        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="image-link"><?php the_post_thumbnail(); ?></a>
    </div>

    <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
    
    <div class="post-meta">
        <small><?php echo __('At', 'leonidlezner') . ' ' . get_the_date('d.m.Y'); ?></small> <small><?php echo __('in', 'leonidlezner') . ' '; the_category(', '); ?></small>
    </div>

    <?php the_excerpt(); ?>

    <?php /*echo '<a href="' . get_permalink(get_the_ID()) . '" class="read-more button">' . __('Read More', 'leonidlezner') . '</a>';*/ ?>
</div>