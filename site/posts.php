<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site | Web 1.0</title>
</head>
<body>
<?php 
require_once '../common/post.php';
?>
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