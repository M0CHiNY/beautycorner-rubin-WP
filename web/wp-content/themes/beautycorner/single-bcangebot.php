<?php get_header(); ?>

<?php if ($slider = get_field('block_mit_slider_revolution', get_the_ID())): ?>
    <section class="slider-plugin">
        <?php echo do_shortcode($slider); ?>
    </section>
<?php endif; ?>

<section class="section beauty-block">
    <div class="container">
        <?php if ($img = get_field('top-bild', get_the_ID())): ?>
            <img class="beauty-block__icon" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
        <?php endif; ?>
        <h2 class="beauty-block__title title">
            <?php the_title(); ?>
        </h2>
        <div class="beauty-block__wrap">
            <div class="beauty-block__sidebar">
                <div class="beauty-block__first">
                    <?php if (
                        $title = get_field('title', get_the_ID())
                    ): ?>
                        <h3 class="beauty-block__caption">
                            <?php echo $title; ?>
                        </h3>
                    <?php endif; ?>
                    <div class="beauty-block__content">
                        <?php echo get_field('services__detale_content', get_the_ID()); ?>
                    </div>
                    <?php ?>
                </div>
                <?php if ($img = get_field('bottom-bild', get_the_ID())): ?>
                    <img class="beauty-block__img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
                    <?php if (!empty($img['caption'])): ?>
                        <div class="beauty-block__img-caption">
                            <?php echo $img['caption']; ?>
                        </div>
                    <?php endif ?>
                <?php endif; ?>
            </div>
            <div class="beauty-block__content">
                <div class="beauty-block__content-box">
                    <?php echo get_field('general-content', get_the_ID()); ?>
                    <div class="beauty-block__link-box">
                        <?php if ($btns = get_field('schaltflache', get_the_ID())): ?>
                            <?php foreach ($btns as $btn): ?>
                                <a class="beauty-block__link" href="<?php echo $btn['link_of_button']; ?>">
                                    <?php echo $btn['name-btn']; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if ($files = get_field('files', get_the_ID())): ?>
                            <?php foreach ($files as $file): ?>
                                <a class="beauty-block__link beauty-block__link--pdf" href="<?php echo $file['datei_hochladen']['url']; ?>">
                                    <?php echo $file['name_of_files']; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($img = get_field('zusatzliches_bild', get_the_ID())): ?>
                    <img class="beauty-block__bottom-img" src="<?php echo $img['url']; ?>"
                        alt="<?php echo $img['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>