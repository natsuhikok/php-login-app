<?php
function print_admin_page($user_list) {
  require_once('views/print_header.php');
  require_once('views/print_head.php');
  $title = 'Admin | PHP LOGIN APP';
?>

<html>
  <?php print_head($title); ?>
  <body>
    <?php print_header(); ?>
    <table>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ROLL</th>
        <th>ACTION</th>
      </tr>
      <?php foreach($user_list as $user) { ?>
        <tr>
          <td><?php echo $user['ID']; ?></td>
          <td><?php echo $user['NAME']; ?></td>
          <td><?php echo $user['EMAIL']; ?></td>
          <td><?php echo $user['ROLL']; ?></td>
          <td>
            <form class="" action="" method="post">
              <input type="hidden" name="delete" value="<?php echo $user['id']; ?>">
              <input type="submit" name="delete" value="delete">
            </form>
            <form class="" action="edituser.php" method="post">
              <input type="hidden" name="edit" value="<?php echo $user['id']; ?>">
              <input type="submit" name="edit" value="edit">
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>

<?php
}
?>
