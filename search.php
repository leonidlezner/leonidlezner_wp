<?php get_header(); ?>

<?php set_query_var('headline', sprintf(__('Search for "%s"', 'leonidlezner'), get_search_query())); ?>
<?php get_template_part('template-parts/listing', 'standard'); ?>

<?php get_footer(); ?>