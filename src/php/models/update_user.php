<?php
function update_user_info($values, $ID) {
  // connect or return
  require_once('db/connect.php');
  $db = connect();
  if ($db -> connect_error) return;

  // define insert data and SQL
  $EMAIL = $values['email'];
  $NAME = $values['name'];
  $ROLL = $values['roll'];
  $AVATOR = $values['avator'];
  $sql = "UPDATE user SET ROLL = '$ROLL', EMAIL = '$EMAIL', NAME = '$NAME', AVATOR = '$AVATOR' WHERE ID = '$ID';";

  // execute !!!
  if ($db -> query($sql)) {
    return true;
  } else {
    // if error while execution, add error message
    $_SESSION['message'] = $db -> error;
    return false;
  }
}

function update_user_password($new_password, $ID) {
  // connect or return
  require_once('db/connect.php');
  $db = connect();
  if ($db -> connect_error) return;

  // encrypt password
  $PASSWORD = password_hash($new_password, PASSWORD_DEFAULT);

  // define insert data and SQL
  $sql = "UPDATE user SET PASSWORD = '$PASSWORD' WHERE ID = '$ID';";

  // execute !!!
  if ($db -> query($sql)) {
    return true;
  } else {
    // if error while execution, add error message
    $_SESSION['message'] = $db -> error;
    return false;
  }
}
