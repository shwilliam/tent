<!-- public view -->

<?php if ($tel) : ?>
  <a class="contact-info__wrapper contact-info__wrapper--link" href="tel:<?= $tel; ?>">
    <i class="fa fa-phone contact-info__icon" aria-label="Phone"></i>

    <span class="contact-info__content">
      <?= $tel; ?>
    </span>
  </a>
<?php endif; ?>

<?php if (strlen(trim($email)) > 0) : ?>
  <a class="contact-info__wrapper contact-info__wrapper--link" href="mailto:<?= $email; ?>">
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

<?php if (strlen(trim($fb)) > 0 || strlen(trim($twitter)) > 0 || strlen(trim($google)) > 0) : ?>
  <div class="contact-info__social flex">
    <?php if (strlen(trim($fb)) > 0) : ?>
      <a
        class="contact-info__social-item"
        href="<?= $fb; ?>"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa fa-facebook-square contact-info__icon" aria-label="Facebook"></i>
      </a>
    <?php endif; ?>
    <?php if (strlen(trim($twitter)) > 0) : ?>
      <a
        class="contact-info__social-item"
        href="<?= $twitter; ?>"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa fa-twitter-square contact-info__icon" aria-label="Twitter"></i>
      </a>
    <?php endif; ?>
    <?php if (strlen(trim($google)) > 0) : ?>
      <a
        class="contact-info__social-item"
        href="<?= $google; ?>"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i class="fa fa-google-plus-square contact-info__icon" aria-label="Google plus"></i>
      </a>
    <?php endif; ?>
  </div>
<?php endif; ?>
