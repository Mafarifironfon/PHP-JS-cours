<html lang="fr">

    <!-- HEAD -->
    <?php
    $title="Acceuil";
    include_once 'head.php';
    ?>

    <body>
        <form action="login.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="admin"/>
            <label>Password</label>
            <input type="password" name="password" value="password"/>
            <input type="submit" value="Login"/>
        </form>

        <?php include_once 'bootstrap.php'; ?>
    </body>

</html>