<?php get_header(); ?>

<section class="w-100 single-header">
    <?php if ( has_post_thumbnail() ) { ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" />
    <?php } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/blog-header.jpg" alt="<?php the_title_attribute(); ?>" />
    <?php } ?>
</section>

<section class="container single">
    <div class="row">

            <div class="col-12 col-md-9 content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card mb-4 shadow-sm">
                        <h1><?php the_title(); ?></h1>
                    <div class="px-3">
                        <?php the_excerpt(); ?>
                    </div>
                </div>

                <?php endwhile; else: ?>
                    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
                <?php endif; ?>

            </div>

        <div class="col-12 col-md-3">
            <?php get_sidebar('right'); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
