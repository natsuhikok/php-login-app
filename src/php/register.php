<?php
// print error
ini_set( 'display_errors', 1 );
// view
require_once('views/register_page.php');
// models
require_once('models/validation.php');

// variables
$values['email'] = '';
$values['password'] = '';
$values['name'] = '';
$messages['email'] = '';
$messages['password'] = '';
$messages['name'] = '';

// $_POST have something then do validation
if ($_POST) list($values, $messages, $validation) = validation($values);

// all validation is pass then access to database
if (isset($validation) && $validation) {
  // function register_user();
}
// print page
print_register_page($values, $messages);
