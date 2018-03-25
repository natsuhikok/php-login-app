<?php
function print_home_page() {
  require_once('views/print_header.php');
  require_once('views/print_head.php');
  $title = 'Home | PHP LOGIN APP';
?>

<html>
  <?php print_head($title); ?>
  <body>
    <?php print_header(); ?>
  </body>
</html>

<?php
}
?>
