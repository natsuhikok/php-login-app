<?php
function print_session_message() {
  if (isset($_SESSION['message'])) {
    print "session message: {$_SESSION['message']}";
    unset($_SESSION['message']);
  }
?>
<a href="./logout.php">logout</a>
<?php
};
