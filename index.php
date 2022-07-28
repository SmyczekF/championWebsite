<?php get_header(); ?>

<section class="w-100">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-header.jpg" class="img-fluid" alt="Blog" />
</section>

<section class="container blog-posts">
   <div class="row">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <div class="col-12 col-md-4">
           <div class="card mb-4 shadow-sm">
               <?php if ( has_post_thumbnail() ) { ?>
                   <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" />
               <?php } else { ?>
                   <img src="<?php echo get_template_directory_uri(); ?>/img/blog-header.jpg" class="img-fluid" alt="<?php the_title_attribute(); ?>" />
               <?php } ?>
               <div class="card-body">
                   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <h2><?php the_title(); ?></h2>
                   </a>
                   <p class="card-text"><?php the_excerpt(); ?></p>
               </div>
           </div>


       </div>
       <?php endwhile; else: ?>
           <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
       <?php endif; ?>
   </div>
</section>

<?php get_footer(); ?>
