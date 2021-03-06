<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compte </title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- NAVBAR -->

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- BURGER -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END OF BURGER -->
                <a href="#" class="navbar-brand"><img class="logo" src="logo.png" /></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-nav-demo">
                <ul class="nav navbar-nav">
                    <li><a href="main.html" class="fontBar"><i class="fas fa-home"></i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="inscriptUser.html" class="fontBar">
                            <i class="fas fa-user-plus"></i> S'Inscrire</a></li>
                    <li><a href="login.html" class="fontBar"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php

    // 1 recuperer id dans URL
    header('Location:compte.php?='.$id);
    // 2 importer le fichier
    require('connexion.instadog.php');
    // 3 creer objet connection
    $pseudo = new Connexion();
    // 4 appeler la fonction + stockage result ds variable
    if (isset($_GET['id'])){
        $userName= $profilCompte->selectUserById($_GET["id"]);
        if ($pseudo) {
            $result = intval($pseudo->id); //acceptation ou refus d'accès si id non valide ou forcé
        } else {
            echo "ERROR 404";
            die();
    }
    // 5 getter sur le userName stocké dans une nouvelle variable
    // 6 ajouter au href
     

    ?>
    <!-- TOP CORPUS -->
    <div class="container">
        <div class="jumbotron">
            <h1>Bienvenue</h1>
            <form action="connexion.instadog.php" method="GET"> 
            <p class="userName" href=""><?php echo $profilCompte->$pseudo;?></p>
            </form>
        </div>
        <div>
            <h3>Que souhaites-tu faire ?</h3>
        </div>
        <div class="container">
            <div class="row-wrap">
                <div class="col-md-2">
                    <label class="answer">Ajouter un Article</label>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-lg">Allez</button>
                </div>
                <div class="col-md-2">
                    <label class="answer">Ajouter un Toutou</label>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-lg">Ajouter</button>
                </div>

                <div class="col-md-2">
                    <label class="answer">Modifier mon Compte</label>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-lg">Modifier</button>
                </div>
            </div>
        </div>
        <div>
            <h3>La vie de mon Toutou</h3>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron posDog col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <label class="nameDetails" for="dogName">Barnabé</label>
                </div>
                <div class="col-lg-6 text-right col-xs-6">
                    <label class="raceDetails" for="race">Berger Allemand</label>
                </div>
            </div>
            <img src="http://www.hdbilder.eu/pictures/2013/0316/1/german-shepherd-dog-puppy-babies-faces-eyes-images-189390.jpg"
                class="img-responsive compte-chien-img col-lg-12" alt="shepherd">
            <div class="suppression">
                <button type="button" class="btn btn-warning btn-lg suppression">Supprimer le profil</button>
            </div>
        </div>
        <div>
            <div class="container">
                <form class="form-inline" action="/action_page.php">
                    <div class="form-group">
                        <label for="last_name">Pseudo :</label>
                        <input type="nick_name" class="form-control" id="nick_name" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">mot de passe:</label>
                        <input type="password" class="form-control" id="pwd" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">confirmer mot de passe:</label>
                        <input type="password" class="form-control" id="cpwd" required>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>