<?php
////////////////////////////////////////
// index
// find_user_by_id
// find_user_by_email
////////////////////////////////////////

require_once('db/connect.php');

// with $password: verify password
function find_user_by_email($email, $password = false) {
  // connect or return
  $db = connect();
  if ($db -> connect_error) return;

  // find email from database
  $sql = "SELECT * FROM user WHERE EMAIL = '$email'";

  if ($result = $db -> query($sql)) {
    if ($row = $result -> fetch_assoc()) {
      // verify password
      if (!$password) return $row;
      if (password_verify($password, $row['PASSWORD'])) {
        return $row;
      }
    }
  }
  // otherwise
  $_SESSION['message'] = 'email or password is wrong.';
  return false;
}

function find_user_by_id($id) {
  // connect or return
  $db = connect();
  if ($db -> connect_error) return;

  // find email from database
  $sql = "SELECT * FROM user WHERE id = '$id'";

  if ($result = $db -> query($sql)) {
    return $row = $result -> fetch_assoc();
  }
  return false;
}
