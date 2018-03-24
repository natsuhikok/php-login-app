<?php
function login($values) {
  // connect or return
  require_once('db/connect.php');
  $db = connect();
  if ($db -> connect_error) return;

  // find email from database
  $EMAIL = $values['email'];
  $sql = "SELECT * FROM user WHERE EMAIL = '$EMAIL'";

  if ($result = $db -> query($sql)) {
    // verify password
    if ($row = $result -> fetch_assoc()) {
      if (password_verify($values['password'], $row['PASSWORD'])) {
        return $row;
      }
    }
  }
  // otherwise
  $_SESSION['message'] = 'email or password is wrong.';
  return false;
}
?>
