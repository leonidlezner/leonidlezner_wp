<form action="<?php echo home_url('/'); ?>" method="get">
    <input name="s" value="<?php the_search_query(); ?>" type="search" placeholder="<?php _e('Search', 'leonidlezner'); ?>" aria-label="<?php _e('Search', 'leonidlezner'); ?>">
    
    <button type="submit" class="search-button">
        <span><?php echo __('Search', 'leonidlezner'); ?></span>
    </button>
</form>