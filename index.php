<?php get_header(); ?>

<?php wp_enqueue_style('landing'); ?>
<?php get_template_part('landing'); ?>

<?php wp_enqueue_style('services'); ?>
<?php get_template_part('services'); ?>

<?php wp_enqueue_style('where'); ?>
<?php get_template_part('where'); ?>

<?php wp_enqueue_style('portfolio-display'); ?>
<?php get_template_part('portfolio-display'); ?>

<?php get_footer(); ?>
