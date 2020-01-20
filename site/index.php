<?php session_start();
// phpinfo();
?>

<html lang="fr">
<?php include_once'head.php' ?>

<body>
    
    <form action="login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" value=""/>
        <label>Password</label>
        <input type="password" name="password" value="password"/>
        <label>Pseudo</label>
        <input type="text" name="pseudo"/> 
        <input type="submit" value="Login"/>
    </form>

</body>
</html>