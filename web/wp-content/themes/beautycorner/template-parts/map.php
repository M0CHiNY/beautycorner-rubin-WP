<div class="home-serteficates-maps">
  <?php if ($maps = get_field('karte', 'options')) : ?>
    <?php foreach ($maps as $map) : ?>
      <?php if ($map['iframe_code']) : ?>
        <div class="home-serteficates-map">
          <?php echo $map['iframe_code']; ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</div>