<?php
  function connect() {
    // get config
    require('db/secret.php');

    // connect database
    $db = new mysqli(
      $config['host'],
      $config['user'],
      $config['pass'],
      $config['name']
    );
    // Add session message if Error
    if ($db -> connect_error) {
      $_SESSION['message'] = $db -> connect_error;
    }
    // Return connected databse
    return $db;
  }
?>
