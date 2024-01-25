<?php

/**
 * Template name: contacts template
 */

get_header();

?>
<?php if ($slider = get_field('banner', get_the_ID())) : ?>
  <section class="slider-plugin">
    <?php echo do_shortcode($slider); ?>
  </section>
<?php endif; ?>
<section class="section contact">
  <div class="container">
    <h2 class="contact__title title"><?php the_title(); ?></h2>
    <div class="contact__wrapper">
      <div class="contact__inner-form">
        <div class="contact__form-box">

          <!-- block form start -->
          <?php get_template_part('template-parts/contacts/contact', 'form'); ?>
          <!-- block form end -->
        </div>
      </div>
      <!-- block address start -->
      <?php get_template_part('template-parts/contacts/contact', 'address'); ?>
      <!-- block address end -->
    </div>
  </div>
</section>

<section class="home-serteficates">
  <div class="container">

    <!-- block map start -->
    <?php get_template_part('template-parts/map'); ?>
    <!-- block map end -->
    
  </div>
</section>

<!-- section with block start -->
<?php get_template_part('template-parts/schedule'); ?>
<!-- section with block end -->

<?php


get_footer();
?>