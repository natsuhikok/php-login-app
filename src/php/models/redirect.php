<?php
// rolls none/user/admin
function redirect_if_not($roll) {
  switch ($roll) {
    // index, register
    case 'none':
      if (isset($_SESSION['roll'])) {
        header("Location: home.php");
        exit;
      }
      break;
    // home, edituser
    case 'user':
      if (!isset($_SESSION['roll'])) {
        header("Location: index.php");
        exit;
      }
      break;
    // admin
    case 'admin':
      if (!isset($_SESSION['roll'])) {
        header("Location: index.php");
        exit;
      } elseif ($_SESSION['roll'] != 'admin') {
        header("Location: home.php");
        exit;
      }
  }
}
?>
