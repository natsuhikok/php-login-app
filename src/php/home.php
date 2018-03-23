<?php
session_start();
if (isset($_SESSION['message'])) {
  print $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
