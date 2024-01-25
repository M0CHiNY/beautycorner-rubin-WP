<?php

/**
 * Template name: Preise template
 */

get_header();

?>

<?php if ($slider = get_field('block_slider1', get_the_ID())): ?>
    <section class="slider-plugin">
        <?php echo do_shortcode($slider); ?>
    </section>
<?php endif; ?>

<section class="prices">
    <div class="container">
        <?php if ($subTitle = get_field('sub-title', get_the_ID())): ?>
            <h2 class="prices__title title">
                <?php echo $subTitle; ?>
            </h2>
        <?php endif; ?>
        <div class="prices__wrap" data-masonry='{ "itemSelector": ".prices__card", "columnWidth": 570 }'>
            <?php
            $postPricesArgs = array(
                'post_type' => 'bc-prices',
                'posts_per_page' => -1,
                'order' => 'ASC',
            );
            $PricesPost = new WP_Query($postPricesArgs);
            ?>

            <?php if ($PricesPost->have_posts()):
                while ($PricesPost->have_posts()):
                    $PricesPost->the_post();
                    ?>
                    <article class="prices__card">
                        <h2 class="prices__caption">
                            <?php the_title(); ?>
                        </h2>
                        <div class="prices__inner ">
                            <?php the_content(); ?>
                        </div>
                        <?php if (get_field('prices__btn-name', get_the_ID()) && get_field('prices__btn-link', get_the_ID())): ?>
                            <div class="prices__btn-box">
                                <a class="prices__btn" href="<?php echo get_field('prices__btn-link', get_the_ID()); ?>">
                                    <?php echo get_field('prices__btn-name', get_the_ID()); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else:
                echo 'No posts found.';
            endif;
            ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>