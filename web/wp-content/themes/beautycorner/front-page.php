<?php
/**
 * Template name: Home template
 */

get_header();

?>

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block1'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block2'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block3'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block4'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block5'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block6'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/schedule'); ?>
<!-- section with block end -->

<!-- section with block start -->
<?php get_template_part('template-parts/home/home', 'block7'); ?>
<!-- section with block end -->






<section class="section home-contacts">
    <div class="container">
        <div class="home-contacts__title title">
            Kontakt
        </div>
        <div class="home-contacts__box">
            <a href="mailto:info@beautycorner-rubin.ch">info@beautycorner-rubin.ch</a>
            <a href="tel:+41712444448">Festnetz: +41 71 244 44 48</a>
            <a href="tel:+41782104444">Mobile: +41 78 210 44 44</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>