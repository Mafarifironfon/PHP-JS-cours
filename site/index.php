<?php session_start();
// phpinfo();
?>

<html lang="fr">
<?php include_once'head.php' ?>

<body>
    <div class="container">
        <div class="row p-3 bg-dark text-white">
            <div class="col-12">
                <h1 class="text-center">Welcome to R'KAMA POSTS</h1>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-12 d-flex justify-content-center">
                <form action="login.php" method="POST">
                    <label>Username</label>
                    <input type="text" name="username" value="" />
                    <label>Password</label>
                    <input type="password" name="password" value="password" />
                    <label>Pseudo</label>
                    <input type="text" name="pseudo" />
                    <input type="submit" name="login" value="Login" />
                    <input type="submit" name="rec" value="S'inscrire" />
                </form>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/cok4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/cok2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/cok3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php include_once 'bootstrap.php'?>
</body>

</html>