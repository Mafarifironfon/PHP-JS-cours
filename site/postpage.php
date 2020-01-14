<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php 
  $post_id=$_GET["id"];
  require_once '../common/post.php';
  $post = get_post ($post_id);?>
  <h3><?= $post["title"]?></h3>
  <p><?= $post["body"]?></p>
</body>
</html>
