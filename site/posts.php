<html lang="fr">
    <!-- HEAD -->
    <?php
    $title="Web 1.0 | Posts";
    include_once 'head.php';
    ?>

<body>
    <h1>Liste des posts</h1>
<?php 
require_once '../common/post.php';
?>
<ul>
<?php 
$array = get_posts();
$myvar = 0;
foreach ($array as $value){ ?>
    <li>
    <a href="postpage.php?id=<?= $myvar ?>" >
    <h3>hello<?= $value['title']; ?></h3></a>  
    </li>
    
<?php 
$myvar++;
} ?>
</ul>

<?php include_once 'bootstrap.php'; ?>
</body>
</html>