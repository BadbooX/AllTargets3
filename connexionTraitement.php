<?php 
    session_start();
    include "config.php";

    if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['password'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo_admin, mdp_admin FROM  WHERE pseudo_admin=?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();
        if($row == 1)
        {
            if($data['pseudo_admin'] === $pseudo)
            {
                $password = hash('md5', $password); 
                if($data['mdp_admin'] === $password)
                {
                    $_SESSION['admin'] = $data['pseudo'];
                    header('Location:landing.php');

                }else header('Location:connexion.php?login_err=mdp');
            }else header('Location:connexion.php?login_err=identifiant');
        }else header('Location:connexion.php?login_err=inexistant');
    }else header('Location:connexion.php');
    
?>