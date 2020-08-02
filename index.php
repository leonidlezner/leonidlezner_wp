<?php get_header(); ?>

<?php
/*
if (have_posts())
{
    while (have_posts())
    {
        the_post();
        get_template_part('template-parts/content', 'post-card');
    }
} 
else
{
    get_template_part('template-parts/content', 'none');
}*/
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 side-menu">
            <section class="nav-sidebar">
                <div class="branding">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_image_url('brand/logo.svg'); ?>" /></a>
                        <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name');?></a></p>
                    </div>
                </div>
                <div class="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'main-menu'
                    ));
                    ?>
                </div>
            </section>
        </div>

        <div class="col main-content">
            <section class="main-content-inner">
            
            <?php
            if (have_posts())
            {
                while (have_posts())
                {
                    the_post();
                    get_template_part('template-parts/content', 'post-card');
                }
            } 
            else
            {
                get_template_part('template-parts/content', 'none');
            }
            ?>

            </section>
        </div>

        <div class="col-3 sidebar">
            Sidebar
        </div>
    </div>
</div>


<?php get_footer(); ?>