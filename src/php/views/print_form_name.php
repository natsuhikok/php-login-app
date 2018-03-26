<?php
function print_form_name($value, $message) {
  $css = empty($message) ? '' : 'error';
?>

<div class="input">
  <label class="input--label" for="name">name<span><?php echo $message; ?></span></label>
  <input class="<?php echo $css; ?>" id="name" type="text" name="name" value="<?php echo $value; ?>">
</div>

<?php
}
?>
