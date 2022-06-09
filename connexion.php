<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AllTargets - Accueil</title>
</head>
<body>
        
    <?php 
        include "navbar.php";
    ?>
    
    <h1 class="h1Connex d-flex justify-content-center align-items-center text-white">Connexion administrateur :</h1>
        <div class="container d-flex flex-column justify-content-center align-items-center mx-auto">
            <?php 
            /* Gestion des erreurs en get*/
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'mdp':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur: Mot de passe incorrect</strong>
                        </div>
                        <?php
                        break;

                    case 'identifiant':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur: Identifiant incorrect</strong>
                        </div>
                        <?php
                        break;
                    case 'inexistant':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur: Compte inexistant</strong>
                        </div>
                        <?php
                        break;
                }
            }
        ?>
            <form  id="formConnex" action="connexion_traitement.php" class="row g-3 d-flex flex-column justify-content-center mx-auto align-items-center" method="post">
                <div class="col-md-12">
                    <label for="nom" class="form-label text-white">Identifiant :</label>
                    <input type="text" name="pseudo" placeholder="Entrez votre Identifiant" class="form-control" id="nomAdmin" autocomplete="off" required>
                </div>
                <div class="col-md-12">
                    <label for="prenom" class="form-label text-white">Mot de passe :</label>
                    <input type="password" name="password" placeholder="Mot de passe" class="form-control" id="passwordAdmin" autocomplete="off" required>
                </div>
                <div class="col-md-12 d-flex justify-content-center mx-auto">
                        <button type="submit" class="btn btn-dark">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer, plus nouveau link github -->
    <footer>
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5 class="footertitle text-uppercase  font-weight-bold">Liens utiles</h5>
                <p>
                    <a href="index.php" id="linksfoot" class="text-white">Accueil<br></a>
                    <a href="connexion.php" id="linksfoot" class="text-white">Connexion<br></a>
                    <a href="https://github.com/BadbooX/AllTargets"><i class="logogit fa-brands fa-github"></i></a>
                </p>
            </div>
            
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto ">
                <h5 class="footertitle text-uppercase  font-weight-bold">Contact</h5>
                <p class="text-white">
                    <i class="footertitle fa-solid fa-house mr-3"></i> 31 Avenue de mézières
                </p>
                <p class="text-white">
                    <i class="footertitle fa-solid fa-phone mr-3 "></i> 06/74/26/54/15
                </p>
            </div>
        </div>
       
        <div class="row d-flex justify-content-center align-items-center text-align-center">
            <div class="col-md-7 ml-7 col-lg-8">
                <p class="copyright text-white">Copyright &copy 2022 Tous droits réservés par: Kévin Cotton
                </p>
            </div>
            
        </div>
    </div>
</footer>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>