<?php
function add_user($values) {
  // connect or return
  require_once('db/connect.php');
  $db = connect();
  if ($db -> connect_error) return;

  // define insert data and SQL
  $EMAIL = $values['email'];
  $NAME = $values['name'];
  $PASSWORD = password_hash($values['password'], PASSWORD_DEFAULT);
  $AVATOR = 1;

  $sql = "INSERT INTO user (EMAIL, NAME, PASSWORD, AVATOR) VALUES ('$EMAIL', '$NAME', '$PASSWORD', '$AVATOR')";

  // execute !!!
  if ($db -> query($sql)) {
    return true;
  } else {
    // if error while execution, add error message
    $_SESSION['message'] = $db -> error;
    return false;
  }
}
?>
