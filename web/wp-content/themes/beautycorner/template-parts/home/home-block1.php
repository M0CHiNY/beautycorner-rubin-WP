<?php if ($slider1 = get_field('home__slider-1', get_the_ID())): ?>
    <section class="slider-plugin">
        <?php echo do_shortcode($slider1); ?>
    </section>
<?php endif; ?>