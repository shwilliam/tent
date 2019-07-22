<!-- public view -->

<?php if ($tel) : ?>
  <a class="contact-info__wrapper contact-info__wrapper--link" href="<?= $tel; ?>">
    <i class="fa fa-phone contact-info__icon" aria-label="Phone"></i>

    <span class="contact-info__content">
      <?= $tel; ?>
    </span>
  </a>
<?php endif; ?>

<?php if (strlen(trim($email)) > 0) : ?>
  <a class="contact-info__wrapper contact-info__wrapper--link" href="<?= $email; ?>">
    <i class="fa fa-envelope contact-info__icon" aria-label="Email"></i>

    <span class="contact-info__content">
      <?= $email; ?>
    </span>
  </a>
<?php endif; ?>

<?php if (strlen(trim($address)) > 0) : ?>
  <div class="contact-info__wrapper flex">
    <i class="fa fa-map-marker contact-info__icon" aria-label="Address"></i>

    <span class="contact-info__content">
      <div>
        <?= $address; ?>
      </div>
      <div>
        <?= $address_2; ?>
      </div>
    </span>
  </div>
<?php endif; ?>
