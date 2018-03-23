<?php
session_start();
ini_set( 'display_errors', 1 );
// variables
$values['email'] = '';
$values['password'] = '';
$values['name'] = '';
$validate_messages = [];
$validation = false;

require_once('views/register_page.php');
require_once('models/validation.php');
require_once('models/add_user.php');

// $_POST have something then validate
if ($_POST) {
  list($values, $validate_messages, $validation) = validation($values);
}

// all validation is pass then add user into database
if ($validation) {
  if (add_user($values)) {
    // add session[name & roll & message]
    $_SESSION['name'] = $values['name'];
    $_SESSION['message'] = 'wellcome, '.$values['name'].'!';
    $_SESSION['roll'] = 'user';
    // redirect to home
    header("Location: home.php");
    exit;
  }
}

// print page
print_register_page($values, $validate_messages);

// print and unset session message
if (isset($_SESSION['message'])) {
  print $_SESSION['message'];
  unset($_SESSION['message']);
}
