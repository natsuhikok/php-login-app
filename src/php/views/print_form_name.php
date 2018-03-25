<?php
function print_form_name($value, $message) {
  $css = empty($message) ? '' : 'error';
?>

<div>
  <label for="name">Name<span><?php echo $message; ?></span></label>
  <input class="<?php echo $css; ?>" id="name" type="text" name="name" value="<?php echo $value; ?>">
</div>

<?php
}
?>
