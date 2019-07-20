<!-- public view -->

<?php if (strlen(trim($monday_friday)) > 0) : ?>
  <p class="business-hours__wrapper">
    <span id="business-hours__week" class="business-hours__label">
      Monday-Friday:
    </span> 

    <time
      aria-labelledby="business-hours__week"
      class="business-hours__time"
    >
      <?= $monday_friday; ?>
    </time>
  </p>

  <p class="business-hours__wrapper">
    <span id="business-hours__sat" class="business-hours__label">
      Saturday:
    </span> 

    <time
      aria-labelledby="business-hours__sat"
      class="business-hours__time"
    >
      <?= $saturday; ?>
    </time>
  </p>


  <p class="business-hours__wrapper">
    <span id="business-hours__sun" class="business-hours__label">
      Sunday:
    </span> 

    <time
      aria-labelledby="business-hours__sun"
      class="business-hours__time"
    >
      <?= $sunday; ?>
    </time>
  </p>
<?php endif; ?>
