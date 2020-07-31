
        
        <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
        
        <?php the_excerpt(); ?>
        
        <?php echo '<a href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'leonidlezner') . '</a>'; ?>
