<?php
session_start();
ini_set( 'display_errors', 1 );

// redirect if not authorized
require_once('models/redirect.php');
redirect_if_not('user');

// if not from form button redirect to admin or home
if (!$_POST) {
  header("Location: admin.php");
  exit;
}

// variables
$input_values['email'] = '';
$input_values['name'] = '';
$validate_messages = [];
$validation = false;

// set session for edit user page if first visit
if (isset($_POST['edit'])) {
  // get user data
  require_once('models/find_user.php');
  $user = find_user_by_id($_POST['edit']);
  $input_values['name'] = $user['NAME'];
  $input_values['email'] = $user['EMAIL'];
  $_SESSION['editing_id'] = $user['ID'];
}

// $_POST have something then validate
if (isset($_POST['name'])) {
  require_once('models/validation.php');
  list($input_values, $validate_messages, $validation) = validation($input_values);
}

if ($validation) {
  require_once('models/update_user.php');
  $result = update_user_info($input_values, $_SESSION['editing_id']);
  if ($result) {
    header("Location: admin.php");
    exit;
  }
}

// print page
require_once('views/edituser_page.php');
print_edituser_page($input_values, $validate_messages);

// print message
require_once('views/session_message.php');
print_session_message();
