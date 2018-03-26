<?php
function print_register_page($values, $messages) {
  // page title
  require_once('views/print_head.php');
  require_once('views/print_form_avator.php');
  require_once('views/print_form_email.php');
  require_once('views/print_form_name.php');

  $title = 'Register | PHP LOGIN APP';

  // values
  $email_value = $values['email'];
  $pwd_value = $values['password'];
  $name_value = $values['name'];
  $avator_value = $values['avator'];

  // messages
  $email_msg = isset($messages['email']) ? $messages['email'] : '';
  $pwd_msg = isset($messages['password']) ? $messages['password'] : '';
  $name_msg = isset($messages['name']) ? $messages['name'] : '';

  // input class
  $pwd_css = empty($pwd_msg) ? '' : 'error';
?>

<html>
  <?php print_head($title); ?>
  <body>
    <div class="l-wrapper">
      <h1 class="headline">Register</h1>
      <div class="l-contents">
        <form action method="post">
          <?php print_form_email($email_value, $email_msg); ?>
          <div class="input">
            <label class="input--label" for="password">password<span><?php echo $pwd_msg; ?></span></label>
            <input class="<?php echo $pwd_css; ?>" id="password" type="password" name="password" value="<?php echo $pwd_value; ?>">
          </div>
          <?php print_form_name($name_value, $name_msg); ?>
          <?php print_form_avator($avator_value); ?>
          <div class="l-center l-margin">
            <input class="btn" type="submit" value="sign up" name="signup">
          </div>
        </form>
        <div class="l-center l-margin">
          <a href="./">login</a>
        </div>
      </div>
      <?php include('views/print_footer.php'); ?>
    </div>
  </body>
</html>

<?php } ?>
