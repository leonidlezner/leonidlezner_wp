<div class="post-card"> 
    <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
    
    <div class="post-meta">
        <small><?php the_date('d.m.Y'); ?></small>
        <small><?php the_category(', '); ?></small>
    </div>

    <?php the_excerpt(); ?>

    <?php echo '<a href="' . get_permalink(get_the_ID()) . '" class="read-more button">' . __('Read More', 'leonidlezner') . '</a>'; ?>
</div>