<?php
//////////////////////////////////////////////////////////
// Functions index
//////////////////////////////////////////////////////////
// * validation:
//    entry points
//    check inputs and call each validate functions
//
// * validate_email:
// * validate_password:
// * validate_name:
//////////////////////////////////////////////////////////
function validation($values) {
  foreach($values as $key => $gomi) {
    // set values in form inputs
    $values[$key] = $_POST[$key];
    //initialize messages
    $messages[$key] = '';

    // genarate validate messages
    switch ($key) {
    case 'email':
        $messages[$key] = validate_email();
        break;
    case 'password':
        $messages[$key] = validate_password();
        break;
    case 'name':
        $messages[$key] = validate_name();
        break;
    }
  }
  // get validation falg
  $validation = true;
  foreach ($messages as $message) {
    if ($message != '') $validation = false;
  }
  return [$values, $messages, $validation];
}



function validate_email() {
  if (strlen($_POST['email']) < 3) {
    return 'enter vaild email';
  }
}

function validate_password() {
  if (strlen($_POST['password']) < 6) {
    return 'password should be atleast 6 characters.';
  }
}

function validate_name() {
  if (strlen($_POST['name']) < 2) {
    return 'name should be atleast 2 characters.';
  }
}
