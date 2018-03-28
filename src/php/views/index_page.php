<?php
function print_index_page($values, $messages) {
  // page title
  require_once('views/print_head.php');
  require_once('views/print_header.php');
  require_once('views/print_form_email.php');
  $title = 'Login | PHP LOGIN APP';

  // values
  $email_value = $values['email'];
  $pwd_value = $values['password'];

  // messages
  $email_msg = isset($messages['email']) ? $messages['email'] : '';
  $pwd_msg = isset($messages['password']) ? $messages['password'] : '';

  // input class
  $pwd_css = empty($pwd_msg) ? '' : 'error';
?>
<html>
  <?php print_head($title); ?>
  <body>
    <div class="l-wrapper loginBackground">
      <?php print_header(); ?>
      <div class="loginBox">
        <h1 class="loginBox--headline">PHP LOGIN APP</h1>
        <form class="loginBox--form" action method="post">
          <?php print_form_email($email_value, $email_msg); ?>
          <div class="input">
            <label class="input--label" for="password">Password<span><?php echo $pwd_msg; ?></span></label>
            <input class="<?php echo $pwd_css; ?>" id="password" type="password" name="password" value="<?php echo $pwd_value; ?>">
          </div>
          <div class="loginBox--form--btn">
            <input class="btn" type="submit" value="sign in" name="signin">
          </div>
        </form>
        <div class="loginBox--link">
          <a href="./register.php">register</a>
        </div>
      </div>
      <?php include('views/print_footer.php'); ?>
    </div>
  </body>
</html>

<?php } ?>
