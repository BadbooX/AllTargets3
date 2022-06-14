<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AllTargets - Administrate</title>
</head>
<body>
    <?php  
    require_once 'session_verif.php';
    include 'config.php';
    include 'navbaradmin.php';
    
    ?>
    <div class="welcomelanding text-white d-flex flex-column justify-content-center align-items-center">
        <h1 class="titlelanding" text-white text-align-center>Bonjour <?php echo $login ?></h1>
        <p>Publier/modifier/supprimer un projet.<br>Créer un utilisateur ?</p>
    </div>
    <?php 
    if(isset($_GET['login_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);
        switch($err)
        {
            case 'succes':
                ?>
                <div class="alert alert-succes">
                    <strong>Succès: Création de profil réussi !</strong>
                </div>
                <?php
                break;
            case 'succes':
                ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Erreur: Champs non remplis</strong>
                </div>
                <?php
                break;
        }
    }
    ?>
    <div class="createUser d-flex flex-column justify-content-center align-items-center mx-auto">
        <h2 class="titlecrudprod text-white d-flex justify-content-center">Créer un utilisateur :</h2>
        <form  id="formConnex" action="inscription.php" class="row g-3 d-flex flex-column justify-content-center mx-auto align-items-center" method="post">
            <div class="col-md-12">
                <label for="nom" class="form-label text-white">Identifiant :</label>
                <input type="text" name="creaPseudo" placeholder="Entrez un Identifiant" class="form-control" id="nomAdmin" autocomplete="off" required>
            </div>
            <div class="col-md-12">
                <label for="prenom" class="form-label text-white">Mot de passe :</label>
                <input type="password" name="creaPassword" placeholder="Mot de passe" class="form-control" id="passwordAdmin" autocomplete="off" required>
            </div>
            <div class="col-md-12">
                <label for="prenom" class="form-label text-white">Admin : 0/1</label>
                <input type="password" name="creaAdmin" placeholder="Ce compte est admin ?" class="form-control" id="passwordAdmin" autocomplete="off" required>
            </div>
            <div class="col-md-12 d-flex justify-content-center mx-auto">
                    <button type="submit" class="btn btn-dark">Envoyer</button>
            </div>
        </form>   
    </div>
    
    <div class="menu-container">
        <div class="titlescards d-flex justify-content-center align-items-center mx-auto"><h2 class="text-white">Les projets :</h2></div>
        <div class="menu-categoro" >
            
            <?php 
            $stmt = $bdd->query("SELECT * FROM projetuser_alltargets");
            while ($row = $stmt->fetch()) {
              echo "<div><button  class='menu-categori'><a href='".$row['lien']."'><img class='picard' src='assets/img/". $row['image_projetuser']  . "'>". $row['nomcreateur_projetuser']."     ".$row['nom_projetuser']."  <br>   ".$row['time_projetuser']."    ".$row['categorie_projetuser'].""."</a></div><div class='boxCommand text-align align-item-center justify-content-center'>
              <button class='btn text-white' onclick='delete_projet(event.target.id)' id='". $row['id_projetuser']."'>Supprimer</button><br><button class='btn text-white'>Modifier</button></button><form ><input class='form-control mb-2' type='text' name='updateTitle' autocomplete='off' placeholder='Titre' required><input class='form-control mb-2' type='text' name='updateCate' autocomplete='off' placeholder='Catégorie' required><button type='submit'onclick='update_projet(event.target.id)' class='btn btn-dark'>Envoyer</button></form></div>";
            }
            ?>
            
        </div>
       

        <div class="formishUser">
            <h2 class="titlecrudprod text-white d-flex justify-content-center">Créer un projet :</h2>
            <form enctype="multipart/form-data" action="formishuser_traitement.php" class="formuser d-flex justify-content-center align-items-center flex-column" method="post">
                <label for="" class="form-label text-white" >Nom de projet</label>
                <input class="form-control mb-2" type="text" name="nameProjet" autocomplete="off" placeholder="Entrez un nom de projet" required>
                <label for="" class="form-label text-white" >Lien du projet</label>
                <input class="form-control mb-2" type="text" name="linkProjet" autocomplete="off" placeholder="Entrez un lien" required>
                <label for="" class="form-label text-white" >Image du projet</label>
                <input class="form-control mb-2" type="file" name="linkPicProjet"  autocomplete="off" placeholder="Lien de l'image du projet" required>
                <label for="" class="form-label text-white" >Catégorie</label>
                <input class="form-control mb-2" type="text" name="categoProjet" autocomplete="off" placeholder="Quel est sa catégorie" required>
                <button type="submit" class="btn btn-dark">Envoyer</button>
            </form>
            
        </div>
    </div>
    <?php
    include 'footeradmin.php'; 
    ?>
    
    <script src="https://kit.fontawesome.com/1f7ab514ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function delete_projet(id){
            $.post('traitement_delete.php', {
                id: id}, 
                
                function(returnedData){
                    
                location.reload();

            });
        }
        function update_projet(event){
            $.post('traitement_update.php', {
                id: id}, 
                
                function(returnedData){
                    console.log(returnedData);

                    location.reload();

            });
        }
        </script>
</body>
</html>