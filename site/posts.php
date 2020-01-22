<?php session_start();?>
<html lang="fr">
<?php include_once'head.php' ?>

<body class="bg-secondary">
    <?php 
require_once '../common/post.php';
?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="text-center my-3"> Bonjour <?= $_SESSION['username'] . ' ' . $_SESSION['pseudo'];?></h1>
        </div>
        <div class="col-2 d-flex align-items-end">
            <form action="./login.php" method="POST">
                <button type="submit" name="deleteUser" class="btn btn-primary">Supprimer mon compte</button>
            </form>
        </div>
    </div>
</div>
   


    <div class="text-center my-3">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // The request is using the POST method
                    if (isset($_POST['change'])){
                        change_post($_POST['id'],$_POST['title'],$_POST['body']); 
                    } else {
                        set_post($_POST['titre'],$_POST['body']); 
                    }
                
                }
                $array = get_posts("/data/posts.json");
                $myvar = 0;
                foreach ($array as $value){ ?>
                                <div class="alert alert-success" role="alert">
                                    <a class="alert-link" href="http://localhost/php-start12/site/postpage.php?id=<?php echo $myvar ?>">
                                        <h3><?= $value['title']; ?> </h3>
                                    </a>
                                </div>
                <?php 
                $myvar++;
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center py-3">
                <?php if($_SESSION['is_admin']){ ?>
                <a class="btn btn-light" href="http://localhost/php-start12/site/interfaceadmin.php">Interface administrateur</a>
                <?php } ?>
            </div>
        </div>
    </div>
    
</body>

</html>