<div class="main-content-inner">
    <section class="main-content row">
        <div class="search-bar col-12">
            <?php get_template_part('template-parts/partial', 'search'); ?>
        </div>

        <?php if (isset($headline) && $headline): ?>
        <div class="results-headline col-12">
            <h1><?php echo $headline; ?></h1>
        </div>
        <?php endif; ?>

        <?php
        if (have_posts())
        {
            while (have_posts())
            {
                the_post();
                ?>
                <div class="col-12 col-xl-6">
                    <?php get_template_part('template-parts/content', 'post-card'); ?>
                </div>
                <?php
            }

            ?>
            <div class="col-12 posts-pagination">
                <?php
                echo get_the_posts_pagination(array(
                    'mid_size'=>3,
                    'prev_text' => __('Previous', 'leonidlezner'),
                    'next_text' => __('Next', 'leonidlezner'),
                ));
                ?>
            </div>
            <?php            
        }
        else
        {
            get_template_part('template-parts/content', 'none');
        }
        ?>
    </section>
</div>