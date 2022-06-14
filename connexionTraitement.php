<?php 
    
    include "config.php";
    $_SESSION['logged'] = true;

    if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['password'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);
        

        $check = $bdd->prepare('SELECT identifiant_user, psswd_user, isAdmin FROM user_alltargets WHERE identifiant_user=?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();
     
        if($row == 1)
        {
            if($data['identifiant_user'] === $pseudo)
            {
                $password = hash('md5', $password); 
                
                if($data['psswd_user'] === $password)
                {
                    if($data['isAdmin'] != 0){
                        session_start();
                        $_SESSION['pseudo'] = $pseudo;
                        $_SESSION['role'] = 1;
                        $_SESSION['logged'] = true;
                        header('Location:landingAdmin.php');
                        
                    }else{
                        session_start();
                        $_SESSION['pseudo'] = $pseudo;
                        $_SESSION['role'] = 0;
                        $_SESSION['logged'] = true;
    
                        header('Location:landing.php');
                    }
                    

                }else header('Location:connexion.php?login_err=mdp');
            }else header('Location:connexion.php?login_err=identifiant');
        }else header('Location:connexion.php?login_err=inexistant');
    }else header('Location:connexion.php');
    
