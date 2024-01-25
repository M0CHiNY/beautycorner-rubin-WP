<ul class="contact__tab-head">
  <?php $count = 1; ?>
  <?php if ($formBtns = get_field('ein_anmeldeformular_hinzufugen_', get_the_ID())) : ?>
    <?php foreach ($formBtns as $formBtn) : ?>
        <li class="contact__tab <?php echo ($count === 1) ? ' tab-active' : '' ?>" data-tab="tab-<?php echo $count; ?>">
          <span>
            <img src="<?php echo $formBtn['bild_des_schalters']['url'] ?>" alt="<?php echo $formBtn['bild_des_schalters']['alt'] ?>" />
          </span>
          <?php echo $formBtn['formschalter']; ?>
        </li>

        <?php $count++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>
<div class="contact__tab-content">

  <?php $count = 1; ?>
  <?php if ($forms = get_field('ein_anmeldeformular_hinzufugen_', get_the_ID())) : ?>
    <?php foreach ($forms as $form) : ?>
        <div class="contact__form <?php echo ($count === 1) ? '' : ' hidden' ?>" data-tab-content id="tab-<?php echo $count; ?>">
          <?php echo do_shortcode($form["form"]); ?>
        </div>
        <?php $count++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</div>