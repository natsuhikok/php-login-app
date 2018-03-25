<?php
function print_header() {

?>

<header>
  <p><?php print $_SESSION['name']; ?></p>
  <nav>
    <ul>
      <li>
        <a href="./logout.php">logout</a>
      </li>
      <li>
        <a href="./edituser.php">edituser</a>
      </li>
<?php if($_SESSION['roll'] == 'admin') {?>
      <li>
        <a href="./admin.php">admin panel</a>
      </li>
<?php }; ?>
    </ul>
  </nav>
</header>

<?php }; ?>
