<?php
require_once('views/form.php');
require_once('views/head.php');
function print_register_page($values, $messages, $title) {
?>

<html>
  <?php print_head($title); ?>
  <body>
    <h1>Register</h1>
    <?php print_full_form($values, $messages); ?>
  </body>
</html>

<?php } ?>
