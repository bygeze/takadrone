<?php get_header(); ?>

<div class="single-portfolio">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="portfolio-title"><?php the_title(); ?></h1>

            <?php
            // Thumbnail
            if (has_post_thumbnail()) {
                echo '<div class="portfolio-thumbnail">';
                the_post_thumbnail('large');
                echo '</div>';
            }

            // Descripción (campo personalizado de texto plano)
            $descripcion = get_post_meta(get_the_ID(), '_mi_portfolio_descripcion', true);
            if ($descripcion) {
                echo '<div class="portfolio-description"><p>' . esc_html($descripcion) . '</p></div>';
            }

            // Video (archivo adjunto)
            $video_id = get_post_meta(get_the_ID(), '_mi_portfolio_video_id', true);
            if ($video_id) {
                $video_url = wp_get_attachment_url($video_id);
                if ($video_url) {
                    echo '<div class="portfolio-video">';
                    echo '<video controls style="max-width:100%; height:auto;">';
                    echo '<source src="' . esc_url($video_url) . '" type="video/mp4">';
                    echo 'Tu navegador no soporta video HTML5.';
                    echo '</video>';
                    echo '</div>';
                }
            }
            ?>

        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>