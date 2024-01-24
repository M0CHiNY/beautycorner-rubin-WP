<section class="section home-about">
    <div class="container">
        <?php if ($title = get_field('block2-title', get_the_ID())): ?>
            <h2 class="home-about-title title">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>
        <?php if ($subTitle = get_field('block2-subtitle', get_the_ID())): ?>
            <div class="home-about__sub-title">
                <?php echo $subTitle ?>
            </div>
        <?php endif; ?>
        <?php if ($ContanentTitle = get_field('block2-generaltext', get_the_ID())): ?>
            <div class="home-about__content">
                <?php echo $ContanentTitle; ?>
            <?php endif; ?>
        </div>
    </div>
</section>