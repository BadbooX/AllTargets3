<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=alltargets;', 'root', '');
    }
    catch(Exeption $e){
        die('Erreur' . $e->getMessage());
    }

    
