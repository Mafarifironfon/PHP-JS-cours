<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php
    require_once '../common/post.php';
    $title="Liste des posts";
    include_once 'head.php';
    ?>

    <body>
        <!-- RECUPERE L ID ENVOYE PAR LE FICHIER POSTS - METHODE GET -->
        <?php $post_id=$_GET["id"];?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Post n° <?=$post_id?></h1>
                </div>
            </div>
        </div>
    
     
        <?php $post = get_post ($post_id);?>
        <h3><?= $post["title"]?></h3>
        <p><?= $post["body"]?></p>

        <?php include_once 'bootstrap.php'; ?>
  </body>
</html>
