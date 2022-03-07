<?php get_header(); ?>
<body>
<main>
    <div class="single-page">
        <div class="single-page__image">
            <img src="<?php echo the_post_thumbnail(); ?>
        </div>
        <div class="single-page__title">
            <h1><b><?php echo get_the_title(); ?></b></h1>
        </div>
        <p><i>Created on <?php echo get_the_date(); ?> | <?php echo 'Category : ' . get_the_category($id)[0]->name . ' '; ?></i></p>
            <h5><?php echo the_content(); ?></h5>
            <br>
            <a href="/wordpress" class="btn btn-success">Back to Home</a>
        </div>
    <br>
</main>
<div class="clear">
    <?php get_footer(); ?>
</div>