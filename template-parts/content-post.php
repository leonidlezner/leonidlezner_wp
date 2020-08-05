<div class="post"> 
    <?php the_title('<h1><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>'); ?>
    <?php the_content(); ?>  
    <?php echo '<a href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'leonidlezner') . '</a>'; ?>
</div>