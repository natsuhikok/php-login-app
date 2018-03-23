<?php
// variables
$page_title = 'Register | User Management Demo';
$values['email'] = '';
$values['password'] = '';
$values['name'] = '';
$validate_messages['email'] = '';
$validate_messages['password'] = '';
$validate_messages['name'] = '';
$validation;

require_once('views/register_page.php');
require_once('models/validation.php');
require_once('models/add_user.php');


// $_POST have something then validate
if ($_POST) {
  list($values, $validate_messages, $validation) = validation($values);
}

// all validation is pass then add user into database
if (isset($validation) && $validation) {
  if(add_user($values)) {
    // add session[name & roll & message]
    $_SESSION['name'] = $values['name'];
    $_SESSION['message'] = 'wellcome, '.$values['name'].'!';
    $_SESSION['roll'] = 'user';
    // redirect to home
    header("Location: home.php");
  }
}
// print page
print_register_page($values, $validate_messages, $page_title);

// unset session message
print $_SESSION['message'];
unset($_SESSION['message']);
