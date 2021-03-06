<?php
require_once 'session_verif.php';
include 'config.php';
$_SESSION['logged'] = true;

if(isset($_POST['nameProjet']) && !empty($_POST['nameProjet'])
 && isset($_POST['linkProjet']) && !empty($_POST['linkProjet'])
 && isset($_POST['categoProjet']) && !empty($_POST['categoProjet'])){
    
    $nameProj = htmlspecialchars($_POST['nameProjet']);
    $linkProj = htmlspecialchars($_POST['linkProjet']);
    $pseudoProj = htmlspecialchars($_SESSION['pseudo']);
    $categoProj = htmlspecialchars($_POST['categoProjet']);
    $maintenant = date('d/m/Y');
    
    $filename='';
    
    if (isset($_FILES)){
                $file = $_FILES['linkPicProjet'];
                $filename = $file['name'];
                move_uploaded_file($file['tmp_name'],'assets/img/'.$filename); 
            }

            
    $sql = 'INSERT INTO `projetuser_alltargets`(`nom_projetuser`, `lien`, `image_projetuser`,`time_projetuser`,`nomcreateur_projetuser`, `categorie_projetuser`) VALUES(?,?,?,?,?,?)';
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$nameProj,$linkProj,$filename,$maintenant,$pseudoProj,$categoProj]);
    
    header('Location:landing.php?insert_err=succes');

}else{
    header('Location:landing.php?insert_err=fail');
}

?>