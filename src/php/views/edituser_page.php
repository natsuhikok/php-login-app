<?php
function print_edituser_page($values, $messages) {
  require_once('views/print_header.php');
  require_once('views/print_head.php');
  $title = 'Edit user info | PHP LOGIN APP';

  // values
  $email_value = $values['email'];
  $name_value = $values['name'];

  // messages
  $email_msg = isset($messages['email']) ? $messages['email'] : '';
  $name_msg = isset($messages['name']) ? $messages['name'] : '';

  // input class
  $email_css = empty($email_msg) ? '' : 'error';
  $name_css = empty($name_msg) ? '' : 'error';

?>

<html>
  <?php print_head($title); ?>
  <body>
    <?php print_header(); ?>
    <form action method="post">
      <div>
        <label for="email">
          Email
          <span><?php echo $email_msg; ?></span>
        </label>
        <input class="<?php echo $email_css; ?>" type="text" name="email" value="<?php echo $email_value; ?>">
      </div>
      <div>
        <label for="name">Name<span><?php echo $name_msg; ?></span></label>
        <input class="<?php echo $name_css; ?>" id="name" type="text" name="name" value="<?php echo $name_value; ?>">
      </div>
      <input type="submit" value="edit">
    </form>
  </body>
</html>

<?php
}
?>
