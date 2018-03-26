<?php

function print_form_avator($value) {
  $avators = 8;
  $i = 1;
?>

<div class="inputAvators">
  <span class="inputAvators--label">
    avator
  </span>
  <?php while ($i <= $avators) { ?>
    <input class="inputAvators--avator" id="avator-0<?php echo $i ?>" type="radio" name="avator" value="<?php echo $i ?>" <?php if($value ==  strval($i)) echo 'checked'; ?>>
    <label for="avator-0<?php echo $i ?>">
      <img src="./assets/images/0<?php echo $i ?>.png" alt="">
    </label>
  <?php $i++; } ?>
</div>

<?php
}
