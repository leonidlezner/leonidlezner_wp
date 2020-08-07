<?php get_header(); ?>

<?php set_query_var('headline', single_cat_title('', false)); ?>
<?php get_template_part('template-parts/listing', 'standard'); ?>

<?php get_footer(); ?>