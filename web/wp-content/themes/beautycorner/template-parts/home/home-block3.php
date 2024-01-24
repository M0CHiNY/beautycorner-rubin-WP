<?php if ($slider = get_field('block-3', get_the_ID())): ?>
    <section class="slider-plugin">
        <?php echo do_shortcode($slider); ?>
    </section>
<?php endif; ?>