<div class="whitebg mt-3">
    <h5 class="pl-2">autorzy</h5>
    <div class="d-flex flex-column p-2 authors">
        <?php
        $args['has_published_posts'] = true;
        $args = array('exclude' => array(1));
        $users = get_users( $args );
        foreach ($users as $user)
        {
            ?>
            <a href="<?php bloginfo('url'); ?>/blog/author/<?php echo $user->nickname; ?>">
                <?php
                $avtarimg = scrapeImage(get_wp_user_avatar(get_the_author_meta('ID', $user->ID )));
                ?>
                <img src="<?php echo $avtarimg; ?>" alt="<?php echo $user->first_name; ?> <?php echo $user->last_name; ?>" class="rounded-circle my-2 author">
                <?php echo $user->first_name; ?> <?php echo $user->last_name; ?>
            </a>
            <?php
        } ?>
    </div>
</div>

<div class="whitebg">
    <h5 class="pl-2">tagi</h5>
    <div class="p-2 tags">
        <?php $tags = wp_tag_cloud( 'smallest=12&largest=18&unit=px&number=45&orderby=count&order=RAND' ); ?>
    </div>
</div>

<div class="whitebg">
<h5 class="pl-2">podobne posty</h5>
<!-- similar posts -->
<div class="similar-posts">

        <?php
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);

        if ($tags) {
            $tag_ids = array();
            foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args = array(
                'tag__in' => $tag_ids,
                'post__not_in' => array($post->ID),
                'posts_per_page' => 3, // Number of related posts to display.
                'caller_get_posts' => 1
            );

            $my_query = new wp_query($args);

            while ($my_query->have_posts()) {
                $my_query->the_post();
                ?>

                <?php if ( has_post_thumbnail() ) { ?>
                    <?php $image = get_the_post_thumbnail_url(); ?>
                <?php } else { ?>
                    <?php $image = get_template_directory_uri() . '/img/blog-header.jpg'; ?>
                <?php } ?>

                <div class="mt-4 card">
                    <article class="d-flex flex-column post-card h-100">
                        <a href="<?php the_permalink(); ?>">
                           <img src="<?php echo $image; ?>" alt="" class="img-fluid" />
                        </a>
                        <div class="h-100 d-flex flex-column justify-content-between">
                            <div>
                                <a href="<?php the_permalink(); ?>">
                                    <header>
                                        <h5><?php the_title(); ?></h5>
                                    </header>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

            <?php }
        }
        $post = $orig_post;
        wp_reset_query();
        ?>

    </div>
</div>


<div class="whitebg">
<h5 class="pl-2">archiwum</h5>
<div class="pl-2">
    <ul class="widget-archive">
        <?php
        global $wpdb;
        $limit = 0;
        $year_prev = null;
        $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,  YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
        foreach($months as $month) :
            $year_current = $month->year;
            if ($year_current != $year_prev){
                if ($year_prev != null){?>

                <?php } ?>

                <!--                    <li class="archive-year"><a href="--><?php //bloginfo('url') ?><!--/blog/--><?php //echo $month->year; ?><!--/">--><?php //echo $month->year; ?><!--</a></li>-->

            <?php } ?>
            <li><a href="<?php bloginfo('url') ?>/blog/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span><?php echo $month->year; ?> (<?php echo $month->post_count; ?>)</a></li>

            <?php $year_prev = $year_current;

            if(++$limit >= 18) { break; }

        endforeach; ?>
    </ul>
</div>
</div>