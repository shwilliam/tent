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
    <label for="<?= $this->get_field_id('tel'); ?>">
      Phone number:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('tel'); ?>"
      name="<?= $this->get_field_name('tel'); ?>"
      type="tel"
      value="<?= $tel; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('email'); ?>">
      E-mail:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('email'); ?>"
      name="<?= $this->get_field_name('email'); ?>"
      type="email"
      value="<?= $email; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('address'); ?>">
      Address:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('address'); ?>"
      name="<?= $this->get_field_name('address'); ?>"
      type="text"
      value="<?= $address; ?>"
    >
    <input
      class="widefat"
      id="<?= $this->get_field_id('address_2'); ?>"
      name="<?= $this->get_field_name('address_2'); ?>"
      type="text"
      value="<?= $address_2; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('fb'); ?>">
      Facebook:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('fb'); ?>"
      name="<?= $this->get_field_name('fb'); ?>"
      type="url"
      value="<?= $fb; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('twitter'); ?>">
      Twitter:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('twitter'); ?>"
      name="<?= $this->get_field_name('twitter'); ?>"
      type="url"
      value="<?= $twitter; ?>"
    >
  </p>

  <p>
    <label for="<?= $this->get_field_id('google'); ?>">
      Google:
    </label>
    
    <input
      class="widefat"
      id="<?= $this->get_field_id('google'); ?>"
      name="<?= $this->get_field_name('google'); ?>"
      type="url"
      value="<?= $google; ?>"
    >
  </p>
</div>
