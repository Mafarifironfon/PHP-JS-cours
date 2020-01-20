<?php session_start();?>
<html lang="fr">
<?php include_once'head.php' ?>
<body>
<?php 
require_once '../common/post.php';
?>
<h1> Bonjour <?= $_SESSION['username'] . ' ' . $_SESSION['pseudo'];?></h1>
<ul>
<?php 
$array = get_posts();
$myvar = 0;
foreach ($array as $value){ ?>
    <li>
    <a href="http://localhost/php-start12/site/postpage.php?id=<?php echo $myvar ?>" >
    <h3> hello<?= $value['title']; ?> </h3></a>  
    </li>
    
<?php 
$myvar++;
} ?>
</ul>

</body>
</html>