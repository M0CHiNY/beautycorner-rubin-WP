<?php if ($slider = get_field('home__slider-7', get_the_ID())): ?>
    <section class="slider-plugin">
        <?php echo do_shortcode($slider); ?>
    </section>
<?php endif; ?>