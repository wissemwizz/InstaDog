
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
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
    <div class="container">
    <h1>inscription</h1>
    
        <form action="formulaire-action.php" method="POST">


        <fieldset class="form-group">
            <label for="last_name">Nom</label>
            <input type="text" class="form-control" id="last_name" name="nomFamille" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" id="first_name" name="prenom" required>
        </fieldset>
        <fieldset class="form-group">
            <label for="last_name">Pseudo</label>
            <input type="text" class="form-control" id="nick_name" name="pseudo" required>
        </fieldset>
            <div class="form-group">
                <label for="pwd">mot de passe:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" required>
            </div>
            <div class="form-group">
                <label for="pwd">confirmer mot de passe:</label>
                <input type="password" class="form-control" id="cpwd" name="cpwd" required>
            </div>
            <div class="form-group">
                <label for="email">Addresse Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button href="main.html" class="btn btn-default">Back </button>
            <button type="submit" class="btn btn-default">Submit</button>

        </form>
    </div>
</body>

</html>