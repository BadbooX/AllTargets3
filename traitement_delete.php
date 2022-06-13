<?php

include 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM projetuser_alltargets WHERE id_projetuser=?";
$stmt= $bdd->prepare($sql);
$stmt->execute([$id]);

?>