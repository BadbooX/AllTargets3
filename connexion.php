<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AllTargets - Connexion</title>
</head>
<body>
        
    <?php 
        
        include "navbar.php";
    ?>
    
    
    <div class="connexContainer d-flex flex-column justify-content-center align-items-center mx-auto">
        <h2 class="h1Connex d-flex justify-content-center align-items-center text-white">Connexion :</h2>
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
                case 'session':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur: Vous n'êtes pas connecté !</strong>
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
                case 'succesdisco':
                    ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Succès: Déconnexion réussi</strong>
                    </div>
                    <?php
                    break;
            }
        }
        ?>
        <form action="connexionTraitement.php" method="post" id="formConnex" class="row g-3 d-flex flex-column justify-content-center mx-auto align-items-center">
            <div class="col-md-12">
                <label for="nom" class="form-label text-white">Identifiant :</label>
                <input type="text" name="pseudo" id='prenom' placeholder="Entrez votre Identifiant" class="form-control" id="nomAdmin" autocomplete="off" required>
            </div>
            <div class="col-md-12">
                <label for="prenom" class="form-label text-white">Mot de passe :</label>
                <input type="password" name="password"id='password'placeholder="Mot de passe" class="form-control" id="passwordAdmin" autocomplete="off" required>
            </div>
            <div class="col-md-12 d-flex justify-content-center mx-auto">
                    <button type="submit" id='login' class="btn btn-dark">Envoyer</button>
            </div>
        </form>
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
                        <a href="https://github.com/BadbooX/AllTargets3"><i class="logogit fa-brands fa-github"></i></a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto ">
                    <h5 class="footertitle text-uppercase  font-weight-bold">Contact</h5>
                    <p class="text-white">
                        <i class="footertitle fa-solid fa-house mr-3"></i> 2 place du marquis
                    </p>
                    <p class="text-white">
                        <i class="footertitle fa-solid fa-at mr-3"></i> adresse@exemple.com
                    </p>
                    <p class="text-white">
                        <i class="footertitle fa-solid fa-phone mr-3 "></i> 06/49/26/27/32
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
    
    
    <script src="https://kit.fontawesome.com/1f7ab514ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</body>
</html>