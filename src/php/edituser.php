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

// set session for edit user page if first visit
if (isset($_POST['edit'])) {
  // get user data
  require_once('models/find_user.php');
  $user = find_user_by_id($_POST['edit']);
  $_SESSION['editing_name'] = $user['NAME'];
  $_SESSION['editing_email'] = $user['EMAIL'];
  $_SESSION['editing_id'] = $user['ID'];
}

// variables
$input_values['email'] = $_SESSION['editing_email'];
$input_values['name'] = $_SESSION['editing_name'];
$input_values_password['old_password'] = '';
$input_values_password['new_password'] = '';
$validate_messages = [];
$validation = false;

// $_POST have something then validate
require_once('models/validation.php');
// for profile
if (isset($_POST['name'])) {
  list($input_values, $validate_messages, $validation) = validation($input_values);
}
// for password
if (isset($_POST['new_password'])) {
  list(
    $input_values_password,
    $validate_messages,
    $validation
    ) = validation($input_values_password);
}

// update user if validation == true
if ($validation) {
  require_once('models/update_user.php');
  if (isset($_POST['name'])) {
    // update user info
    $result = update_user_info($input_values, $_SESSION['editing_id']);
  } else {
    // update user password
    $result = update_user_password($input_values_password['new_password'], $_SESSION['editing_id']);
  }
  // redirect if success
  if ($result) {
    header("Location: admin.php");
    exit;
  }
}

// print page
require_once('views/edituser_page.php');
print_edituser_page($input_values, $input_values_password, $validate_messages);

// print message
require_once('views/session_message.php');
print_session_message();
