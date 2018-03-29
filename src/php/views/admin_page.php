<?php
function print_admin_page($user_list) {
  require_once('views/print_header.php');
  require_once('views/print_head.php');
  $title = 'Admin | PHP LOGIN APP';
?>

<html>
  <?php print_head($title); ?>
  <body>
    <div class="l-wrapper">
      <?php print_header(); ?>
      <div class="l-table">
        <table class="table">
          <tr class="table--heads">
            <th>ID</th>
            <th>AVATOR</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLL</th>
            <th>ACTION</th>
          </tr>
          <?php foreach($user_list as $user) { ?>
            <tr class="table--data">
              <td class="table--data--id"><?php echo $user['ID']; ?></td>
              <td class="table--data--image">
                <img src="./assets/images/0<?php echo $user['AVATOR']; ?>.png" alt="">
              </td>
              <td class="table--data--name"><?php echo $user['NAME']; ?></td>
              <td class="table--data--email"><?php echo $user['EMAIL']; ?></td>
              <?php if($user['ROLL'] == 'admin') { ?>
                <td class="table--data--roll table--data--roll_admin"><?php echo $user['ROLL']; ?></td>
              <?php } else { ?>
                <td class="table--data--roll table--data--roll_user"><?php echo $user['ROLL']; ?></td>
              <?php } ?>
              <td class="table--data--action">
                <form class="" action="" onsubmit="return confirmDeleteUser();" method="post">
                  <input type="hidden" name="delete" value="<?php echo $user['ID']; ?>">
                  <input type="submit" value="delete">
                </form>
                <form class="" action="edituser.php" method="post">
                  <input type="hidden" name="edit" value="<?php echo $user['ID']; ?>">
                  <input type="submit" value="edit">
                </form>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
      <?php include('views/print_footer.php'); ?>
    </div>
    <script src="./assets/bundle.js" type="text/javascript"></script>
  </body>
</html>

<?php
}
?>
