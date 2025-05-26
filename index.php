<?php get_header(); ?>

<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>No se encontraron entradas.</p>
  <?php endif; ?>


</main>

<?php wp_enqueue_style('portfolio-display'); ?>
<?php get_template_part('portfolio-display'); ?>

<?php get_footer(); ?>
