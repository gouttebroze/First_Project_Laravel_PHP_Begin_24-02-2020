<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/<?= $css ?>">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="styles/stylecommun.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
        <!--<?php include("navView.php") ?>-->
        <nav class="navbar navbar-expand-lg">

            <ul class="navbar-nav">
                  <li class="active">
                      <a href="usersController.php" class="nav-link">Home</a>
                  </li>
        
                  <li class="nav-item">
                        <a href="usersController.php" class="nav-link">Connexion</a>
                  </li>
        
                  <li class="nav-item">
                      <a href="productsController.php" class="nav-link">Vinyls</a>
                  </li>
                    
                  <li class="nav-item">
                      <a href="productsController.php" class="nav-link">CDs</a>
                  </li>
        
                  <li class="nav-item">
                      <a href="productsController.php" class="nav-link">Graphzines</a>
                  </li>
                        
                  <li class="nav-item">
                      <a href="panierController.php" class="nav-link">Panier</a>
                  </li>
                    
                  <li class="nav-item">
                      <a href="paiement.html" class="nav-link">Paiement</a>
                  </li>

                    
                </ul>
            
    </nav>

    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Alternative Vintage Arts & Rock
                </div>

               
            </div>
        </div>
        <?php include("header.php") ?>
        <?php include("search.php") ?>
        <?php include("connexionView.php") ?>
        
        <?= $content ?>
        <?php include("footer.php") ?>
    </body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>