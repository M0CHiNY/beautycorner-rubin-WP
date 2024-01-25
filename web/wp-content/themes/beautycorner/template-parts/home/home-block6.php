<section class="section home-serteficates">
  <div class="container">
    <?php if ($title = get_field('block6-title', get_the_ID())) : ?>
      <h2 class="home-serteficates__title title">
        <?php echo $title; ?>
      </h2>
    <?php endif; ?>
    <?php if ($subtitle = get_field('block6-subtitle', get_the_ID())) : ?>
      <div class="home-serteficates__subtitle">
        <?php echo $subtitle; ?>
      </div>
    <?php endif; ?>
    <?php if ($content = get_field('block6-generaltext', get_the_ID())) : ?>
      <div class="home-serteficates_content">
        <?php echo $content; ?>
      </div>
    <?php endif; ?>
  
      <!-- block map start -->
      <?php get_template_part('template-parts/map'); ?>
      <!-- block map end -->
      
  </div>
</section>