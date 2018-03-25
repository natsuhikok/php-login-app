<?php
session_start();
ini_set( 'display_errors', 1 );
require_once('models/redirect.php');
require_once('models/find_user.php');
require_once('models/set_login_session.php');
redirect_if_not('none');

// variables
$values['email'] = '';
$values['password'] = '';
$values['name'] = '';
$values['avator'] = '1';
$validate_messages = [];
$validation = false;

require_once('views/register_page.php');
require_once('views/session_message.php');
require_once('models/validation.php');
require_once('models/add_user.php');

// $_POST have something then validate
if ($_POST) {
  list($values, $validate_messages, $validation) = validation($values);
}

// all validation is pass then add user into database
if ($validation) {
  if (add_user($values)) {
    if ($user_data = find_user_by_email($values['email'])) {
      // set SESSIONS
      $_SESSION = set_login_session($_SESSION, $user_data);
      $_SESSION['message'] = 'login success.';
      header("Location: home.php");
      exit;
    }
  }
}

// print page
print_register_page($values, $validate_messages);
// print and unset session message
print_session_message();
