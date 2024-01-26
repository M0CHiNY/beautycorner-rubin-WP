<section class="section home-contacts">
    <div class="container">
        <?php if ($title = get_field('block-8-title', get_the_ID())): ?>
            <div class="home-contacts__title title">
                <?php echo $title; ?>
            </div>
        <?php endif; ?>
        <div class="home-contacts__box">
            <?php if ($email = get_field('email:', get_the_ID())): ?>
                <a href="mailto:<?php echo $email; ?>">
                    <?php echo $email; ?>
                </a>
            <?php endif; ?>

            <?php if ($phone = get_field('festnetz:', get_the_ID())): ?>
                <?php
                if (strpos($phone, '+') === false) {
                    $phone = '+' . $phone;
                } ?>
                <a href="tel:<?php echo str_replace(' ', '', $phone) ?>">
                    Festnetz:
                    <?php echo get_field('festnetz:', get_the_ID()); ?>
                </a>
            <?php endif; ?>


            <?php if ($tel = get_field('mobile:', get_the_ID())): ?>
                <?php
                if (strpos($tel, '+') === false) {
                    $tel = '+' . $tel;
                } ?>
                <a href="tel:<?php echo str_replace(' ', '', $tel) ?>">
                    Mobile
                    <?php echo get_field('mobile:', get_the_ID()); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>