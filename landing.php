<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AllTargets - Home</title>
</head>
<body>
    <?php  
    require_once 'session_verif.php';
    include 'config.php';
    include 'navbaruser.php';
    
    ?>
    <div class="welcomelanding text-white d-flex flex-column justify-content-center align-items-center">
        <h1 class="titlelanding" text-white text-align-center>Bonjour <?php echo $login ?></h1>
        <p>Vous souhaitez publier l'un de vos projets ?</p>
    </div>
    
    <div class="menu-container">
        
        <div class="titlescards d-flex justify-content-center align-items-center mx-auto"><h2 class="text-white">Les projets</h2></div>
        <div class="menu-categories" >
            
            <button  class="menu-category ">
                <a href="#"><img class="picard" src="assets/img/maquette.png">Maquette</a>
            </button>
            <button class="menu-category">
                <a href="#"><img class="picard" src="assets/img/notavailable.png">Projet 2</a>
            </button>
            <button class="menu-category">
                <a  href="#"><img class="picard" src="assets/img/notavailable.png">Projet 3</a>
            </button>
            <button class="menu-category">
                <a  href="#"><img class="picard" src="assets/img/notavailable.png">Proj. futur</a>
            </button>
        </div>
        <div class="formishUser">
            <h2 class="titlecrudprod text-white">Créer un projet :</h2>
            <form action="crud.php" class="formuser d-flex justify-content-center align-items-center flex-column" method="post">
            <label for="" class="text-white" >Nom de projet</label>
            <input class="inputlanding" type="text" name="nameProjet" autocomplete="off" placeholder="Entrez un nom de projet" required>
            <label for="" class="text-white" >Lien du projet</label>
            <input class="inputlanding" type="text" name="linkProjet" autocomplete="off" placeholder="Entrez un lien" required>
            <label for="" class="text-white" >Image du projet</label>
            <input class="inputlanding" type="text" name="" autocomplete="off" placeholder="Lien de l'image du projet" required>
            <label for="" class="text-white" >Votre pseudo</label>
            <input class="inputlanding" type="text" name="" autocomplete="off" placeholder="Entrez votre pseudo" required>
            <label for="" class="text-white" >Catégorie</label>
            <input class="inputlanding" type="text" name="" autocomplete="off" placeholder="Quel est sa catégorie" required>
            <button type="submit" class="btnFormUser">Envoyer</button>
            </form>
        </div>
    </div>
    <?php
    include 'footeruser.php'; 
    ?>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>