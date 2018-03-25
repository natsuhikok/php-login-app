<?php
function print_header() {

?>

<header>
  <p>
    <img src="./assets/images/0<?php print $_SESSION['avator']; ?>.png" alt="">
    <?php print $_SESSION['name']; ?>
  </p>
  <nav>
    <ul>
      <li>
        <a href="./home.php">home</a>
      </li>
      <li>
        <form class="" action="edituser.php" method="post">
          <input type="hidden" name="edit" value="<?php echo $_SESSION['id']; ?>">
          <input type="submit" value="edit profile">
        </form>
      </li>
      <?php if($_SESSION['roll'] == 'admin') {?>
      <li>
        <a href="./admin.php">admin panel</a>
      </li>
      <?php }; ?>
      <li>
        <a href="./logout.php">logout</a>
      </li>
    </ul>
  </nav>
</header>

<?php }; ?>
