<?php

include 'config.php';




$sql = "UPDATE `projetuser_alltargets` SET `nom_projetuser`, `categorie_projetuser` WHERE `nom_projetuser`=? AND `categorie_projetuser`=?";

$titre = $_POST['updateTitle'];
$catego = $_POST['updateCate'];
$stmt= $bdd->prepare($sql);
$stmt->execute([$id]);
?>
