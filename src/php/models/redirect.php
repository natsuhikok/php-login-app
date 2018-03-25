<?php
// rolls none/user/admin
function redirect_if_not($roll) {
  switch ($roll) {
    case 'none':
      if (isset($_SESSION['roll'])) {
        header("Location: home.php");
        exit;
      }
      break;
    case 'user':
      if (!isset($_SESSION['roll'])) {
        header("Location: index.php");
        exit;
      }
      break;
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
