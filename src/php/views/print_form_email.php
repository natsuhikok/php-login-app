<?php
function print_form_email($value, $message) {
  $css = empty($message) ? '' : 'error';
?>

<div>
  <label for="email">
    Email
    <span><?php echo $message; ?></span>
  </label>
  <input class="<?php echo $ecss; ?>" type="text" name="email" value="<?php echo $value; ?>">
</div>

<?php
}
?>
