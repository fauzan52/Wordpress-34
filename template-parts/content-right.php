<div class="latestpost">
    <div class="app-card-one">
        <h1>LATEST POST</h1>
        <hr>
        <?php
        $latestpost = new WP_Query('posts_per_page=6'); ?>
        <?php
        while ($latestpost->have_posts()) : $latestpost->the_post();
            ?>
            <h3>
                <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
            </h3>
        <?php
        endwhile;
        wp_reset_postdata();
                ?>

        </div>
    </div>
</div>