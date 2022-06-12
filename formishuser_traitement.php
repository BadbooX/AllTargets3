<?php

include 'config.php';
$_SESSION['logged'] = true;

if(isset($_POST['nameProjet']) && !empty($_POST['nameProjet'])
 && isset($_POST['linkProjet']) && !empty($_POST['linkProjet'])
 && isset($_POST['pseudoProjet']) && !empty($_POST['pseudoProjet'])
 && isset($_POST['categoProjet']) && !empty($_POST['categoProjet'])){
    echo "2";
    $nameProj = htmlspecialchars($_POST['nameProjet']);
    $linkProj = htmlspecialchars($_POST['linkProjet']);
    $pseudoProj = htmlspecialchars($_POST['pseudoProjet']);
    $categoProj = htmlspecialchars($_POST['categoProjet']);
    $maintenant = date('H:i:Y');
    $filename='';
    var_dump($_FILES);
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