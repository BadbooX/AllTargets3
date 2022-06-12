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


    $sql = $bdd->prepare('INSERT INTO `projetuser_alltargets`(`nom_projetuser`, `lien`, `image_projetuser`,`nomcreateur_projetuser`, `categorie_projetuser`) VALUES(?,?,?,?,?)');
    $sql->bindParam(1,$nameProj);
    $sql->bindParam(2,$linkProj);
    $sql->bindParam(3,$linkPicProj);
    $sql->bindParam(4,$PseudoProj);
    $sql->bindParam(5,$categoProj);
    $sql->execute();
    header('Location:landing.php?insert_err=succes');

}else{
    header('Location:landing.php?insert_err=fail');
}

?>