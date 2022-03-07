<?php
$PrimaryPost = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 1,
));
?>
<?php if ($PrimaryPost->have_posts()) : ?>
    <?php while ($PrimaryPost->have_posts()) :
        $PrimaryPost->the_post(); ?>
    <main>
        <div class="app-card-primary">
            <div class="app-card-primary__container">
                <div class="app-card-primary__images">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image-post">
                    </a>
                    <div class="app-card-primary__background">
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15, ' ...'); ?></a>
                    </h3>
<!--                    <p class="card-text">--><?php //echo wp_trim_words(get_the_content(), 60, ' ...'); ?><!--</p>-->
                    </div>
                </div>
            </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    </div>
    <div class="flex">
    <?php
    $SecondaryPost = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'offset'         => 1,
        'order'          => 'meta_value',
        'meta_query'     => array(
            'key'     => 'entry_views',
            'compare' => "=",
        )));
    ?>
    <?php if ($SecondaryPost->have_posts()) : ?>
        <?php while ($SecondaryPost->have_posts()) : $SecondaryPost->the_post(); ?>
            <div class="app-card-secondary">
                <div class="app-card-secondary__container">
                    <div class="app-card-secondary__images">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image-post">
                        </a>
                    </div>
                    <div class="app-card-secondary__box">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10, ' ...'); ?></a>
                        </h3>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?></p>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
        <div class="flex">
        <div class="category">
            <div class="category-informasi">
                <h1><?php echo get_cat_name( $category_id = 5 ); ?></h1>
                <hr>
                <?php
                $CategoryBerita = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5,
                    'cat'            => 5,
                ));
                ?>
                <?php
                while ($CategoryBerita->have_posts()) : $CategoryBerita->the_post();
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

    </main>