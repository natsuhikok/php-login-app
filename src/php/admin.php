<?php
session_start();
require_once('models/redirect.php');
redirect_if_not('admin');

require_once('views/session_message.php');
print_session_message();
