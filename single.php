<?php get_header(); ?>

<div class="col">
    <div class="main-content-inner">
        <section class="main-content row">
            <?php
            if (have_posts())
            {
                while (have_posts())
                {
                    the_post();
                    ?>
                    <div class="col-12 col-xl-8">
                    <?php
                    get_template_part('template-parts/content', 'post');
                    ?>
                    </div>
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
</div>

<?php get_footer(); ?>