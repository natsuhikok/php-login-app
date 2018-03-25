<?php
session_start();
ini_set( 'display_errors', 1 );
require_once('models/redirect.php');
redirect_if_not('none');

// variables & functions
$values['email'] = '';
$values['password'] = '';
$validate_messages = [];
$validation = false;

require_once('models/validation.php');
require_once('models/find_user.php');
require_once('models/set_login_session.php');
require_once('views/index_page.php');
require_once('views/session_message.php');


// $_POST have something then validate
if ($_POST) {
  list($values, $validate_messages, $validation) = validation($values);
}

// all validation is pass then try to login
if ($validation) {
  $user_data = find_user_by_email($values['email'], $values['password']);
  if ($user_data) {
    // set SESSIONS
    $_SESSION = set_login_session($_SESSION, $user_data);
    $_SESSION['message'] = 'login success.';
    header("Location: home.php");
    exit;
  }
}

// print page
print_index_page($values, $validate_messages);

// print and unset session message
print_session_message();
