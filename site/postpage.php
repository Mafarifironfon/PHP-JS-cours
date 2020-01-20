<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<?php include_once'head.php' ?>
<body>
  <?php 
  $post_id=$_GET["id"];
  require_once '../common/post.php';
  ?>
  <h1> Bonjour <?= $_SESSION['username'];?></h1>
  <?php
  $post = get_post ($post_id);?>
  <h3><?= $post["title"]?></h3>
  <p><?= $post["body"]?></p>
</body>
</html>
