<?php
function print_form_email($value, $message) {
  $css = empty($message) ? '' : 'error';
?>

<div class="input">
  <label class="input--label" for="email">
    <span><?php echo $message; ?></span>
    email
  </label>
  <input class="<?php echo $css; ?>" type="text" name="email" value="<?php echo $value; ?>">
</div>

<?php
}
?>
