<?php get_header();?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if ( have_posts() ) :?>
            <?php while ( have_posts() ) : ?>
                <?php the_post();?>
                <h1><?php the_title();?></h1>
                <p>
                <?php the_content();?>
                </p>            
            <?php endwhile; ?>
        <?php else: ?>
            <h1>Sorry! No post found.</h1>
        <?php endif;?>

    </main>
</div>
<?php get_footer();?>