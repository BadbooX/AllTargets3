<?php

include 'config.php';
$titre = $_POST['updateTitle'];
$catego = $_POST['updateCate'];



$sql = "UPDATE `projetuser_alltargets` SET `nom_projetuser`= $titre, `categorie_projetuser`= $catego WHERE id_projetuser=?";

$id = $_POST['id'];
$stmt= $bdd->prepare($sql);
$stmt->execute([$id]);
?>