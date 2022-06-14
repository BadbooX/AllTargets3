<?php 
include "config.php";
$_SESSION['logged'] = true;

if(isset($_POST['creaPseudo']) && !empty($_POST['creaPseudo']) && isset($_POST['creaPassword']) && !empty($_POST['creaPassword'])
&& isset($_POST['creaAdmin']) && !empty($_POST['creaAdmin'])){
    $creaPseudo = htmlspecialchars($_POST['creaPseudo']);
    $creaPassword = htmlspecialchars($_POST['creaPassword']);
    $creaAdmin = htmlspecialchars($_POST['creaAdmin']);
    $creaPassword = hash('md5', $creaPassword); 

    
    $sql = "INSERT INTO user_alltargets (identifiant_user, psswd_user, isAdmin) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$creaPseudo,$creaPassword,$creaAdmin]);
    header('Location:landingAdmin.php?reg_err=succes');
    
}else{
    header('Location:landingAdmin.php?reg_err=unfiled');
}

