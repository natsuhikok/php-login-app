<?php
require_once('db/connect.php');

function get_user_list() {
  // connect or return
  $db = connect();
  if ($db -> connect_error) return;

  // find email from database
  $sql = "SELECT * FROM user LIMIT 100";

  if ($result = $db -> query($sql)) {
    $user_list = [];
    while ($user = $result -> fetch_assoc()) {
      $user_list[] = $user;
    }
    return $user_list;
  }
  // otherwise
  $_SESSION['message'] = 'email or password is wrong.';
  return false;
}
