<!-- admin view -->

<div class="widget-content">
  <p>
    <label for="<?= $this->get_field_id('title'); ?>">
      Title:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('title'); ?>"
      name="<?= $this->get_field_name('title'); ?>"
      type="text"
      value="<?= $title; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('monday_friday'); ?>">
      Monday to Friday:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('monday_friday'); ?>"
      name="<?= $this->get_field_name('monday_friday'); ?>"
      type="text"
      value="<?= $monday_friday; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('saturday'); ?>">
      Saturday:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('saturday'); ?>"
      name="<?= $this->get_field_name('saturday'); ?>"
      type="text"
      value="<?= $saturday; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('sunday'); ?>">
      Sunday:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('sunday'); ?>"
      name="<?= $this->get_field_name('sunday'); ?>"
      type="text"
      value="<?= $sunday; ?>"
    >
  </p>
</div>
