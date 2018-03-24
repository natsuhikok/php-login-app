<?php
function print_register_page($values, $messages) {
  // page title
  require_once('views/head.php');
  $title = 'Register | PHP LOGIN APP';
  
  // values
  $email_value = $values['email'];
  $pwd_value = $values['password'];
  $name_value = $values['name'];

  // messages
  $email_msg = isset($messages['email']) ? $messages['email'] : '';
  $pwd_msg = isset($messages['password']) ? $messages['password'] : '';
  $name_msg = isset($messages['name']) ? $messages['name'] : '';

  // input class
  $email_css = empty($email_msg) ? '' : 'error';
  $pwd_css = empty($pwd_msg) ? '' : 'error';
  $name_css = empty($name_msg) ? '' : 'error';
?>

<html>
  <?php print_head($title); ?>
  <body>
    <h1>Register</h1>
    <form action method="post">
      <div>
        <label for="email">
          Email
          <span><?php echo $email_msg; ?></span>
        </label>
        <input class="<?php echo $email_css; ?>" type="text" name="email" value="<?php echo $email_value; ?>">
      </div>
      <div>
        <label for="password">Password<span><?php echo $pwd_msg; ?></span></label>
        <input class="<?php echo $pwd_css; ?>" id="password" type="password" name="password" value="<?php echo $pwd_value; ?>">
      </div>
      <div>
        <label for="name">Name<span><?php echo $name_msg; ?></span></label>
        <input class="<?php echo $name_css; ?>" id="name" type="text" name="name" value="<?php echo $name_value; ?>">
      </div>
      <input type="submit" value="sign up" name="signup">
    </form>
    <a href="./">login</a>
  </body>
</html>

<?php } ?>
