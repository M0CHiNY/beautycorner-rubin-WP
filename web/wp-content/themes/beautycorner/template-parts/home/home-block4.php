<section class="section home-services">
    <div class="container">
        <?php if ($title = get_field('block4-title', get_the_ID())): ?>
            <h2 class="home-services__title title">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>
        <?php if ($lists = get_field('liste_der_produkte', get_the_ID())): ?>
            <div class="services__items">
                <?php foreach ($lists as $list): ?>
                    <div class="services__item">
                        <?php if ($img = $list['Image']): ?>
                            <img class="services__item-img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        <?php endif; ?>
                        <?php if ($categoriesName = $list['main_category']): ?>
                            <div class="services__title">
                                <?php echo $categoriesName; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($subCategories = $list['sub-categories']): ?>
                            <ul class="services__sublist">
                                <?php foreach ($subCategories as $subcategorie): ?>
                                    <?php if ($subcategorie['name'] && $subcategorie['link']): ?>
                                        <li>
                                            <a href="<?php echo $subcategorie['link']; ?>">
                                                <?php echo $subcategorie['name']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>