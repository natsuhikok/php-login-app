<?php
function print_index_page($values, $messages) {
  // page title
  require_once('views/head.php');
  $title = 'Login | PHP LOGIN APP';

  // values
  $email_value = $values['email'];
  $pwd_value = $values['password'];

  // messages
  $email_msg = isset($messages['email']) ? $messages['email'] : '';
  $pwd_msg = isset($messages['password']) ? $messages['password'] : '';

  // input class
  $email_css = empty($email_msg) ? '' : 'error';
  $pwd_css = empty($pwd_msg) ? '' : 'error';
?>
<html>
  <?php print_head($title); ?>
  <body>
    <h1>PHP LOGIN APP</h1>
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
      <input type="submit" value="sign in" name="signin">
    </form>
    <a href="./register.php">register</a>
  </body>
</html>

<?php } ?>
