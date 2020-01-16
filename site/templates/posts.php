<?php
session_start();
$_SESSION['sizeListPost'] = 0; 
?>

<!DOCTYPE html>
<html lang="fr">
    <!-- HEAD -->
    <?php
    $title="Web 1.0 | Posts";
    include_once './../components/head.php';
    require_once './../../common/post.php';
    ?>

    <body>
        <div class="container">
            <div class="row border fond">
                <div class="col-12 filtreRed">
                   <h1>Liste des posts</h1> 
                </div>
                <div class="col-12 filtreRed">
                    <ul>
                        <?php 
                        $array = get_posts();
                        $myvar = 0;
                        foreach ($array as $value){ ?>
                            <li>
                                <a href="./postpage.php?id=<?php echo $myvar; ?>" >
                                <h3><?= $value['title']; ?></h3></a>  
                            </li>
                        <?php 
                        $myvar++;
                        }
                        $_SESSION['sizeListPost'] = $myvar;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php include_once './../components/bootstrap.php'; ?>
    </body>
</html>