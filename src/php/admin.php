<?php
session_start();
ini_set( 'display_errors', 1 );
require_once('models/redirect.php');
redirect_if_not('admin');

// delete user if delete posted
if (isset($_POST['delete'])) {
  require_once('models/delete_user.php');
  delete_user_by_id($_POST['delete']);
}

// get user list
require_once('models/get_user_list.php');
$user_list = get_user_list();

// print page
require_once('views/admin_page.php');
print_admin_page($user_list);

require_once('views/session_message.php');
print_session_message();
