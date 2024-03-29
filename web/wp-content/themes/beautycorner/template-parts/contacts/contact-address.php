<div class="contact__links">


  <?php if ($mails = get_field('ihre_e-mail_hinzufugen', 'options')) : ?>
    <?php foreach ($mails as $mail) : ?>
      <?php if ($mail['emaile']) : ?>
        <div class="contact__info">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px" height="27px" viewBox="0 0 27 27" version="1.1">
              <g id="surface1">
                <path style="
                        stroke: none;
                        fill-rule: nonzero;
                        fill: rgb(75.686275%, 4.313725%, 41.568627%);
                        fill-opacity: 1;
                      " d="M 5.625 18.867188 L 5.625 4.242188 L 24.75 4.242188 L 24.75 18.867188 Z M 15.1875 12.921875 L 6.75 6.6875 L 6.75 17.738281 L 23.625 17.738281 L 23.625 6.6875 Z M 15.1875 11.601562 L 23.625 5.363281 L 6.75 5.363281 Z M 2.25 22.238281 L 2.25 9.734375 L 3.375 9.734375 L 3.375 21.113281 L 20.683594 21.113281 L 20.683594 22.238281 Z M 2.25 22.238281 " />
              </g>
            </svg>
          </span>
          <a class="contact__link" href="mailto:<?php echo $mail['emaile']; ?>"><?php echo $mail['emaile']; ?></a>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>


  <?php if ($tels = get_field('telefone', 'options')) : ?>
    <?php foreach ($tels as $tel) : ?>
      <?php if ($tel['telefon_num']) : ?>
        <div class="contact__info">
          <span>
            <img src="<?php echo $tel['bildsymbol']['url'] ?>" alt="<?php echo $tel['bildsymbol']['alt'] ?>" />
          </span>
          <?php
          $telNum = $tel['telefon_num'];
          if (strpos($telNum, '+') === false) {
            $telNum = '+' . $telNum;
          }
          ?>
          <a class="contact__link" href="tel:<?php echo str_replace(' ', '', $telNum) ?>">
            <?php echo $tel['telefon_num']; ?>
          </a>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>
  <?php if ($address = get_field('adressen', 'options')) : ?>
    <?php foreach ($address as $info) : ?>
      <?php if ($info['adresse_der_unterkunft']) : ?>
        <address class="contact__info">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px" height="27px" viewBox="0 0 27 27" version="1.1">
              <g id="surface1">
                <path style="
                        stroke: none;
                        fill-rule: nonzero;
                        fill: rgb(75.686275%, 4.313725%, 41.568627%);
                        fill-opacity: 1;
                      " d="M 13.5 6.960938 C 12.707031 6.960938 11.933594 7.195312 11.273438 7.636719 C 10.613281 8.078125 10.101562 8.703125 9.796875 9.433594 C 9.492188 10.167969 9.414062 10.972656 9.570312 11.75 C 9.722656 12.527344 10.105469 13.242188 10.667969 13.800781 C 11.226562 14.363281 11.941406 14.746094 12.71875 14.898438 C 13.496094 15.054688 14.300781 14.976562 15.035156 14.671875 C 15.765625 14.367188 16.390625 13.855469 16.832031 13.195312 C 17.273438 12.535156 17.507812 11.761719 17.507812 10.96875 C 17.507812 9.90625 17.085938 8.886719 16.332031 8.136719 C 15.582031 7.382812 14.5625 6.960938 13.5 6.960938 Z M 13.5 13.710938 C 12.957031 13.710938 12.425781 13.550781 11.976562 13.25 C 11.527344 12.949219 11.175781 12.519531 10.964844 12.019531 C 10.757812 11.515625 10.703125 10.964844 10.808594 10.433594 C 10.917969 9.902344 11.175781 9.414062 11.5625 9.03125 C 11.945312 8.644531 12.433594 8.386719 12.964844 8.277344 C 13.496094 8.171875 14.046875 8.226562 14.550781 8.433594 C 15.050781 8.644531 15.480469 8.996094 15.78125 9.445312 C 16.082031 9.894531 16.242188 10.425781 16.242188 10.96875 C 16.242188 11.695312 15.953125 12.394531 15.4375 12.90625 C 14.925781 13.421875 14.226562 13.710938 13.5 13.710938 Z M 13.5 1.898438 C 11.09375 1.902344 8.789062 2.859375 7.089844 4.558594 C 5.390625 6.257812 4.433594 8.5625 4.429688 10.96875 C 4.429688 14.230469 5.941406 17.691406 8.804688 20.980469 C 10.09375 22.472656 11.546875 23.820312 13.136719 24.988281 C 13.242188 25.0625 13.371094 25.105469 13.5 25.105469 C 13.628906 25.105469 13.757812 25.0625 13.863281 24.988281 C 15.453125 23.820312 16.90625 22.472656 18.195312 20.980469 C 21.058594 17.691406 22.570312 14.230469 22.570312 10.96875 C 22.566406 8.5625 21.609375 6.257812 19.910156 4.558594 C 18.210938 2.859375 15.90625 1.902344 13.5 1.898438 Z M 13.5 23.679688 C 11.917969 22.457031 5.695312 17.257812 5.695312 10.96875 C 5.695312 8.898438 6.519531 6.914062 7.980469 5.449219 C 9.445312 3.988281 11.429688 3.164062 13.5 3.164062 C 15.570312 3.164062 17.554688 3.988281 19.019531 5.449219 C 20.480469 6.914062 21.304688 8.898438 21.304688 10.96875 C 21.304688 17.257812 15.082031 22.457031 13.5 23.679688 Z M 13.5 23.679688 " />
              </g>
            </svg>
          </span>
          <?php echo $info['name-of-salon']; ?><br>
          <?php echo $info['adresse_der_unterkunft']; ?>
        </address>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</div>