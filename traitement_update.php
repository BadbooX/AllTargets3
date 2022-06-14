<?php

include 'config.php';




$sql = "UPDATE projetuser_alltargets SET nom_projetuser, categorie_projetuser WHERE id_projetuser=?";

$titre = $_POST['updateTitle'];
$catego = $_POST['updateCate'];
$stmt= $bdd->prepare($sql);
$stmt->execute([$id]);
?>
