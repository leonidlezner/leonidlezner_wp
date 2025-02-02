<div class="col-12 col-xl-8 content-column">
    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
        <?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); ?>
    </div>

    <div class="post">
        <?php the_title('<h1>', '</h1>'); ?>

        <div class="post-meta">
            <?php echo __('At', 'leonidlezner') . ' ' . get_the_date('d.m.Y'); ?> <?php echo __('in', 'leonidlezner') . ' '; the_category(', '); ?>
        </div>

        <?php the_content(); ?>
    </div>

    <?php if (comments_open() || get_comments_number()): ?>
        <div class="post-comments">
            <?php comments_template(); ?>
        </div>
    <?php endif; ?>
</div>

<div class="col-12 col-xl-4">
    <div class="search-sidebar">
        <?php get_template_part('template-parts/partial', 'search'); ?>
    </div>

    <?php related_posts(); wp_dequeue_style('yarppRelatedCss'); ?>  

</div>