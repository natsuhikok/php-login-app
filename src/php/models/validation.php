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
        $messages[$key] = validate_email($values[$key]);
        break;
    case 'password':
        $messages[$key] = validate_password($values[$key]);
        break;
    case 'old_password':
        $messages[$key] = validate_password($values[$key]);
        $messages[$key] = check_password($values[$key]);
        break;
    case 'new_password':
        $messages[$key] = validate_password($values[$key]);
        break;
    case 'name':
        $messages[$key] = validate_name($values[$key]);
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



function validate_email($v) {
  if (strlen($v) < 3) {
    return 'enter vaild email';
  }
}

function validate_password($v) {
  if (strlen($v) < 6) {
    return 'password should be atleast 6 characters.';
  }
}

function validate_name($v) {
  if (strlen($v) < 2) {
    return 'name should be atleast 2 characters.';
  }
}

require_once('db/connect.php');
function check_password($v) {
  // connect or return
  $db = connect();
  if ($db -> connect_error) return 'server error.';

  $ID = $_SESSION['editing_id'];
  // find email from database
  $sql = "SELECT * FROM user WHERE ID = '$ID'";

  if ($result = $db -> query($sql)) {
    if ($row = $result -> fetch_assoc()) {
      // verify password
      if (password_verify($v, $row['PASSWORD'])) {
        return;
      }
    }
  }
  return 'passoword is not correct.';
}
