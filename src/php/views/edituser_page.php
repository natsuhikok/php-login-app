<?php
function print_edituser_page($values, $values_password, $messages) {
  require_once('views/print_header.php');
  require_once('views/print_head.php');
  $title = 'Edit user info | PHP LOGIN APP';

  // values
  $email_value = $values['email'];
  $name_value = $values['name'];
  $roll_value = $values['roll'];
  $avator_value = $values['avator'];
  $new_password = $values_password['new_password'];
  $old_password = $values_password['old_password'];

  // messages
  $email_msg = isset($messages['email']) ? $messages['email'] : '';
  $name_msg = isset($messages['name']) ? $messages['name'] : '';
  $new_password_msg = isset($messages['new_password']) ? $messages['new_password'] : '';
  $old_password_msg = isset($messages['old_password']) ? $messages['old_password'] : '';

  // input class
  $email_css = empty($email_msg) ? '' : 'error';
  $name_css = empty($name_msg) ? '' : 'error';
  $new_password_css = empty($new_password_msg) ? '' : 'error';
  $old_password_css = empty($old_password_msg) ? '' : 'error';
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
      <?php
        require_once('views/print_form_avator.php');
        print_form_avator($avator_value);
      ?>
      <?php if ($_SESSION['roll'] == 'admin') { ?>
      <div>
        <input id="roll-admin" type="radio" name="roll" value="admin" <?php if($roll_value == 'admin') echo 'checked'; ?>>
        <label for="roll-admin">Admin</label>
        <input id="roll-user" type="radio" name="roll" value="user" <?php if($roll_value == 'user') echo 'checked'; ?>>
        <label for="roll-user">User</label>
      </div>
      <?php } ?>
      <input type="submit" value="edit">
    </form>
    <form action method="post">
      <div>
        <label for="old_password">
          password
          <span><?php echo $old_password_msg; ?></span>
        </label>
        <input class="<?php echo $old_password_css; ?>" type="password" name="old_password" value="<?php echo $old_password; ?>">
      </div>
      <div>
        <label for="new_password">
          new password
          <span><?php echo $new_password_msg; ?></span>
        </label>
        <input class="<?php echo $new_password_css; ?>" type="password" name="new_password" value="<?php echo $new_password; ?>">
      </div>
      <input type="submit" value="change password">
    </form>
  </body>
</html>

<?php
}
?>
