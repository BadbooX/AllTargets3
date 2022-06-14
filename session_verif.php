<?php 
session_start();
if(!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    header('Location:connexion.php?login_err=session');
}
$login = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : '';
/* Si la session est inactive pendant 5 min alors l'user est déconnecté automatiquement */
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 3600)) {
    session_unset(); 
    session_destroy();
}
$_SESSION['start'] = time();