<?php if (isset($errors) && is_array($errors) && count($errors) > 0) : ?>
  <div class="msg">
    <?php foreach ($errors as $error) : ?>
      <span><?php echo $error ?></span>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
