<?php

include 'config.php';




$sql = "UPDATE `projetuser_alltargets` SET `id_projetuser`='[value-1]',`nom_projetuser`='[value-2]',`lien`='[value-3]',`image_projetuser`='[value-4]',`time_projetuser`='[value-5]',`nomcreateur_projetuser`='[value-6]',`categorie_projetuser`='[value-7]' WHERE ";

$id = $_POST['id'];
$stmt= $bdd->prepare($sql);
$stmt->execute([$id]);
?>