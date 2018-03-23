<?php
require_once('views/form.php');
require_once('views/head.php');
function print_register_page($values, $messages) {
?>
<html>
  <?php print_head('Register | User Management Demo'); ?>
  <body>
    <h1>Register your hero.</h1>
    <?php print_full_form($values, $messages); ?>
  </body>
</html>
<?php
}
?>
