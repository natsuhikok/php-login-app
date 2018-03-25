<?php
function set_login_session($session, $data) {
  $session['roll'] = $data['ROLL'];
  $session['name'] = $data['NAME'];
  $session['id'] = $data['ID'];
  $session['avator'] = $data['AVATOR'];
  return $session;
};
?>
