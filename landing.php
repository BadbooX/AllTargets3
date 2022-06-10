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
    
    <h1 class="titlelanding" text-white text-align-center>Bonjour <?php echo $login ?></h1>
    <p>Vous souhaitez publier un de vos projets ?</p>
    <div class="menu-container">
        <div class="menu-categories" >
            <button class="menu-category">
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
    </div>
    <?php
    include 'footeruser.php'; 
    ?>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>