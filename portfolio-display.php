<div id="portfolio">
    <div class="container">
        <h1>Trabajos</h1>

        <div id="portfolio-content">
            <?php
            // Query para traer los ítems del CPT 'portfolio'
            $portfolio_query = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1
            ));

            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    $title = get_the_title();
                    $url = get_permalink();
            ?>
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <?php if ($thumbnail): ?>
                            <a href="<?php echo esc_url($url); ?>">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="portfolio-item-title">
                        <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($title); ?></a>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No hay trabajos cargados aún.</p>';
            endif;
            ?>
        </div>
    </div>
</div>