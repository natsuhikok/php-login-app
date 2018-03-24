<?php
function print_session_message() {
  if (isset($_SESSION['message'])) {
    print "session message: {$_SESSION['message']}";
    unset($_SESSION['message']);
  }
};
