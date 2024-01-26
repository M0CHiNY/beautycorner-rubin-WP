<?php

/**
 * Template name: about template
 */
get_header();
?>

<?php if ($slider = get_field('about__slider', get_the_ID())) : ?>
  <section class="slider-plugin">
    <?php echo do_shortcode($slider); ?>
  </section>
<?php endif; ?>

<section class="section about">
  <div class="container">
    <?php if (get_field('about__author')) : ?>
      <h2 class="about__title title"><?php echo get_field('about__author', get_the_ID()) ?></h2>
    <?php endif; ?>
    <?php
    $image = get_field('about__img-author', get_the_ID());
    ?>
    <?php if ($image['url']) : ?>
      <img class="about__author" src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
    <?php endif; ?>
    <?php if (get_field('about__title')) : ?>
      <h3 class="about__caption"><?php echo get_field('about__title', get_the_ID()) ?></h3>
    <?php endif; ?>
    <?php if (get_field('about__text')) : ?>
      <p class="about__descr">
        <?php echo get_field('about__text', get_the_ID()) ?>
      </p>
    <?php endif; ?>
  </div>
</section>

<section class="career">
  <div class="container">
    <div class="career__bg">
      <?php if (get_field('about__career-title')) : ?>
        <h2 class="career__title"><?php echo get_field('about__career-title', get_the_ID()) ?></h2>
      <?php endif; ?>
      <div class="career__inner">

        <?php
        if (have_rows('about__list-first')) :
          while (have_rows('about__list-first')) : the_row();
        ?>
            <ul class="career__list">
              <?php
              if (have_rows('about__list-second')) :
                while (have_rows('about__list-second')) : the_row();
              ?>
                  <li class="career__item"><?php echo get_sub_field('about__event', get_the_ID()); ?></li>
              <?php
                endwhile;
              endif;
              ?>
            </ul>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>