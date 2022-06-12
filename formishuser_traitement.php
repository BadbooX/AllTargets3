<?php
include 'config.php';
$_SESSION['logged'] = true;

if(isset($_POST['nameProjet']) && !empty($_POST['nameProjet'])
 && isset($_POST['linkProjet']) && !empty($_POST['linkProjet'])
 && isset($_POST['linkPicProjet']) && !empty($_POST['linkPicProjet'])
 && isset($_POST['pseudoProjet']) && !empty($_POST['pseudoProjet'])
 && isset($_POST['categoProjet']) && !empty($_POST['categoProjet'])){

    $nameProj = htmlspecialchars($_POST['nameProjet']);
    $linkProj = htmlspecialchars($_POST['linkProjet']);
    $linkPicProj = htmlspecialchars($_POST['linkPicProjet']);
    $pseudoProj = htmlspecialchars($_POST['pseudoProjet']);
    $categoProj = htmlspecialchars($_POST['categoProjet']);


    $check = $bdd->prepare('INSERT INTO `projetuser_alltargets`(`id_projetuser`, `nom_projetuser`, `lien`, `image_projetuser`, `time_projetuser`, `nomcreateur_projetuser`, `categorie_projetuser`) VALUES(?,?,?,?,?,?,?)');
    $check->execute(array());
    header('Location:landing.php');

}else{
    header('Location:landing.php');
}

?>