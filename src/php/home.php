<?php
session_start();
ini_set( 'display_errors', 1 );
require_once('models/redirect.php');
redirect_if_not('user');


// print page
require_once('views/home_page.php');
print_home_page();

require_once('views/session_message.php');
print_session_message();
