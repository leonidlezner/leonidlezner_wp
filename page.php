<?php get_header(); ?>

<div class="main-content-inner">
    <section class="main-content row">
        <div class="search-bar col-12">
            <?php get_template_part('template-parts/partial', 'search'); ?>
        </div>

        <?php
        if (have_posts())
        {
            while (have_posts())
            {
                the_post();
                get_template_part('template-parts/content', 'page');
            }
        }
        else
        {
            get_template_part('template-parts/content', 'none');
        }
        ?>
    </section>
</div>

<?php get_footer(); ?>