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
require_once('models/login.php');
require_once('views/index_page.php');
require_once('views/session_message.php');


// $_POST have something then validate
if ($_POST) {
  list($values, $validate_messages, $validation) = validation($values);
}

// all validation is pass then try to login
if ($validation) {
  $data = login($values);
  if ($data) {
    // set SESSIONS
    $_SESSION['roll'] = $data['ROLL'];
    $_SESSION['name'] = $data['NAME'];
    $_SESSION['message'] = 'login success.';
    if ($data['ROLL'] == 'user') {
      // redirect to home
      header("Location: home.php");
    } else {
      // redirect to admin
      header("Location: admin.php");
    }
    exit;
  }
}

// print page
print_index_page($values, $validate_messages);

// print and unset session message
print_session_message();
