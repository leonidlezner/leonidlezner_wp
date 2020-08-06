<?php get_header(); ?>

<div class="main-content-inner">
    <section class="main-content row">
        <?php
        if (have_posts())
        {
            while (have_posts())
            {
                the_post();
                ?>
                <?php
                get_template_part('template-parts/content', 'post');
                ?>
                <?php
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