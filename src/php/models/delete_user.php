<?php
require_once('db/connect.php');

function delete_user_by_id($id) {
  // connect or return
  $db = connect();
  if ($db -> connect_error) return;

  // delete user by id
  $sql = "DELETE FROM user WHERE id = '$id'";
  $db -> query($sql);
}
