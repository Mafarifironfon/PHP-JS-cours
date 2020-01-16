<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
    <?php
    require_once '../../common/post.php';
    $title="Liste des posts";
    
    include_once './../components/head.php';
    ?>

    <body>
        <!-- RECUPERE L ID ENVOYE PAR LE FICHIER POSTS - METHODE GET -->
        <?php $post_id=$_GET["id"];?>
        <div class="container">
            <div class="row fond border">
                <div class="col-12 filtreGreen">
                    <h1>Post n°<?=$post_id+1?></h1>
                </div>
                
                <div class="col-12 filtreGreen">
                    <?php $post = get_post($post_id);?>
                    <h3><?= $post["title"]?></h3>
                    <p><?= $post["body"]?></p>
                </div>
                
                <div class="col-12 d-flex  align-items-center justify-content-around filtreGreen">
                    <a href="./postpage.php?id=<?= $post_id > 0 ? $post_id - 1:$post_id;?>" class="btn btn-outline-primary">Précédent</a>
                    <a href="./posts.php" class="btn btn-outline-primary">Retour</a>
                    <a href="./postpage.php?id=<?= $post_id < $_SESSION['sizeListPost']-1 ? $post_id + 1:$post_id;?>" class="btn btn-outline-primary">Suivant</a>
                </div>
            </div>
        </div>
        <?php include_once './../components/bootstrap.php'; ?>
  </body>
</html>
