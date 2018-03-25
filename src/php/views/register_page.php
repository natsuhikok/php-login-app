<?php
function print_register_page($values, $messages) {
  // page title
  require_once('views/print_head.php');
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
      <div>
        avator
        <input id="avator-01" type="radio" name="avator" value="1" <?php if($avator_value == '1') echo 'checked'; ?>>
        <label for="avator-01">
          <img src="./assets/images/01.png" alt="">
        </label>
        <input id="avator-02" type="radio" name="avator" value="2" <?php if($avator_value == '2') echo 'checked'; ?>>
        <label for="avator-02">
          <img src="./assets/images/02.png" alt="">
        </label>
        <input id="avator-03" type="radio" name="avator" value="3" <?php if($avator_value == '3') echo 'checked'; ?>>
        <label for="avator-03">
          <img src="./assets/images/03.png" alt="">
        </label>
        <input id="avator-04" type="radio" name="avator" value="4" <?php if($avator_value == '4') echo 'checked'; ?>>
        <label for="avator-04">
          <img src="./assets/images/04.png" alt="">
        </label>
        <input id="avator-05" type="radio" name="avator" value="5" <?php if($avator_value == '5') echo 'checked'; ?>>
        <label for="avator-05">
          <img src="./assets/images/05.png" alt="">
        </label>
        <input id="avator-06" type="radio" name="avator" value="6" <?php if($avator_value == '6') echo 'checked'; ?>>
        <label for="avator-06">
          <img src="./assets/images/06.png" alt="">
        </label>
        <input id="avator-07" type="radio" name="avator" value="7" <?php if($avator_value == '7') echo 'checked'; ?>>
        <label for="avator-07">
          <img src="./assets/images/07.png" alt="">
        </label>
        <input id="avator-08" type="radio" name="avator" value="8" <?php if($avator_value == '8') echo 'checked'; ?>>
        <label for="avator-08">
          <img src="./assets/images/08.png" alt="">
        </label>
      </div>
      <input type="submit" value="sign up" name="signup">
    </form>
    <a href="./">login</a>
  </body>
</html>

<?php } ?>
